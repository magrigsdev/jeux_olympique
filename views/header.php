<!DOCTYPE html>
<html lang="fr"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php headerControl($_SERVER['PHP_SELF'])?>public/css/bootstrap.css">
    <link rel="stylesheet" href="<?php headerControl($_SERVER['PHP_SELF'])?>public/css/style.css">


    <script src="<?php headerControl($_SERVER['PHP_SELF'])?>public/js/bootstrap.js" defer></script>
    <script src="<?php headerControl($_SERVER['PHP_SELF'])?>public/js/style.js" defer></script>
    <title>Jeux Olympique </title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" data-bs-theme="dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="<?php
                 headerControl($_SERVER['PHP_SELF'])?>">Jeux olympique</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-capitalize">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">accueil</a>
                    </li>

                    <li class="nav-item ">
                    <a class="nav-link" href="#">Ancienne matches</a>
                    </li> 
                
                    <li class="nav-item adm"><a class="nav-link navclik" href="" >équipe</a></li>
                    <li class="nav-item adm"><a class="nav-link navclik" href="" >personnel</a></li>
                    <li class="nav-item adm"><a class="nav-link navclik" href="" >matches</a></li>
                    <li class="nav-item adm"><a class="nav-link navclik" href="">affichages</a></li>
                 
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 adm" type="search" placeholder="Search" aria-label="Search">

                    <a  class="btn btn-outline-success me-2 login" href="./views/login.php">Login</a>

                    <a  class="btn btn-outline-danger logout me-2" href="../">Logout</a>
                </form>
                </div>
            </div>
        </nav>
    </header>

