<?php
  class annonce{

    //Attributs de la classe annonce
    public $id;
    public $depart;
    public $destination;
    public $date;
    public $temps;
    public $nbplace;
    public $prix;

  //Constructeur de la classe annonce
  function __construct()
  {}
  /*Les fonctions de la classe annonce*/

      //Fonction insertion annonce
      function insertannonce()
      {
        require_once('config.php');
        $mysqli= new mysqli(db_host,db_user,db_password,db_database);
        $req="insert into annonce(depart,destination,date,temps,nbplace,prix) values('$this->depart','$this->destination','$this->date','$this->temps','$this->nbplace','$this->prix')";
        $mysqli->query($req);



      }
      //Fonction recherche annonce
      function recherche_annonce($id)
      {
        require_once('config.php');
        $mysqli= new mysqli(db_host,db_user,db_password,db_database);
        $req="select count(*) from annonce where id='$id'";
        $res=$mysqli->query($req);
        return $res ;
        }
      //Fonction modifier annonce
      function modifier_annonce($id,$depart,$destination,$date,$temps,$nbplace,$prix)
      {
        require_once('config.php');
        $mysqli= new mysqli(db_host,db_user,db_password,db_database);
        $req="update annonce set id='$id',depart='$depart',destination='$destination',date='$date',temps='$temps',nbplace='$nbplace',prix='$prix'";
        $mysqli->query($req);
      }
      //Fonction supprimer annonce
      function supprimer_annonce($id)
      {
        require_once('config.php');
        $mysqli= new mysqli(db_host,db_user,db_password,db_database);
        $req="delete from annonce where id='$id'";
        $mysqli->query($req);
      }
}

?>
