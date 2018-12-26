<?php

function offic_master_custom_post(){
	register_post_type('slider', array(
		'labels'=>array(
			'name'=>'Main Slider',
			'menu_name'=>'Sliders',
			'all_items'=>'All Sliders',
			'add_new'=>'Add New Slide',
			'add_new_item'=>'Add New Slider item' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','thumbnail','revisions', 'page-attributes'
			)
		));

	register_post_type('match_result', array(
		'labels'=>array(
			'name'=>'Match Result',
			'menu_name'=>'Match Result',
			'all_items'=>'Result',
			'add_new'=>'Add New Result',
			'add_new_item'=>'Add New Result' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions', 'thumbnail', 'page-attributes'
			)
		));
	register_post_type('upcoming_match', array(
		'labels'=>array(
			'name'=>'Upcoming Match',
			'menu_name'=>'Upcoming Match',
			'all_items'=>'All Upcoming Match',
			'add_new'=>'Add New',
			'add_new_item'=>'Add New Upcoming Match' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions', 'thumbnail', 'page-attributes'
			)
		));

	register_post_type('management', array(
		'labels'=>array(
			'name'=>'Management Memeber',
			'menu_name'=>'Management',
			'all_items'=>'All Management Member',
			'add_new'=>'Add New',
			'add_new_item'=>'Add New Member' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions', 'thumbnail', 'page-attributes'
			)
		));

	register_post_type('coach', array(
		'labels'=>array(
			'name'=>'Coach',
			'menu_name'=>'Coach',
			'all_items'=>'All Coachs',
			'add_new'=>'Add New',
			'add_new_item'=>'Add New Coachs' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions', 'thumbnail', 'page-attributes'
			)
		));

	register_post_type('player', array(
		'labels'=>array(
			'name'=>'Player',
			'menu_name'=>'Player',
			'all_items'=>'All Players',
			'add_new'=>'Add New',
			'add_new_item'=>'Add New Player' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions', 'thumbnail', 'page-attributes'
			)
		));

	register_post_type('gallery', array(
		'labels'=>array(
			'name'=>'Gallery',
			'menu_name'=>'Gallery',
			'all_items'=>'All Gallery',
			'add_new'=>'Add New',
			'add_new_item'=>'Add New Gallery' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions', 'thumbnail', 'page-attributes','editor'
			)
		));

	register_post_type('team_achievement', array(
		'labels'=>array(
			'name'=>'Team Achievement',
			'menu_name'=>'Team Achievement',
			'all_items'=>'All Achievement',
			'add_new'=>'Add New Achievement',
			'add_new_item'=>'Add New Achievement' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions','thumbnail', 'page-attributes','editor'
		)
		));

	register_post_type('match_fixture', array(
		'labels'=>array(
			'name'=>'Match Fixture',
			'menu_name'=>'Match Fixture',
			'all_items'=>'All Fixture',
			'add_new'=>'Add New',
			'add_new_item'=>'Add New' 
		), 
		'public'=>TRUE,
		'supports'=>array(
			'title','revisions','thumbnail', 'page-attributes'
		)
		));

}

add_action('init', 'offic_master_custom_post');