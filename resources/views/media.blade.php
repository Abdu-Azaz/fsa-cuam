<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>

<body >
    <div class="container mt-5 ">
        <h1>File Explorer</h1>
        <a class="h5 text-decoration-none" href="{{url('/admin')}}">back</a>
        <div class="p-4 bg-primary " >
            <div id="fm"></div>
        </div>
    </div>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

</body>

</html>
