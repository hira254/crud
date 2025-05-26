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

<h1 class="text-center">Update Employees</h1>
<br>
{{-- <pre>{{$employee}}</pre> --}}
<div class="col-md-6 mx-auto">
<form action="{{ url('/update/'. $employee->employeId) }}" method="post">
    @csrf
@method("PUT")
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">employeName</label>
        <br>
        <input type="text" name="employeName" value="{{ $employee->employeName}}" class="form-control">
    </div>

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">email</label>
        <br>
        <input type="email" name="email" value="{{ $employee->email}}" class="form-control">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">password</label>
        <br>
        <input type="text" name="password" value="{{ $employee->password}}" class="form-control">
    </div>

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">departement</label>
       <br>
        <select name="departement" class="form-control">
        <option value="HR" {{ $employee->departement === "HR" ? "selected":""}}>HR</option>
        <option value="QR" {{ $employee->departement === "QR" ? "selected":""}}>QR</option>
        <option value="networking" {{ $employee->departement === "networking" ? "selected":""}}>networking</option>
        <option value="development" {{ $employee->departement === "development" ? "selected":""}}>development</option>
        </select>
    </div>


 <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">city</label>
        <br>
        <select name="city" class="form-control">
        <option value="karachi" {{ $employee->city === "karachi" ? "selected":""}}>karachi</option>
        <option value="lahore"  {{ $employee->city === "lahore" ? "selected":""}}>lahore</option>
        <option value="islamabad"  {{ $employee->city === "islamabad" ? "selected":""}}>islamabad</option>
        </select>
    </div>
    
<input type="submit" name="submit" type="button" class="btn btn-primary" value="update employe">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
