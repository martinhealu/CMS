<?php get_header();?>

<?php
/*
Template Name: Category 
*/
?>
<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Seach after:</label>
					<input type="text" />
					<input type="submit" value="search" />
				</div>
			</form>
		</div>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9"><br />
							<h1>Category 1</h1>
							<article>
								<img src="<?php bloginfo('template_directory');?>/img/poland.jpg" />
								<h2 class="title">
									<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Post Page' ) ) ); 
									?>"><?php esc_html_e( 'Christmas in Poland' ); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 15 december, 2019
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Elijah G' ); ?></a>
								</h2>
									</li>
									<li>
									<i class="fa fa-tag"></i> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Category 1' ); ?></a>, 
										<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Category 2' ); ?></a>
									</li>
								</ul>
								<p>In Poland, Advent is the beginning of Christmas Time. It's a time when people try to be peaceful and remember the real reason for Christmas. People try not to have excess of anything. Some people give up their favorite foods or drinks and parties and discos are not widely held. Some people also go to Church quite frequently. There is the tradition of the 'roraty', special masses (or communion services) held at dawn and dedicated to Mary for receiving the good news from the angel Gabriel..</p>
							</article>
							<article>
								<img src="<?php bloginfo('template_directory');?>/img/london1.jpg" />
								<h2 class="title">
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Christmas in London' ); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 15 december, 2019
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Deep Trivedi' ); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Category 1' ); ?></a>, <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Category 3' ); ?></a>
									</li>
								</ul>
								<p>In the UK (or Great Britain), families often celebrate Christmas together, so they can watch each other open their presents!
									Most families have a Christmas Tree (or maybe even two!) in their house for Christmas. The decorating of the tree is usually a family occasion, with everyone helping. Christmas Trees were first popularised the UK by Prince Albert, the husband of Queen Victoria. Prince Albert was German, and thought that it would be good to use one of his ways of celebrating Christmas in England.		
									Holly, Ivy and Mistletoe are also sometimes used to decorate homes or other buildings..</p>
							</article>
							<article>
								<img src="<?php bloginfo('template_directory');?>/img/Belgium.jpg" />
								<h2 class="title">
								<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Christmas in Belgium' ); ?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 15 december, 2019
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Olivier Depaep' ); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Category 1' ); ?></a>, 
									<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Category 2' ); ?></a>, 
									<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
									?>"><?php esc_html_e( 'Category 3' ); ?></a>
									</li>
								</ul>
								<p>As in The Netherlands, children in Belgium believe that 'Sinterklaas/St. Niklaas' (Flemish) or 'Saint Nicholas' (Walloon) brings them presents on December 5th and 6th, St. Nicholas' Eve and St. Nicholas' Day.
									Children put their shoes in front of the fireplace, together something for Sinterklaas like a drawing or biscuits; they might also leave a carrot for Sinterklass's horse and something for Zwarte Piet/Sooty Piet/Roetpiet (Black Peter/Sooty Peter/Chimney Peter, Sinterklass's assistant).</p>
							</article>
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Postnavigation</h2>
								<a class="prev page-numbers" href="">Previous</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Next</a>
							</nav>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
												<label class="screen-reader-text">Search after:</label>
												<input type="text" />
												<input type="submit" value="search" />
											</div>
										</form>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Pages</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Style Guide' ) ) ); 
												?>"><?php esc_html_e( 'Style Guide' ); ?></a>
											</li>
											<li class="page_item">
												<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Christmas Traditions' ) ) ); 
												?>"><?php esc_html_e( 'Christmas Traditions' ); ?></a>
											</li>
											<li class="page_item">
												<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'About Us' ) ) ); 
												?>"><?php esc_html_e( 'About Us' ); ?></a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Author Page' ) ) ); 
												?>"><?php esc_html_e( 'Author Page' ); ?></a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intersts</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Project 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'home' ) ) ); 
												?>"><?php esc_html_e( 'Start Page' ); ?></a>
											</li>
										</ul>
									</li>
									<li>
										<h2>Archive</h2>
										<ul>
											<li>
												<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Category Page' ) ) ); 
												?>"><?php esc_html_e( 'Category Page' ); ?></a>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>Catogories</h2>
										<ul>
											<li class="cat-item">
											<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Example Page Two' ) ) ); 
												?>"><?php esc_html_e( 'Example Page Two' ); ?></a> (1)
											</li>
											<li class="cat-item">
											<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Full Page' ) ) ); 
												?>"><?php esc_html_e( 'Full Page' ); ?></a> (3)
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
        </main>







<?php get_footer();?>