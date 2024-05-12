<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
elseif($_SESSION['username']=='student'){
    header("location:login.php");
}
 $host ="localhost";
 $user = "root";
 $password = "";
 $db = "school";

 $data = mysqli_connect($host,$user,$password,$db);
 $sql = "SELECT * FROM teacher";
 $result = mysqli_query($data,$sql);

 if($_GET['teacher_id']){
    $id  =$_GET['teacher_id'];
    $sql2 ="DELETE FROM teacher WHERE id = '$id' ";
    $result2 = mysqli_query($data,$sql2);
    if($result2){
      header('locatiob:admin_view_teacher.php');
    }
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php
include 'admin_css.php';
?>
<style type="text/css">

    .table_th{
        padding: 20px;
        font-size: 20px;

    }
    .table_td{
        padding: 20px ;
        background-color: yellow

    }

</style>

</head>
<body>
<?php
include 'admin_sidebar.php';
?>
<center>
    <div class="content">
        <h1>View Teacher</h1>
        <table border="1px">
            <tr>
                <th class="table_th">Teacher Name</th>
                <th class="table_th">About Teacher</th>
                <th class="table_th">Image</th>
                <th class="table_th">Delete</th>

            </tr>
                      
            <?php
                 while($info = $result->fetch_assoc()){

                 
            ?>

            <tr>
                <td class="table_td"><?php echo"{$info['name']} " ?></td>
                <td class="table_td"><?php echo"{$info['description']} " ?></td>
                <td class="table_td"><img height="100px" width="100px" src="<?php echo"{$info['image']} " ?>" </td>
             <td class="table_td">
                <?php
                   echo "
                
                <a onClick=\"javascript:return confirm('Are you Sure to delete'); \" class= ' btn btn-danger' href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete
                </a>";

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