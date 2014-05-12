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

	// CUSTOM ADMIN LOGIN HEADER LOGO
	 
	function my_custom_login_logo()
	{
	    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/img/logo.png)  !important; } </style>';
	}
	add_action('login_head',  'my_custom_login_logo');




	/* Tiny MCE Advanced Menus */
	// Add Formats Dropdown Menu To MCE
	if ( ! function_exists( 'wpex_style_select' ) ) {
		function wpex_style_select( $buttons ) {
			array_push( $buttons, 'styleselect' );
			return $buttons;
		}
	}
	add_filter( 'mce_buttons', 'wpex_style_select' );

	// Hooks your functions into the correct filters
	function my_add_mce_button() {
		// check user permissions
		if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
			return;
		}
		// check if WYSIWYG is enabled
		if ( 'true' == get_user_option( 'rich_editing' ) ) {
			add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );
			add_filter( 'mce_buttons', 'my_register_mce_button' );
		}
	}
	add_action('admin_head', 'my_add_mce_button');

	// Declare script for new button
	function my_add_tinymce_plugin( $plugin_array ) {
		$plugin_array['item_button'] = get_template_directory_uri() .'/js/tinymce.js';
		return $plugin_array;
	}

	// Register new button in the editor
	function my_register_mce_button( $buttons ) {
		array_push( $buttons, 'item_button' );
		return $buttons;
	}


	//Custom colors
	function my_mce_options( $init ) {
	$default_colours = '
	    "000000", "Black",  "1b1a1b", "Darker Grey", "272728", "Dark Grey", "414042", "Grey", "676669", "Light Grey", "8d8c8f", "Lighter Grey", "e7e7e7", "Lightest Grey", "f7f7f7", "Off White",     "FFFFFF", "White"
	';
	$custom_colours = '
	    "072554", "Dark Blue", "334374", "Blue", "697ebd", "Light Blue", "b72408", "Dark Red", "e82e0a", "Red"
	';
	$init['textcolor_map'] = '['.$default_colours.','.$custom_colours.']'; // build colour grid default+custom colors
	$init['textcolor_rows'] = 6; // enable 6th row for custom colours in grid
	return $init;
	}
	add_filter('tiny_mce_before_init', 'my_mce_options');


	// Add new styles to the TinyMCE "formats" menu dropdown
	if ( ! function_exists( 'wpex_styles_dropdown' ) ) {
		function wpex_styles_dropdown( $settings ) {

			// Create array of new styles
			$new_styles = array(

				array(
					'title'	=> __( 'Columns', 'wpex' ),
					'items'	=> array(
						array(
							'title'		=> __('1/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('one', 'columns'),
						),
						array(
							'title'		=> __('1/6 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('two', 'columns'),
						),
						array(
							'title'		=> __('1/4 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('three', 'columns'),
						),
						array(
							'title'		=> __('1/3 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('four', 'columns'),
						),
						array(
							'title'		=> __('5/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('five', 'columns'),
						),
						array(
							'title'		=> __('1/2 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('six', 'columns'),
						),
						array(
							'title'		=> __('7/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('seven', 'columns'),
						),

						array(
							'title'		=> __('2/3 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('eight', 'columns'),
						),
						array(
							'title'		=> __('3/4 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('nine', 'columns'),
						),
						array(
							'title'		=> __('5/6 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('ten', 'columns'),
						),
						array(
							'title'		=> __('11/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('eleven', 'columns'),
						),
						array(
							'title'		=> __('Full Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('twelve', 'columns'),
						),
					),
				),
				array(
					'title'	=> __( 'Pretty Columns', 'wpex' ),
					'items'	=> array(
						array(
							'title'		=> __('1/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('one', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('1/6 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('two', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('1/4 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('three', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('1/3 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('four', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('5/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('five', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('1/2 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('six', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('7/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('seven', 'columns', 'gen-div'),
						),

						array(
							'title'		=> __('2/3 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('eight', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('3/4 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('nine', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('5/6 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('ten', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('11/12 Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('eleven', 'columns', 'gen-div'),
						),
						array(
							'title'		=> __('Full Column','wpex'),
							'block'	=> 'div',
							'wrapper' => true,
							'classes'	=> array('twelve', 'columns', 'gen-div'),
						),
					),
				),
			);

			// Merge old & new styles
			$settings['style_formats_merge'] = true;

			// Add new styles
			$settings['style_formats'] = json_encode( $new_styles );

			// Return New Settings
			return $settings;

		}
	}
	add_filter( 'tiny_mce_before_init', 'wpex_styles_dropdown' );





	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function calendar_widgets_init() {

		register_sidebar( array(
			'name' => 'Home Calendar',
			'id' => 'home_calendar',
			'before_widget' => '<div class="gen-home-div-inner">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		) );
	}
	add_action( 'widgets_init', 'calendar_widgets_init' );





	//Register Excerpt for Blog Posts
	class Excerpt {

	  // Default length (by WordPress)
	  public static $length = 55;

	  // So you can call: my_excerpt('short');
	  public static $types = array(
	      'short' => 20,
	      'regular' => 40,
	      'long' => 70
	    );

	  /**
	   * Sets the length for the excerpt,
	   * then it adds the WP filter
	   * And automatically calls the_excerpt();
	   *
	   * @param string $new_length 
	   * @return void
	   * @author Baylor Rae'
	   */
	  public static function length($new_length = 55) {
	    Excerpt::$length = $new_length;

	    add_filter('excerpt_length', 'Excerpt::new_length');

	    Excerpt::output();
	  }

	  // Tells WP the new length
	  public static function new_length() {
	    if( isset(Excerpt::$types[Excerpt::$length]) )
	      return Excerpt::$types[Excerpt::$length];
	    else
	      return Excerpt::$length;
	  }

	  // Echoes out the excerpt
	  public static function output() {
	    the_excerpt();
	  }

	}

	// An alias to the class
	function my_excerpt($length = 55) {
	  Excerpt::length($length);
	}

	function new_excerpt_more( $more ) {
		return ' <a href="'. get_permalink( get_the_ID() ) . '">' . __('[read more]') . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );




	//Register Search and Comments 
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list',
	) );

	function limit_search_posts() {
		if ( is_search())
			set_query_var('posts_per_page', 10);
	}
	add_filter('pre_get_posts', 'limit_search_posts');

	function filter_search_results($query) {
		// check to see if search
		if ($query->is_search) {
			// only search the paeg post type
			//$query->set('post_type', array('post', 'page'));

			// dont search these pages
			$query->set('post__not_in', array('feat_img', 'newsletter_pdf'));
		}
		return $query;
	}
	add_filter('pre_get_posts','filter_search_results');




	//Register Multiple columns
	function multi_col($content){
        // run through a couple of essential tasks to prepare the content
        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);
     
        // the first "more" is converted to a span with ID
        $columns = preg_split('/(<span id="more-\d+"><\/span>)|(<!--more-->)<\/p>/', $content);
        $col_count = count($columns);
     
        if($col_count > 1) {
            for($i=0; $i<$col_count; $i++) {
                // check to see if there is a final </p>, if not add it
                if(!preg_match('/<\/p>\s?$/', $columns[$i]) )  {
                    $columns[$i] .= '</p>';
                }
                // check to see if there is an appending </p>, if there is, remove
                $columns[$i] = preg_replace('/^\s?<\/p>/', '', $columns[$i]);
                // now add the div wrapper
                $columns[$i] = '<div class="columns">'.$columns[$i].'</div>';
            }
            $content = join($columns, "\n").'<div class="clear"></div>';
        }
        else {
            // this page does not have dynamic columns
            $content = wpautop($content);
        }
        // remove any left over empty <p> tags
        $content = str_replace('<p></p>', '', $content);
        return $content;
    }

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

	//Pagination for Blog
	function blog_pagination() {
	    if( is_singular() )
	        return;

	    global $wp_query;

	    /** Stop execution if there's only 1 page */
	    if( $wp_query->max_num_pages <= 1 )
	        return;

	    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	    $max   = intval( $wp_query->max_num_pages );

	    /** Add current page to the array */
	    if ( $paged >= 1 )
	        $links[] = $paged;

	    /** Add the pages around the current page to the array */
	    if ( $paged >= 3 ) {
	        $links[] = $paged - 1;
	        $links[] = $paged - 2;
	    }
	 
	    if ( ( $paged + 2 ) <= $max ) {
	        $links[] = $paged + 2;
	        $links[] = $paged + 1;
	    }

	    echo '<section="six columns"><div class="alignright">' . "\n";

	    /** Link to first page, plus ellipses if necessary */
	    if ( ! in_array( 1, $links ) ) {
	        $class = 1 == $paged ? ' class="active"' : '';

	        printf( '<div class="medium info btn" %s><a href="%s">%s</a></div>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

	        if ( ! in_array( 2, $links ) )
	            echo '<div class="medium info btn">…</div>';
	    }
	    /** Link to current page, plus 2 pages in either direction if necessary */
	    sort( $links );
	    foreach ( (array) $links as $link ) {
	        $class = $paged == $link ? ' class="active"' : '';
	        printf( '<div class="medium info btn" %s><a href="%s">%s</a></div>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	    }
	    /** Link to last page, plus ellipses if necessary */
	    if ( ! in_array( $max, $links ) ) {
	        if ( ! in_array( $max - 1, $links ) )
	            echo '<div class="medium info btn">…</div>' . "\n";
	        $class = $paged == $max ? ' class="active"' : '';
	        printf( '<div class="medium info btn" %s><a href="%s">%s</a></div>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	    }
	    echo '</div></section>' . "\n";
	}

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

	    if ( get_post_type() == 'newsletter_pdf' ) {
	        if ( is_single() ) {
	            // checks if the file exists in the theme first,
	            // otherwise serve the file from the plugin
	            if ( $theme_file = locate_template( array ( 'page-newsletter.php' ) ) ) {
	                $template_path = $theme_file;
	            } else {
	                $template_path = plugin_dir_path( __FILE__ ) . '/page-newsletter.php';
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
			$new_classes = array();
			if ( preg_grep("/^current/", $classes) ) {
				$new_classes [] = 'active';
				if ( preg_grep("/current-menu-item/",$classes) ) {
					$new_classes [] = 'active-item';
				}
			} 
	 
			$class_names = ' class="clickable ' . esc_attr( join( ' ',$new_classes ) ) . '"';
	 
			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
			$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
	 
	 		$li_attributes = ($args->has_children) 	    ? ' href="#'. $item->attr_title . '"' : '';

			$output .= $indent . '<li id="'. $item->attr_title . '" ' . $class_names . '>';
	 
			$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
			$link 		.= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
			$link       .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
			$link		.= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	 
			$item_output = $args->before;
			$item_output .= '<a'. $attributes . $link .'>';
			$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= ($depth == 0 && $args->has_children) ? '</a>' : '<i class="icon-right-open"></i></a>';
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