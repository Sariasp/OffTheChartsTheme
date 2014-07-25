<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content-wrap" class="archive">
	<div id="content">
	<div class="gap">

      <div class="post">

<div class="posties clearfix">
<div class="one">      
        <h3 class="pagetitle2"><?php _e('Last 200 Posts','yashfa') ?>
        </h3>
        <ul class="recent2">
          <?php

$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();

$wp_query->query('showposts=200'.'&paged='.$paged);
?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark">
            <?php the_title(); ?>
            </a>
<?php the_time('n/j/Y'); ?>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php
$sett = '&offset='.$totale;
if($postoff ==$sett): ?>
<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="content-wrap" class="archive">
	<div id="content">
	<div class="gap">

      <div class="post">

<div class="posties clearfix">
<div class="one">      
        <h3 class="pagetitle2"><?php _e('Last 50 Posts','yashfa') ?>
        </h3>
        <ul class="recent2">
          <?php

$temp = $wp_query;
$wp_query= null;
$wp_query = new WP_Query();

$wp_query->query('showposts=50'.'&paged='.$paged);
?>
          <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
          <li><a href="<?php the_permalink() ?>" rel="bookmark">
            <?php the_title(); ?>
            </a>
<?php the_time('n/j/Y'); ?>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php
$sett = '&offset='.$totale;
if($postoff ==$sett): ?>
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
        <?php endif; ?>
        <?php $wp_query = null; $wp_query = $temp;?>
        <br class="clear" />
        <br class="clear" />
    <?php if (function_exists('flexo_standalone_archives')){ flexo_standalone_archives(); } ?>
       
        <!--<h4><?php _e('By Tags','yashfa');?></h4>
          <?php wp_tag_cloud(); ?>-->
</div>
<div class="two">
<h2><?php _e('Archives','yashfa')?></h2>
   <br class="clear" /><br class="clear" /> <h3 class="pagetitle2"><?php _e('Archives by Month:','yashfa') ?>
        </h3>
        <ul>
          <h4><?php wp_get_archives('type=monthly'); ?></h4>
        </ul>
        <br class="clear" />
</div>
</div>
      </div>
</div>
</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
       
 <div class="navigation">
          <div class="alignleft">
            <?php previous_posts_link(__('&laquo; Previous','yashfa')) ?>
          </div>
          <div class="alignright">
            <?php next_posts_link(__('More &raquo;','yashfa')) ?>
          </div>
        </div>
        <?php endif; ?>
        <?php $wp_query = null; $wp_query = $temp;?>
        <br class="clear" />
        <br class="clear" />
    <?php if (function_exists('flexo_standalone_archives')){ flexo_standalone_archives(); } ?>
       
        <!--<h4><?php _e('By Tags','yashfa');?></h4>
          <?php wp_tag_cloud(); ?>-->
</div>
<div class="two">
<h2><?php _e('Archives','yashfa')?></h2>
   <br class="clear" /><br class="clear" /> <h3 class="pagetitle2"><?php _e('Archives by Month:','yashfa') ?>
        </h3>
        <ul>
          <h4><?php wp_get_archives('type=monthly'); ?></h4>
        </ul>
        <br class="clear" />
</div>
</div>
      </div>
</div>
</div>
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
