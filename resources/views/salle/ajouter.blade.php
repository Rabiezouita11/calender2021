<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajouter salles </h2> 
<form action="{{route('AjouterS')}}" method="post" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Salle</label>
          <div>@if ($errors->has('numsalle'))
<strong style="color: red;">{{ $errors->first('numsalle') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="numsalle" required>
 </div>

 <a href="{{route('salleG')}}" class="btn btn-default">Annuler</a>
 <button type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

