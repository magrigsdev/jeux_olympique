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

//la fonction retourne true si insertion effectuer
function AddEquipe($nom){
    include("bd.php");
    $isNameExist = false;

    //CHECKING
    foreach ( getEquipeAll() as $value) {
        # code...
        if($value["nom_equipe"] == $nom){
            $isNameExist = true;
            break;
        }
   
    }
    if(!$isNameExist){
        $sql = "INSERT INTO equipe VALUES(NULL, :nom)";
        $stat = $pdo->prepare($sql);
        $stat->execute(["nom"=> $nom]);
    }

    return  $isNameExist;

}

function UpdateEquipe($id, $nom){
    include("bd.php");
    if(gettype($id)== "string"){$id = intval($id);};

    $sql = "UPDATE equipe SET name = :nom WHERE id_equipe= :id";
    $stat= $pdo->prepare($sql);
    $stat->execute(["id"=> $id,"nom"=> $nom]);

}

function DelEquipe($id){
    include("bd.php");
    
    $sql = "DELETE FROM equipe WHERE id_equipe = :id";
    $stat = $pdo->prepare($sql);
    $stat->execute(["id"=> $id]);
}

?>


