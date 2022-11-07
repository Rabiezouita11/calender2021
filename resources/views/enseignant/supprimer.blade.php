<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
 	<br/>
 	 	<h2 class="text-center">Supprimer</h2>
 	<br/>

 	<div class="row">
 	 	<div class="col-md-4 col-md-offset-4">
 	 	 	<table class="table table-hover">
 	 	 	 	<tr><th>ID</th><td>{{ $users->id }}</td></tr>
 	 	 	 	<tr><th>Nom et prénom</th><td>{{ $users->Fullname }}</td></tr>
 	 	 	 	<tr><th>email</th><td>{{ $users->email }}</td></tr>
                    <tr><th>Mot de passe </th><td>{{ $users->password }}</td></tr>
                    <tr><th>Age</th><td>{{ $users->age }}</td></tr>
                    <tr><th>Grade</th><td>{{ $users->grade }}</td></tr>

 	 	 	</table>
 	 	 	<form action="{{route('supprimerE')}}" method="post"  onsubmit="return confirm('Etes-vous sur ?');" >

 	 	 	 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 	 	 	  	<input type="hidden" name="id" value="{{ $users->id }}">


 	 	 	 	<a href="{{route('enseignant')}}" class="btn btn-default">Annuler</a>
 	 	 	 	<button type="submit" class="btn btn-danger pull-right">Supprimer</button>

 	 	 	</form>
 	 	</div>
 	</div>
</body>

</html>
