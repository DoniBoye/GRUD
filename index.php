<?php
require_once('db.php');
require_once('template/header.php');
/*var_dump($_GET['page']);*/
if(isset($_GET['page']) && !empty($_GET['page'])){
    $pages = ['login', 'home', 'company'];
    if(in_array($_GET['page'], $pages)){
        include_once($_GET['page'].'.php');
    } else {
        include_once('404.php');
    }
} else {
    include_once('home.php');
}
require_once('template/footer.php');
?>