<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>@yield('title','Ecoomerce')</title>
    
    <link rel="stylesheet" href="{{asset('admin/vendor/')}}/bootstrap/css/bootstrap.min.css">
    <link href="{{asset('admin/vendor/')}}/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/libs/')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('admin/vendor/')}}/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="{{asset('admin/vendor/')}}/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="{{asset('admin/vendor/')}}/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="{{asset('admin/vendor/')}}/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('admin/vendor/')}}/charts/c3charts/c3.css">
    <link rel="stylesheet" href="{{asset('admin/vendor/')}}/fonts/flag-icon-css/flag-icon.min.css">
   
    @stack('css')
</head>

<body>
   
    <div class="dashboard-main-wrapper">
      
        @include('admin.layouts.partials.header')
      
        @include('admin.layouts.partials.sidebar')
       
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                @yield('content')
            </div>
          
            @include('admin.layouts.partials.footer')
           
        </div>
        
    </div>
   
    <script src="{{asset('admin/vendor/')}}/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('admin/vendor/')}}/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="{{asset('admin/vendor/')}}/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="{{asset('admin/libs/')}}/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="{{asset('admin/vendor/')}}/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="{{asset('admin/vendor/')}}/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="{{asset('admin/vendor/')}}/charts/morris-bundle/raphael.min.js"></script>
    <script src="{{asset('admin/vendor/')}}/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="{{asset('admin/vendor/')}}/charts/c3charts/c3.min.js"></script>
    <script src="{{asset('admin/vendor/')}}/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="{{asset('admin/vendor/')}}/charts/c3charts/C3chartjs.js"></script>
    <script src="{{asset('admin/libs/')}}/js/dashboard-ecommerce.js"></script>
    @stack('script')
</body>
 
</html>