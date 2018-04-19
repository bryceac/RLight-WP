<form method="get" action="<?php echo home_url('/'); ?>" id="searchform">
<p id="search"><input type="text" name="s" value="<?php get_search_query(); ?>" placeholder="Search..."></p> <!-- create textfield for search name attribute must be s in order to have search work -->
<div class="hidden-submit"><input type="submit" tabindex="-1"></div>
</form>
