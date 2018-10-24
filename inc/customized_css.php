<?php /* Customized CSS thru WP Admin */ 
$theme = get_theme_mod('color_options','navy_blue');
$shapesURL = get_template_directory_uri() . '/images/shapes/';
$default =  $shapesURL . $theme . '.png';
$footer_bg_color = get_theme_mod('footer_bg_color');
$button_bg_color = get_theme_mod('button_bg_color');
$button_text_color = get_theme_mod('button_text_color'); 
$button_text_hover_color = get_theme_mod('button_text_hover_color'); 
$top_menu_text_color = get_theme_mod('top_menu_text_color'); 
$top_menu_text_hover_color = get_theme_mod('top_menu_text_hover_color'); 
$top_menu_text_active_color = get_theme_mod('top_menu_text_active_color'); 
$footer_menu_text_color = get_theme_mod('footer_menu_text_color'); 
$footer_menu_text_hover_color = get_theme_mod('footer_menu_text_hover_color'); 
$footer_menu_text_active_color = get_theme_mod('footer_menu_text_active_color'); 
$home_title_text_color = get_theme_mod('home_title_text_color'); 
$content_link_color = get_theme_mod('content_link_color'); 

$colors = get_template_directory() . '/css/colors.json';
$fcontent = file_get_contents( $colors );
$colors = ($fcontent) ? json_decode($fcontent,true) : array(); 

?>
<script type="text/javascript">
   var colors = <?php echo ($fcontent) ? json_encode($colors):'[]'; ?>;
</script>

<style type="text/css">
.site-footer {
    background-color: <?php echo $footer_bg_color;?>;
}
.btn, input[type="submit"], button.btn, .theme-btn {
    background-color: <?php echo $button_bg_color;?>;
    color: <?php echo $button_text_color;?>;
}
.feat-content .cta-button.btn1,
.cta-button.btn1 {
    background-color: <?php echo $button_bg_color;?>;
    border-color: <?php echo $button_bg_color;?>;
}
.btn, input[type="submit"], button.btn, .theme-btn:hover,
.feat-content .cta-button.btn1:hover, 
.cta-button.btn1:hover {
    color: <?php echo $button_text_hover_color;?>;
}
.bgColor {
    background-color: <?php echo $button_bg_color;?>;
}
.fontColor-button {
    color: <?php echo $button_bg_color;?>;
}
.fontColor-button .st0 {
    fill: <?php echo $button_bg_color;?>;
}
.main-navigation a {
    color: <?php echo $top_menu_text_color;?>;
}
.main-navigation a:hover {
    color: <?php echo $top_menu_text_hover_color;?>;
}
.main-navigation .current_page_item > a {
    color: <?php echo $top_menu_text_active_color;?>;
}
.foot-menu a:hover {
    color: <?php echo $footer_menu_text_hover_color;?>;
}
.foot-menu .current_page_item a {
    color: <?php echo $footer_menu_text_active_color;?>;
}
.midcontent .titlediv .section-title,
.section-title {
    color:<?php echo $home_title_text_color;?>;
}
.subpage #primary .entry-content a, p a {
    color:<?php echo $content_link_color;?>;
}
.shape-top .overlay, .shape-bottom .overlay { background-color: <?php echo $colors[$theme]; ?>; }
<?php if($colors) { foreach($colors as $name=>$hex) { ?>
body#theme_<?php echo $name?>.subpage #masthead {
    background-color:<?php echo $hex;?>;
}
body#theme_<?php echo $name?> #site-navigation-mobile.main-navigation:before {
    background-color:<?php echo $hex;?>;
}
.shape-bottom#color_<?php echo $name?> .overlay,
.shape-top#color_<?php echo $name?> .overlay {
    background-color: <?php echo $hex; ?>;
}
<?php } } ?>
 </style>