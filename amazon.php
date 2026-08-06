<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Amazon Company | NEXT STEP</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

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
overflow-x:hidden;
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

width:70px;
height:70px;
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

}

nav ul li a:hover{

color:#38bdf8;

}

body{

padding-top:90px;

}

/*================ HERO =================*/

.hero{

height:90vh;

background:
linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65)),
url("image/amazon company.jpg");

background-size:cover;
background-position:center;

display:flex;
justify-content:center;
align-items:center;
text-align:center;
padding:20px;

}

.hero-content{

max-width:950px;

}

.hero-logo{

width:140px;
height:140px;
background:#fff;
padding:20px;
border-radius:30px;
margin-bottom:30px;
box-shadow:0 15px 40px rgba(0,0,0,.3);

}

.hero h1{

font-size:72px;
color:#fff;
margin-bottom:20px;

}

.hero h1 span{

color:#ff9900;

}

.hero p{

font-size:24px;
line-height:40px;
color:#f8fafc;
margin-bottom:35px;

}

.hero-btn{

display:inline-block;
padding:18px 45px;
background:#ff9900;
color:#fff;
text-decoration:none;
font-size:20px;
font-weight:bold;
border-radius:40px;
transition:.3s;

}

.hero-btn:hover{

background:#e68a00;
transform:translateY(-5px);

}/*================ SECTION TITLE =================*/

.section-title{
text-align:center;
font-size:40px;
color:#232f3e;
margin:70px 0 40px;
font-weight:bold;
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
font-size:34px;
color:#ff9900;
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
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.15);
}

/*================ FOUNDER =================*/

.founder-card{
width:90%;
max-width:1200px;
margin:70px auto;
display:flex;
align-items:center;
gap:40px;
background:#fff;
padding:40px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.founder-card img{
width:220px;
height:220px;
object-fit:cover;
border-radius:20px;
}

.founder-card h3{
font-size:30px;
color:#232f3e;
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
background:#ff9900;
color:#fff;
transform:translateY(-10px);
}

.stat-card h3{
font-size:40px;
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
text-align:center;
border-radius:18px;
box-shadow:0 10px 25px rgba(0,0,0,.12);
transition:.3s;
}

.detail-card:hover{
background:#232f3e;
color:#fff;
transform:translateY(-10px);
}

.detail-card h3{
margin-bottom:15px;
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
text-align:center;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.12);
transition:.3s;
}

.service-card:hover{
background:#ff9900;
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
margin:70px auto;
overflow-x:auto;
}

.salary-table table{
width:100%;
border-collapse:collapse;
background:#fff;
box-shadow:0 10px 25px rgba(0,0,0,.12);
}

.salary-table th{
background:#232f3e;
color:#fff;
padding:18px;
}

.salary-table td{
padding:18px;
text-align:center;
border:1px solid #ddd;
}

.salary-table tr:nth-child(even){
background:#f5f5f5;
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
margin:20px 0;
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

.about-image img{
width:220px;
}

.founder-card img{
width:180px;
height:180px;
}

table{
display:block;
overflow-x:auto;
}

}
/*================ FOOTER =================*/

footer{

background:linear-gradient(135deg,#0f172a,#1e293b);

padding:80px 8% 30px;

color:#fff;

margin-top:80px;

}

.footer-container{

display:grid;

grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

gap:45px;

}

.footer-container h2,
.footer-container h3{

margin-bottom:20px;

}

.footer-container p{

color:#cbd5e1;

line-height:28px;

margin-bottom:10px;

}

.footer-container a{

display:block;

text-decoration:none;

color:#cbd5e1;

margin-bottom:12px;

transition:.3s;

}

.footer-container a:hover{

color:#ff9900;

padding-left:8px;

}

.copy{

margin-top:35px;

padding-top:25px;

border-top:1px solid rgba(255,255,255,.15);

text-align:center;

color:#cbd5e1;

}

/*================ TOP BUTTON =================*/

#topBtn{

position:fixed;

bottom:30px;

right:30px;

width:55px;

height:55px;

border:none;

border-radius:50%;

background:#ff9900;

color:#fff;

font-size:22px;

cursor:pointer;

display:none;

transition:.3s;

box-shadow:0 10px 25px rgba(0,0,0,.3);

}

#topBtn:hover{

background:#e68a00;

transform:translateY(-5px);

}

/*================ RESPONSIVE =================*/

