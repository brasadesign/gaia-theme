<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta http-equiv="Content-type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
																		
		<title><?php bloginfo('name'); ?><?php wp_title('|', true, 'left'); ?></title>

		<?php if ( ! get_option( 'site_icon' ) ) : ?>
			<link href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" />
		<?php endif; ?>
		 
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="wrapper" id="wrapper">
		<a class="nav-toggle" href="#">
			<div class="bars">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="clear"></div>
			</div>
			<p>
				<span class="menu">Menu</span>
				<span class="close">Fechar</span>					    
			</p>
		</a>
		<div class="navigation bg-blue">
		
				<div class="section-inner">
					<ul class="main-menu">
						
						<?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary'
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>
						
						<div class="clear"></div>
							
					 </ul>
					 
					 <ul class="mobile-menu hidden">
					
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
					
				</ul>
						
				</div> <!-- /section-inner -->
					
			</div> <!-- /navigation -->
		<div class="section-inner antimenu">
		</div>
			<div class="header" style="background: url('<?php header_image();?>') no-repeat scroll center top transparent;">
							
				<?php get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ; ?>

	<div class="fleft">
		<h1 class="blog-title">
			<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
		</h1>
	</div>
						
				<div class="clear"></div>
								
			</div> <!-- /header -->
