<?php
/**
 * Plugin Name: Leaven Plugin Framework
 * Plugin URI: http://techguytom.com
 * Description: Base files for WordPress Plugin Framework
 * Version: 0.5
 * Author: Tom Jenkins <tom@techguytom.com>
 * Author URI: http://techguytom.com
 */

require_once 'LeavenPlugin.php';

$leavenPlugin = new LeavenPlugin;

$leavenPlugin->setPath(realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

spl_autoload_register(array($leavenPlugin, 'autoloader'));

register_activation_hook(__FILE__, array($leavenPlugin, 'pluginActivation'));
register_deactivation_hook(__FILE__, array($leavenPlugin, 'pluginDeactivation'));

$leavenPlugin->run();
