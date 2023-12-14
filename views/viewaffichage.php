<?php include("../config/_affichage.php"); ?>

<div class="row mt-4 adm_contents">
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="card-title">
                        <h1 class="display-3 text-uppercase"> affichage<span class="text-info">.</span></h1>
                        <hr class="hr">
                    </div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-10">
                            <h3 class="h3 text-uppercase mb-3"> la liste des équipes participantes avec leurs détails </h3>
                            </div>

                        </div>

                        
                        <table class="table  table-hover">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">equipe</th>
                                    <th scope="col">nom</th>
                                    <th scope="col">prenom</th>
                                    <th scope="col">sexe</th>
                                    <th scope="col">role</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $aff=0; foreach (getEquipeParticipant() as $value) :  $aff++; ?>
                                    <tr>
                                        <td><?= $aff;  ?></td> 
                                        <td><?= $value["nom_equipe"]   ?></td> 
                                        <td><?= $value["prenom"]   ?></td> 
                                        <td><?= $value["nom"]   ?></td>
                                        <td><?= $value["sexe"]   ?></td>
                                        <td><?= $value["role"]   ?></td>
                          
                                    </tr>
                                <?php  endforeach  ?>
                            </tbody>                                        
                        </table>

                        <div class="row">
                            <div class="col-md-10">
                                    <h3 class="h3 text-uppercase mb-3">la liste des personnes avec leurs equipes</h3>
                            </div>
                        </div>

                        <table class="table  table-hover">
                            <thead>
                                <tr class="text-uppercase">
                                    <th scope="col">#</th>
                                    <th scope="col">equipe</th>
                                    <th scope="col">nom</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                <?php $affa=0; foreach (getEquipeParticipant() as $value) :  $affa++; ?>
                                    <tr>
                                        <td><?= $affa;  ?></td> 
                                        <td><?= $value["nom_equipe"]   ?></td> 
                                        
                                        <td><?= $value["nom"]   ?></td>
                                        
                          
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







    