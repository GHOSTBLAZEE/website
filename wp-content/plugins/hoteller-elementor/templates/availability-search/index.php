<?php
	//Get all settings
	$settings = $this->get_settings();	
	$shortcode = '';
	$has_attributes_class = '';
	if(isset($settings['accommodation_attributes']) && !empty($settings['accommodation_attributes'])) {
		$has_attributes_class = 'has_attributes';
	}
	
	$attribute_strings = '';
	foreach($settings['accommodation_attributes'] as $accommodation_attribute) {
		$attribute_slug = get_post_field( 'post_name', $accommodation_attribute );
		//var_dump($attribute_slug);
		$attribute_strings.= $attribute_slug.'';
	}
?>
<div class="availability_search_wrapper <?php echo esc_attr($has_attributes_class); ?> <?php if(isset($settings['accommodation']) && !empty($settings['accommodation'])) { ?>search_selected_accommodation<?php } ?>">
	<?php 
		if(isset($settings['accommodation']) && !empty($settings['accommodation'])) {
			$shortcode.= '[mphb_availability id="'.$settings['accommodation'].'"]'; 
		}
		else
		{
			$shortcode.= '[mphb_availability_search'; 
			
			if(!empty($attribute_strings)) {
				$shortcode.= ' attributes="'.$attribute_strings.'"';
			}
			
			$shortcode.= ']';
		}
		
		echo do_shortcode($shortcode);
	?>
</div>