<?php
/**
 * 
 * MODULE: Search Index Block With Sidebar 001
 */
?>
<main id="search-index-block-mfw-001" class="">

	<section id="primary" class="content-area container">

		<div class="row">

			<div class="col-sm-9 col-md-9 col-lg-9">

				<main id="main" class="site-main">

					<?php
					if ( have_posts() ) : ?>

						<header class="page-header text-center">
							<h1 class="page-title"><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'moose-framework-2' ), '<span>' . get_search_query() . '</span>' );
							?></h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search-with-sidebar-mfw-001' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

				</main><!-- #main -->

			</div>
			
			<div class="col-sm-3 col-md-3 col-lg-3">

				<?php get_sidebar(); ?>
				
			</div>	

		</div> <!-- end row -->		

	</section><!-- #primary -->

</main>	
