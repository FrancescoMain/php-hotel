<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>

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
        $prk = $_GET["parking"] ?? "OFF";
        $votoMin = $_GET["votoMin"];

        if ($votoMin > 5) {

            echo "<h4 class='green'>Inserire numero compreso tra 0 e 5</h4>";
        }
    ?>
</head>
<body>
    <form>
        <label for="name">Voto Minimo</label>
        <input type="text" name="votoMin" value="0">
        <br>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parking" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Parcheggio
            </label>
            <input type="submit" value="validate">
        </div>
    </form>


<table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">Descrizione</th>
        <th scope="col">Parcheggio</th>
        <th scope="col">Voto</th>
        <th scope="col">Distanza dal Centro</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($hotels as $hotel) {
            $name = $hotel["name"];
            $description = $hotel["description"];
            $parking = $hotel["parking"] ? "Yes" : "No";
            $vote = $hotel["vote"];
            $distance_to_center = $hotel["distance_to_center"];
            $tLine =  
            "<tr> <th scope='row'>" . $name . "</th>" .
            "<td>" . $description . "</td>" .
            "<td>" . $parking . "</td>" .
            "<td>" . $vote . "</td>" .
            "<td>" . $distance_to_center . "mt" . "</td>";

            if ($prk == "OFF" && $votoMin <= $vote)
                echo $tLine;
            elseif ($prk == "on" && $parking == "Yes" && $votoMin <= $vote){
                echo $tLine;
            }

            
              
               

                
            } 

        ?>
    </tbody>
</table>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>