<?php

$action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
    $action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING);
}

switch($action){
    case 'intro-view':
        include '../introduction.php';
        break;
        default:
        include '../index.php';
}

?>