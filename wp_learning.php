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


defined( 'ABSPATH' ) or die('hey you can\t access this file');

class WpLearning
{

  function __construct()
  {
    add_action( 'init',[$this, 'custom_post_type'] );
  }


  public function activate()
  {
    $this->custom_post_type();
    // flush_rewrite_rules( );
  }

  public function deactivate()
  {
    // flush_rewrite_rules(  );
  }


  //custom post type
  public function custom_post_type()
  {
    register_post_type( 
      'books',[
        'labels' => [

          'name' => __( 'Books', 'wp_learning' ),
        ],
        'public' => true,
          
      ] );
  }

}

if (class_exists('WpLearning')){

  $wplearning = new WpLearning(); 

}

//plugin activated
register_activation_hook( __file__,array( $wplearning, "activate" ) );

//plugin deactivated
register_deactivation_hook( __file__, array( $wplearning, "deactivate" ) );
