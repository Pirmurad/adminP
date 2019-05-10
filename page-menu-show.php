<!DOCTYPE html>
<html lang="az">

<!--Start header-->
<?php include "include/header.php"; ?>

<!--End header-->

<body class="bg-theme bg-theme1">

<!-- start loader -->
<div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner">
            <div class="loader"></div>
        </div>
    </div>
</div>
<!-- end loader -->

<!-- Start wrapper-->
<div id="wrapper">

    <!--Start sidebar-wrapper-->
    <?php include "include/sidebar.php"; ?>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <?php include "include/topbar-header.php"; ?>

    <!--End topbar header-->

    <div class="clearfix"></div>

    <!--Start content-wrapper-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-md-12">
                    <h4 class="page-title">Menyu show</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Ana Səhifə</a></li>
                        <li class="breadcrumb-item"><a href="page-menu.php">Menyu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menyu show</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="pt-2 pb-4">
                                <a href="page-menu-edit.php"
                                   class="btn btn-primary btn-square waves-effect waves-light m-1">
                                    <i class="fa fa-edit"></i>
                                    <span>Dəyiş</span>
                                </a>
                                <a href="#" class="sil btn btn-danger btn-square waves-effect waves-light m-1">
                                    <i class="zmdi zmdi-delete"></i>
                                    <span>Sil</span>
                                </a>
                                <a href="page-menu.php" class="btn btn-warning btn-square waves-effect waves-light m-1">
                                    <i class="icon-action-undo"></i>
                                    <span>Geri qayıt</span>
                                </a>

                                <a class="btn btn-excel  btn-square waves-effect waves-light m-1" type="button"
                                   id="doexcel" onclick="$('.table').tblToExcel();">
                                    <i class="fa fa-file-excel-o"></i>
                                    <span>Excel</span>
                                </a>
                            </div>
                            <div class="col-md-8 offset-md-2">
                                <table class="table table-lg table-responsive-md table-bordered table-striped table-hover text-center" role="grid">
                                    <tbody>
                                        <tr role="row" class="even">
                                            <td>Id</td>
                                            <td>1</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Adı</td>
                                            <td>iphone xr</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Link adı</td>
                                            <td>telefon</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Haqqında</td>
                                            <td>Lorem ipsum dolor sit amlores esse ipsa magni officia, saepe.</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Status</td>
                                            <td><i class="zmdi zmdi-eye"></i></td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Paylaşılma vaxtı</td>
                                            <td>2019-04-29 12:53:40</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td>Dəyişilmə vaxtı</td>
                                            <td>2019-04-30 22:33:10</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mt-4">
                                    <h3>Qalereya</h3>
                                    <div class="col-md-12 my-3">
                                        <div class="lightgallery show-g">
                                            <a href="assets/images/gallery/1.jpg">
                                                <img src="assets/images/gallery/1.jpg" alt="">
                                            </a>
                                            <a href="assets/images/gallery/2.jpg">
                                                <img src="assets/images/gallery/2.jpg" alt="">
                                            </a>
                                            <a href="assets/images/gallery/3.jpg">
                                                <img src="assets/images/gallery/3.jpg"  alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->

        </div>
    </div>
</div>
<!-- End Row-->

</div>
<!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--End content-wrapper-->

<!--End wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->
<?php include "include/footer.php"; ?>
<!--End footer-->

</div>
<!--End wrapper-->

<?php include "include/scripts.php"; ?>



</body>

</html>