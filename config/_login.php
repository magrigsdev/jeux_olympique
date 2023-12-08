<?php 
if(isset($_POST["user"]) && isset($_POST["pwd"])){
    $user = $_POST["user"];
    $pwd = $_POST["pwd"];

    $user = htmlspecialchars($user);
    $pwd = htmlspecialchars($pwd);

    if(getLogin($user, $pwd)){
        echo "vous etes connecter";    
    }
    else{
         echo "connection echoué";
        $error = true;
         $page ='http://localhost/EXAMEN/views/login.php';
         header('Location:'.$page,$error);
        
        }
    
}


function getLogin( $username, $password ){
    include("./bd.php");
    $login = false;

    $sql = "SELECT * FROM admin";
    $stat = $pdo->prepare($sql);
    $stat->execute();
    $adm = $stat->fetch(PDO::FETCH_ASSOC);

    if($adm["login"] == $username && $adm["mdp"]){
        $login = true;
    }
    return $login;
}
//getLogin($user, $pwd);
?>