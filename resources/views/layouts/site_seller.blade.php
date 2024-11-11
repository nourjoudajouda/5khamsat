<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5Khamsat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/assets/images/logo.png') }}">
    <!-- Style Sheet -->
    @yield('style_sheet')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('site/assets/css/all.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('site/assets/css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('site/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/owl.theme.default.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/media.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Tajawal', sans-serif;
        }
    </style>
    @yield('css')
</head>

<body>

    <header class="header_signup pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-3">
                    <img src="{{ asset('site/assets/images/logo.png') }}" alt="">
                </div>
                <div class="col-lg-6 col-9 col-login">
                    <button class="btn text-light bg-dark mt-2">Login</button>
                    <button class="btn btn_site mt-2">Subscribe Now</button>
                </div>
            </div>
        </div>
    </header>

    @yield('content')


    <footer class="bg_footer" style="background-image: url('{{ asset('site/assets/images/bg_footer.png') }}');">
    </footer>
    <!-- JS -->
    <Script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></Script>
    <Script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></Script>

    <Script src="https://code.jquery.com/jquery-3.6.0.min.js"></Script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('site/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site/assets/js/jquery.mycart.js') }}"></script>
    <script src="{{ asset('site/assets/js/all.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/5KHAMSAT.js') }}"></script>
    @yield('js')
</body>

</html>
