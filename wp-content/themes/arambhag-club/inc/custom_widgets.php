<?php
class EbitSlider extends WP_Widget
{

	public function __construct() {
		$widget_ops = array( 
			'description' => 'This Is slider Widget',
		);
		parent::__construct( 'ebitslider', 'Ebit Slider', $widget_ops );
	}

	public function form( $value ){ ?>


		<label for="<?php echo $this->get_field_id('sliderID'); ?>">ID :</label>
		<input type="text" name="<?php echo $this->get_field_name('slider_id'); ?>" id="<?php echo $this->get_field_id('sliderID'); ?>" value="<?php echo $value['slider_id']; ?>" class="widefat" />


	<?php 
	}

	public function update($new, $old){
		$old['slider_id'] = $new['slider_id'];

		return $old;
	}

	public function widget($args, $value){
		echo do_shortcode('[ebitslider id="'.$value['slider_id'].'"]');
	}
}

class EbitPost extends WP_Widget
{

	public function __construct() {
		$widget_ops = array( 
			'description' => 'This Is Recent post Widget',
		);
		parent::__construct( 'ebitpost', 'Ebit Post', $widget_ops );
	}

	public function form( $value ){ ?>


		<label for="<?php echo $this->get_field_id('post_type'); ?>">Post Type :</label>
		<input type="text" name="<?php echo $this->get_field_name('post_type'); ?>" id="<?php echo $this->get_field_id('post_type'); ?>" value="<?php echo $value['post_type']; ?>" class="widefat" />
		<label for="<?php echo $this->get_field_id('post_per_page'); ?>">Post Per Page :</label>
		<input type="text" name="<?php echo $this->get_field_name('post_per_page'); ?>" id="<?php echo $this->get_field_id('post_per_page'); ?>" value="<?php echo $value['post_per_page']; ?>" class="widefat" />
		


	<?php 
	}

	public function update($new, $old){
		$old['post_type'] = $new['post_type'];
		$old['post_per_page'] = $new['post_per_page'];

		return $old;
	}

	public function widget($args, $value){
		$post_query = null;
		$post_query = new WP_Query(array(
			'post_type'=> $value['post_type'],
			'posts_per_page'=> $value['post_per_page']
			));
		if($post_query->have_posts()){
			echo '<ul>';
			while ($post_query->have_posts()) {
				$post_query->the_post();
				echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
			}
			echo '</ul>';
		}
	wp_reset_postdata();
	$post_query = null;
	}
}

function office_master_widgets(){

	register_sidebar( array(
			'name'=>'Office master Custom Sidebar',
			'id'=>'office_master_custom_sidebar'
		) );
	register_widget('EbitSlider');
	register_widget('EbitPost');

}

add_action('widgets_init','office_master_widgets');