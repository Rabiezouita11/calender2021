<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
 	<br/>
 	 	<h2 class="text-center">Suppression </h2>
 	<br/>

 	<div class="row">
 	 	<div class="col-md-4 col-md-offset-4">
 	 	 	<table class="table table-hover">
 	 	 	 	<tr><th>ID</th><td>{{ $pointages->id }}</td></tr>
 	 	 	 	<tr><th>HF</th><td>{{ $pointages->user->Fullname }}</td></tr>
                     	 	 	 	<tr><th>HF</th><td>{{ $pointages->jour }}</td></tr>
 	 	 	 	<tr><th>Groupe</th><td>{{ $pointages->user->email }}</td></tr>
 	 	 	 	

 	 	 	 

 	 	 	</table>
 	 	 	<form action="{{route('pointsupp')}}" method="post"  onsubmit="return confirm('Etes-vous sur ?');" >

 	 	 	 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 	 	 	  	<input type="hidden" name="id" value="{{ $pointages->id }}">


 	 	 	 	<a href="{{route('pointage')}}" class="btn btn-default">Annuler</a>
 	 	 	 	<button type="submit" class="btn btn-danger pull-right">Supprimer</button>

 	 	 	</form>
 	 	</div>
 	</div>
</body>

</html>
