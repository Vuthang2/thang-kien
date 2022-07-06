<td class="tdmin">
   <?php
   $id = $_GET['id'];
   $cart = $_SESSION['cart'];
   $_SESSION['cart'] = str_replace($id, 0, $cart);
   header('location:index.php?mod=cart');
   ?>
</td>