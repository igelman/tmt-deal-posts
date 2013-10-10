<?php
/*
require_once '/Users/alantest/Developer/src/wordpress-tests/bootstrap.php';
require_once '/Volumes/Macintosh HD/Library/Server/Web/Data/Sites/Default/development/wordpress/wp-content/plugins/tmt-deal-posts/tmt-deal-posts-class.php';
*/

require_once '/Users/alantest/Developer/src/wordpress-tests/bootstrap.php';
require_once '../tmt-deal-posts-class.php';
require_once '../tmt-deal-posts-settings-class.php';

/**
 * TMT Deal Posts Tests
 */
class TestTmtDealPosts extends WP_UnitTestCase {

    public $plugin_slug = 'tmt-deal-posts';

    public function setUp() {
        parent::setUp();
        $this->tmtDealPostsSettings = new TmtDealPostsSettings();
        $this->tmtDealPostsSettings->createSettings();
        $this->tmtDealPosts = new TmtDealPosts();
		//$this->tmtDealPosts->registerPostType();
		$this->tmtDealPosts->addAction();

    }
    
    public function testConstruct() {
	    $this->assertInstanceOf("TmtDealPostsSettings", $this->tmtDealPostsSettings, $message = "Tried asserting that \$this->tmtDealPostsSettings is an instance of TmtDealPostsSettings.");
    }
    
    public function testGetSettingsIsArray() {
    	$settings = $this->tmtDealPostsSettings->getSettings();
    	echo "settings: " . print_r($settings, TRUE);
	    $this->assertTrue(is_array($settings), "Tried asserting that \$settings is an array.");
    }
    
    public function testLabelsIsArray() {
	    $settings = $this->tmtDealPostsSettings->getSettings();
	    $labels = $settings['labels'];
	    $this->assertTrue(is_array($labels), "Tried asserting that \$labels is an array.");
    }
}
?>