<?php get_header() ?>

<section class="section">
	<div class="container">
		<h1 class="title"><?php the_title(); ?></h1>
			<div class="content">
				<?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                ?>
	                 <?php the_content();?>
                <?php endwhile;endif;?>
		</div>
	</div>
</section>
<?php get_footer(); ?>