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
          <h1>LARAVEL CRUD OPARATION</h1>
     </div>
     <div class="container">
          <form action="{{ url('/update/'.$edit->id) }}" method="post">

               @csrf
               <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" value="{{ $edit->name }}" name="name" class="form-control" id="name">
                  </div> 
               <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" value="{{ $edit->email }}" name="email" class="form-control" id="email">
                  </div> 
               <div class="mb-3">
                    <label for="password" class="form-label">password</label>
                    <input type="text" value="{{ $edit->password }}" name="password" class="form-control" id="password">
                  </div> 

                  <input type="submit" value="update">


          </form>

     </div>

  </body>
</html>