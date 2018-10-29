<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package banco_t2
 */
get_header(); ?>
    
<?php
$home_post_id = get_post_id_by_key('home_featured_image');
$feat_image = get_field('home_featured_image',$home_post_id);
$feat_text = get_field('home_featured_text',$home_post_id);
$button_1_text = get_field('button_1_text',$home_post_id);
$button_1_link = get_field('button_1_link',$home_post_id);
$button_2_text = get_field('button_2_text',$home_post_id);
$button_2_link = get_field('button_2_link',$home_post_id);
$google_play_url = get_field('google_play_url',$home_post_id);
$apple_store_url = get_field('apple_store_url',$home_post_id);
?>

    <div class="home-header clear">
        <div class="shape-top" style="background-image:url('<?php bloginfo('template_url'); ?>/images/header-image.png')"><div class="overlay"></div></div>
        <div class="feat-content clear container">
            <div class="home-feat-text col">
                <?php if($feat_text) { ?>
                <div class="textwrap">
                    <?php echo $feat_text;?>
                </div>
                <?php } ?>
                
                <div class="cta-button-div clear">
                    <?php if( $button_1_link &&  $button_1_text ) { ?>
                    <a class="cta-button theme-btn btn1 btn-style2" href="<?php echo $button_1_link; ?>"><span><?php echo $button_1_text; ?></span></a>
                    <?php } ?>
                    <?php if( $button_2_link &&  $button_2_text ) { ?>
                    <a class="cta-button btn2 btn-style2" href="<?php echo $button_2_link; ?>"><span><?php echo $button_1_text; ?></span></a>
                    <?php } ?>
                 </div>     
                
               <div class="appurl clear flexbox">
                    <span class="btnwrap b1">
                        <?php if($google_play_url) { ?>
                        <a href="#" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn_google.png" alt="Google Play">
                        </a>
                        <?php } ?>
                    </span>
                    
                    <span class="btnwrap b2">
                        <?php if($apple_store_url) { ?>
                        <a href="#" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn_apple.png" alt="Apple Store">
                        </a>
                        <?php } ?>
                    </span>
                </div>
                
            </div>
            <div class="home-feat-image col">
                <?php if($feat_image) { ?>
                <div class="imgwrap">
                    <img src="<?php echo $feat_image['url'];?>" alt="<?php echo $feat_image['title'];?>" />
                </div>
                <?php } ?>
            </div>
         </div>    
    </div>

<?php
$box_content_title = get_field('box_content_title',$home_post_id);
$box_content_subtitle = get_field('box_content_subtitle',$home_post_id);
$boxes_contents = get_field('boxes_contents',$home_post_id);
$box_bottom_button_text = get_field('box_bottom_button_text',$home_post_id);
$box_bottom_button_link = get_field('box_bottom_button_link',$home_post_id);
?>

<?php /* 3 BOXES SECTION */ ?>
<div class="midcontent clear container">    
    <div class="titlediv">
        <?php if($box_content_title) { ?>
        <h2 class="section-title"><?php echo $box_content_title;?></h2>
        <?php } ?>
        <?php if($box_content_subtitle) { ?>
        <h3 class="mid-title wow fadeIn">
           <?php echo $box_content_subtitle;?>
        </h3>
        <?php } ?>
    </div>
    
    <?php     
    if($boxes_contents) { 
        $countCol = count($boxes_contents); 
        $colClass = 'three';
        if($countCol % 3 == 0)  {
            $colClass = 'three';
        } else if( $countCol % 4 == 0 ) {
            $colClass = 'four';
        } else if( $countCol== 2 ) {
            $colClass = 'two';
        }
        ?>
        <div class="columns clear <?php echo $colClass?>">
            <?php $ctr=1; foreach($boxes_contents as $arr) { 
                $c_title = $arr['column_title'];
                $c_text = $arr['column_text'];
                $c_icon = $arr['column_icon'];
                $delay = $ctr*2;
            ?>
            <div class="column fadeInUp wow" data-wow-delay="0.<?php echo $delay;?>s">
                <div class="pad clear">
                    <div class="icon">
                        <?php if( $c_icon ) { ?>
                            <span class="iconImg" style="background-image:url('<?php echo $c_icon;?>')"></span>
                        <?php } else { ?>
                            <span class="noIcon"></span>
                        <?php } ?>
                    </div>    
                    <?php if( $c_title ) { ?>
                        <h3 class="col-title"><?php echo $c_title;?></h3>
                    <?php } ?>
                    <?php if( $c_text ) { ?>
                        <div class="col-text"><?php echo $c_text;?></div>
                    <?php } ?>
                </div>    
            </div>
            <?php $ctr++; } ?>
        </div>
    <?php } ?>
    
    <?php if($box_bottom_button_text && $box_bottom_button_link) { ?>
    <div class="midbuttondiv text-center clear">
        <a href="<?php echo $box_bottom_button_link;?>" class="theme-btn btn-style2"><span><?php echo $box_bottom_button_text;?></span></a>
    </div>
    <?php } ?>
    
</div>

<?php 
/* JOIN US SECTION */
$join_title = get_field('join_title',$home_post_id);
$join_text = get_field('join_text',$home_post_id);
$excerpts_list = get_field('join_information',$home_post_id);
?>
<div class="midcontent clear container join-family">  
    
    <div class="top-content clear fadeInUp wow" data-wow-delay="0.5s">
        <?php if($join_title) { ?>
        <div class="titlediv">
            <h2 class="section-title"><?php echo $join_title;?></h2>
        </div>
        <?php } ?>
        
        <?php if($join_text) { ?>
        <div class="textcontent">
            <?php echo $join_text;?>
        </div>
        <?php } ?>
    </div>
    
    <?php if($excerpts_list) { ?>
    <div class="article-columns clear">
        <?php $j=1; foreach($excerpts_list as $a) { 
            $a_title = $a['title'];
            $a_text = $a['text'];
            $a_img = $a['image']; 
            $delay = $j*2;
            ?>
            <div class="a-column wow fadeIn <?php echo ($j % 2 == 0) ? 'even':'odd';  ?>" data-wow-delay="0.<?php echo $delay;?>s">
                <div class="photo">
                    <?php if($a_img) { ?>
                        <div class="image has-image" style="background-image:url('<?php echo $a_img;?>')"></div>
                    <?php } else { ?>
                        <div class="image no-image"></div>
                    <?php } ?>
                </div>
                <div class="text">
                    <div class="pad clear">
                        <h3 class="col-title"><?php echo $a_title;?></h3>
                        <?php echo $a_text; ?>
                        <div class="buttondiv">
                            <a href="#" class="theme-btn btn-style2"><span>Learn More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php $j++; } ?>
    </div>
    <?php } ?>
</div>

<?php /* WHY US SECTION */ 
$why_title = get_field('why_title',$home_post_id);
$why_text = get_field('why_text',$home_post_id);
?>
<div class="why-us-div clear wrapper">
    <div class="bgwrap"><div class="shape-bottom"></div></div>
    <div class="section-content">
        <div class="container clear wow fadeInRight">
            <?php if($why_title) { ?>
            <div class="titlediv">
                <h3><?php echo $why_title;?></h3>
            </div>
            <?php } ?>
            
            <?php if($why_text) { ?>
            <div class="text">
                <?php echo $why_text;?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php
get_footer();
