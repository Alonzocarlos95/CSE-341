<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Shopping Cart | Home</title>
    <!--CSS References-->
    <link rel="stylesheet" href="../styles/large.css" media="screen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head>
<body>

    <header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/shopping_cart/snippets/header.php'; ?>
    </header>
    <main class="main-page">
        <?php if (count($_SESSION['cart']) > 0): ?>
            <h1>Your Shopping Cart</h1>
            <!-- <?php echo $itemId;?> -->
            <div class="container-check">
            <table>
            <thead>
            <tr>
            <th>Image</th>
            <th>Item Description</th>
            <th>Price</th>
            <th>Remove Item</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
            <td style="border: none;"></td>
            <td style="font-family:'Crimson Text', serif; text-align: center; font-weight: bold; font-size: 20px;">Order Total: </td>
            <td style="font-family:'Crimson Text', serif; text-align: center; font-weight: bold; font-size: 20px;color: #FF0000;"><?php echo number_format($total, 2); ?></td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach($cart as $item):  ?>
            <tr>
            <td><img src="../<?php echo $item['itemImage']?>"  alt='<?php echo $item['desc'];?>'></td>
            <td><?php echo $item['desc'];?></td>
            <td><?php echo number_format($item['price'],2); ?></td>
            <td><a href="/shopping_cart/cart-storage?action=del&id=<?php echo $item['id'];?>" title="Delete Item from the cart."><i id="deleteItemBtn" class="material-icons">delete</i></a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>

        
        
        <section class="checkout-items">
            <div class="square-check">
                <form action="/shopping_cart/cart-storage/" method="GET">
                <input type="submit" name="check-btn" value="Proceed to Checkout">
                <input type="hidden" name="action" value="checkout">
                </form>
            </div>
            <div class="cards-logo">
                <img src="/shopping_cart/images/credit-cards/visa.png" alt="Visa">
                <img src="/shopping_cart/images/credit-cards/tarjeta-mastercard.png" alt="Master Card">
                <img src="/shopping_cart/images/credit-cards/paypal.png" alt="Pay Pal">
                <img src="/shopping_cart/images/credit-cards/american-express.png" alt="American Express">
            </div>
        </section>
            </div>
        <?php else:       
            echo '<h2>Your shopping cart is empty</h2>';
            echo '<p><span>You have no items in your shopping cart.</span></p>';
            echo '<p><span><a href="">Please continue shopping.</a></span></p>';
        endif;?>
    </main>
    <?php ini_set("display_errors",1);
       error_reporting(E_ALL);
       var_dump($_SESSION['cart']); ?>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>