<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body background="school.jfif" class="body_deg">
    <center >
        
        <div class ="form_deg">
            <center class="title_deg">
                     Login Form
                     <h4>
                        <?php

                        error_reporting(0);
                        session_start();
                        session_destroy();
                         echo $_SESSION['loginMessage'];
                        ?>

                     </h4>
            </center>
            <form action="login_check.php" method="POST" class="login_form">
                <div >
                    <label class="label_deg"> Username </label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_deg"> Password </label>
                    <input type="Password" name="password">
                </div>
                <div >
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>