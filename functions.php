<?php
/*add logo code to wordpress login - this to modify the FORCE LOGIN plugin */
function my_login_logo() {
    echo '<style type="text/css">
           .login h1 a { background-image: url('.get_stylesheet_directory_uri().'/images/logo.gif) !important;
        }
    </style>';
}
add_action('login_head','my_login_logo');
/* end logo code */
/* logo url link code - when the logo is clicked */
add_filter('login_headerurl','my_login_logo_url');
function my_login_logo_url($url) {
        return 'https://ehspook.com';
}
/* end logo url link code */
/* logo tooltip code - when hover over logo */
function my_logoURLtext () {
    return 'EhSpook';
}
add_filter('login_headertitle','my_logoURLtext');
/* end logo tooltip code */
/**
 * Set the URL to redirect to on login.
 * This code was taken from FORCE LOGIN plugin
 * @return string URL to redirect to on login. Must be absolute.
 **/
function my_forcelogin_redirect() {
  return site_url( '/my-account/' );
}
add_filter('v_forcelogin_redirect', 'my_forcelogin_redirect', 10, 1);
/**
 * Filter Force Login to allow exceptions for specific URLs.
 * This code was taken from FORCE LOGIN plugin - "/" refers to home page
 * @return array An array of URLs. Must be absolute.
 **/
function my_forcelogin_whitelist( $whitelist ) {
  $whitelist[] = site_url( '/' );
  return $whitelist;
}
add_filter('v_forcelogin_whitelist', 'my_forcelogin_whitelist', 10, 1);
/* end whitelist URL exceptions */
/* change email sender from info after registration email when using wp_login.php */
function my_wp_mail_from_name($name) {
    return 'EhSpook';
}
/* change email sender from-name in registration email */
function my_wp_mail_from($content_type) {
  return 'admin@ehspook.com';
}
add_filter('wp_mail_from','my_wp_mail_from');
add_filter('wp_mail_from_name','my_wp_mail_from_name');
/* end change sender info after registration email */
?>