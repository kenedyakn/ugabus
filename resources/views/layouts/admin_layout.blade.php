<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/admin_inc/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>UgaBus:Admin</title>
    <!-- CSS -->
    <link rel="stylesheet" href="/admin_inc/assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End pre loader -->
<div id="app">
    <aside class="main-sidebar fixed offcanvas shadow">
        <section class="sidebar">
            <div class="w-80px mt-3 mb-3 ml-3">
                {{--<img src="/admin_inc/assets/img/basic/logo.png" alt="">--}}
                <h4>Uga Bus</h4>
            </div>
            <div class="relative">
                <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                   aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm fab-right fab-top btn-primary shadow1 ">
                    <i class="icon icon-cogs"></i>
                </a>
                <div class="user-panel p-3 light mb-2">
                    <div>
                        <div class="float-left image">
                            <img class="user_avatar" src="/admin_inc/assets/img/dummy/u2.png" alt="User Image">
                        </div>
                        <div class="float-left info">
                            <h6 class="font-weight-light mt-2 mb-1">{{Auth::guard('admin')->user()->last_name}}
                                {{Auth::guard('admin')->user()->first_name}}</h6>
                            <a href="#">Admin</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="collapse multi-collapse" id="userSettingsCollapse">
                        <div class="list-group mt-3 shadow">
                            <a href="index.html" class="list-group-item list-group-item-action ">
                                <i class="mr-2 icon-umbrella text-blue"></i>Profile
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="mr-2 icon-security text-purple"></i>Change Password</a>
                            <a href="/admin/logout" class="list-group-item list-group-item-action"><i class="mr-2 icon-security text-purple"></i>Logout</a>

                        </div>
                    </div>
                </div>
            </div>

            <ul class="sidebar-menu">
                <li class="header"><strong>MAIN NAVIGATION</strong></li>
                <li class="treeview"><a href="/admin">
                        <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>Dashboard</span> <i
                                class="icon icon-angle-left s-18 pull-right"></i>
                    </a>
                </li>
                <li class="treeview"><a href="#">
                        <i class="icon icon icon-package blue-text s-18"></i>
                        <span>Buses</span>
                        <span class="badge r-3 badge-primary pull-right">4</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/buses"><i class="icon icon-circle-o"></i>All Buses</a>
                        </li>
                        <li><a href="/admin/buses/create"><i class="icon icon-add"></i>Add
                                New Bus</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Agents<i
                                class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/agents"><i class="icon icon-circle-o"></i>All Agents</a>
                        </li>
                        <li><a href="/admin/agents/create"><i class="icon icon-add"></i>Add Agent</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Users<i
                                class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/admin/users"><i class="icon icon-circle-o"></i>All Users</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview no-b"><a href="#">
                        <i class="icon icon-package light-green-text s-18"></i>
                        <span>Inbox</span>
                        <span class="badge r-3 badge-success pull-right">20</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="panel-page-inbox.html"><i class="icon icon-circle-o"></i>All Messages</a>
                        </li>
                        <li><a href="panel-page-inbox-create.html"><i class="icon icon-add"></i>Compose</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>
    <!--Sidebar End-->
    <div class="page has-sidebar-left">
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                    <div class="search-bar">
                        <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                               placeholder="start typing...">
                    </div>
                    <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                       aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
                </div>
            </div>
        </div>
        <div class="navbar navbar-expand d-flex navbar-dark justify-content-between bd-navbar blue accent-3 shadow">
            <div class="relative">
                <div class="d-flex">
                    <div>
                        <a href="#" data-toggle="offcanvas" class="paper-nav-toggle pp-nav-toggle">
                            <i></i>
                        </a>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="nav-title text-white">Dashboard</h1>
                    </div>
                </div>
            </div>
            <!--Top Menu Start -->
            <div class="navbar-custom-menu p-t-10">
                <ul class="nav navbar-nav">
                    <!-- Messages-->
                    <li class="dropdown custom-dropdown messages-menu">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <i class="icon-message "></i>
                            <span class="badge badge-success badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu pl-2 pr-2">
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="/admin_inc/assets/img/dummy/u4.png" alt="">
                                                <span class="avatar-badge busy"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="/admin_inc/assets/img/dummy/u1.png" alt="">
                                                <span class="avatar-badge online"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="/admin_inc/assets/img/dummy/u2.png" alt="">
                                                <span class="avatar-badge idle"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="/admin_inc/assets/img/dummy/u3.png" alt="">
                                                <span class="avatar-badge busy"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown custom-dropdown notifications-menu">
                        <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-notifications "></i>
                            <span class="badge badge-danger badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer p-2 text-center"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                           aria-controls="navbarToggleExternalContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <i class=" icon-search3 "></i>
                        </a>
                    </li>
                    <!-- Right Sidebar Toggle Button -->
                    <li>
                        <a class="nav-link ml-2" data-toggle="control-sidebar">
                            <i class="icon-tasks "></i>
                        </a>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown custom-dropdown user user-menu">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="/admin_inc/assets/img/dummy/u8.png" class="user-image" alt="User Image">
                            <i class="icon-more_vert "></i>
                        </a>
                        <div class="dropdown-menu p-4">
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>
                                <div class="col"><a href="#">
                                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Profile</div>
                                    </a></div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Favourites</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                        <div class="pt-1">Saved</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>
                                <div class="col"><a href="#">
                                        <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Profile</div>
                                    </a></div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{--Content area--}}
        @yield('content')
        {{--End content area--}}
    </div>
    <!-- Right Sidebar -->
    <aside class="control-sidebar fixed white ">
        <div class="slimScroll">
            <div class="sidebar-header">
                <h4>Activity List</h4>
                <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
            </div>
            <div class="p-3">
                <div>
                    <div class="my-3">
                        <small>25% Complete</small>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="my-3">
                        <small>45% Complete</small>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="my-3">
                        <small>60% Complete</small>
                        `
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;" aria-valuenow="60"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="my-3">
                        <small>75% Complete</small>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="my-3">
                        <small>100% Complete</small>
                        <div class="progress" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="100"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 bg-primary text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="font-weight-normal s-14">Sodium</h5>
                        <span class="font-weight-lighter text-primary">Spark Bar</span>
                        <div> Oxygen
                            <span class="text-primary">
                                                    <i class="icon icon-arrow_downward"></i> 67%</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <canvas width="100" height="70" data-chart="spark" data-chart-type="bar"
                                data-dataset="[[28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100,28,68,41,43,96,45,100]]"
                                data-labels="['a','b','c','d','e','f','g','h','i','j','k','l','m','n','a','b','c','d','e','f','g','h','i','j','k','l','m','n']">
                        </canvas>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                    <tbody>
                    <tr>
                        <td>
                            <a href="#">INV-281281</a>
                        </td>
                        <td>
                            <span class="badge badge-success">Paid</span>
                        </td>
                        <td>$ 1228.28</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">INV-01112</a>
                        </td>
                        <td>
                            <span class="badge badge-warning">Overdue</span>
                        </td>
                        <td>$ 5685.28</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">INV-281012</a>
                        </td>
                        <td>
                            <span class="badge badge-success">Paid</span>
                        </td>
                        <td>$ 152.28</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">INV-01112</a>
                        </td>
                        <td>
                            <span class="badge badge-warning">Overdue</span>
                        </td>
                        <td>$ 5685.28</td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#">INV-281012</a>
                        </td>
                        <td>
                            <span class="badge badge-success">Paid</span>
                        </td>
                        <td>$ 152.28</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="sidebar-header">
                <h4>Activity</h4>
                <a href="#" data-toggle="control-sidebar" class="paper-nav-toggle  active"><i></i></a>
            </div>
            <div class="p-4">
                <div class="activity-item activity-primary">
                    <div class="activity-content">
                        <small class="text-muted">
                            <i class="icon icon-user position-left"></i> 5 mins ago
                        </small>
                        <p>Lorem ipsum dolor sit amet conse ctetur which ascing elit users.</p>
                    </div>
                </div>
                <div class="activity-item activity-danger">
                    <div class="activity-content">
                        <small class="text-muted">
                            <i class="icon icon-user position-left"></i> 8 mins ago
                        </small>
                        <p>Lorem ipsum dolor sit ametcon the sectetur that ascing elit users.</p>
                    </div>
                </div>
                <div class="activity-item activity-success">
                    <div class="activity-content">
                        <small class="text-muted">
                            <i class="icon icon-user position-left"></i> 10 mins ago
                        </small>
                        <p>Lorem ipsum dolor sit amet cons the ecte tur and adip ascing elit users.</p>
                    </div>
                </div>
                <div class="activity-item activity-warning">
                    <div class="activity-content">
                        <small class="text-muted">
                            <i class="icon icon-user position-left"></i> 12 mins ago
                        </small>
                        <p>Lorem ipsum dolor sit amet consec tetur adip ascing elit users.</p>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- /.right-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
    <div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="/admin_inc/assets/js/app.js"></script>
</body>
</html>

