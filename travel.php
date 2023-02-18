
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link rel="stylesheet" href="travel.css">
</head>
<body>
<?php
    $con=mysqli_connect('localhost','root','','trip');
    if(isset($_POST['sb']) )
    {
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $gender=$_POST['Gender'];
        $phone=$_POST['Phone'];
        $query="INSERT INTO `trip` (`Name`, `Email`, `Gender`, `Phone`) VALUES 
        ('$name','$email','$gender','$phone')";
        $run=mysqli_query($con,$query);

    }
    ?>
    <div class="container">
        <h1>Welcome to MOLISS</h1>
        <p>Enter Your information and submiit form to conform your partication in trip</p>
        <form method="post">
            <input type="text" name="Name" id="name" placeholder="Enter Your name">
            <input type="text" name="Email" id="Email" placeholder="Enter Your Email ">
            <input type="text" name="Gender" id="Gender" placeholder="Enter Your Gender ">
            <input type="text" name="Phone" id="Phone" placeholder="Enter Your Phone">
            <button type="button" name='sb'>submit</button>
        </form>
    </div>
 
</body>
</html>