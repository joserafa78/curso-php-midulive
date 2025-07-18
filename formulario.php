<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>

<body>
    <header>
        <h1>Formulario para cargar datos</h1>
        <nav id="nav-menu" id="nav-menu">
            <ul>
                <li><a href="index.php" accesskey="h">Home</a></li>
            </ul>
        </nav>
    </header>
    <!--Se Requiere Bootstrap Web-->
    <div class='card card-body'>
        <form action='probandoCodigo_php.php' method='post' name='formulario'>
            <!-- Contenido -->
            <div class='form-group'>
                <label for=''>Nombre</label>
                <input type='text' id='' placeholder='Nombre' name='nombre' class='form-control'><br>
            </div>
            <div class='form-group'>
                <label for=''>Numero</label>
                <input type='number' id='' placeholder='Numero' name='numero' class='form-control'><br>
            </div>
            <!-- Botones y sus Clases-->
            <!-- primaryDe,secondaryDeg,successDeg,warningDeg ,dangerDeg-->
            <input type='reset' id='' value='Resetear' onclick='' class='botonRect primaryDeg'>
            <input type='submit' id='' value='Enviar' onclick='' class='botonRect primaryDeg'>
        </form>
    </div>

    <footer>
        <?php include_once 'footer.php' ?>
    </footer>
</body>

</html>