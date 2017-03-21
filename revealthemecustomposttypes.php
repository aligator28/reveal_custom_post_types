<?php 

/*
Plugin Name: Revealpresentation Theme Custom Posts Registrator
Description: Plugin for creating custom posts types for Reveal Presentation Theme
Plugin URI: http://#
Author: Pluta Oleg
Author URI: http://#
Version: 1.0
License: GPL2
Text Domain: revealpresentation
Domain Path: Domain Path
*/

/*

    Copyright (C) Year  Author  Email

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('init', 'reveal_register_post_types');

function reveal_register_post_types() {

/////////////////////////////// SLIDES
	$labels = array( 
    'name' => esc_html__( 'Slides', 'revealpresentation' ),
    'singular_name' => esc_html__( 'Slide', 'revealpresentation' ),
    'add_new' => esc_html__( 'New Slide', 'revealpresentation' ),
    'add_new_item' => esc_html__( 'Add New Slide', 'revealpresentation' ),
    'edit_item' => esc_html__( 'Edit Slide', 'revealpresentation' ),
    'new_item' => esc_html__( 'New Slide', 'revealpresentation' ),
    'view_item' => esc_html__( 'View Slide', 'revealpresentation' ),
    'search_items' => esc_html__( 'Search Slides', 'revealpresentation' ),
    'not_found' =>  esc_html__( 'No Slides Found', 'revealpresentation' ),
    'not_found_in_trash' => esc_html__( 'No Slides found in Trash', 'revealpresentation' ),
  );
  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'rewrite' => array( 'slug' => 'slides' ),
    'menu_icon'           => 'dashicons-tickets-alt',
    'supports' => array(
      'title', 
      'editor', 
      'thumbnail',
      'page-attributes'
    ),
    'taxonomies' => array( 'post_tag', 'category' ), 
  );

  register_post_type( 'slides', $args );


///////////////////////////// FEATURES
$labels = array( 
    'name' => esc_html__( 'Front Page Features', 'revealpresentation' ),
    'singular_name' => esc_html__( 'Front Page Feature', 'revealpresentation' ),
    'add_new' => esc_html__( 'Add Feature', 'revealpresentation' ),
    'add_new_item' => esc_html__( 'Add New Feature', 'revealpresentation' ),
    'edit_item' => esc_html__( 'Edit Feature', 'revealpresentation' ),
    'new_item' => esc_html__( 'New Feature', 'revealpresentation' ),
    'view_item' => esc_html__( 'View Feature', 'revealpresentation' ),
    'search_items' => esc_html__( 'Search a Features', 'revealpresentation' ),
    'not_found' =>  esc_html__( 'No Features Found', 'revealpresentation' ),
    'not_found_in_trash' => esc_html__( 'No Front Page Features found in Trash', 'revealpresentation' ),
  );
  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'rewrite' => array( 'slug' => 'features' ),
    'menu_icon'           => 'dashicons-tickets-alt',
    'supports' => array(
      'title', 
      'editor', 
      'page-attributes',
    ),
    // 'taxonomies' => array( 'post_tag', 'category' ), 
  );

  register_post_type( 'features', $args );


///////////////////////////// OVERVIEWS
$labels = array( 
    'name' => esc_html__( 'Front Page Overview Slides', 'revealpresentation' ),
    'singular_name' => esc_html__( 'Front Page Overview Slides', 'revealpresentation' ),
    'add_new' => esc_html__( 'Add Overview Slide', 'revealpresentation' ),
    'add_new_item' => esc_html__( 'Add New Overview Slide', 'revealpresentation' ),
    'edit_item' => esc_html__( 'Edit Overview Slide', 'revealpresentation' ),
    'new_item' => esc_html__( 'New Overview Slide', 'revealpresentation' ),
    'view_item' => esc_html__( 'View Overview Slide', 'revealpresentation' ),
    'search_items' => esc_html__( 'Search Overviews Slides', 'revealpresentation' ),
    'not_found' =>  esc_html__( 'No Overviews Slides Found', 'revealpresentation' ),
    'not_found_in_trash' => esc_html__( 'No Overviews Slides found in Trash', 'revealpresentation' ),
  );
  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'rewrite' => array( 'slug' => 'overviews' ),
    'menu_icon'           => 'dashicons-tickets-alt',
    'supports' => array(
      'title', 
      'editor', 
      'thumbnail',
      'page-attributes'
    ),
    // 'taxonomies' => array( 'post_tag', 'category' ), 
  );

  register_post_type( 'overviews', $args );


///////////////////////////// QUESTIONS
$labels = array( 
    'name' => esc_html__( 'Front Page FAQs', 'revealpresentation' ),
    'singular_name' => esc_html__( 'Front Page FAQs', 'revealpresentation' ),
    'add_new' => esc_html__( 'Add Front Page FAQ', 'revealpresentation' ),
    'add_new_item' => esc_html__( 'Add New Front Page FAQ', 'revealpresentation' ),
    'edit_item' => esc_html__( 'Edit Front Page FAQ', 'revealpresentation' ),
    'new_item' => esc_html__( 'New Front Page FAQ', 'revealpresentation' ),
    'view_item' => esc_html__( 'View Front Page FAQ', 'revealpresentation' ),
    'search_items' => esc_html__( 'Search Front Page  FAQs', 'revealpresentation' ),
    'not_found' =>  esc_html__( 'No Front Page  FAQs Found', 'revealpresentation' ),
    'not_found_in_trash' => esc_html__( 'No Front Page  FAQs found in Trash', 'revealpresentation' ),
  );
  $args = array(
    'labels' => $labels,
    'has_archive' => true,
    'public' => true,
    'hierarchical' => false,
    'rewrite' => array( 'slug' => 'questions' ),
    'menu_icon'           => 'dashicons-tickets-alt',
    'supports' => array('title', 'editor'),
    // 'taxonomies' => array( 'post_tag', 'category' ), 
  );

  register_post_type( 'questions', $args );

}
