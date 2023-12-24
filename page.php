<?php include('inc/header.php'); ?>

<main class="container mt-5">
        
    <section class="row">



        <section class="col-9 mt-3">
        <?php 
        if(have_posts()){  
            while(have_posts()){
                the_post(); 
                the_content();
            }
        }
        ?>  
        </section>       


        <aside class="col-3 mt-3">
            <div class="inner-aside bg-danger p-3">
                d
            </div>
        </aside>       


    </section>

</main>

<?php include('inc/footer.php');?>
