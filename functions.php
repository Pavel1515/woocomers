<?php

function woocomers_scripts() {
	wp_enqueue_style( 'main',get_template_directory_uri().'/assets/style/style.css',[],false);
}
add_action( 'wp_enqueue_scripts', 'woocomers_scripts' );

function woocommerce_breadcrumbs() {
	if (function_exists('woocommerce_breadcrumb')) {
			woocommerce_breadcrumb();
	}
}

add_action('woocommerce_before_main_content', 'woocommerce_breadcrumbs', 20);
