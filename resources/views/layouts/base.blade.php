<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>{{ $title or 'GIT-HRMA' }}</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="{!! asset('css/app.v1.css')  !!}" type="text/css" />
    
    <link rel="icon" type="image/png" href="./images/ad.jpg" width="40px">

    <style type="text/css">html {
            overflow-y: scroll;
            background: {!! asset('images/login2.jpg')!!} no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

    </style>

</head>
<body>
@yield('content')
</body>

<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p> <small>Gitlinks InfoSoft &#174;<br>&copy; 2017</small> </p>
    </div>
</footer>
<!-- / footer -->
<!-- Bootstrap -->
<!-- App -->
<script src="{!! asset('js/app.v1.js') !!}"></script>
<script src="{!! asset('js/app.plugin.js') !!}"></script>
</html>