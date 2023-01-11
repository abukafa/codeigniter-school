<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="row ">
    <div class="page-header" style="text-align:center">
        <h1>Login Member</h1>
    </div>
    <div class="col-sm-4 well center">
        <form class="form-signin" role="form" action="https://web-sekolah.jogjalab.com/_73dce75d92181ca956e737b3cb66db98.php" method="post">
            <input name="username" type="" class="form-control" placeholder="NIS/ NISN/ NIP/ Email" required="" autofocus="" style="margin-bottom:10px;">
            <input name="password" type="password" class="form-control" placeholder="Password" required="" style="margin-bottom:10px;">
            <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
</div>
<style type="text/css">
    .center {
        float: none;
        margin-left: auto;
        margin-right: auto;
    }
</style>

<?php $this->endSection(); ?>