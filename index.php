<?php
include('myclass/myclass.php');
$p = new Ecom();
$Products = $p->getProducts();
$categorys = $p->getcategorys();
?>


<!DOCTYPE html>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Galio - Shop Thương Mại Điện Tử</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/skin-default.css" rel="stylesheet" id="galio-skin">
</head>

<body>

    <!-- color switcher start -->
    <div class="color-switcher">
        <div class="color-switcher-inner">
            <div class="switcher-icon">
                <i class="fa fa-cog fa-spin"></i>
            </div>

            <div class="switcher-panel-item">
                <h3>Color Schemes</h3>
                <ul class="nav flex-wrap colors">
                    <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top" title="Red"></li>
                    <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>
                    <li class="soft-green" data-color="soft-green" data-toggle="tooltip" data-placement="top" title="Soft-Green"></li>
                    <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top" title="Sky-Blue"></li>
                    <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>
                    <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>
                </ul>
            </div>

            <div class="switcher-panel-item">
                <h3>Layout Style</h3>
                <ul class="nav layout-changer">
                    <li><button class="btn-layout-changer active" data-layout="wide">Wide</button></li>
                    <li><button class="btn-layout-changer" data-layout="boxed">Boxed</button></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Pattern</h3>
                <ul class="nav flex-wrap bgbody-style bg-pattern">
                    <li><img src="assets/img/bg-panel/bg-pettern/1.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/2.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/3.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/4.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/5.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/6.png" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="assets/img/bg-panel/bg-img/01.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/02.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/03.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/04.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/05.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/06.jpg" alt="Images"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color switcher end -->

    <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    info@website.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    0123456789
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Tài Khoản
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="my-account.html">Tài Khoản</a>
                                                    <a class="dropdown-item" href="login-register.html"> Đăng Nhập</a>
                                                    <a class="dropdown-item" href="login-register.html">Đăng Ký</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Sản phẩm yêu thích</a>
                                        </li>
                                        <li>
                                            <a href="cart.php">Giỏ hàng của tôi</a>
                                        </li>
                                        <li>
                                            <a href="#">thanh toán</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area pt-20 pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="index.html">
                                    <img src="assets/img/logo/logo.png" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Giờ làm việc</h5>
                                            <span>Thứ 2-7 8.00-22.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Miễn Phí Giao Hàng</h5>
                                            <span>Đơn hàng trên 500VNĐ</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Hoàn tiền 100%</h5>
                                            <span>Trong vòng 30 ngày </span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <div class="header-middle-block">
                                    <div class="header-middle-searchbox">
                                        <input type="text" placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="header-mini-cart">
                                        <div class="mini-cart-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-notification">2</span>
                                        </div>
                                        <div class="cart-total-price">
                                            <span>Tổng tiền</span>
                                            500.000VNĐ
                                        </div>
                                        <ul class="cart-list">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">Sản Phẩm mẫu</a></h4>
                                                    <span>2.000.000VNĐ</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">Sản Phẩm Ảo</a></h4>
                                                    <span>1.000.000VNĐ</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li class="mini-cart-price">
                                                <span class="subtotal">Tổng Phụ : </span>
                                                <span class="subtotal-price">4.000.000VNĐ</span>
                                            </li>
                                            <li class="checkout-btn">
                                                <a href="#">Thủ tục thanh toán</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->

            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner">
                                <div class="category-toggle-wrap">
                                    <div class="category-toggle">
                                        Loại
                                        <div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <nav class="category-menu hm-1">
                                        <ul>
                                        <?php foreach($categorys as $category){  ?>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-desktop"></i>
                                                   <?php echo $category['CategoryName'] ?></a></li>
                                                   <?php } ?>

                                                </ul><!-- Mega Category Menu End -->
                                        
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="#"><i class="fa fa-home"></i>Trang Chủ<i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">Home version 01</a></li>
                                                    <li><a href="index-2.html">Home version 02</a></li>
                                                    <li><a href="index-3.html">Home version 03</a></li>
                                                    <li><a href="index-4.html">Home version 04</a></li>
                                                </ul>
                                            </li>
                                            <li class="static"><a href="#">Trang<i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">column 01</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                    column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                    column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 02</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.html">product details
                                                                    group</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 03</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 04</a>
                                                        <ul>
                                                            <li><a href="my-account.html">my-account</a></li>
                                                            <li><a href="login-register.html">login-register</a></li>
                                                            <li><a href="about-us.html">about us</a></li>
                                                            <li><a href="contact-us.html">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-left-sidebar-3-col.html">left
                                                                    sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar-3-col.html">grid right
                                                                    sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                    column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                    column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-list-left-sidebar.html">shop list left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">shop list right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-list-full.html">shop list full width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.html">product details
                                                                    group</a></li>
                                                            <li><a href="product-details-box.html">product details box
                                                                    slider</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                    <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                    <li><a href="blog-full-2-column.html">blog full 2 column</a></li>
                                                    <li><a href="blog-full-3-column.html">blog full 3 column</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-details-audio.html">blog details audio</a></li>
                                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                                    <li><a href="blog-details-image.html">blog details image</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.html">Liên hệ chúng tôi</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->

        <!-- hero slider start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-wrapper-area">
                        <div class="hero-slider-active hero__1 slick-dot-style hero-dot">
                            <div class="single-slider" style="background-image: url(assets/img/slider/slider11_bg.jpg);">
                                <div class="container p-0">
                                    <div class="slider-main-content">
                                        <div class="slider-content-img">
                                            <img src="assets/img/slider/slider11_lable1.png" alt="">
                                            <img src="assets/img/slider/slider11_lable2.png" alt="">
                                            <img src="assets/img/slider/slider11_lable3.png" alt="">
                                        </div>
                                        <div class="slider-text">
                                            <div class="slider-label">
                                                <img src="assets/img/slider/slider11_lable4.png" alt="">
                                            </div>
                                            <h1>headphones az12</h1>
                                            <p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-slider" style="background-image: url(assets/img/slider/slider12_bg.jpg);">
                                <div class="container p-0">
                                    <div class="slider-main-content">
                                        <div class="slider-content-img">
                                            <img src="assets/img/slider/slider11_lable1.png" alt="">
                                            <img src="assets/img/slider/slider11_lable2.png" alt="">
                                            <img src="assets/img/slider/slider11_lable3.png" alt="">
                                        </div>
                                        <div class="slider-text">
                                            <div class="slider-label">
                                                <img src="assets/img/slider/slider11_lable4.png" alt="">
                                            </div>
                                            <h1>samson s90</h1>
                                            <p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->

        <!-- home banner area start -->
        <div class="banner-area mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 order-1">
                        <div class="img-container img-full fix imgs-res mb-sm-30">
                            <a href="#">
                                <img src="assets/img/banner/banner_left.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 order-sm-3">
                        <div class="img-container img-full fix mb-30">
                            <a href="#">
                                <img src="assets/img/banner/banner_static_top1.jpg" alt="">
                            </a>
                        </div>
                        <div class="img-container img-full fix mb-30">
                            <a href="#">
                                <img src="assets/img/banner/banner_static_top2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 order-2 order-md-3">
                        <div class="img-container img-full fix">
                            <a href="#">
                                <img src="assets/img/banner/banner_static_top3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- home banner area end -->

        <!-- page wrapper start -->
        <div class="page-wrapper pt-6 pb-28 pb-md-6 pb-sm-6 pt-xs-36">
            <div class="container">
                <div class="row">
                    <!-- start home sidebar -->
                    <div class="col-lg-3">
                        <div class="home-sidebar">
                            <!-- hot deals area start -->

                            <div class="main-sidebar hot-deals-wrap mb-30">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>hot deals</h3>
                                    <div class="slick-append"></div>
                                </div> <!-- section title end -->
                                <div class="deals-carousel-active slick-padding slick-arrow-style">
                                    <!-- product single item start -->
                                    <?php foreach($Products as $product) { ?>
                                    <div class="product-item fix">
                                        <div class="product-thumb">
                                             <a href="#">
                                                <img src="assets/img/<?php echo $product['avatar'] ?>" class="img-pri" alt="">
                                                <img src="assets/img/<?php echo $product['gallery_1'] ?>" class="img-sec" alt="">
                                            </a>
                                            <div class="product-label">
                                                <span>hot</span>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                        data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                            class="fa fa-search"></i></span> </a>
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                        class="fa fa-heart-o"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                        class="fa fa-refresh"></i></a>
                                                <a href="addcart.php?id=<?php echo $product['ID'] ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product-details.php?product_id=<?php echo $product['ID'] ?>"><?php echo $product["ProductName"]?></a></h4>
                                            <div class="pricebox">
                                                <span class="regular-price"><?php echo number_format($product["UnitPrice"])  ?>VN</span>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- hot deals area end -->

                            <!-- best seller area start -->
                            <div class="main-sidebar category-wrapper mb-24">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>best seller</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <div class="category-carousel-active row" data-row="4">
                                <?php foreach($Products as $product){ ?>
                                    <div class="col">
                                        <div class="category-item">
                                            <div class="category-thumb">
                                                <a href="product-details.php?product_id=<?php echo $product['ID'] ?>">
                                                    <img src="assets/img/product/<?php echo $product['avatar'] ?>" alt="">
                                                </a>
                                            </div>
                                            <div class="category-content">
                                                <h4><a href="product-details.html"><?php echo $product['ProductName'] ?></a></h4>
                                                <div class="price-box">
                                                    <div class="regular-price">
                                                    <?php echo number_format($product['UnitPrice']) ?>VNĐ
                                                    </div>
                                                    <div class="old-price">
                                                        <del>5,000,000</del>
                                                    </div>
                                                </div>
                                                <div class="ratings">
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span class="good"><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <div class="pro-review">
                                                        <span>1 review(s)</span>    
                                                          </div>
                                                        </div>
                                                      </div>
                                                     </div> 
                                                  </div> 
                                                <?php }  ?>
                                            </div>
                                            </div>
                            <!-- best seller area end -->

                            <!-- blog area start -->
                            <div class="main-sidebar blog-area mb-24">
                                <div class="section-title-2 d-flex justify-content-between mb-28">
                                    <h3>latest blog</h3>
                                    <div class="category-append"></div>
                                </div> <!-- section title end -->
                                <!-- blog wrapper start -->
                                <div class="blog-carousel-active">
                                    <div class="blog-item">
                                        <div class="blog-thumb img-full fix">
                                            <a href="blog-details.html">
                                                <img src="assets/img/blog/img_blog1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="blog-details.html">post format audio</a></h3>
                                            <div class="blog-meta">
                                                <span class="posted-author">by: admin</span>
                                                <span class="post-date">25 Nov, 2018</span>
                                            </div>
                                            <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa
                                                posuere ac. Quisque dapibus, est ac...</p>
                                        </div>
                                        <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div> <!-- end single blog item -->
                                    <div class="blog-item">
                                        <div class="blog-thumb img-full fix">
                                            <a href="blog-details.html">
                                                <img src="assets/img/blog/img_blog2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                            <h3><a href="blog-details.html">post format image</a></h3>
                                            <div class="blog-meta">
                                                <span class="posted-author">by: admin</span>
                                                <span class="post-date">25 Nov, 2018</span>
                                            </div>
                                            <p>Curabitur sed diam enim. Sed varius faucibus lectus, a scelerisque massa
                                                posuere ac. Quisque dapibus, est ac...</p>
                                        </div>
                                        <a href="blog-details.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div> <!-- end single blog item -->
                                </div>
                                <!-- blog wrapper end -->
                            </div>
                            <!-- blog area end -->

                            <!-- testimonial area start -->
                            <div class="main-sidebar testimonial-area pb-sm-70">
                                <div class="section-title-2 mb-28">
                                    <h3>Clients Say</h3>
                                </div> <!-- section title end -->
                                <div class="testimonial-carousel-active slick-dot-style">
                                    <div class="testimonial-item text-center">
                                        <div class="testimonial-thumb">
                                            <img src="assets/img/testimonial/team_member1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3><a href="#">Elizabeth Taylor</a></h3>
                                            <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                                aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                                sodales ac eu lacus</p>
                                        </div>
                                    </div> <!-- end single testimonial item -->
                                    <div class="testimonial-item text-center">
                                        <div class="testimonial-thumb">
                                            <img src="assets/img/testimonial/team_member2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3><a href="#">Elizabeth Taylor</a></h3>
                                            <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                                aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                                sodales ac eu lacus</p>
                                        </div>
                                    </div> <!-- end single testimonial item -->
                                    <div class="testimonial-item text-center">
                                        <div class="testimonial-thumb">
                                            <img src="assets/img/testimonial/team_member3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-content">
                                            <h3><a href="#">Elizabeth Taylor</a></h3>
                                            <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu
                                                aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum
                                                sodales ac eu lacus</p>
                                        </div>
                                    </div> <!-- end single testimonial item -->
                                </div>
                            </div>
                            <!-- testimonial area end -->

                        </div>
                    </div>
                    <!-- end home sidebar -->

                    <div class="col-lg-9">
                        <!-- featured category area start -->
                        <div class="feature-category-area mt-md-70">
                            <div class="section-title mb-30">
                                <div class="title-icon">
                                    <i class="fa fa-bookmark"></i>
                                </div>
                                <h3>featured</h3>
                            </div> <!-- section title end -->
                            <!-- featured category start -->
                            <div class="featured-carousel-active slick-padding slick-arrow-style">
								<!-- product single item start -->
								<?php foreach($Products as $product){ ?>
                                    <div class="product-item fix">
                                    <div class="product-thumb">
                                        <a href="product-details.php?product_id=<?php echo $product['ID'] ?>">
                                            <img src="assets/img/product/<?php echo $product['avatar'] ?>" class="img-pri" alt="">
                                            <img src="assets/img/product/<?php echo $product['gallery_1'] ?>" class="img-sec" alt="">
                                        </a>
                                        <div class="product-label">	
                                            <span>hot</span>
                                        </div>
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                    data-toggle="tooltip" data-placement="left" title="Quick view"><i
                                                        class="fa fa-search"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                    class="fa fa-heart-o"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                    class="fa fa-refresh"></i></a>
                                            <a href="addcart.php?id=<?php echo $product['ID'] ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.php?product_id=<?php echo $product['ID'] ?>"><?php echo $product['ProductName'] ?></a></h4>
                                        <div class="pricebox">
                                            <span class="regular-price"><?php echo number_format($product['UnitPrice'])  ?>VN</span>
                                            <div class="ratings">
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span class="good"><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <div class="pro-review">
                                                    <span>1 review(s)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php } ?>
                            </div>
                            <!-- featured category end -->
                        </div>
                        <!-- featured category area end -->

                        <!-- banner statistic start -->
                        <div class="banner-statistic pt-28 pb-36">
                            <div class="img-container fix img-full">
                                <a href="#">
                                    <img src="assets/img/banner/banner_static1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- banner statistic end -->

                        <!-- featured category area start -->
                        <div class="feature-category-area">
                            <div class="section-title mb-30">
                                <div class="title-icon">
                                    <i class="fa fa-flask"></i>
                                </div>
                                <h3>New Arrivals</h3>
                            </div> <!-- section title end -->
                            <!-- featured category start -->
                            <div class="featured-carousel-active slick-padding slick-arrow-style">
								<!-- product single item start -->
								<?php foreach($Products as $product){ ?>
									<div class="product-item fix">
										<div class="product-thumb">
											<a href="product-details.php?product_id=<?php echo $product['ID'] ?>">
												<img src="assets/img/product/<?php echo $product['avatar'] ?>" class="img-pri" alt="">
												<img src="assets/img/product/<?php echo $product['gallery_1'] ?>" alt="">
											</a>
											<div class="product-label">
												<span>new</span>
											</div>
											<div class="product-action-link">
												<a href="#" data-toggle="modal" data-target="#quick_view"> <span
														data-toggle="tooltip" data-placement="left" title="Quick view"><i
															class="fa fa-search"></i></span> </a>
												<a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
														class="fa fa-heart-o"></i></a>
												<a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
														class="fa fa-refresh"></i></a>
												<a href="addcart.php?id=<?php echo $product['ID'] ?>" data-toggle="tooltip" data-placement="left" title="Add to cart"><i
														class="fa fa-shopping-cart"></i></a>
											</div>
										</div>
										<div class="product-content">
											<h4><a href="product-details.php?product_id=<?php echo $product['ID'] ?>"><?php echo $product['ProductName'] ?></a></h4>
											<div class="pricebox">
												<span class="regular-price"><?php echo $product['UnitPrice']  ?></span>
												<div class="ratings">
													<span class="good"><i class="fa fa-star"></i></span>
													<span class="good"><i class="fa fa-star"></i></span>
													<span class="good"><i class="fa fa-star"></i></span>
													<span class="good"><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<div class="pro-review">
														<span>1 review(s)</span>
													</div>
												</div>
											</div>
										</div>
									
									</div>
								<?php } ?>
                                <!-- product single item end -->
                            </div>
                            <!-- featured category end -->
                        </div>
                        <!-- featured category area end -->

                        <!-- banner statistic start -->
                        <div class="banner-statistic pt-28 pb-30 pb-sm-0">
                            <div class="row">
                                <div class="col-lg-7 col-md-7">
                                    <div class="img-container fix img-full mb-sm-30">
                                        <a href="#">
                                            <img src="assets/img/banner/banner_static2.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5">
                                    <div class="img-container fix img-full mb-sm-30">
                                        <a href="#">
                                            <img src="assets/img/banner/banner_static3.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner statistic end -->

                        <!-- category features area start -->
                        <div class="category-feature-area">
                            <div class="row">
                                <!-- New Products area start -->
                                <div class="col-lg-4">
                                    <div class="category-wrapper mb-md-24 mb-sm-24">
                                        <div class="section-title-2 d-flex justify-content-between mb-28">
                                            <h3>New Products</h3>
                                            <div class="category-append"></div>
                                        </div> <!-- section title end -->
                                        <div class="category-carousel-active row" data-row="4">
                                        <?php foreach($Products as $product){ ?>
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="product-details.php?product_id=<?php echo $product['ID'] ?>">
                                                            <img src="assets/img/product/<?php echo $product['avatar'] ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="product-details.html"><?php echo $product['ProductName'] ?></a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                            <?php echo $product['UnitPrice'] ?>
                                                            </div>
                                                            <div class="old-price">
                                                                <del></del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                        <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <!-- New Products area end -->
                                <!-- Most viewed area start -->
                                <div class="col-lg-4">
                                    <div class="category-wrapper mb-md-24 mb-sm-24">
                                        <div class="section-title-2 d-flex justify-content-between mb-28">
                                            <h3>Most viewed</h3>
                                            <div class="category-append"></div>
                                        </div> <!-- section title end -->
                                        <div class="category-carousel-active row" data-row="4">
                                        <?php foreach($Products as $product){ ?>
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="product-details.php?product_id=<?php echo $product['ID'] ?>">
                                                            <img src="assets/img/product/<?php echo $product['avatar'] ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="product-details.php?product_id=<?php echo $product['ID'] ?>"><?php echo $product['ProductName'] ?></a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                            <?php echo $product['UnitPrice'] ?>
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$210.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                        <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Most viewed area end -->
                                <!-- Most viewed area start -->
                                <div class="col-lg-4">
                                    <div class="category-wrapper mb-md-24 mb-sm-24">
                                        <div class="section-title-2 d-flex justify-content-between mb-28">
                                            <h3>hot sale</h3>
                                            <div class="category-append"></div>
                                        </div> <!-- section title end -->
                                        <div class="category-carousel-active row" data-row="4">
                                        <?php foreach($Products as $product){ ?>
                                            <div class="col">
                                                <div class="category-item">
                                                    <div class="category-thumb">
                                                        <a href="product-details.php?product_id=<?php echo $product['ID'] ?>">
                                                            <img src="assets/img/product/<?php echo $product['avatar'] ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="category-content">
                                                        <h4><a href="product-details.php?product_id=<?php echo $product['ID'] ?>"><?php echo $product['ProductName'] ?></a></h4>
                                                        <div class="price-box">
                                                            <div class="regular-price">
                                                            <?php echo $product['UnitPrice'] ?>
                                                            </div>
                                                            <div class="old-price">
                                                                <del>$150.00</del>
                                                            </div>
                                                        </div>
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                            <div class="pro-review">
                                                                <span>1 review(s)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end single item -->
                                            </div> <!-- end single item column -->
                                        <?php }?>
                                        </div>
                                    </div>
                                </div>
                                <!-- Most viewed area end -->
                            </div>
                        </div>
                        <!-- category features area end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- page wrapper end -->

        <!-- latest product start -->
        <div class="latest-product">
            <div class="container">
                <div class="section-title mb-30">
                    <div class="title-icon">
                        <i class="fa fa-flash"></i>
                    </div>
                    <h3>latest product</h3>
                </div> <!-- section title end -->
                <!-- featured category start -->
                <div class="latest-product-active slick-padding slick-arrow-style">
                    <!-- product single item start -->
                    <?php foreach($Products as $product){ ?>
                    <div class="product-item fix">
                        <div class="product-thumb">
                            <a href="product-details.php?product_id=<?php echo $product['ID'] ?>">
                                <img src="assets/img/product/<?php echo $product['avatar'] ?>" class="img-pri" alt="">
                                <img src="assets/img/product/product-img2.jpg" class="img-sec" alt="">
                            </a>
                            <div class="product-label">
                                <span>hot</span>
                            </div>
                            <div class="product-action-link">
                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                        data-placement="left" title="Quick view"><i class="fa fa-search"></i></span>
                                </a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="product-details.php?product_id=<?php echo $product['ID'] ?>"><?php echo $product['ProductName'] ?> </a></h4>
                            <div class="pricebox">
                                <span class="regular-price"><?php echo $product['UnitPrice'] ?></span>
                                <div class="ratings">
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <div class="pro-review">
                                        <span>1 review(s)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php }?>
                    <!-- product single item end -->
                </div>
                <!-- featured category end -->
            </div>
        </div>
        <!-- latest product end -->

        <!-- brand area start -->
        <div class="brand-area pt-28 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-crop"></i>
                            </div>
                            <h3>Các hãng Sản Xuất</h3>
                        </div> <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active slick-padding slick-arrow-style">
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/6409339255_ca00e76dee_z (1).jpg  " alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/th.jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br3.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/th (1).jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/1513882457293.jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/th (3).jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- footer area start -->
        <footer>
            <!-- footer top start -->
            <div class="footer-top bg-black pt-14 pb-14">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="newsletter__wrap">
                            <div class="newsletter__title">
                                <div class="newsletter__icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="newsletter__content">
                                    <h3>Đăng Ký Nhận Bản Tin</h3>
                                    <p>Sẽ Nhận Thư điện tử tại đây</p>
                                </div>
                            </div>
                            <div class="newsletter__box">
                                <form id="mc-form">
                                    <input type="email" id="mc-email" autocomplete="off" placeholder="Email">
                                    <button id="mc-submit">Đăng Ký!</button>
                                </form>
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                        <div class="social-icons">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>Liên Hệ</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                        <li><i class="fa fa-phone"></i>(800) 0123 456 789</li>
                                        <li><i class="fa fa-map-marker"></i>Address: 12- Nguyễn Văn Bảo
                                            Phường3 Quận gò Vấp . TPHCM</li>
                                    </ul>
                                    <a class="map-btn" href="contact-us.html">Mở Trong google map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>my account</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">Tài Khoản Của Tôi</a></li>
                                        <li><a href="#">Giỏ Hàng Của Tôi</a></li>
                                        <li><a href="#">Thanh Toán</a></li>
                                        <li><a href="#">Sản Phẩm Yêu Thích</a></li>
                                        <li><a href="#">Đăng Nhập</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>mã Ngắn</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">bộ sưu tập</a></li>
                                        <li><a href="#">accordion</a></li>
                                        <li><a href="#">Băng Chuyền</a></li>
                                        <li><a href="#">Bản Đồ</a></li>
                                        <li><a href="#">Chuyển Hướng</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4> Sản Phẩm   </h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">Máy tính</a></li>
                                        <li><a href="#">camera</a></li>
                                        <li><a href="#">Điện Thoại</a></li>
                                        <li><a href="#">Đồng Hồ</a></li>
                                        <li><a href="#">Máy Tính Bảng</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->

            <!-- footer bootom start -->
            <div class="footer-bottom-area bg-gray pt-20 pb-20">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <div class="copyright-text">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="payment-method-img">
                            <img src="assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bootom end -->

        </footer>
        <!-- footer area end -->

    </div>


    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img5.jpg"
                                            alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="product-details.html">external product 12</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        <span>1 in stock</span>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                        dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                        consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->



    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="assets/js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="assets/js/switcher.js"></script>
</body>



</html>