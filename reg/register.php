<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>
    <!-- Styles -->
    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html"><span>Resteration</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Register to </h4>
                            <form action="../reg/reg.php" method="post">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="User Name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>Select</label><br>
                                    <label>
										<input type="radio" name="radio" value="ticher">
                                        <label for="radio">Ticher</label>
                                        <input type="radio" name="radio" value="student">
                                        <label for="radio">Student</label>
									</label>
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Agree the terms and policy 
									</label>
                                </div>
                                <button name="submit" type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                               
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="login.php"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>