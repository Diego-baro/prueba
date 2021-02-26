<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Informes</h2>
  <p>Informe Cantidad de vehículos por tipos que han ingresado</p>               
  <table class="table">
    <thead>
      <tr>
        <th>Tipo de vehículo</th>
        <th>Ocupacion</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $datas)
      <tr>
        @if($datas->type == '2') 
        <td>Carro</td>
        @endif
        @if($datas->type == '3') 
        <td>Moto</td>
        @endif
        @if($datas->type == '4') 
        <td>Bicicleta</td>
        @endif
        <td>{{ $datas->rankin }}</td>
      </tr>
    @endforeach 
    </tbody>
  </table>
</div>
</body>
</html>
