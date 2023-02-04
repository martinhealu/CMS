<?php get_header();?>

<?php
/*
Template Name: Contact Us
*/
?>

<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Search after:</label>
					<input type="text" />
					<input type="submit" value="Search" />
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
                                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Contact Us' ) ) ); ?>"><?php esc_html_e( 'Contact Us' ); ?></a>
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
			<section class="hero small" style="background-image: url('<?php echo get_the_post_thumbnail_url();?>');">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1>Contact</h1>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="standard">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">
							<h2>Contact Us</h2>
							<form>
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" id="name" class="form-control" />
								</div>
								<div class="form-group">
									<label for="email">E-mail</label>
									<input type="email" id="email" class="form-control" />
								</div>
								<div class="form-group">
									<label for="message">Message</label>
									<textarea id="message" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" value="Send" class="btn btn-default" />
								</div>
							</form>
						</div>
						<div class="col-xs-6">
							<h2><?php the_content(); ?></h2>
							<p><?php the_field('contact_name'); ?></p>
							<p><?php the_field('contact_address'); ?><br />
								
							</p>
							<p>
							Tel: <?php the_field('contact_phone'); ?><br />
								E-post: <a href="">info@thecompany.com</a>
							</p>
						</div>
					</div>
				</div>
			</section>
		</main>




<?php get_footer();?>