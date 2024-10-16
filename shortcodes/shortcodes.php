<?php
/*
Plugin Name: Login Form Plugin
Plugin URI: https://github.com
Description: A simple plugin to create a login form using shortcodes.
Author: Your Maryam Ketabi
Author URI: https://github.com
Text Domain: loginform
Domain Path: /languages/
Version: 1.0.0
*/

// Shortcode function for login form
function login_form_shortcode() {
    return '
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Submit</button>
    </form>';
}
add_shortcode('login_form', 'login_form_shortcode');

function handle_login_form_submission() {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
        $username = sanitize_text_field($_POST['username']);
        $password = sanitize_text_field($_POST['password']);

        echo "Username: " . esc_html($username) . "<br>";
        echo "Password: " . esc_html($password) . "<br>";
    }
}
add_action('init', 'handle_login_form_submission');
?>
