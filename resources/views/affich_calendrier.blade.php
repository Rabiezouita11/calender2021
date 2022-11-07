<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>ADMINISTRATION</title>
  <!--favicon-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon"/>
  <!-- Vector CSS -->
  <link href="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="{{asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <!-- Horizontal menu CSS-->
  <link href="{{asset('assets/css/horizontal-menu.css')}}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{asset('assets/css/app-style.css')}}" rel="stylesheet"/>
 
  
</head>
<style>
      button1 {
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
      button1 span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
      }
      button1 span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
      }
      button1:hover {
      background-color: #f7c2f9;
      }
      button1:hover span {
      padding-right: 25px;
      }
      button1:hover span:after {
      opacity: 1;
      right: 0;
      }
    </style>

<body>

 


 
<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link" href="javascript:void();">
        <div class="media align-items-center">
     
          <div class="media-body">
           <img src="{{asset('assets/images/logo.png')}}" widht="100" height="50">
          </div>
        </div>
     </a>
    </li>
  
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">{{$a}}</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
        Vous Avez {{$a}} nouveaux messages
          <span class="badge badge-primary">{{$a}}</span>
          </li>
          @foreach($contacts as $contact)
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
            <div class="media-body">
            <h6 class="mt-0 msg-title">{{$contact->name}}</h6>
            <p class="msg-info">{{$contact->message}}  </p>
            <small>{{$contact->created_at}}</small>
            </div>
          </div>
          </a>
          </li>
          @endforeach
          <li class="list-group-item text-center"><a href="{{route('contactadmin')}}">Voir Tous Les Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">{{$x}}</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          Vous avez {{$x}} Notifications
          <span class="badge badge-info">{{$x}}</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
           @foreach($pointages as $pointer)
            <div class="media-body">
         
            <h6 class="mt-0 msg-title"> {{$pointer->Fullname}}</h6>
            <p class="msg-info">Jour :{{$pointer->jour}} {{$pointer->created_at}}</p>
            @endforeach
            </div>
        
          </a>
          </li>
        
        
          <li class="list-group-item text-center"><a href="{{route('adminpointage')}}">Voir Tous Les Notifications</a></li>
        </ul>
        </div>
      </div>
    </li>
 
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="{{asset('storage/'.Auth::user()->image )}}" class="img-circle" alt="Admin"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
       <a href="{{route('profilA')}}">           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{asset('storage/'.Auth::user()->image )}}" alt="Admin"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"> 
                    {{ Auth::user()->Fullname }}
                   
            <p class="user-subtitle">                    {{ Auth::user()->email}}
</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        
        <li class="dropdown-divider"></li>
        <a class="dropdown-item "  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Déconnexion') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                    
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<!-- start horizontal Menu -->
    <nav>
     
      
		
        <ul id="respMenu" class="horizontal-menu">
     
			<li>
                <a href="{{route('admin.index')}}">
               
                    <span class="title"><STRONG>Acceuil</STRONG></span>
                
                </a>
         
            </li>
			
          
                <!-- Level Two-->
                <li class="nav justify-content-end">
    
    <a href="{{route('enseignant')}}">
        
        <span calss="title">Les Enseignants</span>
   
    </a>
    </li>
    <li>
                <a href="{{route('adminpointage')}}">
                   
                    <span class="title">Pointage et Convocation</span>
			<span class="arrow"></span>
                </a>
                
                <!-- Level Two-->
               
                <ul>
             
                    <li><a href="{{route('historique')}}" >Historique convocation</a>
				
			
					</li>
                 
                 </ul>




                <!-- Level Two-->
               
                
            </li>

                <!-- Level Two-->
               
                
            </li>

            <li>
                <a href="javascript:;">
                    <i class="zmdi zmdi-card-travel"></i>
                    <span class="title">Formations</span>
			<span class="arrow"></span>
                </a>
                
                <!-- Level Two-->
               
                <ul>
                @foreach($sections as $section)
                    <li><a ><i class="zmdi zmdi-dot-circle-alt"></i> {{$section->nom}}</a>
				
			
					</li>
                    @endforeach
                    <li >
                    <a href="{{route('section')}}" ><i class="bi bi-gear-fill"> 
                        Paramétres</i>
                        </a>
                       
                    </li>
				
          
              
			
			
		
            
        </ul>
       
   
       
       
        <li>
          <a href="{{route('sh')}}">
             
              <span class="title">Calendrier des examens</span>
