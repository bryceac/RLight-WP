<?php get_header(); ?> <!-- include header file -->
<?php get_sidebar(); ?> <!-- include sidebar file -->
<main id="main"> <!-- place to hold post list -->
  <?php if (have_posts() ) : ?>
    <?php while (have_posts() ) : the_post(); ?>
      <article class="entry">
        <header>
          <h2><a href="<?php the_permalink(); ?>"><?php esc_html(the_title()); ?></a></h2>
          <p class="pubDate"><time class="published" datetime="<?php the_date( 'c' ); ?>"><?php the_date(); ?></time></p>
        </header>
          <?php esc_html(the_excerpt()); ?>
        <footer>
          <div style="text-align:center">
            <?php the_tags(); ?>
          </div>
        </footer>
      </article>
    <?php endwhile ?>
    <?php the_posts_pagination(); ?>
  <?php else: ?>
    <p>Sorry, there is no content to be found.</p>
  <?php endif; ?>
</main> <!-- close container holding posts -->
<?php get_footer(); ?> <!-- include footer file -->
