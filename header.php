<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php">Zahid Rahimoon</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">&#9776;</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/contactus.php">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/blog.php">Blog</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="login.php" class="btn login-btn my-2 my-sm-0">Login</a>
      </form>
      <form class="form-inline my-2 m-2 my-lg-0">
        <a href="signup.php" class="btn sign-btn my-2 my-sm-0">Sign Up</a>
      </form>
    </div>
  </nav>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
