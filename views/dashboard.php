<?php include("../config/_header.php"); ?>
<?php include("./header.php"); ?>

<?php include("../config/_equipe.php"); ?>

<div class="container mb-4">
    <div class="row mt-4 adm_contents">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-title">
                    <h1 class="display-3 text-uppercase"> equipe<span class="text-info">.</span></h1>
                    <hr class="hr">
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                        <h3 class="h3 text-uppercase mb-3">la liste des equipes (<span class="small text-info "> <?php  echo count(getEquipeAll()) ?> </span> )</h3>
                        </div>

                        <div class="col-md-2">
                            <div class="btn btn-outline-info text-capitalize lg"> ajouter </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card ajouter p-4">
                                <form method="POST" action="../config/_equipe.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="nom de equipe">
                                                <span class="input-group-text"><button type="submit" class="btn btn-info text-uppercase">ajouter</button></span>
                                            </div>
                                        </div>
                                    </div>   
                                </form>
                            </div>
                        </div>
                        <!-- update -->
                        <div class="col-md-12 mt-4">
                            <div class="card ajouter p-4">
                                <form method="POST" action="../config/_equipe.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="nom de equipe">
                                                <span class="input-group-text"><button type="submit" class="btn btn-primary text-uppercase">update</button></span>
                                            </div>
                                        </div>
                                    </div>   
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <table class="table  table-hover">
                        <thead>
                            <tr class="text-uppercase">
                                <th scope="col">#</th>
                                <th scope="col">equipe</th>
                                <th scope="col">modifier</th>
                                <th scope="col">supprimer</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach (getEquipeAll() as $value) : ?>
                                <tr>
                                    <th><?= $value["id"]   ?>  </th>
                                    <td><?= $value["nom"]   ?></td> 
                                    <td> <button class="btn btn-outline-info">modifier</button> </td>
                                    <td> <button class="btn btn-outline-danger">supprimer</button></td>                              
                                </tr>
                            <?php  endforeach  ?>

                        </tbody>                                        
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 adm_contents">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-title">
                    <h1 class="display-3 text-uppercase">personnel</h1>
                    <hr class="hr">
                </div>
                <div class="card-body">
                    <p class="small">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolores placeat aliquid accusamus, consequatur quaerat repellat dolor aut, itaque nostrum explicabo deleniti sint natus laudantium impedit voluptates incidunt atque officiis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 adm_contents">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-title">
                    <h1 class="display-3 text-uppercase">matches</h1>
                    <hr class="hr">
                </div>
                <div class="card-body">
                    <p class="small">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolores placeat aliquid accusamus, consequatur quaerat repellat dolor aut, itaque nostrum explicabo deleniti sint natus laudantium impedit voluptates incidunt atque officiis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4 adm_contents">
        <div class="col-md-12">
            <div class="card p-4">
                <div class="card-title">
                    <h1 class="display-3 text-uppercase">affichages</h1>
                    <hr class="hr">
                </div>
                <div class="card-body">
                    <p class="small">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolores placeat aliquid accusamus, consequatur quaerat repellat dolor aut, itaque nostrum explicabo deleniti sint natus laudantium impedit voluptates incidunt atque officiis.
                    </p>
                </div>
            </div>

        </div>
    </div>
    
</div>
<?php ?>