 <?php
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
 $phone=$_POST['phone'];
 $gender=$_POST['gender'];
  $username=$_POST['username'];
  $password=$_POST['password'];
 


    $conn=new mysqli('localhost','root','','space_corp');
    if($conn->connect_error){die('Connect Error:'.$conn->connect_error);
    }
else{
    $stmt=$conn->prepare("insert into user_detail(firstname,lastname,phone,gender,username,password) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$firstname,$lastname,$phone,$gender,$username,$password);
        $stmt->execute();
        echo "register successfully...";
        header("refresh:2; url=space1.html");
        $stmt->close();
        $conn->close();
 }
?>