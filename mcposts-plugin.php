<?php
/**
 * Plugin Name:       Most Commented Post Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.4
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Irfan Ali
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       mcpostsplugin
 */
defined('ABSPATH') or die('Hey !! you have no access silly person');

class mkkkjkjkj{

  function __construct()
  {
    add_action( 'pre_get_posts', array($this,'mcposts_plugin'), 1 );
  }
  
    function mcposts_plugin( $query ) {
        if ( ! is_admin() && $query->is_main_query() ) {
            // Display 4 posts with most commented post at the top of the page
            $query->set( 'orderby', 'comment_count');
            $query->set( 'posts_per_page', 4 );
            return;
        }if( !have_posts()){
          echo ("<h3 style='color:red'> Oops!!! No Posts Yet </h3>");
        }
       
    }
  }
  new mkkkjkjkj;