<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifCondicional</title>
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
        <h5>Practicando con condicional IF</h5>
        <?php
        // Comprobacion booleana
        $nota = 13;
        $ege = 22;
        $msg;
        if ($ege < 13) {
            $msg = 'Eres un Niño,📍';
        } else if ($ege < 16) {
            $msg = 'Eres un Adolescente,😍';
        } else if ($ege < 36) {
            $msg = 'Eres un Joven,😯';
        } else if ($ege < 75) {
            $msg = 'Eres un Señor,😎';
        } else if ($ege < 110) {
            $msg = 'Eres un Adulto Mayor,🤦‍♂️';
        }

        ?>
        <p>Tu Edad es: <?= $ege ?> <br /> </p>
        <h2>Sistema: <?= $msg ?> <br /></h2>
        <hr>
    </section>
    <section>
        <h3>Usando else if con Dos puntos</h3>
        <?php if ($nota < 06): ?>
            <h4>Tu nota es: Mala,😖</h4>
        <?php elseif ($nota < 11): ?>
            <h4>Tu nota es: Regular,🤨</h4>
        <?php elseif ($nota < 16): ?>
            <h4>Tu nota es: Buena,🤨</h4>
        <?php elseif ($nota < 21): ?>
            <h4>Tu nota es: Excelente,🤨</h4>
        <?php endif; ?>
        <p> <strong>Nota:</strong> No lovides que se debes escribir "elseif" Pegado cuando se Usan
            los Dos punto en php.</p>
        <hr>
    </section>
    <section>
        <h5>Usando una Ternaria con condicional IF</h5>
        <?php
        $ege = 30;
        $outputAge = $ege < 20
            ? 'Eres Joven'
            : 'Eres viejo.'
        ?>
        <h4>Sistema:<?= $outputAge ?> </h4>
        <img src="img/code3.png" alt="" style="height: 200px; width:300px">
    </section>
    <footer>

    </footer>
</body>

</html>