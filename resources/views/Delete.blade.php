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

<h1>Delete Employees</h1>
<form action="{{ url("/delete") }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">employeName</label>
        <br>
        <input type="text" name="employeName">
    </div>

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">email</label>
        <br>
        <input type="email" name="email">
    </div>

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">departement</label>
       <br>
        <select name="departement">
        <option value="HR">HR</option>
        <option value="QR">QR</option>
        <option value="networking">networking</option>
        <option value="development">development</option>
        </select>
    </div>

     <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">salary</label>
        <br>
        <input type="text" name="salary">
    </div>

 <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">city</label>
        <br>
        <select name="city">
        <option value="karachi">karachi</option>
        <option value="lahore">lahore</option>
        <option value="islamabad">islamabad</option>
        </select>
    </div>
    
<input type="submit" name="submit" type="button" class="btn btn-primary">
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>