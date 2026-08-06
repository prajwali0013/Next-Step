<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Top Hiring Companies | Next Step</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eef4ff;
padding-top:90px;
}

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
box-shadow:0 5px 20px rgba(0,0,0,.4);
z-index:9999;
}

.logo{
display:flex;
align-items:center;
}

.logo img{
width:75px;
height:75px;
border-radius:50%;
margin-right:15px;
}

.logo h2{
color:#fff;
font-size:32px;
}

.logo p{
color:#d1d5db;
font-size:14px;
}

nav ul{
display:flex;
list-style:none;
}

nav ul li{
margin-left:35px;
}

nav ul li a{
text-decoration:none;
color:#fff;
font-size:17px;
font-weight:bold;
transition:.3s;
padding-bottom:5px;
}

nav ul li a:hover{
color:#3b82f6;
border-bottom:2px solid #3b82f6;
}

.login-btn{

padding:11px 22px;
background:#2ea8ff;
color:white;
text-decoration:none;
border-radius:30px;
font-weight:bold;
transition:.3s;

}

.login-btn:hover{

background:#0057b8;

}

/* ================= HERO ================= */

.hero{

height:100vh;

background:
linear-gradient(rgba(0,32,80,0.60),
rgba(0,55,140,0.60)),
url("image/top company.png");

background-size:cover;
background-position:center;
background-repeat:no-repeat;

display:flex;
justify-content:center;
align-items:center;
text-align:center;

}

.hero h1{

font-size:65px;
margin-bottom:20px;
line-height:80px;

}

.hero h1 span{

color:#37b6ff;

}

.hero p{

font-size:21px;
line-height:35px;
margin-bottom:40px;

}

.hero-buttons{

display:flex;
justify-content:center;
gap:20px;
flex-wrap:wrap;

}

.btn1{

padding:15px 35px;
background:#2ea8ff;
color:white;
text-decoration:none;
border-radius:35px;
font-size:18px;
font-weight:bold;
transition:.4s;

}

.btn1:hover{

background:#0057b8;

}

.btn2{

padding:15px 35px;
border:2px solid white;
color:white;
text-decoration:none;
border-radius:35px;
font-size:18px;
font-weight:bold;
transition:.4s;

}

.btn2:hover{

background:white;
color:#003b73;

}

/* ================= RESPONSIVE ================= */

@media(max-width:900px){

nav{

padding:15px 5%;

}

nav ul{

display:none;

}

.hero h1{

font-size:45px;
line-height:55px;

}

.hero p{

font-size:18px;

}

}
/* ================= STATS ================= */

.stats{

width:90%;
max-width:1200px;
margin:-70px auto 70px;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
position:relative;
z-index:5;

}

.stat-card{

background:#fff;
padding:30px;
border-radius:20px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,.15);
transition:.4s;

}

.stat-card:hover{

transform:translateY(-10px);

}

.stat-card i{

font-size:40px;
color:#0074cc;
margin-bottom:15px;

}

.stat-card h2{

font-size:34px;
color:#003b73;
margin-bottom:10px;

}

.stat-card p{

color:#555;

}

/* ================= COMPANY ================= */

.company-section{

width:90%;
max-width:1200px;
margin:auto;
padding-bottom:80px;

}

.title-small{

display:block;
text-align:center;
color:#0074cc;
font-weight:bold;
margin-bottom:15px;

}

.company-section h1{

text-align:center;
font-size:45px;
color:#003b73;
margin-bottom:45px;

}

.company-container{

display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;

}

.company-card{

background:#fff;
padding:30px;
border-radius:20px;
text-align:center;
box-shadow:0 8px 20px rgba(0,0,0,.12);
transition:.4s;

}

.company-card:hover{

transform:translateY(-12px);
box-shadow:0 15px 35px rgba(0,0,0,.2);

}

.company-card img{

width:90px;
height:90px;
object-fit:contain;
margin-bottom:20px;

}

.company-card h3{

color:#003b73;
margin-bottom:15px;
font-size:24px;

}

.company-card p{

color:#666;
font-size:15px;
line-height:24px;
margin-bottom:20px;

}

.company-card a{

display:inline-block;
padding:12px 28px;
background:#0074cc;
color:#fff;
text-decoration:none;
border-radius:30px;
font-weight:bold;
transition:.3s;

}

.company-card a:hover{

background:#003b73;

}

/* ================= MOBILE ================= */

@media(max-width:992px){

.stats,
.company-container{

grid-template-columns:repeat(2,1fr);

}

}

