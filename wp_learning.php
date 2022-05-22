<?php
/**
 * @package wp_learning
 */

 /**
  * Plugin Name: WP Learning
  * Plugin URI: https://wordpress.org/plugins/wp-learning/
  * Description: A simple plugin to create a learning platform.
  * Version: 1.0.0
  * Author: Musharaf Hossain
  * Author URI:
  * License: GPLv2 or later
  * Text Domain: wp_learning
  * Domain Path: /languages
  */

  // if ( ! defined( 'ABSPATH' )){
  //   die;
  // }
  // if( ! function_exists( 'add_action' )){
    //   echo 'hey, you can\t access this file, you are silly man';
    // }

defined( 'ABSPATH' ) or die('hey you can\t access this file');

class WpLearning
{
  function __construct( string $arg)
  {
    echo $arg;
  }
}

if (class_exists('WpLearning')){
  $love = __("love","wp_learning");
  $wplearning = new WpLearning($love); 
}