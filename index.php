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
            header("Location:index1.php");
            exit();
        }
        else
        {
            header("Location:index1.php");
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

<link rel="preconnect" href="https://fonts.googleapis.com">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

html{
scroll-behavior:smooth;
}

body{
    margin:0;
    padding-top:90px;
    font-family:'Poppins',sans-serif;
    overflow-x:hidden;
    background:#000;
}

/*=========================
HEADER
==========================*/

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

z-index:9999;

box-shadow:0 5px 20px rgba(0,0,0,.6);

}

.logo{

display:flex;

align-items:center;

}

.logo img{

width:80px;

height:80px;

border-radius:50%;

object-fit:cover;

margin-right:15px;

border:3px solid #2563eb;

}

.logo h2{

font-size:34px;

color:white;

}

.logo p{

font-size:15px;

color:#d1d5db;

}

nav ul{

display:flex;

list-style:none;

}

nav ul li{

margin-left:35px;

}

nav ul li a{

color:white;

text-decoration:none;

font-size:17px;

transition:.4s;

}

nav ul li a:hover{

color:#3b82f6;

}

/*==============================
        LOGIN HERO
===============================*/

.login-hero{
    position:relative;
    min-height:100vh;

    background-image:
        linear-gradient(rgba(0,0,0,0.25), rgba(0,0,0,0.25)),
        url("image/career_page.png");

    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:80px 8%;
}

.overlay{

    position:absolute;

    top:0;

    left:0;

    width:100%;

    height:100%;

    background:rgba(0,0,0,.72);

}

.hero-left{

    width:55%;

    position:relative;

    z-index:2;

}

.welcome{

    color:#60a5fa;

    font-size:20px;

    letter-spacing:3px;

}

.hero-left h1{

    font-size:78px;

    color:white;

    margin-top:10px;

    font-weight:800;

}

.hero-left h2{

    font-size:42px;

    color:#3b82f6;

    margin-top:10px;

}

.hero-left h3{

    color:#facc15;

    font-size:28px;

    margin-top:25px;

}

.hero-left p{

    margin-top:30px;

    color:#d1d5db;

    font-size:18px;

    line-height:32px;

    max-width:600px;

}

.hero-right{

    width:40%;

    display:flex;

    justify-content:center;

    position:relative;

    z-index:2;

}

.login-card{

    width:380px;

    background:rgba(255,255,255,.12);

    backdrop-filter:blur(15px);

    border-radius:18px;

    padding:40px;

    border:1px solid rgba(255,255,255,.25);

    box-shadow:0 15px 40px rgba(0,0,0,.45);

}

.login-card h2{

    text-align:center;

    color:white;

    margin-bottom:20px;

    font-size:28px;

}

.error{

    background:#ffe5e5;

    color:red;

    padding:12px;

    border-radius:8px;

    text-align:center;

    margin-bottom:20px;

}

/*==========================
        LOGIN FORM
==========================*/

.input-box{

    position:relative;

    margin-bottom:22px;

}

.input-box input{

    width:100%;

    padding:16px 50px 16px 48px;

    border:none;

    outline:none;

    border-radius:12px;

    background:rgba(255,255,255,.12);

    color:#fff;

    font-size:16px;

    border:1px solid rgba(255,255,255,.18);

}
.input-box input::placeholder{

    color:#d1d5db;

}

.input-box i{

    position:absolute;

    left:14px;

    top:50%;

    transform:translateY(-50%);

    color:#60a5fa;
	
	font-size:14px;

}

.toggle-password{
    position:absolute;
    right:50px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
    color:#888;
    font-size:16px;
    z-index:10;
}

.remember{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin:20px 0;

    color:#fff;

    font-size:14px;

}

.remember a{

    color:#60a5fa;

    text-decoration:none;

}

.btn{

    width:100%;

    padding:13px;

    border:none;

    border-radius:12px;

    background:#2563eb;

    color:#fff;

    font-size:16px;

    font-weight:600;

    cursor:pointer;

    transition:.3s;

}

.btn:hover{

    background:#1d4ed8;

    transform:translateY(-3px);

}

.register{

    margin-top:25px;

    text-align:center;

    color:#fff;

}

.register a{

    color:#60a5fa;

    text-decoration:none;

    font-weight:bold;

}

.register a:hover{

    color:#93c5fd;

}
/*====================================
        PREMIUM FOOTER
====================================*/

footer{

background:#000;

color:#fff;

padding:70px 8% 30px;

}

