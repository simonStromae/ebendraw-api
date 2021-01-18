<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="/master/img/favicon.png">

    @notifyCss

    <link href="/master/css/application.min.css" rel="stylesheet">
    <!--[if IE 9]>
    <link href="/master/css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    @livewireStyles
    @stack('css')
    <style>
        .inset-0{
            margin: 45px 45px 0 0;
        }
    </style>
</head>
<body>

    @include('layouts.partials.sidebar')

    @include('layouts.partials.navbar')

    @include('layouts.partials.quick-access')

    <div class="content-wrap">
        <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
        <main id="content" class="content" role="main">
            <!-- Page content -->
            @if(isset($breadcrumbs))
                @include('layouts.partials.breadcrumb', ['breadcrumbs' => $breadcrumbs])
            @endif

            @yield('content')

            <footer class="content-footer">
                Copyright 2020 <span class="text-danger font-weight-bolder">ALpha Labo</span>, Inc.
            </footer>
        </main>
    </div>
    <!-- The Loader. Is shown when pjax happens -->
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin-fast"></i>
    </div>

    <!-- common libraries. required for every page-->
    <script src="/master/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/master/node_modules/jquery-pjax/jquery.pjax.js"></script>
    <script src="/master/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="/master/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/master/node_modules/bootstrap/js/dist/util.js"></script>
    <script src="/master/node_modules/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/master/node_modules/widgster/widgster.js"></script>
    <script src="/master/node_modules/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
    <script src="/master/node_modules/hammerjs/hammer.js"></script>
    <script src="/master/node_modules/jquery-hammerjs/jquery.hammer.js"></script>


    <!-- common app js -->
    <script src="/master/js/settings.js"></script>
    <script src="/master/js/app.js"></script>

    <!-- Page scripts -->
    <script src="/master/node_modules/flot.animator/jquery.flot.animator.min.js"></script>
    <script src="/master/node_modules/flot/jquery.flot.js"></script>
    <script src="/master/node_modules/flot-orderBars/js/jquery.flot.orderBars.js"></script>
    <script src="/master/node_modules/flot/jquery.flot.selection.js"></script>
    <script src="/master/node_modules/flot/jquery.flot.time.js"></script>
    <script src="/master/node_modules/flot/jquery.flot.pie.js"></script>
    <script src="/master/node_modules/flot/jquery.flot.stack.js"></script>
    <script src="/master/node_modules/flot/jquery.flot.crosshair.js"></script>
    <script src="/master/node_modules/flot/jquery.flot.symbol.js"></script>
    <script src="/master/node_modules/flot.dashes/jquery.flot.dashes.js"></script>
    <script src="/master/node_modules/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="/master/node_modules/bootstrap_calendar/bootstrap_calendar/js/bootstrap_calendar.min.js"></script>

    <!-- page specific js -->
    <script src="/master/js/index.js"></script>
    @stack('js')

    @livewireScripts

    @include('notify::messages')
    @notifyJs

</body>
</html>
