<?php

if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}
add_action('cmb2_admin_init','club_cmb2');

function club_cmb2(){

	$prefix = '_club_';
// Regular text field For slider
	$slider_item = new_cmb2_box( array(
		'id'            => 'slider_metabox',
		'title'         => __( 'Sliders Metabox', 'club' ),
		'object_types'  => array('slider'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$slider_item->add_field( array(
		'name'       => __( 'Slider Desc', 'club' ),
		'desc'       => __( 'Write Slider Desc Here', 'club' ),
		'id'         => $prefix.'slider_desc',
		'type'       => 'textarea_small',
	) );

	$slider_item->add_field( array(
		'name'       => __( 'Slider Link button title', 'club' ),
		'desc'       => __( 'Write Slider Link button title here', 'club' ),
		'id'         => $prefix.'slider_link_title',
		'type'       => 'text',
	) );


	$slider_item->add_field( array(
		'name'       => __( 'Slider Link Button', 'club' ),
		'desc'       => __( 'Select Slider Link', 'club' ),
		'id'         => $prefix.'slider_link',
		'type'       => 'select',
		'show_option_none' => true,
		'options'          => array(
				'#next-match-area' => __( 'Next Match', 'club' ),
				'#result-area'   => __( 'Match Result', 'club' ),
				'#point-table-area'     => __( 'Point Table', 'club' ),
			),
	) );

// Regular text field for Leatest Match Result
	$service_item = new_cmb2_box( array(
		'id'            => 'result_metabox',
		'title'         => __( 'Last Match Result Metabox', 'club' ),
		'object_types'  => array( 'match_result'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$service_item->add_field( array(
		'name'       => __( 'Held on Date', 'club' ),
		'desc'       => __( 'Pick Date of the Match', 'club' ),
		'id'         => $prefix.'match_result_date',
		'type'       => 'text_date',
		'date_format' => 'M d,Y'
	) );
	$service_item->add_field( array(
		'name'       => __( 'Held On Time', 'club' ),
		'desc'       => __( 'Pick Time of the Match', 'club' ),
		'id'         => $prefix.'match_result_time',
		'type'       => 'text_time',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Name of First Team', 'club' ),
		'desc'       => __( 'Write Here Of First Team Name', 'club' ),
		'id'         => $prefix.'first_team_name',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Logo of First Team', 'club' ),
		'desc'       => __( 'Upload Logo Of First Team', 'club' ),
		'id'         => $prefix.'first_team_logo',
		'type'       => 'file',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Goal Number of First Team', 'club' ),
		'desc'       => __( 'Write Here Goal Number of First Team', 'club' ),
		'id'         => $prefix.'first_team_goal',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Name of Second Team', 'club' ),
		'desc'       => __( 'Write Here Of Second Team Name', 'club' ),
		'id'         => $prefix.'second_team_name',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Logo of Second Team', 'club' ),
		'desc'       => __( 'Upload Logo Of Second Team', 'club' ),
		'id'         => $prefix.'second_team_logo',
		'type'       => 'file',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Goal Number of Second Team', 'club' ),
		'desc'       => __( 'Write Here Goal Number of Second Team', 'club' ),
		'id'         => $prefix.'second_team_goal',
		'type'       => 'text',
	) );

	// Regular text field for Upcoming Match
	$service_item = new_cmb2_box( array(
		'id'            => 'upcoming_match_metabox',
		'title'         => __( 'Upcoming Match Metabox', 'club' ),
		'object_types'  => array('upcoming_match'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );

	$service_item->add_field( array(
		'name'       => __( 'Held on Date', 'club' ),
		'desc'       => __( 'Pick Date of the Match', 'club' ),
		'id'         => $prefix.'upcoming_match_date',
		'type'       => 'text_date',
		'date_format' => 'Y/m/d'
	) );
	$service_item->add_field( array(
		'name'       => __( 'Held On Time', 'club' ),
		'desc'       => __( 'Pick Time of the Match', 'club' ),
		'id'         => $prefix.'upcoming_match_time',
		'type'       => 'text_time',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Upcoming Match Venue', 'club' ),
		'desc'       => __( 'Write Here Upcoming Match Venue', 'club' ),
		'id'         => $prefix.'upcoming_match_venue',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Name of First Team', 'club' ),
		'desc'       => __( 'Write Here Of First Team Name', 'club' ),
		'id'         => $prefix.'upcoming_match_first_team_name',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Logo of First Team', 'club' ),
		'desc'       => __( 'Upload Logo Of First Team', 'club' ),
		'id'         => $prefix.'upcoming_match_first_team_logo',
		'type'       => 'file',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Name of Second Team', 'club' ),
		'desc'       => __( 'Write Here Of Second Team Name', 'club' ),
		'id'         => $prefix.'upcoming_match_second_team_name',
		'type'       => 'text',
	) );
	$service_item->add_field( array(
		'name'       => __( 'Logo of Second Team', 'club' ),
		'desc'       => __( 'Upload Logo Of Second Team', 'club' ),
		'id'         => $prefix.'upcoming_match_second_team_logo',
		'type'       => 'file',
	) );

		//Text field for ManageMent member

	$team_member = new_cmb2_box( array(
		'id'            => 'management_metabox',
		'title'         => __( 'Management Member Metabox', 'club' ),
		'object_types'  => array('management'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$team_member->add_field( array(
		'name'       => __( 'Management Member Post Name', 'club' ),
		'desc'       => __( 'Write Here Management Member Post Name', 'club' ),
		'id'         => $prefix.'management_member_post_name',
		'type'       => 'text',
	) );

			//Text field for Coach member

	$team_member = new_cmb2_box( array(
		'id'            => 'coach_metabox',
		'title'         => __( 'Coach Member Metabox', 'club' ),
		'object_types'  => array('coach'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$team_member->add_field( array(
		'name'       => __( 'Coach for', 'club' ),
		'desc'       => __( 'Write Here Coach for', 'club' ),
		'id'         => $prefix.'coach_for',
		'type'       => 'text',
	) );

		//Text field for Coach member

	$team_member = new_cmb2_box( array(
		'id'            => 'player_metabox',
		'title'         => __( 'Player Metabox', 'club' ),
		'object_types'  => array('player'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$team_member->add_field( array(
		'name'       => __( 'Playing area', 'club' ),
		'desc'       => __( 'Write Here Playing area of player', 'club' ),
		'id'         => $prefix.'playing_area',
		'type'       => 'text',
	) );
	$team_member->add_field( array(
		'name'       => __( 'Player Number', 'club' ),
		'desc'       => __( 'Write Here Player Number', 'club' ),
		'id'         => $prefix.'player_number',
		'type'       => 'text',
	) );

	//Text field for team Achivement

	$team_member = new_cmb2_box( array(
		'id'            => 'team_achievement_metabox',
		'title'         => __( 'Team Achievement Metabox', 'club' ),
		'object_types'  => array('team_achievement'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$team_member->add_field( array(
		'name'       => __( 'Achievement Year', 'club' ),
		'desc'       => __( 'Achievement Year', 'club' ),
		'id'         => $prefix.'achievement_year',
		'type'       => 'text',
	) );
	$team_member->add_field( array(
		'name'       => __( 'Achievement Date', 'club' ),
		'desc'       => __( 'Achievement Date', 'club' ),
		'id'         => $prefix.'achievement_date',
		'type'       => 'text_date',
	) );

	$team_member = new_cmb2_box( array(
		'id'            => 'match_fixture_metabox',
		'title'         => __( 'Match Fixture Metabox', 'club' ),
		'object_types'  => array('match_fixture'), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$team_member->add_field( array(
		'name'       => __( 'Match Date', 'club' ),
		'desc'       => __( 'Match Date', 'club' ),
		'id'         => $prefix.'match_date',
		'type'       => 'text_date',
	) );
	$team_member->add_field( array(
		'name'       => __( 'Match Time', 'club' ),
		'desc'       => __( 'Match Time', 'club' ),
		'id'         => $prefix.'match_time',
		'type'       => 'text_time',
	) );
	$team_member->add_field( array(
		'name'       => __( 'Match Venue', 'club' ),
		'desc'       => __( 'Name of Match Venue', 'club' ),
		'id'         => $prefix.'match_venue',
		'type'       => 'text',
	) );


}