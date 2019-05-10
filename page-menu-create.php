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
                    <h4 class="page-title">Menyu əlavə et</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Ana Səhifə</a></li>
                        <li class="breadcrumb-item"><a href="page-menu.php">Menyu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Menyu əlavə et</li>
                    </ol>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-info nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabe-13"> <img height="16"
                                                                                                       src="assets/flags/4x3/az.svg"
                                                                                                       alt="aze">
                                        <span class="hidden-xs">Azərbaycan dili</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-14"><img height="16"
                                                                                               src="assets/flags/4x3/gb.svg"
                                                                                               alt="aze"> <span
                                                class="hidden-xs">English</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-15"><img height="16"
                                                                                               src="assets/flags/4x3/ru.svg"
                                                                                               alt="aze"> <span
                                                class="hidden-xs">Русский</span></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div id="tabe-13" class="container tab-pane active">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="fname" class="col-form-label">Ad</label>
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                   placeholder="Ad" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="lname" class="col-form-label">Link adı</label>
                                            <input type="text" class="form-control" id="lname" name="lname"
                                                   placeholder="Link adı" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="tname" class="col-form-label"> Title</label>
                                            <input type="text" class="form-control" id="tname" name="tname"
                                                   placeholder="Başlıq" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="kname" class="col-form-label">Keywords</label>
                                            <input type="text" class="form-control" id="kname" name="kname"
                                                   placeholder="Açar sözlər" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="dname" class="col-form-label">Descriptipn </label>
                                            <input type="text" class="form-control" id="dname" name="dname"
                                                   placeholder="Açıqlama" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="autoclose-datepicker" class="col-form-label">Date</label>
                                            <input type="text" id="autoclose-datepicker" class="form-control"
                                                   name="date" required placeholder="tarix">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="pass" class="col-form-label">Password </label>
                                            <input type="password" class="form-control" id="pass" name="pname"
                                                   placeholder="şifrə" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="mail" class="col-form-label">Email </label>
                                            <input type="email" class="form-control" id="mail" name="ename"
                                                   placeholder="email" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="deyer" class="col-form-label">Dəyər </label>
                                            <input type="number" class="form-control" id="deyer" name="deyername"
                                                   min="0" max="100" value="1" required>
                                        </div>
                                        <div class="form-group  col-md-4">
                                            <label>Şəkil
                                                <small>[multiselect]</small>
                                            </label>
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input"
                                                       id="inputGroupFile02">
                                                <label class="custom-file-label" for="inputGroupFile02">Seç</label>
                                            </div>
                                        </div>
                                        <div class="form-group  col-md-4">
                                            <label>Single select</label>
                                            <select class="form-control single-select">
                                                <option>India</option>
                                                <option>England</option>
                                                <option>America</option>
                                                <option>China</option>
                                                <option>Australiya</option>
                                                <option>Newzeland</option>
                                                <option>Dubai</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>

                                        <div class="form-group  col-md-4">
                                            <label>Multiple select boxes</label>
                                            <select class="form-control multiple-select" multiple="multiple">
                                                <option>India</option>
                                                <option>England</option>
                                                <option>America</option>
                                                <option>China</option>
                                                <option>Australiya</option>
                                                <option>Newzeland</option>
                                                <option>Dubai</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>

                                        
                                        <div class="form-group">
                                            <label for="summernoteEditor">Haqqında</label>
                                            <div class="summernoteEditor">
                                                <h4>Features</h4>
                                                <img src="assets/images/products/05.png" class="ml-2 mb-2 w-25"
                                                     alt="image"
                                                     align="right">
                                                <p class="text-justify">
                                                    *Məhsul nisyə satılan zaman rəsmiləşdirilməsi üçün 0-8% xidmət haqqı
                                                    əlavə
                                                    olunur.

                                                    **Məhsul nisyə satılan zaman sistemdə yuvarlaqlaşdırma tətbiq
                                                    olunduğuna
                                                    görə ümumi qiymətdə fərq yarana bilər.

                                                    ***Bu məhsulu endirimli qiymətlə (endirim olduqda) BirKart
                                                    vasitəsilə ala
                                                    bilərsiniz.
                                                    Mənbə :
                                                    https://kontakt.az/iphone-x-64gb-space-grey/?gclid=EAIaIQobChMI-sCsl4ft4QIVTuaaCh042wPtEAAYASAAEgIePPD_BwE
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-footer">
                                            <a href="page-menu.php" id="cancel" type="submit" class="btn btn-danger"><i
                                                        class="fa fa-times"></i> Ləğv et</a>
                                            <button id="save" type="submit" class="btn btn-success"><i
                                                        class="fa fa-check-square-o"></i> Yadda saxla
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div id="tabe-14" class="container tab-pane fade">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="fname" class="col-form-label">Ad</label>
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                   placeholder="Ad" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="lname" class="col-form-label">Link adı</label>
                                            <input type="text" class="form-control" id="lname" name="lname"
                                                   placeholder="Link adı" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="tname" class="col-form-label"> Title</label>
                                            <input type="text" class="form-control" id="tname" name="tname"
                                                   placeholder="Başlıq" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="kname" class="col-form-label">Keywords</label>
                                            <input type="text" class="form-control" id="kname" name="kname"
                                                   placeholder="Açar sözlər" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="dname" class="col-form-label">Descriptipn </label>
                                            <input type="text" class="form-control" id="dname" name="dname"
                                                   placeholder="Açıqlama" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="autoclose-datepicker" class="col-form-label">Date</label>
                                            <input type="text" id="autoclose-datepicker" class="form-control"
                                                   name="date" required placeholder="tarix">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="pass" class="col-form-label">Password </label>
                                            <input type="password" class="form-control" id="pass" name="pname"
                                                   placeholder="şifrə" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="mail" class="col-form-label">Email </label>
                                            <input type="email" class="form-control" id="mail" name="ename"
                                                   placeholder="email" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="deyer" class="col-form-label">Dəyər </label>
                                            <input type="number" class="form-control" id="deyer" name="deyername"
                                                   min="0" max="100" value="1" required>
                                        </div>
                                        <div class="form-group  col-md-4">
                                            <label>Şəkil
                                                <small>[multiselect]</small>
                                            </label>
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input"
                                                       id="inputGroupFile02">
                                                <label class="custom-file-label" for="inputGroupFile02">Seç</label>
                                            </div>
                                        </div>
                                        <div class="form-group  col-md-4">
                                            <label>Single select</label>
                                            <select class="form-control single-select">
                                                <option>India</option>
                                                <option>England</option>
                                                <option>America</option>
                                                <option>China</option>
                                                <option>Australiya</option>
                                                <option>Newzeland</option>
                                                <option>Dubai</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>

                                        <div class="form-group  col-md-4">
                                            <label>Multiple select boxes</label>
                                            <select class="form-control multiple-select" multiple="multiple">
                                                <option>India</option>
                                                <option>England</option>
                                                <option>America</option>
                                                <option>China</option>
                                                <option>Australiya</option>
                                                <option>Newzeland</option>
                                                <option>Dubai</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="summernoteEditor">Haqqında</label>
                                            <div class="summernoteEditor">
                                                <h4>Features</h4>
                                                <img src="assets/images/products/05.png" class="ml-2 mb-2 w-25"
                                                     alt="image"
                                                     align="right">
                                                <p class="text-justify">
                                                    *Məhsul nisyə satılan zaman rəsmiləşdirilməsi üçün 0-8% xidmət haqqı
                                                    əlavə
                                                    olunur.

                                                    **Məhsul nisyə satılan zaman sistemdə yuvarlaqlaşdırma tətbiq
                                                    olunduğuna
                                                    görə ümumi qiymətdə fərq yarana bilər.

                                                    ***Bu məhsulu endirimli qiymətlə (endirim olduqda) BirKart
                                                    vasitəsilə ala
                                                    bilərsiniz.
                                                    Mənbə :
                                                    https://kontakt.az/iphone-x-64gb-space-grey/?gclid=EAIaIQobChMI-sCsl4ft4QIVTuaaCh042wPtEAAYASAAEgIePPD_BwE
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-footer">
                                            <a href="page-menu.php" id="cancel" type="submit" class="btn btn-danger"><i
                                                        class="fa fa-times"></i> Ləğv et</a>
                                            <button id="save" type="submit" class="btn btn-success"><i
                                                        class="fa fa-check-square-o"></i> Yadda saxla
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div id="tabe-15" class="container tab-pane fade">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="fname" class="col-form-label">Ad</label>
                                            <input type="text" class="form-control" id="fname" name="fname"
                                                   placeholder="Ad" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="lname" class="col-form-label">Link adı</label>
                                            <input type="text" class="form-control" id="lname" name="lname"
                                                   placeholder="Link adı" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="tname" class="col-form-label"> Title</label>
                                            <input type="text" class="form-control" id="tname" name="tname"
                                                   placeholder="Başlıq" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="kname" class="col-form-label">Keywords</label>
                                            <input type="text" class="form-control" id="kname" name="kname"
                                                   placeholder="Açar sözlər" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="dname" class="col-form-label">Descriptipn </label>
                                            <input type="text" class="form-control" id="dname" name="dname"
                                                   placeholder="Açıqlama" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="autoclose-datepicker" class="col-form-label">Date</label>
                                            <input type="text" id="autoclose-datepicker" class="form-control"
                                                   name="date" required placeholder="tarix">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="pass" class="col-form-label">Password </label>
                                            <input type="password" class="form-control" id="pass" name="pname"
                                                   placeholder="şifrə" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="mail" class="col-form-label">Email </label>
                                            <input type="email" class="form-control" id="mail" name="ename"
                                                   placeholder="email" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="deyer" class="col-form-label">Dəyər </label>
                                            <input type="number" class="form-control" id="deyer" name="deyername"
                                                   min="0" max="100" value="1" required>
                                        </div>
                                        <div class="form-group  col-md-4">
                                            <label>Şəkil
                                                <small>[multiselect]</small>
                                            </label>
                                            <div class="custom-file">
                                                <input type="file" multiple class="custom-file-input"
                                                       id="inputGroupFile02">
                                                <label class="custom-file-label" for="inputGroupFile02">Seç</label>
                                            </div>
                                        </div>
                                        <div class="form-group  col-md-4">
                                            <label>Single select</label>
                                            <select class="form-control single-select">
                                                <option>India</option>
                                                <option>England</option>
                                                <option>America</option>
                                                <option>China</option>
                                                <option>Australiya</option>
                                                <option>Newzeland</option>
                                                <option>Dubai</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>

                                        <div class="form-group  col-md-4">
                                            <label>Multiple select boxes</label>
                                            <select class="form-control multiple-select" multiple="multiple">
                                                <option>India</option>
                                                <option>England</option>
                                                <option>America</option>
                                                <option>China</option>
                                                <option>Australiya</option>
                                                <option>Newzeland</option>
                                                <option>Dubai</option>
                                                <option>United Kingdom</option>
                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="summernoteEditor">Haqqında</label>
                                            <div class="summernoteEditor">
                                                <h4>Features</h4>
                                                <img src="assets/images/products/05.png" class="ml-2 mb-2 w-25"
                                                     alt="image"
                                                     align="right">
                                                <p class="text-justify">
                                                    *Məhsul nisyə satılan zaman rəsmiləşdirilməsi üçün 0-8% xidmət haqqı
                                                    əlavə
                                                    olunur.

                                                    **Məhsul nisyə satılan zaman sistemdə yuvarlaqlaşdırma tətbiq
                                                    olunduğuna
                                                    görə ümumi qiymətdə fərq yarana bilər.

                                                    ***Bu məhsulu endirimli qiymətlə (endirim olduqda) BirKart
                                                    vasitəsilə ala
                                                    bilərsiniz.
                                                    Mənbə :
                                                    https://kontakt.az/iphone-x-64gb-space-grey/?gclid=EAIaIQobChMI-sCsl4ft4QIVTuaaCh042wPtEAAYASAAEgIePPD_BwE
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-footer">
                                            <a href="page-menu.php" id="cancel" type="submit" class="btn btn-danger"><i
                                                        class="fa fa-times"></i> Ləğv et</a>
                                            <button id="save" type="submit" class="btn btn-success"><i
                                                        class="fa fa-check-square-o"></i> Yadda saxla
                                            </button>
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