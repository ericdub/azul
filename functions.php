<?php

//Block Wordpress version and error reporting from bad guys
remove_action('wp_head', 'wp_generator');
add_filter('login_errors',create_function('$a', "return null;"));

if ( function_exists('register_sidebar') )
    register_sidebar();
?>

