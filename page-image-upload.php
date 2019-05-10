<!DOCTYPE html>
<html lang="az">

<!--Start header-->
<head>
    <!-- Dropzone css -->
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css">

    <?php include "include/header.php"; ?>

</head>
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
                    <h4 class="page-title">Şəkil əlavə et</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Ana Səhifə</a></li>
                        <li class="breadcrumb-item"><a href="page-products.php">Məhsullar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Şəkil əlavə et</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="#" class="dropzone" id="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple="multiple">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->

            <div class="row">
                <div class="col-lg-12">
                    <h4>Məhsulun şəkilləri</h4>
                    <div class="card">
                        <div class="card-body">
                                <table class="table table-bordered table-sm table-striped text-center  bt-switch">
                                    <thead>
                                        <tr>
                                            <th>#id</th>
                                            <th>Şəkil</th>
                                            <th>Şəkil adı</th>
                                            <th>Status</th>
                                            <th>Sil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img height="20" width="40" src="assets/images/products/05.png" alt=""></td>

                                                <td>ipnone-1.png</td>
                                                <td>
                                                    <input type="checkbox" checked data-on-color="success"
                                                           data-off-color="default" data-size="small"
                                                           data-on-text="<i class='zmdi zmdi-eye'></i>"
                                                           data-off-text="<i class='zmdi zmdi-eye-off'></i>">

                                                </td>                                                <td>
                                                    <a href="#" class="btn btn-sm btn-danger sil" title="remove"><i
                                                                class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><img height="20" width="40" src="assets/images/products/iphone-3.png" alt=""></td>

                                                <td>iphone-3.png</td>
                                                <td>
                                                    <input type="checkbox"  data-on-color="success"
                                                           data-off-color="default" data-size="small"
                                                           data-on-text="<i class='zmdi zmdi-eye'></i>"
                                                           data-off-text="<i class='zmdi zmdi-eye-off'></i>">

                                                </td>                                                <td>
                                                    <a href="#" class="btn btn-sm btn-danger sil" title="remove"><i
                                                                class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><img height="20" width="40" src="assets/images/products/iphone-2.png" alt=""></td>

                                                <td>iphone-2.png</td>
                                                <td>
                                                    <input type="checkbox"  data-on-color="success"
                                                           data-off-color="default" data-size="small"
                                                           data-on-text="<i class='zmdi zmdi-eye'></i>"
                                                           data-off-text="<i class='zmdi zmdi-eye-off'></i>">

                                                </td>                                                <td>
                                                    <a href="#" class="btn btn-sm btn-danger sil" title="remove"><i
                                                                class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Row-->

        </div>
        <!-- End container-fluid-->

    </div><!--End content-wrapper-->
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

<!-- Dropzone JS  -->
<script src="assets/plugins/dropzone/js/dropzone.js"></script>


</body>

</html>