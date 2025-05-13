<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/micss.css">
    <title>Interpolar Caracteres</title>
</head>

<body>
    <header>
        <img src="img/camaron.png" alt="" style="height: 350px; width:350px">
        <nav id="nav-menu">
            <ul><a href="index.php" accesskey="h">Home</a></ul>
        </nav>
    </header>
    <section>
        <?php
        $name = 'jose';
        $isDev = true;
        $ege = 42;
        $output = "Hola,$name tu edad es $ege años😯 ";
        ?>
        <h3><?= $output ?></h3>
        <h5>codigo en php</h5>
        <img src="img/codeInterpolar.png" alt="" style="height: 200px; width:350px">
        <hr>
    </section>
    <section>
        <h3>Escapar algun Caractier</h3>
        <p>son muchas las veces que queremos que nuesta pagina muestre algun
            como lo es el "$" o el simbolo Comillas.
        </p>
        <p> <strong> Aqui muestra los ejemplos:</strong><br />
            <?php
            $output = "Muestra el Simbolo Dolar \$ <br/> 
            Simbolo Comilla \"<br/>
            Comilla simble \' <br>";
            echo $output;
            ?>
            <img src="img/codeInterpolar1.png" alt="" style="height: 200px; width:350px">
        </p>
        <p> <strong> Mas Ejemplos:</strong> <br />
            <?= 'Comillas Simples \' <br/>' ?>
            <?= "\n Salto de Lines" ?>
            <?= "\n \t Salto de Lines" ?>
        </p>
    </section>

    <footer>

    </footer>
</body>

</html>