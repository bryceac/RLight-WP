<nav id="nav"> <!-- nav div -->
<?php get_search_form(); ?>
  <ul id="menu">
    <li onClick="return true"><span class="bold sans">Main</span> <span class="arrow">&#709;</span>
      <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => null, 'container' => 'ul', 'container_class' => null )); ?>
</li>
  <li onClick="return true"><span class="bold sans">Misc.</span> <span class="arrow">&#709;</span>
    <?php wp_nav_menu(array('theme_location' => 'extras-menu', 'menu_class' => null, 'container' => 'ul', 'container_class' => null )); ?>
  </li>
  <li onClick="return true"><span class="bold sans">Meta</span> <span class="arrow">&#709;</span>
  <ul>
    <li><?php wp_loginout(); ?></li>
  </ul>
  </li>
  </ul>
</nav> <!-- close nav div -->
