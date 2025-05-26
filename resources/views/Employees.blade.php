<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Employees management system:</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>
<body>
<br>
<h1 class="text-center">Employees List</h1>
<br>
<a href="{{ url("/create") }}" type="button" class="btn btn-primary btn-sm">add new employe</a>
<br>
<br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>employeId</th>
            <th>employeName</th>
            <th>email</th>
            <th>password</th>
            <th>departement</th>
            <th>city</th>
            
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employe)
            <tr>
                <td>{{$employe->employeId}}</td>
                 <td>{{$employe->employeName}}</td>
                  <td>{{$employe->email}}</td>
                   <td>{{$employe->password}}</td>
                    <td>{{$employe->departement}}</td>
                    <td>{{$employe->city}}</td>
                    
                    <td>
                    <a href="{{ url('edit/'.$employe->employeId) }}"  type="button" class="btn btn-danger btn-sm">update</a>
                    <a href="{{ url('delete/'.$employe->employeId) }}" type="button" class="btn btn-success btn-sm">delete</a>
                    </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>