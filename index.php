<?php
    if(isset($_POST['nom_ville'])
    ){
        $url = "https://api.openweathermap.org/data/2.5/weather?q=paris&appid=60ba69b1b1304b3143174510fd4797c5";

        $raw = file_get_contents($url);

        $json = json_decode($raw);
        $nameTown = $json->name;
        $weather = $json->weather[0]->main;
        $desc = $json->weather[0]->description;
        $temp = $json->main->temp;
        $feels_like = $json->main->feels_like;
    }
    
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <form action="" class="form-group d-flex " method="post">
            <div class="">
                <input class="form-control" type="text" name="nom_ville" id="">
            </div>
            <div>
                <button class="btn btn-primary">Valider</button>
            </div>
        </form>
        
        <div>
            <?php
            if(isset($temp))
                echo "la temperature est de ". $temp;cd
            ?>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>