<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        @foreach($sections as $section)
        @foreach($niveaux as $niv)
        <div id="print">
        <button class="btn btn-success">print</button>
        section : {{$section->nom}} | Niveau : {{$niv->nom}}  <br>
    <table class="table table-bordred">
    
    <thead>
    <tr>
    <th></th>
    <th>Matiere</th>
    <th>Heure de debut</th>
    <th></th>
    <th>heure de fin</th>
    <th></th>
    </tr>
    </thead>
    <tbody>
  @foreach ($data as $ca)
    <tr>
        <td>{{$ca->dateD}}</td>
        <td>{{$ca->matiere}}</td>
        <td>{{$ca->hd}}</td>
        <td>{{$ca->hf}}</td>
    </tr>
    @endforeach
    </tbody>

    </table>
    @endforeach
    @endforeach
    </div
    ></div>
</body>
</html>