<?php get_header();?>

<?php
/*
Template Name: About Us
*/
?>

<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Seacrh after:</label>
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
                            <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About Us' ) ) ); ?>"><?php esc_html_e( 'About Us' ); ?></a>
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
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h1><?php the_title(); ?></h1>
							<p><?php the_content(); ?></p>
						</div>
						<div class="col-xs-6">
							<img src="<?php echo get_the_post_thumbnail_url();?>" />
						</div>
					</div>
				</div>
			</section>
			<section class="testimonial black">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-xs-offset-2">
							<h2><?php the_field('the_black_title'); ?></h2>
						</div>
						<div class="col-xs-2 text-right">
							<a href="" class="btn btn-default">Contact Us</a>
						</div>
					</div>
				</div>
			</section>
			<section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="2">
				<div class="slide" style="background-image: url('<?php the_field('slideshow_image_one'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('slideshow_image_two'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('slideshow_image_three'); ?>');">
				</div>
				<div class="slide" style="background-image: url('<?php the_field('slideshow_image_four'); ?>');">
				</div>
			</section>
			<section class="columns red text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('red_box_title'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-3">
							<img src="<?php the_field('team_image_1'); ?>" />
							<h3><?php the_field('team_member_name'); ?></h3>
							<p><?php the_field('team_member_bio'); ?></p>
							<a href="" class="btn btn-default">Read more</a>
						</div>
						<div class="col-xs-3">
							<img src="<?php the_field('team_image_2'); ?>" />
							<h3><?php the_field('team_member_name_1'); ?></h3>
							<p><?php the_field('team_member_bio_2'); ?></p>
							<a href="" class="btn btn-default">Read more</a>
						</div>
						<div class="col-xs-3">
							<img src="<?php the_field('team_image_3'); ?>" />
							<h3><?php the_field('team_member_name_2'); ?></h3>
							<p><?php the_field('team_member_bio_3'); ?></p>
							<a href="" class="btn btn-default">Read more</a>
						</div>
						<div class="col-xs-3">
							<img src="<?php the_field('team_image_4'); ?>" />
							<h3><?php the_field('team_member_name_3'); ?></h3>
							<p><?php the_field('team_member_bio_4'); ?></p>
							<a href="" class="btn btn-default">Read more</a>
						</div>
					</div>
				</div>
			</section>
			<section class="columns text-center">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php the_field('center_text_title'); ?></h2>
						</div>
					</div>
					<div class="row bottom">
						<div class="col-xs-4">
							<i class="fa fa-book"></i>
							<h3><?php the_field('icon_name'); ?></h3>
							<p><?php the_field('icon_description'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-book"></i>
							<h3><?php the_field('icon_name_2'); ?></h3>
							<p><?php the_field('icon_description_2'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-book"></i>
							<h3><?php the_field('icon_name_3'); ?></h3>
							<p><?php the_field('icon_description_3'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-book"></i>
							<h3><?php the_field('icon_name_4'); ?></h3>
							<p><?php the_field('icon_description_4'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-book"></i>
							<h3><?php the_field('icon_name_5'); ?></h3>
							<p><?php the_field('icon_description_5'); ?></p>
						</div>
						<div class="col-xs-4">
							<i class="fa fa-book"></i>
							<h3><?php the_field('icon_name_6'); ?></h3>
							<p><?php the_field('icon_description_6'); ?></p>
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
						<div class="col-xs-5 col-xs-offset-1">
							<blockquote>
								<p><?php the_field('left_side_text'); ?></p>
							</blockquote>
						</div>
						<div class="col-xs-5">
							<blockquote>
								<p><?php the_field('right_side_text'); ?></p>							
							</blockquote>
						</div>
					</div>
				</div>
			</section>
		</main>







<?php get_footer();?>