<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote-django/layouts/contacts-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:19 GMT -->

<head>

    <meta charset="utf-8" />
    <title> User List |- Admin & Dashboard Template</title>
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
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Users List</h4>
                                <button type="button"> <a href="create-deprtmform.php" class="">
                                    Create New User
                                </a>
                                </button>
                                                             
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table align-middle table-nowrap table-hover">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col" style="width: 70px;">SN</th>
                                                    <th scope="col">User Name</th>
                                                    <th scope="col">User Email</th>
                                                    <th scope="col">User Address</th>
                                                    <th scope="col">Leads</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                1
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                2
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                3
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                4
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                5
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                6
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                7
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar-xs">
                                                            <span class="avatar-title rounded-circle">
                                                                8
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">David McHenry</a></h5>
                                                        <p class="text-muted mb-0">UI/UX Designer</p>
                                                    </td>
                                                    <td>david@skote.com</td>
                                                    <td> India </td>
                                                   
                                                   <td>
                                                        125
                                                    </td>
                                                    <td>
                                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                                            <li class="list-inline-item px-2">
                                                                <a href="#" title="Message"><i class="bx bx-message-square-dots"></i></a>
                                                            </li>
                                                            <li class="list-inline-item px-2">
                                                                <a href="uuser-profile1.php" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="pagination pagination-rounded justify-content-center mt-4">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">4</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">5</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    $('#example').dataTable( {
  "pageLength": 100
} );
</script>
    <!-- App js -->
    <script src=" js/app.js"></script>

</body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/contacts-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:19 GMT -->

</html>