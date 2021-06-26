<?php

include("manager.php"); 
include("model.php");

if($_POST && !empty($_POST["pseudo"]) && !empty($_POST["message"]))
{
    save($bdd, $_POST);
    header("Location: index.php");
}
else { 
    header("Location: index.php?erreur=veuillez remplir le formulaire");
}



