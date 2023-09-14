<?php
    if($_POST['nom_ville']){
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meteo</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nom_ville" id="">
        <button>Valider</button>
    </form>
    <?php
        if($temp)
            echo "la temperature est de ". $temp;
    ?>
</body>
</html>