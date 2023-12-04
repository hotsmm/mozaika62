<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


// Вариант каталога для Ивана
wc_get_template( 'archive-product.php' );


// New catalog version
//wc_get_template( 'archive-product-new.php' );


/* Определяем текущую категорию
$product_cat = get_queried_object();

// Выбираем шаблон для текущей категории
 if (
	( $product_cat->name == 'Готовые кухни' ) OR
	( $product_cat->name == 'Прямые готовые кухни' ) OR
	( $product_cat->name == 'Кухни на заказ' )
    ) {
	wc_get_template( '1.php' );
} else {
	wc_get_template( 'archive-product.php' );
} */