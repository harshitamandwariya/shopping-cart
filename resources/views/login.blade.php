 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}" >
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <title>Login</title>
 </head>
 <body>
     <div class="box">
    <form method="post" data-parsley-validate="">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" required/><br>
            <label for="password">Password:</label>
            <input type="text" class="form-control" name="password" required/><br>
            <button type="submit" class="btn btn-primary form-control">Login</button>
</form>
 </div>
 </body>
 </html>
 