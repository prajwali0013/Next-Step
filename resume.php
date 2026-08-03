<?php

include "connection.php";

$sql="SELECT * FROM personal_info ORDER BY id DESC LIMIT 1";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>

<html>

<head>

<title>Resume Preview</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eaf2ff;
padding:40px;
}

.resume{
width:900px;
margin:auto;
background:white;
padding:40px;
box-shadow:0 0 15px rgba(0,0,0,.2);
border-radius:10px;
}

.header{
display:flex;
justify-content:space-between;
align-items:center;
border-bottom:3px solid #0B3D91;
padding-bottom:20px;
}

.header img{
width:140px;
height:140px;
border-radius:50%;
border:4px solid #0B3D91;
}

.header h1{
color:#0B3D91;
margin-bottom:10px;
}

.section{
margin-top:30px;
}

.section h2{
background:#0B3D91;
color:white;
padding:10px;
margin-bottom:15px;
}

.section p{
margin:8px 0;
font-size:17px;
}

</style>

</head>

<body>

<div class="resume">

<div class="header">

<div>

<h1><?php echo $row['full_name']; ?></h1>

<p>Email : <?php echo $row['email']; ?></p>

<p>Mobile : <?php echo $row['mobile']; ?></p>

<p>Address : <?php echo $row['address']; ?></p>

</div>

<div>

<img src="image\prajwali.jpeg  "<?php echo $row['photo']; ?>" width="150" height="150" style="border-radius:50%; object-fit:cover;">
</div>

</div>

<div class="section">

<h2>Personal Information</h2>

<p><b>Father Name :</b> <?php echo $row['father_name']; ?></p>

<p><b>Date of Birth :</b> <?php echo $row['dob']; ?></p>

<p><b>Gender :</b> <?php echo $row['gender']; ?></p>

<p><b>LinkedIn :</b> <?php echo $row['linkedin']; ?></p>

<p><b>GitHub :</b> <?php echo $row['github']; ?></p>

</div>

<div class="section">

<h2>Education</h2>

<p><b>College :</b> <?php echo $row['college']; ?></p>

<p><b>Course :</b> <?php echo $row['course']; ?></p>

<p><b>Branch :</b> <?php echo $row['branch']; ?></p>

<p><b>Passing Year :</b> <?php echo $row['passing_year']; ?></p>

<p><b>Percentage :</b> <?php echo $row['percentage']; ?></p>

</div>

<div class="section">

<h2>Skills</h2>

<p><?php echo $row['technical_skills']; ?></p>

<p><?php echo $row['soft_skills']; ?></p>

</div>

<div class="section">

<h2>Projects</h2>

<p><b>Title :</b> <?php echo $row['project_title']; ?></p>

<p><b>Technology :</b> <?php echo $row['technology']; ?></p>

<p><?php echo $row['project_description']; ?></p>

</div>

<div class="section">

<h2>Experience</h2>

<p><b>Company :</b> <?php echo $row['company']; ?></p>

<p><b>Role :</b> <?php echo $row['job_role']; ?></p>

<p><b>Duration :</b> <?php echo $row['duration']; ?></p>

<p><?php echo $row['experience']; ?></p>

</div>

<div class="section">

<h2>Certificates</h2>

<p><?php echo $row['certificate_name']; ?></p>

</div>

<div class="section">

<h2>Achievements</h2>

<p><?php echo $row['achievement']; ?></p>

</div>

<div class="section">

<h2>Languages & Hobbies</h2>

<p><b>Languages :</b> <?php echo $row['language']; ?></p>

<p><b>Hobbies :</b> <?php echo $row['hobbies']; ?></p>

</div>

<div class="section">

<h2>Career Objective</h2>

<p><?php echo $row['objective']; ?></p>

</div>

</div>


<a href="download-resume.php">
<button class="btn">
Download Resume PDF
</button>
</a>
<a href="index.php"><button>Back</button></a>
</body>

</html>