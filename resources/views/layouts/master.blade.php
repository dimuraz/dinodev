<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.head')

</head>

<body>

    <div id="wrapper">

        @include('layouts.navbar')

        <div id="page-wrapper">

            @yield('content')
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    @include('layouts.footer')
    
</body>

</html>
