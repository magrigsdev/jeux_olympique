<?php include("../config/_matches.php"); ?>


<?php $m_ligne = 0; 

?>

<div class="row mt-4 adm_contents">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="card-title">
                        <h1 class="display-3 text-uppercase"> matches<span class="text-success">.</span></h1>
                        <hr class="hr">
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                            <h3 class="h3 text-uppercase mb-3">la liste des matches (<?php echo count(MatchesAvenir()) ?>) </h3>
                            </div>

                            <div class="col-md-4">
                                <div class="btn btn-outline-info text-uppercase text-lg" data-bs-toggle="modal" data-bs-target="#ajouterequipe"> planifier un match </div>
                            </div>
                        </div>

                        
                        <table class="table  table-hover">
                            <thead>
                            <tr class="text-capitalize text-center">
                            <th scope="col">#</th>
                            <th scope="col">equipe</th>
                            <th scope="col">vs </th>
                            <th scope="col">equipe</th>
                            <th scope="col">type</th>
                            <th scope="col">date </th>
                            <th scope="col">lieu</th>
                            <th scope="col">update</th>
                            <th scope="col">annuler</th>
                        </tr>
                            </thead>

                            <tbody>
                                <?php foreach (MatchesAvenir() as $value) : $m_ligne = $m_ligne + 1 ; ?>
                                    <tr class="text-center">
                                        <td><?= $m_ligne ?> </td>
                                        <td><?= $value["id_equipe_a"]   ?></td>
                                        <td>-</td>
                                        <td><?= $value["id_equipe_b"]   ?></td>
                                        <td><?= $value["type"]   ?></td>
                                        <td><?= $value["date_de_rencontre"]   ?> </td>
                                        <td class="text-uppercase"><?= $value["lieu"]   ?></td> 

                                        <td><form method="POST" action="./viewupdate.php"><input type="text" name="Idupdate" value="<?= $value["id_rencontre"]?>" hidden/><button type="submit" class="btn btn-outline-warning" name="m_isUpdate">update</button></form>

                                        <td><form method="POST" action="../config/_matches.php?del=<?= $value["id_rencontre"]?>"><button class="btn btn-outline-danger">annuler</button> </form></td>                              
                                    </tr>
                                <?php  endforeach  ?>

                            </tbody>                                        
                        </table>

                    </div>
                </div>
            </div>
    </div>
<!-- fin update  delete    getTypeAll -->

    <div class="modal fade" tabindex="-1" id="ajouterequipe" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">

                <form action="../config/_matches.php" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title text-capitalize">planifier</h5>
                            <a class="btn-close" data-bs-dismiss="modal" aria-label="Cloqe"></a>
                        </div>
                    
                        <div class="modal-body">
                            <label for="equipe">equipe 1</label>
                            <div class="input-group mb-3">
                                <select class="form-select mt-2" aria-label="Default select example" name="equipea">
                                    <?php foreach(getEquipeAll() as $equipe) {  ?>
                                    <option value="<?php echo $equipe["id"]?>"><?php echo $equipe["nom"]?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <label for="equipe">equipe 2</label>
                            <div class="input-group mb-3">
                                <select class="form-select mt-2" aria-label="Default select example" name="equipeb">
                                    <?php foreach(getEquipeAll() as $equipe) {  ?>
                                    <option value="<?php echo $equipe["id"]?>"><?php echo $equipe["nom"]?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <label for="equipe">type de discipline</label>
                            <div class="input-group mb-3">
                                <select class="form-select mt-2" aria-label="Default select example" name="type">
                                    <?php foreach(getTypeAll() as $equipe) {  ?>
                                    <option value="<?php echo $equipe["type"]?>"><?php echo $equipe["type"]?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <label for="equipe">date</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" placeholder="nom de equipe" name="dater" required>
                            </div>

                            <label for="equipe">lieu</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="lieu" name="lieu" required>
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







    