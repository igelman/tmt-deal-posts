<?php
require_once '/Users/alantest/Developer/src/wordpress-tests/bootstrap.php';
require_once '/Volumes/Macintosh HD/Library/Server/Web/Data/Sites/Default/development/wordpress/wp-content/plugins/tmt-deal-posts/tmt-deal-posts-class.php';

/**
 * TMT Deal Posts Tests
 */
class TestTmtDealPosts extends WP_UnitTestCase {

    public $plugin_slug = 'tmt-deal-posts';

    public function setUp() {
        parent::setUp();
        $this->tmtDealPosts = new TmtDealPosts();
		$this->tmtDealPosts->registerPostType();
		$this->tmtDealPosts->addAction();

    }
    
    public function testConstruct() {
	    $this->assertInstanceOf("TmtDealPosts", $this->tmtDealPosts, $message = "Tried asserting that \$this->tmtDealPosts is an instance of TmTDealPosts.");
    }
    
    public function testPostTypeExists() {
    	echo PHP_EOL . "get_post_types: " . print_r(get_post_types(), TRUE) . PHP_EOL;
    	$this->assertArrayHasKey("tmt-deal-posts", get_post_types(), "Tried asserting that post type 'tmt-deal-posts' exists.");
    }
    
    public function testPostTypeInAdminMenu() {
	    $html = $this->go_to("http://localhost/development/wordpress/wp-admin/");
	    echo $html;
	    //$this->assertTag($matcher, $html);

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