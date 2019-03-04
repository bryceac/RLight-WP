<nav id="nav"> <!-- nav div -->
<?php get_search_form(); ?> <!-- include search form -->
  <ul id="menu"> <!-- create menu -->
    <li onClick="return true"><span class="bold sans">Main</span> <span class="arrow">&#709;</span> <!-- main menu hold the main contents -->
      <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => null, 'container' => 'ul', 'container_class' => null )); ?>
</li> <!-- end nested list -->
  <li onClick="return true"><span class="bold sans">Misc.</span> <span class="arrow">&#709;</span> <!-- misc holds extra content -->
    <?php wp_nav_menu(array('theme_location' => 'extras-menu', 'menu_class' => null, 'container' => 'ul', 'container_class' => null )); ?>
  </li><!-- end nested list -->
  <li onClick="return true"><span class="bold sans">Meta</span> <span class="arrow">&#709;</span> <!-- meta holds the login area -->
  <ul> <!-- create nested list -->
    <li><?php wp_loginout(); ?></li>
    <li><a href="<?php bloginfo('rss2_url'); ?>">Entry Feed</a></li>
    <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comment Feed</a></li>
  </ul> <!-- end nested list -->
  </li> <!-- close list item -->
  </ul> <!-- end navigation list -->
</nav> <!-- close nav div -->
