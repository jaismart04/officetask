<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>MyTask</title>
    <!--favicon-->
    <link rel="icon" href="images/favicon-32x32.png" type="image/png" />
    <!-- Vector CSS -->
    <link href="{{url('plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <!--plugins-->
    <link href="{{url('plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{url('css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{url('js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{url('css/icons.css')}}" />
    <link href="{{url('plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
    <link href="{{url('css/ladda.css')}}" rel="stylesheet" />
    <link href="{{url('css/toastr.min.css')}}" rel="stylesheet" />
    <link href="{{url('css/datatables.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
    <link href="{{url('plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
    <!-- App CSS -->
    <link rel="stylesheet" href="{{url('css/app.css')}}" />
    <link rel="stylesheet" href="{{url('css/buttons.dataTables.min.css')}}" />

    <link rel="stylesheet" href="{{url('css/dark-sidebar.css')}}" />
    <link rel="stylesheet" href="{{url('css/dark-theme.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>



<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="left-topbar d-flex align-items-center">
            <a href="javascript:;" class="toggle-btn"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <div class="flex-grow-1 search-bar">
            <div class="input-group">
                <div class="input-group-prepend search-arrow-back">
                    <button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
                    </button>
                </div>
                <input type="text" class="form-control" placeholder="search" />
                <div class="input-group-append">
                    <button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
                    </button>
                </div>
            </div>

        </div>
        <div class="right-topbar ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item search-btn-mobile">
                    <a class="nav-link position-relative" href="javascript:;"> <i
                            class="bx bx-search vertical-align-middle"></i>
                    </a>
                </li>
                <li class="nav-item dropdown dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;"
                        data-toggle="dropdown"> <span class="msg-count">0</span>
                        <i class="bx bx-comment-detail vertical-align-middle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:;">
                            <div class="msg-header">
                                <h6 class="msg-header-title">0 New</h6>
                                <p class="msg-header-subtitle">Application Messages</p>
                            </div>
                        </a>

                        <a href="javascript:;">
                            <div class="text-center msg-footer">View All Messages</div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-lg">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javascript:;"
                        data-toggle="dropdown"> <i class="bx bx-bell vertical-align-middle"></i>
                        <span class="msg-count">0</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="javascript:;">
                            <div class="msg-header">
                                <h6 class="msg-header-title">0 New</h6>
                                <p class="msg-header-subtitle">Application Notifications</p>
                            </div>
                        </a>

                        <a href="javascript:;">
                            <div class="text-center msg-footer">View All Notifications</div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-user-profile">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                        data-toggle="dropdown">
                        <div class="media user-box align-items-center">
                            <div class="media-body user-info">
                                <p class="user-name mb-0">jaiseelan</p>
                                <p class="designattion mb-0" style="color: #67ef12;">Online</p>
                            </div>
                            <img src="{{url('images/pf.PNG')}}" class="user-img" alt="user avatar">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider mb-0"></div> <a class="dropdown-item" href="{{url('logout')}}"><i
                                class="bx bx-power-off"></i><span>Logout</span></a>
                    </div>
                </li>

            </ul>
        </div>
    </nav>
</header>
<div class="wrapper">
    <!--sidebar-wrapper-->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <h4 class="logo-text">MyTask</h4>
            </div>
            <a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
            </a>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{url('addcompany')}}">
                    <div class="parent-icon icon-color-2"><i class="bx bx-home-alt"></i>
                    </div>
                    <div class="menu-title">Company</div>
                </a>
            </li>

            <li>
                <a href="{{url('employee')}}">
                    <div class="parent-icon icon-color-5"><i class="bx bx-group"></i>
                    </div>
                    <div class="menu-title">Employee</div>
                </a>
            </li>

        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar-wrapper-->

    <!--start overlay-->
    <div class="overlay toggle-btn-mobile"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--footer -->
    <div class="footer">
        <p class="mb-0"> @2022 | Developed : <a href="" target="_blank"></a>
        </p>
    </div>
    <!-- end footer -->
</div>