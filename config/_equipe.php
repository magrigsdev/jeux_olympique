<?php 

function getEquipeAll(){
    
    include("bd.php");
    $item = array();
    $items = array();

    $sql = "SELECT * FROM equipe";
    $stat = $pdo->prepare($sql);
    $stat->execute();

    $matches = $stat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($matches as $value) {
        # code...
        $item["id"] = $value["id_equipe"];
        $item["nom"] = $value["nom_equipe"];
        $items [] = $item;   
    }

    return $items;
}

function getEquipe($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM equipe WHERE id_equipe =".$id;
    $stat = $pdo->prepare($sql);
    $stat->execute();
    $equipe = $stat->fetch();
    return $equipe["nom_equipe"];
}


?>


