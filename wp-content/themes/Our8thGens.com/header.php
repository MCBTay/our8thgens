<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<!-- PHPBB META TAGS -->
<meta http-equiv="content-type" content="text/html; charset='<?php bloginfo( 'charset' ); ?>'" />
<meta name="robots" content="index, follow">

<meta name="author" content="Our8thGens">

<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!-- END PHPBB META TAGS -->
<title><?php wp_title( '•', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<!-- HTML5 FOR OLD BROWSERS: -->
<!--[if lt IE 9]>
<script src="../../../forum/styles/Mobbern3/1/theme/js/html5shiv.min.js"></script>
<![endif]-->

<link rel="shortcut icon" href="../../../forum/styles/Mobbern3.1/theme/images/favicon.ico" />

    <style type="text/css">
        /* MTCP CSS */
        /* Custom background-color: */
        body { background-color: #EEE !important; }

        /* Body Font Size: */
        body { font-size: 12px !important; }

        /* Full-Width Layout: */
        @media (min-width: 979px) {
            .container { width: 100% !important; }
            #page-body, .container { padding-left: 30px !important; padding-right: 30px !important; }
            .full-width .layout-with-right-sidebar #left-column { width: 70%; padding-right: 20px; }
            .full-width .layout-with-right-sidebar #right-column { width: 30%; max-width: 300px; }
        }

        /* END: MTCP CSS */
    </style>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap" class="">
    <div id="page-header">
        <header class="header-body" id="mobbern-header-2">

            <!-- Header Navbar -->
            <nav id="main-navbar" class="navbar navbar-default navbar-static-top">
                <div class="container">

                <div class="nav-content">

                <div class="float-left">
                    <ul class="nav float-left">

                    </ul>

                    <div class="navbar-collapse collapse float-left">
                        <ul class="nav navbar-nav">
                            <li class="menu-item-custom">
                                <a id="logo" href="http://www.our8thgens.com" title="Board index">
                                    <i class="icon fa fa-car lazyIcon"></i>
                                    Home
                                </a>
                            </li>
                            <!-- START: User Menu Items -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-share-alt lazyIcon"></i>Forum
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" style="opacity: 0;">



                                    <li><a href="http://www.our8thgens.com/forum/search.php?search_id=active_topics"><i class="fa fa-exchange lazyIcon"></i>View active topics</a></li>
                                    <li><a href="http://www.our8thgens.com/forum/search.php?search_id=unanswered"><i class="fa fa-folder lazyIcon"></i>View unanswered posts</a></li>


                                    <li class="divider"></li>

                                    <li><a href="http://www.our8thgens.com/forum/ucp.php?mode=delete_cookies"><i class="fa fa-times lazyIcon"></i>Delete all board cookies</a></li>

                                    <li class="divider"></li>


                                    <li><a href="http://www.our8thgens.com/forum/ucp.php?mode=terms" title="Terms of use"><i class="fa fa-leaf lazyIcon"></i>Terms of use</a></li>
                                    <li><a href="http://www.our8thgens.com/forum/ucp.php?mode=privacy" title="Privacy policy"><i class="fa fa-gavel lazyIcon"></i>Privacy policy</a></li>


                                    <li><a href="http://www.our8thgens.com/forum/faq.php" title="Frequently Asked Questions"><i class="fa fa-question lazyIcon"></i>FAQ</a></li>

                                </ul>
                            </li>
                            <!-- END: User Menu Items -->

                            <?php
                                $uri = $_SERVER['REQUEST_URI'];

                                $is_blog = false;
                                if (substr( $uri, 0, 5 ) === "/blog")
                                    $is_blog = true;
                            ?>

                            <li class="menu-item-custom <?php if ($is_blog) { echo 'active'; } ?>">
                                <a href="http://www.our8thgens.com/blog" title="Blog">
                                    <i class="icon fa fa-comments-o lazyIcon"></i>Blog
                                </a>
                            </li>

                            <li class="menu-item-custom <?php if (!$is_blog) { echo 'active'; } ?>">
                                <a href="http://www.our8thgens.com/shop" title="Shop">
                                    <i class="icon fa fa-shopping-cart lazyIcon"></i>Shop
                                </a>
                            </li>

                            <!--li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon fa fa-shopping-cart lazyIcon"></i>Shop
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" style="opacity: 0;">
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#"><i class="icon fa fa-user lazyIcon">My Account</i></a></li>
                                    <li><a href="#"><i class="icon fa fa-shopping-cart lazyIcon"></i>Cart</a></li>
                                    <li><a href="#"><i class="icon fa fa-cc-paypal lazyIcon"></i>Checkout</a></li>
                                </ul>
                            </li-->

                        </ul>
                    </div>
                </div><!-- /.float-left -->


                <div class="float-right">
                    <ul class="nav navbar-nav">
                        <li>
                            <?php get_search_form(); ?>
                        </li>
                    </ul>
                </div><!-- /.float-right -->
                </div><!-- /.nav-content -->
                </div><!-- /.container -->
            </nav><!-- /#main-navbar -->

            <div class="float-clear"></div>
        </header><!-- /#mobbern-header-2 -->
    </div><!-- /#page-header -->

    <!-- Breadcrumb Navigation Bar
    ================================================== -->
    <div class="navbar beadcrumb">
        <div class="container">
            <ul class="navitems">
                <li>
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb('<i class="fa fa-home lazyIcon"></i>','');
                    } ?>
                </li>
            </ul>
        </div><!-- /.container -->
    </div><!-- /.navbar.beadcrumb -->
    <!-- END: BREADCRUMB -->


    <div id="featured_images_carousel" class="carousel slide" data-ride="carousel" style="margin-top: 10px;">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="http://www.our8thgens.com">
                    <img src="../../../forum/styles/Mobbern3.1/theme/images/header/header-<?php echo mt_rand(1, 57); ?>.jpg" />
                </a>
            </div>
        </div>
    </div>

    <div id="page-body" class="page-width container layout-with-right-sidebar" style="width: 1200px !important; padding-left: 15px !important; padding-right: 15px !important; max-width:100%">
