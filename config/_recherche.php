<?php

function getRecherche(){
    
    include("bd.php");
    $item = array();
    $items = array();

    $sql = "SELECT * FROM equipe limit 50";
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

function getRechercheTrie($sexe, $role,$id_pays){
    
    if(gettype($id_pays)== "string"){$id_pays = intval($id_pays);};
    
    
    include("bd.php");
    // $sql = "SELECT * FROM personnel 
    // WHERE id_equipe =:pays 
    // AND role =:role AND sexe := sexe";

    $sql = "";

    if(!empty($sexe)){
        $sql = "SELECT * FROM personnel WHERE id_equipe = $id_pays 
         AND sexe ='$sexe'";
    
    }
    elseif(!empty($role)){
        $sql = "SELECT * FROM personnel WHERE id_equipe = $id_pays 
        AND role ='$role'";

    }
    else{
        $sql = "SELECT * FROM personnel WHERE id_equipe = $id_pays 
        AND role ='$role' AND sexe ='$sexe'";
    
    }
    
    // var_dump($sexe, $role, $id_pays);

    $stat = $pdo->prepare($sql);
    // $stat->execute(
    //     ["pays"=>$id_pays,
    //     "sexe"=>$sexe,
    //     "role"=>$role
    // ]);
    $stat->execute();

    $row = $stat->fetchALL();
    return $row;
}
function getRecherchePays($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM equipe WHERE id_equipe =:id";
    $stat = $pdo->prepare($sql);

    $stat->execute(["id"=>$id]);
    $row = $stat->fetch();
    return $row["nom_equipe"];
}