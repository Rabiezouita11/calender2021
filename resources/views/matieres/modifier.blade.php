<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier</h2>
 	<br/>
<form action="{{route('modifierM')}}" method="post" >
<input type="hidden" name="_token" value="{{ Session::token() }}">

<input type="hidden" name="id" value="{{ $matieres->id }}">

<div class="form-group">
          <label>Nom du section</label>
          
          <select name="section"  class="form-control">

@foreach($sections as $cat)

<option value="{{$cat->nom}}">  {{ $cat->nom }}</option>
@endforeach

</select>
 </div>
 <div class="form-group">
 <label>Niveaux</label>
          
          <select name="niveaux"  class="form-control">

@foreach($niveaux as $chat)

<option value="{{$chat->nom}}">  {{ $chat->nom }}</option>
@endforeach

</select>
 </div>
 <div class="form-group">
 	

 <div class="form-group">
 <label>Nom du matiere</label>
          
	<input class="form-control" type="text" name="nom"  value="{{ $matieres->nom }}" required>
 </div>




 	<a href="{{route('matiere')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
