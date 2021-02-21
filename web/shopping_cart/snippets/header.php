<img class="logo" src="/shopping_cart/images/LogoMakr-9DnEKv.png" alt="Culturismo">
<h1><a href="/shopping_cart/index.php">Max Nutrition</a></h1>
<!-- <q>Boost your workouts with the best supplements</q> -->
<i id="search_icon" class="material-icons">search</i>
<input type="search" name="searchByPro" id="searchByPro">
<h2 class="pro_list">Products</h2>
<i id="down_icon" id="cart_icon" class="material-icons">keyboard_arrow_down</i>
<h2 class="work_list">Workouts</h2>
<i id="down_icon2" id="cart_icon" class="material-icons">keyboard_arrow_down</i>
<div class="cart_action_store">
<div class="counter"><?php echo count($_SESSION['cart']);?></div>
<a style="color:#000;" href="/shopping_cart/cart-storage?action=viewCart" title="View Cart"><i id="cart_icon" class="material-icons">shopping_cart</i></a>
</div>