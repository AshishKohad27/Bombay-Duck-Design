<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$bootstrap_version = get_theme_mod('understrap_bootstrap_version', 'bootstrap4');
$navbar_type = get_theme_mod('understrap_navbar_type', 'collapse');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">

		<!-- ******************* The Navbar Area ******************* -->

		<header id="wrapper-navbar">



			<!-- Project Header Page -->
			<header class="pronav-outer">
				<div class="pronav-inner">
					<div class="pronav-logoborder">
						<a href="./home">
							<svg width="219.047" height="170.398" viewBox="0 0 219.047 170.398">
								<path id="Path_29" data-name="Path 29"
									d="M219.047,86.148,194.121,66.7a36.5,36.5,0,0,0-57.029-44.5L108.65,0,82.637,20.623A36.505,36.505,0,0,0,26.47,65.16L0,86.148,25.692,106.07a36.5,36.5,0,0,0,56.2,43.576L108.65,170.4l29.167-22.259a36.506,36.506,0,0,0,57.168-43.628ZM154.26"
									transform="translate(0 0.001)" fill="transparent" stroke="#00b900"
									stroke-width="3" />
							</svg>
						</a>
					</div>
					<div class="pronav-logo">

					</div>
					<div class="pronav-navigation">
						<h1>
							<a href="./project_1">
								< Back to Menu </a>
						</h1>
						<h1>
							<a href="./project_2">
								Next Project >
							</a>
						</h1>
					</div>
				</div>
			</header>


		</header>


		<!-- #wrapper-navbar -->