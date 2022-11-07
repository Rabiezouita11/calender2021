
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Administration</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="{{asset('assets/images/logo.png')}}" width="100" height="50" alt="logo icon">
		 	</div><br> 
		  <div class="card-title text-uppercase text-center py-3"><p class="font-italic-warning"> Administration</div>
          <form method="POST" action="{{ route('admin.login') }}">
                    @csrf
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Adresse email</label>
			   <div class="position-relative has-icon-right">
				  <input type="email" id="exampleInputUsername" name="email"class="form-control input-shadow" placeholder="Entrez votre email"  autocomplete="off" required >
                  @if ($errors->has('email'))
<p style="color: red;">{{ $errors->first('email') }}</p>
@endif
                  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Mot de passe</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputPassword"name="password" class="form-control input-shadow" placeholder="Entrez votre mot de passe " autocomplete="off" required>
 
                  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
     
			<div class="form-row">
			 <div class="form-group col-6">
			  
			
			</div>
            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Connexion') }}
                            </button>
		
			</div>
      <br>
                            <p class="text-dark"><a href="{{ route('admin.register') }}">Créer un compte</a></p>
                            <p class="text-dark"><a href="{{ route('admin.password.request') }}">Mot de passe oublié</a></p>

                           
			 
			 </form>
		   </div>
		  </div>
		 
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets/js/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	
  <!-- sidebar-menu js -->
  <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
  
  <!-- Custom scripts -->
  <script src="{{asset('assets/js/app-script.js')}}"></script>
  
</body>
</html>
