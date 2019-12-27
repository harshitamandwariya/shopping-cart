<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../../public/css/parsley.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../../public/js/parsley.min.js"></script>
<script>
        $(document).ready(function() {
            $('form').parsley();
            $('.bs-callout-warning').toggleClass('hidden', ok);
        });
</script>

</head>
<body>
<form action="" method="post" role="form" data-parsley-validate>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" required data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Full name">
                </div>
                <div class="form-group">
                    <input type="email" name="email"  required data-parsley-type="email" data-parsley-trigger="keyup" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" required  data-parsley-pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$" data-parsley-trigger="keyup" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="password" name="confirm_password"  required data-parsley-pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$" data-parsley-trigger="keyup" class="form-control" placeholder="Retype password" data-parsley-equalto="#password">
                </div>
                <div class="col-4">
                        <button type="submit" name="submit" value="submit" >Register</button>
                </div> 
            </form>
</body>
</html>
