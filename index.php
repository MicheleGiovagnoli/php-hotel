<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
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

    foreach($hotels as $key => $hotel) {
        foreach($hotel as $date) {
            echo $date . '<br>';
        }
    }
    
?>
<form action="index.php" method="GET">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">Vote</th>
            <th scope="col">Distance To Center</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $hotels[0]['name'] ?></td>
            <td><?php echo $hotels[0]['description'] ?></td>
            <td><?php echo $hotels[0]['parking'] ?></td>
            <td><?php echo $hotels[0]['vote'] ?></td>
            <td><?php echo $hotels[0]['distance_to_center'] ?></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td><?php echo $hotels[1]['name'] ?></td>
            <td><?php echo $hotels[1]['description'] ?></td>
            <td><?php echo $hotels[1]['parking'] ?></td>
            <td><?php echo $hotels[1]['vote'] ?></td>
            <td><?php echo $hotels[1]['distance_to_center'] ?></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td><?php echo $hotels[2]['name'] ?></td>
            <td><?php echo $hotels[2]['description'] ?></td>
            <td><?php echo $hotels[2]['parking'] ?></td>
            <td><?php echo $hotels[2]['vote'] ?></td>
            <td><?php echo $hotels[2]['distance_to_center'] ?></td>
            </tr>
            <th scope="row">4</th>
            <td><?php echo $hotels[3]['name'] ?></td>
            <td><?php echo $hotels[3]['description'] ?></td>
            <td><?php echo $hotels[3]['parking'] ?></td>
            <td><?php echo $hotels[3]['vote'] ?></td>
            <td><?php echo $hotels[3]['distance_to_center'] ?></td>
            </tr>
            <th scope="row">5</th>
            <td><?php echo $hotels[4]['name'] ?></td>
            <td><?php echo $hotels[4]['description'] ?></td>
            <td><?php echo $hotels[4]['parking'] ?></td>
            <td><?php echo $hotels[4]['vote'] ?></td>
            <td><?php echo $hotels[4]['distance_to_center'] ?></td>
            </tr>
        </tbody>
    </table>
</form>
</body>
</html>