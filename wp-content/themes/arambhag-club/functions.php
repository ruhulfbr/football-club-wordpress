<?php

function theme_support(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slide-img', 1500, 660, true);
	add_image_size('match-result-logo', 118, 115, true);
	add_image_size('upcoming-match-logo', 84, 83, true);
	add_image_size('stuff-photo', 370, 284, true);
	add_image_size('post-home', 370, 230, true);
	add_image_size('post-single', 770, 480, true);
	add_image_size('post-leatest', 100, 80, true);
	add_image_size('about-page-about-area', 460, 300, true);
	register_nav_menus(array(
		'main_menu'=> 'Main Menu',
		'footer_menu'=> 'Footer Menu'
		));
}
add_action('after_setup_theme','theme_support');

function theme_fall_back_mennu(){ ?>
	<ul>
	    <li class="active"><a href="<?php echo site_url(); ?>">home</a></li>
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
	</ul>
<?php }


include_once('inc/theme-css-js.php');
include_once('inc/custom_post.php');
include_once('inc/cmb2-custom-field.php');


