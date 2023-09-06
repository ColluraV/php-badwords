<?php

$user = $_POST["name"];
$censor = $_POST["censor"];
$testo = $_POST["testo"];

$censoredWords = explode(" ", $censor);

$totalLength = strlen($testo);
$filteredText = str_replace($censoredWords,"***", $testo );

$filteredLength = strlen($filteredText);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IntroPhP_p2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body>

    <div class="px-4 py-5 my-5 text-center">
        
        <h1 class="display-5 fw-bold text-body-emphasis">Benvenut* <?php echo $user ?></h1>

        <div class="col-lg-6 mx-auto">
            <h3> Questo è il tuo testo non filtrato </h3>
            <p class="lead mb-4"> <?php echo $testo ?> </p>

            <p>totale contenuto non filtrato <br> <?php echo $totalLength ?></p>            
        </div>
        <div class="col-lg-6 mx-auto">
            <h3> Questo è il tuo testo filtrato </h3>
            <p class="lead mb-4"> <?php echo $filteredText ?> </p>
            <p>totale contenuto filtrato <br> <?php echo $filteredLength ?></p>
        
        </div>
    </div>

</body>

</html>