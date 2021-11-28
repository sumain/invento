@include('layout.header')
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layout.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               @include('layout.sidePanel')
                <!-- End of Topbar -->
				<!--Sumain-->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    
                @yield('content')		

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
            @include('layout.footer')
    

</body>

</html>