<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Shopping Cart | Home</title>
    <!--CSS References-->
    <link rel="stylesheet" href="styles/large.css" media="screen">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

</head>
<!-- <?php phpinfo(); ?> -->
<body>
    <header>
    <?php require $_SERVER['DOCUMENT_ROOT'].'/shopping_cart/snippets/header.php'; ?>
    </header>
    <main>
        <div id="checkoutModal" class="modal">
            <!-- <div class="modal-content">
                <span class="close">&times;</span>
                <form action="/shopping_cart/cart-storage/" method="POST">
                <p>Some textx...</p>
                <div class="input-group">
                    <div class="minus increment">-</div>
                    <input type="number" class="number" name="quantity" value="1" min="1" max="20">
                    <div class="add increment">+</div>
                </div>
                <input type="submit" name="submitCart" value="Add to Cart" id="submitProd">
                <input type="hidden" name="action" value="addToCart">
                </form>
            </div> -->
        </div>

        <div class="container">
           <?php foreach($items as $item) : ;?>
           <div class="p1">
                <a href="#">
                    <img src=<?php echo $item['itemImage'];?> alt="casein">
                </a>
                <h3 class="productName"><?php echo $item['desc'];?></h3>
                <p><span class="price">$<?php echo number_format($item['price'],2);?></span></p>
                <div class="buttons">
                <!-- <input type="submit" name="add" class="add_btn" value="Add to Cart" id="<?php echo $item['id'];?>"> -->
                <form action="/shopping_cart/cart-storage/" method="POST">
                <input type="hidden" name="id" value="<?php echo $item["id"] ; ?>">
                <!-- <input type="submit" name="<?php echo 'add'. $item['id']?>" class="add_btn" value="Add to Cart" onclick="openForm(this.parentNode.innerHTML)"> -->
                <input type="submit" name="AddButton1" class="add_btn" value="Add to Cart" onclick="openForm(this.parentNode.innerHTML)">
                <input type="hidden" name="action" value="addItem">
                </form>
                <input type="button" name="details" value="View Product">
                <!-- <button style="background-color: #ff0000;border:1px solid black;" class="quick_look"
                data-id="<?php echo $item["id"] ; ?>">Quick Look</button> -->
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <!-- <table>
            <tr>
            <th>Item Description</th>
            <th>Price</th>
            </tr>
            <?php foreach($items as $item) { ?>
            <tr>
            <td><?php echo $item['desc'] ;?></td>
            </tr>
            <tr>
            <td><?php echo $item['id'] ;?></td>
            </tr>
            <?php } ;?>
            </table> -->
    </main>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>