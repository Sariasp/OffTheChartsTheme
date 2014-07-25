<?php get_header(); ?>

	<div id="content-wrap">
<div class="breadcrumb">
<br>


    <?php if(function_exists('breadcrumbs')) { breadcrumbs(); } else { bloginfo('name'); echo '(breadcrumbs are unavailable)'; } ?>  


</div>
	<div id="content">
	<div class="gap">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
<div class="date"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>
<div class="print-only"> <br />
				<?php the_permalink(); ?>
 <br />
							<?php _e('Posted by: ','yashfa'); ?><?php the_author_posts_link(); ?>
							<br /><?php _e('Posted in:','yashfa'); ?> &nbsp; <?php  the_category(', ') ?>
							</div> <!-- CLOSE print-only -->
</div>


<div class="posties clearfix">
<div class="one">


			<div class="entry">
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>',__('Pages:','yashfa'),'</strong> ',__('after','yashfa') => '</p>', 'next_or_number' => __('number','yashfa'))); ?>
				


			</div>



<?php if (function_exists('similar_posts')) :?>
<div class="related">
<h2><?php _e('Related Posts','yashfa');?></h2>
<?php similar_posts(); ?>   
</div>
<?php endif; ?>

<?php if (get_the_author() != 'CBPP') : ?>
<div class="author-info">

<h4><?php _e('More About ','yashfa')?><?php the_author(); ?></h4>
<div class="avatar"><?php userphoto_the_author_photo(); ?></div>

<p><?php the_author_meta('description'); ?><br><br><a href="<?php the_author_meta('aim'); ?>"><?php _e('Full bio','yashfa')?></a> | <a href="<?php echo get_settings('home'); ?>/author/<?php the_author_meta('nickname'); ?>/"><?php _e('Blog Archive','yashfa')?></a> | <a href="<?php the_author_meta('user_url'); ?>"><?php _e('Research archive at CBPP.org','yashfa')?></a></p>

</div>


<!--<div class="author-info">
<h4><?php _e('More About ','yashfa')?><?php the_author(); ?></h4>
<div class="avatar"><?php userphoto_the_author_photo(); ?></div>
<ul>
<li><a href="<?php echo get_settings('home'); ?>/author/<?php the_author_meta('nickname'); ?>/"><?php _e('Blog Archive','yashfa')?></a> <?php the_author_posts();?> post(s)</li>
<li><a href="<?php the_author_meta('user_url'); ?>"><?php _e('Research archive','yashfa')?></a></p></li>
<li>Email: <?php the_author_meta('user_email'); ?></li>
</ui>
</div>-->
<?php endif; ?>



</div>
<div class="two">
<div class="author-thumb">
<?php userphoto_the_author_photo(); ?>
</div>
<p class="metadata"><br /><?php _e('Posted by:','yashfa'); ?><br /><?php the_author_posts_link(); ?><br /><br /><?php _e('Posted in:','yashfa'); ?><br /><?php  the_category(', ') ?><br /><br/><?php comments_popup_link(__('No Comments','yashfa'), __('1 Comment','yashfa'), __( '% Comments','yashfa')); ?><br /><br /><?php edit_post_link(__('Edit','yashfa'), '', ''); ?></p>




</div>
				</div>

				</div>

		<!--div class="navigation">
			<div class="alignleft"><?php previous_post_link('&larr; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &rarr;') ?></div>
		</div>-->
<div class="page-break"></div>
      <?php comments_template('', true); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.','yashfa');?></p>

<?php endif; ?>

	</div>
	</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
