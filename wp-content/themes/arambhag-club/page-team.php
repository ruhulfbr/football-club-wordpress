<?php get_header(); ?>
    <!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>our team</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->
<!-- Staff Area Start -->
<div id="staff-area" class="staff-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <!-- Staff Tab List -->
                <ul class="staff-tab-list nav nav-tabs text-center TeamPageUlBorder" role="tablist">
                    <li class="active"><a href="#management" data-toggle="tab">Management</a></li>
                    <li><a href="#coach" data-toggle="tab">Coach</a></li>
                    <li><a href="#player" data-toggle="tab">Player</a></li>
                </ul>
            </div>
            <!-- Staff Tab panes -->
            <div class="tab-content">
                <!-- Manager Tab -->
                <div role="tabpanel" class="tab-pane active" id="management">
                        <!-- Single Stuff -->
                        <?php
                            $management = null;
                            $management = new WP_Query(array(
                                'post_type'=>'management',
                                'posts_per_page'=>-1,
                                'order'=>'ASC'
                                ));
                            if($management->have_posts()){
                                while ($management->have_posts()) {
                                    $management->the_post();
                                    $member_post_name = get_post_meta(get_the_ID(), '_club_management_member_post_name', true);
                        ?>
                        <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
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
                <!-- First Team Tab -->
                <div role="tabpanel" class="tab-pane" id="coach">
                        <?php
                            $coach = null;
                            $coach = new WP_Query(array(
                                'post_type'=>'coach',
                                'posts_per_page'=>-1,
                                'order'=>'ASC'
                                ));
                            if($coach->have_posts()){
                                while ($coach->have_posts()) {
                                    $coach->the_post();
                                    $coach_for = get_post_meta(get_the_ID(), '_club_coach_for', true);
                        ?>
                        <!-- Single Stuff -->
                        <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
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
                <!-- Academy Tab -->
                <div role="tabpanel" class="tab-pane" id="player">
                        <?php
                            $player = null;
                            $player = new WP_Query(array(
                                'post_type'=>'player',
                                'posts_per_page'=>-1,
                                'order'=>'ASC'
                                ));
                            if($player->have_posts()){
                                while ($player->have_posts()) {
                                    $player->the_post();
                                    $playing_area = get_post_meta(get_the_ID(), '_club_playing_area', true);
                                    $player_number = get_post_meta(get_the_ID(), '_club_player_number', true);
                        ?>
                        <!-- Single Stuff -->
                        <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
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
<!-- Staff Area End -->
<?php get_footer(); ?>