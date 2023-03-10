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
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>My Hotels</title>
</head>

<body>
    <div class="container">
       <ul class="list-group">
        <?php foreach($hotels as $key => $hotel) { ?>
            <li class="list-group-item"><?= $key ?></li>

            <?php foreach($hotel as $key => $my_hotel) { ?>
                <li class="list-group-item"><h4><?=$key ?> : </h4><?=$my_hotel ?></li>
            <?php } ?>
        <?php } ?>
       </ul>
    </div>
</body>
</html>


<?php
//foreach($hotels as $hotel) {
    //var_dump($hotels);
    //foreach($hotel as $my_hotel) {
        //var_dump($my_hotel);
    //}
//}
?>