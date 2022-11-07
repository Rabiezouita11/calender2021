<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajouter Enseignant </h2> 
<form action="{{route('AjouterE')}}" method="post"     enctype="multipart/form-data">
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Nom et prénom</label>
          <div>@if ($errors->has('Fullname'))
<strong style="color: red;">{{ $errors->first('Fullname') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="Fullname" required>
 </div>

 <div class="form-group">
          <label>Adresse mail </label>
          <div>@if ($errors->has('email'))
<strong style="color: red;">{{ $errors->first('email') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="email" required>
 </div>
 <div class="form-group">
          <label>Age</label>
          <div>@if ($errors->has('age'))
<strong style="color: red;">{{ $errors->first('age') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="age" required>
 </div>
 <div class="form-group">
          <label>Grade</label>
          <div>@if ($errors->has('grade'))
<strong style="color: red;">{{ $errors->first('grade') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="grade" required>
 </div>
 <div class="form-group">
          <label>Téléphone</label>
          <div>@if ($errors->has('telephone'))
<strong style="color: red;">{{ $errors->first('telephone') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="telephone" required>
 </div>


 <div class="form-group">
          <label>Mot de passe </label>
          <div>@if ($errors->has('password'))
<strong style="color: red;">{{ $errors->first('password') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="password" required>
 </div>
 <div class="form-group">
          <label>Image</label>
          <div>@if ($errors->has('image'))
<strong style="color: red;">{{ $errors->first('image') }}</strong>
@endif</div>
	  	<input class="form-control" type="file" name="image" required>
 </div>
 <a href="{{route('enseignant')}}" class="btn btn-default">Annuler</a>
 <button type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

