<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Software Development| NextStep</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

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
}

nav ul li a:hover{
color:#60A5FA;
}

.login{
background:#2563EB;
padding:12px 30px;
border-radius:8px;
text-decoration:none;
color:#fff;
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
color:#0F172A;
line-height:70px;
}

.left span{
color:#2563EB;
}

.left p{
margin:25px 0;
line-height:30px;
font-size:18px;
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

<li><a href="company.php">Company</a></li>

<li><a href="resume-builder.php">Resume Builder</a></li>

<li><a href="interview.php">Interview Practice</a></li>

<li><a href="feedback.php">Feedback</a></li>

</ul>

</nav>

<a href="#" class="login">Login</a>

</header>

<section class="hero">

<div class="left">

<h1>

Become a

<span>Software Developer</span>

</h1>

<p>

Learn Full Stack Development, build real-world projects,
prepare for placements and get hired by top IT companies.

</p>

<a href="#" class="btn">

Start Learning

</a>

</div>

<div class="right">

<img src="image/Software Development.jpg">

</div>

</section><!-- ================= ABOUT & SKILLS ================= -->

<style>

.about{
width:90%;
margin:80px auto;
display:flex;
justify-content:space-between;
gap:40px;
align-items:center;
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
margin:70px auto;
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
border-radius:18px;
text-align:center;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.skill-card:hover{
transform:translateY(-10px);
}

.skill-card i{
font-size:45px;
color:#2563EB;
margin-bottom:20px;
}

.skill-card h3{
margin-bottom:15px;
color:#0F172A;
}

.skill-card p{
color:#64748B;
line-height:26px;
}

</style>

<section class="about">

<div class="about-text">

<h2>What is Software Development?</h2>

<p>

Software Development is the process of designing, developing,
testing and maintaining software applications. Developers create
websites, mobile apps, desktop software and enterprise systems
using modern programming languages and frameworks.

</p>

<p>

It is one of the fastest-growing careers with excellent salary,
global job opportunities and continuous learning.

</p>

</div>

<div class="right">
    <img src="image/software development 2.png" alt="Software Development" style="width:100%;display:block;">
</div>

</section>

<section class="skills">

<h2>Skills Required</h2>

<div class="skill-grid">

<div class="skill-card">
<i class="fa-brands fa-html5"></i>
<h3>HTML & CSS</h3>
<p>Create responsive and attractive web pages.</p>
</div>

<div class="skill-card">
<i class="fa-brands fa-js"></i>
<h3>JavaScript</h3>
<p>Add interactive features and dynamic functionality.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-database"></i>
<h3>PHP & MySQL</h3>
<p>Build powerful backend applications and databases.</p>
</div>

<div class="skill-card">
<i class="fa-brands fa-github"></i>
<h3>Git & GitHub</h3>
<p>Manage source code and collaborate with teams.</p>
</div>

</div>

</section><!-- ================= ROADMAP / COMPANIES / SALARY ================= -->

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
border-radius:18px;
text-align:center;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.road-card:hover{
transform:translateY(-10px);
}

.road-card i{
font-size:45px;
color:#2563EB;
margin-bottom:20px;
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
margin-bottom:15px;
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
margin-bottom:40px;
color:#0F172A;
}

.company-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
}

.company-box{
background:#fff;
padding:25px;
border-radius:15px;
text-align:center;
font-size:20px;
font-weight:bold;
color:#0F172A;
box-shadow:0 8px 20px rgba(0,0,0,.08);
}

</style>

<section class="roadmap">

<h2>Software Developer Roadmap</h2>

<div class="roadmap-grid">

<div class="road-card">
<i class="fa-solid fa-code"></i>
<h3>Step 1</h3>
<p>Learn HTML, CSS and JavaScript.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-laptop-code"></i>
<h3>Step 2</h3>
<p>Learn PHP, Python or Java with MySQL.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-diagram-project"></i>
<h3>Step 3</h3>
<p>Build real-world projects and upload them on GitHub.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-briefcase"></i>
<h3>Step 4</h3>
<p>Prepare for interviews and apply to companies.</p>
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
<h2>₹8 – ₹15 LPA</h2>
<p>2–5 Years Experience</p>
</div>

<div class="salary-card">
<h3>Senior</h3>
<h2>₹20+ LPA</h2>
<p>5+ Years Experience</p>
</div>

</section>

<section class="company">

<h2>Top Hiring Companies</h2>

<div class="company-grid">

<div class="company-box">Google</div>
<div class="company-box">Microsoft</div>
<div class="company-box">Amazon</div>
<div class="company-box">Infosys</div>
<div class="company-box">TCS</div>
<div class="company-box">Wipro</div>
<div class="company-box">Accenture</div>
<div class="company-box">Cognizant</div>

</div>

</section><!-- ================= TOOLS | COURSES | FAQ | CTA | FOOTER ================= -->

<style>

.tools{
width:90%;
margin:80px auto;
}

.tools h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
}

