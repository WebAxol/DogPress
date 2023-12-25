<?php include('inc/header.php'); ?>

<main class="container mt-5">
        
    <section class="row">

        <section class="col-md-9 mt-3">
        <?php 
        if(have_posts()){  
            while(have_posts()){
                the_post(); 
                the_content();
            }
        }
        ?>  
        </section>      
        
        <aside class="col-md-3 d-flex" style="flex-direction: column; gap: 20px;">
            <div class="inner-aside p-3 border bg-light position-sticky d-flex" style="top : 100px; flex-direction: column;gap: 20px">
                <div class="p-3 bg-danger text-white">
                    <h3>Widget</h3>
                </div>
                <div class="p-3 bg-warning text-white">
                    <h3>Widget</h3>
                </div>
                <div class="p-3 bg-secondary text-white">
                    <h3>Widget</h3>
                </div>
            </div>
        </aside>

    </section>

</main>

<?php include('inc/footer.php');?>
