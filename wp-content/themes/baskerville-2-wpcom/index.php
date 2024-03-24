<?php

/**
 * This is the main generic template file of the theme
 *
 * @package Baskerville 2
 */
get_header(); ?>

<div class="wrapper section medium-padding clear">

	<main class="content section-inner" id="content" role="main">
		<div class="fix-post-header">
			<h1 class="post-title title-shadow separador">IDEAS</h1>
		</div>

		<section class="reportes">

			<div class="reportes container">
				<button class="bloque">
					<h2 class="h2"><img src="http://localhost/wordpress/wp-content/uploads/2024/02/427953976_1801.jpg" alt="foquito"></h2>
					<div class="modulo">
						<p> Descubre las historias inspiradoras de emprendedores santafesinos que están dejando su huella en la comunidad.
							<br>Desde innovadores productos hasta servicios únicos, conoce cómo están transformando el panorama empresarial en Santa Fe.
							<br>¡Apoyemos a los emprendedores locales y seamos parte del cambio! <br>. <br>Quieres ser parte de IDEAS?💡🤝🏽🌏🧠
						</p>
					</div>
				</button>

				<button class="bloque">
					<h2 class="h2"><img src="http://localhost/wordpress/wp-content/uploads/2024/02/427827470_18010411814268780_240105325303879272_n.jpg" alt="personas"></h2>
					<div class="modulo">
						<p>En Santa Fe, la solidaridad es el sostén fundamental de las mutuales que velan por el bienestar de sus miembros.
							Explora junto a 𝙄𝙙𝙚𝙖𝙨 - 𝙍𝙚𝙫𝙞𝙨𝙩𝙖 💡 cómo estas organizaciones brindan seguridad y apoyo mutuo a través de servicios financieros y sociales.
							<br>¡Descubre cómo formar parte de una mutual puede fortalecer la red de ayuda en tu comunidad! 🤝🏽🔥💪🏽
							<br>.
							<br>𝙄𝙙𝙚𝙖𝙨 - 𝙍𝙚𝙫𝙞𝙨𝙩𝙖 💡 acompañamos a Cooperativas, Mutuales y Emprendedores a comunicar sus servicios y productos.
							<br>Te interesa ser parte? 🤗 💡🧠 🤝🏽 🌏
						</p>
					</div>
				</button>
				<button class="bloque">
					<h2 class="h2"><img src="http://localhost/wordpress/wp-content/uploads/2024/02/427945419_18010414226268780_7993750156445018134_n.jpg" alt="proceso"></h2>
					<div class="modulo">

						<p>Las cooperativas de Santa Fe están construyendo un tejido social sólido y sostenible.
							Explora cómo estas comunidades trabajan juntas para impulsar el desarrollo local y mejorar la calidad de vida.
							<br>¡Descubre cómo ser parte de una cooperativa puede marcar la diferencia en tu vida y en tu comunidad! 👐 💡 🧠 🤝🏽 🔥
							<br>.
							<br>𝙄𝙙𝙚𝙖𝙨 - 𝙍𝙚𝙫𝙞𝙨𝙩𝙖 💡🧠🔥
						</p>

					</div>
				</button>
			</div>
		</section>


		<div class="index-banner">
			<article class="index-ideas-banner-image">
				<img src="http://localhost/wordpress/wp-content/uploads/2024/03/Mecha-Corta-Banner-home-02-1024x173-1.jpg">
			</article>
		</div>

		<div class="fix-post-header">
			<h1 class="post-title title-shadow separador">Novedades</h1>
		</div>


		<?php if (have_posts()) :

			if (is_home() && !is_front_page()) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif; ?>
			<div class="posts" id="posts">

				<div class="spinner-container">
					<div id="spinner">
						<div class="double-bounce1"></div>
						<div class="double-bounce2"></div>
					</div>
				</div>

				<style>
				.post p {
						display: none;
					}
				</style>

				<?php while (have_posts()) : the_post();
					get_template_part('content', get_post_format());
				endwhile; ?>
			</div> <!-- /posts -->
			<?php the_posts_navigation(); ?>
		<?php else :
			get_template_part('content', 'none');
		?>
		<?php endif; ?>

		<div class="index-banner">
			<article class="index-prefooter-1-banner-image">
				<img src="http://localhost/wordpress/wp-content/uploads/2024/03/Mecha-Corta-Banner-home-02-1024x173-1.jpg">
				<img src="http://localhost/wordpress/wp-content/uploads/2024/03/Mecha-Corta-Banner-home-02-1024x173-1.jpg">
			</article>
			<article class="index-prefooter-2-banner-image">
				<img src="http://localhost/wordpress/wp-content/uploads/2024/03/Mecha-Corta-Banner-home-02-1024x173-1.jpg">
			</article>
		</div>


	</main> <!-- /content -->
</div> <!-- /wrapper -->

<?php get_footer(); ?>