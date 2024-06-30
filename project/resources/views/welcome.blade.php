<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapmade.com/demo/templates/Bethany/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 May 2024 17:19:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bethany Bootstrap Template - Index</title>
    <meta name="robots" content="noindex, nofollow">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="https://bootstrapmade.com/demo/templates/Bethany/assets/img/favicon.png" rel="icon">
    <link href="https://bootstrapmade.com/demo/templates/Bethany/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bethany
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container">
            <div class="logo">
                <h1 class="text-light text-center"><a href="https://bootstrapmade.com/demo/templates/Bethany/index.html"><span>Calcubetric</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <div class="header-container d-flex align-items-center justify-content-between">
            
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto  active" data-id="1" href="javascript:;">Odds Calculator</a></li>
                        <li><a class="nav-link scrollto" data-id="2" href="javascript:;">Parlay Calculator</a></li>
                        <li><a class="nav-link scrollto" data-id="3" href="javascript:;">Odds Converter</a></li>
                        <li><a class="nav-link scrollto" data-id="4" href="javascript:;">Hedge Calculator</a></li>
                        <li><a class="nav-link scrollto" data-id="5" href="javascript:;">Hold Calculator</a></li>
                        <li><a class="nav-link scrollto" data-id="6" href="javascript:;">Moneyline Converter</a></li>
                        <li><a class="nav-link scrollto" data-id="7" href="javascript:;">Odds Value Calculator</a></li>
                       
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->

            </div><!-- End Header Container -->
        </div>
    </header><!-- End Header -->



    <main id="main" class="mt-4">



        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">        
                            <h3>What is the benefit of using Calcubetric?</h3>
                            <p>
                                Calcubetric provides accurate and quick calculations for potential payouts based on the stake, odds, and type of bet placed. It saves time, reduces the risk of errors, and simplifies the process of handling complex bets like parlays or accumulators.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ">

                        {{-- odds calculator  --}}
                        <div class="odds-cal section" id="1" style="padding: 10% 20%">
                            @include('odds-calculator')
                            
                        </div>
                        {{-- odds calculator ends  --}}

                        {{-- Parlay calculator  --}}
                        <div class="parlay-cal d-none section" id="2" style="padding: 10% 20%">
                            @include('parlay')
                        </div>
                        {{-- Parlay calculator ends  --}}

                        {{-- Odds converter  --}}
                        <div class="odds-converter d-none section" id="3" style="padding: 10% 20%">
                            @include('odds-converter')
                        </div>
                        {{-- Odds converter ends  --}}

                        {{-- Hedge calculator  --}}
                        <div class="hedge-cal d-none section" id="4" style="padding: 10% 20%">
                            @include('hedge')
                        </div>
                        {{-- Hedge calculator ends  --}}

                        {{-- Hold calculator  --}}
                        <div class="hold-cal d-none section" id="5" style="padding: 10% 20%">
                            @include('hold')
                        </div> 
                        {{-- Hold calculator ends  --}}

                        {{-- Moneyline converter  --}}
                        <div class="moneyline-converter d-none section" id="6" style="padding: 10% 20%">
                            @include('moneyline')
                        </div>
                        {{-- Moneyline converter ends  --}}

                        {{-- Odds value calculator  --}}
                        <div class="odds-value section d-none" id="7" style="padding: 10% 20%">
                            @include('odd-value')
                        </div>
                        {{-- Odds value calculator ends  --}}

                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


    </main><!-- End #main -->

    @include('footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    @include('script')

    


    <script>
        $(document).ready(function(){
            $('.nav-link').click(function(){
                var id = $(this).data('id');
                $('.section').addClass('d-none');
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
                $('#'+id).removeClass('d-none');
            });

            $('#bet_type').change(function(){
                var val = $(this).val();
                if(val == 2){
                    $('.odds-cal').addClass('d-none');
                    $('.parlay-cal').removeClass('d-none');
                }
             });

             $('#pbet_type').change(function(){
                var val = $(this).val();
                if(val == 1){
                    $('.parlay-cal').addClass('d-none');
                    $('.odds-cal').removeClass('d-none');
                }
             });

        });

    </script>

@stack('js')
   

</body>
</html>
