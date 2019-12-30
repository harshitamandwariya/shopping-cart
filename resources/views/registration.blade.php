<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link rel="stylesheet" type="text/css" href="{{ asset('../../public/css/style.css') }}" >
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <title>Register</title>
 </head>
<body>
<div class="box">
<form action="" method="post" role="form" data-parsley-validate>
                <div class="form-control">
                    <input type="text" name="name" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full name"><br>
                    <input type="email" name="email" class="form-control" required data-parsley-type="email" data-parsley-trigger="keyup" class="form-control" placeholder="Email"><br>
                    <input type="password" id="password" class="form-control" name="password" required  data-parsley-pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$" data-parsley-trigger="keyup" class="form-control" placeholder="Password"><br>
                    <input type="password" name="confirm_password"  class="form-control" required data-parsley-pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$" data-parsley-trigger="keyup" class="form-control" placeholder="Retype password" data-parsley-equalto="#password"><br>
                        <button type="submit" name="submit" class="btn btn-primary form-control" value="submit" >Register</button>
                </div>
            </form>
</div>
</body>
</html>
