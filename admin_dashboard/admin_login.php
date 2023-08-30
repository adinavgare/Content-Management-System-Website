<?php
   require("admin_connect.php");
?>
<html>
<head>
<title>Login form</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>

<div class="login-form">
    <h2>ADMIN LOGIN PANEL</h2>
    <form method="POST">
        <div class="input-field">
            <i class="bi bi-person-circle"></i>
            <input type="text" placeholder="Admin Name" name="AdminName">
        </div>
        <div class="input-field">
            <i class="bi bi-shield-lock"></i>
            <input type="password" placeholder="Password" name="AdminPassword">
        </div>
        
        <button type="submit"name="Signin" > Sign In</button>

        <div class="extra">
            <a href="#">Forgot Password ?</a>
            
        </div>

    </form>
</div>


<?php
if(isset($_POST['Signin']))
{
    $query = "SELECT * FROM `admin_login` WHERE `Admin_name` = '$_POST[AdminName]' AND `Admin_password` = '$_POST[AdminPassword]'";

    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
      session_start();
      $_SESSION['AdminLoginId']=$_POST['AdminName'];
      header("location:admin.php");
    }
    else
    {
      echo "<script>alert('Incorect Password');</script>";
    }
 
}
?>
</body>
</html>