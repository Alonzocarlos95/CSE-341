<?php

$action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
    $action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING);
}

switch($action){
    case 'shopping-cart':
        include '../../shopping_cart/';
        break;
        default:
        include '../index.php';
}

?>