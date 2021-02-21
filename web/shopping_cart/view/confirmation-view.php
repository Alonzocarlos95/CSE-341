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
       <?php if (isset($_SESSION['message'])){
           echo $_SESSION['message'];
       } ?>
       <section class="address-info">
       <h2>Shipping & Billing Address</h2>
       <ul>
           <li><span><?php echo $address1; ?><span></li>
           <li><span><?php echo $city; ?><span></li>
           <li><span><?php echo $state; ?><span></li>
           <li><span><?php echo $telephone; ?><span></li>
       </ul>
       </section>
       <section class="order-details">
       <table>
            <thead>
            <tr>
            <th colspan="3">Order Details</th>
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
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
       </section>
    </main>
    <!-- <?php ini_set("display_errors",1);
       error_reporting(E_ALL);
       var_dump($_SESSION['cart']); ?> -->
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>