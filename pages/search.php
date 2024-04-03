<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/_config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_headerPage.php";

$search = $feedback = '';

$show_form = true;

if (isset($_POST['send'])) :

    $search = sanitize('search', 'string');
    if ($search === '') : {
            $feedback = '<h3 style="color:red">Erro: por favor, preencha antes!</h3>';
        }
    else : {

            $sql = <<<SQL
        
        SELECT * FROM product WHERE name LIKE '%$search%' LIMIT 0, 4;

        SQL;

            $res = $conn->query($sql);

            echo '<div class="container">';
            echo  '<div class="px-lg-5">';
            echo  '<div class="row">';

            while ($x = $res->fetch_assoc()) :

                echo  '<div class="col-xl-3 col-lg-4 col-md-6 mb-4">';
                echo  '<div class="bg-white rounded shadow-sm"><img src="';
                echo $x['photo'];
                echo '" alt=""class="img-fluid card-img-top">';
                echo  '<div class="p-4">';
                echo  '<h5> <a href="./view.php?id=';
                echo $x['id'];
                echo '" class="text-dark">';
                echo $x['name'];
                echo '</a></h5>';
                echo  '<p class="small text-muted mb-0">';
                echo $x['description'];
                echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>';
                echo  '<div class="d-flex align-items-center justify-content-between rounded-pill bg-custom-soft px-3 py-2 mt-4">';
                echo  '<p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">';
                echo   $x['type'];
                echo  '</span>';
                echo  '</p>';
                echo  '<div class="badge badge-danger px-3 rounded-pill font-weight-normal">Novo</div>';
                echo  '</div>';
                echo  '</div>';
                echo  '</div>';
                echo  '</div>';



            endwhile;

            echo  '</div>';
            echo  '</div>';
            echo  '</div>';
        }
    endif;

endif;



?>

<div class="container bg-light">


</div>

<h2 class="h1-responsive font-weight-bold text-center text-white my-4">Pesquise:</h2>

<div class="container text-light text-center">
    <?php echo $feedback; ?>
</div>

<?php //Grid row?>
<div class="row d-flex justify-content-center">

    <?php //Grid column?>
    <div class="col-md-8">

        <div class="text-center">
            <form id="search-form" name="search-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <input type="hidden" name="send" value="true">
                <input type="text" name="search" id="search" class="form-control m-3" placeholder="Escreva aqui...">

                <div class="text-center text-md-left">
                    <a class="btn btn-light" onclick="document.getElementById('search-form').submit();">Envie</a>
                </div>
                <div class="status"></div>
            </form>

        </div>


    </div>
    <?php //Grid column ?>

</div>
<?php //Grid row ?>

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_footerPage.php";

?>