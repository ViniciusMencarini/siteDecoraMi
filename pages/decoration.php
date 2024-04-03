<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/_config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_headerPage.php";

/*
* Placeholder page for future decoration category
*/

// Get all Bags(Bolsas) from SQL database
$sql = <<<SQL
        
        SELECT * FROM product WHERE type !='Bolsa';

        SQL;

$res = $conn->query($sql);

echo '<div class="container">';
echo  '<div class="px-lg-5">';
echo  '<div class="row">';

// Print each product
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


?>

<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_footerPage.php";

?>