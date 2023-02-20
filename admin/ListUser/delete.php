<?php


 include("../../config/db.php");

  $id = $_GET['id'];

if(isset($_GET['id'])) {



 $sql = "DELETE FROM users WHERE id= id";


//deleting the row from table
 $result = mysqli_query($conn,$sql);

 header("Location:./index.php");

}

  ?>