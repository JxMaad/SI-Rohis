<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

    <title>Rodamu</title>
    <!-- CSS Connection -->
    <link href="{{ asset('tampilan/css/output.css')}}" rel="stylesheet">
    <!-- End CSS -->

    <style>
        * {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- End Font -->
</head>
<body>
{{$slot}}
</body>
<script src="{{ asset('tampilan/js/index.js') }}"></script>
</html>
