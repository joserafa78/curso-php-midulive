<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IfTernarios</title>
    <link rel="stylesheet" href="style/micss.css">
</head>

<body>
    <header>
        <img src="img/vzla.jpg" alt="">
        <nav id="nav-menu">
            <ul>
                <li><a href="index.php" accesskey="h">Home</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <h3>Usando "IF TERNARIO"</h3>
        <p>Creando IF TERNARIO podemos simplificar el codigo en nuestro repositorio, mas
            legibilidad.
        </p>
        <?php
        $name = "jose Rafael";
        $ege = 42;
        $developers = true;
        $grade = 19;
        $ifState = ($grade <= 9) ? "Reprobado" : (($grade <= 13) ? "Regular" : (($grade <= 18) ? "Bien" : "Exelente"))
        ?>
        <h2>Tu nota es:</h2>
        <h3> <?= $ifState ?> </h3>

    </section>
    <footer>
        <?php include_once 'footer.php' ?>
    </footer>
</body>

</html>