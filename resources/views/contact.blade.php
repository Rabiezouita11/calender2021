<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        
      button {
      display: inline-block;
      background-color: #7b38d8;
      border-radius: 10px;
      border: 4px double #cccccc;
      color: #eeeeee;
      text-align: center;
      font-size: 10px;
      padding: 8px;
      width: 80px;
      transition: all 0.5s;
      cursor: pointer;
      margin: ;
      }
      .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
      }
      button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
      }
      button:hover {
      background-color: #f7c2f9;
      }
      button:hover span {
      padding-right: 25px;
      }
      button:hover span:after {
      opacity: 1;
      right: 0;
      }
    
</style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_top_wrap d-flex justify-content-between align-items-center">
                                <div class="text_wrap">

                                </div>
                                <div class="text_wrap">
                                    @guest
                                    <p><a href="{{ route('login') }}"> <i class="ti-user"></i> Connexion</a>

                                  
                                    @else
                                        <div class="btn-group">
                                            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ Auth::user()->Fullname }}
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <li><a class="dropdown-item" href="{{ asset('logouta') }}">Déconnexion</a></li>

                                            </ul>
                                          </div>

                                          @endguest
                                    </p>
                                    <p><a href="{{ route('register') }}"> <i class="ti-user"></i>  S'inscrire</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="#">
                                            <img src="img/logo.jpg"width="200px" height="100px" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a  href="{{asset('/index2')}}">Acceuil</a></li>



                                                <li><a href="{{route('contact')}}">Contact</a></li>
                                            

                                            </ul>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" ></div>
                    <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                        var setting = {"height":500,"width":1180,"zoom":25,"queryString":"I.S.I.Kef, Le Kef, Tunisie","place_id":"ChIJ5QlgsU6k-xIR6M3SnkvpRuo","satellite":false,"centerCoord":[36.17843750180796,8.710439450926195],"cid":"0xea46e94b9ed2cde8","lang":"fr","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"410942"};
                        var d = document;
                        var s = d.createElement('script');
                        s.src = 'https://1map.com/js/script-for-user.js?embed_id=410942';
                        s.async = true;
                        s.onload = function (e) {
                          window.OneMap.initMap(setting)
                        };
                        var to = d.getElementsByTagName('script')[0];
                        to.parentNode.insertBefore(s, to);
                      })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div>

                </div>


                <div class="row">
                    <div class="col-12">
                    @if (session('azer'))
        <div class="alert alert-success">
        {{session('azer')}}

        </div>
        @endif
                        <h2 class="contact-title">Contactez nous </h2>
                    </div>
                    <div class="col-lg-8">
                    <form action="{{route('AjoutContact')}}"  method="post"  >
                        @csrf    
                        <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre Message'" placeholder="Entrez votre Message" required=""></textarea>
                                    </div>
                                    <div>@if ($errors->has('message'))
                                <strong style="color: red;">{{ $errors->first('message') }}</strong>
                                @endif</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre nom et prénom'" placeholder="Entrez votre nom et prénom" required="">
                                    </div>
                                    <div>@if ($errors->has('name'))
                                <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                @endif</div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez votre addresse mail'" placeholder="Entrez votre addresse mail" required="">
                                    </div>
                                    <div>@if ($errors->has('email'))
                                <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                @endif</div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Sujet'" placeholder="Sujet" required="">
                                    </div>
                                    <div>@if ($errors->has('subject'))
                                <strong style="color: red;">{{ $errors->first('subject') }}</strong>
                                @endif</div>
                                </div>
                            </div>
                            <div class="contact-form">
					<button type="submit" value="Submit">Envoyer</button>
					</div>
                        </form>
                    </div>
                
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->

     <!-- footer start -->
     <footer class="footer">
        <div class="footer_top">
            <div class="container">

                <p> Institut Supérieur d'Informatique du Kef
                    5 Rue Saleh Ayech - 7100 Kef Tél.: (216) 78 201 056 - Fax : (216) 78 200 237</p>
            </div>
        </div>
    </footer>
    <!-- footer end  -->

        <!-- JS here -->
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/scrollIt.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/nice-select.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/gijgo.min.js"></script>

        <!--contact js-->
        <script src="js/contact.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/mail-script.js"></script>

        <script src="js/main.js"></script>
        <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }

            });
        </script>
    </body>

    </html>
