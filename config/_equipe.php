
<?php 
function getTypeAll(){
    
    include("bd.php");
    $item = array();
    $items = array();

    $sql = "SELECT * FROM type_discipline limit 50";
    $stat = $pdo->prepare($sql);
    $stat->execute();

    $matches = $stat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($matches as $value) {
        # code...
        $item["type"] = $value["type"];
        $items [] = $item;   
    }

    return $items;
}
function getEquipeAll(){
    
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
        if($value["nom"] == $nom){
            $isNameExist = true;
            
        }
    }
    if($isNameExist  != true){
        // $sql = "INSERT INTO `equipe`(`id_equipe`, `nom_equipe`) VALUES ('NULL','$nom')";
        $sql = "INSERT INTO equipe VALUES(NULL,:nom)";
        $stat = $pdo->prepare($sql);
        // $stat->execute();
        $stat->execute(["nom"=> $nom]);
    }

    return  $isNameExist;

}

function UpdateEquipe($id, $nom){
    include("bd.php");
    if(gettype($id)== "string"){$id = intval($id);};

    $sql = "UPDATE equipe SET nom_equipe = :nom WHERE id_equipe= :id";
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

<?php 
//add equipe
if(isset($_POST["add"]))
{
    if(AddEquipe(strtoupper($_POST["equipe"])) != true){

        var_dump(AddEquipe($_POST["equipe"])) ;
        $page = "../views/dashboard.php";
        header("location:".$page);
    }
    else{
         include("../config/_header.php");
         $erreur = "<div class='alert alert-danger'> l\'équipe existe déjà :".strtoupper($_POST["equipe"])." </div>";
         $retour = "<br><a class='btn btn-outline-danger' href='../views/viewequipe.php'> Retour</a>";
        echo $erreur;
    }
}

//update
if(isset($_POST["update"]))
{
    UpdateEquipe($_POST["Id_update"], strtoupper($_POST["v_update"]));
    $page = "../views/dashboard.php";
    header("location:".$page);
}

if(isset($_GET["del"])){
    DelEquipe($_GET["del"]);
    $page = "../views/dashboard.php";
    header("location:".$page);
}



?>

