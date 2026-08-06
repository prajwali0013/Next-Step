<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Microsoft Company | NEXT STEP</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
scroll-behavior:smooth;
}

body{
background:#f4f8fc;
color:#333;
padding-top:90px;
}

/*================ HEADER =================*/

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
box-shadow:0 5px 20px rgba(0,0,0,.4);

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
object-fit:cover;

}

.logo h2{

color:white;
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
color:white;
font-size:17px;
font-weight:600;
transition:.3s;
padding-bottom:5px;

}

nav ul li a:hover{

color:#3b82f6;
border-bottom:2px solid #3b82f6;

}

/*================ HERO =================*/

.hero{

height:92vh;

background:
linear-gradient(rgba(15,23,42,.75),rgba(15,23,42,.75)),
url("image/micosoft company.jpg");

background-size:cover;
background-position:center;
display:flex;
justify-content:center;
align-items:center;
text-align:center;
padding:20px;

}

.hero-content{

max-width:900px;
color:white;

}

.hero-content img{

width:130px;
height:130px;
background:white;
padding:20px;
border-radius:25px;
box-shadow:0 15px 35px rgba(0,0,0,.4);
margin-bottom:30px;

}

.hero-content h1{

font-size:65px;
margin-bottom:15px;

}

.hero-content span{

color:#4dabff;

}

.hero-content p{

font-size:22px;
line-height:38px;
margin-bottom:40px;

}

.hero-btn{

display:inline-block;
padding:16px 40px;
background:#0078D4;
color:white;
text-decoration:none;
border-radius:35px;
font-size:18px;
font-weight:bold;
margin:10px;
transition:.3s;

}

.hero-btn:hover{

background:#005A9E;
transform:translateY(-5px);

}

/*================ SECTION TITLE =================*/

.section-title{

text-align:center;
font-size:40px;
color:#0f4c81;
margin:80px 0 40px;

}
/*================ ABOUT =================*/

.about-container{
width:90%;
max-width:1200px;
margin:60px auto;
display:flex;
align-items:center;
justify-content:space-between;
gap:50px;
}

.about-text{
flex:1;
}

.about-text h3{
font-size:35px;
color:#0f4c81;
margin-bottom:20px;
}

.about-text p{
font-size:18px;
line-height:32px;
color:#555;
margin-bottom:15px;
}

.about-image{
flex:1;
text-align:center;
}

.about-image img{
width:320px;
background:#fff;
padding:30px;
border-radius:25px;
box-shadow:0 10px 25px rgba(0,0,0,.15);
}

/*================ FOUNDER =================*/

.founder-card{
width:90%;
max-width:1200px;
margin:60px auto;
display:flex;
align-items:center;
gap:40px;
background:#fff;
padding:40px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.12);
}

.founder-card img{
width:220px;
height:220px;
object-fit:cover;
border-radius:20px;
}

.founder-card h3{
color:#0f4c81;
font-size:30px;
margin-bottom:15px;
}

.founder-card p{
font-size:18px;
line-height:30px;
color:#555;
}

/*================ STATS =================*/

.stats{
width:90%;
max-width:1200px;
margin:60px auto;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.stat-card{
background:#fff;
padding:35px;
text-align:center;
border-radius:18px;
box-shadow:0 10px 25px rgba(0,0,0,.12);
transition:.3s;
}

.stat-card:hover{
transform:translateY(-10px);
background:#0f4c81;
color:#fff;
}

.stat-card h3{
font-size:42px;
margin-bottom:10px;
}

/*================ DETAILS =================*/

.details-grid{
width:90%;
max-width:1200px;
margin:60px auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.detail-card{
background:#fff;
padding:30px;
border-radius:18px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,.12);
transition:.3s;
}

.detail-card:hover{
background:#0078D4;
color:#fff;
transform:translateY(-10px);
}

.detail-card h3{
margin-bottom:15px;
font-size:22px;
}

/*================ SERVICES =================*/

.service-grid{
width:90%;
max-width:1200px;
margin:60px auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.service-card{
background:#fff;
padding:35px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.12);
transition:.3s;
text-align:center;
}

.service-card:hover{
background:#0f4c81;
color:#fff;
transform:translateY(-10px);
}

.service-card h3{
font-size:24px;
margin-bottom:15px;
}

/*================ SALARY TABLE =================*/

.salary-table{
width:90%;
max-width:1200px;
margin:60px auto;
overflow-x:auto;
}

.salary-table table{
width:100%;
border-collapse:collapse;
background:#fff;
box-shadow:0 10px 25px rgba(0,0,0,.12);
}

.salary-table th{
background:#0078D4;
color:#fff;
padding:18px;
}

.salary-table td{
padding:18px;
text-align:center;
border:1px solid #ddd;
}

.salary-table tr:nth-child(even){
background:#eef6ff;
}

/*================ INTERVIEW =================*/

.interview-section{
width:90%;
max-width:900px;
margin:80px auto;
background:#fff;
padding:50px;
border-radius:20px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,.12);
}

