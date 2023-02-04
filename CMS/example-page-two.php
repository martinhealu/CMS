<?php get_header();?>

<?php
/*
Template Name: Example Page Two
*/
?>

<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Search after:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<ul class="breadcrumbs">
							<li>You are here: </li>
							<li>
                                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Parent Page' ) ) ); ?>"><?php esc_html_e( 'Parent Page' ); ?></a>
							</li>
							<li>/</li>
							<li>
                                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Example Page Two' ) ) ); ?>"><?php esc_html_e( 'Example page 2' ); ?></a>
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
			<section class="hero small" style="background-image: url('<?php the_field('background_image_2'); ?>');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php the_field('hero_small_title'); ?></h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
                            <h2><?php the_field('hero_black_title'); ?></h2><br>
                            <p><?php the_field('hero_black_text_1'); ?></p>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-6">
                            <i class="fa fa-map-marker"></i>
							<h3><?php the_field('hero_icon_title'); ?></h3>
							<p><?php the_field('hero_icon_text'); ?></p>
						</div>
						<div class="col-xs-6">
                            <i class="fa fa-map-marker"></i>
							<h3><?php the_field('hero_icon_title_2'); ?></h3>
							<p><?php the_field('hero_icon_text_2'); ?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('red_text_title'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-4">
                            <i class="fa fa-tree"></i>
							<h3><?php the_field('red_icon'); ?>Mistletoe</h3>
                            <p><?php the_field('red_icon_text'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-glass"></i>
							<h3><?php the_field('red_icon_1'); ?></h3>
							<p><?php the_field('red_icon_text'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-tree"></i>
							<h3><?php the_field('red_icon_2'); ?></h3>
							<p><?php the_field('red_icon_text'); ?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('silver_title'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-3">
							<i class="fa fa-diamond"></i>
							<h3><?php the_field('silver_icon'); ?></h3>
							<p><?php the_field('silver_icon_text'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-calendar"></i>
							<h3><?php the_field('silver_icon_1'); ?></h3>
							<p><?php the_field('silver_icon_text_1'); ?></p>
						</div>
						<div class="col-xs-3">
							<i class="fa fa-sun-o"></i>
							<h3><?php the_field('silver_icon_2'); ?></h3>
							<p><?php the_field('silver_icon_text_2'); ?></p>
						</div>
						<div class="col-xs-3">
							<i class="fa fa-moon-o"></i>
							<h3><?php the_field('last_slideshow_2_title'); ?></h3>
							<p><?php the_field('last_slideshow_2_text'); ?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="3000" data-singleitem="true">
				<div class="slide" style="background-image: url('<?php the_field('last_slideshow'); ?>');">
				</div>
				<div class="slide red no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 text-center">
								<i class="fa fa-fire"></i>
							</div>
							<div class="col-xs-6">
								<h2><?php the_field('red_text_title_2'); ?></h2>
								<p><?php the_field('red_textcontent_2'); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url('<?php the_field('last_slideshow_1'); ?>');">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url('<?php the_field('last_slideshow_3'); ?>');">
				</div>
			</section>
			<section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
				<div class="slide" style="background-image: url('<?php the_field('last_slideshow_4'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('last_slideshow_5'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('last_slideshow_6'); ?>');">
				</div>
			</section>
		</main>

<?php get_footer();?>