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

<table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>paca</th>
        <th>puesto</th>
        <th>fecha</th>
        <th>Hora</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $datas)
      <tr>
        <td>$datas->iduser</td>
        <td>$datas->plate</td>
        <td>$datas->put</td>
        <td>$datas->created_at</td>

      </tr>
       @endforeach 
    </tbody>
  </table>
</body>
</html>
