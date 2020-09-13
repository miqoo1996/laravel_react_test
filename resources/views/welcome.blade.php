<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 8.01</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <script>
        base_url = '{{ url("") }}';
        api_url = '{{ url("/api") }}';
    </script>
</head>
<body>
<div class="container" id="root">

</div>

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
