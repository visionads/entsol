<!DOCTYPE html>

<html class="gt-ie8 gt-ie9 not-ie pxajs"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard - ENTSOL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

    <link href="{{ URL::asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >

    <!---generate.min.css  refers to landerapp.min.css ----->
    <link href="{{ URL::asset('assets/admin/css/generate.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/rtl.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/pages.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/widgets.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/themes.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css" >
    {{--<link href="{{ URL::asset('assets/admin/css/styles.min.css') }}" rel="stylesheet" type="text/css" >--}}
</head>

<body class="theme-dust main-menu-animated" style="">

   <div id="main-wrapper">
        @include('admin::layouts.header')

        <div id="main-menu" role="navigation">
            @section('sidebar')
            @show
        </div>

        <div id="content-wrapper">
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {{--set some message after action--}}
            @if (Session::has('message'))
                <div class="alert alert-success">{{Session::get("message")}}</div>

            @elseif(Session::has('error'))
                <div class="alert alert-warning">{{Session::get("error")}}</div>

            @elseif(Session::has('info'))
                <div class="alert alert-info">{{Session::get("info")}}</div>

            @elseif(Session::has('danger'))
                <div class="alert alert-danger">{{Session::get("danger")}}</div>

            @endif
            <div>
                <script>var init = [];</script>
                @yield('content')
            </div>
        </div>
        <div id="main-menu-bg">
        </div>
   </div>

</body>
</html>

<!-- javascripts -->

<script type="text/javascript" src="{{ URL::asset('assets/admin/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/custom.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/demo.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/validation.js') }}"></script>


<script type="text/javascript">
    /*--------data table-----------*/
    init.push(function () {
        $('#jq-datatables-example').dataTable();
        $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Filter...');
    });
    /*-------------data table--------*/
    init.push(function () {
        // Javascript code here
    })
    window.LanderApp.start(init);
</script>
