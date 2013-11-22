<?php
/**
 * @version 0.1
 */
/*
Plugin Name: TMT Deal Posts
Plugin URI: http://github.com/igelman/tmt-deal-posts
Description: Bring us one step closer to world peace.
Author: Alan @ tmt
Version: 0.1
*/

require_once 'tmt-deal-posts-class.php';


$couponPostType = "tmt-coupon-posts";
$couponLabelsArray = array(
	'name'               => __( 'TMT Coupon Posts', 'tmt-coupon-posts' ),
	'singular_name'      => __( 'TMT Coupon Post', 'tmt-coupon-posts' ),
	'add_new'            => __( 'Add new TMT coupon post', 'tmt-coupon-posts' ),
	'all_items'          => __( 'TMT Coupon Posts', 'tmt-coupon-posts' ),
	'add_new_item'       => __( 'Add new TMT coupon post', 'tmt-coupon-posts' ),
	'edit_item'          => __( 'Edit TMT coupon post', 'tmt-coupon-posts' ),
	'new_item'           => __( 'New TMT coupon post', 'tmt-coupon-posts' ),
	'view_item'          => __( 'View TMT coupon post', 'tmt-coupon-posts' ),
	'search_items'       => __( 'Search TMT coupon posts', 'tmt-coupon-posts' ),
	'not_found'          => __( 'No TMT coupon posts found', 'tmt-coupon-posts' ),
	'not_found_in_trash' => __( 'No TMT coupon posts found in trash', 'tmt-coupon-posts' ),
	'parent_item_colon'  => __( 'Parent TMT coupon posts', 'tmt-coupon-posts' ),
	'menu_name'          => __( 'TMT coupon posts', 'tmt-coupon-posts' ),
);
$couponOtherArgsArray = array(
	'public'			=> TRUE,
	'supports'			=> array(
		'title', 'editor', 'thumbnail', 'custom-fields',
	),
	'taxonomies'		=> array('category',),
);

$tmtCouponPosts = new TmtDealPosts();
$tmtCouponPosts->setPostType($couponPostType);
$tmtCouponPosts->setSettings($couponLabelsArray, $couponOtherArgsArray);
$tmtCouponPosts->addAction();


$dealPostType = "tmt-deal-posts";
$dealLabelsArray = array(
	'name'               => __( 'TMT Deal Posts', 'tmt-deal-posts' ),
	'singular_name'      => __( 'TMT Deal Post', 'tmt-deal-posts' ),
	'add_new'            => __( 'Add new TMT deal post', 'tmt-deal-posts' ),
	'all_items'          => __( 'TMT Deal Posts', 'tmt-deal-posts' ),
	'add_new_item'       => __( 'Add new TMT deal post', 'tmt-deal-posts' ),
	'edit_item'          => __( 'Edit TMT deal post', 'tmt-deal-posts' ),
	'new_item'           => __( 'New TMT deal post', 'tmt-deal-posts' ),
	'view_item'          => __( 'View TMT deal post', 'tmt-deal-posts' ),
	'search_items'       => __( 'Search TMT deal posts', 'tmt-deal-posts' ),
	'not_found'          => __( 'No TMT deal posts found', 'tmt-deal-posts' ),
	'not_found_in_trash' => __( 'No TMT deal posts found in trash', 'tmt-deal-posts' ),
	'parent_item_colon'  => __( 'Parent TMT deal posts', 'tmt-deal-posts' ),
	'menu_name'          => __( 'TMT deal posts', 'tmt-deal-posts' ),
);

$dealOtherArgsArray = array(
	'public'			=> TRUE,
	'supports'			=> array(
		'title', 'editor', 'thumbnail', 'custom-fields',
	),
	'taxonomies'		=> array('category',),
);	


$tmtDealPosts = new TmtDealPosts();
$tmtDealPosts->setPostType($dealPostType);
$tmtDealPosts->setSettings($dealLabelsArray, $dealOtherArgsArray);
//$tmtDealPosts->registerPostType();
$tmtDealPosts->addAction();

require_once 'tmt-deal-taxonomy-class.php';
$tmtDealTaxonomyProduct = new TmtDealTaxonomy("Product Types", "Product Type");
$tmtDealTaxonomyProduct->addAction();

$tmtDealTaxonomyMerchant = new TmtDealTaxonomy("Merchants", "Merchant");
$tmtDealTaxonomyMerchant->addAction();




?>