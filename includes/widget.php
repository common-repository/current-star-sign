<?php

class cz_sun_sign extends WP_Widget
{
  // this is the constructor and has the same name as the class
  function cz_sun_sign()
  {
    // Set some widget options
    $widget_options = array('classname' => 'cz_sun_sign', 'description' => 'Current Star Sign');
	// Set some control options (width, height etc)
    $control_options = array( 'width' => 300 );
	// Actually create the widget (widget id, widget name, options...)
    $this->WP_Widget('cz_sun_sign', 'Current Star Sign', $widget_options, $control_options);
  }
 
  function form($instance)
  {
        // These are our default values
        $defaults = array( 'title' => 'Current star sign' );
        // This overwrites any default values with saved values
        $instance = wp_parse_args( (array) $instance, $defaults );
?>
    <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" type="text" class="widefat" />
    </p>
    <p>
        <label for="<?php echo $this->get_field_id('footerw'); ?>">Hide Link?</label><br /><small>Hide link to WPDailyHoroscopes.com?</small>
        <input type="checkbox" id="<?php echo $this->get_field_id('hidelink'); ?>" name="<?php echo $this->get_field_name('hidelink'); ?>" value="1" <?php if ($instance["hidelink"] == 1) { echo "checked"; } ?>>

    
    </p>
  
  <?php
  } 
 
 function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    if ($new_instance['hidelink'] <> "1") { 
      $instance["hidelink"] = 0; 
    } else {
      $instance["hidelink"] = 1;
    }
    return $instance;
  } 
 
  function widget($args, $instance) {
    extract($args, EXTR_SKIP);
	
	    // Get our variables
        $title = apply_filters( 'widget_title', $instance['title'] );
 
		// This is defined when you register a sidebar
        echo $before_widget;

        // If our title isn't empty then show it
        if ( $title ) {
            echo $before_title . $title . $after_title;
        }
 
		// Do Your Widgety Stuff Here...
	
		include('data-display.php'); // display Zodiac and image
	
	    if ($instance["hidelink"] == 0) {
      echo '<div class="star-link">powered by <a href="http://www.wpdailyhoroscopes.com/" target="_blank">wpdailyhoroscopes.com</a></div>';
    }
    echo $after_widget;

  }
}
add_action( 'widgets_init', create_function('', 'return register_widget("cz_sun_sign");') );
?>