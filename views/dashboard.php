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

                <button type="submit" class="btn btn-outline-success" name="f-equipe">Equipes</button>

                <button type="submit" class="btn btn-outline-success" name="f-personnel">Personnel</button>

                <button type="submit" class="btn btn-outline-success" name="f-matches">Matches</button>

                <button type="submit" class="btn btn-outline-success" name="f-affichage">Affichage</button>
            </div>
        </form>
    </div>

<!-- ========================================================  recherche -->
    <div class="row mt-5">
        <form method="Post" action="./viewrecherche.php" class="list-inline">
            <div class="input-group mb-3">

                <button type="submit" class="btn btn-outline-success" name="f-equipe_avec">Equipe avec matches</button>

                <button type="submit" class="btn btn-outline-success" name="f-equipe_sans">Equipe sans matches </button>

            </div>
        </form>

        <div class="col-md-8">
            <form method="Post" action="./viewrecherche.php" class="list-inline mt-2">


                <div class="input-group mb-3">

                <input type="text" class="form-control"  aria-describedby="emailHelp" name="sexe" placeholder="sexe">

                <input type="text" class="form-control"  aria-describedby="emailHelp" name="role" placeholder="role">

                <select class="form-select " aria-label="Default select example" name="pays">
                        <?php foreach(getEquipeAll() as $equipe) {  ?>
                        
                        <option value="<?php echo $equipe["id"]?>"><?php echo $equipe["nom"]?></option>
                        <?php } ?>
                </select>


                <button type="submit" class="btn btn-outline-success" name="f-recherche_text">Recherche</button>
                </div>
            </form>
    </div>

       
        
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

    <?php if(isset($_POST["f-recherche"])) { ?>
        <?php include("./viewrecherche.php"); ?>
    <?php } ?>
      
</div>
