<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajouter </h2>
<form action="{{route('Emploi')}}" method="post" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Nom du salle</label>
          
          <select name="salle"  class="form-control">

@foreach($salle_g_s as $cat)

<option value="{{$cat->numsalle}}">  {{ $cat->numsalle }}</option>
@endforeach

</select>
 </div>
 <div class="form-group">
 <label>groupe</label>
          


 
     
@foreach($groupes as $chat)

<div>
  <input type="checkbox" name="groupe[]" value="{{ $chat->section }}{{ $chat->niveaux }}{{ $chat->nom }}"    >
     <label >{{ $chat->section }} {{ $chat->niveaux }}{{ $chat->nom }}</label>
     @endforeach



</select>
 </div>
  <div class="form-group">
 <label>date D</label>
          
          <select name="date"  class="form-control">

@foreach($plageshoraires as $t)

<option value="{{$t->date}}">  {{ $t->date }}</option>
@endforeach

</select>
 </div>
 <div class="form-group">
 <label>jour</label>
 <select  name="jour" class="form-control">

@foreach($plageshoraires as $t)

<option value="{{$t->jour}}">  {{ $t->jour }}</option>
@endforeach

</select>
</div>
 <div class="form-group">
 <label>HD</label>
 <select  name="hd" class="form-control">

@foreach($plageshoraires as $t)

<option value="{{$t->heure_debut}}">  {{ $t->heure_debut }}</option>
@endforeach

</select></div>
 <div class="form-group">
 <label>HF</label>
 <select  name="hf"  class="form-control">

@foreach($plageshoraires as $t)

<option value="{{$t->heure_fin}}">  {{ $t->heure_fin }}</option>
@endforeach

</select>
</div>
          

 <a href="{{route('mm')}}" class="btn btn-default">Annuler</a>
 <button type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

