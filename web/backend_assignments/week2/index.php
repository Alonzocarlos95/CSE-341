<?php

$action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
    $action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING);
}

switch($action){
    case 'shopping-cart':
        // include '../../shopping_cart/index.php';
        // include '/cs313-php/web/shopping_cart/index.php';
        header('Location: ../../shopping_cart/index.php');
        break;
        default:
        include '../index.php';
}

?>