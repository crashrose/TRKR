<!doctype html>
<html>
    <head>
        <title>Katie Rose - {{$title}}</title>
        @include('includes.headlinks', ['title' => $title])
        <meta name="google-site-verification" content="zQtU4om8gK6EllPKJRlis_CoEeDmMNGZZp2AqGksir4" />
    </head>
    <body id="body-{{$menu_item}}">
        <!-- <div class="testing"> here </div> -->
        <!-- <div class="container-flex"> -->
        @if ($title != 'Home')
            @include('includes.navmenu')
            <div class="main-container">
                <div class="content-container">
                    @yield('content')
                </div>
            </div>
        @else
            <div class="container-fluid">
                @yield('content')
            </div>
        @endif


    </body>
</html>