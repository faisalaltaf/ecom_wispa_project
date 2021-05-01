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

            <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">products</th>
                                            <th class="product-name">name of products</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                            foreach($_SESSION['cart'] as $key=>$val){

                            $productArr= get_product($conn,'','',$key);
                            $pname=$productArr[0]['product_name'];
                            $rmp= $productArr[0]['rmp'];
                            $price= $productArr[0]['price'];
                            $image= $productArr[0]['image'];
                            $qty=$val['qty'];

                                   $total = $qty*$price; 
                                    ?>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="media/product/<?php echo $productArr['0']['image'];  ?>"></a></td>
                                            <td class="product-name"><a href="#"><?php echo $pname ?></a>
                                                <!-- <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul> -->
                                            </td>
                                            <td class="product-price"><span class="amount"><?php echo $rmp ?></span></td>
                                            <td class="product-quantity"><input type="number" id="<?php echo $key?>qty" value="<?php echo $qty?>"><br><span><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">update</a></span></td>
                                            <td class="product-subtotal"> <?php echo  $total ?> </td>
                                            <td class="product-remove"><a href="javascript:void(0)" onclick="manage_cart('<?php echo $key ?>','remove')"><i class="icon-trash icons"></i></a></td>
                                        </tr>
                                        <?php }  ?> 
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        <div class="buttons-cart">
                                            <a href="#">Continue Shopping</a>
                                        </div>
                                        <div class="buttons-cart checkout--btn">
                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key?>','update')">update</a>
                                            <a href="#">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="ht__coupon__code">
                                        <span>enter your discount code</span>
                                        <div class="coupon__box">
                                            <input type="text" placeholder="">
                                            <div class="ht__cp__btn">
                                                <a href="#">enter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                    <div class="htc__cart__total">
                                        <h6>cart total</h6>
                                        <div class="cart__desk__list">
                                            <ul class="cart__desc">
                                                <li>cart total</li>
                                                <li>tax</li>
                                                <li>shipping</li>
                                            </ul>
                                            
                                            <ul class="cart__price">
                                                </php><li><?php echo  $total ?> </li>
                                                <li><?php echo $x=50;  ?></li>
                                                <li><?php echo $y=150;  ?></li>
                                            </ul>
                                        </div>
                                        <div class="cart__total">
                                            <span>order total</span>
                                            <span><?php echo $total+$x+$y;  ?></span>
                                        </div>
                                        <ul class="payment__btn">
                                            <li class="active"><a href="#">payment</a></li>
                                            <li><a href="#">continue shopping</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>

<?php require "footer.php" ?>