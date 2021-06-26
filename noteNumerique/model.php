<?php

// create
function createNote($bdd)
{
    $bdd->exec('INSERT INTO note(titre, text, date) VALUES("", "", NOW())');
}

// index 
// SQL : INSERT 

?>