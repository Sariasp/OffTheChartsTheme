<?php get_header(); ?>

	<div id="content-wrap">
	<div id="content">
	<div class="gap">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="date"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></div>
<div class="posties clearfix">
<div class="one">
				
				<div class="entry">
					<?php the_content(__('<br><br><span class="moretext">Read more...</span>','yashfa')); ?>
				</div>



</div>
<div class="two">

<div class="author-thumb">
<?php userphoto_the_author_photo(); ?>

</div>
<p class="metadata"><br /><?php _e('Posted by:','yashfa'); ?><br /><?php the_author_posts_link(); ?><br /><br /><?php _e('Posted in:','yashfa'); ?><br /><?php  the_category(', ') ?><br /><br/><?php comments_popup_link(__('No Comments','yashfa'), __('1 Comment','yashfa'), __( '% Comments','yashfa')); ?><br /><br /><?php edit_post_link(__('Edit','yashfa'), '', ''); ?></p>
</div>
				</div>

				</div>


		<?php endwhile; ?>

<center><?php if(function_exists('wp_pagenavi')) {  ?>
         <div class="navinavi">
         <?php
          wp_pagenavi(); ?>
          </div> 
          <br class="clear" />
          <?php } else { ?>
          <div class="navigation">
            <div class="alignleft">
              <?php next_posts_link(__('&larr; Previous Entries','yashfa')) ?>
            </div>
            <div class="alignright">
              <?php previous_posts_link(__('Next Entries &rarr;','yashfa')) ?>
            </div>
          </div>
          <?php } ?></center>

	<?php else : ?>

		<h2 class="center"><?php _e('Not Found','yashfa');?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that is not here.','yashfa');?></p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>
	</div>
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

