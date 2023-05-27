<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Resultados de datos!</title>
    <link rel="stylesheet" href="css/Style.css">
</head>
<body>
    <div class="dive2">
        <h1>Resultados</h1>
    <center><img src="img/meme.jpg" alt="meme" width="300">
    <?php
    $name = $_POST['Name'];
    $age = $_POST ['Age'];
    $city = $_POST ['City'];
    $hobby = $_POST['Hobby'];
    echo '<p><b>Nombre:</b>'.$name.'</p>';
    echo '<p><b>Edad:</b>'.$age.'</p>';
    echo '<p><b>Ciudad:</b>'.$city.'</p>';
    echo '<p><b>Pasatiempo:</b>'.$hobby.'</p>';
    ?>
    <h2>¡Bien hecho!</h2>

    <div id="popUpOverlay"></div>
        <div id="popUpBox">
        <div id="box">
            <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
        <div id="closeModal"></div>
        </div>
    </div>
        <button onclick="Alert.render('You look very pretty today.')" class="btn">¡Volver a Ingresar!</button>
    <script src="./app2.js"</script>
    </center>
   </div>
</body>
</html>