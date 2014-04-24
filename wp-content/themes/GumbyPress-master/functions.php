<?php

	//Set the content width based on the theme's design and stylesheet.
	 if ( ! isset( $content_width ) )
		$content_width = 600; /* pixels */


	if ( ! function_exists( 'gp_theme_setup' ) ) :
	function gp_theme_setup() {

		//Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );

		//Enable support for Post Thumbnails on posts and pages
		add_theme_support( 'post-thumbnails' );

		//Register A WordPress Nav Menu
		register_nav_menus( array(
			'primary' => ( 'Primary Menu' ),
		) );

	}
	endif;
	add_action( 'after_setup_theme', 'gp_theme_setup' );



	//Register A Sidebar Widget
	function gp_widgets_init() {
	    register_sidebar( array(
	        'name' => ( 'Right Sidebar' ),
	        'description'   => 'The Right sidebar',
	        'class'         => '',
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h6 class="widget-title"> ',
	        'after_title' => ' </h6>',
	    ) );
	}
	add_action( 'widgets_init', 'gp_widgets_init' );



	//Enqueue all the required stylesheet and javascript files
	function gp_load_style_scripts() {
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

	    wp_register_script('modernizr', get_template_directory_uri().'/js/modernizr-2.6.2.min.js','1.0', 'all');
		wp_register_script('gumby', get_template_directory_uri().'/js/gumby.min.js','1.0', 'all', true);

	    wp_enqueue_script(  'modernizr');
	    wp_enqueue_script( 'jquery' );
	    wp_enqueue_script( 'gumby' );

		wp_register_style('gumby', get_template_directory_uri().'/css/gumby.css','1.0', 'all');


	    wp_enqueue_style( 'gumby' );
		wp_enqueue_style( 'style', get_stylesheet_uri() );

	}
	add_action( 'wp_enqueue_scripts', 'gp_load_style_scripts' );


	//////////////WALKER FOR MENU/////////////////
	class Walker_Accordion extends Walker_Nav_Menu {
	 
		function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	 
	 
			$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
	 
			$class_names = $value = '';
	 
			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
	 
			$class_names = ' class="' . esc_attr( $class_names ) . '"';
	 
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
	 
	 		$li_attributes = ($args->has_children) 	    ? ' href="#'. $item->attr_title . '"' : '';
			$output .= $indent . '<li id="'. $item->attr_title . '">';
	 
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$link 		.= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$link       .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$link		.= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
			$attributes .= ($args->has_children) 	    ? ' href="#'. $item->attr_title . '"' : '';
	 
			$item_output = $args->before;
			$item_output .= '<a'. $attributes . $link .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ($depth == 0 && $args->has_children) ? '</a>' : '</a>';
			$item_output .= $args->after;
	 
			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

		function start_lvl(&$output, $depth ) {
			$indent  = str_repeat( "\t", $depth );
			//$top_id  = ($depth > 0) ? 'drawer' : '';
			$output .= "\n$indent<ul class=\"drawer\">\n";

		}
		
	 
		function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
			//v($element);
			if ( !$element )
				return;
	 
			$id_field = $this->db_fields['id'];
	 
			//display this element
			if ( is_array( $args[0] ) )
				$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
			else if ( is_object( $args[0] ) )
				$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
			$cb_args = array_merge( array(&$output, $element, $depth), $args);
			call_user_func_array(array(&$this, 'start_el'), $cb_args);
	 
			$id = $element->$id_field;
	 
			// descend only when the depth is right and there are childrens for this element
			if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
	 
				foreach( $children_elements[ $id ] as $child ){
	 
					if ( !isset($newlevel) ) {
						$newlevel = true;
						//start the child delimiter
						$cb_args = array_merge( array(&$output, $depth), $args);
						call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
					}
					$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
				}
				unset( $children_elements[ $id ] );
			}
	 
			if ( isset($newlevel) && $newlevel ){
				//end the child delimiter
				$cb_args = array_merge( array(&$output, $depth), $args);
				call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
			}
	 
			//end this element
			$cb_args = array_merge( array(&$output, $element, $depth), $args);
			call_user_func_array(array(&$this, 'end_el'), $cb_args);
	 
		}
	}

	//Custom Post Type for 'Team' Page
	function my_custom_post_product() {
		$labels = array(
			'name'               => _x( 'Products', 'post type general name' ),
			'singular_name'      => _x( 'Product', 'post type singular name' ),
			'add_new'            => _x( 'Add New', 'book' ),
			'add_new_item'       => __( 'Add New Product' ),
			'edit_item'          => __( 'Edit Product' ),
			'new_item'           => __( 'New Product' ),
			'all_items'          => __( 'All Products' ),
			'view_item'          => __( 'View Product' ),
			'search_items'       => __( 'Search Products' ),
			'not_found'          => __( 'No products found' ),
			'not_found_in_trash' => __( 'No products found in the Trash' ), 
			'parent_item_colon'  => '',
			'menu_name'          => 'Products'
		);
		$args = array(
			'labels'        => $labels,
			'description'   => 'Holds our products and product specific data',
			'public'        => true,
			'menu_position' => 5,
			'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
			'has_archive'   => true,
		);
		register_post_type( 'product', $args );	
	}
	add_action( 'init', 'my_custom_post_product' );

	function my_taxonomies_product() {
		$labels = array(
			'name'              => _x( 'Product Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Product Categories' ),
			'all_items'         => __( 'All Product Categories' ),
			'parent_item'       => __( 'Parent Product Category' ),
			'parent_item_colon' => __( 'Parent Product Category:' ),
			'edit_item'         => __( 'Edit Product Category' ), 
			'update_item'       => __( 'Update Product Category' ),
			'add_new_item'      => __( 'Add New Product Category' ),
			'new_item_name'     => __( 'New Product Category' ),
			'menu_name'         => __( 'Product Categories' ),
		);
		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
		);
		register_taxonomy( 'product_category', 'product', $args );
	}
	add_action( 'init', 'my_taxonomies_product', 0 );

	