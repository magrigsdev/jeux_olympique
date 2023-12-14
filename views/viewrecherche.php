<?php include("../config/_header.php"); ?>
<?php include("./header.php"); ?>

<?php include("../config/_recherche.php"); ?>


<div class ="container">
<a href="./dashboard.php" class="btn btn-outline-danger m-5">retour</a>
    <div class="row mt-4 adm_contents">
        
        <div class="col-md-12">
            <?php if(isset($_POST["f-equipe_avec"])) { ?>
                <div>
                    <h1>equipe avec ...</h1>
                </div>
            <?php } ?>

            <?php if(isset($_POST["f-equipe_sans"])) { ?>
                <div>
                    <h1>equipe_sans ...</h1>
                </div>
            <?php } ?>

            <?php if(isset($_POST["f-recherche_text"])) { ?>

                <?php $ligne_r = 0; ?>
                <div class="row mt-4 adm_contents">
                        <div class="col-md-12">
                            <div class="card p-4">
                                <div class="card-title">
                                    <h1 class="display-3 text-uppercase"> recherche<span class="text-info">.</span></h1>
                                    <hr class="hr">
                                </div>
                                
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                        <h3 class="h3 text-uppercase mb-3">les personnes trouvées (<?=count(getRechercheTrie($_POST["sexe"], $_POST["role"], $_POST["pays"]));  ?>) </h3>
                                        </div>

                                    </div>

                                    <table class="table  table-hover">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th scope="col">#</th>
                                                <th scope="col">nom</th>
                                                <th scope="col">prenom</th>
                                                <th scope="col">sexe</th>
                                                <th scope="col">role</th>
                                                <th scope="col">pays</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach(getRechercheTrie($_POST["sexe"], $_POST["role"], $_POST["pays"]) as $value) : $ligne_r = $ligne_r + 1 ; ?> 
                                                <tr>
                                                    <th><?= $ligne_r ?>  </th>
                                                    <td><?= $value["prenom"] ?></td>
                                                    <td><?= $value["nom"] ?>  </td>
                                                    <td><?= $value["sexe"] ?>  </td>
                                                    <td><?= $value["role"] ?>  </td>
                                                    <td><?= getRecherchePays($value["id_equipe"]) ?>  </td>
    
                                                </tr>
                                            <?php  endforeach  ?>

                                        </tbody>                                        
                                    </table>

                                </div>
                            </div>
                        </div>
                </div>


            <?php } ?>

            
        </div>
    </div>
</div>