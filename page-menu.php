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
                <div class="col-sm-9">
                    <h4 class="page-title">Menyular</h4>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="pt-2 pb-4">
                                <a href="page-menu-create.php"
                                   class="btn btn-primary btn-square waves-effect waves-light m-1">
                                    <i class="zmdi zmdi-plus"></i>
                                    <span>Əlavə et</span>
                                </a>
                                <a href="#" class="sil btn btn-danger btn-square waves-effect waves-light m-1">
                                    <i class="zmdi zmdi-delete"></i>
                                    <span>Sil</span>
                                </a>
                                <a href="#" class="btn btn-success btn-square waves-effect waves-light m-1">
                                    <i class="zmdi zmdi-eye"></i>
                                    <span>Aktiv et</span>
                                </a>
                                <a href="#" class="btn btn-dark btn-square waves-effect waves-light m-1">
                                    <i class="zmdi zmdi-eye-off"></i>
                                    <span>Passiv et</span>
                                </a>
                                <a class="btn btn-excel  btn-square waves-effect waves-light m-1" type="button"
                                   id="doexcel" onclick="$('.table').tblToExcel();">
                                    <i class="fa fa-file-excel-o"></i>
                                    <span>Excel</span>
                                </a>
                            </div>
                            <div class="alert alert-warning mb-0" role="alert">
                                <div class="alert-icon">
                                    <i class="fa fa-exclamation-triangle"></i>
                                </div>
                                <div class="alert-message">
                                    <span><strong>Diqqət!</strong>  Burada hər hansı bir menyu mövcud deyil! Menyu əlavə etmək üçün <a
                                                href="page-menu-create.php" class="text-muted font-weight-bold">klik edin.</a></span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-md-12 my-2">
                            <form class="form-inline">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Göstər <select name="length" aria-controls="example1"
                                                           class="form-control input-sm  mx-sm-3 "
                                                           onchange="this.form.submit()">
                                                <option value="0">0</option>
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> element
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <ul class="pagination m-0">
                                            <li class="page-item"><a class="page-link" href="javascript:void();">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void();">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void();">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void();">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void();">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group float-right">
                                        <div id="example1_filter">
                                            <label>
                                                Axtarış:<input type="search" id="search"
                                                               class="form-control input-sm  mx-sm-3 "
                                                               placeholder="Axtar..." onchange="this.form.submit()"
                                                               name="search" value="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="d-none">
                            </form>
                        </div>

                        <div class="table-responsive-sm bt-switch col-md-12 container my-2">
                            <table class="table table-sm table-bordered table-hover table-striped text-center">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>seç</th>
                                    <th>id</th>
                                    <th>image</th>
                                    <th>name</th>
                                    <th>link name</th>
                                    <th>about</th>
                                    <th>date</th>
                                    <th>status</th>
                                    <th>edit</th>
                                </tr>
                                </thead>
                                <tbody class="sortable">
                                <tr>
                                    <td class="handler"><i class="fa fa-arrows-alt"></i></td>
                                    <td>
                                        <div class="icheck-material-primary icheck-inline">
                                            <input type="checkbox" id="inline-primary-1" checked/>
                                            <label for="inline-primary-1"></label>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td><img height="20" width="40" src="assets/images/products/05.png" alt=""></td>
                                    <td>Iphone</td>
                                    <td>telefon</td>
                                    <td>Lorem ipsum.</td>
                                    <td>2019-04-29</td>
                                    <td>
                                        <input class="my_check" id="check" type="checkbox" checked data-on-color="success"
                                               data-off-color="default" data-size="small"
                                               data-on-text="<i class='zmdi zmdi-eye'></i>"
                                               data-off-text="<i class='zmdi zmdi-eye-off'></i>">

                                    </td>
                                    <td>
                                        <a href="page-menu-edit.php" class="mx-2" title="edit"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" class="mx-2 sil" title="delete"><i class="fa fa-trash"></i></a>
                                        <a href="page-menu-show.php" class="mx-2" title="show"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="handler"><i class="fa fa-arrows-alt"></i></td>
                                    <td>
                                        <div class="icheck-material-primary icheck-inline">
                                            <input type="checkbox" id="inline-primary-2" checked/>
                                            <label for="inline-primary-2"></label>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td><img height="20" width="40" src="assets/images/products/04.png" alt=""></td>
                                    <td>Camera</td>
                                    <td>camera</td>
                                    <td>Lorem ipsum.</td>
                                    <td>2019-04-29</td>
                                    <td>
                                        <input class="my_check" type="checkbox" checked data-on-color="success"
                                               data-off-color="default" data-size="small"
                                               data-on-text="<i class='zmdi zmdi-eye'></i>"
                                               data-off-text="<i class='zmdi zmdi-eye-off'></i>">

                                    </td>
                                    <td>
                                        <a href="page-menu-edit.php" class="mx-2" title="edit"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" class="mx-2 sil" title="delete"><i class="fa fa-trash"></i></a>
                                        <a href="page-menu-show.php" class="mx-2" title="show"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="handler"><i class="fa fa-arrows-alt"></i></td>
                                    <td>
                                        <div class="icheck-material-primary icheck-inline">
                                            <input type="checkbox" id="inline-primary-3" />
                                            <label for="inline-primary-3"></label>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td><img height="20" width="40" src="assets/images/products/03.png" alt=""></td>
                                    <td>Watch</td>
                                    <td>watches</td>
                                    <td>Lorem ipsum.</td>
                                    <td>2019-04-29</td>
                                    <td>
                                        <input class="my_check" type="checkbox" checked data-on-color="success"
                                               data-off-color="default" data-size="small"
                                               data-on-text="<i class='zmdi zmdi-eye'></i>"
                                               data-off-text="<i class='zmdi zmdi-eye-off'></i>">

                                    </td>
                                    <td>
                                        <a href="page-menu-edit.php" class="mx-2" title="edit"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" class="mx-2 sil" title="delete"><i class="fa fa-trash"></i></a>
                                        <a href="page-menu-show.php" class="mx-2" title="show"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="handler"><i class="fa fa-arrows-alt"></i></td>
                                    <td>
                                        <div class="icheck-material-primary icheck-inline">
                                            <input type="checkbox" id="inline-primary-4"/>
                                            <label for="inline-primary-4"></label>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td><img height="20" width="40" src="assets/images/products/01.png" alt=""></td>
                                    <td>Headphone</td>
                                    <td>earphone</td>
                                    <td>Lorem ipsum.</td>
                                    <td>2019-04-29</td>
                                    <td>
                                        <input class="my_check" type="checkbox" checked data-on-color="success"
                                               data-off-color="default" data-size="small"
                                               data-on-text="<i class='zmdi zmdi-eye'></i>"
                                               data-off-text="<i class='zmdi zmdi-eye-off'></i>">

                                    </td>
                                    <td>
                                        <a href="page-menu-edit.php" class="mx-2" title="edit"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" class="mx-2 sil" title="delete"><i class="fa fa-trash"></i></a>
                                        <a href="page-menu-show.php" class="mx-2" title="show"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="handler"><i class="fa fa-arrows-alt"></i></td>
                                    <td>
                                        <div class="icheck-material-primary icheck-inline">
                                            <input type="checkbox" id="inline-primary-5" checked/>
                                            <label for="inline-primary-5"></label>
                                        </div>
                                    </td>
                                    <td>
                                    5
                                    </td>
                                    <td><img height="20" width="40" src="assets/images/products/02.png" alt=""></td>
                                    <td>Shoes</td>
                                    <td>sport </td>
                                    <td>Lorem ipsum.</td>
                                    <td>2019-04-29</td>
                                    <td>
                                        <input class="my_check" type="checkbox"  data-on-color="success"
                                               data-off-color="default" data-size="small"
                                               data-on-text="<i class='zmdi zmdi-eye'></i>"
                                               data-off-text="<i class='zmdi zmdi-eye-off'></i>">
                                    </td>
                                    <td>
                                        <a href="page-menu-edit.php" class="mx-2" title="edit"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="#" class="mx-2 sil" title="delete"><i class="fa fa-trash"></i></a>
                                        <a href="page-menu-show.php" class="mx-2" title="show"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class=" col-md-12 my-2">
                            <form class="form-inline">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>
                                            Göstər <select name="length" aria-controls="example1"
                                                           class="form-control input-sm  mx-sm-3 "
                                                           onchange="this.form.submit()">
                                                <option value="0">0</option>
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> element
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <ul class="pagination m-0">
                                            <li class="page-item"><a class="page-link" href="javascript:void();">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void();">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void();">2</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void();">3</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void();">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group float-right">
                                        <div id="example1_filter">
                                            <label>
                                                Axtarış:<input type="search" id="search"
                                                               class="form-control input-sm  mx-sm-3 "
                                                               placeholder="Axtar..." onchange="this.form.submit()"
                                                               name="search" value="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="d-none">
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
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