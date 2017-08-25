<?php 

/*

Template Name: HOME

 */

?>


<?php get_header(); ?>


<section>
	<article class="space" id="cuadro_banner">
	<div class="zerogrid" id="banner">
		<?php if ( function_exists( 'easingslider' ) ) { easingslider( 210 ); } ?>
	</div>
	</article>

	<article class="space" id="cuadro_iglesia">
		<div class="zerogrid" id="titulo_iglesia">
			<!-- h3>Selecciona tu iglesia</h3 -->
		</div>
		<div class="zerogrid" id="iglesia">
			<div id="div1">
				<a href="<?php bloginfo('url'); ?>/horarios-de-misa">
					<img src="<?php echo IMAGES.'/jesus.jpg'; ?>" alt="">
					<span>Horarios de misa</span>					
				</a>
			</div>
			<div id="div1">
				<a href="<?php bloginfo('url'); ?>/sacramentos/">
					<img src="<?php echo IMAGES.'/los-sacramentos.jpg'; ?>" alt="">
					<span>Sacramentos</span>
				</a>
			</div>
			<div id="div1">
				<a href="<?php bloginfo('url'); ?>/parroquia-en-marcha/">
					<img src="<?php echo IMAGES.'/santa-rita.jpg'; ?>" alt="">
					<span>Parroquia en marcha</span>
				</a>
			</div>
			<!-- div id="div1">
				<a href="<?php bloginfo('url'); ?>/rectoria-de-santa-rita/">
					<img src="<?php // echo IMAGES.'/santarita.png'; ?>" alt="">
					<span>Rectoria de Santa Rita</span>
				</a>
			</div -->

		</div>
	</article>		

	<article class="space" id="cuadro_reflexiones">
		<div class="zerogrid" id="titulo_cuadro_reflexiones">
			<h3>Recomendaciones</h3>
		</div>
		
		<div class="zerogrid" id="reflexiones">
			<?php get_laterales(10,1,'','reflexiones'); ?>
			<?php get_laterales(12,1,'','reflexiones'); ?>
			<?php get_laterales(15,1,'','reflexiones'); ?>
		</div>	
	</article>

		<div class="zerogrid" id="home">
			<div id="crecimiento">
				<div id="titulo_crecimiento">
					<h3>Bienvenidos</h3>
				</div>

						<div class="contenido">
						              <?php
						  // Start the loop.
						  while ( have_posts() ) : the_post();

						    // Include the page content template.
						    get_template_part( 'content', 'page' );

						    the_content();

							// ultimas_noticias();

						      // End the loop.
						  endwhile;
						  ?>

						</div>



			</div>
			<div id="entradas">
				<div id="titulo_entradas">
					<h3>últimas noticias</h3>
				</div>				
				<div id="recientes">
					   <?php get_sidebar('3'); 
							// ultimas_noticias();
					   ?>
				</div>	

			</div>			
		</div>					
	</section>

<?php get_footer(); ?>