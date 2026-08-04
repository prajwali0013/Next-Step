<!DOCTYPE html>
<html>
<head>

<title>Latest Jobs</title>

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
margin:40px auto;
}

.title{
text-align:center;
font-size:38px;
color:#0B3D91;
margin-bottom:40px;
}

.cards{
display:flex;
flex-wrap:wrap;
justify-content:center;
gap:25px;
}

.card{
width:330px;
background:white;
padding:25px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.3s;
}

.card:hover{
transform:translateY(-8px);
}

.card h2{
color:#0B3D91;
margin-bottom:15px;
}

.card p{
margin:10px 0;
font-size:16px;
}

.btn{
display:inline-block;
margin-top:15px;
padding:10px 25px;
background:#0B3D91;
color:white;
text-decoration:none;
border-radius:6px;
}

.btn:hover{
background:#1257d6;
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

<body>

<header>

<h1>Latest Jobs & Internships</h1>

</header>
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
<div class="container">

<h2 class="title">Top Company Openings</h2>

<div class="cards">

<div class="card">

<h2>Amazon</h2>

<p><b>Role :</b> Software Development Engineer</p>

<p><b>Location :</b> Bangalore</p>

<p><b>Qualification :</b> Diploma / B.E / B.Tech</p>

<p><b>Experience :</b> Freshers</p>

<p><b>Salary :</b> ₹6 - ₹12 LPA</p>

<a href="#" class="btn">Apply Now</a>

</div>

<div class="card">

<h2>Google</h2>

<p><b>Role :</b> Associate Software Engineer</p>

<p><b>Location :</b> Hyderabad</p>

<p><b>Qualification :</b> B.E / B.Tech</p>

<p><b>Experience :</b> Freshers</p>

<p><b>Salary :</b> ₹10 - ₹18 LPA</p>

<a href="#" class="btn">Apply Now</a>

</div>

<div class="card">

<h2>Microsoft</h2>

<p><b>Role :</b> Software Engineer</p>

<p><b>Location :</b> Noida</p>

<p><b>Qualification :</b> B.E / B.Tech</p>

<p><b>Experience :</b> Freshers</p>

<p><b>Salary :</b> ₹8 - ₹15 LPA</p>

<a href="#" class="btn">Apply Now</a>

</div>

<div class="card">

<h2>TCS</h2>

<p><b>Role :</b> Assistant System Engineer</p>

<p><b>Location :</b> Pune</p>

<p><b>Qualification :</b> Diploma / B.E</p>

<p><b>Experience :</b> Freshers</p>

<p><b>Salary :</b> ₹3.5 - ₹7 LPA</p>

<a href="#" class="btn">Apply Now</a>

</div>

<div class="card">

<h2>Infosys</h2>

<p><b>Role :</b> System Engineer</p>

<p><b>Location :</b> Mysore</p>

<p><b>Qualification :</b> Diploma / B.E</p>

<p><b>Experience :</b> Freshers</p>

<p><b>Salary :</b> ₹3.6 - ₹6.5 LPA</p>

<a href="#" class="btn">Apply Now</a>

</div>

<div class="card">

<h2>Wipro</h2>

<p><b>Role :</b> Project Engineer</p>

<p><b>Location :</b> Mumbai</p>

<p><b>Qualification :</b> Diploma / B.E</p>

<p><b>Experience :</b> Freshers</p>

<p><b>Salary :</b> ₹3.5 - ₹6 LPA</p>

<a href="#" class="btn">Apply Now</a>

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
</html>