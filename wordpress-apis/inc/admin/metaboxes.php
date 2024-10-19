<?php

add_action('add_meta_boxes', 'wp_apis_add_price_meta_box', 10, 2);

function wp_apis_add_price_meta_box($post_type, $post) {
    add_meta_box(
        'wp-apis-price-meta-box', 
        'قیمت مطلب', 
        'wp_apis_price_meta_box_handler', 
        'post', 
        'normal', 
        'default', 
    );
}

function wp_apis_price_meta_box_handler($post) {
    $post_price = get_post_meta($post->ID, 'wp_apis_post_price', true);
    ?>
    <input type="text" name="wp_apis_post_price" value="<?php echo $post_price; ?>">
    <?php
}

add_action('save_post', 'wp_apis_save_price_meta_box');

function wp_apis_save_price_meta_box($post_id) {
    if(isset($_POST['wp_apis_post_price'])) {
        update_post_meta($post_id, 'wp_apis_post_price', $_POST['wp_apis_post_price']);
        //add_post_meta
        //delete_post_meta
    }
}