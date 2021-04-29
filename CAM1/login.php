<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <title>Login Form</title>

  
</head>

<body>
	<div class="container">
        <div class="box">
            <div class="brand-wrapper">
                <img src="images/logo.jpeg" alt="logo">
                <h1 class="login-title">Log in</h1>
            </div>

            <form action="actions/action-login.php" method="POST" class="form">
                <div class="form-group">
                    <label for="text">Username/Admission No:</label>
                    <input type="text" class="form-control" placeholder="Enter username/admission no" id="usrnme" name="usrnme" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="psw" name="psw" required>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                </div>
                <div class="submit-btn">
                    <button type="submit" name="submit" class="btn btn-primary" >Login</button>
                </div>
                
                <div class="clearbtn">
                    <input type="reset" class="clrbtn" value="Clear" >	
                </div>
                <div class="forgetbtn">
                    <a href="">Forgot Password ?</a>
                </div>
            </form>
        </div>
					
	</div>
</body>
</html>

