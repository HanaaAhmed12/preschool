<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head')
</head>

<body>
@include('includes.spinner')
@include('includes.navbar')

@yield('content')
@yield('test')

@include('includes.footer')
@include('includes.backToTop')
@include('includes.javascript')

</body>
</html>
