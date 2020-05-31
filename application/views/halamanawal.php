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
                        <img src="<?=base_url()?>assets/land/images/features/img-8.png" class="img-fluid" alt="">
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
                        <img src="<?=base_url()?>assets/land/images/features/img-9.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END FEATURES -->

    <!-- START COUNTER -->
    <section class="section counter">
        <div class="container">
            

        </div>
    </section>
    <!-- END COUNTER -->

    <!-- START SREENSHORT -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center text-white">Quick Software Overview</h1>
                    <p class="title-desc text-center text-white-50 mt-4">Tentesque habitant morbi tristique senectus et netus malesuada fames turpis egestas quisque congue felis euismod Vestibulum ac vitae fringilla.</p>
                </div>
            </div>

            <!-- Swiper -->
            <div class="row mt-5">
                <div class="col-lg-12 swiper-container">
                    <div class="swiper-wrapper mt-4">
                        <div class="swiper-slide">
                            <img src="<?=base_url()?>assets/land/images/screen/img-4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?=base_url()?>assets/land/images/screen/img-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?=base_url()?>assets/land/images/screen/img-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?=base_url()?>assets/land/images/screen/img-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?=base_url()?>assets/land/images/screen/img-5.jpg" class="img-fluid" alt="">
                        </div>
                    </div>

                    <!-- Add Arrows  -->
                    <div class="swiper-button-next">
                        <i class="mdi mdi-chevron-right"></i>
                    </div>
                    <div class="swiper-button-prev ">
                        <i class="mdi mdi-chevron-left"></i>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- END SREENSHORT -->

    <!-- START PRICING -->
    <section class="section bg-dark" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center text-white">Harga</h1>
                    <p class="title-desc text-center text-white-50 mt-4">Hanya dengan Rp. 150.000 iuran bulanan ditagih diawal bulan</p>
                </div>
            </div>

            <div class="row mt-4">

                

                <div class="col-lg-12">
                    <div class="pricing-box-active text-center bg-light p-5 mt-5">
                        <h3 class="pricing-plan text-uppercase">1 TV</h3>
                        <h2 class="pricing-price text-white mt-5 mb-0">Rp. 42.000</h2>
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

    <!-- START CLIENT -->
    <section class="section bg-client" id="clients">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center text-white">What they've said</h1>
                    <p class="title-desc text-center text-white-50 mt-4">In an ideal world this website wouldn’t exist, a client would acknowledge the importance of having web copy before the design starts.</p>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-lg-8">
                    <div id="owl-demo">

                        <div class="client-content text-center mt-4">
                            <div class="clinet-img">
                                <img src="images/users/img-1.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h5 class="mt-4 text-white">Raymond Sloan</h5>
                            <p class="f-12 text-white">Web Developer</p>
                            <p class="f-16 client-desc text-white-50">"Aenean vehicula neque turpis at dictum purus malesuada Aenean risus ex sollicitudin nec pharetra in cursus aliquet."</p>
                        </div>

                        <div class="client-content text-center mt-4">
                            <div class="clinet-img">
                                <img src="images/users/img-2.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h5 class="mt-4 text-white">Mary Shriner</h5>
                            <p class="f-12 text-white">Web Designer</p>
                            <p class="f-16 client-desc text-white-50">"Aenean vehicula neque turpis at dictum purus malesuada Aenean risus ex sollicitudin nec pharetra in cursus aliquet."</p>
                        </div>

                        <div class="client-content text-center mt-4">
                            <div class="clinet-img">
                                <img src="images/users/img-3.jpg" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h5 class="mt-4 text-white">Robert Garrett</h5>
                            <p class="f-12 text-white">Web Developer</p>
                            <p class="f-16 client-desc text-white-50">"Aenean vehicula neque turpis at dictum purus malesuada Aenean risus ex sollicitudin nec pharetra in cursus aliquet."</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT -->

    <!-- START CLIENT-LOGO -->
    <section class="client-logo pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="client-images">
                        <img src="<?=base_url()?>assets/land/images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images">
                        <img src="<?=base_url()?>assets/land/images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="client-images">
                        <img src="<?=base_url()?>assets/land/images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images">
                        <img src="<?=base_url()?>assets/land/images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CLIENT-LOGO -->

    <!-- START VIDEO -->
    <section class="section bg-light video">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h5 class="f-15 text-white-50 text-uppercase">Watch video online today</h5>
                        <h3 class="cta-title line-height_1_6 mt-4">A digital web design studio creating modern &amp; engaging online experiences.</h3>
                        <div class="mt-5">
                            <div class="watch-video">
                                <a href="http://vimeo.com/99025203" class="video-play-icon-trigger text-white">
                                    <i class="mdi mdi-play play-icon-circle play play-icon f-20"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END VIDEO -->

    <!-- START FAQ -->
    <section class="section bg-dark" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center text-white">Frequently Asked Questions</h1>
                    <p class="title-desc text-center text-white-50 mt-4">Tentesque habitant morbi tristique senectus et netus malesuada fames turpis egestas quisque congue felis euismod Vestibulum ac vitae fringilla.</p>
                </div>
            </div>

            <div class="row mt-5 vertical-content">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <div class="faq mt-3">
                            <div class="faq-icon float-left">
                                <i class="mdi mdi-help-circle"></i>
                            </div>
                            <div class="faq-content pl-4">
                                <h5 class="faq-title mt-2 f-18 text-white">Is safe use Lorem Ipsum?</h5>
                                <p class="mb-0 text-white-50  mt-3">Voluptatem customer to your store easily publish your coupans manage to catch one of your coupens.</p>
                            </div>
                        </div>

                        <div class="faq mt-3">
                            <div class="faq-icon float-left">
                                <i class="mdi mdi-help-circle"></i>
                            </div>
                            <div class="faq-content pl-4">
                                <h5 class="faq-title mt-2 f-18 text-white">What is Lorem Ipsum?</h5>
                                <p class="mb-0 text-white-50 mt-3">Donec vitae consectetur quis pharetra tellus nullam vehicula augue posuere ultrices aliquet venenatis.</p>
                            </div>
                        </div>

                        <div class="faq mt-3">
                            <div class="faq-icon float-left">
                                <i class="mdi mdi-help-circle"></i>
                            </div>
                            <div class="faq-content pl-4">
                                <h5 class="faq-title mt-2 f-18 text-white">Why use Lorem Ipsum?</h5>
                                <p class="mb-0 text-white-50 mt-3">Sollicitudin erat a orci posuere maximus nullam elementum egestas vivamus posuere mauris donec.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mt-4">
                        <div class="faq mt-3">
                            <div class="faq-icon float-left">
                                <i class="mdi mdi-help-circle"></i>
                            </div>
                            <div class="faq-content pl-4">
                                <h5 class="faq-title mt-2 f-18 text-white">What is Lorem Ipsum?</h5>
                                <p class="mb-0 text-white-50 mt-3">Voluptatem customer to your store easily publish your coupans manage to catch one of your coupens.</p>
                            </div>
                        </div>

                        <div class="faq mt-3">
                            <div class="faq-icon float-left">
                                <i class="mdi mdi-help-circle"></i>
                            </div>
                            <div class="faq-content pl-4">
                                <h5 class="faq-title mt-2 f-18 text-white">How many variations exist?</h5>
                                <p class="mb-0 text-white-50 mt-3">Donec vitae consectetur quis pharetra tellus nullam vehicula augue posuere ultrices aliquet venenatis.</p>
                            </div>
                        </div>

                        <div class="faq mt-3">
                            <div class="faq-icon float-left">
                                <i class="mdi mdi-help-circle"></i>
                            </div>
                            <div class="faq-content pl-4">
                                <h5 class="faq-title mt-2 f-18 text-white">When can be used?</h5>
                                <p class="mb-0 text-white-50 mt-3">Sollicitudin erat a orci posuere maximus nullam elementum egestas vivamus posuere mauris donec.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END FAQ -->

    <!-- START CONTACT -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center text-white">Contact Us</h1>
                    <p class="title-desc text-center text-white-50 mt-4">Tentesque habitant morbi tristique senectus et netus malesuada fames turpis egestas quisque congue felis euismod Vestibulum ac vitae fringilla.</p>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="custom-form mt-3">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" class="form-control" placeholder="Email" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input class="form-control" id="subject" placeholder="Subject" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Massage"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-3 text-center">
                                    <input id="submit" name="send" class="submitBnt btn btn-custom btn-round" value="Send Message" type="submit">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

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