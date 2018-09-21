	<?php get_header(); ?>
	<div class="row">
		<div class="col-md-12"></div>
	</div>
	<div class="row">
		<div id="carouselAnuncios" class="carousel slide col-md-12" data-ride="carousel">
			<ol class="carousel-indicators">
				<?php
				$i=0;
				$args = array(
                      'post_type' => 'anuncios', //Este es para custom posts //;
                    );
                $anuncios = new WP_Query($args);
                if ($anuncios->have_posts()) {
                	while ($anuncios->have_posts()) {
                		$anuncios->the_post();
                		if ($i==0) {
                			echo '<li data-target="#carouselAnuncios" data-salide-to="';
                			echo $i;
                			echo '" class="active"></li>';
                		}else{
                			echo '<li data-target="#carouselAnuncios" data-salide-to="';
                			echo $i;
                			echo '" ></li>';
                		}
                		$i++;
                	}
                }
				?>
			</ol>
			<div class="carousel-inner">
				<?php
                $i = 1;
                $args = array(
                      'post_type' => 'anuncios', //Este es para custom posts //;
                    );

                $loop_anuncios = new WP_Query($args);
                
                if ( $loop_anuncios->have_posts()){
                	while ($loop_anuncios->have_posts()){
                		$loop_anuncios->the_post();
                		if($i==1){
                			echo "<div class='carousel-item active'>";
                		}else{
                			echo "<div class='carousel-item'>";
                		}
                		echo the_post_thumbnail('full',['class'=>'w-100']);
                		echo "<div class='carousel-caption d-none d-md-block'><h5>";
                		echo the_title();
                		echo "</h5><p>";
                		echo the_content();
                		echo "</p></div>";
                		echo "</div>";
						$i++;
                	}
                }else{
                	echo "<div class='carousel-item active'>
							<img class='w-100' src='".get_template_directory_uri()."/img/siete.jpg'>
							<div class='carousel-caption d-none d-md-block'>
								<h5> U T M </h5>
								<p>Universidad Tecnológica de la Mixteca tu mejor opción</p>
							</div>
						</div>'";
                }
				?>
			</div>
			<a class="carousel-control-prev" href="#carouselAnuncios" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselAnuncios" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<br/>
	<div class="col-md-12">
		<h4><a href="http://localhost/wordpress/index.php/noticias/">Noticias <span class="oi oi-document" title="icon name" aria-hidden="true"></span></a></h4>
	</div>
	<div class="row col-md-12">
			<?php
			$args = array(
				'post_type' => 'noticias',
				'posts_per_page' => 4
			);
			$loop_noticias = new WP_Query($args);
			if ($loop_noticias->have_posts()){
				while ( $loop_noticias->have_posts()){
					$loop_noticias->the_post();?>
					<div class="card col-md-3 col-sm-6">
						<?php the_post_thumbnail('medium',['class'=>'card-img-top']); ?>
						<div class="card-body">
							<h6><?php the_title(); ?></h6>
							<!-- <p><?php the_excerpt('Leer más...'); ?></p> -->
							<a href="<?php the_permalink();?>" class="btn btn-primary">Leer más...</a>
						</div>
					</div>						
				<?php
				}
			}
			?>
	</div>
	<div class="col-md-12">
		<br/>
		<h4><a href="">Other <span class="oi aria-hidden="true"></span></a></h4>	
	</div>
	<div class="row col-md-12">
		<!-- <div class="card" style="width: 25rem;">
			<img class="carr-img-top" src="..." alt="img card">
			<div class="card-body">
				<h5>Lic. en Informática</h5>
				<p class="card-text">Informatica  ñskdj fksd fa sd fkajsdñ fa sdfj asdjfñasjd fañkjsd fñaksjd fñak sjdf añsdj fñasjd</p>
				<a href="#" class="btn btn-primary">Ver más</a>
			</div>
		</div> -->
	</div>
	<br/>
	<?php get_footer(); ?>