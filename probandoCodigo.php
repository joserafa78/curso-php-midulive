<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probando Codigo PHP</title>
    <link rel="stylesheet" href="style/micss.css">


</head>


<body>
    <?php
    include_once 'php/probandoCodigo_php.php';
    ?>
    <header>
        <div id="wrapper">
            <img src="img/Joserafa78_Coding.jpg " id="logo" alt="Foto Codeando" style="width: 500px; height: 300px;">
            <h1>Probando el Codig</h1>
            <h5>Aqui haciendo unas Practicas con lo aprendido...</h5>
            <nav id="nav-menu" id="nav-menu">
                <ul>
                    <li><a href="index.php" accesskey="h">Home</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <article>
        <h2>Ejercicio para Escapar algun Caracter</h2>
        <p>

            Ejercicio que muestra: <?= $salida ?></br>


        </p>
        <p>Comparando y mostrando variable: <?= $compara ?>
            <?php var_dump($compara); ?>
        </p>
        <p>
        <h2>Probando condicional anidad en HTML: </br></h2>
        <?php if ($efectivo >= 2000): ?>
            <h3>Eres Rico</h3>
        <?php elseif ($efectivo >= 1500): ?>
            <h3>Tienes suficiente</h3>
        <?php elseif ($efectivo >= 1200) : ?>
            <h3>Salario Minio</h3>
        <?php else : ?>
            <h3>Lo siento No Encajas.</h3>
        <?php endif; ?>
        </p>

        <p>
        <h3>Mas sobre IF</h3>
        <?php if ($edad > 18): ?>
            Es Mayor
        <?php else: ?>
            Es Menor
        <?php endif; ?>

        </p>
        <p>
        <h3>Probando if Ternario</h3>
        Usted es : <?= $salidaternaria ?>
        </p>
        <p>
            Su nota fue: <?= $salidaNotas ?>
        </p>
        <h3>Probando Estructura Match</h3>
        <p>
            El Cretirio de Tu edad es: <?= $salidaMatch ?>
        </p>
        <h3>Usando los Arrays</h3>
        <P>
            Mostrar: <?= var_dump($lenguajes) ?> </br>
            Mostrar Posicion (3): <?= $lenguajes[3]; ?><br>
            Cargar un Valor al Arreglo: <?= $lenguajes[] = "C++"; ?><br>
            Mostrar Denuevo: <?= var_dump($lenguajes) ?> </br>
        </P>
        <h3>Iterando Array con Foreach</h3>
        <p>
            Muestra en una lista de HTML los valores del array <br>
        <ul>
            <?php foreach ($lenguajes as $valor): ?>
                <li> <?= $valor ?></li>
            <?php endforeach; ?>
        </ul>

        </p>
        <h3>Muestra el Match usando Datos de la Empresa</h3>
        <P>
            El Resultado es: <?= $devuelveTerminal ?>
        </P>
        <h3>Array Asociativo y Macht</h3>
        <p>
            El Resultado es: <?= $valorSalidaMatch ?>
        </p>
    </article>
    <footer>
        <?php include_once 'footer.php' ?>
    </footer>

</body>

</html>