<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid bg-black-alpha d-flex align-items-center justify-content-center">

        <div>

            <h1 class="mb-5 text-center">Agregar Vehículo</h1>

            <form class="add-form" method="post">
                <input type="hidden" name="usuario">

                <div class="form-group">
                    <label for="">Título</label>
                    <input type="text" class="form-control form-control-lg">
                </div>

                <div class="form-group">
                    <label for="">Descripción</label>
                    <textarea class="form-control form-control-lg"></textarea>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Año</label>
                            <input type="number" class="form-control form-control-lg" min="1800" max="2018">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Precio</label>
                            <input type="text" class="form-control form-control-lg">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Imagen Destacada</label>
                            <input type="file" class="d-block">
                        </div>
                    </div>
                </div>

                <button type="submit" name="button" class="btn btn-secondary d-block ml-auto px-4">Agregar</button>
            </form>
        </div>

    </div>

</body>

<?php include('footer.php'); ?>
