<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ajouter une annonce</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="menu/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="menu/css/animate.css">
    
    <link rel="stylesheet" href="menu/css/owl.carousel.min.css">
    <link rel="stylesheet" href="menu/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="menu/css/magnific-popup.css">

    <link rel="stylesheet" href="menu/css/aos.css">

    <link rel="stylesheet" href="menu/css/ionicons.min.css">

    <link rel="stylesheet" href="menu/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="menu/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="menu/css/flaticon.css">
    <link rel="stylesheet" href="menu/css/icomoon.css">
    <link rel="stylesheet" href="menu/css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('menu/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-10 col-sm-12 ftco-animate text-center">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Annonce</span></p>
              <h1 class="mb-3">Ajouter une annonce</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row no-gutters justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Ajouter une annonce</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 ftco-animate img" style="background-image: url(menu/images/bg_1.jpg);"></div>
          <div class="col-md-8 ftco-animate makereservation p-5 bg-light">
            <form method="POST" action="ajoutannonce.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">depart</label>
                    <input type="text" name="depart" class="form-control" placeholder="depart">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">destination</label>
                    <input type="text" name="destination" class="form-control" placeholder="destination">
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">date</label>
                    <input type="text" name="date" class="form-control" id="book_date" placeholder="date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">temps</label>
                    <input type="text" name="temps" class="form-control" id="book_time" placeholder="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Person</label>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="nbplace" id="" class="form-control">
                        <option value="">Person</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4+</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="">Prix</label>
                    <input type="text" class="form-control" name='prix' placeholder="prix">
                  </div>
                </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="form-group">
                    <input type="submit" value="Ajouter une annonce" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="menu/js/jquery.min.js"></script>
  <script src="menu/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="menu/js/popper.min.js"></script>
  <script src="menu/js/bootstrap.min.js"></script>
  <script src="menu/js/jquery.easing.1.3.js"></script>
  <script src="menu/js/jquery.waypoints.min.js"></script>
  <script src="menu/js/jquery.stellar.min.js"></script>
  <script src="menu/js/owl.carousel.min.js"></script>
  <script src="menu/js/jquery.magnific-popup.min.js"></script>
  <script src="menu/js/aos.js"></script>
  <script src="menu/js/jquery.animateNumber.min.js"></script>
  <script src="menu/js/bootstrap-datepicker.js"></script>
  <script src="menu/js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="menu/js/google-map.js"></script>
  <script src="menu/js/main.js"></script>
    
  </body>
</html>

<?php
require_once('annonce.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ann= new annonce();
  
    $ann->depart=$_POST['depart'];
    $ann->destination=$_POST['destination'];
    $ann->date=$_POST['date'];
    $ann->temps=$_POST['temps'];
    $ann->nbplace=$_POST['nbplace'];
    $ann->prix=$_POST['prix'];


      $ann->insertannonce();
     
      //header('Location:inscriptionok.php');
}
?>