<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TEST<?=$_SESSION["name"]?></title>
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
                            <a href="index.php"><span>Enter Site</span></a>
                        </div>
                        <div class="login-form">
                            <h4>Login</h4>
                            <form method="post" action="../reg/log.php">
                                <div class="form-group">
                                    <label>Select</label><br>
                                    <label>
										<input type="radio" name="radio" value="ticher">
                                        <label for="radio">Ticher</label>
                                        <input type="radio" name="radio" value="student">
                                        <label for="radio">Student</label>
									</label>
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Remember Me
									</label>
                                    <label class="pull-right">
										<a href="#">Forgotten Password?</a>
									</label>

                                </div>
                                <button name="submit" type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                
                                <div class="register-link m-t-15 text-center">
                                    <p>Don't have account ? <a href="../reg/register.php"> Sign Up Here</a></p>
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