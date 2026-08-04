<?php

include "connection.php";

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$father=$_POST['father'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$linkedin=$_POST['linkedin'];
$github=$_POST['github'];
$address=$_POST['address'];

$college=$_POST['college'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$passing_year=$_POST['passing_year'];
$percentage=$_POST['percentage'];

$technical_skills=$_POST['technical_skills'];
$soft_skills=$_POST['soft_skills'];

$project_title=$_POST['project_title'];
$technology=$_POST['technology'];
$project_description=$_POST['project_description'];

$company=$_POST['company'];
$job_role=$_POST['job_role'];
$duration=$_POST['duration'];
$experience=$_POST['experience'];

$certificate_name=$_POST['certificate_name'];

$achievement=$_POST['achievement'];
$language=$_POST['language'];
$hobbies=$_POST['hobbies'];
$objective=$_POST['objective'];

$photo=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$photo);

$certificate=$_FILES['certificate']['name'];
move_uploaded_file($_FILES['certificate']['tmp_name'],"certificate/".$certificate);

$sql="INSERT INTO personal_info(photo,full_name,father_name,dob,gender,mobile,email,address,linkedin,github,college,course,branch,passing_year,percentage,technical_skills,soft_skills,project_title,technology,project_description,company,job_role,duration,experience,certificate_name,certificate,achievement,language,hobbies,objective)

VALUES('$photo','$name','$father','$dob','$gender','$mobile','$email','$address','$linkedin','$github','$college','$course','$branch','$passing_year','$percentage','$technical_skills','$soft_skills','$project_title','$technology','$project_description','$company','$job_role','$duration','$experience','$certificate_name','$certificate','$achievement','$language','$hobbies','$objective')";

if(mysqli_query($conn,$sql))
{
echo "<script>alert('Resume Created Successfully'); window.location='resume.php';</script>";
}
else
{
echo mysqli_error($conn);
}

}
?>

<!DOCTYPE html>
<html>

<head>

<title>Resume Builder</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eef4ff;
}



header{
width:100%;
height:90px;
background:#FEF8F8;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 70px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
position:sticky;
top:0;
z-index:1000;
}

.logo{
display:flex;
align-items:center;
}

.logo img{
width:60px;
margin-right:12px;
}

.logo h2{
color:#0F172A;
font-size:30px;
}

.logo p{
font-size:14px;
color:#666;
}

nav ul{
display:flex;
list-style:none;
}

nav ul li{
margin-left:30px;
}

nav ul li a{
text-decoration:none;
color:#0F172A;
font-weight:bold;
transition:.3s;
}

nav ul li a:hover{
color:#2563EB;
}


.logo{
font-size:30px;
font-weight:bold;
}

nav ul{
display:flex;
list-style:none;
}


.logo{
display:flex;
align-items:center;
}

.logo img{
width:60px;
margin-right:12px;
}

.logo h2{
color:#0F172A;
font-size:30px;
}

.logo p{
font-size:14px;
color:#666;
}

nav ul{
display:flex;
list-style:none;
}

nav ul li{
margin-left:30px;
}

nav ul li a{
text-decoration:none;
color:#0F172A;
font-weight:bold;
transition:.3s;
}

nav ul li a:hover{
color:#2563EB;
}

.container{
width:90%;
margin:40px auto;
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

h2{
text-align:center;
color:#0B3D91;
margin-bottom:25px;
}

.row{
display:flex;
gap:20px;
margin-bottom:20px;
}

.col{
width:50%;
}

label{
display:block;
font-weight:bold;
margin-bottom:8px;
}

input,
select,
textarea{
width:100%;
padding:12px;
border:1px solid #ccc;
border-radius:8px;
font-size:15px;
}

textarea{
height:90px;
resize:none;
}

.btn{
background:#0B3D91;
color:white;
padding:12px 30px;
border:none;
border-radius:8px;
cursor:pointer;
}

</style>





<div class="container">

<form method="post" enctype="multipart/form-data">

<h2>Personal Information</h2>

<div class="row">

<div class="col">
<label>Profile Photo</label>
<input type="file" name="photo" required>
</div>

<div class="col">
<label>Full Name</label>
<input type="text" name="name" required>
</div>

</div>

<div class="row">

<div class="col">
<label>Father's Name</label>
<input type="text" name="father">
</div>

<div class="col">
<label>Date of Birth</label>
<input type="date" name="dob">
</div>

</div>

<div class="row">

<div class="col">
<label>Gender</label>
<select name="gender">
<option>Male</option>
<option>Female</option>
<option>Other</option>
</select>
</div>

<div class="col">
<label>Mobile Number</label>
<input type="text" name="mobile">
</div>

</div>

<div class="row">

<div class="col">
<label>Email</label>
<input type="email" name="email">
</div>

<div class="col">
<label>LinkedIn Profile</label>
<input type="text" name="linkedin">
</div>

</div>

<div class="row">

<div class="col">
<label>GitHub Profile</label>
<input type="text" name="github">
</div>

<div class="col">
<label>Address</label>
<textarea name="address"></textarea>
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Education</h2>

<div class="row">

<div class="col">
<label>College Name</label>
<input type="text" name="college">
</div>

<div class="col">
<label>Course</label>
<input type="text" name="course">
</div>

</div>

<div class="row">

<div class="col">
<label>Branch</label>
<input type="text" name="branch">
</div>

<div class="col">
<label>Passing Year</label>
<input type="number" name="passing_year">
</div>

</div>

<div class="row">

<div class="col">
<label>Percentage / CGPA</label>
<input type="text" name="percentage">
</div>

<div class="col">
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Skills</h2>

<div class="row">

<div class="col">
<label>Technical Skills</label>
<textarea name="technical_skills"></textarea>
</div>

<div class="col">
<label>Soft Skills</label>
<textarea name="soft_skills"></textarea>
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Projects</h2>

<div class="row">

<div class="col">
<label>Project Title</label>
<input type="text" name="project_title">
</div>

<div class="col">
<label>Technology Used</label>
<input type="text" name="technology">
</div>

</div>

<div class="row">

<div class="col" style="width:100%;">
<label>Project Description</label>
<textarea name="project_description"></textarea>
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Experience / Internship</h2>

<div class="row">

<div class="col">
<label>Company Name</label>
<input type="text" name="company">
</div>

<div class="col">
<label>Job Role</label>
<input type="text" name="job_role">
</div>

</div>

<div class="row">

<div class="col">
<label>Duration</label>
<input type="text" name="duration" placeholder="Example: 3 Months">
</div>

<div class="col">
<label>Experience Description</label>
<textarea name="experience"></textarea>
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Certificates</h2>

<div class="row">

<div class="col">
<label>Certificate Name</label>
<input type="text" name="certificate_name">
</div>

<div class="col">
<label>Upload Certificate</label>
<input type="file" name="certificate">
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Achievements</h2>

<div class="row">

<div class="col" style="width:100%;">
<label>Achievements</label>
<textarea name="achievement"></textarea>
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Languages & Hobbies</h2>

<div class="row">

<div class="col">
<label>Languages Known</label>
<input type="text" name="language" placeholder="English, Marathi, Hindi">
</div>

<div class="col">
<label>Hobbies</label>
<input type="text" name="hobbies">
</div>

</div>

<hr><br>

<h2 style="color:#0B3D91;text-align:center;">Career Objective</h2>

<div class="row">

<div class="col" style="width:100%;">
<label>Career Objective</label>
<textarea name="objective"></textarea>
</div>

</div>

<br><br>

<center>

<button type="submit" name="submit" class="btn">
Generate Resume
</button>

</center>

</form>

</div>

</body>

</html>