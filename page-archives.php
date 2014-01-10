<?php
/*
Template Name: Archives Template
*/
?>

<?php get_header(); ?>

<!-- BEGIN main -->
<div id="main"><div id="main-inner">

<h2 class="page-title">Archives</h2>

<h3 class="post-title">Recent photos</h3>
<?php
$posts = get_posts('numberposts=10');
foreach($posts as $post) :
setup_postdata($post);
?>
<!-- BEGIN post -->
<div id="post-<?php the_ID(); ?>" class="post clearfix">
<div class="post-body">
<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <?php 

	$pattern = "/\< *[img][^\>]*[src] *= *[\"\']{0,1}([^\"\'\ >]*)/i";
	preg_match_all($pattern, $post->post_content, $images);
	if(!$images[1][0]) {
	?>
		<img src='<?php bloginfo("template_url");?>/i/img-404.png' alt='Sorry! Looks like somebody stole the image.' width='75px' />
	<?
	}
	else 
		echo "<img src='".$images[1][0]."' width='75px' />";
	?>
</a>
</div>
<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to '<?php the_title(); ?>'"><?php the_title(); ?></a></h3>
<h4 class="post-meta"><?php the_time('M jS, Y') ?></h4>
</div>
<!-- END post -->
<?php endforeach; ?>
</div>
</div>
<!-- END #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>