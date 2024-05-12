<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}

$host = "localhost";
$user = "root";
$password = "";
$db = "school";
$data = mysqli_connect($host,$user, $password,$db);
$sql= "SELECT * FROM teacher ";
$result = mysqli_query($data,$sql);

?>


<html>
    <head>
        <title>Student Management </title>
        <link rel = "stylesheet" type = "text/css" href = "style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body class="body">
<nav>
    <label class="logo">School </label>
        <ul>
            <li><a href =  "">Home</a></li>
            <li><a href =  "">Contact Us</a></li>
            <li><a href =  "">Admissions</a></li>
            <li><a href =  "">About Us</a></li>
            <li><a href =  "login.php" class="btn btn-success">Login</a></li>


</nav>    
<div class="section1">
    <label class= "img_text">hello students</label>
<img class = "main_img" src = "class.jfif">
</div>
<div class ="container">
    <div class= "row">
       <div class="col-md-4">
        <img class="welcome_class" src = "school.jfif">
</div>
<div class="col-md-8">
    <h1>welcome </h1>
<p class="text_class">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus corrupti cumque commodi laudantium neque in qui alias, excepturi voluptatem quis molestias dolor molestiae officiis minima suscipit nesciunt aut ullam. Provident?    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus corrupti cumque commodi laudantium neque in qui alias, excepturi voluptatem quis molestias dolor molestiae officiis minima suscipit nesciunt aut ullam. Provident?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus corrupti cumque commodi laudantium neque in qui alias, excepturi voluptatem quis molestias dolor molestiae officiis minima suscipit nesciunt aut ullam. Provident?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus corrupti cumque commodi laudantium neque in qui alias, excepturi voluptatem quis molestias dolor molestiae officiis minima suscipit nesciunt aut ullam. Provident?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus corrupti cumque commodi laudantium neque in qui alias, excepturi voluptatem quis molestias dolor molestiae officiis minima suscipit nesciunt aut ullam. Provident?

</P>
</div>
    </div>
</div>
<center>
    <h1>Teachers</h1>
</center>
<div class="container">
<div class = "row">
    <?php
      while($info=$result->fetch_assoc())
      {
    ?>
<div class="col-md-4">
    <img class="teacher" src ="  <?php echo "{$info['image']}" ?>">
    <h3> <?php echo "{$info['name']}" ?> </h3>
    <h3> <?php echo "{$info['description']}" ?> </h3>
</div>
     <?php
      }
      ?>
</div>

<center>
    <h1>courses</h1>
</center>
<div class="container">
<div class = "row">
<div class="col-md-4">
    <img class="course" src ="course.jfif">
   <h3>developer</h3>
</div>
<div class="col-md-4">
    <img class="course" src = "course.jfif">
    <h3>designer</h3>
</div>
<div class="col-md-4">
<img class="course" src  ="course.jfif">
<h3>marketing</h3>
</div>
</div>
</div>
<center>
		<h1 class="adm">Admission Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action="data_check.php" method="POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt" name="message"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
		</div>


		</form>
		
	</div>

<footer> 
    <h3 class="footer_text"> Copyright </h3>
</footer>
</body>
</html>