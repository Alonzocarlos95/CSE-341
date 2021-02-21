<?php

//Create or accesss a Session
session_start();

require_once '../library/functions.php';

$action = filter_input(INPUT_POST,'action', FILTER_SANITIZE_STRING);
if ($action == NULL){
    $action = filter_input(INPUT_GET,'action', FILTER_SANITIZE_STRING);
}



$items = array(
    array('id' => '1', 'desc' => 'MuscleTech Mass-Tech EXTREME 2000 7lbs Triple Chocolate Brownie', 'price' => 45.99, 'itemImage' => 'images/products/muscletech.png'),
    array('id' => '2', 'desc' => 'Dymatize Super Mass Gainer, 12lbs', 'price' => 55.99, 'itemImage' => 'images/products/dyma.jpg'), 
    array('id' => '3', 'desc' => 'Dymatize ISO100, 5lbs', 'price' => 80.99, 'itemImage' => 'images/products/iso100_5lb_gourchoc_lg_1.jpg'),
    array('id' => '4', 'desc' => 'MuscleTech Cell-Tech, 6lbs', 'price' => 72.20, 'itemImage' => 'images/products/muscletech_cell-tech.png'), 
    array('id' => '5', 'desc' => 'MuscleTech Phase8, 4.4lbs', 'price' => 40.99, 'itemImage' => 'images/products/muscletech_phase8_4_4lbs_jpg.png'),
    array('id' => '6', 'desc' => 'MuscleTech Nitro-Tech 100% Whey Gold, 4lbs M&S Exclusive Flavor & Size', 'price' => 50.25, 'itemImage' => 'images/products/nitro-tech_whey_gold_m_s_exclusive.jpg'), 
    array('id' => '7', 'desc' => 'MuscleTech Nitro-Tech 100% Whey Gold, 4lbs M&S Exclusive Flavor & Size', 'price' => 51.99, 'itemImage' => 'images/products/nitro_whey_5_5lb_cnc.jpg'),
    array('id' => '8', 'desc' => 'Optimum Nutrition Gold Standard 100% Whey, 5lbs', 'price' => 60.00, 'itemImage' => 'images/products/on100_whey_1.jpg'), 
    array('id' => '9', 'desc' => 'MuscleTech Platinum 100% Creatine, 400g Unflavored', 'price' => 20.99, 'itemImage' => 'images/products/platinum-creatine.jpg'),
    array('id' => '10', 'desc' => 'MuscleTech Platinum Multivitamin, 90 Tablets', 'price' => 18.99, 'itemImage' => 'images/products/platinum-multivitamin.jpg'), 
    array('id' => '11', 'desc' => 'Dymatize PRE WO, 20 Servings', 'price' => 25.70, 'itemImage' => 'images/products/pre-wo-fruit-fusion.jpg'),
    array('id' => '12', 'desc' => 'Optimum Nutrition Serious Mass, 6lbs', 'price' => 60.99, 'itemImage' => 'images/products/seriousmass_6lb_banana.jpg'), 
    array('id' => '13', 'desc' => 'Universal Nutrition Amino Tech, 375 Tablets', 'price' => 26.50, 'itemImage' => 'images/products/amino-tech_1_1.jpg'),
    array('id' => '14', 'desc' => 'MuscleMeds Carnivor Mass Big Steer 1250, 15lbs', 'price' => 120.99, 'itemImage' => 'images/products/carnivor-big-steer15lb_c_chocolate_fudge_2.jpg'), 
    array('id' => '15', 'desc' => 'MuscleMeds Carnivor Mass, 6lbs', 'price' => 55.99, 'itemImage' => 'images/products/carnivor-mass_1.jpg'),
    array('id' => '16', 'desc' => 'MuscleMeds Carnivor, 8lbs', 'price' => 95.99, 'itemImage' => 'images/products/carnivor8lb_1.jpg'), 
    array('id' => '17', 'desc' => 'Optimum Nutrition Gold Standard 100% Casein, 4lbs', 'price' => 70.99, 'itemImage' => 'images/products/casein.jpg'),
    array('id' => '18', 'desc' => 'MuscleTech Mass-Tech, 7lbs', 'price' => 47.99, 'itemImage' => 'images/products/muscletech.png'), 
  );

