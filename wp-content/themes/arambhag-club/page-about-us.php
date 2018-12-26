<?php get_header(); ?>
    <!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>about us</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- About Area Start -->
<div id="about-area" class="about-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            <?php 
                if(have_posts()){
                    the_post();
            ?>
            <!-- About Image -->
            <div class="about-image col-md-5 col-xs-12 float-right">
                <?php the_post_thumbnail('about-page-about-area'); ?>
            </div>
            <!-- About Content -->
            <div class="about-content about-content-2 col-md-7 col-xs-12">
                <?php the_content(); ?>
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Achievement Area Start -->
<div id="achievement-area" class="achievement-area section overlay pb-120 pt-120">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
           <div class="section-title title-white text-center col-xs-12 mb-70">
               <h1>TEAM ACHIEVEMENT</h1>
           </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- Achievement Timeline -->
                <div class="achievement-timeline">
                    <!-- Single Timeline -->
                    <?php 
                        $achievement = null;
                        $achievement = new WP_query(array(
                            'post_type'=>'team_achievement',
                            'posts_per_page'=>-1,
                            'order'=>'DESC'
                            ));
                        if($achievement->have_posts()){
                            while ($achievement->have_posts()) {
                                $achievement->the_post();
                                $achievement_year = get_post_meta(get_the_ID(), '_club_achievement_year', true);
                                $achievement_date = get_post_meta(get_the_ID(), '_club_achievement_date', true);
                    ?>
                    <div class="single-timeline">
                        <span class="date">
                            <span><?php echo $achievement_year; ?></span>
                        </span>
                        <div class="content fix">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                    <?php } }else{ echo "<h2>No Achievement !! Show Plz Add Achievement</h2>"; } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Achievement Area End -->

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
<?php get_footer(); ?>