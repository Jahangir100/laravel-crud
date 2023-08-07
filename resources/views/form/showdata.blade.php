<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
     <div id="title">
          <h1>DHOWDATA CRUD OPARATION</h1>
     </div>
     <div class="container">
          <table class="table table-light">
               <thead class="thead-light">
                    <tr>
                         <th>Id</th>
                         <th>Name</th>
                         <th>Email</th>
                         <th>Passsword</th>
                         <th>Edit</th>
                         <th>Delete</th>
                    </tr>
               </thead>
               <tbody>
                    @foreach ($showdata as $showdata )
                    <tr>
                         <td>{{ $showdata->id }}</td>
                         <td>{{ $showdata->name }}</td>
                         <td>{{ $showdata->email }}</td>
                         <td>{{ $showdata->password }}</td>
                         <td><a href="{{url('/edit/'.$showdata->id )}}">edit</a></td>
                         <td><a href="{{url('/deletedata/'.$showdata->id )}}">delete</a></td>
                    </tr>
                         
                    @endforeach
               </tbody>
          </table>
         
     </div>

  </body>
</html>