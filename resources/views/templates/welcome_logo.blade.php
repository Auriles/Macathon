<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"   integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="   crossorigin="anonymous"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src='{{asset('/js/blocs.js')}}'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACluuOCSU6Sen1O6ht8eO_ZfqJZ5xVcog"></script>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel='stylesheet' href='{{asset('/css/ionicons.min.css')}}'/>
    <link href='http://fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href='{{asset('css/style.css')}}'>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Bienvenue sur ConnectInfo</title>

    <style>form{
            top:120px;
            position: absolute;
            width:100%;}

        .form-profile, #form-detail{
            position: static!important;

        }

        .page-container{
            margin-top: 100px;
        }


    </style>
</head>
<body>
<!-- Main container -->
<div class="page-container">
@include('templates.header_logo')

    <!-- Navigation Bloc -->
    @yield('content')



    <!-- Navigation Bloc END -->

    <!-- bloc-1 -->
    <!-- bloc-1 END -->

    <!-- bloc-2 -->

    <!-- bloc-3 END -->

    <!-- ScrollToTop Button -->
    <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span class="fa fa-chevron-up"></span></a>
    <!-- ScrollToTop Button END-->

</div>
<!-- Main container END -->

</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
