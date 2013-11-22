<?php


/**
 * TmtDealPosts class.
 */
class TmtDealPosts {
	private $postType;
	private $labelsArray;
	private $otherArgsArray;

	private function initializeSettings() {
/*
		$this->labelsArray = array(
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

		$this->otherArgsArray = array(
			'public'			=> TRUE,
			'supports'			=> array(
				'title', 'editor', 'thumbnail', 'custom-fields',
			),
			'taxonomies'		=> array('category',),
		);	
*/	
	}

	private function definePostTypeArgs() {
		require_once 'tmt-plugin-settings-class.php';	
		//$this->initializeSettings();	
		$this->tmtDealPostsSettings = new TmtPluginSettings($this->labelsArray, $this->otherArgsArray);
        $this->tmtDealPostsSettings->createSettings();
        return $this->tmtDealPostsSettings->getSettings();
	}

	public function setPostType($postType) {
		$this->postType = $postType;
	}
	
	public function setSettings($labelsArray, $otherArgsArray) {
		$this->labelsArray = $labelsArray;
		$this->otherArgsArray = $otherArgsArray;
	}
	
	public function registerPostType() {
		$postType = $this->postType; // "tmt-deal-posts";
		$args = $this->definePostTypeArgs();
		register_post_type( $postType, $args );
	}
	
	function addAction() {
		add_action( 'init', array( $this, 'registerPostType' ) );
	}
}

?>
