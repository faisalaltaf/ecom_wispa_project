<?php require "top.php";
require "config.php";


$order_id=mysqli_real_escape_string($conn,$_GET['id']);

if(!isset($_SESSION['LOGIN_USER'])){
    ?> <script>
    window.location.href="index.php";
    </script>
    <?php
        }

    ?>
    <!-- <script>window.location.href='index.php'</script> -->




    <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-remove"><span class="nobr">Product Name</span></th>
                                              
                                                <th class="product-name"><span class="nobr">Product Image </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Price </span></th>
                                                <th class="product-price"><span class="nobr"> QTY </span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Total Price</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php  $uid = $_SESSION['LOGIN_ID'];
                                 
									$result=mysqli_query($conn,"SELECT distinct(order_detail.id) ,order_detail.*,product.product_name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");
                                    
                                    $total_price=0;
                                        while($row=mysqli_fetch_assoc($result)){
$total_price;
                                        
                                        $total_price = $total_price+($row['qty']*$row['price']);
                                        ?>
                                            <tr>
                                                <td class="product-remove"><?php echo $row['product_name'] ?></td>
                                                
                                                <td class="product-thumbnail"><img src="media/product/<?php echo $row['image'];?>"></td>
                                                <td class="product-name"><?php echo $row['price'] ?></td>
                                                <td class="product-name"><?php echo $row['qty'] ?></td>
                                                <td class="product-name"><?php echo $row['qty']*$row['price'] ?></td>
                                              
                                            </tr>
                                          <?php  } ?>
                                          <tr>
                                          <td colspan="3">
                                          </td> 
                                          <td class="product-name">Total Price</td>
                                          <td class="product-name"><?php echo $total_price; ?></td>
                                          
                                          
                                          </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6">
                                                    <div class="wishlist-share">
                                                        <h4 class="wishlist-share-title">Share on:</h4>
                                                        <div class="social-icon">
                                                            <ul>
                                                                <li><a href="#"><i class="zmdi zmdi-rss"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-vimeo"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-tumblr"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require "footer.php" ?>