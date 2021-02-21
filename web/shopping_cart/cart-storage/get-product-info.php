<?php $itemId = $_GET["id"]; ?>

<div class="preview-image">
            <img src="<?php echo [$itemId]["product_image"] ; ?>" />
        </div>
<div class="product-info">
                <div class="product-title"><?php echo [$itemId]["desc"] ; ?></div>
                <ul>
