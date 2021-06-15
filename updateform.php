<?php 
include('updatecourse.php');
include('mainmenu.php');


?>

<h2>Update Course Details</h2>

<form action="updateform.php" method="post" enctype="multipart/form-data">
<label for="updateform.php">Enter your subject code</label>
<input type="text" name="sc" reqquired>

<label>Enter Course Name</label>
<input type="text" name="cname" required>

<label>Upload your image</label>
<input type="file" name="cimg" required>
<input type="submit" name="submit" value="submit">
</form>

<?php 
if (isset($_POST['submit'])) {
    include(db.php);




}
?>