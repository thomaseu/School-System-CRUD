<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete course</title>
</head>
<body>
<?php 
include('mainmenu.php');
?>

<h3>Delete Course</h3>
<form action="deletecourse.php" method="post">
<label for="deletecourse.php">Enter Subject code</label>
<input type="text" name="sc" placeholder="Enter subject code" >


<label for="deletecourse.php">Enter Course Name</label>
<input type="text" name="name" placeholder="enter course name" >


<input type="submit" name="submit" value="search">

<?php 
if (isset($_POST['submit'])) {
    include('db.php');
    $sc=$_POST['sc'];
    $cname=$_POST['name'];

    $sql="SELECT * FROM cms WHERE sc='$sc' OR cname LIKE '%$cname%'";
    $run=mysqli_query($conn,$sql);

    if(mysqli_num_rows($run)<1) {

        echo "There is no database added";
        # code...
    }else{
        $count=0;

        while($row=mysqli_fetch_assoc($run)){
            $count++; 
            ?>
        <table width="100%" border=1  cellspacing=3 cellpadding=4>
        <tr>
        <br>
        
        <td width="20%" align="center"><img src="<?php echo $row['cimage'];?>" height="100px" width="100px"></td>
        <td width="20%" align="center"><?php echo $row['sc']; ?></td>
        <td width="20%" align="center"><?php echo $row['cname']; ?></td>
        <td width="20%" align="center">
        <a href="delete.php?sid=<?php echo $row['ID']; ?>">
        Delete
        </a>
        </td>
        </tr>

        </table>

            <?php 
            


        }
    }

}
?>

</form>    
</body>
</html>