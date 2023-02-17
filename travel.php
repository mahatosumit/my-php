
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
    <div class="container">
        <h1>Welcome to MOLISS</h1>
        <p>Enter Your information and submiit form to conform your partication in trip</p>
        <form action="trip.php" method="post">
            <input type="text" name="Name" id="name" placeholder="Enter Your name">
            <input type="text" name="Email" id="Email" placeholder="Enter Your Email ">
            <input type="text" name="Gender" id="Gender" placeholder="Enter Your Gender ">
            <input type="text" name="Phone" id="Phone" placeholder="Enter Your Phone">
            <textarea name="Description" id="Description" cols="30" rows="10" placeholder="Enter Your Description">
            </textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
    </div>
    <script src="travel.js">
        // 
    </script>
</body>
</html>