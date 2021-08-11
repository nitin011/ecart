<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <meta name="description" content="Bio Squares Fresh">
    <meta name="author" content="Bio Squares Fresh">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>BioSquareFresh | Administration Panel</title>
    <!-- vendor css -->
    <link href="{{ assetUrl('back-theme/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ assetUrl('back-theme/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ assetUrl('back-theme/lib/typicons.font/typicons.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ assetUrl('back-theme/css/azia.css') }}">
    @yield('header_styles')
</head>
<body class="az-body" style="background-image: url('{{ url('back-theme/img/fruits_veggies_set.png') }}'); background-position: center; background-size: cover;">

@yield('content')
<script src="{{ assetUrl('back-theme/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ assetUrl('back-theme/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ assetUrl('back-theme/lib/ionicons/ionicons.js') }}"></script>

<script src="{{ assetUrl('back-theme/js/azia.js') }}"></script>
<script>
    $(function () {
        'use strict'

    });
</script>
</body>
</html>