.interview-section p{
font-size:18px;
line-height:30px;
margin-bottom:25px;
}

/*================ RESPONSIVE =================*/

@media(max-width:992px){

.about-container,
.founder-card{
flex-direction:column;
text-align:center;
}

.stats{
grid-template-columns:repeat(2,1fr);
}

.details-grid,
.service-grid{
grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:768px){

.stats,
.details-grid,
.service-grid{
grid-template-columns:1fr;
}

.hero h1{
font-size:42px;
}

.hero p{
font-size:18px;
}

.about-image img{
width:220px;
}

.founder-card img{
width:180px;
height:180px;
}

}/*================ FOOTER =================*/

footer{

background:linear-gradient(135deg,#0f172a,#1e293b);

color:#fff;

padding:80px 8% 30px;

margin-top:80px;

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

color:#cbd5e1;

line-height:28px;

margin-bottom:12px;

}

.footer-container a{

display:block;

text-decoration:none;

color:#cbd5e1;

margin-bottom:12px;

transition:.3s;

}

.footer-container a:hover{

color:#60a5fa;

padding-left:8px;

}

.copy{

margin-top:35px;

padding-top:25px;

border-top:1px solid rgba(255,255,255,.2);

text-align:center;

color:#cbd5e1;

}

/*================ SCROLL BUTTON =================*/

#topBtn{

position:fixed;

right:30px;

bottom:30px;

width:55px;

height:55px;

background:#0078D4;

color:#fff;

border:none;

border-radius:50%;

font-size:22px;

cursor:pointer;

display:none;

box-shadow:0 10px 25px rgba(0,0,0,.3);

transition:.3s;

}

#topBtn:hover{

background:#005A9E;

transform:translateY(-5px);

}

/*================ RESPONSIVE =================*/

@media(max-width:768px){

header{

padding:15px 20px;

flex-direction:column;

height:auto;

}

nav ul{

flex-wrap:wrap;

justify-content:center;

margin-top:15px;

}

nav ul li{

margin:10px;

}

.hero h1{

font-size:42px;

}

.hero p{

font-size:18px;

line-height:30px;

}

.about-container,
.founder-card{

flex-direction:column;

text-align:center;

}

.stats,
.details-grid,
.service-grid{

grid-template-columns:1fr;

}

table{

display:block;

overflow-x:auto;

}

.footer-container{

grid-template-columns:1fr;

text-align:center;

}

}
</style>

</head>

<body>

<header>

<div class="logo">

<img src="image/logo.jpeg">

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

<!--================ HERO =================-->

<section class="hero">

<div class="hero-content">

<h1>Microsoft <span>Corporation</span></h1>

<p>

Explore Microsoft Company,
its history, products,
career opportunities,
salary packages,
hiring process and interview preparation.

</p>

<a href="#about" class="hero-btn">

Explore Company

</a>

<a href="interview_questions.php" class="hero-btn">

Interview Questions

</a>

</div>

</section><!--================ ABOUT MICROSOFT =================-->

<section id="about">

<h2 class="section-title">About Microsoft</h2>

<div class="about-container">

<div class="about-text">

<h3>Microsoft Corporation</h3>

<p>

Microsoft Corporation is one of the world's largest technology
companies. It was founded on <b>April 4, 1975</b> by
<b>Bill Gates</b> and <b>Paul Allen</b>.

</p>

<p>

Microsoft develops software, cloud services,
artificial intelligence solutions, gaming products,
business applications and enterprise technologies.

</p>

<p>

Today Microsoft serves millions of businesses and
billions of users worldwide through Windows,
Microsoft 365, Azure, GitHub and Copilot AI.

</p>

</div>

<div class="about-image">

<img src="image/microsoft about.jpg" alt="Microsoft">

</div>

</div>

</section>

<!--================ FOUNDER =================-->

<section>

<h2 class="section-title">Founder & CEO</h2>

<div class="founder-card">

<img src="image/bill gates.jpg" alt="Bill Gates">

<div>

<h3>Bill Gates</h3>

<p>

Co-Founder of Microsoft Corporation.

Along with Paul Allen, Bill Gates founded Microsoft
in 1975 and revolutionized the software industry.

</p>

<br>

<h3>Current CEO</h3>

<p>

<b>Satya Nadella</b>

has been Microsoft's CEO since 2014 and has transformed
the company into a global leader in Cloud Computing
and Artificial Intelligence.

</p>

</div>

</div>

</section>

<!--================ COMPANY STATS =================-->

<section>

<h2 class="section-title">Microsoft at a Glance</h2>

<div class="stats">

<div class="stat-card">

<h3>1975</h3>

<p>Founded</p>

</div>

<div class="stat-card">

<h3>220K+</h3>

<p>Employees</p>

</div>

<div class="stat-card">

<h3>190+</h3>

<p>Countries</p>

</div>

<div class="stat-card">

<h3>$3T+</h3>

<p>Market Value</p>

</div>

</div>

</section>

<!--================ COMPANY DETAILS =================-->

<section>

<h2 class="section-title">Company Details</h2>

