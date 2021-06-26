<!-- page de note -->
<?php 

// include 
include("../manager.php");
include("model.php");

$id_page=3;

ob_start(); ?>

<h1 class="title">Note</h1>

<!-- section 1 -->
<section>
    <!-- formulaire ajout de note -->
    <form action="controller.php" method="post">
        <input type="hidden" name="hidden" value="createNote">
        <input type="submit" value="Ajouter une note">
    </form>

    <!-- success message -->
    <div style="color:green;"><?= isset($_GET['message']) ? $_GET['message'] : "" ?></div>
</section>

<hr>

<!-- section 2 -->
<section>

    <ul>
        <!-- foreach  -->
        <li>
            <a href=""><!-- $result['titre'] --></a>
        </li>
        <!-- foreach  -->
    </ul>

</section>


<?php $content = ob_get_clean(); ?>
<?php require('../layout.php'); ?>