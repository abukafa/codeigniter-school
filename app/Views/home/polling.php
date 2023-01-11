<?php include '../template/header.php' ?>

<div class="container">
    <ol class="breadcrumb">
        <li><a href="https://web-sekolah.jogjalab.com/">Beranda</a></li>
        <li class="active">Polling</li>
    </ol>
    <div class="row">
        <div class="col-md-8 span-fixed-sidebar">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header" style="margin-top:16px;">
                        <h1>Polling</h1>
                        <div class="headerdivider"></div>
                    </div>
                    <h3>Bagaimana menurut anda tampilan website ini ?</h3>
                    <div style="clear:both;height:20px;"></div>
                    <ul id="skill">
                        <li><span class="thebar progressgreen" style="width:9%;"></span>
                            <h3 style="color:#000;">Bagus 9%</h3>
                        </li>
                        <li><span class="thebar progressblue" style="width:4%;"></span>
                            <h3 style="color:#000;">Lumayan 4%</h3>
                        </li>
                        <li><span class="thebar progressorange" style="width:6%;"></span>
                            <h3 style="color:#000;">Jelek 6%</h3>
                        </li>
                        <li><span class="thebar progressdefault" style="width:0%;"></span>
                            <h3 style="color:#000;">No comment 0%</h3>
                        </li>
                    </ul>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/span-->
        <div class="col-md-4 top20">
            <?php include '../template/side-posting.php' ?>
            <?php include '../template/side-link.php' ?>
        </div>
    </div>
</div>

<?php include '../template/footer.php' ?>