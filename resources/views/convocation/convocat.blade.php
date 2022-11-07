<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg">
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
                                    <p><a href="{{ route('login') }}"> <i class="ti-user"></i>  Connexion </a>

                                          @if (Route::has('register'))
                                          <p><a href="{{ route('register') }}"> <i class="ti-user"></i>  S'inscrire </a>
                                       @endif
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
                                    
                                            <img src="{{asset('img/logo.jpg')}}" width="200px" height="100px" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                            <li><a  href="{{asset('/index2')}}">Acceuil</a></li>
                                                @guest
                                   
                                  

                                        

                                        @else
                                        <li><a  href="{{route('profile')}}">Profil</a></li>

                                                <li><a  href="{{route('pointage')}}">Pointage</a></li>

                                                @foreach($c as $p)
                                                @if(Auth()->user()->email == $p->email)
                                                <li><a  href="{{route('convocat')}}">Convocation</a></li>
                                                @else
                                               
                                                @endif
                                                @endforeach
                                                <li><a  href="{{route('aa')}}">Calendrier des examens</a></li>
                                             

                                          @endguest

                                               

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

<div class="main-container">
       
    <div class="col-sm-6">
            <h1 > <small><em>Liste des convocations</em></small></h1>
          </div>  </br>  
          @if (session('success'))
        <div class="alert alert-success">
        {{session('success')}}
    
        </div>
        @endif
        @if (session('xxx'))
        <div class="alert alert-danger">
        {{session('xxx')}}
    
        </div>
        @endif
        @if (session('tak'))
        <div class="alert alert-info">
        {{session('tak')}}
    
        </div>
        @endif
        @if (session('validé'))
        <div class="alert alert-success">
        {{session('validé')}}
    
        </div>
        @endif
        <div class="col-sm-10">
    
           <table class="table table-striped table-dark">
            <thead>
    
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom d'enseignant</th>
                <th scope="col">E-mail</th>
    
    
              </tr>
    
            </thead>
            <tbody>
    @foreach ($convocations as $c)
              <tr>
                  <td> {{$c->id}} </td>
                  <td> {{$c->Fullname}}</td>
                  <td> {{$c->email}}</td>
    
               
    
               
           
             
           <td>   <a class="btn btn-primary" href="{{route('convo',['id'=>$c->id])}}" role="button"> Voir convocation </a></td>
              </tr>
    @endforeach
    
                </table>     
           </div>    
           
    <!-- popular_program_area_start  -->


    <div class="tab-content" id="nav-tabContent">

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="single__program">
                            <div class="program_thumb">
            
                            </div>
                          

                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="course_all_btn text-center">

            </div>
        </div>
    </div>
</div>
</div>
<!-- popular_program_area_end -->

<!-- latest_coures_area_start  -->

<!--/ latest_coures_area_end -->

<!-- recent_event_area_strat  -->

<!-- recent_event_area_end  -->

<!-- latest_coures_area_start  -->

<!--/ latest_coures_area_end -->


<!-- recent_news_area_start  -->

<!-- recent_news_area_end  -->

<!-- footer start -->
<footer class="footer">

<div class="copy-right_text">
    <div class="container">
        <div class="footer_border"></div>
        <div class="row">
            <div class="col-xl-12">
                <p class="copy_right text-center">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </p>
            </div>
        </div>
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
function imprimer(divName) {
var printContents = document.getElementById(divName).innerHTML;    
var originalContents = document.body.innerHTML;      
document.body.innerHTML = printContents;     
window.print();     
document.body.innerHTML = originalContents;
}
</script>

</body>

</html>
