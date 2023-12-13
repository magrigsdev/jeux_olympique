<?php include("../config/_header.php"); ?>
<?php include("./header.php"); ?>

<?php include("../config/_equipe.php"); ?>
<?php include("../config/_personnel.php"); ?>

<?php $row = 0;?>
<?php $p_ligne = 0;?>


<div class="container mb-4">

    <div class="row mt-5">
        <form method="Post" action="./dashboard.php" class="list-inline">

        <div class="input-group mb-3">

            <button type="submit" class="btn btn-outline-success" name="f-equipe">Equipe</button>

            <button type="submit" class="btn btn-outline-success" name="f-personnel">Personnel</button>

            <button type="submit" class="btn btn-outline-success" name="f-matches">Matches</button>

            <button type="submit" class="btn btn-outline-success" name="f-affichage">Affichage</button>
     
        </div>
        </form>
        
    </div>

    <?php if(isset($_POST["f-matches"])) { ?>
        <?php include("./viewmatches.php"); ?>
    <?php } ?>

    <?php if(isset($_POST["f-personnel"])) { ?>
        <?php include("./viewpersonnel.php"); ?>
    <?php } ?>

    <?php if(isset($_POST["f-equipe"])) { ?>
        <?php include("./viewequipe.php"); ?>
    <?php } ?>

    <?php if(isset($_POST["f-affichage"])) { ?>
        <?php include("./viewaffichage.php"); ?>
    <?php } ?>
   


    
    
</div>
