<?php

// include 
include("../manager.php");
include("model.php");

if($_POST)
{
    // declenche fonction createNote
    if($_POST["hidden"] == "createNote") {
        createNote($bdd);
        header("Location : index.php?message=notre cree !");
    }
}
else {
    echo "vous n'etes pas autorise a consulter cette page.";
}