<!-- page d'accueil -->
<?php 

$id_page=1;

ob_start(); ?>

<h1 class="title">
Site de Raphaël : Accueil
</h1>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php'); ?>
