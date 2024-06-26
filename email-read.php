<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/email-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:13 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Read Email | Skote - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href=" images/favicon.png">

        <!-- Summernote css -->
        <link href=" libs/summernote/summernote-bs4.min.html" rel="stylesheet" type="text/css" />

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
                                    <h4 class="mb-sm-0 font-size-18">Read Email</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                                            <li class="breadcrumb-item active">Read Email</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <!-- Left sidebar -->
                                <div class="email-leftbar card">
                                    <button type="button" class="btn btn-danger btn-block waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#composemodal">
                                        Compose
                                    </button>
                                    <div class="mail-list mt-4">
                                        <a href="#" class="active"><i class="mdi mdi-email-outline me-2"></i> Inbox <span class="ms-1 float-end">(18)</span></a>
                                        <a href="#"><i class="mdi mdi-star-outline me-2"></i>Starred</a>
                                        <a href="#"><i class="mdi mdi-diamond-stone me-2"></i>Important</a>
                                        <a href="#"><i class="mdi mdi-file-outline me-2"></i>Draft</a>
                                        <a href="#"><i class="mdi mdi-email-check-outline me-2"></i>Sent Mail</a>
                                        <a href="#"><i class="mdi mdi-trash-can-outline me-2"></i>Trash</a>
                                    </div>

                                    <h6 class="mt-4">Labels</h6>

                                    <div class="mail-list mt-1">
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-info float-end"></span>Theme Support</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-warning float-end"></span>Freelance</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-primary float-end"></span>Social</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-danger float-end"></span>Friends</a>
                                        <a href="#"><span class="mdi mdi-arrow-right-drop-circle text-success float-end"></span>Family</a>
                                    </div>

                                    <h6 class="mt-4">Chat</h6>

                                    <div class="mt-2">
                                        <a href="" class="media">
                                            <img class="d-flex me-3 rounded-circle" src=" images/users/avatar-2.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Scott Median</p>
                                                <p class="text-muted">Hello</p>
                                            </div>
                                        </a>

                                        <a href="#" class="media">
                                            <img class="d-flex me-3 rounded-circle" src=" images/users/avatar-3.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Julian Rosa</p>
                                                <p class="text-muted">What about our next..</p>
                                            </div>
                                        </a>

                                        <a href="#" class="media">
                                            <img class="d-flex me-3 rounded-circle" src=" images/users/avatar-4.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">David Medina</p>
                                                <p class="text-muted">Yeah everything is fine</p>
                                            </div>
                                        </a>

                                        <a href="#" class="media">
                                            <img class="d-flex me-3 rounded-circle" src=" images/users/avatar-6.jpg" alt="Generic placeholder image" height="36">
                                            <div class="media-body chat-user-box">
                                                <p class="user-title m-0">Jay Baker</p>
                                                <p class="text-muted">Wow that's great</p>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                                <!-- End Left sidebar -->

                                <!-- Right Sidebar -->
                                <div class="email-rightbar mb-3">

                                    <div class="card">
                                        <div class="btn-toolbar p-3" role="toolbar">
                                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-inbox"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="fa fa-exclamation-circle"></i></button>
                                                <button type="button" class="btn btn-primary waves-light waves-effect"><i class="far fa-trash-alt"></i></button>
                                            </div>
                                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-folder"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>
                                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-tag"></i> <i class="mdi mdi-chevron-down ms-1"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Updates</a>
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Team Manage</a>
                                                </div>
                                            </div>

                                            <div class="btn-group me-2 mb-2 mb-sm-0">
                                                <button type="button" class="btn btn-primary waves-light waves-effect dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    More <i class="mdi mdi-dots-vertical ms-2"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Mark as Unread</a>
                                                    <a class="dropdown-item" href="#">Mark as Important</a>
                                                    <a class="dropdown-item" href="#">Add to Tasks</a>
                                                    <a class="dropdown-item" href="#">Add Star</a>
                                                    <a class="dropdown-item" href="#">Mute</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="media mb-4">
                                                <img class="d-flex me-3 rounded-circle avatar-sm" src=" images/users/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="font-size-14 mt-1">Humberto D. Champion</h5>
                                                    <small class="text-muted">support@domain.com</small>
                                                </div>
                                            </div>

                                            <h4 class="mt-0 font-size-16">This Week's Top Stories</h4>

                                            <p>Dear Lorem Ipsum,</p>
                                            <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate molestie. In at felis ac velit maximus convallis.
                                            </p>
                                            <p>Sed elementum turpis eu lorem interdum, sed porttitor eros commodo. Nam eu venenatis tortor, id lacinia diam. Sed aliquam in dui et porta. Sed bibendum orci non tincidunt ultrices. Vivamus fringilla, mi lacinia dapibus condimentum, ipsum urna lacinia lacus, vel tincidunt mi nibh sit amet lorem.</p>
                                            <p>Sincerly,</p>
                                            <hr/>

                                            <div class="row">
                                                <div class="col-xl-2 col-6">
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src=" images/small/img-3.jpg" alt="Card image cap">
                                                        <div class="py-2 text-center">
                                                            <a href="#" class="fw-medium">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-6">
                                                    <div class="card">
                                                        <img class="card-img-top img-fluid" src=" images/small/img-4.jpg" alt="Card image cap">
                                                        <div class="py-2 text-center">
                                                            <a href="#" class="fw-medium">Download</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="javascript: void(0);" class="btn btn-secondary waves-effect mt-4"><i class="mdi mdi-reply"></i> Reply</a>
                                        </div>

                                    </div>
                                </div>
                                <!-- card -->

                            </div>
                            <!-- end Col-9 -->

                        </div>

                    </div>
                    <!-- End row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!-- Modal -->
            <div class="modal fade" id="composemodal" tabindex="-1" role="dialog" aria-labelledby="composemodalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="composemodalTitle">New Message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="To">
                                </div>

                                <div class="mb-3">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="mb-3">
                                    <form method="post">
                                        <textarea id="email-editor" name="area"></textarea>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Send <i class="fab fa-telegram-plane ms-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end layout-wrapper-->
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
        
        <!--tinymce js-->
        <script src=" libs/tinymce/tinymce.min.js"></script>

        <!-- email editor init -->
        <script src=" js/pages/email-editor.init.js"></script>

        <!-- App js -->
        <script src=" js/app.js"></script>

    </body>


<!-- Mirrored from themesbrand.com/skote-django/layouts/email-read.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Apr 2021 19:48:14 GMT -->
</html>