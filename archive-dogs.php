<main class="container mt-5">

    <section class="row">

        <?php if(have_posts()):  while(have_posts()) :?>

        <article class="col-4 mt-3">
            <div class="card p-3">

                <?php the_post(); ?>        

                <div class="card-body">
                    <h5 class="card-title"><?php the_title();?></h5>
                    <p class="card-text"> <?php the_content();?></p>

                    <a href="<?php the_permalink() ?>"> Ver más </a>
                </div>
            </div>
        </article>       

        <?php endwhile; endif; ?>

    </section>

</main>

