<html>
<head>
    <title>{{ env("APP_NAME") }} - @yield('title')</title>
    <meta charset="utf-8">
    <!-- Add meta tags for mobile and IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('customer.layouts.globals.css')
    @yield('header_styles')
</head>
<body>
@include('customer.layouts.partials.header')
@yield('content')
@include('customer.layouts.partials.footer')
@include('customer.layouts.globals.js')
@include('admin.layout.partials.delete')
@yield('scripts')
</body>
</html>
