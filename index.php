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
                    <a class="cta-button theme-btn btn1 btn-style2" href="#"><span>TRY FOR FREE</span></a>
                    <a class="cta-button btn2 btn-style2" href="#"><span>HOW IT WORKS</span></a>
                 </div>    
                
                <div class="appurl clear flexbox">
                    <span class="btnwrap b1">
                        <a href="#" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn_google.png" alt="Google Play">
                        </a>
                    </span>
                    
                    <span class="btnwrap b2">
                        <a href="#" target="_blank">
                            <img src="<?php bloginfo('template_url'); ?>/images/btn_apple.png" alt="Apple Store">
                        </a>
                    </span>
                </div>
            </div>
            <div class="home-feat-image col">
                <?php if($feat_image) { ?>
                <div class="imgwrap">
                    <img src="<?php echo $feat_image;?>" alt="" />
                </div>
                <?php } ?>
            </div>
         </div>    
    </div>

<?php
    $mid_content_title = get_field('mid_content_title',$home_post_id);
    $mid_content_subtitle = get_field('mid_content_subtitle',$home_post_id);
    //$columns_content = get_field('columns_content',$home_post_id);
?>

<?php /* 3 BOXES SECTION */ ?>
<div class="midcontent clear container">    
    <div class="titlediv">
        <h2 class="section-title">Difference Of Our Services</h2>
        <h3 class="mid-title wow fadeIn">
            Benefits you can get<br>
            Through registering today!
        </h3>
    </div>
    
    <?php 
    $columns_content[] = array(
                'column_icon'   => get_bloginfo('template_url') . "/images/icons/01-icon.png",
                'column_title'  => 'Maximise your duty refunds',
                'column_text'   => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, nulla nec laoreet rutrum, augue tellus ultrices augue, sit amet vulputate tortor nisi eget.</p>'
            );
    
    $columns_content[] = array(
                'column_icon'   => get_bloginfo('template_url') . "/images/icons/02-icon.png",
                'column_title'  => 'Import data with interactive graphs',
                'column_text'   => '<p>Neque donec vivamus mi malesuada ornare lobortis feugiat semper senectus fermentum per aliquet fermentum, velit dapibus euismod mi senectus potenti in vulputate iaculis.</p>'
            );
    
    $columns_content[] = array(
                'column_icon'   => get_bloginfo('template_url') . "/images/icons/03-icon.png",
                'column_title'  => 'Your data is secure with us',
                'column_text'   => '<p>Placerat risus eros gravida cubilia potenti metus class pellentesque lectus blandit, donec aptent fermentum condimentum interdum aliquam nulla consectetur</p>'
            );
    
    
    if($columns_content) { 
        $countCol = count($columns_content); 
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
            <?php $ctr=1; foreach($columns_content as $arr) { 
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
    
    <div class="midbuttondiv text-center clear">
        <a href="#" class="theme-btn btn-style2"><span>Register Now!</span></a>
    </div>
    
</div>

<?php /* SECOND ROW SECTION */ ?>
<div class="midcontent clear container join-family">  
    
    <div class="top-content clear fadeInUp wow" data-wow-delay="0.5s">
        <div class="titlediv">
            <h2 class="section-title">Join the family</h2>
        </div>
        <div class="textcontent">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, nulla nec laoreet rutrum, augue tellus ultrices augue, sit amet vulputate tortor nisi eget mauris. Nam commodo eget leo blandit varius. Nunc laoreet justo eu felis ornare, gravida ultrices neque porttitor. Pellentesque accumsan, tellus vel ornare mollis, risus nunc.</p>
        </div>
    </div>
    
    
    <?php
    $articles[] = array(
            'article_title'=>'Personal Identification 1',
            'article_content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, nulla nec laoreet rutrum, augue tellus ultrices augue, sit amet vulputate tortor nisi eget mauris. Nam commodo eget leo blandit varius. Nunc laoreet justo eu felis ornare, gravida ultrices neque porttitor. Pellentesque accumsan, tellus vel ornare mollis.',
            'article_image'=> get_bloginfo('template_url') . "/images/sample.png"
        );

    $articles[] = array(
            'article_title'=>'Personal Identification 2',
            'article_content'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, nulla nec laoreet rutrum, augue tellus ultrices augue, sit amet vulputate tortor nisi eget mauris. Nam commodo eget leo blandit varius. Nunc laoreet justo eu felis ornare, gravida ultrices neque porttitor. Pellentesque accumsan, tellus vel ornare mollis.',
            'article_image'=> get_bloginfo('template_url') . "/images/sample.png"
        );
    ?>
    
    <?php if($articles) { ?>
    <div class="article-columns clear">
        <?php $j=1; foreach($articles as $a) { 
            $a_title = $a['article_title'];
            $a_text = $a['article_content'];
            $a_img = $a['article_image']; 
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

<?php /* WHY US SECTION */ ?>
<div class="why-us-div clear wrapper">
    <div class="bgwrap"><div class="shape-bottom"></div></div>
    <div class="section-content">
        <div class="container clear">
            <div class="titlediv wow fadeInLeft">
                <h3>WHY<br>BAN<span class="ccolor">CO?</span></h3>
            </div>
            <div class="text wow fadeInRight">
                <p>Lorem ipsum nunc vitae accumsan ultricies vulputate orci pulvinar, eleifend vel rhoncus velit curae phasellus dictum tincidunt, pharetra quis elit ipsum vestibulum justo laoreet ut purus augue turpis vulputate ornare a tristique egestas.Etiam donec luctus eget cras commodo sit curabitur eleifend taciti, sodales litora.</p>
                <p>Sem quisque class ligula facilisis est ultrices consequat netus torquent, suspendisse taciti bibendum varius eros per etiam semper accumsan eu, ornare egestas diam ultrices pellentesque faucibus ac lacinia. Aliquet accumsan curae nibh porttitor tellus luctus hac, phasellus.</p>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
