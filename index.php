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

?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotels</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <?php
            
            echo '<div class="titolo"><h1>Hotel</h1></div>';
                echo '<div>';
                   foreach ($hotels as $singleHotel => $details ) {
                    echo '<ul>';
                        echo '<li>';
                            print_r('Nome:'.' ' .$details['name']);
                        echo '</li>';
                        echo '<li>';
                            print_r('Descrizione:'.' ' .$details['description']);
                        echo '</li>';

                        echo '<li>';
                             if ($details['parking'] == true) print_r('Questo hotel ha il parcheggio');              
                                elseif (print_r('Questo hotel non ha il parcheggio'));
                        echo '</li>';

                        echo '<li>';
                            print_r('Voto:'.' ' .$details['vote']);
                        echo '</li>';

                        echo '<li>';
                            print_r('Distanza dal centro:'. ' ' .$details['distance_to_center']. 'km');
                        echo '</li>';
                    echo '</ul>';
                                
                };
                    
             
                echo '</div>';
        ?>
    
</body>
</html>