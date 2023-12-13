
<?php include("../config/_header.php"); ?>
<?php include("./header.php"); ?>

<?php include("../config/_equipe.php"); ?>
<?php include("../config/_personnel.php"); ?>

<?php if(isset($_POST["isUpdate"])) { ?>

        <div class="card col-md-4 m-5">
                    <form method="POST" action="../config/_equipe.php">
                        <div class="modal-body p-4">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="<?php  echo getEquipe($_POST["Idupdate"]) ?>" name="v_update" required>

                                    <input type="text" name="Id_update" value="<?= $_POST["Idupdate"]?>" hidden/>
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="submit"class="btn btn-outline-warning right" name="update">update</button>

                                    <a href="./dashboard.php" class="btn btn-outline-danger m-2">retour</a>
                                </div>
                        </div>
                    </form>
        </div>
                
<?php   } ?>


<?php if(isset($_POST["p_isUpdate"])) { ?>
                        <div class="card col-md-4 m-5">
                            <form method="POST" action="../config/_personnel.php">
                                <div class="modal-body p-4">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" 
                                        value="<?= $_POST["p_Idupdate"] ?>" name="id" hidden>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="<?= getPersonnelPrenom($_POST["p_Idupdate"]) ?>" name="prenom" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="<?= getPersonnel($_POST["p_Idupdate"]) ?>" name="nom" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="<?= getPersonnelSexe($_POST["p_Idupdate"]) ?>" name="sexe" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="<?= getPersonnelRole($_POST["p_Idupdate"]) ?>" name="role" required>
                                    </div>

                                    <div class="input-group mb-3">
                                    <select class="form-select mt-2" aria-label="Default select example" name="equipe">
                                        <?php foreach(getEquipeAll() as $equipe) {  ?>
                                        <option value="<?php echo $equipe["id"]?>"><?php echo $equipe["nom"]?></option>
                                        <?php } ?>
                                    </select>
                                    </div>



                                            <div class="modal-footer">
                                                <button type="submit"class="btn btn-outline-warning right" name="update">update</button>

                                                <a href="./dashboard.php" class="btn btn-outline-danger m-2">retour</a>
                                            </div>
                                    </div>
                                </form>
                        </div>
                
                    <?php   } ?>