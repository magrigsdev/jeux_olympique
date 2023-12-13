<?php 
 include("./config/_equipe.php"); 
 
function MatchesAvenir(){
    include("bd.php");
    $item = array();
    $items = array();

    $join = "SELECT * FROM 
        rencontre
    JOIN resultat_match
        ON rencontre.id_rencontre = resultat_match.id_rencontre
        WHERE rencontre.date_rencontre LIKE '%2024%'"; 

    $stat = $pdo->prepare($join);
    $stat->execute();
    $resultat = $stat->fetchAll(PDO::FETCH_ASSOC);

    //var_dump($resultat);

     foreach ($resultat as $value) {
         $item["id_rencontre"] = $value["id_rencontre"];
         $item["lieu"] = $value["lieu"];
         $item["type"] = $value["type"];
         $item["id_equipe_a"] = getEquipe($value["id_equipe_a"]) ;
         $item["id_equipe_b"] = getEquipe($value["id_equipe_b"]) ;
         $item["date_de_rencontre"] = $value["date_rencontre"];
         //$item["id_match"] = $value["id_match"];
         $item["score_equipe_a"] = $value["score_equipe_a"];
         $item["score_equipe_b"] = $value["score_equipe_b"];
    
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
         $item["id_equipe_a"] = getEquipe($value["id_equipe_a"]) ;
         $item["id_equipe_b"] = getEquipe($value["id_equipe_b"]) ;
         $item["date_de_rencontre"] = $value["date_rencontre"];
         //$item["id_match"] = $value["id_match"];
         $item["score_equipe_a"] = $value["score_equipe_a"];
         $item["score_equipe_b"] = $value["score_equipe_b"];
    
         $items[] = $item;   
     }
     return $items;
     //var_dump($items);
}

?>
