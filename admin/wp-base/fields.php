<?php
	$options = get_option( $this->options_name );
	/* General Settings
	===========================================*/
	

	/*
	$this->settings['credits'] = array(
		'title'   => __( 'Credits Url' , $this->plugin_slug),
		'desc'    => __( 'Give us some support by enabling the small link on footer.' , $this->plugin_slug),
		'std'     => 'false',
		'type'    => 'select',
		'section' => 'general',
		'choices' => array(
			'true' => __( 'Yes' , $this->plugin_slug),
			'false' => __( 'No' , $this->plugin_slug)
		)
	);


	$this->settings['google'] = array(
		'title'   => __( 'Google "+1" Url' , $this->plugin_slug),
		'desc'    => __( 'The Google url you want to +1 (include "http://"). Leave empty for current visitor page.' , $this->plugin_slug),
		'std'     => '',
		'type'    => 'text',
		'section' => 'general'
	);

	$this->settings['twitter'] = array(
		'title'   => __( 'Twitter Username' , $this->plugin_slug),
		'desc'    => __( 'Your twitter username without "@" sign.' , $this->plugin_slug),
		'std'     => 'chifliiiii',
		'type'    => 'text',
		'section' => 'general'
	);

	$this->settings['facebook'] = array(
		'title'   => __( 'Facebook Url' , $this->plugin_slug),
		'desc'    => __( 'You facebook page (include "http://").' , $this->plugin_slug),
		'std'     => 'https://www.facebook.com/pages/Timersys/146687622031640',
		'type'    => 'text',
		'section' => 'general'
	);
	
	$this->settings['example_heading'] = array(
		'section' => 'general',
		'title'   => '', // Not used for headings.
		'desc'    => 'Advanced settings',
		'type'    => 'heading'
	);
	
	$this->settings['close'] = array(
		'title'   => __( 'Show Close Button' , $this->plugin_slug),
		'desc'    => __( 'Enable / Disable the close button.' , $this->plugin_slug),
		'std'     => 'true',
		'type'    => 'select',
		'section' => 'general',
		'choices' => array(
			'true' => __( 'Yes' , $this->plugin_slug),
			'false' => __( 'No' , $this->plugin_slug)
		)
	);

	$this->settings['close-advanced'] = array(
		'title'   => __( 'Close Advanced keys' , $this->plugin_slug),
		'desc'    => __( 'If enabled, users can close the popup by pressing the escape key or clicking outside of the popup.' , $this->plugin_slug),
		'std'     => 'true',
		'type'    => 'select',
		'section' => 'general',
		'choices' => array(
			'true' => __( 'Enabled' , $this->plugin_slug),
			'false' => __( 'Disabled' , $this->plugin_slug)
		)
	);
	
	$this->settings['days_no_click'] = array(
		'title'   => __( 'Days until popup shows again?' , $this->plugin_slug),
		'desc'    => __( 'When a user closes the popup he won\'t see it again until all these days pass' , $this->plugin_slug),
		'std'     => '99',
		'type'    => 'code',
		'section' => 'general'
	);

	$this->settings['seconds-to-show'] = array(
		'title'   => __( 'Seconds for popup to appear ?' , $this->plugin_slug),
		'desc'    => __( 'After the page is loaded, popup will be shown after X seconds' , $this->plugin_slug),
		'std'     => '1',
		'type'    => 'text',
		'section' => 'general'
	);

	$this->settings['seconds-to-close'] = array(
		'title'   => __( 'Seconds for popup to close ?' , $this->plugin_slug),
		'desc'    => __( 'After the popup is loaded, popup will be close after X seconds' , $this->plugin_slug),
		'std'     => '1',
		'type'    => 'text',
		'section' => 'general'
	);
	
	$this->settings['example_checkbox'] = array(
		'section' => 'other',
		'title'   => __( 'Example Checkbox' , $this->plugin_slug),
		'desc'    => __( 'This is a description for the checkbox.' , $this->plugin_slug),
		'type'    => 'checkbox',
		'std'     => 1 // Set to 1 to be checked by default, 0 to be unchecked by default.
	);
	
	$this->settings['example_heading'] = array(
		'section' => 'other',
		'title'   => '', // Not used for headings.
		'desc'    => 'Advanced settings',
		'type'    => 'heading'
	);
	
	$this->settings['example_radio'] = array(
		'section' => 'other',
		'title'   => __( 'Example Radio' , $this->plugin_slug),
		'desc'    => __( 'This is a description for the radio buttons.' , $this->plugin_slug),
		'type'    => 'radio',
		'std'     => '',
		'choices' => array(
			'choice1' => 'Choice 1',
			'choice2' => 'Choice 2',
			'choice3' => 'Choice 3'
		)
	);
	
		

	
	$this->settings['template'] = array(
		'section' => 'styling',
		'title'   => __( 'Template' , $this->plugin_slug),
		'desc'    => __( 'Edit the default template. Add or remove buttons with {twitter}, {facebook}, {google} and edit or add your custom HTML.' , $this->plugin_slug).'<button class="reset_html" value="reset_html">'.__( 'RESET HTML CODE' , $this->plugin_slug).'</button>',
		'type'    => 'textarea',
		'std'     => "<div id='spu-title'>Please support the site</div>
<div id='spu-msg-cont'>
     <div id='spu-msg'>
     By clicking any of these buttons you help our site to get better </br>
     {twitter} {facebook} {google}
     </div>
    <div class='step-clear'></div>
</div>"
	);
	$this->settings['css'] = array(
		'section' => 'styling',
		'title'   => __( 'CSS Rules' , $this->plugin_slug),
		'desc'    => __( 'This are some rules for the default template. Feel free to create yours.' , $this->plugin_slug).'<button class="reset_css">'.__( 'RESET CSS CODE' , $this->plugin_slug).'</button>',
		'type'    => 'textarea',
		'std'     => ".spu-button {
		margin-left:15px;
		margin-left: 15px;
		display: inline-table;
		margin-top: 12px;
		vertical-align: middle;
}
#spu-msg-cont {
	border-bottom:1px solid#ccc;
	border-top:1px solid#ccc;
	background-image:linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-o-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-moz-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-webkit-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-ms-linear-gradient(bottom,#D8E7FC 0%,#EBF2FC 65%);
	background-image:-webkit-gradient(linear,left bottom,left top,color-stop(0,#D8E7FC),color-stop(0.85,#EBF2FC));
	padding:16px;
}
#spu-msg {
	margin:0 0 22px;
}
.step-clear {
	clear:both!important;
}
#spu-title {
	font-family:'Lucida Sans Unicode,Lucida Grande,sans-serif!important;
	font-size:12px;
	padding:12px 0 9px 10px;
	font-size:16px;
}"
	);
	
	$this->settings['bg_opacity'] = array(
		'section' => 'styling',
		'title'   => __( 'Opacity' , $this->plugin_slug),
		'desc'    => __( 'Change background opacity. Default is 0.65' , $this->plugin_slug),
		'type'    => 'text',
		'std'     => '0.65'
	);
	

	
	$this->settings['mobiles'] = array(
		'title'   => __( 'Mobiles / Tablets' , $this->plugin_slug),
		'desc'    => __( 'If enabled, popup will show in mobiles, tablets, iphones, etc .' , $this->plugin_slug),
		'std'     => 'true',
		'type'    => 'select',
		'section' => 'display_rules',
		'choices' => array(
			'true' => __( 'Enabled' , $this->plugin_slug),
			'false' => __( 'Disabled' , $this->plugin_slug)
		)
	);
	
	*/
	
	$this->settings['cats'] = array(
		'section' => 'general',
		'title'   => __( 'Export Categories?' , $this->plugin_slug),
		'type'    => 'checkbox',
		'std'     => array('yes'),
		'desc'    => __( 'Check to export all categories', $this->plugin_slug),
		'choices' => array( 'yes' => __('Yes', $this->plugin_slug))
	);


	
	$this->settings['tags'] = array(
		'section' => 'general',
		'title'   => __( 'Export Tags?' , $this->plugin_slug),
		'type'    => 'checkbox',
		'std'     => array('yes'),
		'desc'    => __( 'Check to export all tags', $this->plugin_slug),
		'choices' => array( 'yes' => __('Yes', $this->plugin_slug))
	);
	
	
	
	$taxs = get_taxonomies( array('_builtin'=> false));
	
	$this->settings['taxs'] = array(
		'section' => 'general',
		'title'   => __( 'Taxonomies' , $this->plugin_slug),
		'type'    => 'checkbox',
		'std'     => $taxs,
		'desc'    => __( 'Choose wich taxonomies you want to export', $this->plugin_slug),
		'choices' => $taxs
	);


