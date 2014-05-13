<?php
/**
 * Meta Box Library File
 *
 * @package Leaven_Framework
 * @subpackage Library
 */
namespace Leaven\Lib\MetaBox;

use Leaven\Lib\MetaBox\MetaBoxArguments;

/**
 * Meta Box
 *
 * @package Leaven Framework
 * @author Tom Jenkins <tom@techguytom.com>
 * @version 0.3
 */
class MetaBoxWp extends MetaBoxArguments
{
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
            $this->getId(),
            $this->getTitle(),
            $this->getCallback(),
            $this->getPostType(),
            $this->getContext(),
            $this->getPriority(),
            $this->getCallbackArguments()
        );

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
    public function getSavedMetaData($postId)
    {
        $metaData = new \stdClass;

        foreach ($this->getFieldNames() as $fieldName) {
            $metaData->$fieldName = get_post_meta($postId, $fieldName, true);
        }

        return $metaData;
    }

    /**
     * SaveMetaData
     *
     * @param int $postId The post id associated with the saved meta
     * @param obj $metaData The post request data of the associated post
     * @return int
     */
    public function saveMetaData($postId, $metaData)
    {
        if (!isset($metaData->nonceValue) 
            && !wp_verify_nonce($metaData->nonceValue, $this->getNonceAction())
        ) {
            return $postId;
        }

        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $postId;
        }

        if ($metaData->postType != $this->getPostType()) {
            if (!current_user_can('edit_post', $postId)
                || !current_user_can('edit_page', $postId)
            ) {
            return $postId;
            }
        }

        foreach ($metaData->fieldData as $key => $value) {
            $input = sanitize_text_field($value);
            update_post_meta($postId, $key, $value);
        }
    }
}
