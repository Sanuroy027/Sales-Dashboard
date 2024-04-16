<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:37 GMT -->
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
                        
                        <!-- end row -->
                        <!-- end row -->
                        <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Team-Leader Departments</h4>
                                <button type="button"> <a href="create-deprtmform.php" class="">
                                    Create new
                                </a>
                                </button>

                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-xl-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <h4 class="card-title"> </h4>
                                                                                     
                                            <div class="table-responsive">
                                                <table id="example" class="table align-middle mb-0">
        
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>
                                                                <button type="button" class="btn btn-light btn-sm">View</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>
                                                                <button type="button" class="btn btn-light btn-sm">View</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>
                                                                <button type="button" class="btn btn-light btn-sm">View</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>
                                                                <button type="button" class="btn btn-light btn-sm">View</button>
                                                            </td>
                                                        </tr>
                                                       
                                                       
                                                       
                                                        

                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>
                        <!-- end row -->
        
                        
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
        $('#example').dataTable({
            "pageLength": 100
        });
    </script>

    </script>
    <!-- App js -->
    <script src=" js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/tables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:37 GMT -->
</html>
