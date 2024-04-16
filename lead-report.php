<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/nextcloud-django/layouts/charts-apex.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:43 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Lead report- Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href=" images/favicon.png">

    <!-- Bootstrap Css -->
    <link href=" css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href=" css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href=" css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">




        <!-- ========== Left Sidebar Start ========== -->
        <?php include("inc/nav.php"); ?>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Lead Charts</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">

                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Line with Data Labels</h4>

                                    <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Dashed Line</h4>

                                        <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Spline Area</h4>

                                        <div id="spline_area" class="apex-charts" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!--end card-->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <?php include("inc/footer.php"); ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <?php include("inc/footer.php"); ?>
        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src=" libs/jquery/jquery.min.js"></script>
        <script src=" libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src=" libs/metismenu/metisMenu.min.js"></script>
        <script src=" libs/simplebar/simplebar.min.js"></script>
        <script src=" libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src=" libs/apexcharts/apexcharts.min.js"></script>

        <!-- apexcharts init -->
        <script src=" js/pages/apexcharts.init.js"></script>

        <!-- App js -->
        <script src=" js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/nextcloud-django/layouts/charts-apex.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:43 GMT -->

</html>