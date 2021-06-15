<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
</head>
<body>
    <?php include('mainmenu.php');
    include('db.php'); 
    
    $sql="SELECT * FROM cms";
    $run=mysqli_query($conn,$sql);

    if ($run==false) {
        echo "Error";
    }else if (mysqli_num_rows($run)<1) {
        echo "No Records";
    }else{


        while($row=mysqli_fetch_assoc($run)){
        ?>   
        
        <!-- <marquee behavior="scrollamount" scrollamount="50" direction="right"> -->
        

        <table width="100%" border=1  cellspacing=3 cellpadding=4>
        <tr>
        <br>
        <td width="20%" align="center"><?php echo $row['ID']; ?></td>
        <td width="20%" align="center"><img src="<?php echo $row['cimage'];?>" height="100px" width="100px"></td>
        <td width="20%" align="center"><?php echo $row['sc']; ?></td>
        <td width="20%" align="center"><?php echo $row['cname']; ?></td>
        </tr>

        </table>
        <!-- </marquee> -->
        

        <?php
        }
    }

    ?>
</body>
</html>