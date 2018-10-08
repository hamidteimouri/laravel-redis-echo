<!doctype html>
<html lang="{{ app()->getLocale() }}">
<?php auth()->loginUsingId(1); ?>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<h1>welcome {{auth()->user()->name}}</h1>
<div id="example"></div>
<div id="example2"></div>
<script src="{{asset('js/app.js')}}"></script>

<script>
    window.Echo.private('myArticle').listen('.server.article.created', function (res) {
        console.log('we are in private channel');
        console.log(res);
    });
    window.Echo.channel('myArticle2').listen('.server.article.created', function (res) {
        console.log('we are in public channel');
        console.log(res);
    });
</script>
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>

</body>

</html>