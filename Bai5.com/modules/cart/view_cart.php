<<td class="tdmain">
   <?php
   $cart = $_SESSION['cart'];
   $str = "SELECT * FROM tbl_product WHERE id in ($cart)";
   $result = mysqli_query($conn, $str);
   $total = 0;
   ?>
   <table border="1px solid black">
      <tbody>
         <tr>
            <td>Ten san pham</td>
            <td>Gia</td>
         </tr>
         <?php
         while ($rows = mysqli_fetch_array($result)) {
            $total = $total + $rows['price'];
         ?>
            <tr>
               <td><?php echo $rows['name']; ?></td>
               <td>
                  <font color="red"><?php echo $rows['price']; ?></font>
               </td>
               <td><a href="index.php?mod=cart&act=del_cart&id=<?php echo $rows['id']; ?>">[Xoá]</a></td>
            </tr>
         <?php
         }

         ?>
      </tbody>
      <tr>
         <td></td>
         <td>
            <?php $t = number_format(($total));
            echo "Tong tien";
            ?>
         </td>
         <td><?php echo " $t đ"; ?></td>
      </tr>
   </table>
</td>