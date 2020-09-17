<!DOCTYPE html>

<html lang="en">



<head>

        <!-- Required meta tags -->

  <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1" user-scalable=no>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="author" content="ticdesarrollomag.com.mx">

    <meta name="description" content="Encuentra los mejores vestidos que tanto deseas aquí. ¡No esperes más! Para comprar tu vestido en Ciudad de México, Cel: 55 4200 7997">

    <meta name="keywords" content="vestidos, mujeres, tiaras">  

    <!--<meta http-equiv="refresh" content="5">-->

    <!--<meta http-equiv="refresh" content="5;URL='https://ticdesarrollomag.com.mx'">-->

    <link rel="icon" href="{{ asset('img/logos/icon_logo.png') }}">

    <title>@yield('title') | Fille a femme</title>

 

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >

    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="{{asset('js/jquery-3.5.1.slim.min.js')}}"></script>

    <script src="{{asset('js/popper.min.js')}}"></script>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>

     <!-- Swiper JS -->

    <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    <!-- css fontawesome />-->
    <link rel="stylesheet" href="{{asset('plugin/fontawesome-free-5.13.0-web/css/all.min.css')}}">

    <!--Animate CSS-->

    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">


    <!-- Styles -->

    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @yield('popup')

    <!-- js -->

    <script type="text/javascript" src="{{asset('js/jquery-1.11.3.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/thumb_slider.js')}}"></script>

</head>



<body>	

        @include('util.header')

        @yield('content')

    <a class='btn-flotante' href='https://api.whatsapp.com/send?phone=5215542007997&text=Buen día, que precio tiene el vestido ' target="_blank"><img src="{{ asset('img/whatsapp.png') }}" border="0" /></a>

    <!-- Footer -->

    @include('util.footer')

    <!-- Footer -->

</body>

   

</html>