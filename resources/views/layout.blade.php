<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- SEO -->
    <meta name="description" content="Pannon Rádió Blog">
    <meta name="author" content="Pajor András">
    <meta name="url" content="http://pannonradio.hu">
    <meta name="copyright" content="Pannon Rádió">
    <meta name="robots" content="index,follow">
    <title>Pannon Rádió - A magyar szavak oldala</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('storage/favico.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="{{asset('storage/apple-touch-icon.png')}}">
    <!-- All CSS Plugins -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

</head>
<body>
<div id="main">
    <div class="container">
        <div class="row">
            <!-- About Me (Left Sidebar) Start -->
            <div class="col-md-3">
                <div class="about-fixed">
                    <div class="my-pic">
                        <img src="{{asset('storage/pannon_logo.png')}}" alt="">
                    </div>
                    <div class="my-detail">
                        <div class="white-spacing">
                            <h1>Pajor András atya</h1>
                            <span>szerkesztő</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Me (Left Sidebar) End -->
            <!-- Blog Post (Right Sidebar) Start -->
            <div class="col-md-9">
                <div class="col-md-12 page-body">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
                <!-- Footer Start -->
                <div class="col-md-12 page-body footer">
                    <footer>
                        <p>© Minden jog fenntartva 2017 Pannon Rádió</p>
                        <!-- UiPasta Credit Start -->
                        <div class="uipasta-credit">Created By <a href="/" target="_blank">Z-Poc</a></div>
                        <!-- UiPasta Credit End -->
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugin.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>