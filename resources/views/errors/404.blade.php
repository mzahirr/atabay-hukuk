<!DOCTYPE html>
<!--[if IE 8]>
<html lang="tr" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="tr" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="tr">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{config('app.name')}} - {{$exception->getStatusCode()}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="/storage/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/storage/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="/storage/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/storage/assets/pages/css/error.min.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<body class=" page-404-3">
<div class="page-inner">
    <img src="/storage/assets/pages/media/pages/earth.jpg" class="img-responsive" alt=""></div>
<div class="container error-404">
    <h1>{{$exception->getStatusCode()}}</h1>
    <h2>Houston, we have a problem.</h2>
    <p> {{get_class($exception)}} </p>
    <p>
        <a href="{{route('backend.dashboard')}}" class="btn red btn-outline"> Return home </a>
        <br></p>
</div>
<!--[if lt IE 9]>
<script src="/storage/assets/global/plugins/respond.min.js"></script>
<script src="/storage/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->

</body>

</html>