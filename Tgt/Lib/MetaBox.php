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
    private $id;

    /**
     * Title
     *
     * @var string
     */
    private $title;

    /**
     * Callback
     *
     * @var string
     */
    private $callback;

    /**
     * PostType
     *
     * @var string
     */
    private $postType;

    /**
     * Context
     *
     * @var string
     */
    private $context;

    /**
     * Priority
     *
     * @var string
     */
    private $priority;

    /**
     * Callback Arguments
     *
     * @var array
     */
    private $callbackArguments;

    /**
     * Fields
     *
     * @var array
     */
    private $fields;

    /**
     * Nonce Name
     *
     * @var string
     */
    private $nonceName;

    /**
     * Array Data Pointer
     *
     * @var int
     */
    private $arrayDataPointer;

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
        $this->id = $id;
    }

    /**
     * SetTitle
     *
     * @param str $title The title of the meta box
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
        $this->callback = $callback;
    }

    /**
     * SetPostType
     *
     * @param str $postType The registered post type to display the meta box on
     * @return void
     */
    public function setPostType($postType)
    {
        $this->postType = $postType;
    }

    /**
     * SetContext
     *
     * @param str $context The location of the page to display the meta box
     * @return void
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * SetPriority
     *
     * @param str $priority Also aids on the display location of the meta box
     * @return void
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
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
        $this->callbackArguments = $callbackArguments;
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

        $this->fields = $fields;

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
        $this->nonceName = $nonceName;

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
            $this->id,
            $this->title,
            $this->callback,
            $this->postType,
            $this->context,
            $this->priority,
            $this->callbackArguments
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

        if (isset($this->fields) && isset($this->nonceName)) {
            if ($savedFields) {
                for ($x = 0; $x < count($savedFields); $x++) {
                    if ($this->postType === $savedFields[$x]['postType']) {
                        $savedFields[$x]['fields']    = $this->fields;
                        $savedFields[$x]['nonceName'] = $this->nonceName;
                    }
                }
            } else {
                $savedFields = array(
                    array(
                        'postType'  => $this->postType,
                        'fields'    => $this->fields,
                        'nonceName' => $this->nonceName,
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
                    $this->arrayDataPointer = $x;
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
        $metaFields = $this->getMetaFields($POST['post_type']);

        if (!$metaFields) {
            return $postId;
        }

        if (!isset($POST[$metaFields[$this->arrayDataPointer]['nonceName']])
            && !wp_verify_nonce(
                $POST[$metaFields[$this->arrayDataPointer]['nonceName']],
                $metaFields[$this->arrayDataPointer]['nonceName']
            )
        ) {
            return $postId;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $postId;
        }

        if ($metaFields[$this->arrayDataPointer]['postType'] == $POST['post_type']) {
            if (!current_user_can('edit_post', $postId)
                || !current_user_can('edit_page', $postId)
            ) {
                    return $postId;
                }
        }

        foreach ($metaFields[$this->arrayDataPointer]['fields'] as $field) {
            $input = sanitize_text_field($POST[$field]);
            update_post_meta($postId, 'nerdery-' . $field, $input);

        }

    }

}
