<?php
/**
 * MetaBox.php
 */

namespace Leaven\Lib\MetaBox;

/**
 * MetaBox
 *
 * @package Leaven Framework
 * @author Tom Jenkins <tom@techguytom.com>
 * @version 0.3
 */
interface MetaBox
{

    /**
     * __construct
     *
     * @param string $path
     * @param MetaBox $metaBox
     * @return void
     */
    public function __construct($path, MetaBoxWp $metaBox);

    /**
     * addMetaBox
     *
     * Register a Member Upoads meta box with WordPress
     *
     * @return void
     */
    public function addMetaBox($post);

    /**
     * enqueueAdminScripts
     *
     * @return void
     */
    public function enqueueAdminScripts();

    /**
     * saveMetaBox
     *
     * @param integer $postId
     * @return void
     */
    public function saveMetaBox($postId);

    /**
     * displayMetaBox
     *
     * @param object $post
     * @return void
     */
    public function displayMetaBox($post);
}
