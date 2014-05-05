<?php
/**
 * Plugin Name: TGT Plugin Framework
 * Plugin URI: http://techguytom.com
 * Description: Base files for WordPress Plugin Framework
 * Version: 0.3
 * Author: Tom Jenkins <tom@techguytom.com>
 * Author URI: http://techguytom.com
 */

require_once 'TgtPlugin.php';

$tgtPlugin = new Tgt\TgtPlugin;

$tgtPlugin->setPath(realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

spl_autoload_register(array($tgtPlugin, 'autoloader'));

register_activation_hook(__FILE__, array($tgtPlugin, 'pluginActivation'));
register_deactivation_hook(__FILE__, array($tgtPlugin, 'pluginDeactivation'));

$tgtPlugin->run();
