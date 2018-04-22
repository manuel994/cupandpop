<!DOCTYPE html>
<html lang="en" style="background: #FFE5F2">
<head>
    @include('includes.head')
</head>
<body style="background: #FFE5F2">
    <div class="container contenido">
        @include('includes.header')
    </div>

    <div class="container-fluid contenido">

            @yield('content')
    </div>

        @include('includes.footer')
    <div class="container-fluid">
        @include("includes.foot")
    </div>
        </div>
</body>
</html>
