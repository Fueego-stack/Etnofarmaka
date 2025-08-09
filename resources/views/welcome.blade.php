<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="toga nusantara, etnofarmaka, tanaman obat, herbal indonesia" />
    <meta name="description" content="ETNOFARMAKA - TOGA NUSANTARA adalah platform edukatif seputar tanaman obat keluarga khas Indonesia" />
    <meta name="author" content="TogaNusantara Team" />
    <link rel="shortcut icon" href="{{ asset('logo_toga.png') }}" type="">

    <title>ETNOFARMAKA - TOGA NUSANTARA</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
</head>

<body>
    <div class="hero_area">
        <div class="bg-box">
            <img src="{{ asset('images/hero-bg.png') }}" alt="Background tanaman obat Nusantara">
        </div>
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span>TOGA NUSANTARA</span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class=""></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            
                            <form class="form-inline">
                                <button class="btn my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                            <a href="{{ url('login') }}" class="order_online">Login</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <section class="slider_section">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-lg-6">
                                    <div class="detail-box">
                                        <h1>Tanaman Obat Nusantara</h1>
                                        <p>
                                            Temukan khasiat tanaman herbal Indonesia dari generasi ke generasi. ETNOFARMAKA menghubungkan tradisi dan teknologi.
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ url('tanaman') }}" class="btn1">Pelajari Lebih Lanjut</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    </ol>
                </div>
            </div>
        </section>
    </div>

    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>Testimoni Pengguna</h2>
            </div>
            <div class="carousel-wrap row">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>Platform ini sangat membantu saya mengenali tanaman obat di sekitar rumah. Desainnya juga sangat ramah pengguna.</p>
                                <h6>Sinta Dewi</h6>
                                <p>Pengguna</p>
                            </div>
                            <div class="img-box">
                                <img src="{{ asset('images/client1.jpg') }}" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="detail-box">
                                <p>Saya sangat suka bagian deskripsi dan manfaat tanaman. Cocok untuk edukasi masyarakat.</p>
                                <h6>Andi Pratama</h6>
                                <p>Relawan Herbal</p>
                            </div>
                            <div class="img-box">
                                <img src="{{ asset('images/client2.jpg') }}" alt="" class="box-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>Kontak Kami</h4>
                        <div class="contact_link_box">
                            <a href="#"><i class="fa fa-map-marker"></i><span>Indonesia Timur</span></a>
                            <a href="#"><i class="fa fa-phone"></i><span>+62 812 3456 7890</span></a>
                            <a href="#"><i class="fa fa-envelope"></i><span>info@toganusantara.id</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="#" class="footer-logo">Toga Nusantara</a>
                        <p>Mengedukasi dan melestarikan warisan herbal Indonesia untuk generasi masa depan.</p>
                        <div class="footer_social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <h4>Jam Operasional</h4>
                    <p>Setiap Hari</p>
                    <p>08.00 - 18.00 WIT</p>
                </div>
            </div>
            <div class="footer-info">
                <p>&copy; <span id="displayYear"></span> Toga Nusantara - ETNOFARMAKA. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
