<?php
/*
Template Name: Archive Template
*/
?>

<?php get_header(); ?>

<div class="content">						

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class('post single'); ?>>
		
			<div class="post-inner section-inner thin">
	
				<div class="post-header">
																										
					<h2 class="post-title"><?php the_title(); ?></h2>
														
				</div> <!-- /post-header -->
			   				        			        		                
				<div class="post-content">
											                                        
					<?php the_content(); ?>
					
					<div class="clear"></div>
					
					<div class="archive-container">
				
						<h3><?php _e('Posts','hoffman') ?></h3>
											            
			            <ul class="posts-archive-list">
				            <?php $posts_archive = get_posts('numberposts=-1');
				            foreach($posts_archive as $post) : ?>
				                <li>
				                	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				                		<?php the_title();?> 
				                	</a>
				                	<span><?php the_time(get_option('date_format')); ?></span>
				                </li> 
				            <?php endforeach; ?>
			            </ul>
			            
		            </div> <!-- /archive-container -->
										
				</div>
            
			</div> <!-- /post-inner -->

		</div> <!-- /post -->
		
		<?php if ( comments_open() ) : ?>
			
			<div class="comments-container">
				
				<div class="comments-inner section-inner thin">
				
					<?php comments_template( '', true ); ?>
				
				</div>
			
			</div> <!-- /comments-container -->
		
		<?php endif; ?>
			
	<?php endwhile; else: ?>

		<p><?php _e("We couldn't find any posts that matched your query. Please try again.", "hoffman"); ?></p>

	<?php endif; ?>
	
</div> <!-- /content -->
								
<?php get_footer(); ?>
