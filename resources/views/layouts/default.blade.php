<!DOCTYPE html>
<html lang="en-US">

<head>
    @include('includes.head')
</head>

<body class="" id="">
    <div class="page-wrap " id="app">
        <!-- <help-me-choose></help-me-choose> -->
        <!-- <div id="help-me-choose" class="position-fixed w-100" style="max-width: 1600px; z-index: 100;display:none;"><a
                data-break-point="1200" data-modal-width="100%" href="/plan-lookup-request"
                class="btn btn-lg btn-primary btn-block"><i class="fa fa-life-ring"></i>&nbsp;&nbsp;Help Me
                Choose
            </a></div> -->
        <!-- Header -->
        <header class="globalheader">
            @include('includes.header')
        </header>

        <!-- Page -->
        @yield('content')

        <!-- Footer -->
        <footer class="globalfooter">
            @include('includes.footer')
        </footer>

    </div>

    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/jquery-2.1.3.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>    
    <!-- <script src="/js/application.js"></script> -->
</body>

</html>
