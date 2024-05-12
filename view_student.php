<?php
session_start();
error_reporting(0);
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
elseif($_SESSION['username']=='student'){
    header("location:login.php");
}
$host = "localhost";
$user = "root";
$password ="";
$db = "school";

$data = mysqli_connect($host , $user , $password , $db);
$sql = "SELECT * FROM user WHERE  usertype='student' ";
$result = mysqli_query($data, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <?php
include 'admin_css.php';
?>
</head>
<body>
<?php
include 'admin_sidebar.php';
?>

<style type = "text/css">
    .table_th{
        padding: 15px;
        font-size: 15px;
    }
    .table_td{
        padding: 20px;
        background-color: aliceblue;
    }

</style>
    <div class="content">
        <center>
        <h1>Students </h1>
        <?php
              if($_SESSION['message'])
              {
                echo $_SESSION['message'];
              }
              unset($_SESSION['message']);
        ?>
        <br>
        <table border="1px">
            <tr>
                <th class="table_th">Username</th>
                <th class="table_th">Email</th>
                <th class="table_th">Phone</th>
                <th class="table_th">Password</th>
                <th class="table_th">Delete</th>
                <th class="table_th">Update</th>


            </tr>


            <?php
              while($info=$result->fetch_assoc())
              {

              
            ?>
            <tr>
                <td class="table_td">
                    <?php echo "{$info['username']}";   ?>
                </td>
                <td class="table_td">
                <?php echo "{$info['email']}";   ?>

                </td>
                <td class="table_td">
                <?php echo "{$info['phone']}";   ?>

                </td>
                <td class="table_td">
                <?php echo "{$info['password']}";   ?>

                </td>
                <td class="table_td">

                <?php 
                echo "<a class='btn btn-primary' onCLick=\" javascript:return confirm('Are you sure to delete'); \" 
                  href='delete.php?student_id={$info['id']}'>Delete</a>";
                       ?>

                </td>
                <td class="table_td">
                    <?php echo "<a class='btn btn-primary' href='update_student.php?student_id={$info['id']}'>Update</a>"; 
                      ?>
                </td>
            </tr>

            <?php
              }
            ?>
        </table>
        </center>
    </div>
</body>
</html>