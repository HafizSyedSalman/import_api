<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('assets/admin/favicon.png')}}">

    <title>Admin Dashboard</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>


    <!-- Bootstrap core CSS -->
    <link href="{{asset('views/assets/js/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('views/assets/fonts/font-awesome-4/css/font-awesome.min.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/jquery.gritter/css/jquery.gritter.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/jquery.nanoscroller/nanoscroller.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/jquery.easypiechart/jquery.easy-pie-chart.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/bootstrap.switch/bootstrap-switch.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/jquery.select2/select2.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/bootstrap.slider/css/slider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('views/assets/js/intro.js/introjs.css')}}" />

    
    <!-- Custom styles for this template -->
    <link href="{{asset('views/assets/css/style.css')}}" rel="stylesheet" />


</head>
<body>



<!-- Fixed navbar -->
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-gear"></span>
            </button>
            <a class="navbar-brand" href="index.php"><span>Admin Dashboard</span></a>
        </div>
        <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right user-nav">
                <li class="dropdown profile_menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src=""  height="30px" width="30px"/><span>Admin</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="profile-setting.php">Update Profile</a></li>
                        <li><a href="update-password.php">Update Password</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
            
                     

        </div>
        <!--/.nav-collapse animate-collapse -->
    </div>
</div>

<div id="cl-wrapper" class="fixed-menu">
    <div class="cl-sidebar" data-position="right" data-step="1" data-intro="<strong>Fixed Sidebar</strong> <br/> It adjust to your needs." >
        <div class="cl-toggle"><i class="fa fa-bars"></i></div>
        <div class="cl-navblock">
            <div class="menu-space">
                <div class="content">
                    <div class="side-user">
                        <div class="avatar"><img src="#" alt="Avatar" width="50px" height="50px" /></div>
                        <div class="info">
                            <a href="#">Admin</a>
                        </div>
                    </div>
                    <ul class="cl-vnavigation">
                        <li class="active"><a href="{{route('dashboards')}}"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
                        <li><a href="#"><i class="fa fa-user"></i><span>Clients</span></a>
                            <ul class="sub-menu">
                                <li ><a href="{{route('all_client')}}">All Clients</a></li>
                                <li  ><a href="{{route('add_client')}}">Add New Client</a></li>
                                <li  ><a href="{{route('import_client')}}">Export And Import Client</a></li>


                    </ul>
                    </li>

                    <li><a href="#"><i class="fa fa-group"></i><span>Client Groups</span></a>
                        <ul class="sub-menu">
                            <li ><a href="{{route('all_group')}}">All Groups</a></li>
                            <li ><a href="{{route('add_group')}}">Add New Group</a></li>
                    </ul>
                    </li>

                    <li><a href="#"><i class="fa fa-credit-card"></i><span>Invoices</span></a>
                        <ul class="sub-menu">
                            <li ><a href="all-invoices.php">All Invoices</a></li>
                            <li ><a href="create-new-invoice.php">Create New Invoice</a></li>
                    </ul>
                    </li>


                    <li><a href="#"><i class="fa fa-envelope"></i><span>Bulk Email</span></a>
                        <ul class="sub-menu">
                            <li ><a href="send-bulk-email.php">Send Bulk Email</a></li>
                            <li  ><a href="send-email-from-file.php">Send Email From File</a></li>
                            <li  ><a href="email-history.php">Email History</a></li>
                            <li  ><a href="email-providers.php">Email Providers</a></li>

                    </ul>
                    </li>


                    <li><a href="#"><i class="fa fa-tablet"></i><span>Bulk SMS</span></a>
                        <ul class="sub-menu">
                            <li ><a href="send-bulk-sms.php">Send Bulk SMS</a></li>
                            <li  ><a href="send-sms-from-file.php">Send SMS From File</a></li>
                            <li  ><a href="send-schedule-sms.php">Send Schedule SMS</a></li>
                            <li  ><a href="send-schedule-sms-from-file.php">Schedule SMS From File</a></li>
                            <li  ><a href="sms-history.php">SMS History</a></li>
                            <li  ><a href="sms-gateway.php">SMS Gateway</a></li>
                            <li  ><a href="sms-price-plan.php">SMS Price Plan</a></li>
                            <li  ><a href="add-sms-price-plan.php">Add SMS Price Plan</a></li>
                            <li  ><a href="coverage.php">Coverage</a></li>

                            <li ><a href="sender-id-manage.php">Sender ID Manage</a></li>
                    </ul>
                   

                    <li><a href="#"><i class="fa fa-cog"></i><span>Setup</span></a>
                        <ul class="sub-menu">
                            <li ><a href="administrators.php">Administrators</a></li>
                            <li ><a href="administrators-role.php">Administrators Role</a></li>
                            <li ><a href="system-settings.php">System Settings</a></li>
                            <li ><a href="payment-gateways.php">Payment Gateways</a></li>
                            <li ><a href="email-templates.php">Email Templates</a></li>
                    </ul>
                    </li>
                    <li><a href="logout.php"><i class="fa fa-key"></i><span>Logout</span></a>
                        </ul>

                </div>
            </div>

            <div class="text-right collapse-button" style="padding:7px 9px;">
                <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
            </div>
        </div>
    </div>



    @yield('content')


</div>

<script type="text/javascript" src="{{asset('views/assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.gritter/js/jquery.gritter.js')}}"></script>

<script type="text/javascript" src="{{asset('views/assets/js/jquery.nanoscroller/jquery.nanoscroller.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/behaviour/general.js')}}"></script>
<script src="{{asset('views/assets/js/jquery.ui/jquery-ui.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.easypiechart/jquery.easy-pie-chart.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.nestable/jquery.nestable.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/bootstrap.switch/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('views/assets/js/jquery.select2/select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('views/assets/js/skycons/skycons.js')}}" type="text/javascript"></script>
<script src="{{asset('views/assets/js/bootstrap.slider/js/bootstrap-slider.js')}}" type="text/javascript"></script>
<script src="{{asset('views/assets/js/intro.js/intro.js')}}" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript">
$(document).ready(function(){
    //initialize the javascript
    App.init();
    App.charts();
});
</script>


<script src="{{asset('views/assets/js/behaviour/voice-commands.js')}}"></script>
<script src="{{asset('views/assets/js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.flot/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.flot/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{asset('views/assets/js/jquery.flot/jquery.flot.labels.js')}}"></script>
</body>
</html>