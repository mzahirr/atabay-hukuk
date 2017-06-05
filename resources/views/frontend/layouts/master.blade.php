<!doctype html>
<html class="no-js" lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <!-- favicon icon -->
    <link rel="icon" type="image/png" href="/img/favicon.png"/>
    <!-- Reponsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Reponsive meta -->
    @stack('meta')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.layouts.partials.corestyles')

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.9&appId=132280227345572";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

@include('frontend.layouts.partials.header')




@yield('content')




@include('frontend.layouts.partials.footer')



@include('frontend.layouts.partials.corescripts')


</body>
</html>
