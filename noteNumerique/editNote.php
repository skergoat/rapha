<!-- page de note -->
<?php 

include("../manager.php");
include("model.php");

$id_page=3;

ob_start(); ?>

<h1 class="title">
Note
</h1>

<form action="model.php" method="post">
    <input type="hidden" name="hidden" value="editNote">
    <input type="text" name="titre" placeholder="Aa"><br><br>
    <textarea name="note" placeholder="Aa" cols="50" rows="15"></textarea><br><br>
    <input type="submit" value="Noter">
</form>

<?php $content = ob_get_clean(); ?>
<?php require('../layout.php'); ?>