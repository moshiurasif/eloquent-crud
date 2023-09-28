<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Add Company Form - Laravel 10 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 
<body>
    <div class="container mt-2">
        <div class="card">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Name: {{$company->name}}</li>
              <li class="list-group-item">Email: {{$company->email}}</li>
              <li class="list-group-item">Address: {{$company->address}}</li>
            </ul>
          </div>
       
        
    </div>
</body>
 
</html>