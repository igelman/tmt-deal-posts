<?php


class TmtDealPosts {

	private function definePostTypeArgs() {
		return array(
			'public' => true,
			'label'  => 'Deals'
		);
	}
	
	function registerPostType() {
		$post_type = "tmt-deal-posts";
		$args = $this->definePostTypeArgs();
		register_post_type( $post_type, $args );
	}
	
	function addAction() {
		add_action( 'init', array( $this, 'registerPostType' ) );
	}
}
?>
