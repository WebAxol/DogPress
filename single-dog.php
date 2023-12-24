<?php include('inc/header.php'); ?>

<main class="container mt-5">
        
    <section class="row">

        <?php 

        if(have_posts()):  while(have_posts()) :?>

        <article class="col-12 mt-3">
            <div class="card">

                <?php the_post(); ?>        

                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <p class="card-text"> <?php  the_content();?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </article>       

        <?php endwhile; endif; ?>

    </section>

</main>

<?php include('inc/footer.php');?>
