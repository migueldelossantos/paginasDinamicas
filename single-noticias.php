<?php get_header(); ?>

	<div class="row col-md-12">
		<div class="col-md-9">
			<br/>
			<?php the_post(); ?>
			<h4 class="title-new">
				<a href="#"><?php the_title(); ?></a>
			</h4>
			<div class="img-new text-center">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="content-new">
				
				<?php the_content(); ?>
			</div>
		</div>		
		<div class="col-md-3">
			Sidebar
		</div>
	</div>
	<div class="row col-md-12">
		<div class="col-md-10">
			Paginación
		</div>
	</div>

<?php get_footer(); ?>