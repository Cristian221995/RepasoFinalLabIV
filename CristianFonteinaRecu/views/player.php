<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mario Kart</title>

        <link rel="stylesheet" href="<?=FRONT_ROOT?>/assets/css/style.css">
    </head>
    <body class="player">
        <div class="wrapper">
            <h2>Datos del personaje</h2>
        </div>
        <div>
            <h3>Velocidad: <?= $mario->getVelocidad() ?></h3><br>
            <br>
            <h3>Fuerza: <?= $mario->getFuerza() ?></h3><br>
            <br>
            <h3>Inteligencia: <?= $mario->getInteligencia() ?></h3><br>
            <br>
            <h3>Agilidad: <?= $mario->getAgilidad() ?></h3><br>
            <br>
            <h3>Pantalon: <?= $mario->getPantalon() ?></h3><br>
            <br>
            <h3>Camiseta: <?= $mario->getCamiseta() ?></h3><br>
            <br>
            <h3>Calzado: <?= $mario->getCalzado() ?></h3><br>
            <?php $mario->avanzar(); ?><br>
            <?php $mario->saltar(); ?><br>
            <?php $mario->golpear(); ?><br>
            <?php $mario->aplastar(); ?><br>
        </div>
        
    </body>
</html>
