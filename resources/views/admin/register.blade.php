
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

<body><div id="wrapper">

<div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
 <div class="card card-authentication1 mx-auto my-5">
   <div class="card-body">
    <div class="card-content p-2">
      <div class="text-center">
        <img src="{{asset('assets/images/logo.png')}}" width="100" height="50" alt="logo icon">
      </div><br> 
     <div class="card-title text-uppercase text-center py-3"><p class="font-italic-warning"> Administration</div>
         <form method="POST" action="{{ route('admin.register') }}"    enctype="multipart/form-data">
                   @csrf

<div class="form-group row">
                            <label for="Fullname" class="col-md-4 col-form-label text-md-right">Nom et prénom*</label>

                            <div class="col-md-6">
                                <input id="Fullname" type="text" class="form-control{{ $errors->has('Fullname') ? ' is-invalid' : '' }}" name="Fullname" value="{{ old('Fullname') }}" required autofocus autocomplete="off">

                                @if ($errors->has('Fullname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Fullname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Addresse E-Mail* ') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="off">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                  
                      
                    

          
                        <div class="form-group row">
                            <label for="Age" class="col-md-4 col-form-label text-md-right">{{ __('Age*') }}</label>

                            <div class="col-md-6">
                                <input id="Age" type="text" class="form-control{{ $errors->has('Age') ? ' is-invalid' : '' }}" name="Age" required autocomplete="off">

                                @if ($errors->has('Age'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Telephone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone*') }}</label>

                            <div class="col-md-6">
                                <input id="Telephone" type="text" class="form-control{{ $errors->has('Telephone') ? ' is-invalid' : '' }}" name="Telephone" required autocomplete="off">

                                @if ($errors->has('Telephone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                  
                  
                        </div> <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Image*') }}</label>

                            <div class="col-md-6">
                            <input type="file"  name="image" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe*') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="off">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div></div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer Mot de passe*') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >
                            </div>

                     
                                    </div>
                                
                                
                                    <div class="form-group row">
                                        <label for="Mot" class="col-md-4 col-form-label text-md-right">{{ __('Mot Clé*') }}</label>
            
                                        <div class="col-md-6">
                                            <input type="password"  value="{{ old('Mot') }}" name="Mot" class="form-control @error('Mot') is-invalid @enderror"required>
                                            @error('Mot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input type="hidden" value="admin" name="Mot_confirmation" class="form-control"required >

                                        </div>
                                    </div>
                    
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    s'inscrire
                                </button><br> <br>
                            </div>
                            <br>
                        </div>
                    </form>
                    	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>