@media(max-width:600px){

.stats,
.company-container{

grid-template-columns:1fr;

}

.company-section h1{

font-size:34px;

}

}/*================ FOOTER ================*/
footer{
background:linear-gradient(135deg,#131C2F,#1E3A8A,#0F172A);
color:#fff;
padding:60px 8% 25px;
margin-top:60px;
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
color:#d1d5db;
line-height:28px;
}

.footer-container a{
display:block;
text-decoration:none;
color:#d1d5db;
margin-bottom:10px;
transition:.3s;
}

.footer-container a:hover{
color:#60a5fa;
padding-left:8px;
}

footer hr{
margin:30px 0 20px;
border:1px solid rgba(255,255,255,.15);
}

.copy{
text-align:center;
color:#cbd5e1;
font-size:15px;
}


.social{

margin-top:20px;

}

.social a{

display:inline-flex;
justify-content:center;
align-items:center;
width:45px;
height:45px;
background:#0b2d56;
border-radius:50%;
margin-right:10px;
font-size:18px;
color:white;
transition:.3s;

}

.social a:hover{

background:#37b6ff;
transform:translateY(-6px);

}

.copyright{

background:#011124;
text-align:center;
padding:20px;
font-size:16px;

}

/*=============== Scroll Button ===============*/

#topBtn{

position:fixed;
right:25px;
bottom:25px;
width:55px;
height:55px;
border:none;
border-radius:50%;
background:#0074cc;
color:white;
font-size:22px;
cursor:pointer;
display:none;
box-shadow:0 10px 20px rgba(0,0,0,.25);
transition:.3s;

}

#topBtn:hover{

background:#003b73;
transform:scale(1.1);

}

/*=============== Responsive ===============*/

@media(max-width:992px){

.footer-container{

grid-template-columns:repeat(2,1fr);

}

}

@media(max-width:600px){

.footer-container{

grid-template-columns:1fr;

}

.footer-box{

text-align:center;

}

.social{

display:flex;
justify-content:center;

}

}

</style>

</head>

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

<!-- HERO -->

<section class="hero">

<div class="hero-content">

<div class="tag">

⭐ Explore • Learn • Grow

</div>

<h1>

Top Hiring

<span>Companies</span>

</h1>

<p>

Explore company profiles, job roles,
salary packages, interview questions,
placement opportunities and career growth
with India's top IT companies.

</p>

<div class="hero-buttons">

<a href="#companies" class="btn1">

Explore Companies

</a>


</div>

</div>

</section>
<!-- ================== STATS SECTION ================== -->

<section class="stats">

    <div class="stat-card">
        <i class="fa-solid fa-building"></i>
        <h2>200+</h2>
        <p>Top Companies</p>
    </div>

    <div class="stat-card">
        <i class="fa-solid fa-briefcase"></i>
        <h2>1000+</h2>
        <p>Job Opportunities</p>
    </div>

    <div class="stat-card">
        <i class="fa-solid fa-users"></i>
        <h2>50K+</h2>
        <p>Students Placed</p>
    </div>

    <div class="stat-card">
        <i class="fa-solid fa-star"></i>
        <h2>4.8/5</h2>
        <p>Student Rating</p>
    </div>

</section>


<!-- ================== COMPANY SECTION ================== -->

<section class="company-section" id="companies">

    <span class="title-small">EXPLORE THE BEST</span>

    <h1>Explore Top 8 Companies</h1>

    <div class="company-container">

        <div class="company-card">

            <img src="image/Google.jpg">

            <h3>Google</h3>

            <p>Explore Google history, jobs, salary, branches and interview questions.</p>

            <a href="google.php">View Details</a>

        </div>

        <div class="company-card">

            <img src="image/Microsoft.png">

            <h3>Microsoft</h3>

            <p>Learn about Microsoft careers, salary packages and opportunities.</p>

            <a href="microsoft.php">View Details</a>

        </div>

        <div class="company-card">

            <img src="image/Amazon.png">

            <h3>Amazon</h3>

            <p>Explore Amazon jobs, salary and career opportunities.</p>

            <a href="amazon.php">View Details</a>

        </div>

        <div class="company-card">

            <img src="image/TCS.jpg">

            <h3>TCS</h3>

            <p>Know about TCS jobs, salary, branches and career growth.</p>

            <a href="tcs.php">View Details</a>

        </div>

        <div class="company-card">

            <img src="image/infosys.jpg">

            <h3>Infosys</h3>

            <p>Explore Infosys job profiles, salaries and career opportunities.</p>

            <a href="infosys.php">View Details</a>

        </div>

        <div class="company-card">

            <img src="image/Wipro.jpg">

            <h3>Wipro</h3>

            <p>Learn about Wipro careers, salary and interview process.</p>

            <a href="wipro.php">View Details</a>

        </div>

        <div class="company-card">

            <img src="https://cdn.simpleicons.org/cognizant">

            <h3>Cognizant</h3>

            <p>Explore Cognizant jobs, career and interview information.</p>

            <a href="cognizant.php">View Details</a>

        </div>

        <div class="company-card">

            <img src="image/Accenture.png">

            <h3>Accenture</h3>

            <p>Know about Accenture jobs, salary and career opportunities.</p>

            <a href="accenture.php">View Details</a>

        </div>

    </div>

</section<!-- ================= FOOTER ================= -->

<footer>

<div class="footer-container">

<div>

<h2>NEXT STEP</h2>

<p>Your Journey to a Successful Career Starts Here.</p>

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