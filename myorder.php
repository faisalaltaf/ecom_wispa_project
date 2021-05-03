<?php require "top.php";
require "config.php";
require "func1.php";



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
                                                <th class="product-remove"><span class="nobr">Order Id</span></th>
                                                <th class="product-thumbnail">Order Date</th>
                                                <th class="product-name"><span class="nobr">Address </span></th>
                                                <th class="product-price"><span class="nobr"> Payment Type </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
                                                <th class="product-add-to-cart"><span class="nobr">Order Status</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php   $uid = $_SESSION['LOGIN_ID'];
											$result=mysqli_query($conn,"SELECT `order`.*,order_status.name as order_status from `order`,`order_status` where `order`.user_id='$uid' and order_status.id=`order`.order_status");
                                     
                                    
                                        while($row=mysqli_fetch_assoc($result)){

                                        
                                        
                                        ?>
                                            <tr>    
                                                <td class="product-remove"><a href="myorder_details.php?id=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a></td>
                                                
                                                <td class="product-name"><a href="#"><?php echo $row['added_on'] ?></td>
                                                <td class="product-name"><a href="#"><?php echo $row['address'] ?><br>
                                                <?php echo $row['city'] ?><br>
                                                <?php echo $row['pincode'] ?></td>
                                                <td class="product-name"><a href="#"><?php echo $row['payment_type'] ?></td>
                                                <td class="product-name"><a href="#"><?php echo $row['payment_status'] ?></td>
                                                <td class="product-name"><a href="#"><?php echo $row['order_status'] ?></td>
                                              
                                            </tr>
                                          <?php  } ?>
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