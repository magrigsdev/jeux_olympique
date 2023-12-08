<?php 
 include("./config/_equipe.php"); 
 
function ResultatAvenir(){
    include("bd.php");
    $item = array();
    $items = array();

    $join = "SELECT * FROM 
        rencontre
    JOIN resultat_match
        ON rencontre.id_rencontre = resultat_match.id_rencontre"; 

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
     return $items;
     //var_dump($items);
}

?>
