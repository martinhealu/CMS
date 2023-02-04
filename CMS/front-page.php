<?php get_header(); ?>



		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<ul class="breadcrumbs">
							<li>You are here: </li>
							<li>
							<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>"><?php esc_html_e( 'Home' ); ?></a>
							</li>
						</ul>
					</div>
					<div class="col-xs-4">
						<ul class="social">
							<li>
								<a href="">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<main>
			<section class="hero" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php the_field('page_title'); ?></h1>
								<p><?php the_field('description'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonial black">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h2><?php the_field('testimonial_black'); ?></</h2>
						</div>
					</div>
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('text-center'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-4">
							<i class="fa fa-eur" aria-hidden="true"></i>
							<h3><?php the_field('row_bottom'); ?></h3>
							<p><?php the_field('row_bottom1'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-usd" aria-hidden="true"></i>
							<h3><?php the_field('row_bottom2'); ?></h3>
							<p><?php the_field('row_bottom3'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-btc" aria-hidden="true"></i>
							<h3><?php the_field('row_bottom4'); ?></h3>
							<p><?php the_field('row_bottom5'); ?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="3000" data-singleitem="true">
				<div class="slide red no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 text-center">
							<img src="<?php the_field('slide_show_image_1'); ?>" />
							</div>
							<div class="col-xs-6">
								<h2><?php the_field('slide_show_title'); ?></h2>
								<p><?php the_field('slide_show_description'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="slide black no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<h2><?php the_field('slide_show_title_2'); ?></h2>
								<p><?php the_field('slide_show_description2'); ?></p>
							</div>
							<div class="col-xs-6 text-center">
								<img src="<?php the_field('slide_show_image_2'); ?>" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('text_center_2'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-5 col-xs-offset-1">
							<blockquote>
								<p><?php the_field('text_center_description_2'); ?></p>							
							</blockquote>
						</div>
						<div class="col-xs-5">
							<blockquote>
								<p><?php the_field('text_center_description_3'); ?></p>							
							</blockquote>
						</div>
					</div>
				</div>
			</section>
        </main>
        
<?php get_footer();?>        