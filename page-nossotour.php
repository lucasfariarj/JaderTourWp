<?php
// Template Name: Nosso Tour
?>

<?php get_header(); 

$terms = get_terms(array(
    'taxonomy' =>'cidades',
    'hide_empty' => false
));

$args = array(
    'post_type' => 'servicos',
    'order' => 'DESC',
);

$queryPosts = new WP_Query($args);

?>
    <div class="container">
        <section class="grid-3">
            <h2>Nosso Tour</h2>
            <?php if($queryPosts->have_posts()) : while ($queryPosts->have_posts(  )) : $queryPosts->
            the_post(); ?>
            <div class="tab-menu">
                <a href="" data-tab="button">
                    <h3><?php the_title(); ?></h3>
                </a>
            </div>
            <?php endwhile; else : endif ?>
            <?php if($queryPosts->have_posts()) : while ($queryPosts->have_posts(  )) : $queryPosts->
            the_post(); ?>
        </section>
        <section class="grid-2" data-tab="content">
            <img src="./img/cabofrio.jpg" alt="">
            <div>
                <h2><?php the_title(); ?></h2>
                <p>
                <?php the_content(); ?>
                </p>
                <br />
                <p><b>Disponível nas <?php the_taxonomies(); ?></b></p>
                <a href="<?php echo get_post_permalink() ?>" class="btn-primary">Ver mais</a>
            </div>
            <img src="./img/cabofrio.jpg" alt="">     
        </section>
        <?php endwhile; else : endif ?>
    </div>
    <?php get_footer(); ?>