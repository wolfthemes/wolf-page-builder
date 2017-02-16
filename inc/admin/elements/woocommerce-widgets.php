<?php
/**
 * WooCommerce
 *
 * @author %AUTHOR%
 * @category Core
 * @package %PACKAGENAME%/Admin/Elements
 * @version %VERSION%
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// check if woocommerce is activated
if ( function_exists( 'is_woocommerce' ) ) {

/* Order Tracking */
wpb_add_element(
	array(
		'name' => esc_html__( 'Order Tracking', '%TEXTDOMAIN%' ),
		'base' => 'woocommerce_order_tracking',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
	)
);

/* Product price/cart button */
wpb_add_element(
	array(
		'name' => esc_html__( 'Product price/cart button', '%TEXTDOMAIN%' ),
		'base' => 'add_to_cart',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => 'ID',
				'param_name' => 'id',
			),
			array(
				'type' => 'text',
				'label' => 'SKU',
				'param_name' => 'sku',
			),
		),
	)
);

/* Product by SKU/ID */
wpb_add_element(
	array(
		'name' => esc_html__( 'Product by SKU/ID', '%TEXTDOMAIN%' ),
		'base' => 'product',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => 'ID',
				'param_name' => 'id',
			),
			array(
				'type' => 'text',
				'label' => 'SKU',
				'param_name' => 'sku',
			),
		)
	)
);

/* Products by SKU/ID */
wpb_add_element(
	array(
		'name' => esc_html__( 'Products by SKU/ID', '%TEXTDOMAIN%' ),
		'base' => 'products',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => 'IDS',
				'param_name' => 'ids',
			),
			array(
				'type' => 'text',
				'label' => 'SKUS',
				'param_name' => 'skus',
			)
		)
	)
);

/* Product categories */
wpb_add_element(
	array(
		'name' => esc_html__( 'Product Categories', '%TEXTDOMAIN%' ),
		'base' => 'product_categories',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Number', '%TEXTDOMAIN%' ),
				'param_name' => 'number',
			),
		),
	)
);

/* Products by category slug */
wpb_add_element(
	array(
		'name' => esc_html__( 'Products by Category Slug', '%TEXTDOMAIN%' ),
		'base' => 'product_category',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Category', '%TEXTDOMAIN%' ),
				'param_name' => 'category',
				'display' => true,
			),
			array(
				'type' => 'text',
				'label' => esc_html__( 'Per page', '%TEXTDOMAIN%' ),
				'param_name' => 'per_page',
				'value' => 4,
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
				'param_name' => 'columns',
				'choices' => array(
					4,3,2,
				),
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Order by', '%TEXTDOMAIN%' ),
				'param_name' => 'order_by',
				'choices' => array(
					'date' => esc_html__( 'Date', '%TEXTDOMAIN%' ),
					'title' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				),
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Order', '%TEXTDOMAIN%' ),
				'param_name' => 'order',
				'choices' => array(
					'DESC' => 'desc',
					'ASC' => 'asc'
				),
			),
		)
	)
);

/* Recent products */
wpb_add_element(
	array(
		'name' => esc_html__( 'Recent Products', '%TEXTDOMAIN%' ),
		'base' => 'recent_products',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Per page', '%TEXTDOMAIN%' ),
				'param_name' => 'per_page',
				'value' => 4,
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
				'param_name' => 'columns',
				'choices' => array(
					4,3,2,
				),
				'display' => true,
			),

			array(
				'type' => 'select',
				'label' => esc_html__( 'Order by', '%TEXTDOMAIN%' ),
				'param_name' => 'order_by',
				'choices' => array(
					'date' => esc_html__( 'Date', '%TEXTDOMAIN%' ),
					'title' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				),
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Order', '%TEXTDOMAIN%' ),
				'param_name' => 'order',
				'choices' => array(
					'DESC' => 'desc',
					'ASC' => 'asc'
				),
			),
		)
	)
);

/* Featured products */
wpb_add_element(
	array(
		'name' => esc_html__( 'Featured Products', '%TEXTDOMAIN%' ),
		'base' => 'featured_products',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Per page', '%TEXTDOMAIN%' ),
				'param_name' => 'per_page',
				'value' => 4,
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
				'param_name' => 'columns',
				'choices' => array(
					4,3,2,
				),
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Order by', '%TEXTDOMAIN%' ),
				'param_name' => 'order_by',
				'choices' => array(
					'date' => esc_html__( 'Date', '%TEXTDOMAIN%' ),
					'title' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				),
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Order', '%TEXTDOMAIN%' ),
				'param_name' => 'order',
				'choices' => array(
					'DESC' => 'desc',
					'ASC' => 'asc'
				),
			),
		)
	)
);

/* Sale products */
wpb_add_element(
	array(
		'name' => esc_html__( 'Sale Products', '%TEXTDOMAIN%' ),
		'base' => 'sale_products',
		'icon' => 'wpb-icon wpb-woocommerce',
		'category' => 'WooCommerce',
		'tags' => 'shop woocommerce',
		'params' => array(
			array(
				'type' => 'text',
				'label' => esc_html__( 'Per page', '%TEXTDOMAIN%' ),
				'param_name' => 'per_page',
				'value' => 4,
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Columns', '%TEXTDOMAIN%' ),
				'param_name' => 'columns',
				'choices' => array(
					4,3,2,
				),
				'display' => true,
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Order by', '%TEXTDOMAIN%' ),
				'param_name' => 'order_by',
				'choices' => array(
					'date' => esc_html__( 'Date', '%TEXTDOMAIN%' ),
					'title' => esc_html__( 'Title', '%TEXTDOMAIN%' ),
				),
			),
			array(
				'type' => 'select',
				'label' => esc_html__( 'Order', '%TEXTDOMAIN%' ),
				'param_name' => 'order',
				'choices' => array(
					'DESC' => 'desc',
					'ASC' => 'asc'
				),
			),
		)
	)
);

} // end woocommer check