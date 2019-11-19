<?php
  class conducteur{

    //Attributs du conducteur
    public $cin;
    public $nom;
    public $prenom;
    public $mdp;
    public $telephone;
    public $email;

  //Constructeur du conducteur
  function __construct()
  {}
  /*Les fonctions du conducteur*/

      //Fonction insertion conducteur
      function insertconducteur()
      {
        require_once('config.php');
        $mysqli= new mysqli(db_host,db_user,db_password,db_database);
        $req="insert into conducteur(cin,nom,prenom,mdp,telephone,email) values($this->cin,'$this->nom','$this->prenom','$this->mdp','$this->telephone','$this->email')";
        $mysqli->query($req);
      }
      //Fonction recherche conducteur
      function recherche_conducteur($cin)
      {
          require_once('config.php');
          $mysqli= new mysqli(db_host,db_user,db_password,db_database);
          $req="select count(*) from conducteur where cin='$cin'";
          $res=$mysqli->query($req);
          return $res ;
          //$mysqli->close();
      }

      //Fonction modifier conducteur
      function modifier_conducteur($cin,$nom,$prenom,$mdp,$telephone,$email)
      {
          require_once('config.php');
          $mysqli= new mysqli(db_host,db_user,db_password,db_database);
          $req="update conducteur set cin='$cin',nom='$nom',prenom='$prenom',mdp='$mdp',telephone='$telephone',email='$email'";
          $mysqli->query($req);
      }
      //Fonction supprimer conducteur
      function supprimer_conducteur($cin)
      {
          require_once('config.php');
          $mysqli= new mysqli(db_host,db_user,db_password,db_database);
          $req="delete from conducteur where cin='$cin'";
          $mysqli->query($req);
      }
}

?>
