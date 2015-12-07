<?php
/**
 * Template Name: Home
 *
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Galex
 * @since Galex 1.0
 */

$queried_post = get_post($_GET['id']);
echo "title: ".$queried_post->post_title."<br>";
echo json_encode($queried_post);