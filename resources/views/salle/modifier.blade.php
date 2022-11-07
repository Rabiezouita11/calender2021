<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center"> Modifier</h2>
 	<br/>
<form action="{{route('modifierS')}}" method="post" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $salle_g_s->id }}">

 	<div class="form-group">
          <label>Numéro salle</label>
          
 	 	<input class="form-control" type="text" name="numsalle" value="{{ $salle_g_s->numsalle }}" required>
 	</div>
   



 	<a href="{{route('salleG')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
