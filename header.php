<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php wp_title();?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/vmcstyle.css">
    <link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/assets/css/bootstrap.min.css">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="vmc-header">
        <div class="vmc-header__bannertop">
            <a href="#"><img src="<?php bloginfo("template_directory"); ?>/images/bannertop.PNG" alt=""></a>
        </div>
        <div class="container">
            <div class="row vmc-header__content">
                <div class="col-sm-12 col-md-2 col-lg-2">
                    <div class="vmc-header__logos">
                        <a href="#"><img src="<?php bloginfo("template_directory"); ?>/images/logo-trung-tam-vmc.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="vmc-header__search">
                        <input type="text" placeholder="Nhập tên khóa học ...">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <div class="vmc-header__account">
                        <ul>
                            <li>
                                <a href="<?php echo $woocommerce->cart->get_cart_url(); ?>" class="vmc-header__cart">
                                    <i class="far fa-shopping-bag"></i>

                                    <?php 
                                        $cartitem = $woocommerce->cart->cart_contents_count;
                                        if($cartitem <= 0){
                                        }
                                        else if($cartitem > 0){
                                            echo '<span class="cart-count">'.$cartitem.'</span>';
                                        }
                                    ?> 
                                </a>
                            </li>
                            <li><a href=""></a></li>
                            <li><a href="">Đăng ký</a></li>
                            <li><a href="">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row vmc-header__navbar">

                <div class="col-lg-4 col-sm-12 col-md-4">
                    <div class="vmc-header__category">
                        <h2><i class="fas fa-bars"></i> Danh mục khóa học</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-8">
                    <div class="vmc-header__nvabox">
                        <ul>
                            <li class="best-sellre"><a href="#"><i class="far fa-thumbs-up"></i> Bán chạy nhất
                                    <span></span></a></li>
                            <li class="vieweds_products"><a href="#">
                                    <i class="far fa-eye"></i> Khóa học đã xem <span></span></a>

                            </li>
                            <li><a href=""><i class="fas fa-books"></i> Tất cả khóa học</a></li>
                            <li><a href="blog.html" target="_blank"><i class="fas fa-rss"></i> Blog</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- viewed products -->
        <div class="vmc-header__viewed-products viewed-products">
            <div class="container">
                <div class="viewed-products__contents">
                    <div class="viewed-products__item">
                        <a href="">
                            <img src="<?php bloginfo("template_directory"); ?>/images/Cham-soc-da-day-va-he-tieu-hoa-chu-dong-2.jpg" alt="">
                            <h2>Trị liệu vùng lưng và phòng chống thoái hóa</h2>
                        </a>
                    </div>
                    <div class="viewed-products__item">
                        <a href="">
                            <img src="<?php bloginfo("template_directory"); ?>/images/chua-mat-ngu.jpg" alt="">
                            <h2>Trị liệu vùng lưng và phòng chống thoái hóa</h2>
                        </a>
                    </div>
                    <div class="viewed-products__item">
                        <a href="">
                            <img src="<?php bloginfo("template_directory"); ?>/images/dau-day-than-kinh-vai-gay-va-nhung-dieu-can-biet-4-600x400-15323210494971323088763-600x400.jpg"
                                alt="">
                            <h2>Trị liệu vùng lưng và phòng chống thoái hóa</h2>
                        </a>
                    </div>

                    <div class="viewed-products__item">
                        <a href="">
                            <img src="<?php bloginfo("template_directory"); ?>/images/he-mien-dich-la-gi-1.jpg" alt="">
                            <h2>Trị liệu vùng lưng và phòng chống thoái hóa</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- viewed products -->
        <div class="selling-course selling-course__slider" id="selling-course-slider">
            <div class="selling-course__slide" id="selling-course-slide">
                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>
                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>
                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>
                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>
                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>

                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>
                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>
                <div class="selling-course__item">
                    <a href="">
                        <img class="items"
                            src="https://images.unsplash.com/photo-1632218287847-c8270026b4de?ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw1Nnx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                        <h2>Khóa Học chăm sóc sức khỏe</h2>
                        <img class="selling-course__lable" src="<?php bloginfo("template_directory"); ?>/images/ribbon-bestseller.png" alt="">
                    </a>
                </div>

            </div>
            <button class="ctrl-btn pro-prev"><i class="fas fa-chevron-left"></i></button>
            <button class="ctrl-btn pro-next"><i class="fas fa-chevron-right"></i></button>
        </div>

        <!--  mobile-->
        <section class="vmc-header-mb">
            <div class="vmc-header-mb__top">
                <div class="container">
                    <div class="row vmc-header-mb__top--content">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="nav-mb">
                                <i class="fas fa-bars"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="logo-mb">
                                <img src="<?php bloginfo("template_directory"); ?>/images/LOGO-nen-trong-chuan-2048x1967.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
                            <div class="header-carts-mb">
                                <span class="search-mb">
                                    <i class="fas fa-search"></i>
                                </span>
                                <span class="cart-mb">
                                    <i class="far fa-shopping-bag"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vmc-header-mb__category">
                <ul>
                    <p class="vmc-close"><i class="fas fa-times"></i></p>
                    <li><a href="#">
                            <span><i class="fas fa-books"></i> Tất cả khóa học</span></a></li>
                    <li>
                        <a href="#"><span><i class="fab fa-leanpub"></i> Khóa học combo</span></a></li>
                    <li>
                        <a href="#"><span><i class="fas fa-child"></i> Chăm sóc cơ thể</span><i
                                class="fas fa-caret-right"></i></a></li>
                    <li>
                        <a href="#"><span><i class="fal fa-briefcase"></i> Chăm sóc tinh thần</span><i
                                class="fas fa-caret-right"></i></a>
                    </li>
                    <li>
                        <a href="#"><span><i class="fal fa-head-side-medical"></i> Ngũ quan</span><i
                                class="fas fa-caret-right"></i></a></li>
                    <li>
                        <a href="#"><span><i class="fal fa-hand-holding-heart"></i> Nội Tạng</span><i
                                class="fas fa-caret-right"></i></a></li>
                    <li>
                        <a href="#"><span><i class="fal fa-spa"></i> Làm đẹp</span><i
                                class="fas fa-caret-right"></i></a></li>
                    <li>
                        <a href="#"><span><i class="fal fa-handshake-alt"></i> Cơ xương khớp</span><i
                                class="fas fa-caret-right"></i></a></li>
                    <li>
                        <a href="#"><span><i class="fal fa-brain"></i>Não bộ</span><i
                                class="fas fa-caret-right"></i></a></li>
                    <li>
                        <a href="#"><span><i class="fal fa-angel"></i>Trị liệu nghệ thuật</span><i
                                class="fas fa-caret-right"></i></a></li>
                    <li>
                        <a href="#"><span><i class="fal fa-hand-holding-heart"></i>Dưỡng sinh</span><i
                                class="fas fa-caret-right"></i></a>
                    </li>
                    <li>
                        <a href="#"><span><i class="fal fa-chalkboard-teacher"></i>Đào tạo nghề spa,
                                masssage</span><i class="fas fa-caret-right"></i></a>
                    </li>
                    <li><a href="#"><span><i class="fal fa-users-crown"></i>Đối tượng đặc biệt</span><i
                                class="fas fa-caret-right"></i></a>
                    </li>
                </ul>
            </div>
        </section>
    </header>