<?php get_header() ?>

<section class="section">
	<div class="container">
	<h1 class="title">
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
		<div class="columns">
		<?php
		if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		?>

			<div class="column is-one-quarter">
				<div class="card is-rounded">
					<div class="card-image">
						<figure class="image is-4by3">
							<img src="<?php echo get_field('poster'); ?>" alt="Placeholder image">
						</figure>
					</div>
					<div class="card-content">
						<div class="media">
							<div class="media-content">
								<a href="<?php the_permalink();?>" class="title is-4"><?php the_title(); ?></a>
								<br>
								<br>
								<a href="<?php echo get_bloginfo( 'wpurl' ); ?>/category/<?php echo esc_html(
								        get_the_category()[0]->slug );?>" class="subtitle is-6 button is-blue"><?php
                                    echo esc_html( get_the_category()[0]->name );?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile;endif;?>
		</div>
	</div>
</section>
<?php get_footer(); ?>