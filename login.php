<?php
session_start();
include("connection.php");

$error="";

if(isset($_POST['login']))
{
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        $row=mysqli_fetch_assoc($result);

        $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        $_SESSION['role']=$row['role'];

        if($row['role']=="admin")
        {
            header("Location:admin_dashboard.php");
            exit();
        }
        else
        {
            header("Location:student_dashboard.php");
            exit();
        }
    }
    else
    {
        $error="Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Next Step | Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

>*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
display:flex;
justify-content:center;
align-items:center;
min-height:100vh;
background:linear-gradient(135deg,#2563eb,#4f46e5,#06b6d4);
background-size:400% 400%;
animation:bg 8s ease infinite;
}

@keyframes bg{
0%{background-position:0% 50%;}
50%{background-position:100% 50%;}
100%{background-position:0% 50%;}
}

.container{
width:950px;
height:550px;
background:#fff;
display:flex;
border-radius:20px;
overflow:hidden;
box-shadow:0 20px 40px rgba(0,0,0,.25);
}

.left{
width:50%;
background:linear-gradient(135deg,#2563eb,#06b6d4);
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
padding:40px;
color:#fff;
text-align:center;
}

.left img{
width:250px;
height:auto;
margin-bottom:20px;
}

.left h1{
font-size:38px;
margin-bottom:15px;
}

.left p{
font-size:17px;
line-height:28px;
}

.right{
width:50%;
display:flex;
justify-content:center;
align-items:center;
padding:40px;
background:#fff;
}

.login-box{
width:100%;
max-width:350px;
}

.login-box h2{
text-align:center;
font-size:32px;
color:#2563eb;
margin-bottom:25px;
}

.error{
background:#ffe5e5;
color:red;
padding:10px;
border-radius:8px;
margin-bottom:15px;
text-align:center;
}

.input-box{
position:relative;
margin-bottom:20px;
}

.input-box i{
position:absolute;
left:15px;
top:50%;
transform:translateY(-50%);
color:#2563eb;
}

.input-box input{
width:100%;
padding:15px 15px 15px 45px;
border:1px solid #ddd;
border-radius:10px;
font-size:16px;
outline:none;
transition:.3s;
}

.input-box input:focus{
border-color:#2563eb;
box-shadow:0 0 8px rgba(37,99,235,.3);
}

.remember{
display:flex;
justify-content:space-between;
align-items:center;
font-size:14px;
margin-bottom:20px;
}

.remember a{
text-decoration:none;
color:#2563eb;
}

.btn{
width:100%;
padding:15px;
border:none;
border-radius:10px;
background:#2563eb;
color:#fff;
font-size:18px;
cursor:pointer;
transition:.3s;
}

.btn:hover{
background:#1d4ed8;
transform:translateY(-2px);
}

.register{
text-align:center;
margin-top:20px;
}

.register a{
text-decoration:none;
color:#2563eb;
font-weight:bold;
}

@media(max-width:900px){

.container{
width:95%;
height:auto;
flex-direction:column;
}

.left,
.right{
width:100%;
padding:30px;
}

.left img{
width:180px;
}

.left h1{
font-size:30px;
}

.login-box{
max-width:100%;
}


</style>

</head>

<body>

<div class="container">

<div class="left">

<img src="image/logo.jpeg">

<h1>Next Step</h1>

<p>
Welcome Back!<br>
Login to continue your career journey.
</p>

</div>

<div class="right">

<div class="login-box">

<h2>Login</h2>

<?php
if($error!="")
{
echo "<div class='error'>$error</div>";
}
?>

<form method="post">

<div class="input-box">

<i class="fa-solid fa-user"></i>

<input
type="text"
name="username"
placeholder="Username"
required>

</div>

<div class="input-box">

<i class="fa-solid fa-lock"></i>

<input
type="password"
name="password"
placeholder="Password"
required>

</div>

<div class="remember">

<label>

<input type="checkbox">

Remember Me

</label>

<a href="#">Forgot Password?</a>

</div>

<button
type="submit"
name="login"
class="btn">

Login

</button>

<div class="register">

Don't have an account?

<a href="register.php">

Register

</a>

</div>

</form>

</div>

</div>

</div>

</body>

</html>