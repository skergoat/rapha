<?php

// include 
include("../manager.php");
include("model.php");

if($_POST)
{
    // declenche fonction createNote
    if($_POST["hidden"] == "createNote") 
    {
        createNote($bdd);
        $message = "<br>Votre note est ajoutee !";
    }
}
else {
    echo "vous n'etes pas autorise a consulter cette page.";
}

header("Location: index.php?message=".$message);