.footer-container{

display:grid;

grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

gap:40px;

}

.footer-container h2,
.footer-container h3{

margin-bottom:20px;

}

.footer-container p{

line-height:28px;

color:#cbd5e1;

}

.footer-container a{

display:block;

text-decoration:none;

color:#cbd5e1;

margin-bottom:12px;

transition:.3s;

}

.footer-container a:hover{

color:#3b82f6;

padding-left:8px;

}

.copy{

border-top:1px solid #333;

margin-top:30px;

padding-top:20px;

text-align:center;

color:#cbd5e1;

}

@media(max-width:992px){

header{

padding:20px;

flex-direction:column;

height:auto;

}

body{

padding-top:140px;

}

.login-hero{

flex-direction:column;

text-align:center;

padding:60px 20px;

}

.hero-left{

width:100%;

margin-bottom:40px;

}

.hero-right{

width:100%;

}

.login-card{

width:100%;

max-width:420px;

}

.hero-left h1{

font-size:55px;

}

.hero-left h2{

font-size:32px;

}

}

@media(max-width:576px){

.logo h2{

font-size:24px;

}

.logo img{

width:60px;

height:60px;

}

.hero-left h1{

font-size:42px;

}

.hero-left h2{

font-size:25px;

}

.hero-left h3{

font-size:22px;

}

.description{

font-size:16px;

line-height:28px;

}

nav ul{

flex-wrap:wrap;

justify-content:center;

}

nav ul li{

margin:10px;

}

}
</style>
<script>

const eye=document.getElementById("eye");

const password=document.getElementById("password");

eye.onclick=function(){

if(password.type=="password"){

password.type="text";

eye.classList.remove("fa-eye");

eye.classList.add("fa-eye-slash");

}

else{

password.type="password";

eye.classList.remove("fa-eye-slash");

eye.classList.add("fa-eye");

}

}

</script>
<body>

<header>

    <div class="logo">

        <img src="image/logo.jpeg" alt="Logo">

        <div>

            <h2>NEXT STEP</h2>

            <p>Your Journey to a Successful Career</p>

        </div>

    </div>

    <nav>

        <ul>

            <li><a href="index.php">Home</a></li>

            <li><a href="career.php">Career</a></li>

            <li><a href="company.php">Company</a></li>

            <li><a href="resume-builder.php">Resume Builder</a></li>

            <li><a href="interview.php">Interview Practice</a></li>

            <li><a href="feedback.php">Feedback</a></li>

        </ul>

    </nav>

</header>


<!--==============================
        LOGIN HERO
===============================-->

<section class="login-hero">

    <div class="overlay"></div>

    <div class="hero-left">

        <span class="welcome">WELCOME TO</span>

        <h1>NEXT STEP</h1>

        <h2>Career Guidance Portal</h2>

        <h3>One Step Towards Success</h3>

        <p>

            Explore careers, prepare for interviews,
            build your resume and achieve your dream job
            with one complete career guidance platform.

        </p>

    </div>

    <div class="hero-right">

        <div class="login-card">

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
            placeholder="Enter Username"
            required>

    </div>


    <div class="input-box password-box">

        <i class="fa-solid fa-lock"></i>

        <input
            type="password"
            name="password"
            id="password"
            placeholder="Enter Password"
            required>

        <span class="toggle-password">

            <i class="fa-solid fa-eye" id="eye"></i>

        </span>

    </div>


    <div class="remember">

        <label>

            <input type="checkbox">

            Remember Me

        </label>

        <a href="forgot_password.php">

            Forgot Password?

        </a>

    </div>


    <button
        type="submit"
        name="login"
        class="btn">

        <i class="fa-solid fa-right-to-bracket"></i>

        Login

    </button>


    <div class="register">

        Don't have an account?

        <a href="register.php">

            Register Now

        </a>

    </div>

</form>
            <!-- पुढे Part 3 मध्ये Login Form येईल -->

        </div>

    </div>

</section>

<footer>

<div class="footer-container">

<div>

<h2>NEXT STEP</h2>

<p>

Your Journey to a Successful Career Starts Here.

</p>

</div>

<div>

<h3>Quick Links</h3>

<a href="index.php">Home</a>

<a href="career.php">Career</a>

<a href="company.php">Company</a>

<a href="resume-builder.php">Resume Builder</a>

<a href="interview.php">Interview Practice</a>

<a href="feedback.php">Feedback</a>

</div>

<div>

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
</html>