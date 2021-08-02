<!DOCTYPE html>
<html>
<head>
    <title>{{$title}} | Skawan</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    {{$styles}}
</head>
<body>
    <x-navbar></x-navbar>

    {{$slot}}

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>