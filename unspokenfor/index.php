<?php get_header(); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
<h2>Oct <?php the_time('j, Y') ?> <a href="http://www.simply-erratic.net"><?php the_title(); ?></a></h2>
<p>
<?php the_content('Read the rest of this entry &raquo;'); ?>
<br>
<h3><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> | <?php the_category(', '); ?></h3>
<br>
</div><p>
<?php endwhile; ?>
<?php next_posts_link('&laquo; Older Posts') ?> - <?php previous_posts_link('Newer Posts &raquo;') ?>
</div>
<?php else : ?>
<h2>No Posts Yet</h2>
Julia's too lazy to get off her lazy butt to post any at the moment. Please check back later :)
<?php endif; ?>
<?php get_footer(); ?>