<?php

	/* Bootstrap 5 wp_nav_menu walker
	class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu {
		private $current_item;
		private $dropdown_menu_alignment_values = [
			'dropdown-menu-start',
			'dropdown-menu-end',
			'dropdown-menu-sm-start',
			'dropdown-menu-sm-end',
			'dropdown-menu-md-start',
			'dropdown-menu-md-end',
			'dropdown-menu-lg-start',
			'dropdown-menu-lg-end',
			'dropdown-menu-xl-start',
			'dropdown-menu-xl-end',
			'dropdown-menu-xxl-start',
			'dropdown-menu-xxl-end'
		];

		function start_lvl(&$output, $depth = 0, $args = null) {
			$dropdown_menu_class[] = '';
			foreach($this->current_item->classes as $class) {
				if(in_array($class, $this->dropdown_menu_alignment_values)) {
					$dropdown_menu_class[] = $class;
				}
			}
			$indent = str_repeat("\t", $depth);
			$submenu = ($depth > 0) ? ' sub-menu' : '';
			$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
		}

		function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
			$this->current_item = $item;

			$indent = ($depth) ? str_repeat("\t", $depth) : '';

			$li_attributes = '';
			$class_names = $value = '';

			$classes = empty($item->classes) ? array() : (array) $item->classes;

			$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
			$classes[] = 'nav-item';
			$classes[] = 'nav-item-' . $item->ID;
			if ($depth && $args->walker->has_children) {
				$classes[] = 'dropdown-menu dropdown-menu-end';
			}

			$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
			$class_names = ' class="' . esc_attr($class_names) . '"';

			$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
			$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

			/*
			if ( $output != '' ) {
				// Подключаем точки в меню
				$output .= '
					<li class="nav-item d-none d-xl-inline">
						<span class="nav-link px-0"><img src="'.get_template_directory_uri().'/img/ico/menu-point.webp"></span>
					</li>
				';
			} *
			
			$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

			$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
			$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
			$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
			$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

			$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
			$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
			$attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

			$item_output = $args->before;
			$item_output .= '<a' . $attributes . '>';
			$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		}
	}

	// Register a new menu
	register_nav_menu('navbarSupportedContent', 'Main menu'); */
	
	
	/*** Adding WooCommerce support ***/
	function wp_template_add_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'wp_template_add_woocommerce_support' );
	
	// Убираем цену там, где она по умолчанию
	remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
	// Убираем кнопку добавить в корзину
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
	
	
	/* Изменяем размер миниатюр WooCommerce */
	add_filter('woocommerce_get_image_size_thumbnail','add_thumbnail_size',1,10);
	function add_thumbnail_size($size){
		$size['width'] = 600;
		//$size['height'] = 450;
		$size['crop']   = 1; //0 - не обрезаем, 1 - обрезка
		return $size;
	}
	
	/* Отключаем ненужные опции вывода настраницу */
	/* Отключаем название товара */
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	
	//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
	//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
	//add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 20);
	//add_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);
	
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	

	
	
	/**
	 * Change several of the breadcrumb defaults
	 */
	add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
	function jk_woocommerce_breadcrumbs() {
		return array(
				'delimiter'   => ' &#47; ',
				'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb"><a href="https://мозаика62.рф"><img src="'.get_template_directory_uri().'/img/ico/home-breadcrumbs.png"></a> / ',
				'wrap_after'  => '</nav>',
				'before'      => '',
				'after'       => '',
				'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
			);
	}
	
	/**/
	// Убираем ссылку на главную страницу сайта в хлебных крошках, чтобы потом подставить вместо этого ссылку с изображением
	add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
	function wcc_change_breadcrumb_home_text( $defaults ) {
		// Change the breadcrumb home text from 'Home' to 'Apartment'
		$defaults['home'] = null;
		return $defaults;
	}
	
	
	/* Добавляем ссылку на главную страницу магазина в хлебных крошках
	add_filter( 'woocommerce_get_breadcrumb', function($crumbs, $Breadcrumb){
        $shop_page_id = wc_get_page_id('shop'); //Get the shop page ID
        if( $shop_page_id > 0 && !is_shop() ) { //Check we got an ID (shop page is set). Added check for is_shop to prevent Home / Shop / Shop as suggested in comments
            $new_breadcrumb = [
                _x( 'Продукция', 'breadcrumb', 'woocommerce' ), //Title
                get_permalink(wc_get_page_id('shop')) // URL
            ];
            array_splice($crumbs, 0, 0, [$new_breadcrumb]); //Insert a new breadcrumb after the 'Home' crumb
        }
        return $crumbs;
    }, 10, 2 ); */
	
	
	/* Добавляем ссылку на главную страницу магазина в хлебных крошках */
	/* Изменил от первоначальной версии
	add_filter( 'woocommerce_get_breadcrumb', function($crumbs, $Breadcrumb){
        //$shop_page_id = wc_get_page_id('shop'); //Get the shop page ID
        // Если это страница магазина, страница архива или таксономии продуктов, то добавляем впереде ссылку на страницу архива продуктов
		if ( is_post_type_archive( 'products' ) OR is_product_taxonomy( 'product-cat' ) ) { //Check we got an ID (shop page is set). Added check for is_shop to prevent Home / Shop / Shop as suggested in comments
            $new_breadcrumb = [
                _x( 'Продукция', 'breadcrumb', 'woocommerce' ), //Title
                get_permalink( wc_get_page_id( 'shop' ) ) // URL
            ];
            array_splice( $crumbs, 0, 0, [ $new_breadcrumb ] ); //Insert a new breadcrumb after the 'Home' crumb
        } else if ( is_tax( 'portfolio-cat' ) ) {
			$new_breadcrumb = [
                _x( 'Наши работы', 'breadcrumb', 'woocommerce' ), //Title
                'https://сайт100.рф/site100-furniture/portfolio/' // URL
            ];
            array_splice( $crumbs, 0, 1, [ $new_breadcrumb ] ); //Insert a new breadcrumb after the 'Home' crumb
		}
		return $crumbs;
    }, 10, 2 ); */
	
	
	/* WC 2.6.4: Изменить любой элемент "хлебных крошек"
	add_filter( 'woocommerce_get_breadcrumb', 'my_woocommerce_get_breadcrumb' );
	function my_woocommerce_get_breadcrumb($breadcrumb) {
			
			foreach ( $breadcrumb as $key => $crumb ) {
				// заменяем "крошку" корня каталога "Каталог" на "Мой каталог"
				//if ($breadcrumb[$key][0] == 'Каталог') $breadcrumb[$key][0] = 'Мой каталог';
				// заменяем, если в "крошке" название 'Компьютеры Apple'
				if ($breadcrumb[$key][0] == 'Наша продукция') $breadcrumb[$key][0] = 'Продукция';
			}
			
		return $breadcrumb;
	} */
	
	
	/* Wijet область в сайдбаре */
	if ( function_exists( 'register_sidebar' ) ) {
		register_sidebar(
			array(
				'name'          => 'Виджет в сайдбаре', //название виджета в админ-панели
				'id'            => 'wsidebar-1', //идентификатор виджета
				'description'   => 'виден во всех разделах сайта', //описание виджета в админ-панели
				'before_widget' => '<aside id="%1$s" class="widget %2$s">', //открывающий тег виджета с динамичным идентификатором
				'after_widget'  => '<div class="clear"></div></aside>', //закрывающий тег виджета с очищающим блоком
				'before_title'  => '<span class="widget-title">', //открывающий тег заголовка виджета
				'after_title'   => '</span>',//закрывающий тег заголовка виджета
			)
		);
	}
	
	
	/*
	function getCategoryLvlById( $category, $level = 1 ) {
		if ( get_term( $category )->parent == 0) {
			return $level;
		} else {
			$level++;
			$category = get_term(get_term( $category )->parent);
			return getCategoryLvlById($category, $level);
		}
	} */
	
	
	// Add excerpt for page
	add_action( 'init', 'page_excerpt' );
	function page_excerpt() {
		add_post_type_support( 'page', array( 'excerpt' ) );
	}

?>