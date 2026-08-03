<?php

include "connection.php";

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];

$rating=$_POST['rating'];
$message=$_POST['message'];

$sql="INSERT INTO feedback(name,email,rating,message)
VALUES('$name','$email','$rating','$message')";

if(mysqli_query($conn,$sql))
{
echo "Thank You For Your Feedback";
}

}

?>

<!DOCTYPE html>

<html>

<head>

<title>Feedback</title>

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
width:600px;
margin:50px auto;
background:white;
padding:35px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

h2{
text-align:center;
color:#0B3D91;
margin-bottom:30px;
}

label{
display:block;
margin-bottom:8px;
font-weight:bold;
}

input,
select,
textarea{
width:100%;
padding:12px;
margin-bottom:20px;
border:1px solid #ccc;
border-radius:8px;
font-size:16px;
}

textarea{
height:120px;
resize:none;
}

button{
width:100%;
background:#0B3D91;
color:white;
padding:14px;
border:none;
border-radius:8px;
font-size:18px;
cursor:pointer;
}

button:hover{
background:#1257d6;
}

</style>

</head>

<body>

<header>

<h1>Feedback Form</h1>

</header>

<div class="container">

<h2>Share Your Feedback</h2>

<form action="" method="post">

<label>Full Name</label>

<input type="text" name="name" required>

<label>Email</label>

<input type="email" name="email" required>


<label>Rating</label>

<select name="rating">

<option value="">Select Rating</option>
<option value="5">⭐⭐⭐⭐⭐ Excellent</option>
<option value="4">⭐⭐⭐⭐ Very Good</option>
<option value="3">⭐⭐⭐ Good</option>
<option value="2">⭐⭐ Average</option>
<option value="1">⭐ Poor</option>

</select>

<label>Your Feedback</label>

<textarea name="message" placeholder="Write your feedback here..." required></textarea>

<a href="thankyou.php"><button type="submit" name="submit">

Submit Feedback

</button></a>

</form>

</div>

</body>

</html>