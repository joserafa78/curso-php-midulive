<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
    <link rel="stylesheet" href="style/micss.css">

    <title>Api Proxima Pelicula</title>
</head>

<body>
    <?php
    include_once 'php/pelicula_PHP.php';
    ?>
    <main>
        <section>
            <h3>Proxima Pelicula de Marbel</h3><br><br>
            <img src=" <?= $data["poster_url"] ?> " width="300" alt="Porter de <?= $data["title"]; ?>" style="border-radius: 16px;" />
        </section>
        <hgroup>
            <h3>La Pelicula: <?= $data["title"] ?> ,Se estrena en: <?= $data["days_until"] ?> Días. </h3>
            <p>La Siguinte Pelicual es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>


    </main>

    <nav id="nav-menu" id="nav-menu">
        <ul>
            <li><a href="index.php" accesskey="h">Home</a></li>
        </ul>
    </nav>


    <footer>
        <?php include_once 'footer.php' ?>
    </footer>
</body>

</html>