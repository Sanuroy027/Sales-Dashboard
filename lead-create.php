<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/projects-create.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:16 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Create New Lead - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href=" images/favicon.png">

        <link href=" libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- dropzone css -->
        <link href=" libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-sm-0 font-size-18">Create New Leads</h4>

                                  </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <form>
                                            <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Leads Name</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="projectname" type="text" class="form-control" placeholder="Enter Leads Name...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Leads Mob. Number</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="projectname" type="text" class="form-control" placeholder="Enter Leads Number...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="projectname" class="col-form-label col-lg-2">Leads Mail Id</label>
                                                <div class="col-lg-10">
                                                    <input id="projectname" name="projectname" type="text" class="form-control" placeholder="Enter Leads Mail Id...">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="projectdesc" class="col-form-label col-lg-2">Lead Address</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" id="projectdesc" rows="3" placeholder="Enter lead Address..."></textarea>
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-form-label col-lg-2">Leads Date</label>
                                                <div class="col-lg-10">
                                                    <div class="input-daterange input-group" id="project-date-inputgroup" data-provide="datepicker" data-date-format="dd M, yyyy"  data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                                        <input type="text" class="form-control" placeholder="Start Date" name="start" />
                                                        <input type="text" class="form-control" placeholder="End Date" name="end" />
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </form>
                                        <div class="row mb-4">
                                            <label class="col-form-label col-lg-2">Attached Files</label>
                                            <div class="col-lg-10">
                                                <form action="https://themesbrand.com/" method="post" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                    </div>
                    
                                                    <div class="dz-message needsclick">
                                                        <div class="mb-3">
                                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                                        </div>
                                                        
                                                        <h4>Drop files here or click to upload.</h4>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-10">
                                                <button type="submit" class="btn btn-primary">Create Leads</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
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

      
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src=" libs/jquery/jquery.min.js"></script>
        <script src=" libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src=" libs/metismenu/metisMenu.min.js"></script>
        <script src=" libs/simplebar/simplebar.min.js"></script>
        <script src=" libs/node-waves/waves.min.js"></script>

        <!-- bootstrap datepicker -->
        <script src=" libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- dropzone plugin -->
        <script src=" libs/dropzone/min/dropzone.min.js"></script>

        <script src=" js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote-django/layouts/projects-create.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:16 GMT -->
</html>
