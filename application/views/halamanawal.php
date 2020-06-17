<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PT. Cahaya MU Vision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- css -->
    <link href="<?=base_url()?>assets/land/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url()?>assets/land/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />

    <!--Slider-->
    <link rel="stylesheet" href="<?=base_url()?>assets/land/css/owl.carousel.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/land/css/owl.theme.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/land/css/owl.transitions.css" />

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/land/css/swiper.min.css">

    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/land/css/magnific-popup.css" />

    <link href="<?=base_url()?>assets/land/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <img src="<?=base_url()?>assets/land/images/logo-mu-light.png" class="logo-light" alt="" height="20">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Channel</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Harga</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('auth/login_pelanggan') ?>" class="nav-link">login</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('register/new') ?>" class="nav-link">Daftar Sekarang</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- START HOME -->
    <section class="bg-home-4" id="home">
        <div class="home-bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row vertical-content">
                        <div class="col-lg-6">
                            <div class="mt-4 home-4">
                                <h2 class="home-title-4 mt-4 line-height_1_4">TV <span>KABEL</span> Banjarmasin</h2>
                                <p class="text-white-50 mt-3">Anda Dapat Menikmati TV KABEL yang berkualitas seperti : Olahraga, Agama, Pendidikan, Hiburan Dan Informasi yang Menghadirkan 36++ Channel Siaran Lokal, Nasional, & Internasional.</p>
                                <div class="mt-5">
                                    <a href="#pricing" class="btn btn-white btn-rounded">Get started <i class="mdi mdi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4 text-right">
                                <div class="features-img">
                                    <img src="https://myrepublic.co.id/wp-content/uploads/2019/02/Channels-Web-02.png" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START FEATURES -->
    <section class="section bg-light" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center text-white">36++ Channel Keren</h1>
                    <p class="title-desc text-center text-white-50 mt-4">Cahaya MU Vision Menghadirkan 36++ Channel pilihan terbaik lokal dan internasional untuk Anda dan keluarga.</p>
                </div>
            </div>

            <div class="row mt-4 py-5">
                <div class="col-lg-6">
                    <div class="features-img text-center mt-5">
                        <img src="https://1.bp.blogspot.com/-zhC2H8O53sM/XGGV4mAqfgI/AAAAAAAABG8/aZi-_jBBl-0JzNfuW_KHvdRDGktxzahmQCLcBGAs/s1600/1.jpg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-content mt-5">
                        <div class="features-icon">
                            <i class="mdi mdi-anchor"></i>
                        </div>
                        <h4 class="line-height_1_4 mt-3 text-white">Channel Lokal</h4>
                        <p class="text-white-50 mt-3">Terdapat berbagai macam channel lokal.</p>
                        <div class="mt-4">
                            <a href="" class="read-more">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row vertical-content  py-5">
                <div class="col-lg-6">
                    <div class="features-content mt-5">
                        <div class="features-icon">
                            <i class="mdi mdi-dna"></i>
                        </div>
                        <h4 class="line-height_1_4 mt-3 text-white">Channel Internasional</h4>
                        <p class="text-white-50 mt-3">Terdapat berbagai macam channel internasional untuk keluarga Anda.</p>
                        <div class="mt-4">
                            <a href="" class="read-more">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-img text-center mt-5">
                        <img src="https://blogteknologigadget.files.wordpress.com/2012/09/tv-kabel-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END FEATURES -->

   

    

    <!-- START PRICING -->
    <section class="section bg-dark" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center text-white">Harga</h1>
                    <p class="title-desc text-center text-white-50 mt-4">Hanya dengan Rp. 150.000 Biasa Pemasangan, Tagihan dibayar bulan berikutnya.</p>
                </div>
            </div>

            <div class="row mt-4">

                

                <div class="col-lg-12">
                    <div class="pricing-box-active text-center bg-light p-5 mt-5">
                        <h3 class="pricing-plan text-uppercase">1 TV</h3>
                        <h2 class="pricing-price text-white mt-5 mb-0">Rp. 50.000</h2>
                        <p class="pricing-month mt-1">Per Bulan</p>
                        <div class="plan-features mt-5">
                            <p>Channel: <b>36++</b></p>
                            <p>Jumlah TV: <b>1 TV</b></p>
                            <p>Support: <b>Yes</b></p>
                            <p><b>Biaya Pemasangan awal: </b> 150.000</p>
                            
                        </div>
                        <p>Pemasangan Lebih dari 1 (Satu) TV ditambah biaya Rp. 50.000.</p>
                        <div class="mt-5">
                            <a href="<?php echo site_url('register/new') ?>" class="btn btn-custom btn-sm btn-round">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </section>
    <!-- END PRICING -->

   

    
   

    <!-- START FOOTER -->
    <section class="footer">
        <div class="footer-bg-overlay"></div>
        <div class="container">

            <!-- START FOOTER -->
            <div class="row footer-content">
                <div class="col-lg-4">
                    <img src="images/logo-light.png" alt="" height="20">
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3">
                            <h5 class="f-18 text-white">Home</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">About us</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="f-18 text-white">Services</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">Terms & Condition</a></li>
                                <li><a href="">Jobs</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="f-18 text-white">Pricing</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">Business</a></li>
                                <li><a href="">Bookmarks</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3">
                            <h5 class="f-18 text-white">Contact</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">123-4556-789</a></li>
                                <li><a href="">Your@mail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END FOOTER -->

            <!-- START FOOTER-AlT -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p class="footer-alt text-center text-white-50 mb-0">2019 © Devazo. Design by Themesdesign</p>
                </div>
            </div>
            <!-- END FOOTER-ALT -->

        </div>

    </section>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="<?=base_url()?>assets/land/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/land/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/land/js/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>assets/land/js/scrollspy.min.js"></script>
    <script src="<?=base_url()?>assets/land/js/counter.init.js"></script>

    <!-- Owl Carousel -->
    <script src="<?=base_url()?>assets/land/js/owl.carousel.min.js"></script>

    <!-- Swiper JS -->
    <script src="<?=base_url()?>assets/land/js/swiper.min.js"></script>

    <!-- Magnific Popup -->
    <script src="<?=base_url()?>assets/land/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>assets/land/js/contact.js"></script>
    <script src="<?=base_url()?>assets/land/js/plugins-init.js"></script>
    <script src="<?=base_url()?>assets/land/js/app.js"></script>
</body>

</html>