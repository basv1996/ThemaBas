<?php get_header()?>
<article>
<?php if(have_posts()) : while(have_posts()) : the_post() ?>
    <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
<p><?php the_content() ?></p>
<?php endwhile; endif; ?>
</article>
<?php get_sidebar()?>
<?php get_footer()?>
