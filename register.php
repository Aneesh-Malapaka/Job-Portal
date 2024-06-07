<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Register</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://images.unsplash.com/uploads/141103282695035fa1380/95cdfeef?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1130&q=80");
            background-size: cover;
        }

        form {
            margin: 5em 10em 0 15em;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0px 30px 70px #aaa;
        }

        .form-group,
        form button {
            margin: 20px 0 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="config.php" method="post">
            <div class="form-group">
                <label for="exampleInputName">Full name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter Full name" autocomplete="off">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputNumber">Phone</label>
                <input name="phone" type="number" class="form-control" id="exampleInputNumber" aria-describedby="phoneHelp" placeholder="Enter Phone Number">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Confirm Password</label>
                <input name="re-pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            <br>
            <small id="loginRedirectHelp" class="form-text text-muted">Already Registered? <a href="login.php" target="_blank">Login</a> </small>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>