<?php get_header() ?>

<section class="section">
	<div class="container">
	<h1 class="title has-text-white">
	<?php
		if(is_front_page() || is_home()){
			echo get_bloginfo('name');
		} else{
			echo wp_title('');
		}
	?>
	</h1>
		<div class="box is-primary">
			<form action="<?php echo get_bloginfo( 'wpurl' ); ?>" method="get">
				<div class="control is-centered">
					<input type="text" name="s" id="search" value="" class="input is-rounded border-blue border-2"
                           placeholder="Cari disini..." style="min-width: calc(80vw - 150px);">
				</div>
			</form>
		</div>
		<div class="columns is-multiline">
		<?php
		if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		?>

			<div class="column is-one-quarter">
				<div class="card box p-0">
					<div class="card-image">
						<figure class="image is-fullwidth">
							<img src="<?php echo get_field('poster'); ?>" alt="Placeholder image">
						</figure>
					</div>
					<div class="card-content">
						<div class="media">
							<div class="media-content">
								<a href="<?php the_permalink();?>" class="title is-4"><?php the_title(); ?></a>
								<br>
								
								<?php 
								$categories = get_the_category();
								foreach ($categories as $category):
								?>

								<a href="<?php echo get_category_link( $category->term_id ); ?>" class="button is-small is-blue p-1">
									<?php echo esc_html( $category->name );?>
								</a>
								<?php endforeach;?>

								<?php if( has_excerpt()) :?>
								<br><br>
								<p class="is-size-6">
									<?php echo get_the_excerpt();?>
								</p>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php endwhile;endif;?>
		</div>
		<nav class="pagination is-centered" role="navigation" aria-label="pagination">
			<div class="button is-white" ><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="button is-white" ><?php previous_posts_link( 'Newer posts' ); ?></div>
		</nav>
	</div>
</section>
<?php get_footer(); ?>