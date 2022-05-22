<?php

/**
 * Trigger this file on plugin uninstall
 * @package wplearning
 */

 if( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
   die();
 }

 //clear database stored data

//  $books = get_posts( array( 'post_type' => 'books' , 'numberposts' => -1) );

//  foreach ($books as $book) {
//    wp_delete_post( $book->ID, true );
//  }

// Access the database via SQL
global $wpdb;

$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'books'" );
$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN ( SELECT id FROM wp_posts ) " );
$wpdb->query( "DELETE FROM wp_trem_relationships WHERE object_id NOT IN ( SELECT id FROM wp_posts )" );