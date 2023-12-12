

<div class="row mt-4 adm_contents">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="card-title">
                        <h1 class="display-3 text-uppercase"> personnel<span class="text-danger">.</span></h1>
                        <hr class="hr">
                    </div>
        <!-- =======================================================================  p_Idupdate           -->
                    <?php if(isset($_POST["p_isUpdate"])) { ?>
                        <div class="card col-md-4">
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
                                            </div>
                                    </div>
                                </form>
                        </div>
                
                    <?php   } ?>
                    <!-- ============================================================ -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                            <h3 class="h3 text-uppercase mb-3">la liste du personnel (<?php echo count(getPersonnelAll()) ?>) </h3>
                            </div>

                            <div class="col-md-2">
                                <div class="btn btn-outline-info text-uppercase text-lg" data-bs-toggle="modal" data-bs-target="#ajouterequipe"> ajouter </div>
                            </div>
                        </div>

                        
                        <table class="table  table-hover">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">sexe</th>
                                    <th scope="col">role</th>
                                    <th scope="col">nom de l'equipe</th>
                                    <th scope="col">update</th>
                                    <th scope="col">delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach (getPersonnelAll() as $value) : $p_ligne = $p_ligne + 1 ; ?>
                                    <tr>
                                        <th><?= $p_ligne ?>  </th>
                                        <td><?= $value["prenom"]   ?></td> 
                                        <td><?= $value["nom"]   ?></td> 
                                        <td><?= $value["sexe"]   ?></td> 
                                        <td><?= $value["role"]   ?></td> 
                                        <td><?= $value["nom_equipe"]   ?></td> 

                                        <td><form method="POST" action="./dashboard.php"><input type="text" name="p_Idupdate" value="<?= $value["id"]?>" hidden/><button type="submit" class="btn btn-outline-warning" name="p_isUpdate">update</button></form>

                                        <td><form method="POST" action="../config/_personnel.php?del=<?= $value["id"]?>"><button class="btn btn-outline-danger">delete</button> </form></td>                              
                                    </tr>
                                <?php  endforeach  ?>

                            </tbody>                                        
                        </table>

                    </div>
                </div>
            </div>
    </div>
<!-- fin update  delete-->

    <div class="modal fade" tabindex="-1" id="ajouterequipe" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <form action="../config/_personnel.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title text-capitalize">ajouter un personnel</h5>
                            <a class="btn-close" data-bs-dismiss="modal" aria-label="Cloqe"></a>
                        </div>
                    
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="prenom" name="prenom" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="nom " name="nom" required>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="homme" name="sexe" required>
                            </div>

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="joueur" name="role" required>
                            </div>

                            <div class="input-group mb-3">
                            <select class="form-select mt-2" aria-label="Default select example" name="equipe">
                                <?php foreach(getEquipeAll() as $equipe) {  ?>
                                <option value="<?php echo $equipe["id"]?>"><?php echo $equipe["nom"]?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit"class="btn btn-outline-primary" name="add">Ajouter</button>
                        </div>
                <form>
            </div>

            </form>
        </div>
    </div>







    