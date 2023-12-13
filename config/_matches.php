

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

// =================================================================
function getMatch ($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM rencontre WHERE id_rencontre =".$id;

    $stat = $pdo->prepare($sql);
    $stat->execute();
    $row = $stat->fetch();
    return $row;
}

function getMatchLieu($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM rencontre WHERE id_rencontre =".$id;

    $stat = $pdo->prepare($sql);
    $stat->execute();
    $row = $stat->fetch();

    return $row["lieu"];
}

function AddMatch( $lieu, $type, $equipeA, $equipeB,$date_rencontre){
    include("bd.php");
    $isErreur = false;
    

    //verifier si les deux equipe sont les memes
    if($equipeA == $equipeB){
        $isErreur = true;
    }

    if($isErreur  != true){
        $sql ="INSERT INTO rencontre VALUES(NULL, :lieu, :type, :equipea, :equipeb,:dateR)";
    
        $st = $pdo->prepare($sql);
        $st->execute([
            "lieu"=>$lieu,
            "type"=>$type,
            "equipea"=>$equipeA,
            "equipeb"=>$equipeB,
            "dateR"=>$date_rencontre
        ]);
    }

    return  $isNameExist;

}

function UpdateMatch($id, $lieu,$date_rencontre){
    include("bd.php");
    if(gettype($id)== "string"){$id = intval($id);};

    // $sql = "UPDATE rencontre
    // SET  lieu =:lieu, type =:type, id_equipe_a =:equipeA, id_equipe_b =:equipeB, date_rencontre =:date_rencontre,  
    // WHERE id_rencontre =:id";

    $sql = "UPDATE `rencontre` SET `id_rencontre`='$id',`lieu`='$lieu',`date_rencontre`='$date_rencontre' WHERE `id_rencontre`='$id'";

    $stat= $pdo->prepare($sql);
    $stat->execute();

    // $stat->execute([
    //     "id"=>$id,   
    //     "nom"=> $nom,
    //     "prenom"=> $prenom,
    //     "sexe"=> $sexe,
    //     "role"=> $role,
    //     "id_equipe"=>$nom_equipe
    // ]);

}

function DelMatch($id){
    include("bd.php");

    $sql = "DELETE  FROM rencontre 
    WHERE id_rencontre= :id";

    $stat = $pdo->prepare($sql);
    $stat->execute(["id"=> $id]);
}
?>
<!-- ================================================ -->
<?php  
 
//add match
// $lieu, $type, $equipeA, $equipeB,$date_rencontre
if(isset($_POST["add"]))
{

    if(AddMatch($_POST["lieu"], $_POST["type"],$_POST["equipea"],$_POST["equipeb"],$_POST["dater"]) != true){

        // var_dump(AddPersonnel($_POST["equipe"])) ;
        $page = "../views/dashboard.php";
        header("location:".$page);
    }
    else{
         include("../config/_header.php");
         $erreur = "<div class='alert alert-danger'> donnée  existe déjà :".strtoupper($_POST["equipe"])." </div>";
         $retour = "<br><a class='btn btn-outline-danger' href='../views/viewequipe.php'> Retour</a>";
        echo $erreur.$retour;
    }
}

//update
if(isset($_POST["update"]))
{
    UpdateMatch($_POST["id"],
    $_POST["lieu"],
    $_POST["dater"]);
    $page = "../views/dashboard.php";
    header("location:".$page);
}

if(isset($_GET["del"])){
    DelMatch($_GET["del"]);
    $page = "../views/dashboard.php";
    header("location:".$page);
}


?>
