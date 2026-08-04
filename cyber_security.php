<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cyber Security | NextStep</title>

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

<span>Cyber Security Expert</span>

</h1>

<p>

Protect computer systems, networks and applications from cyber attacks.
Learn Ethical Hacking, Network Security, Digital Forensics and become an industry-ready Cyber Security Professional.

</p>

<a href="#" class="btn">

Start Learning

</a>

</div>

<div class="right">

<img src="image/Cyber Security.jpg" alt="Cyber Security">

</div>

</section><!-- ================= ABOUT CYBER SECURITY & SKILLS ================= -->

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
margin-bottom:15px;
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

<h2>What is Cyber Security?</h2>

<p>

Cyber Security is the practice of protecting computers, servers,
networks and data from hackers, malware, ransomware and cyber attacks.

</p>

<p>

Cyber Security professionals identify security risks, secure digital
systems and help organizations keep their sensitive information safe.

</p>

</div>

<div class="about-image">

<img src="image/cyber.jpg" alt="Cyber Security">

</div>

</section>

<section class="skills">

<h2>Skills Required</h2>

<div class="skill-grid">

<div class="skill-card">
<i class="fa-solid fa-shield-halved"></i>
<h3>Network Security</h3>
<p>Secure networks and prevent unauthorized access.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-user-secret"></i>
<h3>Ethical Hacking</h3>
<p>Find and fix security vulnerabilities legally.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-lock"></i>
<h3>Cryptography</h3>
<p>Protect sensitive data using encryption techniques.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-bug"></i>
<h3>Threat Analysis</h3>
<p>Detect malware, cyber attacks and security threats.</p>
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
}

</style>

<section class="roadmap">

<h2>Cyber Security Roadmap</h2>

<div class="roadmap-grid">

<div class="road-card">
<i class="fa-solid fa-network-wired"></i>
<h3>Step 1</h3>
<p>Learn Networking, Linux and Operating Systems.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-shield-halved"></i>
<h3>Step 2</h3>
<p>Study Cyber Security Fundamentals and Security Concepts.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-user-secret"></i>
<h3>Step 3</h3>
<p>Learn Ethical Hacking, Penetration Testing and Digital Forensics.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-briefcase"></i>
<h3>Step 4</h3>
<p>Earn certifications, build projects and apply for security jobs.</p>
</div>

</div>

</section>

<section class="salary">

<div class="salary-card">
<h3>Fresher</h3>
<h2>₹5 – ₹8 LPA</h2>
<p>0–2 Years Experience</p>
</div>

<div class="salary-card">
<h3>Mid Level</h3>
<h2>₹10 – ₹18 LPA</h2>
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

<div class="company-box">IBM</div>

<div class="company-box">TCS</div>

<div class="company-box">Infosys</div>

<div class="company-box">Accenture</div>

<div class="company-box">Deloitte</div>

</div>

</section><!-- ================= TOOLS | CERTIFICATIONS | FAQ | CTA | FOOTER ================= -->

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
margin-bottom:12px;
color:#0F172A;
}

.tool-card p{
color:#64748B;
line-height:25px;
}

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

.course-grid{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:25px;
}

.course-card{
background:#fff;
padding:25px;
border-left:6px solid #2563EB;
border-radius:15px;
box-shadow:0 8px 20px rgba(0,0,0,.08);
}

.course-card h3{
margin-bottom:10px;
color:#0F172A;
}

.course-card p{
color:#64748B;
line-height:25px;
}

.faq{
width:90%;
margin:80px auto;
}

.faq h2{
text-align:center;
font-size:40px;
margin-bottom:40px;
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
font-weight:bold;
border-radius:10px;
}

.cta a:hover{
background:#E2E8F0;
}

footer{
background:#0F172A;
color:#fff;
text-align:center;
padding:30px;
margin-top:80px;
}

</style>

<section class="tools">

<h2>Cyber Security Tools</h2>

<div class="tools-grid">

<div class="tool-card">
<i class="fa-solid fa-user-secret"></i>
<h3>Kali Linux</h3>
<p>Popular operating system for ethical hacking.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-network-wired"></i>
<h3>Wireshark</h3>
<p>Analyze and monitor network traffic.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-bug"></i>
<h3>Metasploit</h3>
<p>Security testing and penetration testing framework.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-shield-halved"></i>
<h3>Nmap</h3>
<p>Network scanning and vulnerability detection tool.</p>
</div>

</div>

</section>

<section class="course-section">

<h2>Top Certifications</h2>

<div class="course-grid">

<div class="course-card">
<h3>CEH</h3>
<p>Certified Ethical Hacker certification.</p>
</div>

<div class="course-card">
<h3>CompTIA Security+</h3>
<p>Foundation certification in Cyber Security.</p>
</div>

<div class="course-card">
<h3>CISSP</h3>
<p>Advanced certification for security professionals.</p>
</div>

<div class="course-card">
<h3>Google Cybersecurity</h3>
<p>Professional Cyber Security certificate.</p>
</div>

</div>

</section>

<section class="faq">

<h2>Frequently Asked Questions</h2>

<div class="faq-box">
<h3>Is Cyber Security a good career?</h3>
<p>Yes. It offers excellent salaries, global demand and strong career growth.</p>
</div>

<div class="faq-box">
<h3>Do I need programming?</h3>
<p>Basic programming knowledge in Python, C or Java is helpful but not mandatory at the beginning.</p>
</div>

<div class="faq-box">
<h3>Can freshers get Cyber Security jobs?</h3>
<p>Yes. With practical skills, certifications and projects, freshers can get security analyst and SOC roles.</p>
</div>

</section>

<section class="cta">

<h2>Secure the Digital World</h2>

<p>Start your Cyber Security journey today and become an industry-ready security professional.</p>

<a href="#">Start Learning</a>

</section>

<footer>

<p>© 2026 NextStep | Cyber Security | All Rights Reserved.</p>

</footer>

</body>
</html>