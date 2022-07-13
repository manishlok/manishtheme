<?php
$sticky = get_option('sticky_posts');
if (!empty($sticky)) {
    rsort($sticky);
    $args = array(
        'post__in' => $sticky
    );
    query_posts($args);
    while (have_posts()) {
        the_post(); ?>
        <div class="item featured text-center">

            <div class="featured-image has-ribbon">
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <?php echo get_the_post_thumbnail(); ?>
                </a>
                <div class="ribbon">
                    <div class="text">New</div>
                </div>
            </div>

            <h3 class="title mb-3">
                <a href="<?php the_permalink(); ?>" target="_blank">
                    <?php the_title(); ?>
                </a>
            </h3>

            <div class="desc text-start">
                <p><?php the_excerpt(); ?></p>
            </div>
            <!--//desc-->
            <a class="btn btn-cta-secondary" href="<?php the_permalink(); ?>" target="_blank"><i class="fas fa-thumbs-up"></i> Back my project</a>
        </div>
<?php
    }
}
?>