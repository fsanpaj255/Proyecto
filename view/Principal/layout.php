<!DOCTYPE html>
<html lang="en">

<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radiofonia</title>
    <link rel="stylesheet" href="css/main.css">
</header>

<body>
    <?php
        require_once 'view/Principal/header.php';
    ?>
    <section>
        <div id="cuerpo">
        <?php
        require_once 'view/Principal/enruta.php';
        ?>
        </div>
    </section>

    <?php
        require_once 'view/Principal/footer.php';
    ?>

</body>

</html>