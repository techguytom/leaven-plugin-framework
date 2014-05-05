<?php
/**
 * MetaBox.php
 */

namespace Nerdery\Lib\MetaBox;

/**
 * MetaBox
 *
 * @package TGT Framework
 * @author Tom Jenkins <tjenkins@nerdery.com>
 * @version 0.8
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
