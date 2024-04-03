<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/_config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/_header.php";

?>

<div class="container w-70">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                   <?php  //Indicators/dots ?>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                    </div>

                    <?php  //The slideshow/carousel ?>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/images-site/foto-loja-coluna-bolsas.jpe" alt="Los Angeles" class="d-block"
                                style="width:100%">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/images-site/bolsa-lona-sel-de-mer-shopping.jpe" alt="Chicago"
                                class="d-block" style="width:100%">
                        </div>
                        <div class="carousel-item">
                            <img src="./images/images-site/bolsa-estampa-lona-marrom-praia.jpe" alt="New York"
                                class="d-block" style="width:100%">
                        </div>
                    </div>

                    <?php  // Left and right controls/icons ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/_footer.php";

?>
