<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=1">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://www.optimizecdn.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="icon" href="{{asset('images/favicon.png')}}">

    <!-- Site Meta Data -->
    <title> Directory - Find - Accident Solution</title>
    <meta name="description" content="Search the most complete  directory. Find .">
    <meta name="keywords" content=",, Accident Solution">
    <meta name="robots" content="index, follow">

    <!-- Social Media Meta Data -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url', 'http://www.accidentsolutionllc.com') }}">
    <meta property="og:site_name" content="{{ config('app.url', 'Accident Solution') }}">
    <meta property="og:title" content=" Directory - Find  - Accident Solution">
    <meta property="og:description" content="Search the most complete  database. Find .">
    <meta property="og:image" content="{{asset('images/Depositphotos_145393015_XL.jpg')}}">

    <!-- Canonical URL -->
    <span style="position:absolute;color:transparent;width:100%;z-index:-1;height:50px;top:0;">
        www.accidentsolutionllc.com - Accident Solution</span>
    <link rel="canonical" href={{ config('app.url', 'http://www.accidentsolutionllc.com') }}>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
        href="https://fonts.googleapis.com/css?family=Lato:300,400,600,700,800,900|Ubuntu:300,400,600,700,800,900|Open+Sans:300,400,600,700,800,900&display=swap">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Lato:300,400,600,700,800,900|Ubuntu:300,400,600,700,800,900|Open+Sans:300,400,600,700,800,900&display=swap">
    </noscript>

    <!-- Prefetch -->
    <link rel="prefetch"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0"
        as="font" type="font/woff2" crossorigin>
    <link rel="prefetch"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/limonte-sweetalert2/6.11.2/sweetalert2.min.css"
        as="style">
    <link rel="prefetch"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/limonte-sweetalert2/6.11.2/sweetalert2.min.js"
        as="script">
    <link rel="prefetch"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/jquery.lazy/1.7.9/jquery.lazy.min.js"
        as="script">
    <link rel="prefetch"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/js/websiteScripts.min.js?v=0.4" as="script">

    <!-- Non-Critical Stylesheet -->
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/css/non-critical-styles.pkgd.min.css">
    <noscript>
        <link rel="stylesheet"
            href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/css/non-critical-styles.pkgd.min.css">
    </noscript>

    <!-- Critical Stylesheet -->
    <link rel="stylesheet"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/css/critical-styles.pkgd.min.css?v=04.12.23.00">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/font-awesome/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{asset('css/accidentcss.css')}}">
    <noscript>
        <link rel="stylesheet"
            href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/font-awesome/css/font-awesome.min.css">
    </noscript>

    <!-- Critical JavaScript -->
    <script src="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/js/jquery.min.js"></script>
    <script src="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/jquery.ui/jquery-ui.min.js?v=2022"></script>
    <script src="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/js/bootstrap-3.3.5.min.js"></script>

    <!-- Preload -->
    <link rel="preload"
        href="https://www.optimizecdn.com/directory/cdn/assets/bootstrap/font-awesome/css/font-awesome.min.css"
        as="style">
    <link rel="preload" href="{{asset('images/Depositphotos_145393015_XL.jpg')}}" as="image">
    <script>
        function g() {
            window.addEventListener('load', () => {
                if (typeof initializeG === 'function') {
                    initializeG();
                }
            });

        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&region=US&callback=g&language=en"></script>

</head>
<body>

    @include('layouts.parts.header')

    @yield('style')

    @yield('content')


    @include('layouts.parts.footer')

    @yield('script')
</body>

</html>
