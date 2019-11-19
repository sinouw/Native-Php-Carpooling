<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>S'inscrire</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="index/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="index/css/style.css">
</head>
<body>
    

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="inscription.php">
                        <h2 class="form-title">Créer votre compte</h2>
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
                            <input type="password" class="form-input" name="password" id="password" placeholder="Votre mot De Passe"/>
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
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>
                                J'accepte toutes les déclarations en <a href="#" class="term-service">termes de service  </a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="S'inscrire"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        J'ai déjà un compte ? <a href="#" class="loginhere-link">  connectez-vous ici</a>
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
require_once('conducteur.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $cond= new conducteur();
  
    $cond->cin=$_POST['cin'];
    $cond->nom=$_POST['nom'];
    $cond->prenom=$_POST['prenom'];
    $cond->mdp=$_POST['password'];
    $cond->telephone=$_POST['tel'];
    $cond->email=$_POST['email'];

    $res=$cond->recherche_conducteur($cond->cin);
    $row=$res->fetch_array(MYSQLI_NUM);

    if($row[0]==0)
    {
      $cond->insertconducteur();
      echo "<script>alert('Inscription reussite');</script>";
      header('Location:inscriptionok.php');
    }
    else
    {
    	echo "<script>alert('conducteur existe deja');</script>";
    }
}
?>