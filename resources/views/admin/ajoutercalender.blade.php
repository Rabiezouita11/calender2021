<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2 class="text-center">Ajouter </h2>
<form action="{{route('AjoutCalender')}}" method="post" >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>Nom du section</label>
          
          <select name="section"  class="form-control">

@foreach($sections as $cat)

<option value="{{$cat->nom}}">  {{ $cat->nom }}</option>
@endforeach

</select>
 </div>
 <div class="form-group">

 <label>Type</label>
          
          <select name="type"  class="form-control">

@foreach($sections as $cat)

<option value="{{$cat->type}}">  {{ $cat->type }}</option>
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
 <label>date D</label>
          
          <select name="dateD"  class="form-control">

@foreach($plageshoraires as $t)

<option value="{{$t->date}}">  {{ $t->date }}</option>
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
 <div class="form-group">
 <label>Jour</label>
 <select  name="jour"  class="form-control">

@foreach($plageshoraires as $t)

<option value="{{$t->jour}}">  {{ $t->jour }}</option>
@endforeach

</select>
</div>
 <div class="form-group">
 <label>matiere</label>
 <select  name="matiere" class="form-control">

@foreach($matieres as $m)

<option value="{{$m->nom}}">  {{ $m->nom }}</option>
@endforeach

</select>
</div>
          

 <a href="{{route('calendrier')}}" class="btn btn-default">Annuler</a>
 <button type="submit" class="btn btn-success pull-right">Ajouter</button>
</form></body>
</html>

