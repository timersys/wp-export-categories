<?php
class Wsi_Widget extends WP_Widget {

	var $wpb_prefix;
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		
		$this->wpb_prefix = WP_Social_Invitations::get_domain();
		parent::__construct(
			'wsi_widget', // Base ID
			'Wordpress Social Invitations', // Name
			array( 'description' => __( 'Add a Wordpress Social Invitations sidebar widget. Only icons are displayed', $this->wpb_prefix ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		WP_Social_Invitations::load_wsi_js();
		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$CURRENT_URL = (!empty($_SERVER['HTTPS'])) ? "https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		
		echo $before_widget;
		if ( ! empty( $title ) )
			echo $before_title . $title . $after_title;
			?>
			<input type="hidden" id="wsi_base_url" value="<?php echo $CURRENT_URL;?>">
			<div class="service-filter-content ">
			  <ul class="service-filters wsi-sidebar ">
			<?php
				$providers = WP_Social_Invitations::get_providers();
				
				
				foreach ( $providers as $p => $p_name ):
					
					if( WP_Social_Invitations::$_options['enable_'.$p] == 'true' ) :
					?>
						<li id="<?php echo $p;?>-provider" data-li-origin="<?php echo $p;?>">
				             <a title="<?php echo $p_name;?>" href="#-service-<?php echo $p;?>" class="sprite sprite-<?php echo $p;?>" data-provider="<?php echo $p;?>"></a>
				        </li>
					
					<?php
					endif;
				endforeach;
			?>		  
			  </ul>
			   <div class="wsi_success small"><?php echo sprintf( __('Thanks for inviting your %s friends. Please try other network if you wish.',$this->wpb_prefix),'<span id="wsi_provider"></span>');?></div>
			</div>
		<?php
		echo $after_widget;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Invite some friends!', $this->wpb_prefix);
		}
		?>
		<p>
		<label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget