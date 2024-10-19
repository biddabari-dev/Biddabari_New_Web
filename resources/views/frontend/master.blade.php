<!DOCTYPE html>
<html lang="en">

    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="@yield('robots', 'index')" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta property="description" content="@yield('meta-description')" />
        <meta property="keywords" content="@yield('meta-keywords')" />
        <link rel="canonical" href="@yield('meta-url')" />
        <!-- for facebook -->
        <meta property="og:url" content="https://biddabari.com" />
        <meta property="og:description" content="" />
        <meta property="og:image"
            content="https://biddabari-bucket.obs.as-south-208.rcloud.reddotdigitalit.com/backend/{{ asset('frontend') }}/assets/uploaded-files/additional-features-management/site-settings/logo-1717397688866.png" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="286" />
        <meta name="facebook-domain-verification" content="g7t7phde3zn27hgjb1iaxlm67f8hdv" />
        <!-- for facebook -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css" />
        @stack('style')
    </head>

    <body>

        @include('frontend.includes.header')

        @yield('body')

        @include('frontend.includes.footer')


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <!-- slick slide cdn -->
        <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
        <!-- Toastr Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
        <!-- Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @stack('script')
    </body>
</html>
