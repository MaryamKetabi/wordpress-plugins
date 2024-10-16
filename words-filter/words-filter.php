<?php
/*
Plugin Name: Words Filtering
Plugin URI: https://github.com
Description: a simple sample plugin to filter wp contents.
Author: Maryam Ketabi
Author URI: https://github.com
Text Domain: wordsfilter
Domain Path: /languages/
Version: 1.0.0
*/

define('WF_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('WF_PLUGIN_URL', plugin_dir_url(__FILE__));
define('WF_PLUGIN_INC', PLUGIN_DIR.'/inc/');

function wf_filter_words($content) {
    $word = 'search engine';
    $replace = '<a target="_balnk" href="https://www.google.com">google</a>';

    $wordLength = mb_strlen($word);
    preg_replace("/{$word}/", str_repeat('*', $wordLength), $content);
    return $content;
}
add_filter('the_content', 'wf_filter_words', 10, 1);