switch($action) {
    // case 'addToCart':
    //     $itemQuantity = filter_input(INPUT_POST,'quantity', FILTER_SANITIZE_NUMBER_INT);
    //     $_SESSION['cart'] [] = $itemQuantity;
    //     include '../view/checkout.php';
    //     break;
        //Delete an item
        case 'del':
            $itemId = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
            foreach($_SESSION['cart'] as $nItems => $val){
                if ($val == $itemId){
                    echo $nItems;
                    unset($_SESSION['cart'][$nItems]);
                }
            }
            var_dump($itemId);
            var_dump($_SESSION['cart']);
            if (isset($_SESSION['cart']))
            {
                // echo "get is set ";
                $cart = array();
                $total = 0;
                foreach($_SESSION['cart'] as $id)
                {
                    foreach ($items as $product)
                    {
                        if($product['id'] == $id){
                            $cart[] =  $product;
                            $total += $product['price'];
                            // echo $total;
                            break;
                        }
                    }
                }
            }
            include '../view/view-cart.php';
            exit;
            break;
        //Deliver the view Cart page
    case 'viewCart':
        if (isset($_SESSION['cart']))
        {
            // echo "get is set ";
            $cart = array();
            $total = 0;
            foreach($_SESSION['cart'] as $id)
            {
                foreach ($items as $product)
                {
                    if($product['id'] == $id){
                        $cart[] =  $product;
                        $total += $product['price'];
                        // echo $total;
                        break;
                    }
                }
            }
        }
        include '../view/view-cart.php';
        exit;
        break;  
    case 'addItem':
        //Add item to the end of the $_SESSION['cart'] array.
        $_SESSION['cart'][] = $_POST['id'];
        header('Location: /shopping_cart/');
        exit;
        break; 
    case 'checkout':
        if (isset($_SESSION['cart']))
        {
            // echo "get is set ";
            $cart = array();
            $total = 0;
            $tax = 0.93;
            foreach($_SESSION['cart'] as $id)
            {
                foreach ($items as $product)
                {
                    if($product['id'] == $id){
                        $cart[] =  $product;
                        $total += $product['price'];
                        // echo $total;
                        break;
                    }
                }
            }
            $grandTotal = $total + $tax;
        }
        include '../view/checkout.php';
        exit;
        break;
        case 'place-order':
            $cart = array();
            $total = 0;
            $tax = 0.93;
            foreach($_SESSION['cart'] as $id)
            {
                foreach ($items as $product)
                {
                    if($product['id'] == $id){
                        $cart[] =  $product;
                        $total += $product['price'];
                        // echo $total;
                        break;
                    }
                }
            }
            $grandTotal = $total + $tax;

            $firstName = filter_input(INPUT_POST,'clientName',FILTER_SANITIZE_STRING);
            $lastName = filter_input(INPUT_POST,'clientLname',FILTER_SANITIZE_STRING);
            $address1 = filter_input(INPUT_POST,'address1',FILTER_SANITIZE_STRING);
            $address2 = filter_input(INPUT_POST,'address2',FILTER_SANITIZE_STRING);
            $city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_STRING);
            $state = filter_input(INPUT_POST,'state',FILTER_SANITIZE_STRING);
            $telephone = filter_input(INPUT_POST,'telephone',FILTER_SANITIZE_NUMBER_INT);
            $clientEmail = filter_input(INPUT_POST,'clientEmail',FILTER_SANITIZE_EMAIL);

            $clientEmail = checkEmail($clientEmail);

    //Check for missing data
    if (empty($firstName) || empty($lastName) || empty($address1) || empty($city) || empty($state) || empty($telephone) || empty($clientEmail)){
        $message = '<p><span class="warning">Please provide information for all empty form fields.</span></p>';
        include '../view/checkout.php';
        exit;
    }
    else {
        $_SESSION['message'] = '<p><span class="success">Hey '.$firstName.'. Your order is confirmed.</span></p>';
        
        include '../view/confirmation-view.php';
        exit;
    }
            
}




?>