<?php 
function getRencontre($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM equipe WHERE id_equipe =".$id;
    $stat = $pdo->prepare($sql);
    $stat->execute();
    $equipe = $stat->fetch();

    return $equipe["nom_equipe"];
}
function getRencontresPast(){
    include("bd.php");
    $sql = "SELECT * FROM rencontre JOIN resultat_match
        ON rencontre.id_rencontre = resultat_match.id_rencontre 
        WHERE rencontre.date_rencontre LIKE '%2024%'";

    $st = $pdo->prepare($sql);
    $st->execute();
    $resultats = $st->fetchAll();

    var_dump($resultats);
    return $resultats;
}

function getRencontresFuture(){
    include("bd.php");
    $sql = "SELECT * FROM rencontre JOIN resultat_match
        ON rencontre.id_rencontre = resultat_match.id_rencontre 
        WHERE rencontre.date_rencontre LIKE '%2024%'";

    $st = $pdo->prepare($sql);
    $st->execute();
    $resultats = $st->fetchAll();

    var_dump($resultats);
    return $resultats;
}




?>