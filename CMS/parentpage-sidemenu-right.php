<?php get_header();?>

<?php
/*
Template Name: Parent Page Sidemenu Right
*/
?>

<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<ul class="breadcrumbs">
							<li>You are here: </li>
							<li>
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Parent Page' ) ) ); ?>"><?php esc_html_e( 'Parent Page' ); ?></a>
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
						<div id="primary" class="col-xs-12 col-md-9">
							<h1><?php echo $title ?></h1>
							<p><?php the_content();?></p>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li>
									<a <?php get_template_part("sidebar"); ?>></a>
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

<?php get_footer();?>