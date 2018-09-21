<?php get_header();?>

<div class="row col-md-12">
	<div class="col-md-9">
		<div class="col-md-12">
			<br/>
			<h3><a href="#">Noticias</a></h3>
		</div>
			<?php
			$args_noticias = array(
				'post_type' => 'noticias'
				//'posts_per_page' => 6
			);
			$loop_noticias = new WP_Query($args_noticias);
			if ($loop_noticias->have_posts()){
				while ( $loop_noticias->have_posts()){
					$loop_noticias->the_post();?>
					<div class="row col-md-12">
						<div class="col-md-3">
							<?php the_post_thumbnail('thumbnail',['class'=>'card-img-top']); ?>
						</div>
						<div class="col-md-9">
							<h5><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
							<?php the_excerpt('Leer más...'); ?>
						</div>
					</div>
					<hr>
				<?php
				}
			}
			?>
	</div>
	<div class="col-md-3">
		sidebar
	</div>
</div>
<div class="row col-md-12">
	Paginación 
</div>

<?php get_footer(); ?>