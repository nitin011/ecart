<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="author" content="{{ config('app.author') }}">
    <title>{{ config('app.name') }} | Admin panel</title>
    @include('admin.layout.partials.styles')
    @yield('header_styles')
    <livewire:styles/>
    @stack('styles')
</head>
<body class="az-dashboard">
@include('admin.layout.partials.header')
@include('admin.layout.partials.navbar')

<div class="az-content">
    <div class="container">
        <div class="az-content-body">
            @include('admin.layout.partials.flash_messages')
            @yield('content')
        </div><!-- az-content-body -->
    </div>
</div><!-- az-content -->
@include('admin.layout.partials.footer')
<livewire:scripts/>
@include('admin.layout.partials.delete')
@include('admin.layout.partials.scripts')
@yield('scripts')
</body>
</html>
