<?php
session_start();
if(isset($_SESSION['admin_id'])){
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/style.css">
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <div class="login-container">
        <div class="login-inner-container">
        <i class="fa-solid fa-circle-user"></i>
        <h3>Admin Login</h3>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
            <div class="input-row">
                <div class="input-filed">
                    <label for="">Username</label>
                    <input type="text" name="username">
                </div>
            </div>
            <div class="input-row">
                <div class="input-filed">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
            </div>
            <input type="submit" value="Login" name="login" class="btn">
        </form>
        <div class="error-msg-cont">
            <span class="error-msg"></span>
        </div>
        <?php
        if(isset($_POST['login'])){
            include("config.php");

            $username=$_POST['username'];
            $password=$_POST['password'];
            $select=mysqli_query($con, "SELECT * FROM admin where username='$username' and password='$password'");
            if(mysqli_num_rows($select)>0){
                session_start();
                while($admin_res=mysqli_fetch_assoc($select)){
                    $_SESSION['name']=$admin_res['name'];
                    $_SESSION['admin_id']=$admin_res['admin_id'];
                   header("location:dashboard.php");
                }
            }else{
                ?>
                <script>
                    document.querySelector(".error-msg").innerText="Wrong Credentials! Try Again";
                </script>
                <?php
            }
        }
        ?>
        </div>
    </div>
<script src="javascript/script.js"></script>
</body>
</html>