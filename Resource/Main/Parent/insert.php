<?php
include('connection.php');
 
$name=$_POST['name'];
$gender=$_POST['gender'];
$province=$_POST['province'];
$phone=$_POST['phone'];
$mysqli->query("insert into parent (name, gender, province,phone) 
values ('$name', '$gender', '$province','$phone')");
 
$res = $mysqli->query("select id from parent order by id desc");
// $row = $res->fetch_row();
// $id = $row[0];
 
// // Set a constant
// define ("FILEREPOSITORY","profile_images/");
 
// // Make sure that the file was POSTed.
// if (is_uploaded_file($_FILES['pimage']['tmp_name']))
// {
// // Was the file a JPEG?
// if ($_FILES['pimage']['type'] != "image/jpeg") {
// echo "<p>Profile image must be uploaded in JPEG format.</p>";
// } else {
 
// //$name = $_FILES['classnotes']['name'];
// $filename=$id.".jpg";
 
// $result = move_uploaded_file($_FILES['pimage']['tmp_name'],FILEREPOSITORY.$filename);
// //$result = move_uploaded_file($_FILES['pimg']['tmp_name'],
// "http://localhost/php-crud-student/profile_images/28.jpg";
// if ($result == 1) echo "<p>File successfully uploaded.</p>";
// else echo "<p>There was a problem uploading the file.</p>";
// }
// }
header('location:index.php');
?>