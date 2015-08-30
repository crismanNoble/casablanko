
<form action="<?php bloginfo('url'); ?>/" method="get">
    <input type="text" name="s" id="search" class="input-text" value="<?php the_search_query(); ?>" />
    <input type="submit" value="Search" alt="search" class="button"/>
    <input type="hidden" value="post" name="post_type" id="post_type" />
</form>