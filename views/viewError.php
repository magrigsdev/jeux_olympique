<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    


<div class="col-md-4 m-5">
    <?php  if(isset($_GET["equipe"])) {?>
    <p class="alert alert-danger">l'equipe : <?php echo $_GET["equipe"]   ?> existe déjà
        
    </p>
    <p>
        <a class="btn btn-danger" href="./dashboard.php"> Retour</a>
    </p>
    <?php } ?>

    <?php  if(isset($_GET["personnelNom"])) {?>
    <p class="alert alert-danger">cette personne existe deja  : <?php echo $_GET["personnelNom"]   ?> <?php  echo $_GET["personnelPrenom"]   ?> 
        
    </p>
    <p>
        <a class="btn btn-danger" href="./dashboard.php"> Retour</a>
    </p>
    <?php } ?>
</div>
</body>
</html>