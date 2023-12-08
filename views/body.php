<?php include("./config/_matches.php"); ?> 

<div class="container-fluid">
    <div class="row index-banner">
        <div class="display-1">
            <h1 class="text-white text-capitalize 
            display-1 mt-5 text-align-center">bienvenue aux jeux olympique</h1>
            
        </div>
    </div>

    <div class="row index-s1 ">
        <div class="col-md-12">
            <h1 class="text-uppercase fw-light ">  les prochaines rencontres  </h1>
            <hr class="hr"/>
            <table class="table table-striped table-hover">
                    <thead>
                        <tr class="text-capitalize">
                            <th scope="col">#</th>
                            <th scope="col">equipe</th>
                            <th scope="col">score </th>
                            <th scope="col">score </th>
                            <th scope="col">equipe</th>
                            <th scope="col">date </th>
                            <th scope="col">lieu</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach (ResultatAvenir() as $value) : ?>
                            <tr>
                                <th> <?= $value["id_rencontre"]   ?>  </th>
                                <td><?= $value["id_equipe_a"]   ?></td>
                                <td><?= $value["score_equipe_a"]   ?></td>
                                <td><?= $value["score_equipe_b"]   ?></td>
                                <td><?= $value["id_equipe_b"]   ?></td>
                                <td><?= $value["date_de_rencontre"]   ?> </td>
                                <td><?= $value["lieu"]   ?></td>                               
                            </tr>
                        <?php  endforeach  ?>

                    </tbody>
            </table>

        </div>
    </div>
    </div>
</div>

</body>
</html>