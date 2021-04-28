<?php require "top.php";
require "config.php";
require "func1.php";

$cat_id = mysqli_real_escape_string($conn, $_GET['id']);
if($cat_id>0){
    $get_product = get_product($conn, '', $cat_id);
    
}else{
header("Location: {$hostname}/index.php");
}
    ?>
    <!-- <script>window.location.href='index.php'</script> -->




<div class="body__overlay"></div>
<!-- Start Offset Wrapper -->
<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search__inner">
                        <form action="#" method="get">
                            <input placeholder="Search here... " type="text">
                            <button type="submit"></button>
                        </form>
                        <div class="search__close__btn">
                            <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Popap -->
    <!-- Start Cart Panel -->

    <!-- End Cart Panel -->
</div>
<!-- End Offset Wrapper -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(asset_front/images/bg/4.jpg) no-repeat scroll center center / cover ;">
    <div class="ht__bradcaump__wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Product Grid -->
<section class="htc__product__grid bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="htc__product__rightidebar">

                    <!-- Start Product View -->
                    <div class="row">
                   
<?php 
if(count($get_product)>0){

 ?> 
                        <div class="shop__grid__view__wrap">
                            <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                <!-- Start Single Product -->
                                <?php $get_product = get_product($conn, '', $cat_id);
                                foreach ($get_product as $list) {
                                ?>


<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="product.php?id=<?php echo $list['id'] ?>">
                                        <img src="media/product/<?php echo $list['image']; ?> "/>
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <!-- <ul class="product__action">
                                            <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="cart.html"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul> -->
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="product-details.html"><?php echo $list['product_name'] ?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"><?php echo $list['rmp'] ?></li>
                                            <li><?php echo $list['price'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                           
                                <!-- End Single Product -->


                            </div>
                            <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                                <div class="col-xs-12">
                                    <div class="ht__list__wrap">
                                        <!-- Start List Product -->
                                        <div class="ht__list__product">
                                            <div class="ht__list__thumb">
                                                <a href="product-details.html"><img src="images/product-2/pro-1/1.jpg" alt="product images"></a>
                                            </div>
                                            <div class="htc__list__details">
                                                <h2><a href="product-details.html">Product Title Here </a></h2>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                                <ul class="rating">
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <div class="fr__list__btn">
                                                    <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List Product -->
                                        <!-- Start List Product -->
                                        <div class="ht__list__product">
                                            <div class="ht__list__thumb">
                                                <a href="product-details.html"><img src="images/product-2/pro-1/2.jpg" alt="product images"></a>
                                            </div>
                                            <div class="htc__list__details">
                                                <h2><a href="product-details.html">Product Title Here </a></h2>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                                <ul class="rating">
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <div class="fr__list__btn">
                                                    <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List Product -->
                                        <!-- Start List Product -->
                                        <div class="ht__list__product">
                                            <div class="ht__list__thumb">
                                                <a href="product-details.html"><img src="images/product-2/pro-1/3.jpg" alt="product images"></a>
                                            </div>
                                            <div class="htc__list__details">
                                                <h2><a href="product-details.html">Product Title Here </a></h2>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                                <ul class="rating">
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <div class="fr__list__btn">
                                                    <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List Product -->
                                        <!-- Start List Product -->
                                        <div class="ht__list__product">
                                            <div class="ht__list__thumb">
                                                <a href="product-details.html"><img src="images/product-2/pro-1/4.jpg" alt="product images"></a>
                                            </div>
                                            <div class="htc__list__details">
                                                <h2><a href="product-details.html">Product Title Here </a></h2>
                                                <ul class="pro__prize">
                                                    <li class="old__prize">$82.5</li>
                                                    <li>$75.2</li>
                                                </ul>
                                                <ul class="rating">
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                    <li class="old"><i class="icon-star icons"></i></li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisLorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqul Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                <div class="fr__list__btn">
                                                    <a class="fr__btn" href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List Product -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else {
                            echo "<h2> Not Found </h2> ";
                        } ?>
                    </div>

                    <!-- End Product View -->
                </div>
                <!-- Start Pagenation -->

                <!-- End Pagenation -->
            </div>

        </div>
    </div>
</section>
<!-- End Product Grid -->
<!-- Start Brand Area -->

<!-- End Brand Area -->
<!-- Start Banner Area -->

<!-- End Banner Area -->
<!-- End Blog Area -->
<!-- End Banner Area -->
<!-- Start Footer Area -->
<?php require "footer.php" ?>