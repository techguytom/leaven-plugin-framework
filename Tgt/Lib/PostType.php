<?php
/**
 * Post Type Class
 *
 * @package TGT_Framework
 * @subpackage Library
 */
namespace Nerdery\Lib;

/**
 * PostType
 *
 * @package TGT_Framework
 * @author Tom Jenkins <tom@tgtdesign.com>
 * @version 1.0
 */
class PostType
{
    /**
     * Labels
     *
     * @var array
     */
    private $labels;

    /**
     * Options
     *
     * @var array
     */
    private $options;

    /**
     * SetLabels
     *
     * @param arr $value An array of label values to use in post type 
     * registration
     *
     * @return void
     */
    public function setLabels($value)
    {
        $this->labels = $value;
    }

    /**
     * SetOptions
     *
     * @param array $value The options array for the post type setup
     * @return void
     */
    public function setOptions($value)
    {
        $this->options = $value;
    }

    /**
     * RegisterPostType
     *
     * Register the post type with WordPress
     *
     * @param str $slug The url slug for the post type
     * @return obj
     */
    public function registerPostType($slug)
    {
        $args = array_merge($this->labels, $this->options);
        $postType = register_post_type($slug, $args);

        return $postType;
    }

}
