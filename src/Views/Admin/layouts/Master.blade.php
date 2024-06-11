<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('assets/admin/img/logo.png') }}" type="image/png">

    @include('layouts.patials.css')
</head>

<body class="crm_body_bg">


    @include('layouts.patials.nav')

    <section class="main_content dashboard_part large_header_bg">

        
        @include('layouts.patials.topbar')

        <div class="main_content_iner overly_inner">
            <div class="container-fluid p-0 ">

                @yield('content')
            </div>
        </div>

        @include('layouts.patials.footer')
    </section>




    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('layouts.patials.js')
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/index_3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:13 GMT -->

</html>