<?php include('header.php'); ?>

<body id="login-page" class="bg-living bg-cover">

    <?php include('nav.php'); ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-3 bg-black-alpha d-flex align-items-center justify-content-center px-5">

                <div class="">

                    <span class="mb-5 text-center h1 d-block">Filtro</span>

                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">¿Qué estas buscando?</em>
                        </header>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-outline-light btn-lg mr-1" href="<?=FRONT_ROOT?>shop">
                                <i class="fas fa-home"></i>
                            </a>
                            <a class="btn btn-outline-light btn-lg mx-1" href="#">
                                <i class="fas fa-car"></i>
                            </a>
                          
                        </div>
                    </div>


                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">Precio</em>
                        </header>

                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Min</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Max</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-outline-light btn-lg btn-block">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <header class="mb-3">
                            <em class="font-weight-bold">Habitaciones</em>
                        </header>

                        <div class="row align-items-end">
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Min</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>

                            </div>
                            <div class="col-lg-4">
                                <div class="form-gorup">
                                    <label for="">Max</label>
                                    <input type="text" class="form-control form-control-lg">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <button type="button" class="btn btn-outline-light btn-lg btn-block">
                                    <i class="fas fa-check"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <main class="col-lg-9 bg-white">
            <div class="row py-3">
            <?php foreach($realList as $key=>$value){ ?>
                    <article class="col-lg-3 mb-5">
                        <img src="<?=FRONT_ROOT?><?= $value->getImage() ?>" class="img-fluid mb-2" alt="">
                        <h2 class="h5"><?php echo $value->getTitle() ?></h2>
                        <div class="description">
                            <small><?php echo $value->getDescription() ?></small>
                        </div>
                        <div class="bedrooms">
                            <small>Habitaciones: <?php echo $value->getBedrooms() ?></small>
                        </div>
                        <?php if($value->getParking() == 0){?>
                            <small>No tiene cochera.</small>
                        <?php }else{ ?>
                            <small>Tiene cochera.</small>
                        <?php } ?>
                        <div class="price text-right">
                            <em class="h3">$<?php echo $value->getPrice() ?></em>
                        </div>
                        <a href="<?=FRONT_ROOT?>realstate/delete/<?= $value->getTitle() ?>">Eliminar</a>
                    </article>
                   <?php } ?>
                </div>
            

            </main>

        </div>
    </div>

</body>

<?php include('footer.php'); ?>
