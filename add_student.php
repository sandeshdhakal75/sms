<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
elseif($_SESSION['username']=='student'){
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db ="school";
$data =mysqli_connect($host,$user, $password,$db);

if(isset($_POST['add_student']))
{
    $username= $_POST['name'];
    $email= $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $usertype = "student";
    $check = "SELECT *  FROM user WHERE username='$username' ";
    $check_user = mysqli_query($data, $check);
    $row_count = mysqli_num_rows($check_user);
     if($row_count ==1)
     {
        echo " <script type = 'text/javascript'>alert('Username Already Exists');</script>";
     }
     else{
          
     

    $sql= "INSERT INTO user(username,  phone, email, usertype, password) VALUES('$username ', '$phone','$email', '$usertype' , '$password' )";
    $result = mysqli_query($data, $sql);
    if($result){
        echo " <script type = 'text/javascript'>alert('Data Uploaded Successfully');</script>";

    }
    else{
       
      echo "upload failed";
    }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission</title>

    <style type="text/css">
        label{
            display: inline-block;
            text-align: right;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .div_deg{
            background-color: rebeccapurple;
            width: 400px;
            padding-top: 40px;
            padding-bottom: 40px;
        }
        </style>
<?php
include 'admin_css.php';
?>


</head>
<body>
<?php
include 'admin_sidebar.php';
?>
   
    <div class="content">
        <center>
        <h1>Add Student</h1>
        <div class="div_deg">
            <form action="#" method="POST">
                <div>
                    <label>Username</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label>Phone</label>
                    <input type="text" name="phone">
                </div>
                <div>
                    <label>Password</label>
                    <input type="text" name="password">
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
                </div>
            </form>
        </div>
        </center>
    </div>
</body>
</html>