<span class="arrow"></span>
          </a>
          
          <!-- Level Two-->
         
          <ul>
       
            <li><a href="{{ route('sallegroupe')}}" >Tableaux des salles et groupes</a>

              <li><a href="{{ route('mm')}}" > Ajouter salles et Groupes</a>

              </li>
     
    <li><a href="{{ route('calendrier')}}" > Ajouter Calendrier</a>

    </li>
           
           </ul>
        </li>
                 
                 
  
    <li class="nav justify-content-end">
    
    <a href="{{route('matiere')}}">
        
        <span class="title">Matiéres</span>
   
    </a>
    </li> <li class="nav justify-content-end">
    
    <a href="{{route('date')}}">
        
        <span calss="title">plage horaires</span>
   
    </a>
    </li>
    <li class="nav justify-content-end">
    
    <a href="{{route('salleG')}}">
        
        <span calss="title">les salles </span>
   
    </a>
    </li>
        <li class="nav justify-content-end">
    
                <a href="{{route('contactadmin')}}">
                    
                    <Button1 >Contact</Button1>
		           
                </a>
                </li>

                <!-- Level Two-->
               
           
			
    </nav>
    <!-- end horizontal Menu -->
    <?php
use App\calendrier;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
@foreach($sections as $section)
    @foreach($niveaux as $niv)
    @if(!(($section->type=="master")&&($niv->nom=="3")) )  
    <div id="print">
    <button class="btn btn-success">print</button>
    section : {{$section->nom}} <br>
    Niveau : {{$niv->nom}} <br>


    <?php
        
        $data = Calendrier::where('section' , $section->nom )->where('niveaux' , $niv->nom)->orderBy('dateD', 'asc')->orderBy('hd', 'asc')->get();
    ?>
    <table border=1 id="table" class="table">
    <thead> 
    <tr>
    <th> ..</th>
<?php $i=0;$heur=array( );?>
        @foreach($data as $d)
        @if($d->hd>$i)
            <th>
              {{$d->hd}} - {{$d->hf}}
              <?php array_push($heur,$d->hd);?>
            </th>
            <?php $i=$d->hd?> 
            @endif
        @endforeach
                    </tr>
                    </thead> 
                    <tbody>
                    <?php $i=""; ?>
        @foreach($data as $d)
         @if($d->jour!=$i)
        <tr>
                <td> {{$d->jour}}-{{$d->dateD}} </td>
                <?php $i=$d->jour ?> 
            
                 
          
               
          
           @foreach ($heur as $h)
                 <?php
                    
                 $d2 = Calendrier::where('section' , $section->nom )->where('niveaux' , $niv->nom)->where('hd' , $h)->where('dateD' , $d->dateD)->get()->first();
             ?>
                @if(!empty($d2))
                <td> {{$d2->matiere}}</td>
                @else
                <td> ---</td>
                @endif
                @endforeach
                
                </tr>
                @endif 
                @endforeach

                </tbody>

    </table>
    </div>
    @endif
    @endforeach
@endforeach
    
    
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script>
    $('.btn-success').on('click', function(){
        var printArea = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printArea;
        window.print();
        location.reload();
    })
</script>
       
<!--End content-wrapper-->
   <!--Start Back To Top Button-->
   <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
   <!--End Back To Top Button-->
   

 
 </div><!--End wrapper-->

 <!-- Bootstrap core JavaScript-->
 <script src="{{asset('assets/js/jquery.min.js')}}"></script>
 <script src="{{asset('assets/js/popper.min.js')}}"></script>
 <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
   
<!-- simplebar js -->
 <script src="{{asset('assets/plugins/simplebar/js/simplebar.js')}}"></script>
 <!-- horizontal-menu js -->
 <script src="{{asset('assets/js/horizontal-menu.js')}}"></script>
 <!-- loader scripts -->
 <script src="{{asset('assets/js/jquery.loading-indicator.js')}}"></script>
 <!-- Custom scripts -->
 <script src="{{asset('assets/js/app-script.js')}}"></script>
 <!-- Chart js -->
 
 <script src="{{asset('assets/plugins/Chart.js/Chart.min.js')}}"></script>
 <!-- Vector map JavaScript -->
 <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
 <script src="{{asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
 <!-- Easy Pie Chart JS -->
 <script src="{{asset('assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
 <!-- Sparkline JS -->
 <script src="{{asset('assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
 <script src="{{asset('assets/plugins/jquery-knob/excanvas.js')}}"></script>
 <script src="{{asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
   
   <script>
       $(function() {
           $(".knob").knob();
       });
   </script>
 <!-- Index js -->
 <script src="{{asset('assets/js/index.js')}}"></script>

 
</body>
</html>
