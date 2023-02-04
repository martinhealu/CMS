<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php bloginfo( 'name' ); ?></title>
    
    <?php wp_head();?>

</head>
<body>

	<div id="wrap">

	<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="<?php echo esc_url( get_permalink( get_page_by_title( 'Home' ) ) ); ?>">
							<img src="<?php bloginfo('template_directory');?>/img/logo.png" />
						</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<ul class="menu">
							<?php
					$arguments =[
						"menu" => "primary-menu",
						"theme_location" => "primary-menu",
						"container" => "nav",
						"container_class" => "menu_nav",
						"menu_class" => "menu"
					
					];

					$menuItem = wp_nav_menu($arguments);

               		?>
						</ul>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
	</header>
</body>	