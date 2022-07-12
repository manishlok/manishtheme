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
        <div class="item row">
            <a class="col-md-4 col-12" href="<?php the_permalink(); ?>" target="_blank">
                <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail('medium', array('class' => 'img-fluid project-image rounded shadow-sm'));
                endif;
                ?>
            </a>
            <div class="desc col-md-8 col-12">
                <h3 class="title"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h3>
                <p class="mb-2"><?php the_content(); ?></p>
                <p><a class="more-link" href="<?php the_permalink(); ?>"></i>Find out more</a></p>
            </div>
            <!--//desc-->
        </div>
<?php
    endwhile;
endif;
?>