<?php
$this->extend('template/main');
$this->section('content');
?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home">Beranda</a></li>
        <li><a href="">Siswa</a></li>
        <li class="active">Data</li>
    </ol>
    <div class="row">
        <div class="col-md-8 span-fixed-sidebar">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header" style="margin-top:16px;">
                        <h1>Data Siswa</h1>
                        <div class="headerdivider"></div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <form action="https://web-sekolah.jogjalab.com/siswa/" name="" method="get" class="form-inline">
                <div class="form-group"><select name="kelas" class="form-control" onchange="submit()">
                        <option value="">Semua Kelas</option>
                        <option value="7">VII</option>
                        <option value="8">VIII</option>
                        <option value="9">IX</option>
                    </select></div>
                <div class="form-group"><input name="q" type="text" value="" class="form-control" placeholder="Pencarian" /></div>
                <div class="form-group"><button type="submit" name="" class="btn btn-primary" style="margin-top:-18px;height: 34px;padding-top:6px;"><i class="icon-search"></i> Cari</button></div>
            </form>
            <div style="height:10px;clear:both;"></div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" width="40">NO</th>
                        <th class="text-center">NIS</th>
                        <th class="text-center">NAMA</th>
                        <th class="text-center" class="hidden-xs">JENIS KELAMIN</th>
                        <th class="text-center" class="hidden-xs">KELAS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/aaaa-11111">11111</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/aaaa-11111">AAAA</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/az-13002">13002</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/az-13002">Az</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/bbbbb-22222">22222</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/bbbbb-22222">BBBBB</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/ccccc-33333">33333</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/ccccc-33333">CCCCC</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">5</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/ddddd-44444">44444</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/ddddd-44444">DDDDD</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">6</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/dian-rosa-lina-070810010">070810010</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/dian-rosa-lina-070810010">DIAN ROSA LINA</a></td>
                        <td class="hidden-xs">Perempuan</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">7</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/eeeee-55555">55555</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/eeeee-55555">EEEEE</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">8</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/fffff-66666">66666</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/fffff-66666">FFFFF</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">9</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/fikri-humam-amri-070810012">070810012</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/fikri-humam-amri-070810012">FIKRI HUMAM AMRI</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">10</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/ggggg-77777">77777</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/ggggg-77777">GGGGG</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">11</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/hhhhh-88888">88888</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/hhhhh-88888">HHHHH</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">12</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/hhhhh-99999">99999</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/hhhhh-99999">HHHHH</a></td>
                        <td class="hidden-xs">Laki-laki</td>
                        <td>X-IPA-1</td>
                    </tr>
                    <tr>
                        <td class="text-center">13</td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/shinta-puspita-sari-070810011">070810011</a></td>
                        <td><a href="https://web-sekolah.jogjalab.com/siswa/shinta-puspita-sari-070810011">SHINTA PUSPITA SARI</a></td>
                        <td class="hidden-xs">Perempuan</td>
                        <td>X-IPA-1</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--/span-->
        <div class="col-md-4 top20">
            <?= $this->include('template/side-posting') ?>
            <?= $this->include('template/side-link') ?>
        </div>
    </div>
</div>

<?php $this->endSection(); ?>