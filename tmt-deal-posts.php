<?php
/**
 * @version 0.1
 */
/*
Plugin Name: TMT Deal Posts
Plugin URI: http://github.com/igelman/tmt-deal-posts
Description: Bring us one step closer to world peace.
Author: Alan @ tmt
Version: 0.1
*/

require_once 'tmt-deal-posts-class.php';

$tmtDealPosts = new TmtDealPosts();
$tmtDealPosts->addAction();


?>