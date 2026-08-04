<?php
include("connection.php");

$message="";

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
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
/*==============================
        HEADER
==============================*/

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    padding-top:90px;
}

/* Header */

header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:90px;
    background:#000;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 70px;
    z-index:1000;
    box-shadow:0 5px 20px rgba(0,0,0,.5);
}

/* Logo */

.logo{
    display:flex;
    align-items:center;
}

.logo img{
    width:70px;
    height:70px;
    border-radius:50%;
    margin-right:15px;
    object-fit:cover;
    border:2px solid #3b82f6;
}

.logo h2{
    color:#fff;
    font-size:30px;
    margin-bottom:5px;
}

.logo p{
    color:#d1d5db;
    font-size:14px;
}

/* Navigation */

nav ul{
    display:flex;
    list-style:none;
}

nav ul li{
    margin-left:35px;
}

nav ul li a{
    color:#fff;
    text-decoration:none;
    font-size:16px;
    font-weight:600;
    position:relative;
    transition:.3s;
}

nav ul li a::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-6px;
    width:0;
    height:2px;
    background:#3b82f6;
    transition:.3s;
}

nav ul li a:hover,
nav ul li a.active{
    color:#3b82f6;
}

nav ul li a:hover::after,
nav ul li a.active::after{
    width:100%;
}

/*==============================
        FOOTER
==============================*/

footer{
    background:#000;
    color:#fff;
    padding:70px 8% 25px;
}

.footer-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:40px;
    margin-bottom:30px;
}

.footer-box h2{
    color:#3b82f6;
    margin-bottom:15px;
}

.footer-box h3{
    color:#fff;
    margin-bottom:15px;
}

.footer-box p{
    color:#cbd5e1;
    line-height:28px;
}

.footer-box a{
    display:block;
    color:#cbd5e1;
    text-decoration:none;
    margin-bottom:10px;
    transition:.3s;
}

.footer-box a:hover{
    color:#3b82f6;
    padding-left:8px;
}

footer hr{
    border:none;
    height:1px;
    background:#333;
    margin:25px 0;
}

.copy{
    text-align:center;
    color:#94a3b8;
    font-size:15px;
}

/*==============================
        RESPONSIVE
==============================*/

@media(max-width:992px){

    header{
        padding:0 25px;
    }

    nav ul li{
        margin-left:18px;
    }

    .logo h2{
        font-size:25px;
    }

}

@media(max-width:768px){

    header{
        position:relative;
        height:auto;
        flex-direction:column;
        padding:20px;
    }

    body{
        padding-top:0;
    }

    nav ul{
        flex-wrap:wrap;
        justify-content:center;
        margin-top:20px;
    }

    nav ul li{
        margin:10px;
    }

    .footer-container{
        text-align:center;
    }
}
</style>

</head>
<header>

    <div class="logo">

        <img src="image/logo.jpeg" alt="NEXT STEP Logo">

        <div>
            <h2>NEXT STEP</h2>
            <p>Your Journey to a Successful Career</p>
        </div>

    </div>

    <nav>

        <ul>

            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="career.php">Career</a></li>
            <li><a href="company.php">Company</a></li>
            <li><a href="resume-builder.php">Resume Builder</a></li>
            <li><a href="interview.php">Interview Practice</a></li>
            <li><a href="feedback.php">Feedback</a></li>

        </ul>

    </nav>

</header>
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
<footer>

    <div class="footer-container">

        <div class="footer-box">

            <h2>NEXT STEP</h2>

            <p>
                Your Journey to a Successful Career Starts Here.
            </p>

        </div>

        <div class="footer-box">

            <h3>Quick Links</h3>

            <a href="index.php">Home</a>
            <a href="career.php">Career</a>
            <a href="company.php">Company</a>
            <a href="resume-builder.php">Resume Builder</a>
            <a href="interview.php">Interview Practice</a>
            <a href="feedback.php">Feedback</a>

        </div>

        <div class="footer-box">

            <h3>Contact</h3>

            <p>Email : nextstep@gmail.com</p>

            <p>Kolhapur, Maharashtra</p>

        </div>

    </div>

    <hr>

    <p class="copy">
        Copyright © 2026 NEXT STEP | All Rights Reserved.
    </p>

</footer>
</body>

</html> register.php