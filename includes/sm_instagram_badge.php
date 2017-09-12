<?php 



class SMInstagramPluginsBadge extends WP_Widget{
	function __construct() {
		parent::__construct(
		// Base ID of your widget
		'SMInstagramPluginsBadge', 

		// Widget name will appear in UI
		__('SM Instagram Badge', 'SMInstagramPluginsBadge'), 

		// Widget description
		array( 'description' => __( 'Instagram Badge to your wordpress site.', 'SMInstagramPluginsBadge' ), ) 
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes

		$instagram_url				=	($instance['instagram_url'])? $instance['instagram_url']:'https://plus.google.com/+MahabuburRahman';
		$url_type					=	($instance['url_type'])? $instance['url_type']:'page';
		$Layout					=	($instance['Layout'])? $instance['Layout']:'portrait';
		$color_theme					=	($instance['color_theme'])? $instance['color_theme']:'light';	

		echo $args['before_widget'];

		 if ( ! empty( $title ) )
		 	echo $args['before_title'] . $title . $args['after_title'];
		?>

		<a href="https://www.instagram.com/engr.mahabub/?ref=badge" class="ig-b- ig-b-48"><img src="//badges.instagram.com/static/images/ig-badge-48.png" alt="Instagram" /></a>
		<?php

		echo $args['after_widget'];
	}

	// Widget Backend 
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Instagram Follow Button', 'sm_google_plus_follow_button' );
		}

		if(isset($instance['instagram_url'])){
				$instagram_url=$instance['instagram_url'];
		}else{
			$instagram_url='';
		}

		if(isset($instance['url_type_person'])){
			$url_type_person=$instance['url_type_person'];
		}else{
			$url_type_person='page';
		}

		if(isset($instance['Layout'])){
			$Layout=$instance['Layout'];
		}else{
			$Layout='portrait';
		}



		if(isset($instance['color_theme'])){
			$color_theme=$instance['color_theme'];
		}else{
			$color_theme='light';
		}




		// Widget admin form
		?>
		<style>
			.SMInstagramPluginsBadge{
				display: none !important;
			}
		</style>
		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'instagram_url' ); ?>"><?php _e( 'Instagram URL:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'instagram_url' ); ?>" name="<?php echo $this->get_field_name( 'instagram_url' ); ?>" type="text" value="<?php echo esc_attr( $instagram_url ); ?>" >
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'url_type' ); ?>"><?php _e( 'Select your badge::' ); ?></label> 
			
			<input 
				class="radio SMInstagramPluginsBadge" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'url_type' ); ?>" 
				value="person" 
				<?php if ( isset( $url_type ) && $url_type=='portrait' ) { echo 'checked="checked"'; } ?>
				id="<?php echo $this->get_field_id( 'url_type_person' ); ?>" />
				
			<label for="<?php echo $this->get_field_id( 'url_type_person' ); ?>">
				<img src="//badges.instagram.com/static/images/ig-badge-48.png" alt="Instagram">
			</label>
			<input 
				class="radio SMInstagramPluginsBadge" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'url_type' ); ?>" 
				value="person" 
				<?php if ( isset( $url_type ) && $url_type=='portrait' ) { echo 'checked="checked"'; } ?>
				id="<?php echo $this->get_field_id( 'url_type_person' ); ?>" />
				
			<label for="<?php echo $this->get_field_id( 'url_type_person' ); ?>">
				<img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram">
			</label>
			<input 
				class="radio SMInstagramPluginsBadge" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'url_type' ); ?>" 
				value="person" 
				<?php if ( isset( $url_type ) && $url_type=='portrait' ) { echo 'checked="checked"'; } ?>
				id="<?php echo $this->get_field_id( 'url_type_person' ); ?>" />
				
			<label for="<?php echo $this->get_field_id( 'url_type_person' ); ?>">
				<img src="//badges.instagram.com/static/images/ig-badge-24.png" alt="Instagram">
			</label>
			<input 
				class="radio SMInstagramPluginsBadge" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'url_type' ); ?>" 
				value="person" 
				<?php if ( isset( $url_type ) && $url_type=='portrait' ) { echo 'checked="checked"'; } ?>
				id="<?php echo $this->get_field_id( 'url_type_person' ); ?>" />
				
			<label for="<?php echo $this->get_field_id( 'url_type_person' ); ?>">
				<img src="//badges.instagram.com/static/images/ig-badge-16.png" alt="Instagram">
			</label>

					
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'Layout' ); ?>"><?php _e( 'Layout:' ); ?></label> 
			<input 
				class="radio" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'Layout' ); ?>" 
				value="portrait" 
				<?php if ( isset( $Layout ) && $Layout=='portrait' ) { echo 'checked="checked"'; } ?>
				id="<?php echo $this->get_field_id( 'layout_portrait' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'layout_portrait' ); ?>"><?php _e( 'Portrait' ); ?></label>
			<input 
				class="radio" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'Layout' ); ?>" 
				value="landscape"
				<?php if ( isset( $Layout ) && $Layout=='landscape' ) { echo 'checked="checked"'; } ?> 
				id="<?php echo $this->get_field_id( 'layout_landscape' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'layout_landscape' ); ?>"><?php _e( 'Landscape' ); ?></label>			
		</p>


		<p>
			<label for="<?php echo $this->get_field_id( 'color_theme' ); ?>"><?php _e( 'Color theme:' ); ?></label> 
			<input 
				class="radio" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'color_theme' ); ?>" 
				value="light" 
				<?php if ( isset( $color_theme ) && $color_theme=='light' ) { echo 'checked="checked"'; } ?>
				id="<?php echo $this->get_field_id( 'color_theme_light' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'color_theme_light' ); ?>"><?php _e( 'Light' ); ?></label>
			<input 
				class="radio" 
				type="radio" 
				name="<?php echo $this->get_field_name( 'color_theme' ); ?>" 
				value="dark"
				<?php if ( isset( $color_theme ) && $color_theme=='dark' ) { echo 'checked="checked"'; } ?> 
				id="<?php echo $this->get_field_id( 'color_theme_dark' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'color_theme_dark' ); ?>"><?php _e( 'Dark' ); ?></label>			
		</p>
		
		<?php 
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['instagram_url'] = ( ! empty( $new_instance['instagram_url'] ) ) ? strip_tags( $new_instance['instagram_url'] ) : '';
		$instance['url_type'] = ( ! empty( $new_instance['url_type'] ) ) ? strip_tags( $new_instance['url_type'] ) : '';
		$instance['Layout'] = ( ! empty( $new_instance['Layout'] ) ) ? strip_tags( $new_instance['Layout'] ) : '';
		$instance['color_theme'] = ( ! empty( $new_instance['color_theme'] ) ) ? strip_tags( $new_instance['color_theme'] ) : '';
		return $instance;
	}
}
