<?php

function my_slider($para,$content){
	$para = shortcode_atts(array(
			'fz'=> '25px',
			'color'=> 'red'
		), $para);
	ob_start();
?>
	<h2 style="color: <?php echo $para['color']; ?>; font-size: <?php echo $para['fz']; ?>"><?php echo  $content; ?></h2>
<?php
	return ob_get_clean();
}

add_shortcode('myslider','my_slider');

function ebit_slider($para,$content){
	$para = shortcode_atts(array(
		'id'=>0
		), $para);
	ob_start();
?>
                <div id="carousel-1<?php echo $para['id']; ?>" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <!-- Begin Slide-->
                        <?php 
                            $ebit_post = null;
                            $ebit_post = new WP_Query(
                                array(
                                    'post_type'=>'slider',
                                    'posts_per_page'=>-1,
                                    )
                                );
                            $x = 0;

                            if($ebit_post->have_posts()){
                                while($ebit_post->have_posts()){
                                    $x++;
                                    $ebit_post->the_post();
                                    $slider_caption = get_post_meta(get_the_ID(), '_office-master_slider_caption', true);
                        ?>
                        <div class="item <?php if($x==1){echo "active";} ?>">
                            <?php the_post_thumbnail('slide-img'); ?>
                            <div class="carousel-caption">
                                <h3 class="carousel-title hidden-xs"><?php the_title(); ?></h3>
                                <p class="carousel-body"><?php echo $slider_caption; ?></p>
                            </div>
                        </div>
                        <?php
                                }
                            }else{
                                echo "No post";
                            }
                            wp_reset_postdata();
                        ?>
                        <!-- End Slide -->
                    </div>
                     <!-- Indicators -->
                    <ol class="carousel-indicators visible-lg">
                        <?php 
                            for($i=0;$i<$x;$i++){
                        ?>
                        <li data-target="#carousel-1<?php echo $para['id']; ?>" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo "active";} ?>"></li>
                        <?php } ?>
                    </ol>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-1<?php echo $para['id']; ?>" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-1<?php echo $para['id']; ?>" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>

<?php
	return ob_get_clean();
}
add_shortcode('ebitslider','ebit_slider');