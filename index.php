

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel</title>
    <link rel=stylesheet href="style.CSS">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <h1>POO hotel</h1>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>



<?php


spl_autoload_register(function ($class_name) {
    require 'classes/' . $class_name . '.php';
});



$hiltonStrasbourg = new Hotel("Hilton*****","10 route de la gare","68700","Strasbourg");
$regentParis = new hotel("Regent","15 rue du moulin","75000","Paris");


$virgileGibello = new Client ("Gibello","Virgile",$hiltonStrasbourg);
$mickaMurmann = new Client ("Murmann","Micka",$hiltonStrasbourg);

$chambre17 = new Chambre ("Chambre 17 ",300,"",true,$hiltonStrasbourg);
$chambre3 = new Chambre ( "Chambre 3",120,"(2 lits)",false,$hiltonStrasbourg);
$chambre4 = new chambre ("Chambre 4",120,"(2 lits)",true,$hiltonStrasbourg);
$chambre5 = new chambre ("Chambre 5",120,"",false,$hiltonStrasbourg);


$reservation1 = new Reservation ($chambre17,"01-01-2021","01-01-2021",$virgileGibello);
$reservation2 = new Reservation ($chambre3,"11-03-2021","11-03-2021",$mickaMurmann);
$reservation2 = new Reservation ($chambre5,"01-04-2021","01-04-2021",$mickaMurmann);




 echo $hiltonStrasbourg->getInfos();

 echo $hiltonStrasbourg->afficherReservation();

 echo $mickaMurmann->afficherReservation();

 echo $virgileGibello->afficherReservation();



 //echo $mickaMurmann->afficherReservation();

 echo $regentParis->afficherreservation();

 echo $hiltonStrasbourg->afficherStatut();



//var_dump($chambre5);





















