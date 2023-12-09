<?php include("../config/_header.php"); ?>
<?php include("./header.php"); ?>


<div class="container mt-4">
    <div class="row">
       
        <div class="login">
        <h1 class="display-2 text-capitalize">login</h1>

            <form action="../config/_login.php" method="post">

                <div class="input">
                    <label for="user">user</label><br>
                    <input type="text" name="user" id="" required>
                </div>

                <div class="input">
                    <label for="user">mot de passe</label><br>
                    <input type="password" name="pwd" id="" required>
                </div>
                <?php if(isset($error)){?>
                    <div class=""alert alert-danger> erreur user ou mot de passe incorrect</div></div>
                <?php } ?>

                <div class="input">
                    <a href="../"  id=""  class="btn btn-outline-danger">Retour </a>

                    <button type="submit" class="btn btn-outline-success ml-3" >Connection</button>
                </div>

            </form>
        </div>
    </div>
</div>