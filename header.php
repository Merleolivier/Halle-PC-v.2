<?php
include ('assets/config/configbdd.php');

// Récupérationo de donnée. 
$req = $bdd->prepare('SELECT * FROM visiteurs WHERE id=:id');
$req->execute(array('id' => '1'));
$data = $req->fetch();

$nbrancien = $data['visiteurs'];
$nbrnouveau = $nbrancien + 1;

$req = $bdd->prepare('UPDATE visiteurs SET visiteurs=:visiteurs WHERE id=:id');
$req->execute(array('visiteurs' => $nbrnouveau,
                    'id' => '1'));

?>
<!DOCTYPE html>
<html>
<head>
	<title>H@LLE PC</title>
  <style type="text/css">
  ul {
    list-style-type: none;
}
  </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet"> 
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta name="author" content="Olivier Merle" />
    <meta name="keywords" content="halle pc, reparation pc, reparation telephone" />
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="assets/img/logo.png" width="100"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="H@lle pc">
    <ul class="navbar-nav">
      <li class="nav-item active">
	      <a class="nav-link" href="index"><font face="Abel"><i class="fa fa-home"></i> Acceuil</font><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ordinateur"><font face="Abel"><i class="fa fa-laptop"></i> Ordinateur</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="peripherique"><font face="Abel"><i class="fa fa-print"></i> Périphérique</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="consommable"><font face="Abel"><i class="fa fa-plus-square"></i> Consommable</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="telephonie"><font face="Abel"><i class="fa fa-phone"></i> Téléphonie</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="occasion"><font face="Abel"><i class="fa fa-archive"></i> Occasion</font></a>
      </li>

      <a href="https://facebook.com" target="_blank"><button type="button" class="btn btn-light" style="margin-left: 330px;"><i class="fab fa-facebook"></i></button></a>
      <a href="tel:0699057865"><button type="button" class="btn btn-light" style=""><i class="fas fa-phone-square"></i></button></a>
      <a href="mailto:olivier@gmail.com" style="text-decoration: none;"><button type="button" class="btn btn-light" style=""><i class="fas fa-envelope"></i></button></a>
      <a style="text-decoration: none;"><button type="button" class="btn btn-light" style=""> Visiteurs : <?php echo $nbrancien; ?></button></a>
    </ul>

    


  </div>
</nav>