.tools-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.tool-card{
background:#fff;
padding:30px;
text-align:center;
border-radius:18px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
transition:.3s;
}

.tool-card:hover{
transform:translateY(-10px);
}

.tool-card i{
font-size:45px;
color:#2563EB;
margin-bottom:15px;
}

.tool-card h3{
margin-bottom:10px;
color:#0F172A;
}

.tool-card p{
color:#64748B;
line-height:25px;
}

/*========== COURSES ==========*/

.course-section{
width:90%;
margin:80px auto;
}

.course-section h2{
text-align:center;
font-size:40px;
margin-bottom:40px;
color:#0F172A;
}

.course-list{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
}

.course-box{
background:#fff;
padding:25px;
border-left:6px solid #2563EB;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.course-box h3{
color:#0F172A;
margin-bottom:10px;
}

.course-box p{
color:#64748B;
}

/*========== FAQ ==========*/

.faq{
width:90%;
margin:80px auto;
}

.faq h2{
text-align:center;
font-size:40px;
margin-bottom:35px;
color:#0F172A;
}

.faq-box{
background:#fff;
padding:25px;
margin-bottom:20px;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.faq-box h3{
margin-bottom:10px;
color:#2563EB;
}

.faq-box p{
color:#64748B;
line-height:28px;
}

/*========== CTA ==========*/

.cta{
width:90%;
margin:80px auto;
background:#2563EB;
color:#fff;
padding:60px;
text-align:center;
border-radius:20px;
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
border-radius:10px;
font-weight:bold;
}

/*========== FOOTER ==========*/

footer{
background:#0F172A;
color:#fff;
text-align:center;
padding:30px;
margin-top:80px;
}

</style>

<section class="tools">

<h2>Tools & Technologies</h2>

<div class="tools-grid">

<div class="tool-card">
<i class="fa-brands fa-html5"></i>
<h3>HTML5</h3>
<p>Website Structure</p>
</div>

<div class="tool-card">
<i class="fa-brands fa-css3-alt"></i>
<h3>CSS3</h3>
<p>Website Design</p>
</div>

<div class="tool-card">
<i class="fa-brands fa-js"></i>
<h3>JavaScript</h3>
<p>Interactive Features</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-database"></i>
<h3>MySQL</h3>
<p>Database Management</p>
</div>

</div>

</section>

<section class="course-section">

<h2>Top Courses</h2>

<div class="course-list">

<div class="course-box">
<h3>Full Stack Web Development</h3>
<p>HTML, CSS, JavaScript, PHP, MySQL, React</p>
</div>

<div class="course-box">
<h3>Frontend Development</h3>
<p>HTML, CSS, JavaScript, Bootstrap, React</p>
</div>

<div class="course-box">
<h3>Backend Development</h3>
<p>PHP, Laravel, Node.js, Express, MySQL</p>
</div>

<div class="course-box">
<h3>Git & GitHub</h3>
<p>Version Control and Team Collaboration</p>
</div>

</div>

</section>

<section class="faq">

<h2>Frequently Asked Questions</h2>

<div class="faq-box">
<h3>Who can learn Software Development?</h3>
<p>Anyone with basic computer knowledge and an interest in programming can start learning.</p>
</div>

<div class="faq-box">
<h3>Is coding mandatory?</h3>
<p>Yes. Programming is the core skill required for software development.</p>
</div>

<div class="faq-box">
<h3>Can I get a job as a fresher?</h3>
<p>Yes. Strong programming skills and real-world projects improve your chances of getting hired.</p>
</div>

</section>

<section class="cta">

<h2>Become a Professional Software Developer</h2>

<p>Start learning today and build your future in the IT industry.</p>

<a href="#">Start Now</a>

</section>

<footer>

<p>© 2026 NextStep | Software Development | All Rights Reserved.</p>

</footer>

</body>
</html>