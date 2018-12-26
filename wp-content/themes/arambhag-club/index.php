<?php get_header(); ?>

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>All News </h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pb-90 pt-120">
    <div class="container">
        <div class="row">
            <?php 
                if(have_posts()){
                    while(have_posts()) {
                        the_post();

             ?>            <!-- Single Blog -->
            <div class="blog-item col-md-4 col-sm-6 col-xs-12 mb-30">
                <!-- Image -->
                <div class="image"><?php the_post_thumbnail('post-home'); ?></div>
                <!-- Content -->
                <div class="content">
                    <!-- Meta -->
                    <div class="meta">
                        <p class="date"><?php echo get_the_date(); ?> | <?php the_time(); ?></p>
                        <p class="cat"><a href="#">Sports</a></p>
                        <p class="author">BY <a href="#"><?php the_author(); ?></a></p>
                    </div>
                    <!-- Title -->
                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php 
                        $var = null;
                        $var = get_the_title();
                        $index = 26;
                        $var = explode(' ', $var, $index);
                        if(count($var) >= $index){
                        array_pop($var);
                        }
                        $var = implode(' ', $var);
                    ?>
                    <p><?php echo $var; ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-more">READ MORE</a>
                </div>
            </div>

            <?php } ?>
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="pagination mt-30">
                                <?php
                                    the_posts_pagination(array(
                                        'prev_text'=>'<i class="zmdi zmdi-chevron-left"></i>',
                                        'next_text'=>'<i class="zmdi zmdi-chevron-right"></i>'
                                    )); 
                                ?>
                            </div>
                        </div>
                    </div>
            <?php
                }else{
                    echo "<h2>Post Not Found</h2>";
                }
                wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- Blog Area End -->

<?php get_footer(); ?>