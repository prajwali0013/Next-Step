<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Wipro Company | NEXT STEP</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:"Segoe UI",sans-serif;
scroll-behavior:smooth;
}

body{
background:#f4f8fc;
padding-top:90px;
color:#333;
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
object-fit:cover;
}

.logo h2{
color:#fff;
font-size:30px;
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
font-weight:600;
transition:.3s;
padding-bottom:5px;
}

nav ul li a:hover{
color:#6f42c1;
border-bottom:2px solid #6f42c1;
}

/*================ HERO =================*/

.hero{
height:90vh;
background:
linear-gradient(rgba(40,20,90,.75),
rgba(40,20,90,.75)),
url("image/wipro company.jpg");

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
color:#fff;
}

.hero img{
width:120px;
height:120px;
background:white;
padding:20px;
border-radius:50%;
margin-bottom:25px;
box-shadow:0 15px 40px rgba(0,0,0,.4);
}

.hero h1{
font-size:65px;
margin-bottom:15px;
}

.hero h1 span{
color:#b983ff;
}

.hero p{
font-size:22px;
line-height:38px;
margin-bottom:35px;
}

.hero-btn{
display:inline-block;
padding:16px 42px;
background:#6f42c1;
color:white;
text-decoration:none;
border-radius:40px;
font-size:18px;
font-weight:bold;
transition:.3s;
margin:10px;
}

.hero-btn:hover{
background:#4b2d87;
transform:translateY(-5px);
}

/*================ SECTION TITLE =================*/

.section-title{
font-size:40px;
color:#4b2d87;
text-align:center;
margin:80px 0 40px;
}

/*================ ABOUT =================*/

.about-container{
width:90%;
max-width:1200px;
margin:auto;
display:grid;
grid-template-columns:1fr 2fr;
gap:50px;
align-items:center;
}

.about-image img{
width:260px;
display:block;
margin:auto;
}

.about-content{
background:white;
padding:40px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.1);
}

.about-content h3{
font-size:35px;
color:#4b2d87;
margin-bottom:20px;
}

.about-content p{
line-height:34px;
font-size:18px;
margin-bottom:18px;
}

/*================ FOUNDER =================*/

.founder{
width:90%;
max-width:1200px;
margin:80px auto;
}

.founder-card{
display:flex;
gap:35px;
align-items:center;
background:white;
padding:35px;
border-radius:20px;
box-shadow:0 10px 25px rgba(0,0,0,.1);
}

.founder-card img{
width:220px;
height:220px;
border-radius:50%;
object-fit:cover;
}

.founder-card h3{
font-size:34px;
color:#4b2d87;
}

.founder-card h4{
color:#6f42c1;
margin:12px 0;
}

.founder-card p{
line-height:32px;
}
/*================ STATS =================*/

