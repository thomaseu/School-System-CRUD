<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('mainmenu.php'); ?>

<h2>Include Course Details</h2>

<form action="addcourse.php" method="post" enctype="multipart/form-data">
<label>
Enter Subject Code
</label>
<input type="text" name="sc" placeholder="enter subject code" required>
<br><br>
<label>Enter Course name</label>
<input type="text" name="cname" placeholder="enter course name" required>
<br><br>
<label>Upload iamge</label>
<input type="file" name="simg"  required>
<input type="submit" name="submit" value="submit">
</form>
    
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    include('db.php');

    $sc=$_POST['sc'];
    $cname=$_POST['cname'];
    $imagename=$_FILES['simg']['name'];
    $temp=$_FILES['simg']['tmp_name'];

    move_uploaded_file($temp,"$imagename");

    
    $sql="INSERT INTO cms(ID,sc,cname,cimage)
    values('','$sc','$cname','$imagename')";

    $run=mysqli_query($conn,$sql);
    if ($run==true) {
       
    
    ?>

    <script>alert('database has been saved');</script>
    <?php


}else{
    echo "error";
}
}
?>
