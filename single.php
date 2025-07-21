<?php get_header(); ?>

<main>
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <p><strong>Published on:</strong> <?php the_date(); ?></p>
        <div>
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile;
  else :
    echo "<p>No content found.</p>";
  endif;
  ?>
</main>

<?php get_footer(); ?>
