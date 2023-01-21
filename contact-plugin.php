<?php
/**
 * Plugin Name: Contact-Plugin
 * Plugin URI: https://github.com/imonweb/contact-plugin
 * Description: Contact-Plugin
 * Author: Imon
 * Author URI: https://www.imonweb.co.uk
 * Text-Domain: contact-plugin
 * Version: 0.1.0
 * License: GPL2
 * License URL: https://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: contact-plugin
 **/

if( !defined('ABSPATH') )
{
  die('You cannot be here!');
}

if(!class_exists('ContactPlugin')){

 
  class ContactPlugin {

    public function __construct()
    {
      define('MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
      require_once( MY_PLUGIN_PATH . '/vendor/autoload.php');
    }

    public function initialize()
    {
      include_once( MY_PLUGIN_PATH . 'includes/utilities.php');
      include_once( MY_PLUGIN_PATH . 'includes/options-page.php');
      include_once( MY_PLUGIN_PATH . 'includes/contact-form.php');
    }

  }

  $contactPlugin = new ContactPlugin;
  $contactPlugin->initialize();
  
}