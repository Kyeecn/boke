<?php
/**
 * The page template file.
 * @package ForeverWood
 * @since ForeverWood 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container">
  <div id="main-content">   
    <div id="content">
      <div class="content-headline">
        <h1 class="entry-headline"><?php the_title(); ?></h1>
<?php foreverwood_get_breadcrumb(); ?>
      </div>
<?php foreverwood_get_display_image_page(); ?>
      <div class="entry-content">
<?php the_content(); ?>
<?php edit_post_link( __( '(Edit)', 'foreverwood' ), '<p>', '</p>' ); ?>
      </div>
<?php endwhile; endif; ?>
<?php comments_template( '', true ); ?>
    </div> <!-- end of content -->
  </div>
<?php if ($foreverwood_options_db['foreverwood_display_sidebar'] != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>