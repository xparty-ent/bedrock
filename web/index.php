<?php
/**
 * WordPress View Bootstrapper
 */
@ini_set('upload_max_size' , '20M');
@ini_set('post_max_size', '20M');

define('WP_USE_THEMES', true);
require __DIR__ . '/wp/wp-blog-header.php';
