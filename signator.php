<?php
/**
 * @package Signator
 */
/*
Plugin Name: Signator Plugin
Plugin URI: https://gichure.me.ke/products/signator.php
Description: This is an example of developing a wordpress plugin. Adds a sign off at the foot of every post
Version: 1.0.0
Author: Paul Gichure
Author URI: https://gichure.me.ke
Text Domain: Signator
*/
function gichure_content_footer_note($content) {
	$content .= '<footer class="renym-content-footer">Thank you for reading this post. Maybe you can buy coffee? For more goodies, visit our <a href="http://gichure.me.ke/products" title="Gichure Product Store">products store</a>.</footer>';
	return $content;
}
add_filter( 'the_content', 'gichure_content_footer_note' );


?>
