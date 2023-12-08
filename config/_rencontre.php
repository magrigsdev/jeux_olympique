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

?>