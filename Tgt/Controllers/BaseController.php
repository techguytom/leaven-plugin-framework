<?php
/**
 * Base Controller Class File
 *
 * Provides view routing and render function
 *
 * @package TGT_Framework
 * @subpackage Controllers
 */

namespace Tgt\Controllers;

/**
 * BaseController
 *
 * Parent controller for linking to the WordPress WP_Widget class and for 
 * handling view output functions
 *
 * @package  WordPress
 * @author Tom Jenkins <tom@tgtdesign.com>
 * @version 1.0 
 */
class BaseController
{
    /**
     * _controllerName
     *
     * Holds the name of the current controller for file paths
     *
     * @var string
     */
    private $controllerName;

    /**
     * _path
     *
     * Holds the current path
     *
     * @var string
     */
    private $path;
    
    /**
     * __construct
     *
     * @param string $controllerName Controller name
     * @return void
     */
    public function __construct($controllerName, $path)
    {
        $this->controllerName = $controllerName;
        $namespacePath = str_replace("\\Controllers", "/", __NAMESPACE__);
        $this->path = $path . $namespacePath . "Views";
    }

    /**
     * getViewFolder
     *
     * return path for the associate view needed
     *
     * @return void
     */
    public function getViewFolder()
    {
        return $this->path . DIRECTORY_SEPARATOR . $this->controllerName;
    }

    /**
     * render
     *
     * include the proper view file related to the calling controller
     *
     * @param string $view The name of the view file without extension
     * @param object $data The data to be passed to the view
     * @return void
     */
    public function render($view, $data)
    {
        include $this->getViewFolder() . DIRECTORY_SEPARATOR . $view . '.php';

    }
}
