<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page </title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="image-section">
        <img src="images/nature1.jpeg" alt="Registration Image">
    </div>
    <div class="container">
        <div class="title">
            <form action="#" method="post"></form>
            <h1>Login Page</h1>
        </div>
        <div class="form">
            <div class="input_field">
                <label for="">Email Address</label>
                <input type="text" placeholder="Enter Your Email Address" class="input" name="email">
            </div>
            <div class="input_field">
                <label for="">Password</label>
                <input type="password" placeholder="Enter Your Password" class="input" name="password">
            </div>
            <div class="input_field">
                <label for="">Confirm Password</label>
                <input type="password" placeholder="Enter Your Password Again" class="input" name="confirm password">
            </div>
            <div class="forget">
                <p>Did you <a href="forget.php">Forget</a> your Password ?</p>
            </div>
            <div class="input_field">
                <input type="submit" value="Login" class="btn" name="register">
            </div>
            <div class="forget">
                <p>Don't have an <a href="signup.php">account</a> ?</p>
            </div>
        </div>
    </div>
</body>

</html>