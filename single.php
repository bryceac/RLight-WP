<?php get_header(); ?>
<?php get_sidebar(); ?>
<main id="main">
  <?php if (have_posts() ) { ?>
    <?php while (have_posts() ) : the_post(); ?>
      <?php if (!empty(get_next_post()) || !empty(get_previous_post())) { ?>
      <nav id="post-nav">
        <?php if(!empty(get_previous_post())) { ?>
          <span class="left"><?php previous_post_link(); ?></span>
        <?php } ?>
        <?php if (!empty(get_next_post())) { ?>
          <span class="right"><?php next_post_link(); ?></span>
        <?php } ?>
      </nav>
    <?php } ?>
      <article class="entry">
        <header>
          <h2><a href="<?php the_permalink(); ?>"><?php esc_html(the_title()); ?></a></h2>
          <p class="pubDate"><time class="published" datetime="<?php the_date( 'c' ); ?>"><?php the_date(); ?></time></p>
        </header>
          <?php esc_html(the_content()); ?>
        <footer>
          <div style="text-align:center">
            <?php the_tags(); ?>
          </div>
        </footer>
      </article>
    <?php endwhile; ?>
    <?php } ?>
</main>
<?php get_footer(); ?>
