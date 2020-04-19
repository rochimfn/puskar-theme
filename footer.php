	<footer class="has-text-centered">
        <div class="pt-1">
            by <a href="<?php echo get_option('website') ?>">HMSI</a>
        </div>
        <div>
            <a href="<?php echo get_option('facebook') ?>"><i class="fab fa-facebook-f is-size-3 m-1"></i></a>
            <a href="<?php echo get_option('twitter') ?>"><i class="fab fa-twitter is-size-3 m-1"></i></a>
            <a href="<?php echo get_option('instagram') ?>"><i class="fab fa-instagram is-size-3 m-1"></i></a>
            <a href="<?php echo get_option('youtube') ?>"><i class="fab fa-youtube is-size-3 m-1"></i></a>
        </div>
	</footer>
	<script>
		document.addEventListener('DOMContentLoaded', () => {
		const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
		if ($navbarBurgers.length > 0) {
		$navbarBurgers.forEach( el => {
			el.addEventListener('click', () => {
			const target = el.dataset.target;
			const $target = document.getElementById(target);
			el.classList.toggle('is-active');
			$target.classList.toggle('is-active');
			});
		});
		}
		});
	</script>
	<?php wp_footer();?>
	</body>
</html>