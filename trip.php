<?php
 $host="localhost";
 $user="root";
 $password="";
 $database="trip";
 $Name = $_POST["Name"];
 $Email = $_POST["Email"];
 $Gender = $_POST["Gender"];
 $Phone = $_POST["Phone"];
 $Description = $_POST["Description"];
 $conn = new mysqli ("$host","$user","$password","$database");
 
  if ($conn->connect_error){
    die ("connection failed: " . $conn->connect_error);
  }
 $sq = "INSERT INTO trip (Name, Email, Gender, Phone, Description)
   VALUES ('$Name', '$Email', '$Gender', '$Phone', '$Description');";
if($conn->query($sq)== TRUE){
  echo"New record created successfully";
}
else {
  echo "Error: " . $sq."<br>".$conn->error;
}
$conn->close();
?>
