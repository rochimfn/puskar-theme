<?php get_header() ?>

<section class="section container box mt-5">
	<div class="container">
		<nav class="breadcrumb" aria-label="breadcrumbs">
			<ul>
				<li><a href="<?php echo get_bloginfo( 'wpurl' ); ?>">Home</a></li>
				<li><a href="<?php echo get_category_link( get_the_category()[0]->term_id ); ?>"><?php echo esc_html( get_the_category()[0]->name );?></a></li>
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
						<div class="card is-shadowless">
							<div class="card-image">
								<figure class="image is-fullwidth">
									<a href="<?php echo get_field('poster'); ?>">
										<img src="<?php echo get_field('poster'); ?>" alt="Placeholder image">
									</a>
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
									<div class="media-content">
										<a href="<?php the_permalink();?>" class="title is-4"><?php the_title(); ?></a>
										<br>
										<br>
										<?php 
										$categories = get_the_category();
										foreach ($categories as $category):
										?>

										<a href="<?php echo get_category_link( $category->term_id ); ?>" class="button is-blue p-1">
											<?php echo esc_html( $category->name );?>
										</a>
										<?php endforeach;?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column is-three-quarter">
						<div class="card is-shadowless">
							<div class="card-content">
								<div class="media">
									<div class="media-content">
										<p class="title is-4">Deskripsi</p>
										<?php the_content();?>
										<br>
										<p class="title is-6">Nama Perlombaan : <?php echo get_field('nama_perlombaan');?></p>
										<p class="title is-6">Penyelenggara : <?php echo get_field('penyelenggara');?></p>
										<p class="title is-6">Nama Team : <?php echo get_field('nama_team');?></p>
										<p class="title is-6">Anggota Team : <?php echo get_field('anggota_team');?></p>
										<p class="title is-6">Kontak : <?php echo get_field('kontak');?></p>
									</div>
								</div>
							</div>
						</div>
					</div>
                <?php endwhile;endif;?>
		</div>
		<nav class="pagination" role="navigation" aria-label="pagination">
			<?php if(get_previous_post()): $prev_post_link = get_permalink( get_previous_post()->ID ) ?>
			  <a class="button is-link is-outlined" href="<?= $prev_post_link ?> ">Previous post</a>
			<?php endif?>
			<?php if(get_next_post()): $next_post_link = get_permalink( get_next_post()->ID ) ?>
			  <a class="button is-link is-outlined" href="<?= $next_post_link ?>">Next post</a>
			<?php endif?>
		</nav>
	</div>
</section>
<?php get_footer(); ?>