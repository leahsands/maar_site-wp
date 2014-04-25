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


	//Register Custom Posts
	add_action( 'admin_init', 'my_admin' );

	function my_admin() {
	    add_meta_box( 'feature_image_meta_box',
	        'Feature Image Details',
	        'display_feature_image_meta_box',
	        'feat_img', 'normal', 'high'
	    );
	    add_meta_box( 'team_member_meta_box',
	        'Team Member Details',
	        'display_team_member_meta_box',
	        'team_post', 'normal', 'high'
	    );
	    add_meta_box( 'Leadership_member_meta_box',
	        'Leadership Member Details',
	        'display_leadership_member_meta_box',
	        'leadership_post', 'normal', 'high'
	    );
	}

	add_filter( 'template_include', 'include_template_function', 1 );

	function include_template_function( $template_path ) {
	    if ( get_post_type() == 'feat_img' ) {
	        if ( is_single() ) {
	            // checks if the file exists in the theme first,
	            // otherwise serve the file from the plugin
	            if ( $theme_file = locate_template( array ( 'front-page.php' ) ) ) {
	                $template_path = $theme_file;
	            } 
	        }
	    }
	    if ( get_post_type() == 'team_post' ) {
	        if ( is_single() ) {
	            // checks if the file exists in the theme first,
	            // otherwise serve the file from the plugin
	            if ( $theme_file = locate_template( array ( 'single-team_post.php' ) ) ) {
	                $template_path = $theme_file;
	            } else {
	                $template_path = plugin_dir_path( __FILE__ ) . '/single-team_post.php';
	            }
	        }
	    }
	    if ( get_post_type() == 'leadership_post' ) {
	        if ( is_single() ) {
	            // checks if the file exists in the theme first,
	            // otherwise serve the file from the plugin
	            if ( $theme_file = locate_template( array ( 'single-leadership_post.php' ) ) ) {
	                $template_path = $theme_file;
	            } else {
	                $template_path = plugin_dir_path( __FILE__ ) . '/single-leadership_post.php';
	            }
	        }
	    }
	    return $template_path;
	}

	//Enqueue all the required stylesheet and javascript files
	function gp_load_style_scripts() {
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

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
