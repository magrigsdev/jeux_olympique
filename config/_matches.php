

<?php 
function MatchesAvenir(){
    include("bd.php");
    $item = array();
    $items = array();

    $join = "SELECT * FROM 
        rencontre
        WHERE rencontre.date_rencontre LIKE '%2024%'"; 

    $stat = $pdo->prepare($join);
    $stat->execute();
    $resultat = $stat->fetchAll(PDO::FETCH_ASSOC);

    //var_dump($resultat);

     foreach ($resultat as $value) {
         $item["id_rencontre"] = $value["id_rencontre"];
         $item["lieu"] = $value["lieu"];
         $item["type"] = $value["type"];
         $item["id_equipe_a"] = getEquipeforMatches($value["id_equipe_a"]) ;
         $item["id_equipe_b"] = getEquipeforMatches($value["id_equipe_b"]) ;
         $item["date_de_rencontre"] = $value["date_rencontre"];
         //$item["id_match"] = $value["id_match"];
        //  $item["score_equipe_a"] = $value["score_equipe_a"];
        //  $item["score_equipe_b"] = $value["score_equipe_b"];
    
         $items[] = $item;   
     }
     //var_dump($items);
     return $items;
     //var_dump($items);
}
function MatchesPasse(){
    include("bd.php");
    $item = array();
    $items = array();

    $join = "SELECT * FROM 
        rencontre
    JOIN resultat_match
        ON rencontre.id_rencontre = resultat_match.id_rencontre
        WHERE rencontre.date_rencontre LIKE '%2023%'"; 

    $stat = $pdo->prepare($join);
    $stat->execute();
    $resultat = $stat->fetchAll(PDO::FETCH_ASSOC);

    // var_dump($resultat);

     foreach ($resultat as $value) {
         $item["id_rencontre"] = $value["id_rencontre"];
         $item["lieu"] = $value["lieu"];
         $item["type"] = $value["type"];
         $item["id_equipe_a"] = getEquipeforMatches($value["id_equipe_a"]) ;
         $item["id_equipe_b"] = getEquipeforMatches($value["id_equipe_b"]) ;
         $item["date_de_rencontre"] = $value["date_rencontre"];
         //$item["id_match"] = $value["id_match"];
         $item["score_equipe_a"] = $value["score_equipe_a"];
         $item["score_equipe_b"] = $value["score_equipe_b"];
    
         $items[] = $item;   
     }
     return $items;
     //var_dump($items);
}

function getEquipeAllforMatches(){
    
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


function getEquipeforMatches($id){
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
