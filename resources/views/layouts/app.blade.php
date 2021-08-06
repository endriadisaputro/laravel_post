<!DOCTYPE html>
<html>
<head>
    <title>{{$title}} | Skawan</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    {{$styles}}
</head>
<body>
    <x-navbar></x-navbar>

    {{$slot}}

    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>