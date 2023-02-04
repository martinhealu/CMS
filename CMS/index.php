<?php get_header(); ?>

		<nav id="nav">
					<div class="container">
						<div class="row">
							<div class="col-xs-8">
								<ul class="breadcrumbs">
									<li>You are here: </li>
									<li>
										<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>"><?php esc_html_e( 'Blog' ); ?></a>
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
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9"><br />
                            <h1><?php the_title_attribute(); ?></h1>
                            <article>
                                <?php $the_query = new WP_Query( 'showposts=3' ); ?>
                                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full') ?>
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?><img src="<?php echo $url ?>" />
								<h2 class="title">
                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
								</h2>
								<ul class="meta">
									<li>
                                        <i class="fa fa-calendar"></i> <?php the_time('F jS') ?>, <?php the_time('Y') ?>
									</li>
									<li>
                                        <i class="fa fa-user"></i> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'victor freitas' ) ) ); 
									?>"><?php esc_html_e( 'Victor Freitas' ); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Category 1</a>
                                                                  <a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Category 3</a>
									</li>
								</ul>
                                <p><p><?php the_content(); ?></p></p>
                                    <?php endwhile; ?>
							</article>		
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								
								<ul>
									<li>
										<?php dynamic_sidebar(); ?> 
									</li> 
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main> 
		
		
    <?php get_footer(); ?>