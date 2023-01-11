<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="container">
    <ol class="breadcrumb" style="margin-bottom: 0;">
        <li><a href="/home">Beranda</a></li>
        <li><a href="">Profil</a></li>
        <li class="active">Sejarah Singkat</li>
    </ol>
    <div class="row">
        <div class="col-md-8 span-fixed-sidebar">
            <div class="row">
                <div class="col-md-12">
                    <header class="entry-header">
                        <div class="sectiontitlepost">
                            <h1>Sejarah Singkat</h1>
                        </div>
                        <div class="entry-meta">
                            <a href="#">
                                <span class="entry-date">Diposting: 19 November 2016 | Dibaca: 102</span>
                            </a><!-- <span class="pull-right"><a href="#"><span>3</span> Comments</a></span> -->
                        </div><!-- .entry-meta -->
                    </header>
                    <div class="innerblogboxtwo">
                        <div class="entry-content">

                            <p>Puji syukur kami panjatkan ke hadirat Allah SWT yang atas berkat rahmat dan hidayah-Nya kami bisa meluncurkan situs web Sekolah ini di Internet. Situs web ini bertujuan untuk memperkenalkan Sekolah ini sebagai lembaga pendidikan dengan memanfaatkan media teknologi internet.</p>

                            <p>Dengan adanya situs web ini, kami berharap Sekolah ini dapat lebih dikenal di kalangan yang lebih luas. Selain itu melalui situs web ini juga, kami berharap dapat memberi kemudahan bagi para siswa dan orang tuanya untuk mengakses informasi mengenai kegiatan belajar mengajar di Sekolah ini dengan cepat, efisien dan online 24 jam.</p>

                            <p>Akhir kata, kami berharap situs web ini dapat memberikan manfaat positif bagi siapa saja yang mengunjungi situs web kami ini.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 top20">
            <?= $this->include('template/side-posting') ?>
            <?= $this->include('template/side-link') ?>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>