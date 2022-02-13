<!DOCTYPE html>
<html lang="ru">
<head>
    @include('_layouts.metas')

    <title>Биллионс</title>

    @include('_layouts.links')

</head>
<body>

    @include('_layouts.header')

    @yield('content')

    @include('_layouts.footer')

    @include('_layouts.scripts')
</body>
</html>

