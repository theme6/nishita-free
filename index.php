<?php get_header(); ?>

<?php if (is_home()) { query_posts('showposts=1'); } ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<h2 class="photo-title"><span><?php the_title(); ?></span></h2>
<div id="photo">
    <div id="photo-inner">
    <?php the_content(); ?>
    <?php the_tags('<hr />TAGS: ', ', ', ''); ?>
    </div>
</div>

<div id="photo-meta">
    <div id="photo-meta-inner">
        <ul>
        <li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_time('M jS, Y') ?></a></li>
        <li><?php the_category(', ') ?></li>
        <?php $wp_query->is_single = false; ?>
        <li><?php comments_popup_link('No comments', '1 comment', '% comments','Comments closed'); ?></li>
        <?php edit_post_link(__('Edit'), '<li>', '</li>'); ?>
        </ul>
    </div>
</div>

<div id="navigate">
    <div id="navigate-inner" class="clearfix">
        <?php $wp_query->is_single = true; ?>
        <span class="previous"><?php previous_post( '%', 'Previous', '' ) ?></span>
        <span class="next"><?php next_post( '%', 'Next', '' ) ?></span>
    </div>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>