<?php 

function getPersonnelAll(){
    
    include("bd.php");
    $item = array();
    $items = array();

    $sql = "SELECT * FROM personnel JOIN equipe
    ON personnel.id_equipe = equipe.id_equipe";

    $stat = $pdo->prepare($sql);
    $stat->execute();

    $matches = $stat->fetchAll(PDO::FETCH_ASSOC);

    foreach ($matches as $value) {
        # code...
        $item["id"] = $value["id_personnel"];
        $item["nom"] = $value["nom"];
        $item["prenom"] = $value["prenom"];
        $item["role"] = $value["role"];
        $item["sexe"] = $value["sexe"];
        $item["nom_equipe"] = $value["nom_equipe"];


        $items [] = $item;   
    }

    return $items;
}

function getPersonnel($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM personnel WHERE id_personnel =".$id;

    $stat = $pdo->prepare($sql);
    $stat->execute();
    $row = $stat->fetch();
    return $row["nom"];
}
function getPersonnelPrenom($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM personnel WHERE id_personnel =".$id;

    $stat = $pdo->prepare($sql);
    $stat->execute();
    $row = $stat->fetch();
    return $row["prenom"];
}
function getPersonnelSexe($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM personnel WHERE id_personnel =".$id;

    $stat = $pdo->prepare($sql);
    $stat->execute();
    $row = $stat->fetch();
    return $row["sexe"];
}
function getPersonnelRole($id){
    $item = array();
    if(gettype($id)== "string"){$id = intval($id);};
    
    include("bd.php");
    $sql = "SELECT * FROM personnel WHERE id_personnel =".$id;

    $stat = $pdo->prepare($sql);
    $stat->execute();
    $row = $stat->fetch();
    return $row["role"];
}


//la fonction retourne true si insertion effectuer
function AddPersonnel($nom, $prenom, $sexe,$role,$id_equipe){
    include("bd.php");
    $isNameExist = false;

    //CHECKING
    foreach ( getPersonnelAll() as $value) {
        # code...
        if($value["nom"] == $nom){
            $isNameExist = true;          
        }
        elseif($value["prenom"] == $prenom){
            $isNameExist = true;          
        }
    }
    if($isNameExist  != true){
        $sql ="INSERT INTO personnel VALUES(NULL, :prenom, :nom, :sexe, :role,:id_equipe)";
    
        $st = $pdo->prepare($sql);
        $st->execute([
            "prenom"=>$prenom,
            "nom"=>$nom,
            "sexe"=>$sexe,
            "role"=>$role,
            "id_equipe"=>$id_equipe
        ]);
    }

    return  $isNameExist;

}

function UpdatePersonnel($id, $nom, $prenom, $sexe, $role, $nom_equipe){
    include("bd.php");
    if(gettype($id)== "string"){$id = intval($id);};

    $sql = "UPDATE personnel
    SET  prenom =:prenom, nom =:nom, sexe =:sexe, role =:role, id_equipe =:id_equipe,  
    WHERE id_personnel =:id";

    $sql = "UPDATE `personnel` SET `id_personnel`='$id',`prenom`='$prenom',`nom`='$nom',`sexe`='$sexe',`role`=' $role',`id_equipe`='$nom_equipe' WHERE `id_personnel`='$id'";

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

function DelPersonnel($id){
    include("bd.php");

    $sql = "DELETE  FROM personnel 
    WHERE id_personnel= :id";

    $stat = $pdo->prepare($sql);
    $stat->execute(["id"=> $id]);
}

?>

<?php 
//add equipe
if(isset($_POST["add"]))
{
    if(AddPersonnel($_POST["nom"], $_POST["prenom"],$_POST["sexe"],$_POST["role"],$_POST["equipe"]) != true){

        // var_dump(AddPersonnel($_POST["equipe"])) ;
        $page = "../views/dashboard.php";
        header("location:".$page);
    }
    else{
        $page = "../views/viewError.php?personnelNom=".$_POST["nom"]."&personnelPrenom=".$_POST["prenom"];
        header("location:".$page);
    }
}

//update
if(isset($_POST["update"]))
{
    UpdatePersonnel($_POST["id"],
    $_POST["nom"],
    $_POST["prenom"],
    $_POST["sexe"],
    $_POST["role"],
    $_POST["equipe"]);
    $page = "../views/dashboard.php";
    header("location:".$page);
}

if(isset($_GET["del"])){
    DelPersonnel($_GET["del"]);
    $page = "../views/dashboard.php";
    header("location:".$page);
}



?>

