<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h1>Create an Account</h1>
    <button class="fb">SignUp with Facebook</button>
    <hr>
    <h2>Register Now</h2>
    <form action="insert.php"  method="post" enctype="multipart/form-data">
    <br>
    <input type="text" name="name" id="name" placeholder="Name" required>
    <br><br>
    
    <input type="email" name="email" id="email" placeholder="Email" required><br><br>
    <input type="number" name="number" id="email" placeholder="Phone number" required><br><br>

    <input type="password" name="password" id="password" placeholder="Password" required><br><br>
     <label>Profile pic:</label><br><input type="file" name="file" id="file" >
    <br>
    <br>
    <input type="submit" name="done" id="submit" value="Sign Up Now">
    </div>
</body>
</html>