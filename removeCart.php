<?php
if(empty($_SESSION['cart'])){
    $_SESSION['cart']=array();
    header('location:view.php');
}
?>