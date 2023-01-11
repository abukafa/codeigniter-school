<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home">Beranda</a></li>
        <li><a href="">Informasi</a></li>
        <li class="active">Jadwal Pelajaran</li>
    </ol>
    <div class="row">
        <div class="col-md-8 span-fixed-sidebar">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header" style="margin-top:16px;">
                        <h1>Jadwal Pelajaran</h1>
                        <div class="headerdivider"></div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <form action="https://web-sekolah.jogjalab.com/jadwal-pelajaran/" name="" method="get" class="form-inline">
                <div class="form-group"><select name="kelas" class="form-control" onchange="submit()">
                        <option value="">Pilih Kelas</option>
                        <option value="7">VII</option>
                        <option value="8">VIII</option>
                        <option value="9">IX</option>
                    </select></div>
            </form>
            <div style="height:10px;clear:both;"></div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#senin" aria-controls="senin" role="tab" data-toggle="tab" style="outline: 0;">Senin</a></li>
                <li role="presentation"><a href="#selasa" aria-controls="selasa" role="tab" data-toggle="tab" style="outline: 0;">Selasa</a></li>
                <li role="presentation"><a href="#rabu" aria-controls="rabu" role="tab" data-toggle="tab" style="outline: 0;">Rabu</a></li>
                <li role="presentation"><a href="#kamis" aria-controls="kamis" role="tab" data-toggle="tab" style="outline: 0;">Kamis</a></li>
                <li role="presentation"><a href="#jumat" aria-controls="jumat" role="tab" data-toggle="tab" style="outline: 0;">Jumat</a></li>
                <li role="presentation"><a href="#sabtu" aria-controls="sabtu" role="tab" data-toggle="tab" style="outline: 0;">Sabtu</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="senin">
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="40">NO</th>
                                <th class="text-center">JAM</th>
                                <th class="text-center">PELAJARAN</th>
                                <th class="text-center">GURU</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">06:30 - 07:15</td>
                                <td class="text-danger" colspan="2"><strong>UPACARA</strong></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td class="text-center">07:15 - 09:00</td>
                                <td>Matematika</td>
                                <td>Polina Anikeeva</td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td class="text-center">08:00 - 08:45</td>
                                <td>Bahasa Indonesia</td>
                                <td>Antoine Allanore</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane" id="selasa">
                    <div class="alert alert-danger ">Jadwal tidak ditemukan.</div>
                </div>
                <div role="tabpanel" class="tab-pane" id="rabu">
                    <div class="alert alert-danger ">Jadwal tidak ditemukan.</div>
                </div>
                <div role="tabpanel" class="tab-pane" id="kamis">
                    <div class="alert alert-danger ">Jadwal tidak ditemukan.</div>
                </div>
                <div role="tabpanel" class="tab-pane" id="jumat">
                    <div class="alert alert-danger ">Jadwal tidak ditemukan.</div>
                </div>
                <div role="tabpanel" class="tab-pane" id="sabtu">
                    <div class="alert alert-danger ">Jadwal tidak ditemukan.</div>
                </div>
            </div>
        </div>
        <div class="col-md-4 top10">
            <?= $this->include('template/side-posting') ?>
            <?= $this->include('template/side-link') ?>
        </div>
        <!--/span-->
    </div>
</div>

<?php $this->endSection(); ?>