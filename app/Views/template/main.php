<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?> - SMPT Bugelan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website resmi SMPT Bugelan">
    <meta name="author" content="Abu Kafa">
    <link rel="canonical" href="http://semangkamedia.com/" />
    <meta property="og:url" content="http://semangkamedia.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Selamat datang di website resmi SMPT Bugelan" />
    <meta property="og:description" content="Website resmi SMPT Bugelan" />
    <meta property="og:image" content="<?= base_url() ?>/assets/img/ico/logo.png" />
    <!-- Le styles -->
    <link href="<?= base_url() ?>/assets/img/ico/logo.png" rel="shortcut icon">
    <link href="<?= base_url() ?>/assets/plugins/bootstrap-3.4.1/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/libraries/css/style.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/libraries/css/custom.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/libraries/css/skin-green.css" rel="stylesheet" id="main-color" media="screen" />
    <link href="<?= base_url() ?>/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?= base_url() ?>/assets/libraries/js/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/plugins/bootstrap-3.4.1/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/libraries/js/plugins.js"></script>
    <script src="<?= base_url() ?>/assets/libraries/js/custom.js"></script>
</head>

<body class="boxed" style="background-image: url(<?= base_url() ?>/assets/img/thumb/background.jpg);">
    <div class="body" id="body">
        <!-- Navbar & Header -->
        <header>
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="brandlogo">
                            <a href="http://semangkamedia.com/">
                                <img src="<?= base_url() ?>/assets/img/ico/kop.png" alt="">
                            </a>
                        </h1>
                        <div class="clearfix"></div>
                        <div class="row-nav navbar" style="margin-bottom: 0;">
                            <div class="navbar-inner">
                                <ul id="nav" class="nav">
                                    <li class="<?= $title != 'Beranda' ?: 'active' ?>">
                                        <a href="/home"><i class="icon-home"></i> Beranda</a>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class="<?= $title != 'Blog' ?: 'active' ?>">
                                        <a href="/home/blogs">Blog</a>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class=" dropdown <?= $title != 'Profil' ?: 'active' ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a>
                                        <ul class="dropdown-menu js-activated" style="display: none;">
                                            <li class=""><a href="/profil/pengantar">Kata Pengantar</a></li>
                                            <li class=""><a href="/profil/sejarah">Sejarah Singkat</a></li>
                                            <li class=""><a href="/profil/visimisi">Visi dan Misi</a></li>
                                            <li class=""><a href="/profil/struktur">Struktur Organisasi</a></li>
                                            <li class=""><a href="/profil/kepala">Kepala Sekolah</a></li>
                                            <li class=""><a href="/profil/komite">Komite Sekolah</a></li>
                                            <li class=""><a href="/profil/guru">Guru dan Staff</a></li>
                                            <li class=""><a href="/profil/sarana">Sarana dan Prasarana</a></li>
                                            <li class=""><a href="/profil/hymne">Mars dan Hymne</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class=" dropdown <?= $title != 'Program' ?: 'active' ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Program <b class="caret"></b></a>
                                        <ul class="dropdown-menu js-activated" style="display: none;">
                                            <li class=""><a href="/program/karakter">Berkarakter</a></li>
                                            <li class=""><a href="/program/teknologi">Berteknologi</a></li>
                                            <li class=""><a href="/program/wirausaha">Berwirausaha</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class=" dropdown <?= $title != 'Siswa' ?: 'active' ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Siswa <b class="caret"></b></a>
                                        <ul class="dropdown-menu js-activated" style="display: none;">
                                            <li class=""><a href="/siswa/data">Data Siswa</a></li>
                                            <li class=""><a href="/siswa/prestasi">Prestasi Siswa</a></li>
                                            <li class=""><a href="/siswa/ekskul">Ekstrakurikuler</a></li>
                                            <li class=""><a href="/siswa/osis">Osis</a></li>
                                            <li class=""><a href="/siswa/beasiswa">Beasiswa</a></li>
                                            <li class=""><a href="/siswa/tatatertib">Tata Tertib</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class=" dropdown <?= $title != 'Alumni' ?: 'active' ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alumni <b class="caret"></b></a>
                                        <ul class="dropdown-menu js-activated" style="display: none;">
                                            <li class=""><a href="/siswa/alumni">Data Alumni</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class=" dropdown <?= $title != 'Informasi' ?: 'active' ?>">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi <b class="caret"></b></a>
                                        <ul class="dropdown-menu js-activated" style="display: none;">
                                            <li class=""><a href="/info/jadwal">Jadwal Pelajaran</a></li>
                                            <li class=""><a href="/info/agenda">Agenda</a></li>
                                            <li class=""><a href="/info/foto">Galeri Foto</a></li>
                                            <li class=""><a href="/info/video">Galeri Video</a></li>
                                            <li class=""><a href="/info/form">Form PPDB</a></li>
                                            <li class=""><a href="/info/ppdb">Informasi PPDB</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider-vertical"></li>
                                    <li class=" <?= $title != 'Data' ?: 'active' ?>">
                                        <a href="/data/login">Login</a>
                                    </li>
                                    <li class="divider-vertical"></li>
                                </ul>
                                <div id="social-link">
                                    <a href="https://www.facebook.com" style="margin-right: 1rem;">
                                        <img src="<?= base_url() ?>/assets/img/ico/facebook.png" height="30" />
                                    </a>
                                    <a href="https://www.instagram.com" style="margin-right: 1rem;">
                                        <img src="<?= base_url() ?>/assets/img/ico/instagram.png" height="30" />
                                    </a>
                                    <a href="https://www.youtube.com" style="margin-right: 0.5rem;">
                                        <img src="<?= base_url() ?>/assets/img/ico/youtube.png" height="30" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="text-center" style="margin-top: 2rem;">
            <img src="<?= base_url() ?>/assets/img/ico/sha.png" class="slidershadow" alt="">
        </div>

        <?= $this->renderSection('content'); ?>

        <div class="footer footerdark">
            <div class="text-center wraptotop">
                <a class="totop"><i class="icon-chevron-up"></i></a>
            </div>
            <!-- 1st row -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="title"><i class="icon-heart"></i> Motto Sekolah</h1>
                        <hr>
                        <p>"Impian tidak akan terwujud dengan sendirinya. Kamu harus segera bangun dan berupaya untuk mewujudkannya."</p>
                        <br>
                        <img src="<?= base_url() ?>/assets/img/ico/logo.png" alt="Logo" width="120">
                    </div>
                    <div class="col-md-4">
                        <h1 class="title"><i class="icon-th-list"></i> Kategori</h1>
                        <hr>
                        <ul>
                            <li><a href="http://semangkamedia.com/blog"><i class="icon-angle-right"></i> Blog<span class="badge pull-right">3</span></a>
                                <hr style="margin-top: 5px;">
                            </li>
                            <li><a href="http://semangkamedia.com/pengumuman"><i class="icon-angle-right"></i> Pengumuman<span class="badge pull-right">1</span></a>
                                <hr style="margin-top: 5px;">
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h1 class="title"><i class="icon-map-marker"></i> Kontak Kami</h1>
                        <hr>
                        <div class="box3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3335.585896773943!2d106.82257294464519!3d-6.170577437066928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d6aa94d477%3A0xebf3b9d252c86a26!2sIstana+Merdeka!5e0!3m2!1sen!2sid!4v1479873906889" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <div class="clearfix" style="height: 10px;"></div>
                            <i class="icon-map-marker"></i> &nbsp;&nbsp;<i>Alamat</i>: Jl. Achmad Yani No. 768 Jakarta Pusat<p></p>
                            <i class="icon-phone"></i> &nbsp;<i>No. Telp</i>: (021) 987654<p></p>
                            <i class="icon-envelope"></i> &nbsp;<i>E-mail</i>: &nbsp;<a href="/cdn-cgi/l/email-protection#8fe1eee2eed0fceae4e0e3eee7d0eee1ebeecfe8e2eee6e3a1ece0e2"><span class="__cf_email__" data-cfemail="6907080408361a0c02060508013608070d08290e04080005470a0604">[email&#160;protected]</span></a>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2nd row -->
        <style type="text/css">
            .footerbottom {
                display: block !important;
            }

            .footerbottomdark {
                display: block !important;
            }
        </style>

        <div class="footerbottom footerbottomdark">
            <div class="container">
                <div class="row">
                    <!-- left -->
                    <div class="col-md-4 smallspacetop">
                        <p class="smaller"><span class="copyright">&copy </span> Copyright 2022 SMPT Bugelan.</p>
                    </div>
                    <!-- right -->
                    <div class="col-md-8 smallspacetop">
                        <div class="pull-right smaller">
                            Developed by <a href="http://semangkamedia.epizy.com" target="_blank" style="color:#FFCC00;text-decoration:none;">SemangkaMedia</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- end right -->
                </div>
            </div>
        </div>

        <script data-cfasync="false" src="<?= base_url() ?>/assets/libraries/js/email-decode.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    pauseOnHover: false,
                    slideshow: true,
                    slideshowSpeed: 4000,
                    animationSpeed: 1300,
                    animation: "slide",
                    /*String: Select your animation type, "fade" or "slide"*/
                    easing: "swing",
                    direction: "horizontal",
                    controlNav: false,
                    directionNav: true
                });
            });
        </script>
    </div>
</body>

</html>