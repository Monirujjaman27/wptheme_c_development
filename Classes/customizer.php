<?php

/* 
Remove Customizer from Apperance

 */
function remove_theme_customize_option()
{
  global $submenu;
  unset($submenu['themes.php'][6]); //remove Customize Link

}
add_action('admin_menu', 'remove_theme_customize_option');


/* 
add_customizer Into menu

 */
function register_customizer_into_menu(){
  add_menu_page('Customizer title','Theme Options', 'manage_options', 'customize.php', '', '', 100);
}
add_action('admin_menu', 'register_customizer_into_menu');





/* =======================================
  ######### Customizer Menu ##############
  ========================================
*/

 function theme_customizer($wp_customize){
   $wp_customize->remove_section('nav');
   $wp_customize->remove_section('static_front_page');
   $wp_customize->remove_section('title_tagline');
   $wp_customize->remove_section('widgets');

/* ===========================
  ***** panel :: header *****
  ============================
*/
  $wp_customize->add_panel('panel_1', array(
    'priority'      => 9,
    'capability'    => 'edit_theme_options',
    'theme_support' => 'edit_theme_options',
    'title'         => __('Header', 'carnews'),
    'description'   => __('This is header panel'),
  ));

  /*========= section_1 ==========*/
  $wp_customize->add_section('section_1', array(
    'title'     => __('Logo'),
    'priority'  => 5,
    'panel'     =>'panel_1',
  ));

/* setting and Control */
  $wp_customize->add_setting('logo', array(
    'default'   => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control($wp_customize,'logo',array(
      'section' => 'section_1',
      'label' => __( 'Upload Logo'),
    ))
  );
  /*========= section_2 ==========*/
  $wp_customize->add_section('section_2', array(
    'title'     => __('Favicon'),
    'priority'  => 6,
    'panel'     =>'panel_1',
  ));

/* setting and Control */
  $wp_customize->add_setting('favicon', array(
    'default'   => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(
    new WP_Customize_Image_Control($wp_customize,'favicon',array(
      'section' => 'section_2',
      'label' => __('Upload Favicon')
    ))
  );
  /*========= section_3 ==========*/
  $wp_customize->add_section('section_3', array(
    'title'     => __('Header Contact'),
    'priority'  => 7,
    'panel'     =>'panel_1',
  ));

/* setting and Control */
  $wp_customize->add_setting('phone', array(
    'default'   => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('phone',array(
      'section' => 'section_3',
      'label' => __('Phone'),
      'type' => 'text',
    )
  );
  $wp_customize->add_setting('email', array(
    'default'   => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control('email',array(
      'section' => 'section_3',
      'label' => __('Email'),
      'type' => 'text',
    )
  );



  /* ===========================
  ***** panel 2 :: Background Color *****
  ============================
*/
$wp_customize->add_panel('panel_2', array(
  'priority'      => 10,
  'capability'    => 'edit_theme_options',
  'theme_support' => 'edit_theme_options',
  'title'         => __('Background Color', 'carnews'),
  'description'   => __('This is Background Color panel'),
));

/*========= Body background section ==========*/
$wp_customize->add_section('body_background', array(
  'title'     => __('Body Background'),
  'priority'  => 7,
  'panel'     =>'panel_2',
));

/* setting and Control */
$wp_customize->add_setting('body_background', array(
  'default'   => '',
  'transport' => 'refresh',
));
$wp_customize->add_control(
  new WP_Customize_color_Control($wp_customize,'body_background',array(
    'section' => 'body_background',
    'label' => __('Choose Background Color')
  ))
);


/*========= header_top_background section ==========*/
$wp_customize->add_section('header_top_background', array(
  'title'     => __('Header Top Background'),
  'priority'  => 7,
  'panel'     =>'panel_2',
));

/* setting and Control */
$wp_customize->add_setting('header_top_background', array(
  'default'   => '',
  'transport' => 'refresh',
));
$wp_customize->add_control(
  new WP_Customize_color_Control($wp_customize,'header_top_background',array(
    'section' => 'header_top_background',
    'label' => __('Choose Background Color')
  ))
);

/*========= Navigation Background ==========*/
$wp_customize->add_section('nav_background', array(
  'title'     => __('Navigation Background'),
  'priority'  => 7,
  'panel'     =>'panel_2',
));

/* setting and Control */
$wp_customize->add_setting('nav_background', array(
  'default'   => '',
  'transport' => 'refresh',
));
$wp_customize->add_control(
  new WP_Customize_color_Control($wp_customize,'nav_background',array(
    'section' => 'nav_background',
    'label' => __('Choose Background Color')
  ))
);

/*========= footer background section ==========*/
$wp_customize->add_section('footer_background', array(
  'title'     => __('Footer Background'),
  'priority'  => 7,
  'panel'     =>'panel_2',
));

/* setting and Control */
$wp_customize->add_setting('footer_background', array(
  'default'   => '',
  'transport' => 'refresh',
));
$wp_customize->add_control(
  new WP_Customize_color_Control($wp_customize,'footer_background',array(
    'section' => 'footer_background',
    'label'   => __( 'Choose Background Color')
  ))
);



/*========= Post BOx background section ==========*/
$wp_customize->add_section('post_box_background', array(
  'title'     => __('Post Box Background'),
  'priority'  => 7,
  'panel'     =>'panel_2',
));

/* setting and Control */
$wp_customize->add_setting('post_box_background', array(
  'default'   => '',
  'transport' => 'refresh',
));
$wp_customize->add_control(
  new WP_Customize_color_Control($wp_customize,'post_box_background',array(
    'section' => 'post_box_background',
    'label'   => __('Choose Background Color')
  ))
);
 

/*========= Post box button background section ==========*/
$wp_customize->add_section('post_box_btn_background', array(
  'title'     => __('Post Box Button Background'),
  'priority'  => 7,
  'panel'     =>'panel_2',
));

/* setting and Control */
$wp_customize->add_setting('post_box_btn_background', array(
  'default'   => '',
  'transport' => 'refresh',
));
$wp_customize->add_control(
  new WP_Customize_color_Control($wp_customize,'post_box_btn_background',array(
    'section' => 'post_box_btn_background',
    'label'   =>__( 'Choose Background Color')
  ))
);



/*========= Copyright background section ==========*/
$wp_customize->add_section('copyright_background', array(
  'title'     => __('Copyright Background'),
  'priority'  => 7,
  'panel'     =>'panel_2',
));

/* setting and Control */
$wp_customize->add_setting('copyright_background', array(
  'default'   => '',
  'transport' => 'refresh',
));
$wp_customize->add_control(
  new WP_Customize_color_Control($wp_customize,'copyright_background',array(
    'section' => 'copyright_background',
    'label'   => __('Choose Background Color')
  ))
);









  /* ===========================
  ***** panel 3 :: Color *****
  ============================
*/
$wp_customize->add_panel('panel_3', array(
    'priority'      => 11,
    'capability'    => 'edit_theme_options',
    'theme_support' => 'edit_theme_options',
    'title'         => __('Color', 'carnews'),
    'description'   => __('This is Color panel'),
  ));
  
  /*========= Header Top Text ==========*/
  $wp_customize->add_section('headertop_text_color', array(
    'title'     => __('Header Top Text'),
    'priority'  => 7,
    'panel'     =>'panel_3',
  ));
  
  /* setting and Control */
  $wp_customize->add_setting('headertop_text_color', array(
    'default'   => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(
    new WP_Customize_color_Control($wp_customize,'headertop_text_color',array(
      'section' => 'headertop_text_color',
      'label' => __('Choose Text Color')
    ))
  );
  
  /*========= Navigation menue Text ==========*/
  $wp_customize->add_section('nav_text_color', array(
    'title'     => __('Navigation Text Color'),
    'priority'  => 7,
    'panel'     =>'panel_3',
  ));
  
  /* setting and Control */
  $wp_customize->add_setting('nav_text_color', array(
    'default'   => '',
    'transport' => 'refresh',
  ));
  $wp_customize->add_control(
    new WP_Customize_color_Control($wp_customize,'nav_text_color',array(
      'section' => 'nav_text_color',
      'label' => __('Choose Text Color')
    ))
  );



 }
 add_action('customize_register', 'theme_customizer');
 ?>