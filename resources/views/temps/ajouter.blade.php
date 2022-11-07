<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajouter plages horaires </h2> 
<form action="{{route('AjouterT')}}" method="post" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Jour</label>
          <div>@if ($errors->has('jour'))
<strong style="color: red;">{{ $errors->first('jour') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="jour" required>
 </div> <div class="form-group">
          <label>Heure début</label>
          <div>@if ($errors->has('heure_debut'))
<strong style="color: red;">{{ $errors->first('heure_debut') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="heure_debut" required>
 </div>
 <div class="form-group">
          <label>Heure fin</label>
          <div>@if ($errors->has('heure_fin'))
<strong style="color: red;">{{ $errors->first('heure_fin') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="heure_fin" required>
 </div>
 <div class="form-group">
          <label> Date</label>
          <div>@if ($errors->has('date'))
<strong style="color: red;">{{ $errors->first('date') }}</strong>
@endif</div>
	  	<input class="form-control" type="date" name="date" required>
 </div>
 <div class="form-group">
          <label> Nombre des enseignants</label>
          <div>@if ($errors->has('nmbreprof'))
<strong style="color: red;">{{ $errors->first('nmbreprof') }}</strong>
@endif</div>
	  	<input class="form-control" type="text" name="nmbreprof" required>
 </div>
 <a href="{{route('date')}}" class="btn btn-default">Annuler</a>
 <button type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