.stats{
width:90%;
max-width:1200px;
margin:70px auto;
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.stat-box{
background:#4b2d87;
color:white;
padding:35px;
text-align:center;
border-radius:20px;
transition:.3s;
}

.stat-box:hover{
transform:translateY(-10px);
}

.stat-box h2{
font-size:42px;
}

/*================ DETAILS =================*/

.details{
width:90%;
max-width:1200px;
margin:80px auto;
}

.details-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.detail-card{
background:white;
padding:30px;
border-radius:20px;
box-shadow:0 8px 20px rgba(0,0,0,.1);
transition:.3s;
}

.detail-card:hover{
transform:translateY(-8px);
}

.detail-card h3{
color:#4b2d87;
margin-bottom:12px;
}

/*================ SERVICES =================*/

.services{
width:90%;
max-width:1200px;
margin:80px auto;
}

.service-grid{
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.service-card{
background:white;
padding:35px;
text-align:center;
border-radius:20px;
box-shadow:0 8px 20px rgba(0,0,0,.1);
transition:.3s;
}

.service-card:hover{
background:#4b2d87;
color:white;
transform:translateY(-10px);
}

.service-card i{
font-size:45px;
color:#6f42c1;
margin-bottom:18px;
}

.service-card:hover i{
color:white;
}

/*================ BRANCHES =================*/

.branches{
width:90%;
max-width:1200px;
margin:80px auto;
}

.branch-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.branch-grid div{
background:white;
padding:25px;
text-align:center;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.1);
font-size:18px;
font-weight:bold;
transition:.3s;
}

.branch-grid div:hover{
background:#4b2d87;
color:white;
transform:translateY(-8px);
}

/*================ SALARY =================*/

.salary{
width:90%;
max-width:1200px;
margin:80px auto;
}

.salary table{
width:100%;
border-collapse:collapse;
background:white;
box-shadow:0 10px 25px rgba(0,0,0,.1);
}

.salary th{
background:#4b2d87;
color:white;
padding:18px;
}

.salary td{
padding:16px;
border:1px solid #ddd;
text-align:center;
}

.salary tr:nth-child(even){
background:#f3efff;
}
/*================ INTERVIEW =================*/

.interview{
width:90%;
max-width:1200px;
margin:80px auto;
text-align:center;
}

.interview p{
font-size:20px;
line-height:35px;
}

/*================ FOOTER =================*/

footer{
background:linear-gradient(135deg,#0f172a,#1e293b);
color:white;
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
line-height:30px;
margin-bottom:12px;
}

.footer-container a{
display:block;
color:#cbd5e1;
text-decoration:none;
margin-bottom:12px;
transition:.3s;
}

.footer-container a:hover{
color:#b983ff;
padding-left:8px;
}

.copy{
border-top:1px solid rgba(255,255,255,.2);
margin-top:35px;
padding-top:25px;
text-align:center;
color:#cbd5e1;
}

/*================ SCROLL BUTTON =================*/

#topBtn{
position:fixed;
bottom:25px;
right:25px;
width:55px;
height:55px;
background:#4b2d87;
color:white;
border:none;
border-radius:50%;
font-size:22px;
cursor:pointer;
display:none;
box-shadow:0 8px 20px rgba(0,0,0,.3);
transition:.3s;
}

#topBtn:hover{
background:#6f42c1;
transform:translateY(-5px);
}

/*================ MOBILE =================*/

@media(max-width:768px){

header{
flex-direction:column;
height:auto;
padding:20px;
}

nav ul{
flex-direction:column;
text-align:center;
}

.about-container,
.founder-card{
display:flex;
flex-direction:column;
}

.stats,
.details-grid,
.service-grid,
.branch-grid,
.footer-container{
grid-template-columns:1fr;
}

.salary table{
display:block;
overflow-x:auto;
}

.hero h1{
font-size:42px;
}

}

</style>

</head>

<body>

<!--================ HEADER =================-->

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



<h1>Wipro <span>Company</span></h1>

<p>

Explore Wipro company profile,
history, salary packages,
hiring process, career opportunities
and interview questions.

</p>

<a href="#about" class="hero-btn">

Explore Company

</a>

<a href="interview_questions.php" class="hero-btn">

Interview Questions

</a>

</div>

</section>
<!--================ ABOUT WIPRO =================-->

<section id="about">

<h2 class="section-title">About Wipro</h2>

<div class="about-container">

<div class="about-image">

<img src="image/Wipro company logo.webp" alt="Wipro Logo">

</div>

<div class="about-content">

<h3>Wipro Limited</h3>

<p>

Wipro Limited is an Indian multinational
information technology, consulting and business
process services company. It was founded on
29 December 1945 by Mohamed Hasham Premji.

</p>

<p>

Today Wipro provides Software Development,
Cloud Computing, Artificial Intelligence,
Cyber Security, Data Analytics and Digital
Transformation services to clients in over
65 countries.

</p>

</div>

</div>

</section>

<!--================ FOUNDER =================-->

<section class="founder">

<h2 class="section-title">Founder</h2>

<div class="founder-card">

<img src="image/azim premji.jpg" alt="Azim Premji">

<div>

<h3>Azim Premji</h3>

<h4>Chairman Emeritus of Wipro</h4>

<p>

Azim Premji transformed Wipro into one of
India's leading global IT companies.
His leadership, innovation and vision helped
Wipro become a trusted technology partner
across the world.

</p>

</div>

</div>

</section>

<!--================ COMPANY STATS =================-->

<section class="stats">

<div class="stat-box">

<h2>1945</h2>

<p>Founded</p>

</div>

<div class="stat-box">

<h2>230K+</h2>

<p>Employees</p>

</div>

<div class="stat-box">

<h2>65+</h2>

<p>Countries</p>

</div>

<div class="stat-box">

