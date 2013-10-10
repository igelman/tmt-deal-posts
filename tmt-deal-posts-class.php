<?php


class TmtDealPosts {

	private function definePostTypeArgs() {
		require_once 'tmt-deal-posts-settings-class.php';
		$this->tmtDealPostsSettings = new TmtDealPostsSettings();
        $this->tmtDealPostsSettings->createSettings();
        return $this->tmtDealPostsSettings->getSettings();
/*
		return array(
			'public' => true,
			'label'  => 'Deals'
		);
*/
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
