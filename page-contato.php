<?php
// Template Name: Contato
$contato = get_page_by_title('contato');
?>

<?php get_header(); ?>
        <div class="container">
        <section class="grid-2">
            <h2>Contato</h2>
            <form action="">
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="Email">
                <textarea rows="10" placeholder="Sua mensagem..."></textarea>
                <button class="btn-primary">Enviar</button>
            </form>
                <ol>
                    <li>Endereço: Rua</li>
                    <li>Email: jadertour@gmail.com</li>
                    <li>Telefone: (21) 2666 - 6666</li>
                    <li>WhatsApp: <?php the_field('whatsapp',$contato); ?></li>
                </ol>
        </section>
    </div>

    <?php get_footer(); ?>