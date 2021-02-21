<?php

//Validate Email
function checkEmail($clientEmail) {
    $varEmail = filter_var($clientEmail, FILTER_SANITIZE_EMAIL);
    return $varEmail;
}

?>