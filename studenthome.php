<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
elseif($_SESSION['username']=='admin')
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Homepage</title>
    <?php
include 'student_css.php';

?>

</head>
<body>
<?php
include 'student_sidebar.php';

?>
    <div class="content">
        <h1>Hello</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime tempora maiores amet quod vero. Nobis modi, porro odit soluta cum corporis consequuntur. Reiciendis accusantium esse sint ex fugit molestias magni!</p>
    </div>
</body>
</html>