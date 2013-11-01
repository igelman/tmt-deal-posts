<?php


/**
 * TmtDealTaxonomy class.
 */
class TmtDealTaxonomy {

	private $taxonomy;
	private $taxonomySingular;
	
	public function __construct($taxonomy, $taxonomySingular) {
		$this->taxonomy = $taxonomy;
		$this->taxonomySingular = $taxonomySingular;
	}

	private function initializeSettings() {
		$taxonomy = $this->taxonomy;// "Product Types";
		$taxonomySingular = $this->taxonomySingular; //"Product Type";
		$taxonomyLc = strtolower($taxonomy);
		$taxonomyLcSingular = strtolower($taxonomySingular);
		
		$this->labelsArray = array(
			'name'                       => _x( $taxonomy, 'Taxonomy General Name', 'text_domain' ),
			'singular_name'              => _x( $taxonomyLcSingular, 'Taxonomy Singular Name', 'text_domain' ),
			'menu_name'                  => __( $taxonomySingular, 'text_domain' ),
			'all_items'                  => __( 'All ' . $taxonomy, 'text_domain' ),
			'parent_item'                => __( 'Parent ' . $taxonomySingular, 'text_domain' ),
			'parent_item_colon'          => __( 'Parent ' . $taxonomySingular . ':', 'text_domain' ),
			'new_item_name'              => __( 'New ' . $taxonomySingular . ' Name', 'text_domain' ),
			'add_new_item'               => __( 'Add New ' . $taxonomySingular, 'text_domain' ),
			'edit_item'                  => __( 'Edit ' . $taxonomySingular, 'text_domain' ),
			'update_item'                => __( 'Update ' . $taxonomySingular, 'text_domain' ),
			'separate_items_with_commas' => __( 'Separate ' . $taxonomyLc . ' with commas', 'text_domain' ),
			'search_items'               => __( 'Search ' . $taxonomyLc, 'text_domain' ),
			'add_or_remove_items'        => __( 'Add or remove ' . $taxonomyLc, 'text_domain' ),
			'choose_from_most_used'      => __( 'Choose from the most used ' . $taxonomyLc, 'text_domain' ),
		);

		$this->otherArgsArray = array(
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);		
	}

	private function defineTaxonomyArgs() {
		require_once 'tmt-plugin-settings-class.php';	
		$this->initializeSettings();	
		$this->tmtTaxonomySettings = new TmtPluginSettings($this->labelsArray, $this->otherArgsArray);
        $this->tmtTaxonomySettings->createSettings();
        return $this->tmtTaxonomySettings->getSettings();
	}

	
	function registerTaxonomy() {
		$taxonomy = strtolower(str_replace(" ", "_", $this->taxonomySingular));
// "product_type";
		$object_type = array('post', 'tmt-deal-posts',);
		$args = $this->defineTaxonomyArgs();
		register_taxonomy( $taxonomy, $object_type, $args );
	}
	
	function addAction() {
 		add_action( 'init', array( $this, 'RegisterTaxonomy' ), 0 );
	}
}

?>
