<head>
    @include('includes.meta')
    <!-- fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- Bootstrap 4.2 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mega.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tcal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ayuda.css') }}" rel="stylesheet">

    <!-- Red social -->
    <link rel="stylesheet" href="{{ asset('social/social.css') }}">
    <link rel="stylesheet" href="{{ asset('social/fonts.css') }}">

    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('css/ResponsiveLogin/ResponLogin.css') }}">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <!-- Font Awesome 5.9.3 -->
    <script src="https://kit.fontawesome.com/49980cad74.js"></script>
    <style>
        a:hover {
            text-decoration: none;
        }
        header {
            min-height: 120px;
        }
        header img {
            margin: 0;
        }
        #login header {
            height: 100px;
            background-color: black;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        header a {
            color: #ffffff !important;
        }
        #menu .nav-item {
            position: relative;
        }
        #menu .nav-tabs .nav-link:hover,
        #menu .nav-tabs .nav-link:focus {
            color: #57b747 !important;
        }
        .badge.bg-important {
            background: #ff6c60;
        }
        .notify-row .badge {
            position: absolute;
            right: 0%;
            top: -20%;
            z-index: 100;
        }
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px;
        }
        #sub-menu-users .dropdown-menu > a {
            color: initial !important;
        }
        .hide {
            display: none !important;
        }
        .btn-circle {
            width: 35px;
            height: 35px;
            padding: 6px;
        }
        .hgarea {
            resize: none;
        }
        .conf {
            background: #000000;
            height: auto;
        }
        header a:hover {
            color: #57b747 !important;
        }
        .navbar-toggler {
            color: rgba(255, 255, 255, 5);
            border-color: rgba(255, 255, 255, 1);
            border-width: 2px;
            background-color: rgba(255, 255, 255, 1);
        }
        .navbar-light .navbar-toggler {
            color: rgba(255, 255, 255, 5);
            border-color: rgba(255, 255, 255, 1);
            border-width: 2px;
            background-color: rgba(255, 255, 255, 1);
        }
		.btn-col1.active {
			background: #fff;
			text-shadow: #ccc 2px 2px;
		}
        #home .btnBack {
            display: none !important;
        }
        .btnBack {
            display: block;
            /* position: absolute; */
            bottom: 25px;
            left: 75%;
        }
        .user-text {
            font-size: 30px;
        }
        .table-responsive-sm {
            overflow-x: auto;
        }
        .goToUp {
            display:none;
            padding:20px;
            background:#024959;
            font-size:20px;
            color:#fff;
            cursor:pointer;
            position: fixed;
            bottom:20px;
            right:20px;
        }
        .table .thead-dark th,
        .table th, .table td,
        .table th span, .table td span {
            font-size: xx-small;
            vertical-align: middle;
        }
        .table td i {
            font-size: medium;
        }
        .add_fields .fas,
        .remove_field .fas {
            font-size: medium;
            padding: 10px 6px;
        }
    </style>
</head>
