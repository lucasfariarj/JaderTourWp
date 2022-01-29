<?php
// Template Name: Home
?>

<?php
$argsServices = array(
    'post_type' => 'servicos',
    'order' => 'ASC'
);

$queryServices = new WP_Query($argsServices);

$terms = get_terms(array(
    'taxonomy' => 'cidades',
    'hide_empty' => false
));

?>

<?php get_header(); ?>
<div class="btn-whatsapp">
    <a href="https://wa.me/<?php the_field('whatsapp'); ?>?text=Olá%20Jader!%20Gostaria%20de%20agendar%20um%20passeio!/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/WhatsApp.png" alt="Whatsapp Contato"></a>
</div>
<main class="container">
    <section class="section-main">
        <a href="/nosso-tour">
            <h2>Nosso Tour</h2>
        </a>
    </section>
    <section class="section-main">
        <?php if ($queryServices->have_posts()) : while ($queryServices->have_posts()) : $queryServices->the_post(); ?>
                <a href="<?php echo get_post_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
        <?php endwhile;
        else : endif ?>
    </section>
    <section class="section-main">
        <?php foreach ($terms as $term) { ?>
            <a href="/cidades/<?php echo $term->slug; ?>" style="background-image: url('./img/cabofrio.jpg');">
                <h2><?php echo $term->name; ?></h2>
            </a>
        <?php } ?>
    </section>
</main>
<?php get_footer(); ?>