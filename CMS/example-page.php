<?php get_header();?>

<?php
/*
Template Name: Example Page
*/
?>

<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
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
                                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Christmas Traditions' ) ) ); ?>"><?php esc_html_e( 'Parent Page' ); ?></a>
							</li>
							<li>/</li>
							<li>
                                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Example Page' ) ) ); ?>"><?php esc_html_e( 'Example Page' ); ?></a>
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
			<section class="hero" style="background-image: url('<?php the_field('background_image'); ?>');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php the_field('the_tilte'); ?></h1>
								<p><?php the_field('the_decription'); ?></p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<img src="<?php the_field('standard_image'); ?>" />
						</div>
						<div class="col-xs-6">
							<h2><?php the_field('standard_title'); ?></h2>
							<p><?php the_field('standard_description'); ?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonial red">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-2">
							<h2><?php the_field('testimonial_title'); ?></h2>
						</div>
						<div class="col-xs-2 text-right">
							<a href="" class="btn btn-default">Example Page<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Example Page' ) ) ); ?>"><?php esc_html_e( 'Example Page' ); ?></a>
						</div>
					</div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="2000" data-singleitem="false" data-items="3">
				<div class="slide" style="background-image: url('<?php the_field('sildeshow_1'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('slideshow_2'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('slideshow_3'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('slideshow_4'); ?>');">
				</div>
			</section>
			<section class="columns black text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('black_text'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-3">
                        <i class="fa fa-gift"></i>
							<h3><?php the_field('icon_title'); ?></h3>
							<p><?php the_field('icon_text'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-briefcase"></i>
							<h3><?php the_field('icon_title_2'); ?></h3>
							<p><?php the_field('icon_text_2'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-calendar-o"></i>
							<h3><?php the_field('icon_title_3'); ?></h3>
							<p><?php the_field('icon_text_3'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-bed"></i>
							<h3><?php the_field('icon_title_4'); ?></h3>
							<p><?php the_field('icon_text_4'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-picture-o"></i>
							<h3><?php the_field('icon_title_5'); ?></h3>
							<p><?php the_field('icon_text_5'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-tree"></i>
							<h3><?php the_field('icon_title_6'); ?></h3>
							<p><?php the_field('icon_text_6'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-shopping-cart"></i>
							<h3><?php the_field('icon_title_7'); ?></h3>
							<p><?php the_field('icon_text_7'); ?></p>
						</div>
						<div class="col-xs-3">
                            <i class="fa fa-share"></i>
							<h3><?php the_field('icon_title_8'); ?></h3>
							<p><?php the_field('icon_text_8'); ?></p>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonial">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3 text-center">
							<h2><?php the_field('middle_testimonial_title'); ?></h2>
						</div>
					</div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="3000" data-singleitem="true">
				<div class="slide" style="background-image: url('<?php the_field('auto_slideshow'); ?>');">
				</div>
				<div class="slide no-image" style="background-image: url('<?php the_field('auto_slidesow_2'); ?>');">
					<div class="container">
						<div class="row">
							<div class="col-xs-6 text-center">
							</div>
							<div class="col-xs-6">
							</div>
						</div>
					</div>
				</div>
				<div class="slide no-image" style="background-image: url('<?php the_field('auto_slideshow_3'); ?>');">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
							</div>
						</div>
					</div>
				</div>
				<div class="slide black no-image">
					<div class="container">
						<div class="row">
							<div class="col-xs-6">
								<h2><?php the_field('slideshow_bottom_title'); ?></h2>
								<p><?php the_field('slideshow_bottom_text'); ?></p>
							</div>
							<div class="col-xs-6 text-center">
							</div>
						</div>
					</div>
				</div>
				<div class="slide" style="background-image: url('<?php the_field('auto_slideshow_4'); ?>');">
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('bottom_slideshow_title'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-6">
                            <i class="fa fa-bell-o"></i>
							<h3><?php the_field('bottom_icon_title'); ?></h3>
							<p><?php the_field('bottom_icon_text'); ?></p>
						</div>
						<div class="col-xs-6">
                            <i class="fa fa-home"></i>
							<h3><?php the_field('bottom_icon_title_2'); ?></h3>
							<p><?php the_field('bottom_icon_text_2'); ?></p>
						</div>
					</div>
				</div>
			</section>
		</main>


<?php get_footer();?>