<?php

include("../manager.php");
include("model.php");

$id_page=2;

$result=getMessage($bdd);

ob_start();

?>

<div>
    <a href="../"> << Index</a>
</div><br>
<div>
    <form action="formHandler.php" method="post">
        <input type="text" name="pseudo" placeholder="pseudo"><br><br>
        <input type="text" name="message" placeholder="Aa"><br><br>
        <input type="submit" class="btn btn-secondary" value="Envoyer">
    </form>
    <div style="color:red;"><?= isset($_GET["erreur"]) ? $_GET["erreur"] : "" ?></div>
    <hr>
    <?php
    if(empty($result)) { ?>
        <p style="color:grey;">Il n'y a encore aucun message</p>
    <?php } else {
        foreach($result as $result) { ?>
            <strong><?= htmlspecialchars($result["pseudo"]) ?> - <em><?= htmlspecialchars($result["date"]) ?></em> :</strong>  <?= htmlspecialchars($result["message"]) ?><br><br>
        <?php }
    } ?>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('../layout.php'); ?>
