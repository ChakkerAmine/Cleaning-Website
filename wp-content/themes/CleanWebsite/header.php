<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-primary">Klean</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>info@example.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+012 345 6789</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center pr-2">
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="text-primary p-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">Klean</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <!-- <ul class="navbar-nav mr-auto py-0">
                            
                            <li>
                                <a href="service.html" class="nav-item nav-link">Home</a>
                            </li>
                            <li>
                                <a href="service.html" class="nav-item nav-link">About</a>
                            </li>
                            <li>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                            </li>
                        </ul> -->
                        <style>
                            .navbar-nav{
                                padding:30px 15px!important;
                            }
                            .navbar-nav li a{
                                padding: 30px 15px!important;
                                color: #0a1026;
                                font-size: 17px;
                                font-weight: 600;
                                outline: none;
                                text-decoration:none;
                            }
                            .navbar-nav li a:hover{
                                color: #23A036;
                            }
                            
                        </style>
                        <?php 
                            wp_nav_menu(array(
                                'menu_class'        => "navbar-nav mr-auto py-0",
                                'theme_location' => 'primary_menu'
                            ));
                        ?>
                        <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->
