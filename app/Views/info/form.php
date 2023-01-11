<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="https://web-sekolah.jogjalab.com/">Beranda</a></li>
        <li class="active">PPDB Registrasi</li>
    </ol>
    <div class="row">
        <div class="col-md-8 span-fixed-sidebar">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header" style="margin-top:16px;">
                        <h1>PPDB Registrasi</h1>
                        <div class="headerdivider"></div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <form action="https://web-sekolah.jogjalab.com/_4db31619a3485c3668050da0043cbdcc.php" name="" method="post" class="form-horizontal"><input name="captchakey" id="captchakey" type="hidden" value="803d6893a4279bfc7390b4381a80797f" />
                <div class="form-group"> <label for="nisn" class="col-sm-4 control-label">NISN <span class="text-danger">*</span></label>
                    <div class="col-sm-8"> <input type="text" class="form-control" id="nisn" name="nisn" value="" required> </div>
                </div>
                <div class="form-group"> <label for="nama" class="col-sm-4 control-label">Nama Lengkap <span class="text-danger">*</span></label>
                    <div class="col-sm-8"> <input type="text" class="form-control" id="nama" name="nama" value="" required> </div>
                </div>
                <div class="form-group"> <label for="asal_sekolah" class="col-sm-4 control-label">Asal Sekolah <span class="text-danger">*</span></label>
                    <div class="col-sm-8"> <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="" required> </div>
                </div>
                <div class="form-group"> <label for="password" class="col-sm-4 control-label">Password <span class="text-danger">*</span></label>
                    <div class="col-sm-8"> <input type="password" class="form-control" id="password" name="password" value="" required> </div>
                </div>
                <div class="form-group"> <label for="repassword" class="col-sm-4 control-label">Ulangi Password <span class="text-danger">*</span></label>
                    <div class="col-sm-8"> <input type="password" class="form-control" id="repassword" name="repassword" value="" required> </div>
                </div>
                <div class="form-group"> <label for="telp" class="col-sm-4 control-label">Kode Captcha <span class="text-danger">*</span></label>
                    <div class="col-sm-8"><img id="captcha" class="img-thumbnail" style="height:100px;" src="https://web-sekolah.jogjalab.com//captcha/captcha.php?key=803d6893a4279bfc7390b4381a80797f" alt=""><br /> <a href="#" onClick="document.getElementById('captcha').src='http://web-sekolah.jogjalab.com//captcha/captcha.php?key=803d6893a4279bfc7390b4381a80797f&'+Math.random();return(false);document.getElementById('guestbook_captcha').focus();" id="change-image">Tidak bisa dibaca ? Ganti teks.</a> <input type="text" class="form-control" id="kode" name="kode" value="" required> </div>
                </div>
                <div class="form-group"> <label for="nama" class="col-sm-4 control-label">&nbsp;</label>
                    <div class="col-sm-8"><button name="save_ppdb_registrasi" type="submit" class="btn btn-primary">Submit</button>&nbsp; </div>
                </div>
            </form>
        </div>

        <!--/span-->
        <div class="col-md-4 top20">
            <?= $this->include('template/side-posting') ?>
            <?= $this->include('template/side-link') ?>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>