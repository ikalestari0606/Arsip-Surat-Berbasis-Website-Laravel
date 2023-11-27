<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Arsip Surat</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    <style>
        body {
            background-color: #f8f9fa;
        }

        #bg-slideshow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .slide {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center center;
        }

        .masthead {
            position: relative;
            padding-top: 15rem;
            padding-bottom: 15rem;
        }

    </style>

    <!-- Background Video-->
    <div id="bg-slideshow">
        <div class="slide" style="background-image: url('{{ asset('img/cr1.jpg') }}');"></div>
        <div class="slide" style="background-image: url('{{ asset('img/cr2.jpg') }}');"></div>
        <div class="slide" style="background-image: url('{{ asset('img/cr3.jpg') }}');"></div>
    </div>

    <!-- Masthead-->
    <div class="masthead">
        <div class="masthead-content text-white">
            <div class="container-fluid px-4 px-lg-0">
                <h1 class="fst-italic lh-1 mb-4">Arsip Surat PSDKU Politeknik Negeri Malang di Kota Kediri</h1>
                
                <div class="row text-center">
                    <div class="d-flex justify-content-center">
                        <a href="{{ asset('login') }}" class="btn btn-primary mx-2">Login</a>
                        <a href="{{ asset('register') }}" class="btn btn-secondary mx-2">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bg-slideshow').cycle({
                fx: 'fade',
                speed: 2000,
                timeout: 5000,
                slides: '.slide'
            });
        });
    </script>

</body>

</html>
