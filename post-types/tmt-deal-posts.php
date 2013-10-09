<?php

function tmt_deal_posts_init() {
	register_post_type( 'tmt-deal-posts', array(
		'hierarchical'      => false,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'query_var'         => true,
		'rewrite'           => true,
		'labels'            => array(
			'name'                => __( 'Tmt deal posts', 'tmt-deal-posts' ),
			'singular_name'       => __( 'Tmt deal posts', 'tmt-deal-posts' ),
			'add_new'             => __( 'Add new tmt deal posts', 'tmt-deal-posts' ),
			'all_items'           => __( 'Tmt deal posts', 'tmt-deal-posts' ),
			'add_new_item'        => __( 'Add new tmt deal posts', 'tmt-deal-posts' ),
			'edit_item'           => __( 'Edit tmt deal posts', 'tmt-deal-posts' ),
			'new_item'            => __( 'New tmt deal posts', 'tmt-deal-posts' ),
			'view_item'           => __( 'View tmt deal posts', 'tmt-deal-posts' ),
			'search_items'        => __( 'Search tmt deal posts', 'tmt-deal-posts' ),
			'not_found'           => __( 'No tmt deal posts found', 'tmt-deal-posts' ),
			'not_found_in_trash'  => __( 'No tmt deal posts found in trash', 'tmt-deal-posts' ),
			'parent_item_colon'   => __( 'Parent tmt deal posts', 'tmt-deal-posts' ),
			'menu_name'           => __( 'Tmt deal posts', 'tmt-deal-posts' ),
		),
	) );

}
add_action( 'init', 'tmt_deal_posts_init' );

function tmt_deal_posts_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['tmt-deal-posts'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Tmt deal posts updated. <a target="_blank" href="%s">View tmt deal posts</a>', 'tmt-deal-posts'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'tmt-deal-posts'),
		3 => __('Custom field deleted.', 'tmt-deal-posts'),
		4 => __('Tmt deal posts updated.', 'tmt-deal-posts'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Tmt deal posts restored to revision from %s', 'tmt-deal-posts'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Tmt deal posts published. <a href="%s">View tmt deal posts</a>', 'tmt-deal-posts'), esc_url( $permalink ) ),
		7 => __('Tmt deal posts saved.', 'tmt-deal-posts'),
		8 => sprintf( __('Tmt deal posts submitted. <a target="_blank" href="%s">Preview tmt deal posts</a>', 'tmt-deal-posts'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Tmt deal posts scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview tmt deal posts</a>', 'tmt-deal-posts'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Tmt deal posts draft updated. <a target="_blank" href="%s">Preview tmt deal posts</a>', 'tmt-deal-posts'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'tmt_deal_posts_updated_messages' );
