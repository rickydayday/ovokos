<?php
session_start();
//connect to database

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "ovokos";
$db = new mysqli($hostName, $userName, $password, $databaseName);


// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $conn->connect_error);

  echo "No connection";
}


if(isset($_POST['register_btn']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
  
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']); 


    $query = "SELECT * FROM admin WHERE username = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                $password=md5($password); //hash password before storing for security purposes
                $sql="INSERT INTO admin(username, email, password ) VALUES('$username','$email','$password')"; 
                mysqli_query($db,$sql);  
                $_SESSION['message']="You are now logged in"; 
                $_SESSION['username']=$username;
                header("location:../login/");  //redirect login Page

                echo '<script language="javascript">';
                echo 'alert("Successfully Registered")';
                echo '</script>';
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>