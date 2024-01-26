<?php

    include __DIR__."/functions/functions.php";

    generaPassword($lunghezza = 12);

    $lunghezzaDefault = 12; 

    
    if (isset($_GET['lunghezza'])) {
        $lunghezza = intval($_GET['lunghezza']);
        $passwordGenerata = generaPassword($lunghezza);
    } else {
        $lunghezza = $lunghezzaDefault;
        $passwordGenerata = 'La tua password generata apparirà qui';
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1>Generatore di Password</h1>
    <form action="" method="get">
        <label for="lunghezza">Lunghezza della password: <span
                id="lunghezzaValore"><?php echo $lunghezza; ?></span></label>
        <input type="range" id="lunghezza" name="lunghezza" min="1" max="25" value="<?php echo $lunghezza; ?>"
            oninput="document.getElementById('lunghezzaValore').textContent = this.value">
        <button type="submit">Genera Password</button>
    </form>
    <p class="password">Password generata: <strong><?php echo $passwordGenerata; ?></strong></p>

    <script>
    var slider = document.getElementById("lunghezza");
    var output = document.getElementById("lunghezzaValore");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
    </script>

</body>

</html>