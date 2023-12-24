<?php include('inc/header.php'); ?>

<main class="container my-5">

    <section class="row">

        <?php 

        if(have_posts()):  while(have_posts()) :?>

        <article class="col-12 mb-5">
            <div class="card">

                <?php the_post(); ?>        

                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <!-- Extracto de la entrada (limitado a 150 caracteres) -->
                    <p><?php echo wp_trim_words(get_the_excerpt(), 150); ?></p>

                    <!-- Enlace "Leer más" -->
                    <a href="<?php the_permalink(); ?>">Ver más</a>
                </div>
            </div>
        </article>       

        <?php endwhile; endif; ?>

    </section>

</main>

<?php include('inc/footer.php');?>
