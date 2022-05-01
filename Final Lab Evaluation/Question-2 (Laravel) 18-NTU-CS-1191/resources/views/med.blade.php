<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
    <title>Medicine Display</title>
</head>
<body>
<table border = "1">
<tr>
<td>S.NO</td>
<td>Medicine Name</td>
<td>Company</td>
<td>Quantity</td>
<td>Rem Quantity</td>
</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->S.NO }}</td>
<td>{{ $user->MedicineName }}</td>
<td>{{ $user->Comapny }}</td>
<td>{{ $user->Quantity }}</td>
<td>{{ $user->RemQuantity }}</td>
</tr>
@endforeach
</table>
</body>
</html>