<h2>1400+</h2>

<p>Clients</p>

</div>

</section>

<!--================ COMPANY DETAILS =================-->

<section class="details">

<h2 class="section-title">

Company Details

</h2>

<div class="details-grid">

<div class="detail-card">

<h3>Established</h3>

<p>29 December 1945</p>

</div>

<div class="detail-card">

<h3>CEO</h3>

<p>Srini Pallia</p>

</div>

<div class="detail-card">

<h3>Headquarters</h3>

<p>Bengaluru, Karnataka, India</p>

</div>

<div class="detail-card">

<h3>Industry</h3>

<p>Information Technology & Consulting</p>

</div>

<div class="detail-card">

<h3>Employees</h3>

<p>230,000+ Worldwide</p>

</div>

<div class="detail-card">

<h3> Website</h3>

<p>www.wipro.com</p>

</div>

</div>

</section>
<!--================ SERVICES =================-->

<section class="services">

<h2 class="section-title">
Wipro Products & Services
</h2>

<div class="service-grid">

<div class="service-card">
<i class="fas fa-laptop-code"></i>
<h3>Software Development</h3>
</div>

<div class="service-card">
<i class="fas fa-cloud"></i>
<h3>Cloud Computing</h3>
</div>

<div class="service-card">
<i class="fas fa-brain"></i>
<h3>Artificial Intelligence</h3>
</div>

<div class="service-card">
<i class="fas fa-shield-alt"></i>
<h3>Cyber Security</h3>
</div>

<div class="service-card">
<i class="fas fa-chart-line"></i>
<h3>Data Analytics</h3>
</div>

<div class="service-card">
<i class="fas fa-users"></i>
<h3>IT Consulting</h3>
</div>

</div>

</section>

<!--================ GLOBAL OFFICES =================-->

<section class="branches">

<h2 class="section-title">
Global Offices
</h2>

<div class="branch-grid">

<div>🇮🇳 India</div>
<div>🇺🇸 United States</div>
<div>🇬🇧 United Kingdom</div>
<div>🇨🇦 Canada</div>
<div>🇦🇺 Australia</div>
<div>🇩🇪 Germany</div>
<div>🇯🇵 Japan</div>
<div>🇸🇬 Singapore</div>

</div>

</section>

<!--================ SALARY =================-->

<section class="salary">

<h2 class="section-title">
Job Profile Wise Salary
</h2>

<table>

<tr>
<th>Job Profile</th>
<th>Experience</th>
<th>Average Salary</th>
</tr>

<tr>
<td>Software Engineer</td>
<td>0-2 Years</td>
<td>₹3.5 - ₹7 LPA</td>
</tr>

<tr>
<td>Web Developer</td>
<td>0-2 Years</td>
<td>₹3.5 - ₹6 LPA</td>
</tr>

<tr>
<td>Java Developer</td>
<td>1-3 Years</td>
<td>₹4 - ₹8 LPA</td>
</tr>

<tr>
<td>Python Developer</td>
<td>1-3 Years</td>
<td>₹4 - ₹8 LPA</td>
</tr>

<tr>
<td>Data Analyst</td>
<td>1-3 Years</td>
<td>₹4 - ₹7 LPA</td>
</tr>

<tr>
<td>Cloud Engineer</td>
<td>2-5 Years</td>
<td>₹7 - ₹14 LPA</td>
</tr>

<tr>
<td>AI / ML Engineer</td>
<td>2-5 Years</td>
<td>₹8 - ₹16 LPA</td>
</tr>

<tr>
<td>Cyber Security Engineer</td>
<td>2-5 Years</td>
<td>₹7 - ₹15 LPA</td>
</tr>

</table>

</section>

<!--================ INTERVIEW =================-->

<section class="interview">

<h2 class="section-title">
Top 50 Interview Questions
</h2>

<p>

Prepare for Wipro interviews with our
Top 50 Frequently Asked Interview Questions.

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

</div>

<!--================ FOOTER =================-->

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

let topBtn = document.getElementById("topBtn");

window.onscroll = function(){

if(document.documentElement.scrollTop > 250){

topBtn.style.display = "block";

}else{

topBtn.style.display = "none";

}

}

topBtn.onclick = function(){

window.scrollTo({

top:0,
behavior:"smooth"

});

}

</script>

</body>
</html>