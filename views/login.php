<?php include("../config/_header.php"); ?>
<?php include("./header.php"); ?>

<div class="container">
        <div class="row">

            <div class="col-md-4 m-auto">

            <form class="mt-4"  method="POST" action="../config/_login.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">utilisateur</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" name="user">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">mot de passe</label>
                    <input type="password" class="form-control" name="pwd">
                </div>
                <?php if(isset($error)){?>
                    <div class=""alert alert-danger> erreur user ou mot de passe incorrect</div></div>
                <?php } ?>
                
                <button type="submit" class="btn btn-outline-primary">connexion</button>
                <a href="../" class="btn btn-outline-danger">retour</a>
            </form>
            </div>
            
        </div>
</div>
