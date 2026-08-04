<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cloud Computing | NextStep</title>

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

<span>Cloud Engineer</span>

</h1>

<p>

Learn AWS, Microsoft Azure, Google Cloud Platform, Docker and Kubernetes to build, deploy and manage scalable cloud applications.

</p>

<a href="#" class="btn">

Start Learning

</a>

</div>

<div class="right">

<img src="image/Cloud Computing.jpg" alt="Cloud Computing">

</div>

</section><!-- ================= ABOUT CLOUD COMPUTING & SKILLS ================= -->

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

<h2>What is Cloud Computing?</h2>

<p>

Cloud Computing is the delivery of computing services such as servers,
storage, databases, networking and software over the internet instead
of using local computers.

</p>

<p>

Cloud Engineers design, deploy and manage cloud infrastructure using
platforms like AWS, Microsoft Azure and Google Cloud Platform.

</p>

</div>

<div class="about-image">

<img src="image/cloud.jpeg" alt="Cloud Computing">

</div>

</section>

<section class="skills">

<h2>Skills Required</h2>

<div class="skill-grid">

<div class="skill-card">
<i class="fa-solid fa-cloud"></i>
<h3>AWS</h3>
<p>Learn Amazon Web Services and cloud infrastructure.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-server"></i>
<h3>Microsoft Azure</h3>
<p>Build and manage enterprise cloud solutions.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-database"></i>
<h3>Google Cloud</h3>
<p>Work with scalable cloud storage and computing services.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-network-wired"></i>
<h3>Docker & Kubernetes</h3>
<p>Deploy and manage containerized applications efficiently.</p>
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

<h2>Cloud Computing Roadmap</h2>

<div class="roadmap-grid">

<div class="road-card">
<i class="fa-solid fa-laptop-code"></i>
<h3>Step 1</h3>
<p>Learn Linux, Networking and basic cloud concepts.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-cloud"></i>
<h3>Step 2</h3>
<p>Master AWS, Microsoft Azure or Google Cloud Platform.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-server"></i>
<h3>Step 3</h3>
<p>Learn Docker, Kubernetes, CI/CD and Infrastructure as Code.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-briefcase"></i>
<h3>Step 4</h3>
<p>Earn cloud certifications, build projects and apply for jobs.</p>
</div>

</div>

</section>

<section class="salary">

<div class="salary-card">
<h3>Fresher</h3>
<h2>₹6 – ₹10 LPA</h2>
<p>0–2 Years Experience</p>
</div>

<div class="salary-card">
<h3>Mid Level</h3>
<h2>₹12 – ₹20 LPA</h2>
<p>2–5 Years Experience</p>
</div>

<div class="salary-card">
<h3>Senior</h3>
<h2>₹25+ LPA</h2>
<p>5+ Years Experience</p>
</div>

</section>

<section class="company">

<h2>Top Hiring Companies</h2>

<div class="company-grid">

<div class="company-box">Amazon AWS</div>
<div class="company-box">Microsoft</div>
<div class="company-box">Google Cloud</div>
<div class="company-box">Oracle</div>
<div class="company-box">IBM</div>
<div class="company-box">Infosys</div>
<div class="company-box">TCS</div>
<div class="company-box">Accenture</div>

</div>

</section><!-- ================= CLOUD TOOLS & CERTIFICATIONS ================= -->

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
line-height:26px;
}

.certification{
width:90%;
margin:80px auto;
}

.certification h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
}

.cert-grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:25px;
}

.cert-card{
background:#fff;
padding:25px;
border-left:6px solid #2563EB;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.cert-card h3{
color:#0F172A;
margin-bottom:10px;
}

.cert-card p{
color:#64748B;
line-height:25px;
}

</style>

<section class="tools">

<h2>Cloud Computing Tools</h2>

<div class="tools-grid">

<div class="tool-card">
<i class="fa-solid fa-cloud"></i>
<h3>Amazon AWS</h3>
<p>World's leading cloud platform for computing, storage and networking.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-server"></i>
<h3>Microsoft Azure</h3>
<p>Enterprise cloud platform for web apps, AI and infrastructure.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-database"></i>
<h3>Google Cloud</h3>
<p>Cloud platform for AI, analytics and scalable applications.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-cubes"></i>
<h3>Docker & Kubernetes</h3>
<p>Containerize, deploy and manage applications efficiently.</p>
</div>

</div>

</section>

<section class="certification">

<h2>Top Cloud Certifications</h2>

<div class="cert-grid">

<div class="cert-card">
<h3>AWS Certified Solutions Architect</h3>
<p>Learn AWS architecture, EC2, S3, VPC, IAM and cloud deployment.</p>
</div>

<div class="cert-card">
<h3>Microsoft Azure Administrator (AZ-104)</h3>
<p>Manage Azure resources, networking, storage and virtual machines.</p>
</div>

<div class="cert-card">
<h3>Google Associate Cloud Engineer</h3>
<p>Deploy, monitor and manage applications on Google Cloud Platform.</p>
</div>

<div class="cert-card">
<h3>Docker & Kubernetes Certification</h3>
<p>Master containerization, orchestration and DevOps deployment.</p>
</div>

</div>

</section><!-- ================= FAQ ================= -->

<style>

.faq{
width:90%;
margin:80px auto;
}

.faq h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
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
transition:.3s;
}

.cta a:hover{
background:#E2E8F0;
}

footer{
margin-top:80px;
background:#0F172A;
color:#fff;
padding:35px;
text-align:center;
}

footer p{
font-size:16px;
}

</style>

<section class="faq">

<h2>Frequently Asked Questions</h2>

<div class="faq-box">
<h3>What is Cloud Computing?</h3>
<p>Cloud Computing is the delivery of computing services such as servers, storage, databases and software over the internet.</p>
</div>

<div class="faq-box">
<h3>Which cloud platform should I learn first?</h3>
<p>AWS is a great starting point because it is widely used in the industry. You can also learn Microsoft Azure or Google Cloud Platform.</p>
</div>

<div class="faq-box">
<h3>Is Cloud Computing a good career?</h3>
<p>Yes. Cloud Engineers are in high demand with excellent salary packages and strong career growth opportunities.</p>
</div>

</section>

<section class="cta">

<h2>Build Your Career in Cloud Computing</h2>

<p>
Learn cloud technologies, earn certifications, build real-world projects and become a professional Cloud Engineer.
</p>

<a href="#">Start Learning</a>

</section>

<footer>

<p>© 2026 NextStep | Cloud Computing | All Rights Reserved.</p>

</footer>

</body>
</html>