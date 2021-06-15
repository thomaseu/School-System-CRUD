<?php
include('db.php');
$sid=$_REQUEST['sid'];
//echo $sid;
$qry="DELETE  FROM cms where ID='$sid' ";
$run=mysqli_query($conn,$qry);

if ($run==true) {
    ?>
    <script>alert('Data will be deleted now');
    window.open('mainmenu.php','_self'); //'_self' is opening a new tab
    </script>
    <?php
}else{
    echo "eror";
}

?>
