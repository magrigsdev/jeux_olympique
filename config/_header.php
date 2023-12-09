<?php 

//la function qui controle les navigations
function headerControl($url){
    $index = "./";
    $another = "../";

    $urlIndex = "/EXAMEN/index.php";

    //comparaison
    if($url == $urlIndex){
        echo $index;
    }
    else{
        echo $another;
    }

}

function CancelIndexDashboard($url){
    $urldash = "/EXAMEN/views/dashboard.php";

    //comparaison
    if($url == $urldash){
        echo true;
    }
    else{
        echo false;
    }
}
//   echo $_SERVER['PHP_SELF'];
?>