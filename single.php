<?php get_header(); ?>

  <section>

    <?php 
    if (have_posts()) : //投稿があればtrueを返し、投稿がなければfalseを返す
      while (have_posts()) : //繰り返し処理。投稿記事がある間繰り返す
        the_post(); //投稿記事の情報を取得
    ?>
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    <?php 
      endwhile;
    endif;
    ?>

  </section>
</div>
    <!--/contents-->

<?php get_footer(); ?>