<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotels</title>
</head>
<body>

    <h1>
        <?php
            //  echo '<ul>';
            //  for ($i=0; $i<=5; $i++) {
            //      echo '<li>';
            //      $details = array_values($hotels[1]); 
            //      print_r($details) ;
            //      echo '</li>';
            //  }

            //  echo '<ul>';
            //  foreach ($hotels as $singleHotel => $details ) {
            //      echo '<li>';
            //      echo "$singleHotel: $details";
            //      echo '</li>';
            //  }

             echo '<ul>';
             foreach ($hotels as $singleHotel => $details ) {
                   echo '<li>';
                   print_r($details) ;
                   echo '</li>';
                         
            }
                
                // $nomi = array_keys($hotels); 
                // $anni = array_values($hotels); 
                // print_r($nomi); 
                // print_r($anni);
            

        ?>
    </h1>
    
</body>
</html>