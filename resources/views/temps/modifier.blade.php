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
<form action="{{route('modifierT')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
 
     <input type="hidden" name="id" value="{{ $plageshoraires->id }}">


 	<div class="form-group">
          <label>Jour</label>
            

          
 	 	<input class="form-control" type="text" name="jour" value="{{ $plageshoraires->jour }}" required>
 	</div>
     <div class="form-group">
          <label>Heure_debut</label>
          
 	 	<input class="form-control" type="text" name="heure_debut" value="{{ $plageshoraires->heure_debut}}" required>
 	</div>
     <div class="form-group">
          <label>Heure_fin</label>
          
 	 	<input class="form-control" type="text" name="heure_fin" value="{{ $plageshoraires->heure_fin }}" required>
 	</div>
     <div class="form-group">
          <label>Date</label>
          
 	 	<input class="form-control" type="text" name="date" value="{{ $plageshoraires->date }}" required>
 	</div>
     <div class="form-group">
          <label>Nombre des enseignants</label>
          
 	 	<input class="form-control" type="text" name="nmbreprof" value="{{ $plageshoraires->nmbreprof}}" required>
 	</div>


 	<a href="{{route('date')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
