<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>

	</div><!-- #content -->

	<footer id="footer-mfw-001" class="site-footer">


		<div class="container widgets_wrapper">
		   <div class="row">
		      <div class="col-sm-4">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-1" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
					</aside><!-- #secondary -->

		        
		      </div>
		      <div class="col-sm-4">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-1" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
					</aside><!-- #secondary -->

		         
		      </div>
		      <div class="col-sm-4">

				<?php

					if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
						
						echo "Please Insert A Widget";
					}
				?>

					<aside id="footer-widget-1" class="widget-area">
						<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
					</aside><!-- #secondary -->

		      </div>
		   </div> <!-- END ROW -->
		   <div class="row">
				<div class="copyright d-none">
				<a href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'moose-framework-2' ), 'MooseFramework 2.0' );
				?></a>
				<span class="sep"> | </span>
				All Rights Reserved <a href="https://cyberizegroup.com" target="_blank">Cyberizegroup.com</a> &copy;2018
				
				</div><!-- .copyright -->	
			</div>		
		</div> <!-- END WIDGET WRAPPER -->
		<section class="site-info">

			<div class="">
				<div class="copyright  d-flex align-items-center">
					<div class="text-center mx-auto">

						<a href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
							printf( esc_html__( 'Proudly powered by %s', 'moose-framework-2' ), 'MooseFramework 2.0' );
						?></a>
						<span class="sep"> | </span>
						All Rights Reserved <a href="https://cyberizegroup.com" target="_blank">Cyberizegroup.com</a> &copy;2018

					</div>	
						
				</div>						
			</div>
			
		</section>

				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div>
				
				<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->
						
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
