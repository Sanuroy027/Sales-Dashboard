<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote-django/layouts/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:46:33 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Nextcloud - Admin & Dashboard Template</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-GLhlTQ8iGGGHgF8K92HRzL" crossorigin="anonymous">


</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Start navbar here -->

        <?php include("inc/nav.php"); ?>

        <!-- end of navbar here -->



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
                                <h4 class="mb-sm-0 font-size-18"></h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>

                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card overflow-hidden">
                                <div class="bg-primary bg-soft">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="text-primary p-2">
                                                <h3 class="text-primary">Welcome Back To !</h3>
                                               <h5 class="primary ">Nxtcloud Dashboard</h5>
                                            </div>
                                        </div>
                                        <div class="col-5 align-self-end">
                                            <img src=" images/profile-img.png" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="avatar-md profile-user-wid mb-4">
                                                <img src=" images/profile.png" alt="" class="img-thumbnail rounded-circle">
                                            </div>
                                            <h5 class="font-size-20 text-truncate">Sanu Kumar Roy</h5>
                                            <p class="text-muted mb-0 text-truncate">BDA</p>
                                        </div>

                                        <div class="col-sm-8">
                                            <div class="pt-4">

                                                <div class="row">
                                                    <div class="col-4">
                                                        <h5 class="font-size-20">1000</h5>
                                                        <p class="text-muted mb-0"> Total Leads</p>
                                                    </div>
                                                    <div class="col-4">
                                                        <h5 class="font-size-20">$1245</h5>
                                                        <p class="text-muted mb-0"> Total Revenue</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid">

                                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                                </div>

                                <div class="row">

                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-primary shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                            Earnings (Monthly)</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-success shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                            Earnings (Annual)</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Earnings (Monthly) Card Example -->
                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                            Tasks
                                                        </div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                    80%</div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm mr-2">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                            Today Tasks
                                                        </div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                    40%</div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm mr-2">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                            Follow Up
                                                        </div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                    20%</div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm mr-2">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-info shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                            Tasks Done
                                                        </div>
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col-auto">
                                                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                                    30%</div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="progress progress-sm mr-2">
                                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 300%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-xl-3 col-md-6 mb-4">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-2">
                                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                            Pending Tasks</div>
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-sm-flex flex-wrap">
                                                    <h4 class="card-title mb-4">Email Reports</h4>
                                                    <div class="ms-auto">
                                                        <ul class="nav nav-pills">
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Week</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="#">Month</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link active" href="#">Year</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
                                            </div>
                                        </div>



                                        <!-- end row -->

                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                            <!-- container-fluid -->
                        </div>
                        <!-- End Page-content -->





                        <footer class="footer ">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> Nextcloud
                                    </div>
                                    <div class="col-sm-6 text-end ">
                                       
                                        <a href="https://www.instagram.com/____sam__27/" target="_blank" rel="noopener noreferrer">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                        
                                        <a href="https://github.com/Sanuroy027" target="_blank" rel="noopener noreferrer">
                                            <i class="fab fa-github"></i>
                                        </a>
                                       : Design & Develop by sanu Kumar Roy 
                                    </div>

                                </div>
                            </div>
                        </footer>

                    </div>
                    <!-- end main content-->

                </div>
                <!-- END layout-wrapper -->

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

                <!-- dashboard init -->
                <script src=" js/pages/dashboard.init.js"></script>

                <!-- App js -->
                <script src=" js/app.js"></script>
</body>


<!-- Mirrored from themesbrand.com/skote-django/layouts/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:47:23 GMT -->

</html>