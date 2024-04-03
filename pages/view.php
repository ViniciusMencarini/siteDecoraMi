<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/_config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_headerPage.php";

$id = $feedback = '';

if (isset($_GET['id'])) {
    $view_id = intval($_GET['id']);
} else {
    $view_id = 0;
}

if ($view_id > 0) : {
    $sql = <<<SQL
    
    SELECT * FROM product WHERE id = '{$view_id}' AND amount>0

    SQL;

    $res = $conn->query($sql);

    $x = $res->fetch_assoc();

    echo '<div class="container"><div class="card"><div class="card-body"><h3 class="card-title">';
    echo $x['name'];
    echo '</h3><h6 class="card-subtitle">';
    echo $x['type'];
    echo '<div class="row"><div class="col-lg-5 col-md-5 col-sm-6"><div class="white-box text-center"><img src="';
    echo $x['photo'];
    echo '" class="img-responsive view-image"></div></div><div class="col-lg-7 col-md-7 col-sm-6"><h4 class="box-title mt-5 text-dark ">Descrição de produto:</h4><p class="text-dark">';
    echo $x['description'];
    echo '</p><h2 class="mt-5 text-dark">R$';
    echo $x['price']; 
    echo ',00</h2><button class="btn btn-primary btn-rounded"><a class="link-light" style="text-decoration:none;" href="';
    echo $x['link'];
    echo '">Compre</a></button></div></div></div></div></div>';
    
}
endif;

if ($view_id === 0) header('Location: ../index.php');



?>


<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/_footerPage.php";

?>