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
        {{-- <link rel="canonical" href="@yield('meta-url')" /> --}}
        <link rel="canonical" href="{{ request()->url() }}" />
        <link rel="icon" type="image/png" href="{{ asset('/') }}frontend/logo/favicon/favicon-32x32.png">
        <!-- for facebook -->
        <meta property="og:url" content="{{ request()->url() }}" />
        <meta property="og:description" content="@yield('meta-description')" />
        <meta property="og:image" content="{{ asset('/') }}frontend/logo/favicon/favicon-32x32.png" />
        <meta property="og:image:width" content="200" />
        <meta property="og:image:height" content="286" />
        <meta name="facebook-domain-verification" content="g7t7phde3zn27hgjb1iaxlm67f8hdv" />
        <!-- for facebook -->

        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '444322318348286');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=444322318348286&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-T642VTXN');</script>
        <!-- End Google Tag Manager -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css" />
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/slick/slick.css" />
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/vendors/slick/slick-theme.css" />
        @php $rand = rand('0000','9999'); @endphp
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css?v={{ $rand }}"/>
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css?v={{ $rand }}"/>
        @stack('style')
    </head>

    <body>

        @include('frontend.includes.header')

        @yield('body')

        @include('frontend.includes.footer')


        <script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
        <!-- slick slide -->
        <script src="{{ asset('frontend') }}/assets/vendors/slick/slick.min.js"></script>

        <!-- main -->
        <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
        <!-- Toastr Css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
        <!-- Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Sweet Alert -->
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet" />
        <script async src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T642VTXN"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @stack('script')
    <script>
        const cachedData = localStorage.getItem('logData');
            if (cachedData) {
                // Use cached data
            } else {
                fetch('/log?format=json&hasfast=true&authuser=0').then(response => {
                    response.json().then(data => {
                        localStorage.setItem('logData', JSON.stringify(data));
                    });
                });
            }
    </script>

        @if(Session::has('success'))
            <script>
                toastr.success("{{ Session::get('success') }}");
            </script>
        @endif
        @if(Session::has('error'))
            <script>
                toastr.error("{{ Session::get('error') }}");
            </script>
        @endif
        @if(Session::has('customError'))
            <script>
                Swal.fire({
                    title: 'Error!',
                    text: "{{ Session::get('customError') }}",
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            </script>
        @endif
    </body>
</html>
