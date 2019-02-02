<?php
$name=$_POST['fullname'];
$email=$_POST['email'];
$game=$_POST['game'];
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,'sposync');
$query="INSERT INTO userdata (Fullname, Email, Game) VALUES ('$name', '$email', '$game')";
$status=mysqli_query($connect,$query);
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head></head>
<script>
var a='<?php echo $status ?>';
if (a==1){
	window.location="index.php";
    alert("You are SUCCESSFULLY registered");
}
else{
	window.location="index.php";
	alert("Something went. (May be you are entering already registered Email)");
}
</script>
</html>