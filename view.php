<?php 
session_start();
include "config.php";
?>
<html>
    <head>
        <?php include "head.php"?>
        <script type="text/javascript" src="form.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Add to Cart in PHP</h1>
                <div class="col-md-4">
                <?php     
                    if(isset($_GET["id"]))
                    {
                        $ID=$_GET["id"];
                        $sql="SELECT id,name,image,price,code FROM tblproduct WHERE ID=$ID";
                        $res=$conn->prepare($sql);
                        $res->execute();               
                        $row=$res->fetch(PDO::FETCH_ASSOC);
                       //echo "<pre>"; print_r($row); echo "</pre>";
                       echo " 
                       <form action='' id='cartForm' method='post'>
                       <table class='table table-bordered'>
                       <tr><td colspan='2'><img src={$row['image']} class='img-responsive image-resize'></td></tr>
                       <tr><td><strong>NAME</strong></td><td>{$row['name']}</td></tr>
                       <tr><td><strong>CODE</strong></td><td>{$row['code']}</td></tr>
                       <tr><td><strong>PRICE</strong></td><td>{$row['price']}</td></tr>
                       <tr><td>Enter Qty</td><td>
                         <input type='text' name='qty'  required>
                         <input type='hidden' name='id' value='{$row["id"]}'>
                         <input type='hidden' name='name' value='{$row["name"]}'>
                         <input type='hidden' name='price' value='{$row["price"]}'>
                       </td></tr>
                       <tr><td></td><td colspan='2'><input type='submit'class='btn btn-success' name='addCart' value='Add Cart'></td></tr>
                       </table></form>
                       <span class='error' style='display:none'> Please Enter Valid Data</span>
                       <span class='success' style='display:none'> Form Submitted Success</span>
                    ";
                    }
                    else
                    {
                        header("location:index.php");
                    }
                ?>
                </div><hr>
                <div>
                    <?php
                    include "viewCart.php";
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>