<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="container">
    <ol class="breadcrumb" style="margin-bottom: 0;">
        <li><a href="/home">Beranda</a></li>
        <li><a href="">Program</a></li>
        <li class="active">Wirausaha</li>
    </ol>
    <div class="row">
        <div class="col-md-8 span-fixed-sidebar">
            <div class="row">
                <div class="col-md-12">
                    <header class="entry-header">
                        <div class="sectiontitlepost">
                            <h1>Berwirausaha</h1>
                        </div>
                        <div class="entry-meta">
                            <a href="#">
                                <span class="entry-date">Diposting: 19 November 2016 | Dibaca: 102</span>
                            </a><!-- <span class="pull-right"><a href="#"><span>3</span> Comments</a></span> -->
                        </div><!-- .entry-meta -->
                    </header>
                    <div class="innerblogboxtwo">
                        <div class="entry-content">
                            <p><strong>Program</strong></p>

                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo facilis fugiat esse earum ab amet quidem commodi provident dolorum fuga quod tenetur illum voluptate, corrupti quam adipisci neque inventore voluptatum sequi recusandae non, doloremque voluptatem? Porro voluptatem, nemo et neque numquam ducimus, labore nobis cum eveniet eligendi eius similique tenetur atque exercitationem recusandae, ipsa ut quo expedita vero ratione est voluptates velit? Vitae repudiandae molestias quae voluptatem unde, asperiores soluta perspiciatis tempora commodi dolores expedita aliquid? Reprehenderit magnam rerum nesciunt, officia quaerat quia cupiditate officiis numquam, fugit libero dolores, veniam beatae voluptates deserunt praesentium natus commodi? Placeat, nulla. Nam, consequatur.</p>

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