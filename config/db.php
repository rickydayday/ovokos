<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "ovokos";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



//file upload



//post metadata to table client

if(isset($_POST['submit'])) {

  //allow certain types of formats



$name = $_POST['name'];
$url   = $_POST['url'];
$email    = $_POST['email'];
$date   = $_POST['date']; 

 $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);



 // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];


    if (!in_array($extension, ['jpeg', 'jpg', 'png'])) {
        echo "You file extension must be ., .jpeg or .png";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {




if (move_uploaded_file($file, $destination)) {
            
$query = "INSERT INTO clients (name, email, url, file, dob)
VALUES ('$name','$email','$url', '$filename', '$date')";


$execute = mysqli_query($conn, $query);

}else {
            echo "Failed to upload file.";
        }






}

}










?>
