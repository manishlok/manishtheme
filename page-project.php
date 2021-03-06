 <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'project',
        'posts_per_page' => 5,
        //'orderby' => 'date',
        //'order' => 'DESC'
    );
    $arr_posts = new WP_Query($args);

    if ($arr_posts->have_posts()) :

        while ($arr_posts->have_posts()) :
            $arr_posts->the_post();
    ?>
         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail();
                endif;
                ?>
             <header class="entry-header">
                 <h1 class="entry-title"><?php the_title(); ?></h1>
             </header>
             <div class="entry-content">
                 <?php the_excerpt(); ?>
                 <a href="<?php the_permalink(); ?>">Read More</a>
             </div>
         </article>
 <?php
        endwhile;
    endif;
    ?>