<?php get_header();?>

<?php
/*
Template Name: Full Page
*/
?>

<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Search After:</label>
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
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Full Page' ) ) ); ?>"><?php esc_html_e( 'Full Page' ); ?></a>
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
						<div id="primary" class="col-xs-12">
							<h1><?php the_title();?></h1>
							<p><?php the_content();?></p>
						</div>
					</div>
				</div>
			</section>
		</main>







<?php get_footer();?>