@media(max-width:768px){

header{

flex-direction:column;

height:auto;

padding:20px;

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

.footer-container{

grid-template-columns:1fr;

text-align:center;

}

table{

display:block;

overflow-x:auto;

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

<section class="hero">

<div class="hero-content">


<h1>Amazon <span>Company</span></h1>

<p>

Explore Amazon Company, its history, services,
career opportunities, salary packages,
global offices and interview preparation.

</p>

<a href="#about" class="hero-btn">

Explore Amazon

</a>

</div>

</section><!--================ ABOUT AMAZON =================-->

<section id="about" class="about-container">

<div class="about-text">

<h3>About Amazon</h3>

<p>

Amazon is one of the world's largest multinational
technology companies specializing in e-commerce,
cloud computing, digital streaming and artificial
intelligence.

</p>

<p>

Founded in 1994 by Jeff Bezos, Amazon started as
an online bookstore and has grown into a global
technology leader serving millions of customers
across the world.

</p>

<p>

Amazon provides innovative services including
Amazon Web Services (AWS), Prime Video,
Alexa, Kindle, Logistics and AI-powered solutions.

</p>

</div>

<div class="about-image">

<img src="image/amazon logo.jpg" alt="Amazon Logo">

</div>

</section>

<!--================ FOUNDER =================-->

<section class="founder-card">

<img src="image/Jeff Bezos.jpg" alt="Jeff Bezos">

<div>

<h3>Founder - Jeff Bezos</h3>

<p>

Jeff Bezos founded Amazon on July 5, 1994.
His vision transformed Amazon from a small
online bookstore into one of the world's
largest technology and e-commerce companies.

</p>

<p>

Under his leadership Amazon became a leader
in Cloud Computing (AWS), Artificial Intelligence,
Digital Streaming and Smart Devices.

</p>

</div>

</section>

<!--================ COMPANY STATS =================-->

<section class="stats">

<div class="stat-card">

<h3>1994</h3>

<p>Founded</p>

</div>

<div class="stat-card">

<h3>1.5M+</h3>

<p>Employees</p>

</div>

<div class="stat-card">

<h3>200+</h3>

<p>Countries & Regions</p>

</div>

<div class="stat-card">

<h3>AWS</h3>

<p>World's Leading Cloud Platform</p>

</div>

</section>

<!--================ COMPANY DETAILS =================-->

<section class="details-grid">

<div class="detail-card">

<h3> Established</h3>

<p>July 5, 1994</p>

</div>

<div class="detail-card">

<h3> Headquarters</h3>

<p>Seattle, Washington, USA</p>

</div>

<div class="detail-card">

<h3> CEO</h3>

<p>Andy Jassy</p>

</div>

<div class="detail-card">

<h3> Employees</h3>

<p>1.5 Million+ Worldwide</p>

</div>

<div class="detail-card">

<h3> Revenue</h3>

<p>One of the World's Largest Companies</p>

</div>

<div class="detail-card">

<h3> Website</h3>

<p>www.amazon.com</p>

</div>

</section>

<!--================ PRODUCTS & SERVICES =================-->

<section class="service-grid">

<div class="service-card">

<h3> Amazon Shopping</h3>

<p>

World's largest online shopping platform.

</p>

</div>

<div class="service-card">

<h3> Amazon Web Services</h3>

<p>

Leading cloud computing platform used globally.

</p>

</div>

<div class="service-card">

<h3> Prime Video</h3>

<p>

Online video streaming platform.

</p>

</div>

<div class="service-card">

<h3> Logistics</h3>

<p>

Fast delivery and supply chain services.

</p>

</div>

<div class="service-card">

<h3> Alexa AI</h3>

<p>

Smart voice assistant powered by Artificial Intelligence.

</p>

</div>

<div class="service-card">

<h3>📚 Kindle</h3>

<p>

Digital books and e-reader ecosystem.

</p>

</div>

</section><!--================ GLOBAL OFFICES =================-->

<section class="info-section">

<h2 class="section-title"> Global Offices</h2>

<div class="details-grid">

<div class="detail-card"><h3>🇺🇸 USA</h3><p>Seattle (Headquarters), New York, California</p></div>

<div class="detail-card"><h3>🇮🇳 India</h3><p>Hyderabad, Bengaluru, Chennai, Pune, Mumbai</p></div>

<div class="detail-card"><h3>🇬🇧 UK</h3><p>London</p></div>

<div class="detail-card"><h3>🇨🇦 Canada</h3><p>Toronto & Vancouver</p></div>

<div class="detail-card"><h3>🇩🇪 Germany</h3><p>Berlin & Munich</p></div>

<div class="detail-card"><h3>🇯🇵 Japan</h3><p>Tokyo</p></div>

</div>

</section>

<!--================ SALARY TABLE =================-->

<section class="salary-table">

<h2 class="section-title"> Job Profile Wise Salary</h2>

<table>

<tr>

<th>Job Profile</th>

<th>Experience</th>

<th>Average Salary</th>

</tr>

<tr>

<td>Software Development Engineer</td>

<td>0–2 Years</td>

<td>₹12 – ₹22 LPA</td>

</tr>

<tr>

<td>Web Developer</td>

<td>0–2 Years</td>

<td>₹6 – ₹12 LPA</td>

</tr>

<tr>

<td>Data Analyst</td>

<td>0–2 Years</td>

<td>₹7 – ₹14 LPA</td>

</tr>

<tr>

<td>Cloud Engineer (AWS)</td>

<td>1–3 Years</td>

<td>₹10 – ₹20 LPA</td>

</tr>

<tr>

<td>Data Scientist</td>

<td>1–3 Years</td>

<td>₹12 – ₹25 LPA</td>

</tr>

<tr>

<td>DevOps Engineer</td>

<td>1–3 Years</td>

<td>₹10 – ₹18 LPA</td>

</tr>

</table>

</section>

<!--================ INTERVIEW =================-->

<section class="interview-section">

<h2> Frequently Asked Interview Questions</h2>

<p>

Prepare for Amazon interviews with our
Top 50 Important Interview Questions and placement preparation.

</p>

<a href="interview_questions.php" class="hero-btn">

View Top 50 Interview Questions →

</a>

</section>

<!--================ BACK BUTTON =================-->

<div class="back" style="text-align:center;margin:60px 0;">

<a href="company.php" class="hero-btn">

← Back to All Companies

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

<div>

<h3>Follow Us</h3>

<a href="#"><i class="fab fa-facebook"></i> Facebook</a>

<a href="#"><i class="fab fa-instagram"></i> Instagram</a>

<a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>

<a href="#"><i class="fab fa-youtube"></i> YouTube</a>

</div>

</div>

<div class="copy">

Copyright © 2026 NEXT STEP |
All Rights Reserved.

</div>

</footer>

<!--================ TOP BUTTON =================-->

<button id="topBtn">

<i class="fa-solid fa-arrow-up"></i>

</button>

<script>

let topBtn=document.getElementById("topBtn");

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