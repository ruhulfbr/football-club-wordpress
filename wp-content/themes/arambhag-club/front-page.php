<?php get_header(); ?>
<!-- Hero Area Start -->
<div id="hero-area" class="hero-area section">
    <!-- Hero Slider Start -->
    <div class="hero-slider">
        <!-- Single Hero Item --> 
         <?php 
            $club_slider = null;
            $club_slider = new WP_Query(
                array(
                    'post_type'=>'slider',
                    'posts_per_page'=>-1,
                    'order' => 'ASC'
                    )
                );
            $x = 0;

            if($club_slider->have_posts()){
                while($club_slider->have_posts()){
                    $x++;
                    $club_slider->the_post();
                    $slider_desc = get_post_meta(get_the_ID(), '_club_slider_desc', true);
                    $slider_link = get_post_meta(get_the_ID(), '_club_slider_link', true);
                    $link_title = get_post_meta(get_the_ID(), '_club_slider_link_title', true);
        ?>
        <div class="hero-item">
            <!-- Hero Slider Image -->
            <?php the_post_thumbnail('slide-img'); ?>
            <div class="container">
                <div class="row">
                    <!-- Hero Slider Content -->
                    <div class="hero-content col-md-10 col-xs-12">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo $slider_desc; ?></p>
                        <?php if(!empty($slider_link) && !empty($link_title)){ ?>
                        <a href="<?php echo $slider_link; ?>" data-scroll><?php echo $link_title; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
            }else{
                echo "No post";
            }
            wp_reset_postdata();
        ?>

    </div>
    <!---- Hero Slider End ---->
</div>
<!-- Hero Area End -->

<!-- About Area Start -->
<div id="about-area" class="about-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            <?php
                $page_post = null;
                $page_post = new WP_Query(array(
                        'post_type'=>'page',
                        'posts_per_page'=>-1
                    ));
                if($page_post->have_posts()){
                    while ( $page_post->have_posts() ) {
                        $page_post->the_post();
                    if(get_the_ID()==6){
            ?>
            <!-- About Image -->
            <div class="about-image col-md-5 col-xs-12">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="about-content col-md-7 col-xs-12">
                <?php the_content(); ?>
            </div>
            <?php } } } ?>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Result Area Start -->
<div id="result-area" class="result-area section pb-120">
    <div class="container">
        <?php
            $match_result = null;
            $match_result = new WP_Query(array(
                    'post_type'=>'match_result',
                    'posts_per_page'=>1,
                    'order'=>'DESC'
                ));
            if($match_result->have_posts()){
                while($match_result->have_posts()){
                $match_result->the_post();
                $result_date = get_post_meta(get_the_ID(), '_club_match_result_date', true);
                $result_time = get_post_meta(get_the_ID(), '_club_match_result_time', true);
                $first_team_name = get_post_meta(get_the_ID(), '_club_first_team_name', true);
                $first_team_logo = get_post_meta(get_the_ID(), '_club_first_team_logo', ture);
                $first_team_goal = get_post_meta(get_the_ID(), '_club_first_team_goal', true);
                $second_team_name = get_post_meta(get_the_ID(), '_club_second_team_name', true);
                $second_team_logo = get_post_meta(get_the_ID(), '_club_second_team_logo', true);
                $second_team_goal = get_post_meta(get_the_ID(), '_club_second_team_goal', true);
        ?>
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>Last Match Result</h1><br>
               <h4><?php the_title(); ?></h4>
               <h5>Match Held on <?php echo $result_date; ?> at <?php echo $result_time; ?></h5>
           </div>
        </div>
        <div class="row">
            <!-- Latest Result Wrapper -->
            <div class="latest-result-wrapper fix">
                <!-- Single Result -->
                <div class="col-md-6 col-xs-12">
                    <div class="single-result result-left">
                        <img  class="team-banner" src="<?php echo $first_team_logo; ?>" alt="">
                        <div class="content float-left">
                            <h3 class="team-name"><span class="left"><?php echo $first_team_name; ?></span> <span class="total-goal right">( <?php echo $first_team_goal; ?> )</span> <span class="border"></span></h3>
                            <ul class="goalers">
                                <li></li>
                                <li></li>
                            </ul>
                            <?php 
                                if($second_team_goal>$first_team_goal){
                                    $result = 'LOSS';
                                }else if($second_team_goal<$first_team_goal){
                                    $result = 'WIN';
                                }else{
                                   $result = 'Match Draw'; 
                                }
                            ?>
                            <h2 class="final-result"><?php echo $result; ?></h2>
                            <?php $result = null; ?>
                        </div>
                    </div>
                </div>
                <span class="vs">vs</span>
                <!-- Single Result -->
                <div class="col-md-6 col-xs-12">
                    <div class="single-result result-right">
                        <img  class="team-banner" src="<?php echo $second_team_logo; ?>" alt="">
                        <div class="content float-right">
                            <h3 class="team-name"><span class="left"><?php echo $second_team_name; ?></span> <span class="total-goal right">( <?php echo $second_team_goal; ?> )</span> <span class="border"></span></h3>
                            <ul class="goalers">
                                <li></li>
                                <li></li>
                            </ul>
                            <?php 
                                if($second_team_goal>$first_team_goal){
                                    $result = 'WIN';
                                }else if($second_team_goal<$first_team_goal){
                                    $result = 'LOSS';
                                }else{
                                   $result = 'Match Draw'; 
                                }
                            ?>
                            <h2 class="final-result"><?php echo $result; ?></h2>
                            <?php $result = null; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
                }
            }else{
                echo "No Result Show";
            }
            wp_reset_postdata();
        ?>
    </div>
</div>
<!-- Result Area End -->

<!-- Next Match Area Start -->
<div id="next-match-area" class="next-match-area overlay section pb-110 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title title-white text-center col-xs-12 mb-70">
               <h1>Upcoming matchs</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <!-- Upcoming Match -->
                <div class="upcoming-match">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php
                                $upcoming_match = null;
                                $upcoming_match = new WP_Query(array(
                                    'post_type'=>'upcoming_match',
                                    'posts_per_page'=>5,
                                    'order'=>'DESC'
                                ));
                                $x=0;
                                if($upcoming_match->have_posts()){
                                    while($upcoming_match->have_posts()){
                                    $x++;
                                    $upcoming_match->the_post();

                                    $match_date = get_post_meta(get_the_ID(), '_club_upcoming_match_date', true);
                                    $match_time = get_post_meta(get_the_ID(), '_club_upcoming_match_time', true);
                                    $venue = get_post_meta(get_the_ID(), '_club_upcoming_match_venue', true);
                                    $first_team_name = get_post_meta(get_the_ID(), '_club_upcoming_match_first_team_name', true);
                                    $first_team_logo = get_post_meta(get_the_ID(), '_club_upcoming_match_first_team_logo', true);
                                    $second_team_name = get_post_meta(get_the_ID(), '_club_upcoming_match_second_team_name', true);
                                    $second_team_logo = get_post_meta(get_the_ID(), '_club_upcoming_match_second_team_logo', true);
                            ?>
                            <div class="item <?php if($x==1){echo "active"; } ?>">
                              <!-- Upcoming Match Teams -->
                                <div class="teams">
                                    <div class="nms-team">
                                        <div class="image float-left"><img style="height:83px;width:84px;" src="<?php echo $first_team_logo; ?>" alt=""></div>
                                        <h4><?php echo $first_team_name; ?></h4>
                                    </div>
                                    <span class="vs">vs</span>
                                    <div class="nms-team">
                                        <h4><?php echo $second_team_name; ?></h4>
                                        <div class="image float-right"><img style="height:83px;width:84px;" src="<?php echo $second_team_logo; ?>" alt=""></div>
                                    </div>
                                </div>
                                <!-- Upcoming Match Time & Venue -->
                                <div class="match-time-venue text-center">
                                    <span><?php echo $match_date; ?>  |  <?php echo $match_time; ?></span>
                                    <h4>Venue : <?php echo $venue; ?></h4>
                                </div>
                                <!-- Upcoming Match Countdown -->
                                <div class="next-match-countdown" data-countdown="<?php echo $match_date; ?>"></div>
                            </div>
                                    <?php
                                        }
                                        }else{
                                            echo "No Upcomming Match Show";
                                        }
                                        wp_reset_postdata();
                                    ?>
                        </div>
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="fa fa_css fa-chevron-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                      </a><?php  ?>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="fa fa_css fa-chevron-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Next Match Area End -->

<!-- Staff Area Start -->
<div id="staff-area" class="staff-area section pb-120 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>Team</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                <!-- Staff Tab List -->
                <ul class="staff-tab-list nav nav-tabs text-center" role="tablist">
                    <li class="active"><a href="#management" data-toggle="tab">Management</a></li>
                    <li><a href="#coach" data-toggle="tab">Coach</a></li>
                    <li><a href="#player" data-toggle="tab">Player</a></li>
                </ul>
            </div>
            <!-- Staff Tab panes -->
            <div class="tab-content">
                <!-- Manager Tab -->
                <div role="tabpanel" class="tab-pane active" id="management">
                    <!-- Stuff Slider -->
                    <div class="staff-slider">
                        <!-- Single Stuff -->
                        <?php
                            $management = null;
                            $management = new WP_Query(array(
                                'post_type'=>'management',
                                'posts_per_page'=>4,
                                'order'=>'ASC'
                                ));
                            if($management->have_posts()){
                                while ($management->have_posts()) {
                                    $management->the_post();
                                    $member_post_name = get_post_meta(get_the_ID(), '_club_management_member_post_name', true);
                        ?>
                        <div class="staff-item col-xs-12">
                            <div class="image"><?php the_post_thumbnail('stuff-photo'); ?></div>
                            <div class="content">
                                <div class="details">
                                    <h4><a href="#"><?php the_title(); ?></a></h4>
                                    <p><?php echo $member_post_name; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }else{
                                echo "<h2>Management Member Not Found</h2>";
                            }
                            wp_reset_postdata();
                        ?>

                    </div>
                </div>
                <!-- First Team Tab -->
                <div role="tabpanel" class="tab-pane" id="coach">
                    <!-- Stuff Slider -->
                    <div class="staff-slider">
                        <?php
                            $coach = null;
                            $coach = new WP_Query(array(
                                'post_type'=>'coach',
                                'posts_per_page'=>4,
                                'order'=>'ASC'
                                ));
                            if($coach->have_posts()){
                                while ($coach->have_posts()) {
                                    $coach->the_post();
                                    $coach_for = get_post_meta(get_the_ID(), '_club_coach_for', true);
                        ?>
                        <!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><?php the_post_thumbnail('stuff-photo'); ?></div>
                            <div class="content">
                                <div class="details">
                                    <h4><a href="#"><?php the_title(); ?></a></h4>
                                    <p><?php echo $coach_for; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            }else{
                                echo "<h2>Coach Member Not Found</h2>";
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <!-- Academy Tab -->
                <div role="tabpanel" class="tab-pane" id="player">
                    <!-- Stuff Slider -->
                    <div class="staff-slider">
                        <?php
                            $player = null;
                            $player = new WP_Query(array(
                                'post_type'=>'player',
                                'posts_per_page'=>4,
                                'order'=>'ASC'
                                ));
                            if($player->have_posts()){
                                while ($player->have_posts()) {
                                    $player->the_post();
                                    $playing_area = get_post_meta(get_the_ID(), '_club_playing_area', true);
                                    $player_number = get_post_meta(get_the_ID(), '_club_player_number', true);
                        ?>
                        <!-- Single Stuff -->
                        <div class="staff-item col-xs-12">
                            <div class="image"><?php the_post_thumbnail('stuff-photo'); ?></div>
                            <div class="content">
                                <div class="details">
                                    <h4><a href="#"><?php the_title(); ?></a></h4>
                                    <p><?php echo $playing_area; ?></p>
                                </div>
                                <h2 class="num"><?php echo $player_number; ?></h2>
                            </div>
                        </div>
                        <?php
                                }
                            }else{
                                echo "<h2>Player Not Found</h2>";
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Staff Area End -->

<!-- Funfact Area Start -->
<div class="funfact-area section overlay pb-60 pt-90">
    <div class="container">
        <div class="row">
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">2000</h1>
                    <h3>Goals</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">180</h1>
                    <h3>Active Playears</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">580</h1>
                    <h3>Win</h3>
                </div>
            </div>
            <!-- Single Funfact -->
            <div class="col-sm-3 col-xs-6 text-center mb-30">
                <div class="single-funfact text-right">
                    <h1 class="counter">190</h1>
                    <h3>Awards</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Funfact Area End -->

<!-- Gallery Area Start -->
<div id="gallery-area" class="gallery-area section overlay pb-100 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title title-white text-center col-xs-12 mb-70">
               <h1>Photo gallery</h1>
           </div>
        </div>
        <div class="row row-10">
            <!-- Single Gallery Image -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/big-1.jpg" class="gallery-item overlay gallery-popup"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/1.jpg" alt=""></a>
            </div>
            <!-- Single Gallery Image -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/big-2.jpg" class="gallery-item overlay gallery-popup"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/2.jpg" alt=""></a>
            </div>
            <!-- Single Gallery Image -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/big-3.jpg" class="gallery-item overlay gallery-popup"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/3.jpg" alt=""></a>
            </div>
            <!-- Single Gallery Image -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/big-4.jpg" class="gallery-item overlay gallery-popup"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/4.jpg" alt=""></a>
            </div>
            <!-- Single Gallery Image -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/big-5.jpg" class="gallery-item overlay gallery-popup"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/5.jpg" alt=""></a>
            </div>
            <!-- Single Gallery Image -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/big-6.jpg" class="gallery-item overlay gallery-popup"><img src="<?php echo get_template_directory_uri(); ?>/img/gallery/6.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<!-- Gallery Area End -->

<!-- Blog Area Start -->
<div id="blog-area" class="blog-area section pb-90 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title text-center col-xs-12 mb-70">
               <h1>latest news</h1>
           </div>
        </div>
        <div class="row">
            <?php 
                $post_query = new WP_Query(array(
                        'post_type'=>'post',
                        'posts_per_page'=>3,
                        'order'=>'DESC'
                    ));
                if($post_query->have_posts()){
                    while($post_query->have_posts()) {
                        $post_query->the_post();

             ?>            <!-- Single Blog -->
            <div class="blog-item col-md-4 col-sm-6 col-xs-12 mb-30">
                <!-- Image -->
                <div class="image"><?php the_post_thumbnail('post-home'); ?></div>
                <!-- Content -->
                <div class="content">
                    <!-- Meta -->
                    <div class="meta">
                        <p class="date"><?php the_date('d M Y'); ?> | <?php the_time(); ?></p>
                        <p class="cat"><a href="#">Sports</a></p>
                        <p class="author">BY <a href="#"><?php the_author(); ?></a></p>
                    </div>
                    <!-- Title -->
                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php 
                        $var = get_the_content();
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

            <?php
                    }
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