
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    
    <?php wp_head(); ?>
</head>

<body>
<!-- Body main wrapper start -->
<div class="wrapper fix">

<!-- Header Area Start -->
<div id="header-area" class="header-area section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Logo -->
                <a class="logo float-left" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
                <!-- Mini Cart -->
                <div class="mini-cart float-right">
                    <a href="cart.html">Login</a>
                </div>
                <!---- Menu ---->
                <div id="main-menu" class="main-menu float-right">
                    <nav>
                        <!-- <ul>
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="about.html">about</a></li>
                            <li><a href="team.html">team</a></li>
                            <li><a href="fixture.html">fixture</a></li>
                            <li><a href="point-table.html">point table</a></li>
                            <li><a href="blog.html">blog</a>
                                <ul>
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li><a href="shop.html">shop</a>
                                <ul>
                                    <li><a href="shop.html">shop</a></li>
                                    <li><a href="product-details.html">product details</a></li>
                                    <li><a href="cart.html">cart</a></li>
                                    <li><a href="wishlist.html">wishlist</a></li>
                                    <li><a href="checkout.html">checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contact</a></li>
                        </ul> -->
                        <?php 
                            wp_nav_menu(array(
                                'theme_location'=>'main_menu',
                                'fallback_cb'=> 'theme_fall_back_mennu',
                                'container'=>'nav',
                            ));
                        ?>
                    </nav>
                </div>
                <!---- Mobile Menu ---->
                <div class="mobile-menu"></div>
            </div>
        </div>
    </div>
</div>
<!-- Header Area End -->
