
<?php include('inc/header.php'); ?>

<main class="container mt-5">
        
    <section class="row">

        <?php 

        if(have_posts()):  while(have_posts()) :?>

        <article class="col-12 mt-3">
            <div class="card">

                <?php the_post(); ?>        
                <?php the_content(); ?>

            </div>
        </article>       

        <?php endwhile; endif; ?>

    </section>

</main>

<?php include('inc/footer.php');?>
