<?php get_header(); ?>
<?php 
if(isset($_GET['author_name'])) :
    // NOTE: 2.0 bug requires: get_userdatabylogin(get_the_author_login());
    $curauth = get_userdatabylogin($author_name);
else :
    $curauth = get_userdata(intval($author));
endif;
?>

	<div id="content-wrap">
<div class="breadcrumb">
<br>


    <?php if(function_exists('breadcrumbs')) { breadcrumbs(); } else { bloginfo('name'); echo '(breadcrumbs are unavailable)'; } ?>  
</div>
	<div id="content">

	<div class="gap">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  
<?php /* If this is a category archive */ if (is_category()) { ?>
		<!--<h2 class="pagetitle"><?php _e('Archive for the &#8216;', 'yashfa' ); ?><?php single_cat_title(); ?>&#8217; <?php _e('Category','yashfa')?></h2>-->
<div class="author-info"><h4>The Center's work on '<?php single_cat_title(); ?>' Issues</h4><?php echo category_description(); ?></div><br>
 	  
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle"><?php _e('Posts Tagged &#8216;', 'yashfa'); ?><?php single_tag_title(); ?>&#8217;</h2>
 	  
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for ','yashfa'); ?><?php the_time('F jS, Y'); ?></h2>
 	  
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle"><?php _e('Archive for ','yashfa');?><?php the_time('F, Y'); ?></h2>
 	  
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle"><?php _e('Archive','yashfa'); ?><?php the_time('Y'); ?></h2>


	  
<?php /* If this is an author archive for someone other than CBPP Communications staff*/ } elseif (is_author()  && ($curauth->ID != 1)) { ?>


<div class="author-info">

<h4><?php _e('More About ','yashfa')?><?php wp_title(''); ?></h4>
<div class="avatar"><?php userphoto($wp_query->get_queried_object()) ?>

</div>

<p><?php echo $curauth->description; ?><br><br><a href="<?php echo $curauth->aim; ?>"><?php _e('Full bio and recent public appearances','yashfa')?></a> | <a href="<?php echo $curauth->user_url; ?>"><?php _e('Research archive at CBPP.org','yashfa')?></a></p>

</div>
<br>


 	  
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle"><?php _e('Blog Archives','yashfa'); ?></h2>
 	  
<?php } ?>


		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<div class="date"><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></div>

<?php if (!is_author()) :?>
<div class="posties clearfix">
<?php else: ?>
<div class="authorList">
<?php endif; ?>
<div class="one">
				
				<div class="entry">
					<?php the_content(__('<br><br><span class="moretext">Read more...</span>','yashfa')); ?>
				</div>

<!--<div class="tagged">
<?php the_tags(__('Tags: ','yashfa'), ', ', '<br />'); ?>
</div>-->

</div>

<?php if (!is_author()) :?>
<div class="two">
<div class="author-thumb">
<?php userphoto_the_author_photo() ?>

</div>
<p class="metadata"><br /><?php _e('Posted by:','yashfa'); ?><br /><?php the_author_posts_link(); ?><br /><br /><?php _e('Posted in:','yashfa'); ?><br /><?php  the_category(', ') ?><br /><br/><?php comments_popup_link(__('No Comments','yashfa'), __('1 Comment','yashfa'), __( '% Comments','yashfa')); ?><br /><br /><?php edit_post_link(__('Edit','yashfa'), '', ''); ?></p>
</div>
<?php endif; ?>
				</div>

				</div>
		<?php endwhile; ?>

		<!--<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','yashfa')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','yashfa')) ?></div>
		</div> -->
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

		<h2 class="center"><?php _e('Not Found','yashfa')?></h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>
	</div>	</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>