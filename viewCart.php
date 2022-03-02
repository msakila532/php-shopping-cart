<?php

//if(!empty($_SESSION['cart'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $tot_price=0;
    $tot_price=$price*$qty;
 //}
//  else{

//     $id=$name="NA";
//     $price=0.00;
//     $qty=$tot_price=0;
// }

    echo "<div class='container'>
     <div class='row'>
     <div class='table-responsive mt-2'>
     <table class='table table-bordered table-striped text-center'>
     <tr>
       <td colspan='7'><h4 class='text-center text-info m-0'>Products in your Cart</h4></td>
     </tr>
     <tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th><th>Total Price</th>
     <th><a href='' class='badge-danger badge p-1' onclick='return confirm('Are you sure want to clear All?');'><i class='fasfa-trash'></i> &nbsp;&nbsp;Clear Cart</a></th></tr>
     <tr>
       <td>{$id}</td>
       <td>{$name}</td>
       <td>{$price}</td>
       <td><span class='plus button'>+</span><input type='text' name='quantity' id='quantity' value='{$qty}' maxlength=''6'/>
       <span class='min button'>-</span></td>
       <td>{$tot_price}</td>
       <td style='ext-align:center;'><a href='removeCart.php?action=remove&code=<?php echo $id; ?>' class='btnRemoveAction'>Remove</a></td>
       </tr>
     </table>
     </div>
     </div>
</div>";








?>