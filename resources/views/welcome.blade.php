<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/png" href="favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

    <link rel="stylesheet" type="text/css" href='css/bootstrap.css'>
    <link rel="stylesheet" type="text/css" href='style.css'>
    <script src='js/jquery-2.1.0.js'></script>
    <script src='js/bootstrap.js'></script>
    <script src='js/blocs.js'></script><link rel='stylesheet' href='css/font-awesome.min.css'/><link rel='stylesheet' href='css/ionicons.min.css'/><link href='http://fonts.googleapis.com/css?family=Abril+Fatface&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script src='js/jqBootstrapValidation.js'></script>
    <script src='js/formHandler.js'></script>
    <title></title>
</head>
<body>
<!-- Main container -->
<div class="page-container">

    <!-- Navigation Bloc -->

    @include('templates.header')


    <!-- Navigation Bloc END -->

    <!-- bloc-1 -->
    @yield('content')
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
