<?php
/**
 * Meta Box Library File
 *
 * @package TGT_Framework
 * @subpackage Library
 */
namespace Nerdery\Lib;

/**
 * Meta Box
 *
 * @package WordPress
 * @author Tom Jenkins <tom@tgtdesign.com>
 * @version 1.0
 */
class MetaBox
{
    /**
     * ID
     *
     * @var int
     */
    private $_id;

    /**
     * Title
     *
     * @var string
     */
    private $_title;

    /**
     * Callback
     *
     * @var string
     */
    private $_callback;

    /**
     * PostType
     *
     * @var string
     */
    private $_postType;

    /**
     * Context
     *
     * @var string
     */
    private $_context;

    /**
     * Priority
     *
     * @var string
     */
    private $_priority;

    /**
     * Callback Arguments
     *
     * @var array
     */
    private $_callbackArguments;

    /**
     * Fields
     *
     * @var array
     */
    private $_fields;

    /**
     * Nonce Name
     *
     * @var string
     */
    private $_nonceName;

    /**
     * Array Data Pointer
     *
     * @var int
     */
    private $_arrayDataPointer;

    /**
     * Constructer
     *
     * Add WordPress Hook to the Save post action
     *
     * @return void
     */
    public function __construct()
    {
        add_action('save_post', array($this, 'saveMetaData'), 5, 2);
    }

    /**
     * Set Id
     *
     * @param str $id The CSS ID to use
     * @return void
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * SetTitle
     *
     * @param str $title The title of the meta box
     * @return void
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * SetCallback
     *
     * @param str $callback The callback function to handle display of the meta 
     * box
     * @return void
     */
    public function setCallback($callback)
    {
        $this->_callback = $callback;
    }

    /**
     * SetPostType
     *
     * @param str $postType The registered post type to display the meta box on
     * @return void
     */
    public function setPostType($postType)
    {
        $this->_postType = $postType;
    }

    /**
     * SetContext
     *
     * @param str $context The location of the page to display the meta box
     * @return void
     */
    public function setContext($context)
    {
        $this->_context = $context;
    }

    /**
     * SetPriority
     *
     * @param str $priority Also aids on the display location of the meta box
     * @return void
     */
    public function setPriority($priority)
    {
        $this->_priority = $priority;
    }

    /**
     * SetCallbackArguments
     *
     * @param array $callbackArguments Arguments to pass to the callback 
     * function
     * @return void
     */
    public function setCallbackArguments($callbackArguments)
    {
        $this->_callbackArguments = $callbackArguments;
    }

    /**
     * SetFields
     *
     * Once the fields are set, trigger a save on the meta fields for use when 
     * saving the post
     *
     * @param array $fields The field ID's to display on the meta box
     * @return void
     */
    public function setFields($fields)
    {
        if (!array($fields)) {
            $fields = (array) $fields;
        }

        $this->_fields = $fields;

        $this->saveMetaFields();
    }

    /**
     * SetNonceName
     *
     * Once the name is set, trigger a save on the meta fields for use when 
     * saving the post
     *
     * @param str $nonceName The string used to seed the nonce
     * @return void
     */
    public function setNonceName($nonceName)
    {
        $this->_nonceName = $nonceName;

        $this->saveMetaFields();
    }

    /**
     * GetNonce
     *
     * @param str $nonceName The string used to seed the nonce
     * @return str The formatted HTML for display
     */
    public function getNonce($nonceName)
    {
        $this->setNonceName($nonceName);

        return wp_nonce_field(-1, $nonceName, true, false);
    }

    /**
     * CreateMetaBox
     *
     * Call the WordPress function that will create the meta box
     *
     * @return void
     */
    public function createMetaBox()
    {
        add_meta_box(
            $this->_id,
            $this->_title,
            $this->_callback,
            $this->_postType,
            $this->_context,
            $this->_priority,
            $this->_callbackArguments
        );

    }

    /**
     * SaveMetaFields
     *
     * Save the meta fields for the designated meta box to the WordPress 
     * options table.
     *
     * @return void
     */
    public function saveMetaFields()
    {
        $savedFields = maybe_unserialize(get_option('nerderyMetaFields'));

        if (isset($this->_fields) && isset($this->_nonceName)) {
            if ($savedFields) {
                for ($x = 0; $x < count($savedFields); $x++) {
                    if ($this->_postType === $savedFields[$x]['postType']) {
                        $savedFields[$x]['fields']    = $this->_fields;
                        $savedFields[$x]['nonceName'] = $this->_nonceName;
                    }
                }
            } else {
                $savedFields = array(
                    array(
                        'postType'  => $this->_postType,
                        'fields'    => $this->_fields,
                        'nonceName' => $this->_nonceName,
                    ),
                );

            }
            update_option('nerderyMetaFields', maybe_serialize($savedFields));
        }
    }

    /**
     * GetMetaFields
     *
     * Get the appropriate meta fields for the meta box added to the particular 
     * post type.
     *
     * @param string $postType The name of the post type the meta data belongs 
     * to
     *
     * @return void
     */
    public function getMetaFields($postType)
    {
        $metaFields = maybe_unserialize(get_option('nerderyMetaFields'));
        if ($metaFields) {
            for ($x = 0; $x < count($metaFields); $x++) {
                if ($postType === $metaFields[$x]['postType']) {
                    $this->_arrayDataPointer = $x;
                    return $metaFields;
                }
            }
        } else {
            return null;
        }
    }

    /**
     * GetMetaData
     *
     * Retrieve the post meta data for the meta box
     *
     * @param int $postId The post id to retrieve data for
     * @param str $postType The post type associated with the meta box
     *
     * @return array
     */
    public function getMetaData($postId, $postType)
    {
        $metaData   = array();
        $metaFields = $this->getMetaFields($postType);
        foreach ($metaFields as $metafield) {
            foreach ($metafield['fields'] as $field) {
                $metaData[] = maybe_unserialize(get_post_meta($postId, 'nerdery-' . $field, true));
            }
        }

        return $metaData;
    }

    /**
     * SaveMetaData
     *
     * @param int $postId The post id associated with the saved meta
     * @param obj $post The post object of the associated post
     * @return int
     */
    public function saveMetaData($postId, $post)
    {
        $metaFields = $this->getMetaFields($_POST['post_type']);

        if (!$metaFields) {
            return $postId;
        }

        if (!isset($_POST[$metaFields[$this->_arrayDataPointer]['nonceName']])
            && !wp_verify_nonce(
                $_POST[$metaFields[$this->_arrayDataPointer]['nonceName']],
                $metaFields[$this->_arrayDataPointer]['nonceName']
            )
        ) {
            return $postId;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $postId;
        }

        if ($metaFields[$this->_arrayDataPointer]['postType'] == $_POST['post_type']) {
            if (!current_user_can('edit_post', $postId)
                || !current_user_can('edit_page', $postId)
            ) {
                    return $postId;
                }
        }

        foreach ($metaFields[$this->_arrayDataPointer]['fields'] as $field) {
            $input = sanitize_text_field($_POST[$field]);
            update_post_meta($postId, 'nerdery-' . $field, $input);

        }

    }

}
