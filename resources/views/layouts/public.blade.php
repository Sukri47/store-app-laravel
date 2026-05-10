<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Store App')</title>
    <!-- bootstrap css -->

</head>
@include('layouts.partials.public.style')
@stack('style')

<body>
    <!-- navbar -->
    @include('layouts.partials.public.navbar')

    <!-- main content -->
    @yield('content')

    <!-- footer -->
    @include('layouts.partials.public.footer')
    <!-- script -->
    @include('layouts.partials.public.scripts')
</body>

</html>
