<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="example"></div>
<div id="example2"></div>
<script src="{{asset('js/app.js')}}"></script>

<script>
    window.Echo.channel('myArticle').listen('.ArticleCreateEvent', function(res){
                console.log(res.title);
//                console.log('ssssss');
            });
</script>
<script src="//{{ Request::getHost() }}:6001/socket.io/socket.io.js"></script>

</body>

</html>