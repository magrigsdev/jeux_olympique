<?php include("../config/_header.php"); ?>
<?php include("./header.php"); ?>

<?php include("../config/_recherche.php"); ?>


<div class ="container">

    <div class="row mt-4 adm_contents">
        
        <div class="col-md-12">
        <a href="./dashboard.php" class="btn btn-outline-danger m-5">retour</a>
            <?php if(isset($_POST["f-equipe_avec"])) { ?>
                <?php RechercheMatchesAvecAvenir(); ?>

                <div>
                    
                    <?php $ligne2 = 0; ?>
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
                                        <h3 class="h3 text-uppercase mb-3">les equipe avec les rencontre avenir (<?=count(RechercheMatchesAvecAvenir());  ?>) </h3>
                                        </div>

                                    </div>

                                    <table class="table  table-hover">
                                        <thead>
                                            <tr class="text-uppercase">
                                                <th scope="col">#</th>
                                                <th scope="col">nom</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach(RechercheMatchesAvecAvenir() as $value) : $ligne2 = $ligne2 + 1 ; ?> 
                                                <tr>
                                                    <th><?= $ligne2 ?>  </th>
                                                    <td><?= $value["id_equipe_b"] ?></td>
                                                    
                                                    
    
                                                </tr>
                                            <?php  endforeach  ?>

                                        </tbody>                                        
                                    </table>

                                </div>
                            </div>
                        </div>
                </div>
                </div>
            <?php } ?>


            <?php if(isset($_POST["f-equipe_sans"])) { ?>
                <div>
   
                    <?php $r_avenir = 0; ?>
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
                                            <h3 class="h3 text-uppercase mb-3">equipe sans matches avenir (<?=count(RechercheMatchesSansAvenir());  ?>) </h3>
                                            </div>

                                        </div>

                                        <table class="table  table-hover">
                                            <thead>
                                                <tr class="text-uppercase">
                                                    <th scope="col">#</th>
                                                    <th scope="col">nom equipe</th>

                                                </tr>
                                            </thead>
                                    
                                            <tbody>
                                                <?php foreach(RechercheMatchesSansAvenir() as $value) : $r_avenir ++ ; ?> 
                                                    <tr>
                                                        <th><?= $r_avenir ?>  </th>
                                                        <td><?= $value["id_equipe_b"] ?>  </td>
        
                                                    </tr>
                                                <?php  endforeach  ?>

                                            </tbody>                                        
                                        </table>

                                    </div>
                                </div>
                            </div>
                    </div>
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