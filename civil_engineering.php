<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Civil Engineering | NextStep</title>

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
background:#F8FAFC;
}

header{
width:100%;
height:85px;
background:#0F172A;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 70px;
}

.logo{
font-size:32px;
font-weight:bold;
color:#fff;
}

.logo span{
color:#2563EB;
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
color:#fff;
font-size:17px;
transition:.3s;
}

nav ul li a:hover{
color:#60A5FA;
}

.login{
background:#2563EB;
padding:12px 28px;
border-radius:8px;
color:#fff;
text-decoration:none;
}

.hero{
width:90%;
margin:70px auto;
display:flex;
justify-content:space-between;
align-items:center;
}

.left{
width:48%;
}

.left h1{
font-size:55px;
line-height:70px;
color:#0F172A;
}

.left span{
color:#2563EB;
}

.left p{
margin:25px 0;
font-size:18px;
line-height:30px;
color:#64748B;
}

.btn{
display:inline-block;
padding:15px 35px;
background:#2563EB;
color:#fff;
text-decoration:none;
border-radius:10px;
}

.btn:hover{
background:#1D4ED8;
}

.right{
width:45%;
}

.right img{
width:100%;
max-height:450px;
object-fit:contain;
}

</style>

</head>

<body>

<header>

<div class="logo">
    <img src="image/logo.jpeg" alt="Logo" style="height:45px; vertical-align:middle;">
    <span>Next</span>Step
</div>
<nav>

<ul>
<li><a href="index.php">Home</a></li>
<li><a href="career.php">Career</a></li>
<li><a href="#">Courses</a></li>
<li><a href="#">Roadmap</a></li>
<li><a href="#">Contact</a></li>
</ul>

</nav>

<a href="#" class="login">Login</a>

</header>

<section class="hero">

<div class="left">

<h1>

Become a

<span>Civil Engineer</span>

</h1>

<p>

Learn Structural Engineering, Construction Management, Surveying,
Transportation Engineering and modern design software to build roads,
bridges, buildings and smart infrastructure.

</p>

</div>

<div class="right">

<img src="images/civil eng.jpg" alt="Civil Engineering">

</div>

</section><!-- ================= ABOUT CIVIL ENGINEERING & SKILLS ================= -->

<style>

.about{
width:90%;
margin:80px auto;
display:flex;
justify-content:space-between;
align-items:center;
gap:40px;
}

.about-text{
width:55%;
}

.about-text h2{
font-size:42px;
color:#0F172A;
margin-bottom:20px;
}

.about-text p{
font-size:18px;
line-height:32px;
color:#64748B;
margin-bottom:20px;
}

.about-image{
width:40%;
}

.about-image img{
width:100%;
border-radius:20px;
}

.skills{
width:90%;
margin:80px auto;
}

.skills h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
}

.skill-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.skill-card{
background:#fff;
padding:30px;
text-align:center;
border-radius:18px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.skill-card:hover{
transform:translateY(-10px);
}

.skill-card i{
font-size:45px;
color:#2563EB;
margin-bottom:15px;
}

.skill-card h3{
margin-bottom:12px;
color:#0F172A;
}

.skill-card p{
color:#64748B;
line-height:26px;
}

</style>

<section class="about">

<div class="about-text">

<h2>What is Civil Engineering?</h2>

<p>

Civil Engineering is the branch of engineering that deals with the planning,
design, construction and maintenance of buildings, roads, bridges, dams,
airports, tunnels and other infrastructure projects.

</p>

<p>

Civil Engineers ensure that structures are safe, durable, economical and
environment-friendly while meeting the needs of modern society.

</p>

</div>

<div class="about-image">

<img src="image/civil.jpeg" alt="Civil Engineering">

</div>

</section>

<section class="skills">

<h2>Skills Required</h2>

<div class="skill-grid">

<div class="skill-card">
<i class="fa-solid fa-compass-drafting"></i>
<h3>AutoCAD</h3>
<p>Create professional 2D and 3D engineering drawings and plans.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-building"></i>
<h3>STAAD.Pro</h3>
<p>Analyze and design RCC and steel structures safely.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-city"></i>
<h3>ETABS</h3>
<p>Design high-rise buildings and structural systems efficiently.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-ruler-combined"></i>
<h3>Revit</h3>
<p>Create Building Information Modeling (BIM) designs and construction models.</p>
</div>

</div>

</section><!-- ================= ROADMAP | SALARY | TOP COMPANIES ================= -->

<style>

.roadmap{
width:90%;
margin:80px auto;
}

.roadmap h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
}

.roadmap-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.road-card{
background:#fff;
padding:30px;
text-align:center;
border-radius:18px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.road-card:hover{
transform:translateY(-10px);
}

.road-card i{
font-size:45px;
color:#2563EB;
margin-bottom:15px;
}

.road-card h3{
margin-bottom:15px;
color:#0F172A;
}

.road-card p{
color:#64748B;
line-height:26px;
}

.salary{
width:90%;
margin:80px auto;
display:grid;
grid-template-columns:repeat(3,1fr);
gap:25px;
}

.salary-card{
background:#fff;
padding:35px;
text-align:center;
border-radius:18px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.salary-card h3{
color:#2563EB;
margin-bottom:10px;
}

.salary-card h2{
font-size:32px;
color:#0F172A;
margin-bottom:10px;
}

.salary-card p{
color:#64748B;
}

.company{
width:90%;
margin:80px auto;
}

.company h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
}

.company-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
}

.company-box{
background:#fff;
padding:25px;
text-align:center;
border-radius:15px;
font-size:20px;
font-weight:bold;
color:#0F172A;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.company-box:hover{
transform:translateY(-8px);
}

