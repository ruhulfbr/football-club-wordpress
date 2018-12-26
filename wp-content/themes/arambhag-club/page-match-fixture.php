<?php get_header(); ?>
    <!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>Upcoming match fixtures</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Fixtures Area Start -->
<div id="fixtures-area" class="fixtures-area section pb-120 pt-120">
    <div class="container">
        <div class="row">
            
            <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                <!-- Fixtures Table -->
                <div class="table-responsive fixtures-table">
                    <table class="table">
                        <tr>
                            <th>SL</th>
                            <th>match</th>
                            <th>date</th>
                            <th>time</th>
                            <th>venue</th>
                        </tr>
                        <?php 
                            $match_fixture = null;
                            $match_fixture = new WP_Query(array(
                                'post_type'=> 'match_fixture',
                                'posts_per_page'=>-1,
                                'order'=>'ASC'
                            ));
                            $sl = 1;
                            if ($match_fixture->have_posts()) {
                                while ($match_fixture->have_posts()) {
                                    $match_fixture->the_post();
                                    $match_date = get_post_meta(get_the_ID(), '_club_match_date', true);
                                    $match_time = get_post_meta(get_the_ID(), '_club_match_time', true);
                                    $match_venue = get_post_meta(get_the_ID(), '_club_match_venue', true);
                        ?>
                        <tr>
                            <td><?php echo $sl++; ?></td>
                            <td><?php the_title(); ?></td>
                            <td><?php echo $match_date; ?></td>
                            <td><?php echo $match_time; ?></td>
                            <td><?php echo $match_venue; ?></td>
                        </tr>
                        <?php } }else{echo "There No Upcoming Match ! Add Some New";} wp_reset_postdata(); ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fixtures Area End -->
<?php get_footer(); ?>