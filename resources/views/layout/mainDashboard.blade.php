
<!DOCTYPE html>
<html lang="en">
@yield('head')
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
@yield('sideBar')

@yield('content')

@include('dashincludes.footer')
        </div>
    </div>
@include('dashincludes.scrollButton')
@include('dashincludes.logoutModal')

@yield('java')
</body>
</html>
