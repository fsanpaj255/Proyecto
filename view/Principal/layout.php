

<header>
    <title>Radiofonia</title>
    <link rel="stylesheet" href="./css/main.css">
</header>

<footer>
<link rel="stylesheet" href="./css/main.css">
<script src="../../js/mantenimientoBandas.js"></script>
<script src="../../js/geolocalizacion.js"></script>
<script src="../../js/camara.js"></script>
</footer>
<body>
<link rel="stylesheet" href="./css/main.css">
    <?php
        require_once 'view/Principal/header.php';
    ?>
    <section>
        <div id="cuerpo">
        <?php
        require_once './view/Principal/enruta.php';
        ?>
        </div>
    </section>

    <?php
        require_once 'view/Principal/footer.php';
    ?>

</body>

</html>