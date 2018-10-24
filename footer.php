<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package banco_t2
 */

?>
        </div><!-- .site-inner -->
        <div class="triangle-bg1 trbg"></div>
        <div class="triangle-bg2 trbg"><div class="slope"></div></div>
        <div class="triangle-bg3 trbg"><div class="slope"></div></div>

    </div><!-- #content -->
    <footer id="colophon" class="site-footer clear footer" role="contentinfo">
        <div class="wrapper clear">
            <div class="container clear">
                
                <div class="frow clear top">
                    <div class="leftcol">
                        <div class="branding">
                            <a href="<?php bloginfo('url'); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
                            </a>  
                        </div>
                    </div>
                    <div class="rightcol">
                        <div class="subscribe-form">
                            <form method="POST" action="">
                                <div class="field">
                                    <span class="icon fontColor-button">
                                        <svg enable-background="new 0 0 21 14" version="1.1" viewBox="0 0 21 14" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <path class="st0" d="m10.5 8.4c0.2 0 0.3 0 0.4-0.1l0.4-0.3 9.7-7.9h-0.1-20.8-0.1l10 8.2c0.2 0.1 0.3 0.1 0.5 0.1zm-10.5-7.3v11.7l7.2-5.8-7.2-5.9zm13.8 6l7.1 5.7v-11.6l-7.1 5.9zm-2.2 1.8c-0.3 0.2-0.7 0.4-1 0.4-0.4 0-0.8-0.1-1-0.4l-1.8-1.3-7.8 6.3c0 0.1 0.1 0.1 0.1 0.1h20.8c0.1 0 0.1-0.1 0.1-0.1l-7.8-6.3-1.6 1.3z"/>
                                        </svg>
                                    </span>
                                    <div class="input"><input type="email" class="email" name="email" placeholder="Email Address" /></div>
                                    <input type="submit" class="submit btn" value="Get Notified" />
                                    <button class="btn-style2 theme-btn"><span>Get Notified</span></button>
                                </div>
                                <div class="note">
                                    Get updates on new articles webinars and other opportunities:
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
                
                <div class="frow clear bottom">
                    <div class="leftcol">
                        <div class="categoriesdiv">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li><a href="#">Category A</a></li>
                                <li><a href="#">Category B</a></li>
                                <li><a href="#">Category C</a></li>
                                <li><a href="#">Category D</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="rightcol">
                        <h3 class="widget-title">About Us</h3>
                        <div class="widget-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fringilla, nulla nec laoreet rutrum, augue tellus ultrices augue, sit amet vulputate tortor nisi eget mauris. Nam commodo eget leo blandit varius. Nunc laoreet justo eu felis ornare, gravida ultrices neque porttitor. Pellentesque accumsan, tellus vel ornare mollis.</p>
                        </div>
                    </div>
                </div>
                
                <div class="footer-info">
                    <div class="foot-menu">
                        <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_id' => 'footer-menu' ) ); ?>
                    </div>
                    <div class="copyright">
                        <span class="ctxt first">&copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?></span>
                        <span class="ctxt">PO Box 123, New York</span>
                    </div>
                </div><!-- .site-info -->
            </div>
        </div><!-- wrapper -->
    </footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
