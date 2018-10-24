<?php
/**
 * banco_t2 Theme Customizer.
 *
 * @package banco_t2
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

//function banco_t2_customize_register( $wp_customize ) {
//	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
//	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
//	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
//}
//add_action( 'customize_register', 'banco_t2_customize_register' );


add_action('customize_register','mytheme_customizer_options');
function mytheme_customizer_options( $wp_customize ) {
    
    /* THEME MAIN COLORS */
    $wp_customize->add_setting( 
        'color_options', 
        array(
            'default' => 'navy_blue',
            'transport'   => 'postMessage',
        )
    );
    
    $colors = get_template_directory() . '/css/colors.json';
    $fcontent = file_get_contents( $colors );
    $colors = ($fcontent) ? json_decode($fcontent,true) : array();
    
//'choices' => array(
// 'navy_blue' => 'Navy Blue',
// 'teal'  => 'Teal',
// 'green' => 'Green',
// 'red'   => 'Red',
// 'orange'=> 'Orange',
//)
    
    $wp_customize->add_control(
        'color_options',
        array(
            'type' => 'radio',
            'label' => 'Theme Color',
            'section' => 'colors',
            'settings'=> 'color_options',
            'choices' => $colors
        )
    );
    
    /* Menus */
    $wp_customize->add_setting( 'top_menu_text_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_text_color', array(
        'label'      => 'Top Menu Text Color',
        'section'    => 'colors',
        'settings'   => 'top_menu_text_color',
    ) ) );
    
    $wp_customize->add_setting( 'top_menu_text_hover_color' , array(
        'default'     => $colors['green'],
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_text_hover_color', array(
        'label'      => 'Top Menu HOVER Text Color',
        'section'    => 'colors',
        'settings'   => 'top_menu_text_hover_color',
    ) ) );
    
    $wp_customize->add_setting( 'top_menu_text_active_color' , array(
        'default'     => $colors['green'],
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_menu_text_active_color', array(
        'label'      => 'Top Menu ACTIVE Text Color',
        'section'    => 'colors',
        'settings'   => 'top_menu_text_active_color',
    ) ) ); 
    /* --end menu-- */
    
    /* Buttons */
    $wp_customize->add_setting( 'button_bg_color' , array(
        'default'     => $colors['green'],
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_bg_color', array(
        'label'      => 'Button Background Color<i class="inst">(class:theme-btn)</i>',
        'section'    => 'colors',
        'settings'   => 'button_bg_color',
    ) ) );
    
    $wp_customize->add_setting( 'button_text_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_color', array(
        'label'      => 'Button Text Color',
        'section'    => 'colors',
        'settings'   => 'button_text_color',
    ) ) );
    
    $wp_customize->add_setting( 'button_text_hover_color' , array(
        'default'     => $colors['navy_blue'],
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_hover_color', array(
        'label'      => 'Button HOVER Text Color',
        'section'    => 'colors',
        'settings'   => 'button_text_hover_color',
    ) ) );
    
    /* Home section title */
    $wp_customize->add_setting( 'home_title_text_color' , array(
        'default'     => $colors['green'],
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'home_title_text_color', array(
        'label'      => 'Home Section Title Color<i class="inst">(class:section-title)</i>',
        'section'    => 'colors',
        'settings'   => 'home_title_text_color',
    ) ) );
    
    
    /* Content Links */
    $wp_customize->add_setting( 'content_link_color' , array(
        'default'     => $colors['green'],
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_link_color', array(
        'label'      => 'Content Link Color',
        'section'    => 'colors',
        'settings'   => 'content_link_color',
    ) ) );
    
    
    /* Footer */
    $wp_customize->add_setting( 'footer_bg_color' , array(
        'default'     => '#212121',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_color', array(
        'label'      => 'Footer Background Color',
        'section'    => 'colors',
        'settings'   => 'footer_bg_color',
    ) ) );
    
    $wp_customize->add_setting( 'footer_menu_text_color' , array(
        'default'     => $colors['green'],
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_text_color', array(
        'label'      => 'Footer Menu Text Color',
        'section'    => 'colors',
        'settings'   => 'footer_menu_text_color',
    ) ) );
    
    $wp_customize->add_setting( 'footer_menu_text_hover_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_text_hover_color', array(
        'label'      => 'Footer Menu HOVER Text Color',
        'section'    => 'colors',
        'settings'   => 'footer_menu_text_hover_color',
    ) ) );
    
    $wp_customize->add_setting( 'footer_menu_text_active_color' , array(
        'default'     => '#FFFFFF',
        'transport'   => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_menu_text_active_color', array(
        'label'      => 'Footer Menu ACTIVE Text Color',
        'section'    => 'colors',
        'settings'   => 'footer_menu_text_active_color',
    ) ) );
}

function banco_t2_customize_preview_js() {
	wp_enqueue_script( 'banco_t2_customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20181023', true );
}
add_action( 'customize_preview_init', 'banco_t2_customize_preview_js' );


add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css() {
    get_template_part('inc/customized_css');
}

function ii_admin_style() {
  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
}
add_action('admin_enqueue_scripts', 'ii_admin_style');

/* Triggered within the <head></head> section of the theme customizer screen */
add_action('customize_controls_print_scripts', 'banco_t2_customizer_xscripts');
function banco_t2_customizer_xscripts() {
$colors = get_template_directory() . '/css/colors.json';
$fcontent = file_get_contents( $colors ); 
$colors = ($fcontent) ? json_decode($fcontent,true) : array(); 
?>
<style type="text/css">
<?php if($colors) { foreach($colors as $name=>$hex) { ?>
    #customize-control-color_options label[for='_customize-input-color_options-radio-<?php echo $name;?>'] {
        background:<?php echo $hex;?>;
    }
<?php } } ?>
</style>
<?php
}
