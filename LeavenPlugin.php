<?php
/**
 *  Controlls staging of plugin interactions
 *  
 *  @package WordPress
 */

/**
 * LeavenPlugin
 *
 * Staging class for Plugin
 *
 * @package WordPress
 * @author Tom Jenkins <tom@techguytom.com>
 * @version 0.4
 */
class LeavenPlugin
{
    /**
     * _path
     *
     * @var string
     */
    private $path;

    /**
     * setPath
     *
     * @param str $path The directory path of the plugin
     * @return void
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * getPath
     *
     * @return void
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * run
     *
     * Add registers here using namespace via the controller autoloader
     *
     * @return void
     */
    public function run()
    {
        // Examples
        //$scripts = new Leaven\Controllers\LoginHeaderScriptsController('LoginHeaderScripts', $this->getPath());

        //add_action('wp_enqueue_scripts', array($scripts, 'enqueueScripts'));
        //add_filter('genesis_do_nav', array($login, 'logInHeader'), 3, 10);
    }

    /**
     * pluginActivation
     *
     * Add any specific activation needs per site build here
     *
     * @return void
     */
    public function pluginActivation()
    {
        global $wp_version;
        if (version_compare($wp_version, "3.5", "<")) {
            deactivate_plugins(basename(__FILE__));
            wp_die("This plugin requires Wordpress version 3.5 or higher.");
        }
    }

    /**
     * pluginDeactivation
     *
     * Add any necessary cleanup needed at plugin deactivation here
     *
     * @return void
     */
    public function pluginDeactivation()
    {

    }

    /**
     * autoLoader
     *
     * @param str $className
     * @return fileName
     */
    public function autoLoader($className)
    {
        $filename = str_replace('\\', '/', $className) . '.php';
        if (file_exists($this->path . $filename)) {
            require_once $this->path . $filename;
        }
    }
}
