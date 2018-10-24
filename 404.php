<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package banco_t2
 */

get_header(); ?>

	<div id="primary" class="content-area fullwidth clear">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found fullwidth">
				<div class="page-content fullwidth">
                    <div class="inner404 clear">
                        <div class="txt404">
                            <div class="big">404</div>
                            <div class="sm">error</div>
                        </div>
                        <div class="main404xt">
                            <h1 class="page-title"><?php esc_html_e( "Oops! This page doesn't exist.", "banco_t2" ); ?></h1>
                        </div>
                    </div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
