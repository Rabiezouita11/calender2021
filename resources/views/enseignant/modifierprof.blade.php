<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier </h2>
 	<br/>
<form action="{{route('modifierE')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}"  enctype="multipart/form-data"  >
  	<input type="hidden" name="id" value="{{ $users->id }}">

 	<div class="form-group">
          <label>Nom et prénom</label>
          
 	 	<input class="form-control" type="text" name="Fullname" value="{{ $users->Fullname }}" required>
 	</div>
     <div class="form-group">
          <label>Age</label>
          
 	 	<input class="form-control" type="text" name="age" value="{{ $users->age }}" required>
 	</div>
	 <div class="form-group">
          <label>Grade</label>
          
 	 	<input class="form-control" type="text" name="grade" value="{{ $users->grade }}" required>
 	</div>
	 <div class="form-group">
          <label>E-mail</label>
          
 	 	<input class="form-control" type="text" name="email" value="{{ $users->email }}" required>
 	</div>
     <div class="form-group">
          <label>Mot de passe</label>
          
 	 	<input class="form-control" type="text" name="password" value="{{ $users->password }}" required>
 	</div>
	 <div class="form-group">
          <label> Télephone </label>
          
 	 	<input class="form-control" type="text" name="telephone" value="{{ $users->telephone }}" required>
 	</div>
	 <div class="form-group">
          <label>Image</label>
          
 	 	<input class="form-control" type="file" name="image" value="{{ $users->image }}" required>
 	</div>



 	<a href="{{route('enseignant')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
