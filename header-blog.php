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
    <div class="vmcpage" id="site">
        <header class="vmc-blog vmc-blog-header">
            <div class="container">
                <div class="vmc-blog-header__line">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="vmc-blog-header__logos">
                                <a href="#"><img src="<?php bloginfo("template_directory"); ?>/images/logo-trung-tam-vmc.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="vmc-blog-header__banner">
                                <a href="#"><img class="banner-blogs" src="<?php bloginfo("template_directory"); ?>/images/banner-blog.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="vmc-blog-header blog-nvbar">
                <div class="container">
                    <div class="blog-nvbar__content">
                        <ul class="blog-nvbar__list">
                            <li class="blog-nvbar__items active"><a href="#">Home</a></li>
                            <li class="blog-nvbar__items"><a href="#">Covid-19</a></li>
                            <li class="blog-nvbar__items"><a href="#">Y học thường thức</a></li>
                            <li class="blog-nvbar__items"><a href="#">CSSK chủ động</a></li>
                            <li class="blog-nvbar__items"><a href="#">Dinh dưỡng</a></li>
                            <li class="blog-nvbar__items"><a href="#">Làm đẹp</a></li>
                            <li class="blog-nvbar__items"><a href="#">Các khóa học</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="vmc-blog-header-mb">
                <div class="container">
                    <div class="vmc-blog-header-mb__content">
                        <div class="vmc-blog-header-mb__menusv">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="vmc-blog-header-mb__logos">
                            <img src="<?php bloginfo("template_directory"); ?>/images/LOGO-nen-trong-chuan-2048x1967.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <nav class="blog-nvbar-mb">
                <div class="container">
                    <div class="blog-nvbar-mb__content">
                        <ul class="blog-nvbar-mb__list">
                            <p class="blog-nvbar-mb__close"><i class="fas fa-times"></i></p>
                            <li class="blog-nvbar-mb__items active"><a href="#">Home</a></li>
                            <li class="blog-nvbar-mb__items"><a href="#">Covid-19</a></li>
                            <li class="blog-nvbar-mb__items"><a href="#">Y học thường thức</a></li>
                            <li class="blog-nvbar-mb__items"><a href="#">CSSK chủ động</a></li>
                            <li class="blog-nvbar-mb__items"><a href="#">Dinh dưỡng</a></li>
                            <li class="blog-nvbar-mb__items"><a href="#">Làm đẹp</a></li>
                            <li class="blog-nvbar-mb__items"><a href="#">Các khóa học</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>