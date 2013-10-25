<?php
/*
require_once '/Users/alantest/Developer/src/wordpress-tests/bootstrap.php';
require_once '/Volumes/Macintosh HD/Library/Server/Web/Data/Sites/Default/development/wordpress/wp-content/plugins/tmt-deal-posts/tmt-deal-posts-class.php';
*/

require_once '/Users/alantest/Developer/src/wordpress-tests/bootstrap.php';
require_once '../tmt-plugin-settings-class.php';

/**
 * TMT Plugin Settings Tests
 */
class TestTmtPluginSettings extends WP_UnitTestCase {

	private $labelsArray;
	private $otherArgsArray;

    public function setUp() {
        parent::setUp();
        
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
			'taxonomies'		=> array(
				'category',
			),
		);
        
        $this->tmtPluginSettings = new TmtPluginSettings($this->labelsArray, $this->otherArgsArray);
        $this->tmtPluginSettings->createSettings();
    }
    
    public function testConstruct() {
	    $this->assertInstanceOf("TmtPluginSettings", $this->tmtPluginSettings, $message = "Tried asserting that \$this->tmtPluginSettings is an instance of TmtPluginSettings.");
    }
    

    public function testGetSettingsIsArray() {
    	$settings = $this->tmtPluginSettings->getSettings();
    	echo "settings: " . print_r($settings, TRUE);
	    $this->assertTrue(is_array($settings), "Tried asserting that \$settings is an array.");
    }
}
?>