<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

=====================================================

|  1. $BODY                 |  Body                 |
|  2. $MAIN_NAVIGATION      |  Main navigation      |
|  3. $NAVBAR_ICON_BUTTONS  |  Navbar Icon Buttons  |
|  4. $MAIN_MENU            |  Main menu            |
|  5. $PROFILE              |  Profile              |

=====================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Profile - Pages - ETSB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Open Sans font from Google CDN -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

    <!---generate.min.css  refers to landerapp.min.css ----->
    <link href="{{ URL::asset('assets/admin/css/generate.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/rtl.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/pages.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/widgets.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/themes.min.css') }}" rel="stylesheet" type="text/css" >

    <!--[if lt IE 9]>
    <script src="assets/javascripts/ie.min.js"></script>
    <![endif]-->

</head>


<!-- 1. $BODY ======================================================================================

	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated page-profile">

<script>var init = [];</script>

<div id="main-wrapper">


    <!-- 2. $MAIN_NAVIGATION ===========================================================================

        Main navigation
    -->
    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->
                <a href="index.html" class="navbar-brand">
                    <strong>ETSB</strong>
                </a>

                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">First item</a></li>
                                <li><a href="#">Second item</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Third item</a></li>
                            </ul>
                        </li>
                    </ul> <!-- / .navbar-nav -->

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">

                            <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

                                                        Navbar Icon Buttons

                                                        NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

                                                        Classes:
                                                        * 'nav-icon-btn-info'
                                                        * 'nav-icon-btn-success'
                                                        * 'nav-icon-btn-warning'
                                                        * 'nav-icon-btn-danger'
                            -->
                            <li class="nav-icon-btn nav-icon-btn-danger dropdown">
                                <a href="#notifications" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">5</span>
                                    <i class="nav-icon fa fa-bullhorn"></i>
                                    <span class="small-screen-text">Notifications</span>
                                </a>

                                <!-- NOTIFICATIONS -->

                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-notifications').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                                    <div class="notifications-list" id="main-navbar-notifications">

                                        <div class="notification">
                                            <div class="notification-title text-danger">SYSTEM</div>
                                            <div class="notification-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-danger"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-info">STORE</div>
                                            <div class="notification-description">You have <strong>9</strong> new orders.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-truck bg-info"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-default">CRON DAEMON</div>
                                            <div class="notification-description">Job <strong>"Clean DB"</strong> has been completed.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-clock-o bg-default"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-success">SYSTEM</div>
                                            <div class="notification-description">Server <strong>up</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-success"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-warning">SYSTEM</div>
                                            <div class="notification-description"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-warning"></div>
                                        </div> <!-- / .notification -->

                                    </div> <!-- / .notifications-list -->
                                    <a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <li class="nav-icon-btn nav-icon-btn-success dropdown">
                                <a href="#messages" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">10</span>
                                    <i class="nav-icon fa fa-envelope"></i>
                                    <span class="small-screen-text">Income messages</span>
                                </a>

                                <!-- MESSAGES -->

                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-messages').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
                                    <div class="messages-list" id="main-navbar-messages">

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Michelle Bortz</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Timothy Owens</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Denise Steiner</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Michelle Bortz</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Timothy Owens</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Denise Steiner</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                    </div> <!-- / .messages-list -->
                                    <a href="#" class="messages-link">MORE MESSAGES</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <!-- /3. $END_NAVBAR_ICON_BUTTONS -->

                            <li>
                                <form class="navbar-form pull-left">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="assets/user/img/avatar.jpg" alt="">
                                    <span>John Doe</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile <span class="label label-warning pull-right">new</span></a></li>
                                    <li><a href="#">Account <span class="badge badge-primary pull-right">new</span></a></li>
                                    <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
    <!-- /2. $END_MAIN_NAVIGATION -->

    <div id="main-menu" role="navigation">
        <div id="main-menu-inner">
            <div class="menu-content top" id="menu-content-demo">
                <!-- Menu custom content demo
                     Javascript: html/assets/demo/demo.js
                 -->
                <div>
                    <div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">John</span></div>

                    <img src="assets/user/img/avatar.jpg" alt="" class="">
                    <div class="btn-group">
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
                        <a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
                    </div>
                    <a href="#" class="close">&times;</a>
                </div>
            </div>
            <ul class="navigation">
                <li>
                    <a href="index.html"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Layouts</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layout.html"><span class="mm-text">Layout</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-main-menu.html"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">Main menu</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-user-md"></i><span class="mm-text">User</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="pages-signup.html"><span class="mm-text">Sign Up</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signin.html"><span class="mm-text">Sign In</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-profile.html"><span class="mm-text">Profile</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="stat-panels.html"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Stat panels</span></a>
                </li>
                <li>
                    <a href="widgets.html"><i class="menu-icon fa fa-flask"></i><span class="mm-text">Widgets</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-desktop"></i><span class="mm-text">UI elements</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="ui-buttons.html"><span class="mm-text">Buttons</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-typography.html"><span class="mm-text">Typography</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-tabs.html"><span class="mm-text">Tabs &amp; Accordions</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-modals.html"><span class="mm-text">Modals</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-alerts.html"><span class="mm-text">Alerts &amp; Tooltips</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-components.html"><span class="mm-text">Components</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-panels.html"><span class="mm-text">Panels</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-jqueryui.html"><span class="mm-text">jQuery UI</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-icons.html"><span class="mm-text">Icons</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-utility-classes.html"><span class="mm-text">Utility classes</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">Form components</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="forms-layouts.html"><span class="mm-text">Layouts</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-general.html"><span class="mm-text">General</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-advanced.html"><span class="mm-text">Advanced</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-pickers.html"><span class="mm-text">Pickers</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-validation.html"><span class="mm-text">Validation</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-editors.html"><span class="mm-text">Editors</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tables.html"><i class="menu-icon fa fa-table"></i><span class="mm-text">Tables</span></a>
                </li>
                <li>
                    <a href="charts.html"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">Charts</span></a>
                </li>
                <li class="mm-dropdown open active">
                    <a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">Pages</span><span class="label label-warning">Updated</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="pages-search.html"><span class="mm-text">Search results</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-pricing.html"><span class="mm-text">Plans &amp; pricing</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-faq.html"><span class="mm-text">FAQ</span><span class="label label-success">New</span></a>
                        </li>
                        <li class="active">
                            <a tabindex="-1" href="pages-profile.html"><span class="mm-text">Profile</span><span class="label label-success">New</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-timeline.html"><span class="mm-text">Timeline</span><span class="label label-success">New</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signin.html"><span class="mm-text">Sign In</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signup.html"><span class="mm-text">Sign Up</span><span class="label label-success">New</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signin-alt.html"><span class="mm-text">Sign In Alt</span><span class="label label-success">New</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signup-alt.html"><span class="mm-text">Sign Up Alt</span><span class="label label-success">New</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-invoice.html"><span class="mm-text">Invoice</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-404.html"><span class="mm-text">Error 404</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-500.html"><span class="mm-text">Error 500</span></a>
                        </li>
                        <li class="mm-dropdown">
                            <a href="#"><i class="menu-icon fa fa-envelope"></i><span class="mm-text">Messages</span><span class="label label-success">New</span></a>
                            <ul>
                                <li>
                                    <a tabindex="-1" href="pages-inbox.html"><span class="mm-text">Inbox</span></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="pages-show-email.html"><span class="mm-text">Show message</span></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="pages-new-email.html"><span class="mm-text">New message</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-blank.html"><span class="mm-text">Blank page</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">Menu levels</span><span class="badge badge-primary">6</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.1</span><span class="badge badge-danger">12</span><span class="label label-info">21</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.2</span></a>
                        </li>
                        <li class="mm-dropdown">
                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.3</span><span class="label label-warning">5</span></a>
                            <ul>
                                <li>
                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.1</span></a>
                                </li>
                                <li class="mm-dropdown">
                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                                    <ul>
                                        <li class="mm-dropdown">
                                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.1</span></a>
                                            <ul>
                                                <li>
                                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 4.1</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.2</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul> <!-- / .navigation -->
            <div class="menu-content">
                <a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>
            </div>
        </div> <!-- / #main-menu-inner -->
    </div> <!-- / #main-menu -->
    <!-- /4. $MAIN_MENU -->

    <div id="content-wrapper">
        <ul class="breadcrumb breadcrumb-page">
            <div class="breadcrumb-label text-light-gray">You are here: </div>
            <li><a href="#">User</a></li>
            <li class="active"><a href="#">Profile</a></li>
        </ul>
        <!-- 5. $PROFILE ===================================================================================

                Profile
        -->
        <div class="profile-full-name">
            <span class="text-semibold">User</span>'s profile
        </div>
        <div class="profile-row">
            <div class="left-col">
                <div class="profile-block">
                    <div class="panel profile-photo">
                        <img src="assets/user/img/avatar.jpg" alt="">
                    </div><br>
                    <a href="#" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</a>&nbsp;&nbsp;
                    <a href="#" class="btn"><i class="fa fa-comment"></i></a>
                </div>

                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <span class="panel-title">About me</span>
                    </div>
                    <div class="panel-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua.
                    </div>
                </div>

                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <span class="panel-title">Statistics</span>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item"><strong>126</strong> Likes</a>
                        <a href="#" class="list-group-item"><strong>579</strong> Followers</a>
                        <a href="#" class="list-group-item"><strong>100</strong> Following</a>
                    </div>
                </div>

                <div class="panel panel-transparent profile-skills">
                    <div class="panel-heading">
                        <span class="panel-title">Skills</span>
                    </div>
                    <div class="panel-body">
                        <span class="label label-primary">UI/UX</span>
                        <span class="label label-primary">Web design</span>
                        <span class="label label-primary">Photoshop</span>
                        <span class="label label-primary">HTML</span>
                        <span class="label label-primary">CSS</span>
                    </div>
                </div>

                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <span class="panel-title">Social</span>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item"><i class="profile-list-icon fa fa-twitter" style="color: #4ab6d5"></i> @dsteiner</a>
                        <a href="#" class="list-group-item"><i class="profile-list-icon fa fa-facebook-square" style="color: #1a7ab9"></i> Denise Steiner</a>
                        <a href="#" class="list-group-item"><i class="profile-list-icon fa fa-envelope" style="color: #888"></i> dsteiner@example.com</a>
                    </div>
                </div>

            </div>
            <div class="right-col">

                <hr class="profile-content-hr no-grid-gutter-h">

                <div class="profile-content">

                    <ul id="profile-tabs" class="nav nav-tabs">
                        <li class="active">
                            <a href="#profile-tabs-board" data-toggle="tab">Board</a>
                        </li>
                        <li>
                            <a href="#profile-tabs-activity" data-toggle="tab">Timeline</a>
                        </li>
                        <li>
                            <a href="#profile-tabs-followers" data-toggle="tab">Followers</a>
                        </li>
                        <li>
                            <a href="#profile-tabs-following" data-toggle="tab">Following</a>
                        </li>
                    </ul>

                    <div class="tab-content tab-content-bordered panel-padding">
                        <div class="widget-article-comments tab-pane panel no-padding no-border fade in active" id="profile-tabs-board">

                            <div class="comment">
                                <img src="assets/user/img/avatar.jpg" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <form action="#" id="leave-comment-form" class="comment-text no-padding no-border">
                                        <textarea class="form-control" rows="1"></textarea>
                                        <div class="expanding-input-hidden" style="margin-top: 10px;">
                                            <label class="checkbox-inline pull-left">
                                                <input type="checkbox" class="px">
                                                <span class="lbl">Private message</span>
                                            </label>
                                            <button class="btn btn-primary pull-right">Leave Message</button>
                                        </div>
                                    </form>
                                </div> <!-- / .comment-body -->
                            </div>

                            <hr class="no-panel-padding-h panel-wide">


                            <div class="comment">
                                <img src="assets/user/img/avatar.jpg" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-text">
                                        <div class="comment-heading">
                                            <a href="#" title="">Robert Jang</a><span>14 hours ago</span>
                                        </div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-footer">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
                                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                        &nbsp;&nbsp;·&nbsp;&nbsp;
                                        <a href="#">Reply</a>
                                    </div>
                                </div> <!-- / .comment-body -->

                                <div class="comment">
                                    <img src="assets/user/img/avatar.jpg" alt="" class="comment-avatar">
                                    <div class="comment-body">
                                        <div class="comment-text">
                                            <div class="comment-heading">
                                                <a href="#" title="">Denise Steiner</a><span>14 hours ago</span>
                                            </div>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                        </div>
                                        <div class="comment-footer">
                                            <a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
                                            <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                            &nbsp;&nbsp;·&nbsp;&nbsp;
                                            <a href="#">Reply</a>
                                        </div>
                                    </div> <!-- / .comment-body -->

                                    <div class="comment">
                                        <img src="assets/user/img/avatar.jpg" alt="" class="comment-avatar">
                                        <div class="comment-body">
                                            <div class="comment-text">
                                                <div class="comment-heading">
                                                    <a href="#" title="">John Doe</a><span>14 hours ago</span>
                                                </div>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </div>
                                            <div class="comment-footer">
                                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
                                                <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                <a href="#">Reply</a>
                                            </div>
                                        </div> <!-- / .comment-body -->
                                    </div> <!-- / .comment -->
                                </div> <!-- / .comment -->
                            </div> <!-- / .comment -->

                            <div class="comment">
                                <img src="assets/user/img/avatar.jpg" alt="" class="comment-avatar">
                                <div class="comment-body">
                                    <div class="comment-text">
                                        <div class="comment-heading">
                                            <a href="#" title="">Michelle Bortz</a><span>14 hours ago</span>
                                        </div>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
                                    </div>
                                    <div class="comment-footer">
                                        <a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
                                        <a href="#"><i class="fa fa-thumbs-o-down"></i></a>
                                        &nbsp;&nbsp;·&nbsp;&nbsp;
                                        <a href="#">Reply</a>
                                    </div>
                                </div> <!-- / .comment-body -->
                            </div> <!-- / .comment -->

                        </div> <!-- / .tab-pane -->
                        <div class="tab-pane fade" id="profile-tabs-activity">
                            <div class="timeline">
                                <!-- Timeline header -->
                                <div class="tl-header now">Now</div>

                                <div class="tl-entry">
                                    <div class="tl-time">
                                        1h ago
                                    </div>
                                    <div class="tl-icon bg-warning"><i class="fa fa-envelope"></i></div>
                                    <div class="panel tl-body">
                                        <h4 class="text-warning">Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div> <!-- / .tl-body -->
                                </div> <!-- / .tl-entry -->

                                <div class="tl-entry left">
                                    <div class="tl-time">
                                        2h ago
                                    </div>
                                    <div class="tl-icon bg-success"><i class="fa fa-picture-o"></i></div>
                                    <div class="panel tl-body">
                                        <a href="#">Denise Steiner</a> shared an image on <a href="#">The Gallery</a>
                                        <div class="tl-wide text-center" style="padding: 10px;margin-top:15px;margin-bottom: 15px;background: #f1f1f1">
                                            <img src="assets/user/img/avatar.jpg" alt="" style="max-height: 150px;max-width: 100%;">
                                        </div>
                                        <i class="text-muted text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                                    </div> <!-- / .tl-body -->
                                </div> <!-- / .tl-entry -->

                                <!-- Timeline header -->
                                <div class="tl-header">Yesterday</div>

                                <div class="tl-entry">
                                    <div class="tl-time">
                                        9:02 pm
                                    </div>
                                    <div class="tl-icon bg-info"><i class="fa fa-comment"></i></div>
                                    <div class="panel tl-body">
                                        <a href="#">Denise Steiner</a> liked a comment on <a href="#">Some Article</a>
                                        <div style="margin-top: 10px;" class="text-sm">
                                            <img src="assets/user/img/avatar.jpg" alt="" class="rounded" style=" width: 20px;height: 20px;margin-top: -2px;">&nbsp;&nbsp;<a href="#">Michelle Bortz</a> commented 2 days ago
                                            <div class="well well-sm" style="margin: 6px 0 0 0;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                                        </div>
                                    </div> <!-- / .tl-body -->
                                </div> <!-- / .tl-entry -->

                                <div class="tl-entry left">
                                    <div class="tl-time">
                                        5:47 pm
                                    </div>
                                    <div class="panel tl-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div> <!-- / .tl-body -->
                                </div> <!-- / .tl-entry -->

                                <div class="tl-entry">
                                    <div class="tl-time">
                                        2:35 pm
                                    </div>
                                    <div class="tl-icon bg-danger"><i class="fa fa-heart"></i></div>
                                    <div class="panel tl-body">
                                        <a href="#">Denise Steiner</a> liked <a href="#">Shop Item</a>
                                    </div> <!-- / .tl-body -->
                                </div> <!-- / .tl-entry -->

                                <div class="tl-entry left">
                                    <div class="tl-time">
                                        11:21 am
                                    </div>
                                    <div class="panel tl-body">
                                        <h4 class="text-danger">Lorem ipsum dolor sit amet</h4>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </div> <!-- / .tl-body -->
                                </div> <!-- / .tl-entry -->

                            </div> <!-- / .timeline -->
                        </div> <!-- / .tab-pane -->
                        <div class="tab-pane fade widget-followers" id="profile-tabs-followers">
                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Following</span></a>
                                    </div>
                                    <a href="#" class="follower-name">John Doe</a><br>
                                    <a href="#" class="follower-username">@jdoe</a>
                                </div>
                            </div>

                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-outline">Follow</a>
                                    </div>
                                    <a href="#" class="follower-name">Michelle Bortz</a><br>
                                    <a href="#" class="follower-username">@mbortz</a>
                                </div>
                            </div>

                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-outline">Follow</a>
                                    </div>
                                    <a href="#" class="follower-name">Timothy Owens</a><br>
                                    <a href="#" class="follower-username">@towens</a>
                                </div>
                            </div>

                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-outline">Follow</a>
                                    </div>
                                    <a href="#" class="follower-name">Denise Steiner</a><br>
                                    <a href="#" class="follower-username">@dsteiner</a>
                                </div>
                            </div>

                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-outline">Follow</a>
                                    </div>
                                    <a href="#" class="follower-name">Denise Steiner</a><br>
                                    <a href="#" class="follower-username">@dsteiner</a>
                                </div>
                            </div>

                        </div> <!-- / .tab-pane -->
                        <div class="tab-pane fade widget-followers" id="profile-tabs-following">
                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Following</span></a>
                                    </div>
                                    <a href="#" class="follower-name">John Doe</a><br>
                                    <a href="#" class="follower-username">@jdoe</a>
                                </div>
                            </div>

                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-outline">Follow</a>
                                    </div>
                                    <a href="#" class="follower-name">Michelle Bortz</a><br>
                                    <a href="#" class="follower-username">@mbortz</a>
                                </div>
                            </div>

                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-outline">Follow</a>
                                    </div>
                                    <a href="#" class="follower-name">Timothy Owens</a><br>
                                    <a href="#" class="follower-username">@towens</a>
                                </div>
                            </div>

                            <div class="follower">
                                <img src="assets/user/img/avatar.jpg" alt="" class="follower-avatar">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-outline">Follow</a>
                                    </div>
                                    <a href="#" class="follower-name">Denise Steiner</a><br>
                                    <a href="#" class="follower-username">@dsteiner</a>
                                </div>
                            </div>

                        </div> <!-- / .tab-pane -->
                    </div> <!-- / .tab-content -->
                </div>
            </div>
        </div>
    </div> <!-- / #content-wrapper -->
    <div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="assets/admin/js/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<script type="text/javascript" src="{{ URL::asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/custom.min.js') }}"></script>

<script type="text/javascript">
    init.push(function () {
        $('#profile-tabs').tabdrop();

        $("#leave-comment-form").expandingInput({
            target: 'textarea',
            hidden_content: '> div',
            placeholder: 'Write message',
            onAfterExpand: function () {
                $('#leave-comment-form textarea').attr('rows', '3').autosize();
            }
        });
    })
    window.LanderApp.start(init);
</script>

</body>
</html>