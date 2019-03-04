<?php get_header(); ?>
<?php get_sidebar(); ?>
<main id="main"> <!-- place to hold post content -->
  <?php if (have_posts() ) { ?>
    <?php while (have_posts() ) : the_post(); ?>
      <?php if (!empty(get_next_post()) || !empty(get_previous_post())) { ?>
      <nav id="post-nav"> <!-- add links for next and previous post -->
        <?php if(!empty(get_previous_post())) { ?>
          <span class="left"><?php previous_post_link(); ?></span>
        <?php } ?>
        <?php if (!empty(get_next_post())) { ?>
          <span class="right"><?php next_post_link(); ?></span>
        <?php } ?>
      </nav>
    <?php } ?>
      <article class="entry">
        <header> <!-- show import metadata, like title and published date -->
          <h2><a href="<?php the_permalink(); ?>"><?php esc_html(the_title()); ?></a></h2>
          <p class="pubDate"><time class="published" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time></p>
        </header>
          <?php esc_html(the_content()); ?> <!-- get post content -->
        <footer> <!-- specify post footer details -->
          <div style="text-align:center">
            <?php the_tags(); ?> <!-- retrieve tags -->get
          </div>

          <?php
            // display comments and/or comment form, available
            if (comments_open() || get_comments_number()) { ?>
            <hr>
              <?php comments_template();
            } 
          ?>
          
        </footer> <!-- close article footer -->
      </article> <!-- close article -->
    <?php endwhile; ?>
    <?php } ?>
</main> <!-- end content container -->
<?php get_footer(); ?>
