<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Checkout | Order</title>
    <!--CSS References-->
    <link rel="stylesheet" href="../styles/large.css" media="screen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
<header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/shopping_cart/snippets/header.php'; ?>
    </header>
<main>
    <h1 class="check-header">CHECKOUT</h1>
    <div class="container-ship">
        <div class="shipForm">
            <form action="" method="POST">
                <label for="clientName">First Name*</label>
                <input type="text" name="clientName" required>
                <label for="clientLname">Last Name*</label>
                <input type="text" name="clientLname" required>
                <label for="address1">Address Line 1*</label>
                <input type="text" name="address1" required>
                <label for="address2">Address Line 2</label>
                <input type="text"  class="address2" name="address2">
                <label for="city">City*</label>
                <input type="text" name="city" required>
                <label for="state">State*</label>
                <input type="text" name="state" required>
                <label for="telephone">Phone Number*</label>
                <input type="number" name="telephone" required>
                <label for="clientEmail">Email Address*</label>
                <input type="email" name="clientEmail" required>
                <input type="submit" id="submit-order" name="submit-order" value="Place order">
                <input type="hidden" name="action" value="place-order">
            </form>
        </div>
        <section class="summary-checkout">
            <div class="customer-order">
                <h2>Summary</h2>
                <ul>
                    <li>
                        <span>Subtotal:</span>
                        <span class="commerce-price">$<?php echo number_format($total, 2); ?></span>
                    </li>
                    <li>
                        <span>Shipping:</span>
                        <span class="commerce-price">$0.00</span>
                    </li>
                    <li><span>Tax:</span>
                    <span class="commerce-price">$<?php echo number_format($tax,2); ?></span>
                    </li>
                    <li><span>Grand Total</span>
                     <span class="commerce-price">$<?php echo number_format($grandTotal, 2); ?></span>
                    </li>
                </ul>
                <!-- <input type="submit" id="submit-order" name="submit-order" value="Return to Cart View">
                <input type="hidden" name="action" value="viewCart"> -->
            </div>
        </section>
    </div>
</main>
</body>
</html>