<?php

// ajouter une note vide
function createNote($bdd)
{
    $bdd->exec('INSERT INTO note(titre, text, date) VALUES("", "", NOW())');
    echo "created !";
}
?>