<?php
session_start();
if(  isset($_SESSION['username']) )
{
  header("location:../requests/");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","ovokos");
if($db)
{
  if(isset($_POST['login_btn']))
  {
      $username=mysqli_real_escape_string($db,$_POST['email']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password=md5($password); //Remember we hashed password before storing last time
      $sql="SELECT * FROM users WHERE  email='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            header("location:../requests/");
        }
       else
       {
              $_SESSION['message']="Username and Password combiation incorrect";
              header("location:./index.php");
       }
      }
  }
}

?>