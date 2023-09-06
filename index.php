<?php 

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IntroPhP</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        
        <h1 class="text-center">introduzione php</h1>
        
        <div class="row">

            <form action="secondFile.php" class="card" method="POST">
                <div class="card-body">
                    <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" placeholder="Inserisci il tuo username" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                    <label>Parole Negate</label>
                    <input type="text" placeholder="Inserisci parole da filtrare seguite da uno spazio" class="form-control" name="censor">
                    </div>
                    <div class="mb-3">
                    <label>Testo</label>
                    <input type="text" class="form-control" placeholder="Inserisci il testo da controllare" name="testo">
                    </div>
                
                    <button class="btn btn-primary mx-auto" type="submit">conferma</button>
                    
                </div>
            </form>

        </div>
    </div>


    


</body>
</html>