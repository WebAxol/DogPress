<?php include('inc/header.php'); ?>

<?php
// Verificar si estamos en la página de archivos de "Dogs"
if (is_post_type_archive('dog')) {
    include('archive-dogs.php');
}
?>

<?php include('inc/footer.php');?>
