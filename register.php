<?php
include("connection.php");

$message="";

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $role=$_POST['role'];

    if($password==$cpassword)
    {
        $sql="INSERT INTO user(name,username,email,password,role)
        VALUES('$name','$username','$email','$password','$role')";

        if(mysqli_query($conn,$sql))
        {
            $message="Registration Successful!";
        }
        else
        {
            $message="Registration Failed!";
        }
    }
    else
    {
        $message="Password does not match!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Next Step | Register</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

*{
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
width:1000px;
height:650px;
display:flex;
background:#fff;
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

.register-box{
width:100%;
max-width:380px;
}

.register-box h2{
text-align:center;
font-size:32px;
margin-bottom:20px;
color:#2563eb;
}

.message{
background:#e8f5e9;
color:green;
padding:10px;
border-radius:8px;
margin-bottom:15px;
text-align:center;
}

.input-box{
position:relative;
margin-bottom:18px;
}

.input-box i{
position:absolute;
left:15px;
top:50%;
transform:translateY(-50%);
color:#2563eb;
}

.input-box input,
.input-box select{
width:100%;
padding:14px 15px 14px 45px;
border:1px solid #ddd;
border-radius:10px;
font-size:15px;
outline:none;
transition:.3s;
}

.input-box input:focus,
.input-box select:focus{
border-color:#2563eb;
box-shadow:0 0 8px rgba(37,99,235,.3);
}

.btn{
width:100%;
padding:15px;
border:none;
border-radius:10px;
background:#2563eb;
color:#fff;
font-size:17px;
cursor:pointer;
transition:.3s;
}

.btn:hover{
background:#1d4ed8;
}

.login-link{
margin-top:20px;
text-align:center;
}

.login-link a{
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

.register-box{
max-width:100%;
}

}

</style>

</head>

<body>

<div class="container">

<div class="left">

<img src="image/logo.jpeg" alt="Register">

<h1>Next Step</h1>

<p>

Create your account and start your career journey.

</p>

</div>

<div class="right">

<div class="register-box">

<h2>Register</h2>

<?php

if($message!="")
{
echo "<div class='message'>$message</div>";
}

?>

<form method="post">

<div class="input-box">

<i class="fa fa-user"></i>

<input
type="text"
name="name"
placeholder="Full Name"
required>

</div>

<div class="input-box">

<i class="fa fa-user-circle"></i>

<input
type="text"
name="username"
placeholder="Username"
required>

</div>

<div class="input-box">

<i class="fa fa-envelope"></i>

<input
type="email"
name="email"
placeholder="Email"
required>

</div>

<div class="input-box">

<i class="fa fa-lock"></i>

<input
type="password"
name="password"
placeholder="Password"
required>

</div>

<div class="input-box">

<i class="fa fa-lock"></i>

<input
type="password"
name="cpassword"
placeholder="Confirm Password"
required>

</div>

<div class="input-box">

<select name="role" required>

<option value="">Select Role</option>

<option value="student">Student</option>

<option value="admin">Admin</option>

</select>

</div>

<button
type="submit"
name="register"
class="btn">

Register

</button>

<div class="login-link">

Already have an account?

<a href="login.php">

Login

</a>

</div>

</form>

</div>

</div>

</div>

</body>

</html> register.php