<?php
//require_once('connection.php');
$conn= mysqli_connect("localhost","root","","space_corp");
 if($conn->connect_error){die('Connect Error:'.$conn->connect_error);
    }
$username=$password=$pp='';
$username=$_POST['username'];
$pp=$_POST['password'];
$password=MD5($pp);
$sql="SELECT * FROM user_detail WHERE username='$username' AND password='$pp'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
 while($row=mysqli_fetch_assoc($result))
{  $id=$row["Id"];
	$username=$row["username"];
	session_start();
 $_SESSION['Id']=$id;
 $_SESSION['username']=$username;
}
 header("Location:space2.html");
}
else
{
	echo "Invalid email or password";
	 header("refresh:2; url=space1.html");
}
?>