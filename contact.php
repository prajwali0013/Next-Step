<?php
include "connection.php";

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql="INSERT INTO feedback(name,email,subject,message)
VALUES('$name','$email','$subject','$message')";

if(mysqli_query($conn,$sql))
{
echo "<script>alert('Message Sent Successfully');</script>";
}
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Contact Us</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eef5ff;
}

header{
background:#0B3D91;
color:white;
padding:20px;
text-align:center;
}

.container{
width:90%;
margin:50px auto;
display:flex;
justify-content:space-between;
gap:40px;
}

.left{
width:45%;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.right{
width:55%;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

h2{
color:#0B3D91;
margin-bottom:20px;
}

input,textarea{
width:100%;
padding:12px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:8px;
font-size:16px;
}

textarea{
height:120px;
resize:none;
}

button{
background:#0B3D91;
color:white;
padding:12px 30px;
border:none;
border-radius:8px;
cursor:pointer;
font-size:16px;
}

button:hover{
background:#1257d6;
}

.info{
margin:20px 0;
font-size:17px;
}

.info i{
color:#0B3D91;
margin-right:10px;
}

.social a{
font-size:28px;
margin-right:20px;
color:#0B3D91;
text-decoration:none;
}

iframe{
width:100%;
height:250px;
border:none;
border-radius:10px;
margin-top:20px;
}

</style>

</head>

<body>

<header>

<h1>Contact Us</h1>

</header>

<div class="container">

<div class="left">

<h2>Send Message</h2>

<form method="post">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="text" name="subject" placeholder="Subject" required>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit" name="submit">Send Message</button>

</form>

</div>

<div class="right">

<h2>Contact Information</h2>

<div class="info">
<i class="fa-solid fa-location-dot"></i>
Kolhapur, Maharashtra
</div>

<div class="info">
<i class="fa-solid fa-phone"></i>
+91 9876543210
</div>

<div class="info">
<i class="fa-solid fa-envelope"></i>
nextstep@gmail.com
</div>

<div class="social">

<a href="#"><i class="fa-brands fa-facebook"></i></a>

<a href="#"><i class="fa-brands fa-instagram"></i></a>

<a href="#"><i class="fa-brands fa-linkedin"></i></a>

<a href="#"><i class="fa-brands fa-github"></i></a>

</div>

<iframe src="https://maps.google.com/maps?q=Kolhapur&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>

</div>

</div>

</body>
</html>