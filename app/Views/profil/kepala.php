<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="container">
    <ol class="breadcrumb" style="margin-bottom: 0;">
        <li><a href="/home">Beranda</a></li>
        <li><a href="">Profil</a></li>
        <li class="active">Kepala</li>
    </ol>
    <div class="row">
        <div class="col-md-8 span-fixed-sidebar">
            <div class="row">
                <div class="col-md-12">
                    <header class="entry-header">
                        <div class="sectiontitlepost">
                            <h1>Kepala Sekolah</h1>
                        </div>
                        <div class="entry-meta">
                            <a href="#">
                                <span class="entry-date">Diposting: 19 November 2016 | Dibaca: 102</span>
                            </a><!-- <span class="pull-right"><a href="#"><span>3</span> Comments</a></span> -->
                        </div><!-- .entry-meta -->
                    </header>
                    <div class="innerblogboxtwo">
                        <div class="entry-content">
                            <p><strong>Sambutan</strong></p>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum ab exercitationem nisi sequi amet pariatur numquam doloremque dolorum. At, eveniet?</p>

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