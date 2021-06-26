<?php
// USER 
function getMessage($bdd){
    $reponse = $bdd->query("SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM chat ORDER BY id DESC");
    $result = $reponse->fetchAll();
    return $result;
}
//SELECT pseudo, message, DATE_FORMAT(date, '%d/%m/%Y %Hh%imin%ss') AS date FROM minichat
// NEW ARTICLES
function save($bdd, $post)
{
    $request = $bdd->prepare('INSERT INTO chat(pseudo, message, date) VALUES(:pseudo, :message, NOW())');
    $request->execute(
        array(
            "pseudo" => $post["pseudo"],
            "message" => $post["message"]
        )
    );
}
?>