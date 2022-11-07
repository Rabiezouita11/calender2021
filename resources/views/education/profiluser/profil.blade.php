<link rel="stylesheet" href="css/bootstrap.min.css">
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('index2')}}">Acceuil</a></li>
              <li class="breadcrumb-item"><a href="{{route('modifierEnseignant',['id'=>Auth::user()->id])}}">Modifier profil</a></li>
              <li class="breadcrumb-item"><a href="{{route('changemdp')}}">changer mot de passe</a></li>
              
              <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('storage/'.Auth::user()->image )}}" alt="User"  width="350" >
                    <div class="mt-3">
                      <h4> {{ Auth::user()->name }}</h4>
                  
                    </div>
                  </div>
                </div>
              </div>
         
            </div>
            
        
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                @if (session('vert'))
        <div class="alert alert-success">
        {{session('vert')}}

        </div>
        @endif
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom et prénom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->Fullname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Numéro du télephone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (+216)                      {{ Auth::user()->telephone }}

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Age</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->age }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Grade</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{ Auth::user()->grade }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
         
                </div>
              </div>
             
              
              </div>
            </div>
          </div>
        </div>
    </div>