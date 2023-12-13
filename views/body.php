
<?php include("./config/_matches.php"); ?>
<?php $ligne = 0;
$ligne1 = 0; ?>

<div class="container-fluid">
    <div class="row index-banner">
        <div class="display-1">
            <h1 class="text-white text-capitalize 
            display-1 mt-5 text-center">bienvenue aux jeux olympique</h1>
            
        </div>
    </div>

    <div class="row index-s1 ">
        <div class="col-md-12">
            <h1 class="text-uppercase fw-light mt-4 text-center">  les prochaines rencontres  </h1>
            <hr class="hr"/>
            <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-capitalize text-center">
                            <th scope="col">#</th>
                            <th scope="col">equipe</th>
                            <th scope="col">vs </th>
                            <th scope="col">equipe</th>
                            <th scope="col">type </th>
                            <th scope="col">date </th>
                            <th scope="col">lieu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach (MatchesAvenir() as $value) : $ligne++ ?>
                            <tr class="text-center">
                                <th> <?= $ligne   ?>  </th>
                                <td><?= $value["id_equipe_a"]   ?></td>
                                <td>-</td>
                                <td><?= $value["id_equipe_b"]   ?></td>
                                <td><?= $value["type"]   ?></td>
                                <td><?= $value["date_de_rencontre"]   ?> </td>
                                <td class="text-uppercase"><?= $value["lieu"]   ?></td>                               
                            </tr>
                        <?php  endforeach  ?>

                    </tbody>
            </table>
        

            <form action="." method="Post" class="mt-5 text-center">
                <button type="submit" class="btn btn-outline-danger" name="anciene">Ancienne Matches</button>
            </form>

            <?php if(isset($_POST['anciene'])) { ?>
            <h2 class="text-uppercase fw-light mb-2 mt-2 text-center">  les anciennes matches  </h2>
            <hr class="hr"/>
            

                  
                    <?php foreach (MatchesPasse() as $value) : $ligne1++ ?>
                        <table class="table table table-hover mb-5">
                            <tbody>
                                <tr class="text-center">
                                    <td colspan="5"><?= $value["date_de_rencontre"] ?> </td>
                                </tr>

                                <tr class="text-center">
                                    <td><?= $value["id_equipe_a"]   ?></td>
                                    <td><strong><?= $value["score_equipe_a"]   ?></strong> </td>
                                    <td class="text-center"><strong>-</strong></td>
                                    <td> <strong><?= $value["score_equipe_b"]?></strong> </td>
                                    <td><?= $value["id_equipe_b"]   ?></td>
                                </tr>

                                <tr class="text-center">
                                    <td colspan="5"><?= $value["lieu"]   ?></td>
                                </tr>
                                <tr class="table text-center">
                                    <td colspan="5"><?= $value["type"]   ?></td>
                                </tr>                
                            </tbody>
                        </table>
                        <?php  endforeach  ?>
                        

                    
            

    
    <?php } ?>

        </div>
    </div>


</div>



</body>
</html>