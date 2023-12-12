
<div class="row mt-4 ">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-title">
                    <h1 class="display-3 text-uppercase"> equipe<span class="text-info">.</span></h1>
                    <hr class="hr">
                </div>
                
                <?php if(isset($_POST["isUpdate"])) { ?>
                <div class="card col-md-4">
                <form method="POST" action="../config/_equipe.php">
                    <div class="modal-body p-4">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="<?php  echo getEquipe($_POST["Idupdate"]) ?>" name="v_update" required>

                                <input type="text" name="Id_update" value="<?= $_POST["Idupdate"]?>" hidden/>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit"class="btn btn-outline-warning right" name="update">update</button>
                            </div>
                    </div>
                </form>
                </div>
            
                <?php   } ?>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                        <h3 class="h3 text-uppercase mb-3">la liste des equipes </h3>
                        </div>

                        <div class="col-md-2">
                            <div class="btn btn-outline-info text-uppercase text-lg" data-bs-toggle="modal" data-bs-target="#ajouterequipe"> ajouter </div>
                        </div>
                    </div>

                    
                    <table class="table  table-hover">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">equipe</th>
                                <th scope="col">update</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach (getEquipeAll() as $value) : ?>
                                <tr>
                                    <th><?= $value["id"]?>  </th>
                                    <td><?= $value["nom"]   ?></td> 

                                    <td><form method="POST" action="./dashboard.php"><input type="text" name="Idupdate" value="<?= $value["id"]?>" hidden/><button type="submit" class="btn btn-outline-warning" name="isUpdate">update</button></form>

                                    <td><form method="POST" action="../config/_equipe.php?obj=<?= $value["id"]?>"><button class="btn btn-outline-danger">delete</button> </form></td>                              
                                </tr>
                            <?php  endforeach  ?>

                        </tbody>                                        
                    </table>

                </div>
            </div>
        </div>
    </div>

<!-- fin update  delete-->
    <div class="modal fade" tabindex="-1" id="updateequipe" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <form action="../config/_equipe.php" method="post"></form>
                <div class="modal-header">
                    <h5 class="modal-title text-capitalize">update equipe</h5>
                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Cloqe"></button>
                </div>

                <div class="modal-body">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="nom de equipe" name="update">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit"class="btn btn-outline-warning" name="update">update</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="ajouterequipe" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <form action="../config/_equipe.php" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title text-capitalize">add equipe</h5>
                        <a class="btn-close" data-bs-dismiss="modal" aria-label="Cloqe"></a>
                    </div>
                    
                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="nom de equipe" name="equipe" required>
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

    





    