<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recqi - Give your journeys a flying start</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/MyFontsWebfontsKit.css">
    <link rel="stylesheet" href="/assets/plugins/ion.rangeSlider-2.0.6/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="/assets/plugins/ion.rangeSlider-2.0.6/css/ion.rangeSlider.skinHTML5.css">
    <link rel="stylesheet" href="/assets/css/recqi.css">

    <!-- CSS Page Level -->
    @yield('page-css')

</head>
<body>

<div id="page-wrapper" class="boxed-wrapper">
    <header class="header-block clearfix">
        @include('includes.header')
    </header>

    <div id="content">
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/plugins/ion.rangeSlider-2.0.6/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="/assets/js/recqi.js"></script>

<!-- JS Page Level -->
@yield('page-js')

</body>
</html>