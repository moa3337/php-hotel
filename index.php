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
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        ELENCO DEGLI HOTEL
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Descrizione</th>
                                    <th scope="col">Parchegio</th>
                                    <th scope="col">Voto</th>
                                    <th scope="col">Distanza</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($hotels as $key => $hotel) : ?>
                                <tr>
                                    <th scope="row"><?= $key +1 ?></th>
                                    <td><?= $hotel["name"] ?></td>
                                    <td><?= $hotel["description"] ?></td>
                                    <td><?= $hotel["parking"] ? "SI" : "NO" ?></td>
                                    <td><?= $hotel["vote"] ?></td>
                                    <td><?= $hotel["distance_to_center"] . " km" ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <br><hr>
        <!-- METODO ALTERNATIVO -->

        <ul class="list-group mt-4">
        <?php foreach($hotels as $key => $hotel) { 
            if($hotel['parking']==true){?>
            <li class="list-group-item"><?= $key ?></li>

            <?php foreach($hotel as $key => $my_hotel) { ?>
                <li class="list-group-item">
                    <h4><?=$key ?> : </h4><?=$my_hotel ?>
                </li>
            <?php } ?>
        <?php } } ?>
       </ul>
    </div>
</body>
</html>
