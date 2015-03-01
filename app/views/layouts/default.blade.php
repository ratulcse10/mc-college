@include('includes.header')
<body class="home-page">
<div class="wrapper">
    @include('includes.navBar')

    <!-- ******CONTENT****** -->
    <div class="content container">
        @yield('content');

    </div><!--//content-->
</div><!--//wrapper-->

@include('includes.footer')

