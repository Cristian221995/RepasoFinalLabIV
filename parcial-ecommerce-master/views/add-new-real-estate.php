<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include(ROOT . "views/nav.php"); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

        <div>

            <h1 class="mb-5 text-center">Agregar Propiedad</h1>

            <form class="add-form" method="post" action="<?=FRONT_ROOT?>realstate/store" enctype="multipart/form-data">
                <input type="hidden" name="usuario" value="<?php echo $_SESSION['user']->getId()?>">

                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control form-control-lg" name="title">
                </div>

                <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea class="form-control form-control-lg" name="description"></textarea>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Habitaciones</label>
                            <input type="number" class="form-control form-control-lg" name="bedrooms">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Parking</label>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" name="parking">
                                <label class="form-check-label" for="defaultCheck1">
                                    ¿Tiene cochera?
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="text" class="form-control form-control-lg" name="price">
                        </div>
                    </div>
                   
                </div>

                <div class="form-group">
                    <label for="">Imagen Destacada</label>
                    <input type="file" class="d-block" name="image">
                </div>

                <button type="submit" name="button" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
            </form>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
