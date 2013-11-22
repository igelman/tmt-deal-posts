<?php
require_once '/Users/alantest/Developer/src/wordpress-tests/bootstrap.php';
//require_once '/Volumes/Macintosh HD/Library/Server/Web/Data/Sites/Default/development/wordpress/wp-content/plugins/OFFtmt-deal-posts/tmt-deal-posts-class.php';
require_once '../tmt-deal-posts-class.php';

/**
 * TMT Deal Posts Tests
 */
class TestTmtDealPosts extends WP_UnitTestCase {

    public $plugin_slug = "tmt-deal-posts";
    public $postType = "tmt-deal-posts";
    public $labelsArray;
    public $otherArgsArray;
    
	

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
			'taxonomies'		=> array('category',),
		);	


        $this->tmtDealPosts = new TmtDealPosts();
        $this->tmtDealPosts->setPostType($this->postType);
        $this->tmtDealPosts->setSettings($this->labelsArray, $this->otherArgsArray);
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
    	return;
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