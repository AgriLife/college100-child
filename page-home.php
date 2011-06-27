<?php
/**
 * Template Name: Home Page
 * @package WordPress
 */

get_header(); ?>
			<div id="content" role="main">		

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( is_front_page() ) { ?>
						<h2 class="entry-title"><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php } ?>				

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'county_ext' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'county_ext' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

<?php endwhile; ?>
		
<div id="home-middle-bg">
	<div id="home-middle">
		
		<div class="home-middle-features">
			
			<div class="feature">
			<h3 class="entry-title"><a href="http://aglifesciences.tamu.edu/news/2011/02/24/rootsandshoots/">Roots and Shoots: The College Grows</a></h3>
			<p><a href="http://aglifesciences.tamu.edu/news/2011/02/24/rootsandshoots/"><img src='http://agrilife.org/college-test/files/2011/05/dino.jpg' alt="student studying science Texas a&amp;m"></a>
			In the first few decades of the 20th century, Texas A&amp;M expanded both upward and outward. As enrollment increased and funding became available, the directors initiated a building program that would continue throughout the 1920s and 1930s. They also formed new departments and expanded the college system by adding branches in other parts of the state.
			<span class="read-more"><a href="http://aglifesciences.tamu.edu/news/2011/02/24/rootsandshoots/">Read Article &rarr;</a></span></p>
			</div><!-- end .feature -->	
						
			<div class="feature">
			<h3 class="entry-title"><a href="http://aglifesciences.tamu.edu/news/2011/04/21/the-golden-age-of-science/">The Golden Age of Science</a></h3>
			<p><a href="http://aglifesciences.tamu.edu/news/2011/04/21/the-golden-age-of-science/"><img class='science-img' src='http://agrilife.org/college-test/files/2011/05/1959studentlab_21-300x241.jpg' alt="student studying science Texas a&amp;m"></a>
			During the 1950s, a quiet technological and social revolution was taking place across the United States. Chartered in 1950 by the U.S. Congress, the National Science Foundation reflected the public’s interest in scientific research. The foundation’s mission was to set scientific policy and encourage basic research through grants. Dollars for research flowed in, and a new generation of scientists attracted to public research joined the professional ranks at agricultural experiment stations nationwide. Employment increased by 50 percent in less than a decade.
			<span class="read-more"><a href="http://aglifesciences.tamu.edu/news/2011/04/21/the-golden-age-of-science/">Read Article &rarr;</a></span></p>
			</div><!-- end .feature -->	
			
			<div class="feature">
			<h3 class="entry-title"><a href="http://aglifesciences.tamu.edu/news/2011/05/05/the-times-they-are-a-changin’/">The Times, They are a-Changin’</a></h3>
			<p><a href="http://aglifesciences.tamu.edu/news/2011/05/05/the-times-they-are-a-changin’/"><img src='http://agrilife.org/college-test/files/2011/05/girls-alt.jpg' alt="student studying science Texas a&amp;m"></a>
			Released in 1964, singer-songwriter Bob Dylan’s third studio album, The Times They Are a-Changin’, captured the spirit of social and political upheaval characteristic of the era. And at Texas A&amp;M University and the College of Agriculture, the times were also changing. In 1961, the Department of Soil and Crop Sciences is formed in the School of Agriculture.
			<span class="read-more"><a href="http://aglifesciences.tamu.edu/news/2011/05/05/the-times-they-are-a-changin’/">Read Article &rarr;</a></span></p>
			</div><!-- end .feature -->	
											
		</div><!-- end .home-features -->		
			
		<div class="home-middle-1">
			<?php if (!dynamic_sidebar('Home Page Bottom')) : ?>
			<div class="widget">
				<h2><?php _e("Home Page Bottom Widget", 'county_ext'); ?></h2>
				<p><?php _e("This is a widgeted area which is called Home Middle #1. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the widget into the Home Middle #1 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-1 -->

    </div><!-- end #home-middle -->
</div><!-- end #home-middle-bg -->
			
			</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>