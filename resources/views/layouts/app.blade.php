<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! setting('site.title') !!}</title>
    <meta name="description" content="{!! setting('site.description') !!}">
    <meta name="keywords" content="{!! setting('site.keywords') !!}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">

<!--[if lt IE 9]>
<script src="js/vendor/html5shiv.min.js"></script>
<script src="js/vendor/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <!-- START: header -->
    <div class="probootstrap-loader"></div>

    <header role="banner" class="probootstrap-header">
        <div class="container">
            <a href="{!! config('app.url') !!}" class="probootstrap-logo"><img src="{{setting('site.logo')}}" alt="logo"></a>

            <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
                menu('main', 'menus.mobile-menu');
                <div class="extra-text visible-xs"> 
                    <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
                    <h5>Dirección</h5>
                    <p>{!! $general->address !!}</p>
                    <h5>Siguenos en las redes</h5>
                    menu('main', 'menus.social-nav-menu');
                </div>
            </nav>
        </div>
    </header>
    <!-- END: header -->
    @section('slider')
    @include('partials.slider', $sliders)
    @endsection

    @section('cards1')
    @include('partials.cards1', [$cards1, 'title' => 'Titulo'])
    @endsection

    @section('thumbnail')
    @include('partials.thumbnail', [$thumbnails, 'title' => 'Titulo'])
    @endsection

    @section('call_to_action')
    @include('partials.call_to_action', ['title' => 'Titulo','content' => 'Contenido','call' => ['title' => 'Suscribete','link' => '#']])
    @endsection

    @section('products')
    @include('partials.products', [$products, 'title' => 'Titulo'])
    @endsection

    <section class="probootstrap-half reverse">
        <div class="image-wrap">
            <div class="image" style="background-image: url(img/slider_5.jpg);"></div>
        </div>
        <div class="text">
            <p class="mb10 subtitle">Why Choose Us</p>
            <h3 class="mt0 mb40">You Will Love Our Services</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb50">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p><a href="#" class="btn btn-primary mb10">Find out more</a></p>
        </div>
    </section>

    @section('cards2')
    @include('partials.cards2', [$cards2, 'title' => 'Titulo'])
    @endsection
    
    @section('team')
    @include('partials.cards2', [$team, 'title' => 'Titulo'])
    @endsection
    

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
    </div>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html> 