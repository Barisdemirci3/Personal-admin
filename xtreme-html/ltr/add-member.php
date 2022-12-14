<?php 
require_once("header.php");
require_once("sidebar.php");


?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Personel ekle</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Personel ekle</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form onsubmit="return false;" id="form" class="form-horizontal form-material mx-2" method="POST">
                                    <div class="form-group">
                                        <label class="col-md-12">??sim Soyisim</label>
                                        <div class="col-md-12">
                                            <input id="isim" type="text" placeholder="??sim Soyisim"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input id="mail" type="email" placeholder="denemeadres@denemeadres.com"
                                                class="form-control form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kullan??c?? ad??</label>
                                        <div class="col-md-12">
                                            <input id="nick" type="text" placeholder="Kullan??c?? ad??"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">??ifre</label>
                                        <div class="col-md-12">
                                            <input id="sifre" type="password" placeholder="??ifre"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Do??um Tarihi (GG.AA.YYYYY ??eklinde yaz??n??z.)</label>
                                        <div class="col-md-12">
                                            <input id="birthday" type="text" placeholder="Do??um Tarihi"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Medeni durum</label>
                                        <div class="col-md-12">
                                            <select id="evlilik" class="form-control form-control-line">
                                                <option value="0">Bekar</option>
                                                <option value="1">Evli</option>
                                                <option value="2">Bo??anm????</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Telefon (Ba????na s??f??r koymadan yaz??n??z)</label>
                                        <div class="col-md-12">
                                            <input id="tel" type="text" placeholder="Telefon"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ekip</label>
                                        <div class="col-md-12">
                                        <select id="ekip" class="form-control form-control-line">
                                                <option value="0">Muhasebe</option>
                                                <option value="1">Teknisyen</option>
                                                <option value="2">Superviser</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Ya??ad?????? ??ehir</label>
                                        <div class="col-md-12">
                                            <input id="country" type="text" placeholder="Ya??ad?????? ??ehir"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Adres</label>
                                        <div class="col-md-12">
                                            <input id="adress" type="text" placeholder="Adres"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success text-white" name="add">Personeli ekle</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php require_once("footer.php"); ?>
</body>

</html>