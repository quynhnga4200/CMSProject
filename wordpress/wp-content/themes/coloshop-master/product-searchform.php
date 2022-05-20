<?php

/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.3.0
 */

if (!defined('ABSPATH')) {
    exit;
}

?>
<form role="search" method="get" class="form-inline woocommerce-product-search" action="<?php echo esc_url(home_url('/')); ?>">
    <input class="form-control mr-sm-2 form-control search-ajax" type="search" placeholder="Search" aria-label="Search" id="woocommerce-product-search-field-<?php echo isset($index) ? absint($index) : 0; ?>" class="search-field" placeholder="<?php echo esc_attr__('Search products&hellip;', 'woocommerce'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'woocommerce'); ?>"><i class="fa fa-search" aria-hidden="true"></i></button>
    <input type="hidden" name="post_type" value="product" />
</form>
