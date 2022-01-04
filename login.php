<?php
session_start();
include "koneksi.php";
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="icon" href="css/images/iconweb.png">
</head>
<body>
<div class="container"> 
    <div class="row">
        <div class="col" style="margin-top: 100px;">
            <h1 style="color: white;">
                <strong> Selamat Datang Di</strong>
            </h1>
            <h1 style="color: white;"><strong>Langit Senja Technology</strong></h1>
        </div>
        <div class="col" style="margin-top: 100px;">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <!-- <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                        </div> -->
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <a type="submit" name="proses" class="btn float-right login_btn" value="Login" href="index.php" > Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Belum Punya Akun?<a href="Register.php" style="color: yellow;">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="lupapassword.php" style="color: yellow;">Lupa Password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
</body>
</html>

<?php
// if(isset($_POST['proses'])){
//     $sql = mysqli_query($koneksi,"select * from user where username='$_POST[username]'
//     and password = '$_POST[password]'");

//     $cek = mysqli_num_rows($sql);
//     if($cek > 0){
//         header("Location:index.php");
//     }
// }
?>