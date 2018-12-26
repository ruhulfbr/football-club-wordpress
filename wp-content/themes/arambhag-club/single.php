<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>News details</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pb-70 pt-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12 mb-50">
            <?php 
                if(have_posts()){
                        the_post();
                    $tags = get_the_tags();
             ?>
                <!-- Single Blog Details -->
                <div class="single-blog-details fix">
                    
                    <!-- Blog Details Media -->
                    <div class="blog-details-media">
                        <?php the_post_thumbnail('post-single'); ?>
                    </div>
                                        
                    <!-- Blog Details Content -->
                    <div class="blog-details-content fix">
                        <h3 class="blog-title"><?php the_title(); ?></h3>
                        <div class="blog-meta fix">
                            <a href="#"><i class="zmdi zmdi-calendar-check"></i> <?php echo get_the_date(); ?></a>
                            <a href="#"><i class="zmdi zmdi-folder"></i> Sports</a>
                            <a href="#"><i class="zmdi zmdi-user"></i> <?php the_author(); ?></a>
                        </div>
                        <?php the_content(); ?>
                    </div>
                                        
                    <!-- Blog Details Footer -->
                    <div class="blog-details-footer fix">         
                        <!-- Blog Details Tags -->
                            <?php echo the_tags(); ?>
                        <!-- Blog Details Share -->
                        <div class="blog-share float-right">
                            <p>share:</p>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        
                    </div>
                    
                </div>
                <?php
                    }else{
                        echo "<h2>Post Not Found</h2>";
                    }
                    wp_reset_postdata();
                ?>

                <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="10"></div>
            </div>
            <!-- Blog Sidebar -->
            <div class="col-md-4 col-xs-12 mb-50">
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Search News</h4>
                    
                    <!-- <form action="#" id="search-form">
                        <input type="text" placeholder="Search">
                        <button><i class="zmdi zmdi-search"></i></button>
                    </form> -->
                    <?php echo get_search_form( $echo ); ?>
                    
                </div>
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Latest News</h4>
                    <?php
                        $post_query = null;
                        $post_query = new WP_query(array(
                                'post_type'=>'post',
                                'posts_per_page'=>5,
                                'order'=>'DESC'
                            ));
                        if($post_query->have_posts()){
                            while ($post_query->have_posts()) {
                                $post_query->the_post();
                    ?>
                    <div class="sidebar-post">
                        <a href="#" class="image float-left"><?php the_post_thumbnail('post-leatest'); ?></a>
                        <div class="content fix">
                        <?php 
                            $var = null;
                            $var = get_the_title();
                            $index = 6;
                            $var = explode(' ', $var, $index);
                            if(count($var) >= $index){
                            array_pop($var);
                            array_push($var, '...');
                            }
                            $var = implode(' ', $var);
                        ?>
                            <a href="<?php the_permalink(); ?>"><?php echo $var; ?></a>
                            <?php 
                                $var = get_the_content();
                                $index = 10;
                                $var = explode(' ', $var, $index);
                                if(count($var) >= $index){
                                array_pop($var);
                                }
                                $var = implode(' ', $var);
                            ?>
                            <p><?php echo $var; ?></p>
                        </div>
                    </div>
                    <?php } }else{echo "<h4>No post available plz add new Post</h4>";} wp_reset_postdata(); ?>
                    
                </div>
               
                <!-- Single Sidebar -->
                <div class="single-sidebar fix mb-30">
                    <h4>Tag Cloud</h4>
                    
                    <div class="tag-cloud">
                        <!-- <a href="#.">marketing</a> -->
                        <?php wp_tag_cloud(); ?>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->



<?php get_footer(); ?>