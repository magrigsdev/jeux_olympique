
<?php include("./config/_matches.php"); ?>
<?php $ligne = 0;
$ligne1 = 0; ?>

<div class="container-fluid">
    <div class="row index-banner">
        <div class="display-1">
            <h1 class="text-white text-capitalize 
            display-1 mt-5 text-align-center">bienvenue aux jeux olympique</h1>
            
        </div>
    </div>

    <div class="row index-s1 ">
        <div class="col-md-12">
            <h1 class="text-uppercase fw-light mt-4">  les prochaines rencontres  </h1>
            <hr class="hr"/>
            <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-capitalize">
                            <th scope="col">#</th>
                            <th scope="col">equipe</th>
                            <th scope="col">vs </th>
                            <th scope="col">equipe</th>
                            <th scope="col">date </th>
                            <th scope="col">lieu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach (MatchesAvenir() as $value) : $ligne++ ?>
                            <tr>
                                <th> <?= $ligne   ?>  </th>
                                <td><?= $value["id_equipe_a"]   ?></td>
                                <td>-</td>
                                <td><?= $value["id_equipe_b"]   ?></td>
                                <td><?= $value["date_de_rencontre"]   ?> </td>
                                <td class="text-uppercase"><?= $value["lieu"]   ?></td>                               
                            </tr>
                        <?php  endforeach  ?>

                    </tbody>
            </table>
            <form action="." method="Post">
                <button type="submit" class="btn btn-outline-danger" name="anciene">Ancienne Matches</button>
            </form>
            <?php if(isset($_POST['anciene'])) { ?>
            <h1 class="text-uppercase fw-light">  les anciennes matches  </h1>
            <hr class="hr"/>
            <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-capitalize">
                            <th scope="col">#</th>
                            <th scope="col">equipe</th>
                            <th scope="col">vs </th>
                            <th scope="col">equipe</th>
                            <th scope="col">date </th>
                            <th scope="col">lieu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach (MatchesPasse() as $value) : $ligne1++ ?>
                            <tr>
                                <th> <?= $ligne1   ?>  </th>
                                <td><?= $value["id_equipe_a"]   ?></td>
                                <td>-</td>
                                <td><?= $value["id_equipe_b"]   ?></td>
                                <td><?= $value["date_de_rencontre"]   ?> </td>
                                <td class="text-uppercase"><?= $value["lieu"]   ?></td>                               
                            </tr>
                        <?php  endforeach  ?>

                    </tbody>
            </table>

    
    <?php } ?>

        </div>
    </div>


</div>



</body>
</html>