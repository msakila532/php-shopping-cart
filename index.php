<?php include "config.php";?>
<html>
    <head>
        <?php include "head.php"?>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Product List</h1><hr>
                <?php
                    $sql="SELECT id,name,image,price FROM tblproduct";
                    $res=$conn->prepare($sql);
                    $res->execute();               
                    while($row=$res->fetch(PDO::FETCH_ASSOC))
                    {
                        echo '
                        <div class="col-sm-4 col-lg-3 col-md-3 text-center divplp">
                        <img src='.$row['image'].' alt="" class="img-responsive image-resize" >
                        <p><strong><a href="#">'.$row['name'].'</a></strong></p>
                        <h4 class="text-danger">RS.'.$row['price'].'</h4>
                        <p><a href="view.php?id='.$row['id'].'" class="btn btn-success">View Details</a><p>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </body>
</html>