<?php


/**
 * TmtDealPostsSettings class.
 */
class TmtDealPostsSettings {

	private $settings;
	private $labels;
	
	public function createSettings() {
		$this->settings = array();
		$this->addLabelsToSettings();
		$this->addOtherSettings();
	}
	
	private function addOtherSettings() {
		$this->settings['public']	=	true;
	}
	
	private function addLabelsToSettings() {
		$this->labels = array(
			'name'                => __( 'TMT Deal Posts', 'tmt-deal-posts' ),
			'singular_name'       => __( 'TMT Deal Post', 'tmt-deal-posts' ),
			'add_new'             => __( 'Add new TMT deal post', 'tmt-deal-posts' ),
			'all_items'           => __( 'TMT Deal Posts', 'tmt-deal-posts' ),
			'add_new_item'        => __( 'Add new TMT deal post', 'tmt-deal-posts' ),
			'edit_item'           => __( 'Edit TMT deal post', 'tmt-deal-posts' ),
			'new_item'            => __( 'New TMT deal post', 'tmt-deal-posts' ),
			'view_item'           => __( 'View TMT deal post', 'tmt-deal-posts' ),
			'search_items'        => __( 'Search TMT deal posts', 'tmt-deal-posts' ),
			'not_found'           => __( 'No TMT deal posts found', 'tmt-deal-posts' ),
			'not_found_in_trash'  => __( 'No TMT deal posts found in trash', 'tmt-deal-posts' ),
			'parent_item_colon'   => __( 'Parent TMT deal posts', 'tmt-deal-posts' ),
			'menu_name'           => __( 'TMT deal posts', 'tmt-deal-posts' ),
		);
		$this->settings['labels'] = $this->labels;
	}
	
	public function getSettings() {
		return $this->settings;
	}
}

?>