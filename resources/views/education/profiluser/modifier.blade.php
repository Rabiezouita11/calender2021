<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"></head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier Profil</h2>
 	<br/>
<form action="{{route('modifierP')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $users->id }}">

 	<div class="form-group">
      
        <label>Nom et prénom</label>
     <input class="form-control" type="text" name="Fullname" value="{{ $users->Fullname }}" required></br>
     <label>email</label>
     <input class="form-control" type="email" name="email" value="{{ $users->email }}" required></br>
   
     <label>Age</label>
     <input class="form-control" type="text" name="age" value="{{ $users->age }}" required></br>
     <label>Grade</label>
     <input class="form-control" type="text" name="grade" value="{{ $users->grade }}" required></br>
     <label>Téléphone</label>
     <input class="form-control" type="text" name="telephone" value="{{ $users->telephone }}" required></br>


</div>
<div class="form-group d-flex flex-column" >
    <input type="hidden" name="password" class="form-control" value="{{$users->password}}"  required>
        <label>Mot de passe</label>
            <input type="password" name="password" class="form-control"value="{{$users->password}}"required>


</div></br>
<td><img src="{{asset('storage/'.Auth::user()->image )}}" alt=" " class="img-fluid"  width="300px" height="150px"></td>

     <div class="form-group d-flex flex-column" >
        <label>photo</label>

        <input class="form-control" type="file" name="image" value="{{ $users->image }}" ></br>


</div>
</br>
        
    </div>

    </br>



 	<a href="{{route('profile')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>
</form>
</body>

</html>
