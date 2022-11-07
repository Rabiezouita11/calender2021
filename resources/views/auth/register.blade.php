
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Enseignants</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
                <img src="img/logo.jpg"width="150x" height="100px" alt="">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="{{route('login')}}">Connexion</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
                <img src="vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard"  action="{{route('register')}}" method="POST" enctype="multipart/form-data"  >
								@csrf 
                                <h5></h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label"> Adresse Email*</label>
											<div class="col-sm-8">
												<input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="off" >
											
                                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                            </div>
										</div>
									
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Mot de passe*</label>
											<div class="col-sm-8">
												<input type="password"  value="{{ old('password') }}"  name="password" class="form-control @error('password') is-invalid @enderror"  autocomplete="off" >
											
                                            
                                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirmer mot de passe*</label>
											<div class="col-sm-8">
												<input type="password"name="password_confirmation"  value="{{ old('password_confirmation') }}" class="form-control">
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5></h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nom et Prénom*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control @error('Fullname') is-invalid @enderror" value="{{ old('Fullname') }}"name="Fullname" autocomplete="off">
											          
                                                @error('Fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Grade*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control @error('grade') is-invalid @enderror" value="{{ old('grade') }}" name="grade" autocomplete="off">
                                                			          
                                                @error('grade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Age*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control @error('age') is-invalid @enderror"  value="{{ old('age') }}"name="age" autocomplete="off">
                                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                        	</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Téléphone*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') }}" name="telephone" autocomplete="off">
                                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
											</div>
										</div>
									</div>
								</section>
								<!-- Step 3 -->
								<h5></h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Image*</label>
                                            <div class="col-sm-8">
                                            <input type="file"  name="image"  value="{{ old('image') }}"class="form-control @error('image') is-invalid @enderror"required>
                                            @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										
                                        </div>
                                        </div>
									
									</div>
                                    <div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Mot Clé*</label>
                                            <div class="col-sm-8">
                                            <input type="password"  value="{{ old('Mot') }}" name="Mot" class="form-control @error('Mot') is-invalid @enderror"required>
                                            @error('Mot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
										
                                        </div>
                                        </div>
									
									</div>
                                    <div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											
                                            <div class="col-sm-8">
                                            <input type="hidden" value="prof" name="Mot_confirmation" class="form-control"required >
										
                                        </div>
                                        </div>
									
									</div>
								</section>
								<!-- Step 4 -->
								
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	<button type="submit" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	
			
				
					
				
			
				
              
			
		</div>
	</div>
    </form>
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>