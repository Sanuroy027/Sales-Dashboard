<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote-django/layouts/projects-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:16 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Lead List - Admin & Dashboard Template</title>
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
     <!-- DataTables -->
     <link href=" libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href=" libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href=" libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     


</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <?php include("inc/nav.php"); ?>

        <!-- ========== Left Sidebar Start ========== -->

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
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Lead List</h4>
                                <button type="button"> <a href="create-deprtmform.php" class="">
                                    Create new
                                </a>
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <div class="table-responsive">
                                    <table id="example" class="table project-list-table table-nowrap align-middle table-borderless">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 100px">Sn</th>
                                                <th scope="col">Leads</th>
                                                <th scope="col">Leads No</th>
                                                <th scope="col">Lead Mail ID</th>
                                                <th scope="col">Leads Address</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Sam poul</a></h5>
                                                    
                                                </td>
                                                <td>
                                                    620xxxx126
                                                </td>
                                                <td>
                                                    sam@gmail.com
                                                </td>
                                                <td>
                                                    London
                                                </td>
                                                
                                                <td><span class="badge bg-success">Completed</span></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Sam poul</a></h5>
                                                    
                                                </td>
                                                <td>
                                                    620xxxx126
                                                </td>
                                                <td>
                                                    sam@gmail.com
                                                </td>
                                                <td>
                                                    London
                                                </td>
                                                
                                                <td><span class="badge bg-success">Completed</span></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Sam poul</a></h5>
                                                    
                                                </td>
                                                <td>
                                                    620xxxx126
                                                </td>
                                                <td>
                                                    sam@gmail.com
                                                </td>
                                                <td>
                                                    London
                                                </td>
                                                
                                                <td><span class="badge bg-success">Completed</span></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Sam poul</a></h5>
                                                    
                                                </td>
                                                <td>
                                                    620xxxx126
                                                </td>
                                                <td>
                                                    sam@gmail.com
                                                </td>
                                                <td>
                                                    London
                                                </td>
                                                
                                                <td><span class="badge bg-danger">Delay</span></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Sam poul</a></h5>
                                                    
                                                </td>
                                                <td>
                                                    620xxxx126
                                                </td>
                                                <td>
                                                    sam@gmail.com
                                                </td>
                                                <td>
                                                    London
                                                </td>
                                                
                                                <td><span class="badge bg-danger">Delay</span></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Sam poul</a></h5>
                                                    
                                                </td>
                                                <td>
                                                    620xxxx126
                                                </td>
                                                <td>
                                                    sam@gmail.com
                                                </td>
                                                <td>
                                                    London
                                                </td>
                                                
                                                <td><span class="badge bg-success">Completed</span></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">Tom poul</a></h5>
                                                    
                                                </td>
                                                <td>
                                                    620xxxx126
                                                </td>
                                                <td>
                                                    sam@gmail.com
                                                </td>
                                                <td>
                                                    Paris
                                                </td>
                                                
                                                <td><span class="badge bg-danger">Delay</span></td>
                                                
                                                <td>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="text-center my-3">
                                <a href="javascript:void(0);" class="text-success"><i class="bx bx-loader bx-spin font-size-18 align-middle mr-2"></i> Load more </a>
                            </div>
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

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

    <!-- Required datatable js -->
 <script src=" libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src=" libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
          <!-- Responsive examples -->
          <script src=" libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src=" libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->.
        <!-- <script src=" js/pages/datatables.init.js"></script>  . -->
<script>
    $('#example').dataTable( {
  "pageLength": 100
} );
</script>
    <!-- App js -->
    <script src=" js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/projects-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:16 GMT -->

</html>