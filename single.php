<?php get_header() ?>

<section class="section">
	<div class="container">
		<nav class="breadcrumb" aria-label="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_bloginfo( 'wpurl' ); ?>">Home</a></li>
				<li><a href="<?php echo get_bloginfo( 'wpurl' ); ?>/category/<?php echo esc_html( get_the_category()[0]->slug );?>"><?php echo esc_html( get_the_category()[0]->name );?></a></li>
				<li class="is-active"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
			</ul>
		</nav>
		<h1 class="title"><?php the_title(); ?></h1>
			<div class="columns">
				<?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                ?>
	                 <div class="column is-one-quarter">
						<div class="card">
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
										        get_the_category()[0]->slug );?>" class="subtitle is-6 button
										        is-blue"><?php echo esc_html( get_the_category()[0]->name );?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column is-three-quarter">
						<div class="card">
							<div class="card-content">
								<div class="media">
									<div class="media-content">
										<p class="title is-4">Deskripsi</p>
										<p><?php the_content();?></p>
										<br>
										<p class="title is-5">Nama Perlombaan : <?php echo get_field('nama_perlombaan');?></p>
										<p class="title is-5">Penyelenggara : <?php echo get_field('penyelenggara');?></p>
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