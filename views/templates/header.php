<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="/public/assets/css/homePage.css">
    <link rel="stylesheet" href="/public/assets/css/pages.css">

    <link rel="shortcut icon" href="/public/assets/img/Logo.png" type="image/x-icon">

    <title>ManuGameWorld</title>
</head>

<body class="<?=$theme?>">
    <header>

        <nav class="navbar navbar-expand-lg justify-content-center fixed-top" id="navigation">
            <div class="container-fluid navbarMobile">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <div class="navbarName">Menu</div>
                </button>
                <ul class="navbar-nav mb-2 mb-lg-0 ml-auto fw-bold navbarMobile2">
                    <li class="nav-item d-lg-none navMobile">
                        <a href="http://myrssfeed.localhost/controllers/home-controller.php" class="icon"><img id=""
                                src="/public/assets/img/logo.png" alt="homepage"></a>
                    </li>

                    <li class="nav-item d-lg-none navMobile">
                        <a class="icon" data-bs-toggle="modal" data-bs-target="#openModalDV"><img
                                src="/public/assets/img/UserWhite.png" alt=""></a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse justify-content-between w-50 navVersion" id="navbarNav">
                    <div class="logo">
                        <!--logo-->
                        <a href="http://myrssfeed.localhost/controllers/home-controller.php" class="logo"><img
                                src="/public/assets/img/logo.png" alt="homepage"></a>
                    </div>
                    <ul class="navbar-nav mb-2 mb-lg-0 topBotomBordersOut ml-auto text-center fw-bold">
                        <li class="nav-item">
                            <a class="nav-link "
                                href="http://myrssfeed.localhost/controllers/pages-controller.php?category=0"><?=$arrayXML[0]->nameCategory?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="http://myrssfeed.localhost/controllers/pages-controller.php?category=1"><?=$arrayXML[1]->nameCategory?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="http://myrssfeed.localhost/controllers/pages-controller.php?category=2"><?=$arrayXML[2]->nameCategory?></a>
                        </li>

                        <li class="nav-item d-none d-lg-block">
                            <a class="icon" data-bs-toggle="modal" data-bs-target="#openModalDV"><img class="logo2"
                                    src="/public/assets/img/UserWhite.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- START MODAL -->
    <!-- Start Search Modal Desktop Version -->
    <div class="modal fade" id="openModalDV" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="<?= htmlspecialchars($_SERVER['REQUEST_URI']) ?>" method="POST" id="formUser" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Paramètres</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="categories">Choisissez 3 catégories :</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="categories[]" class="form-check-input categories" type="checkbox" id="cat1" value="cat1" <?=isChecked('cat1')?>>
                                        <label class="checkbox" for="inlineCheckbox">Actualités</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="categories[]" class="form-check-input categories" type="checkbox" id="cat2" value="cat2" <?=isChecked('cat2')?>>
                                        <label class="checkbox" for="inlineCheckbox">Test</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="categories[]" class="form-check-input categories" type="checkbox" id="cat3" value="cat3" <?=isChecked('cat3')?>>
                                        <label class="checkbox" for="inlineCheckbox">PS5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="categories[]" class="form-check-input categories" type="checkbox" id="cat4" value="cat4" <?=isChecked('cat4')?>>
                                        <label class="checkbox" for="inlineCheckbox">XBOX X</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="categories[]" class="form-check-input categories" type="checkbox" id="cat5" value="cat5" <?=isChecked('cat5')?>>
                                        <label class="checkbox" for="inlineCheckbox">SWITCH</label>
                                    </div>
                                    <p class="error"><?= $error['categories'] ?? '' ?></p>
                                </div>
                            </div>
                        </div>
                    </div> <!--class="modal-body-->

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="format">Choisissez un format :</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="format" class="form-check-input format" type="radio" required id="6" value="6" <?=isChecked('6')?>>
                                        <label class="radio" for="inlineradio">6</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="format" class="form-check-input format" type="radio" required id="9" value="9" <?=isChecked('9')?>>
                                        <label class="radio" for="inlineradio">9</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input name="format" class="form-check-input format" type="radio" required id="12" value="12" <?=isChecked('12')?>>
                                        <label class="radio" for="inlineRadio">12</label>
                                    </div>
                                    <p class="error"><?= $error['format'] ?? '' ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="mod">Choisissez votre mode :</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input name="mod" class="form-check-input" type="checkbox" id="mod" value="1" <?=$theme == 'dark' ?'checked':'' ?>>
                                        <label class="switch" for="mod">&#x263D;</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-lg" type="submit">Submit </button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- class="modal fade" -->
    <!-- End Search Modal Desktop Version -->