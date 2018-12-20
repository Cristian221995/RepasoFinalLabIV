<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mario Kart</title>

        <link rel="stylesheet" href="<?=FRONT_ROOT?>/assets/css/style.css">
    </head>
    <body class="start">
        <div class="formulario">
            <form class="" action="<?=FRONT_ROOT?>login/login" method="post">
                <div class="form-group">
                    <input type="text" class="control" name="email" value="" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="control" name="pass" value="" placeholder="contraseña">
                </div>
                <button class="btn btn-start" type="submit" name="button">
                    <img src="<?=FRONT_ROOT?>/assets/img/start.png" alt="" width="240px">
                </button>
            </form>
        </div>

    </body>
</html>
