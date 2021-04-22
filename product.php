<?php require "top.php";
require "config.php";
require "func1.php";

$product_id= mysqli_real_escape_string($conn, $_GET['id']);
$get_product = get_product($conn,'','',$product_id);
// print_r($get_product);
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(asset_front/images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
        <div style="padding-top: 40px;" class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <a class="breadcrumb-item" href="category.php?id=<?php echo $get_product[0]['categories_id'] ?>"><?php echo $get_product[0]['categories'] ?></a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Products</span>
                                </nav>
                            </div>
                        </div>
<section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                        <img src="media/product/<?php echo $get_product['0']['image'];  ?>" alt="product images">
                                        </div>
                                      
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                                <!-- Start Small images -->
                                
                                <!-- End Small images -->
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2><?php echo $get_product['0']['product_name'] ?></h2>
                                <h6>Model: <span><?php  ?></span></h6>
                                <ul class="rating">
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                </ul>
                                <ul class="pro__prize">
                                    <li class="old__prize"><?php  ?></li>
                                    <li><?php $get_product['0']['rmp'] ?></li>
                                </ul>
                                <p class="pro__info">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.  Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan</p>
                                <div class="ht__pro__desc">
                                    <div class="sin__desc">
                                        <p><span>Availability:</span> In Stock</p>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>color:</span></p>
                                        <ul class="pro__color">
                                            <li class="red"><a href="#">red</a></li>
                                            <li class="green"><a href="#">green</a></li>
                                            <li class="balck"><a href="#">balck</a></li>
                                        </ul>
                                        <div class="pro__more__btn">
                                            <a href="#">more</a>
                                        </div>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>size</span></p>
                                        <select class="select__size">
                                            <option>s</option>
                                            <option>l</option>
                                            <option>xs</option>
                                            <option>xl</option>
                                            <option>m</option>
                                            <option>s</option>
                                        </select>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>Categories:</span></p>
                                        <ul class="pro__cat__list">
                                            <li><a href="#">Fashion,</a></li>
                                            <li><a href="#">Accessories,</a></li>
                                            <li><a href="#">Women,</a></li>
                                            <li><a href="#">Men,</a></li>
                                            <li><a href="#">Kid,</a></li>
                                            <li><a href="#">Mobile,</a></li>
                                            <li><a href="#">Computer,</a></li>
                                            <li><a href="#">Hair,</a></li>
                                            <li><a href="#">Clothing,</a></li>
                                        </ul>
                                    </div>
                                    <div class="sin__desc align--left">
                                        <p><span>Product tags:</span></p>
                                        <ul class="pro__cat__list">
                                            <li><a href="#">Fashion,</a></li>
                                            <li><a href="#">Accessories,</a></li>
                                            <li><a href="#">Women,</a></li>
                                            <li><a href="#">Men,</a></li>
                                            <li><a href="#">Kid,</a></li>
                                        </ul>
                                    </div>

                                    <div class="sin__desc product__share__link">
                                        <p><span>Share this:</span></p>
                                        <ul class="pro__share">
                                            <li><a href="#" target="_blank"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="https://www.facebook.com/Furny/?ref=bookmarks" target="_blank"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-linkedin icons"></i></a></li>

                                            <li><a href="#" target="_blank"><i class="icon-social-pinterest icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
<?php require "footer.php" ?>