<div class="details-grid">

<div class="detail-card">

<h3> Established</h3>

<p>April 4, 1975</p>

</div>

<div class="detail-card">

<h3> Headquarters</h3>

<p>Redmond, Washington, USA</p>

</div>

<div class="detail-card">

<h3>CEO</h3>

<p>Satya Nadella</p>

</div>

<div class="detail-card">

<h3> Industry</h3>

<p>Technology & Software</p>

</div>

<div class="detail-card">

<h3> Employees</h3>

<p>220,000+ Worldwide</p>

</div>

<div class="detail-card">

<h3> Official Website</h3>

<p>www.microsoft.com</p>

</div>

</div>

</section>

<!--================ PRODUCTS =================-->

<section>

<h2 class="section-title">

Microsoft Products & Services

</h2>

<div class="service-grid">

<div class="service-card">

<h3> Windows</h3>

<p>World's most popular operating system.</p>

</div>

<div class="service-card">

<h3> Azure</h3>

<p>Cloud computing platform for businesses.</p>

</div>

<div class="service-card">

<h3> Microsoft 365</h3>

<p>Word, Excel, PowerPoint and Outlook.</p>

</div>

<div class="service-card">

<h3> Copilot AI</h3>

<p>AI assistant for productivity and coding.</p>

</div>

<div class="service-card">

<h3> Xbox</h3>

<p>Gaming consoles and entertainment services.</p>

</div>

<div class="service-card">

<h3> GitHub</h3>

<p>World's largest developer platform owned by Microsoft.</p>

</div>

</div>

</section><!--================ GLOBAL OFFICES =================-->

<section>

<h2 class="section-title">Global Offices</h2>

<div class="service-grid">

<div class="service-card">
<h3>🇺🇸 United States</h3>
<p>Redmond, Seattle, New York</p>
</div>

<div class="service-card">
<h3>🇮🇳 India</h3>
<p>Hyderabad, Bengaluru, Noida</p>
</div>

<div class="service-card">
<h3>🇬🇧 United Kingdom</h3>
<p>London</p>
</div>

<div class="service-card">
<h3>🇨🇦 Canada</h3>
<p>Toronto, Vancouver</p>
</div>

<div class="service-card">
<h3>🇦🇺 Australia</h3>
<p>Sydney, Melbourne</p>
</div>

<div class="service-card">
<h3>🇯🇵 Japan</h3>
<p>Tokyo</p>
</div>

</div>

</section>

<!--================ SALARY TABLE =================-->

<section>

<h2 class="section-title">Job Profile Wise Salary</h2>

<div class="salary-table">

<table>

<tr>

<th>Job Profile</th>

<th>Experience</th>

<th>Average Salary</th>

</tr>

<tr>

<td>Software Engineer</td>

<td>0-2 Years</td>

<td>₹8 - ₹16 LPA</td>

</tr>

<tr>

<td>Web Developer</td>

<td>0-2 Years</td>

<td>₹6 - ₹12 LPA</td>

</tr>

<tr>

<td>Data Analyst</td>

<td>1-3 Years</td>

<td>₹7 - ₹15 LPA</td>

</tr>

<tr>

<td>Cloud Engineer</td>

<td>2-4 Years</td>

<td>₹10 - ₹22 LPA</td>

</tr>

<tr>

<td>AI Engineer</td>

<td>2-5 Years</td>

<td>₹12 - ₹28 LPA</td>

</tr>

<tr>

<td>Cyber Security Engineer</td>

<td>2-5 Years</td>

<td>₹10 - ₹24 LPA</td>

</tr>

</table>

</div>

</section>


<!--================ INTERVIEW =================-->

<section class="interview-section">

<h2 class="section-title">

Top Microsoft Interview Questions

</h2>

<p>

Prepare yourself with the most frequently asked
Microsoft interview questions.

</p>

<br>

<a href="interview_questions.php" class="hero-btn">

View Interview Questions

</a>

</section>

<!--================ BACK BUTTON =================-->

<div style="text-align:center;margin:60px 0;">

<a href="company.php" class="hero-btn">

← Back to Companies

</a>

</div><!--================ FOOTER =================-->

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

<p><i class="fa-solid fa-envelope"></i> nextstep@gmail.com</p>

<p><i class="fa-solid fa-location-dot"></i> Kolhapur, Maharashtra</p>

<p><i class="fa-solid fa-phone"></i> +91 7499794215</p>

</div>


</div>

<div class="copy">

Copyright © 2026 NEXT STEP | All Rights Reserved.

</div>

</footer>

<!--================ SCROLL TO TOP =================-->

<button id="topBtn">

<i class="fa-solid fa-arrow-up"></i>

</button>

<script>

const topBtn=document.getElementById("topBtn");

window.onscroll=function(){

if(document.documentElement.scrollTop>300){

topBtn.style.display="block";

}else{

topBtn.style.display="none";

}

}

topBtn.onclick=function(){

window.scrollTo({

top:0,

behavior:"smooth"

});

}

</script>

</body>
</html>