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
  <h2>Tabla</h2>
  <p>Informe de de Parqueadero más usado entre las fechas</p>               
  <table class="table">
    <thead>
      <tr>
        <th>Puesto</th>
        <th>Ocupacion</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data as $datas)
      <tr>
        <td>{{ $datas->put }}</td>
        <td>{{ $datas->rankin }}</td>
      </tr>
    @endforeach 
    </tbody>
  </table>
</div>
</body>
</html>