</style>

<section class="roadmap">

<h2>Civil Engineering Roadmap</h2>

<div class="roadmap-grid">

<div class="road-card">
<i class="fa-solid fa-book"></i>
<h3>Step 1</h3>
<p>Build a strong foundation in Engineering Mathematics, Physics and Engineering Drawing.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-compass-drafting"></i>
<h3>Step 2</h3>
<p>Learn AutoCAD, Surveying, Building Planning and Structural Analysis.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-city"></i>
<h3>Step 3</h3>
<p>Master RCC Design, Steel Structures, ETABS, STAAD.Pro and Revit.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-helmet-safety"></i>
<h3>Step 4</h3>
<p>Complete internships, site training and real construction projects to become industry-ready.</p>
</div>

</div>

</section>

<section class="salary">

<div class="salary-card">
<h3>Fresher</h3>
<h2>₹3 – ₹6 LPA</h2>
<p>0–2 Years Experience</p>
</div>

<div class="salary-card">
<h3>Mid Level</h3>
<h2>₹7 – ₹12 LPA</h2>
<p>2–5 Years Experience</p>
</div>

<div class="salary-card">
<h3>Senior</h3>
<h2>₹15+ LPA</h2>
<p>5+ Years Experience</p>
</div>

</section>

<section class="company">

<h2>Top Hiring Companies</h2>

<div class="company-grid">

<div class="company-box">Larsen & Toubro</div>

<div class="company-box">Tata Projects</div>

<div class="company-box">Shapoorji Pallonji</div>

<div class="company-box">Afcons Infrastructure</div>

<div class="company-box">NCC Limited</div>

<div class="company-box">DLF</div>

<div class="company-box">GMR Group</div>

<div class="company-box">Reliance Infrastructure</div>

</div>

</section><!-- ================= TOOLS | COURSES | FAQ | CTA | FOOTER ================= -->

<style>

.tools{
width:90%;
margin:80px auto;
}

.tools h2,
.course-section h2,
.faq h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
}

.tools-grid,
.course-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.tool-card,
.course-card{
background:#fff;
padding:30px;
text-align:center;
border-radius:18px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.tool-card:hover,
.course-card:hover{
transform:translateY(-10px);
}

.tool-card i{
font-size:45px;
color:#2563EB;
margin-bottom:15px;
}

.tool-card h3,
.course-card h3{
margin-bottom:12px;
color:#0F172A;
}

.tool-card p,
.course-card p{
color:#64748B;
line-height:26px;
}

.faq{
width:90%;
margin:80px auto;
}

.faq-box{
background:#fff;
padding:25px;
margin-bottom:20px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.faq-box h3{
color:#2563EB;
margin-bottom:10px;
}

.faq-box p{
color:#64748B;
line-height:26px;
}

.cta{
width:90%;
margin:80px auto;
background:#2563EB;
padding:60px;
text-align:center;
border-radius:20px;
color:#fff;
}

.cta h2{
font-size:42px;
margin-bottom:20px;
}

.cta p{
font-size:18px;
margin-bottom:30px;
}

.cta a{
display:inline-block;
padding:15px 35px;
background:#fff;
color:#2563EB;
text-decoration:none;
font-weight:bold;
border-radius:10px;
}

footer{
margin-top:80px;
background:#0F172A;
color:#fff;
padding:35px;
text-align:center;
}

</style>

<section class="tools">

<h2>Software Tools</h2>

<div class="tools-grid">

<div class="tool-card">
<i class="fa-solid fa-compass-drafting"></i>
<h3>AutoCAD</h3>
<p>Professional 2D & 3D drafting software.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-building"></i>
<h3>STAAD.Pro</h3>
<p>Structural analysis and RCC/Steel design.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-city"></i>
<h3>ETABS</h3>
<p>Building analysis and high-rise structure design.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-cube"></i>
<h3>Revit BIM</h3>
<p>Create intelligent Building Information Models.</p>
</div>

</div>

</section>

<section class="course-section">

<h2>Top Courses & Certifications</h2>

<div class="course-grid">

<div class="course-card">
<h3>AutoCAD Professional</h3>
<p>Master professional civil drafting.</p>
</div>

<div class="course-card">
<h3>STAAD.Pro Certification</h3>
<p>Learn structural design and analysis.</p>
</div>

<div class="course-card">
<h3>ETABS Professional</h3>
<p>Design earthquake-resistant buildings.</p>
</div>

<div class="course-card">
<h3>Revit BIM</h3>
<p>Create smart building models.</p>
</div>

</div>

</section>

<section class="faq">

<h2>Frequently Asked Questions</h2>

<div class="faq-box">
<h3>Is Civil Engineering a good career?</h3>
<p>Yes. Civil Engineers are in demand for infrastructure, highways, metro, bridges and smart city projects.</p>
</div>

<div class="faq-box">
<h3>Which software should I learn?</h3>
<p>AutoCAD, STAAD.Pro, ETABS, Revit, Primavera and Civil 3D are highly recommended.</p>
</div>

<div class="faq-box">
<h3>Can I get a government job?</h3>
<p>Yes. Civil Engineers can apply for PWD, NHAI, Railways, MES, CPWD and many PSU organizations.</p>
</div>

</section>

<section class="cta">

<h2>Build the Future with Civil Engineering</h2>

<p>Learn modern civil engineering skills, complete real-world projects and become an industry-ready Civil Engineer.</p>

<a href="#">Start Learning</a>

</section>

<footer>

<p>© 2026 NextStep | Civil Engineering | All Rights Reserved.</p>

</footer>

</body>
</html>