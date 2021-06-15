<?php include('mainmenu.php');
?>

<h2>Update Course</h2>
<form action="updatecourse.php" method="post">
<label>Enter subject code</label>
<input type="text" name="sc" placeholder="Enter subject code" required>


<label>Enter coursename</label>
<input type="text" name="cname" placeholder="Enter course name" required>


<input type="submit" name="submit" value="search" >


<?php 
if (isset($_POST['submit'])) {
    include('db.php');
    $sc=$_POST['sc'];
    $cname=$_POST['cname'];
    $sql="SELECT * FROM cms WHERE sc='$sc' OR cname LIKE '%$cname%'";
    $run=mysqli_query($conn,$sql);
    
    if (mysqli_num_rows($run)<1) {
        echo "No Record Found";
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
                <a href="update.php?sid=<?php echo $row['ID']; ?>">
                Update
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
