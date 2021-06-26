<!-- page de note -->
<?php 

// include 
include("../manager.php");
include("model.php");

$id_page=3;

ob_start(); ?>

<h1 class="title">
Note
</h1>

<!-- formulaire ajout de note -->
<form action="formHandler.php" method="post">
    <input type="hidden" name="hidden" value="createNote">
    <input type="submit" value="Ajouter une note">
</form>

<!-- success message -->
<div style="color:green;"><?= isset($_GET['message']) ? $_GET['message'] : "" ?></div>

<?php $content = ob_get_clean(); ?>
<?php require('../layout.php'); ?>