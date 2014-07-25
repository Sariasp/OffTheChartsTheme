<hr />
</div>
</div>
<!--<div id="footer-all">
<div id="more-footer">
<div id="more-more-footer">
<div class="inner-one inner">
<div class="grap">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Extra Bottom Left') ) : ?>
<?php if (function_exists('get_recent_comments')) { ?>
   <ul>
    <?php get_recent_comments(); ?>
   </ul>
<?php } ?>
<?php endif; ?>
</div>
</div>

<div class="inner-two inner">
<div class="grap">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Extra Bottom Center') ) : ?>
<h3><?php _e('Tags Cloud','yashfa')?></h3>
          <?php wp_tag_cloud(); ?>
<?php endif; ?>
</div>
</div>

<div class="inner-three inner">
<div class="grap">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Extra Bottom Right') ) : ?>
<?php J_ShowRecentPosts(); ?>
<?php endif; ?>
</div>
</div>

</div>
</div>
<br class="clear" />-->
<div id="extra-footer">

<div id="footer">

	<p>
	<?php bloginfo(__('<a href="http://offthechartsblog.org">name','yashfa'));?></a>
		<!-- <br /><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)','yashfa');?></a>
		<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
	</p>
	<p class="right"></p>
</div>
</div>

		<?php wp_footer(); ?>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15961107-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
