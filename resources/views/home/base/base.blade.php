<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset=UTF-8/>
    <base href="{{ asset('/') }}"/>

    <link rel=stylesheet href='css/style.css' type='text/css'/>
    <!-- Bootstrap Core CSS -->
    <link href="sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel=stylesheet href='css/buddypress.min.css' type='text/css'/>
    <link rel=stylesheet href='css/woocommerce-layout.css' type='text/css'/>
    <link rel=stylesheet href='css/woocommerce-smallscreen.css' type='text/css'/>
    <link rel=stylesheet href='css/woocommerce.css' type='text/css'/>

    <link rel=stylesheet href='css/js_composer.min.css' type='text/css'/>
    <link rel=stylesheet href='css/A.style.css' type='text/css'/>
    <link rel=stylesheet href='css/A.style-woocommerce.css' type='text/css'/>

    <script type='text/javascript' src='js/jquery.min.js'></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="sb-admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/home.custom.js"></script>
    
</head>
<body>
    <div class=td-scroll-up>
        <i class=td-icon-menu-up></i>
    </div>
    <div class=td-menu-background></div>
    @include('home.base.login')
    <div class=td-search-background></div>
    <div class=td-search-wrap-mob>
        <div class=td-drop-down-search aria-labelledby=td-header-search-button>
            <form method=get class=td-search-form action="https://demo.tagdiv.com/newspaper_tech/">
                <div class=td-search-close>
                    <a href="#"><i class=td-icon-close-mobile></i></a>
                </div>
                <div role=search class=td-search-input>
                    <span>Search</span>
                    <input id=td-header-search-mob type=text value="" name=s autocomplete=off/>
                </div>
            </form>
            <div id=td-aj-search-mob></div>
        </div>
    </div>

<div id=td-outer-wrap class=td-theme-wrap>
    <div class="td-header-wrap td-header-style-2">
        @include('home.base.header')
        <div class="td-main-content-wrap td-main-page-wrap">
            <div class="td-container td-pb-article-list">
                <div class=td-pb-row>
                    
                    {{--Content left--}}
                    @yield('content')
                    {{--Content right--}}
                    @include('home.base.content-right')
                </div>
            </div>
        </div>
        @include('home.base.footer')
    </div>
</div>


<script type='text/javascript' src='js/tagdiv_theme.min.js'></script>

    
</body>
</html>
