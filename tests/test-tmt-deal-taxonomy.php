<?php
require_once '/Users/alantest/Developer/src/wordpress-tests/bootstrap.php';
//require_once '/Volumes/Macintosh HD/Library/Server/Web/Data/Sites/Default/development/wordpress/wp-content/plugins/OFFtmt-deal-posts/tmt-deal-posts-class.php';
require_once '../tmt-deal-taxonomy-class.php';

/**
 * TMT Deal Posts Tests
 */
class TestTmtDealTaxonomy extends WP_UnitTestCase {

    public $plugin_slug = 'tmt-deal-posts';
    public $taxonomyName = "product_type";

    public function setUp() {
        parent::setUp();
        $this->tmtDealTaxonomy = new TmtDealTaxonomy();
        $this->tmtDealTaxonomy->registerTaxonomy();
		$this->tmtDealTaxonomy->addAction();

    }
    
    public function testConstruct() {
	    $this->assertInstanceOf("TmtDealTaxonomy", $this->tmtDealTaxonomy, $message = "Tried asserting that \$this->tmtDealTaxonomy is an instance of TmtDealTaxonomy.");
    }
    
    public function testTaxonomyExists() {
    	echo PHP_EOL . "get_taxonomies: " . print_r(get_taxonomies(), TRUE) . PHP_EOL;
    	$this->assertArrayHasKey($this->taxonomyName, get_taxonomies(), "Tried asserting that taxonomy '$this->taxonomyName' exists.");
    }
    
    public function testStuffInAdminInterface() {
    	return;

    }


    /**
     * A contrived example using some WordPress functionality
     */
    public function testPostTitle() {
        // This will simulate running WordPress' main query.
        // See wordpress-tests/lib/testcase.php
        $this->go_to('http://localhost/wordpress/?p=1');

        // Now that the main query has run, we can do tests that are more functional in nature
        /* @var $wp_query WP_Query */
        global $wp_query;
        $post = $wp_query->get_queried_object();
        $this->assertEquals('Hello world!', $post->post_title );
    }
}