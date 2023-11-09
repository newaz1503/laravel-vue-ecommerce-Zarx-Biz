<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--====== Title ======-->
    <title>@yield('title','Eshop')</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('front/images/')}}/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/bootstrap.min.css">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/animate.css">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/magnific-popup.css">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/slick.css">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/LineIcons.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/style.css">
    <link rel="stylesheet" href="{{asset('front/css/')}}/checkout.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('front/css/')}}/responsive.css">
    <style src="cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css"></style>
    @stack('css')
  
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    <div id="app">
        <div class="preloader">
            <div class="spin">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        
        @include('front.layouts.partials.header')
        
        
        @yield('content')
      
        @include('front.layouts.partials.footer')
    </div>
  
    
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!--====== jquery js ======-->
    <script src="{{asset('front/js/')}}/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{asset('front/js/')}}/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('front/js/')}}/bootstrap.min.js"></script>
    
    
    <!--====== Slick js ======-->
    <script src="{{asset('front/js/')}}/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="{{asset('front/js/')}}/jquery.magnific-popup.min.js"></script>

    
    <!--====== nav js ======-->
    <script src="{{asset('front/js/')}}/jquery.nav.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="{{asset('front/js/')}}/jquery.nice-number.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="{{asset('front/js/')}}/main.js"></script>
    @auth()
        <script>
            window.name = '{{Auth::user()->name}}';
         </script>
        <script> 
            window.baseUrl = '{{url('/')}}';
        </script>
        <script> 
            window.publicPath = '{{url('/')}}/public';
        </script>
        <script> 
            window.storagePath = 'storage/app/public';
        </script>
        <script> 
            window.token = '{{@csrf_token()}}';
        </script>
    @endauth
   
    @stack('script')

</body>

</html>
