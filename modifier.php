<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="index/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="index/css/style.css">
</head>
<style>
.menu{
    background-color:white;
}
</style>
<body>

<div class="menu">
<div class="container-fluid">
            <div class="row col-sm-6">
        <nav class="col-sm-2 md-3">          
       <h3> Paramètres : </h3>
          <ul class="nav nav-pills nav-stacked">
            <li class="active"> <a href="#"> <span class="glyphicon glyphicon-home"></span> Générale </a> </li>
            <li> <a href="#"> <span class="glyphicon glyphicon-book"></span> Securité </a> </li>
            <li> <a href="#"> <span class="glyphicon glyphicon-facetime-video"></span> Suppression du Compte </a> </li>
          </ul>
        </nav>
            </div>
            </div>
</div>
            
    <div class="main">
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
        
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="">
                        <h2 class="form-title">Modifier votre compte</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nom" id="nom" placeholder="Votre Nom"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="prenom" id="prenom" placeholder="Votre Prenom"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Votre Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Votre mot De Passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Confirmer Votre mot De Passe"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="cin" id="cin" placeholder="Cin"/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="tel" id="telephone" placeholder="Telephone"/>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Enregistrer votre changement"/>
                        </div>
                        
                    </form>
                    <p class="loginhere">
                        Retournez au menu ? <a href="#" class="loginhere-link">  Cliquer ici</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="index/vendor/jquery/jquery.min.js"></script>
    <script src="index/js/main.js"></script>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require_once('conducteur.php');
    $cond=new conducteur();
    $cond->modifier_etud($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['password'],$_POST['tel'],$_POST['email']);
    header('Location:index.php');
}

?>