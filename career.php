<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career | Next Step</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="career.css">

</head>
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{

background:#f5f9ff;

overflow-x:hidden;

}

/* HEADER */

header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:90px;
    background:#000;      /* Black Header */
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 70px;
    z-index:9999;
    box-shadow:0 5px 20px rgba(0,0,0,.5);
}

/* Body ला Header खाली Space */
body{
    padding-top:90px;
}

/* Logo */

.logo{
    display:flex;
    align-items:center;
}

.logo img{
    width:80px;          /* Logo मोठा */
    height:80px;
    border-radius:50%;
    margin-right:15px;
}

.logo h2{
    color:#fff;
    font-size:34px;
    font-weight:bold;
}

.logo p{
    color:#d1d5db;
    font-size:15px;
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
    text-decoration:none;
    color:white;          /* White Menu */
    font-size:17px;
    font-weight:600;
    transition:.3s;
    padding-bottom:5px;
}

nav ul li a:hover{
    color:#3b82f6;
    border-bottom:2px solid #3b82f6;
}

/* HERO */

.hero{

margin-top:90px;

padding:70px 0;

display:flex;

justify-content:center;

background:linear-gradient(135deg,#eef5ff,#ffffff,#dbeafe);

}

.hero img{

width:65%;

border-radius:25px;

box-shadow:0 20px 50px rgba(0,0,0,.18);

transition:.4s;

}

.hero img:hover{

transform:scale(1.03);

}
/* SEARCH */

.search{

width:90%;

margin:50px auto;

}

.search-box{

display:flex;

background:white;

padding:20px;

border-radius:15px;

box-shadow:0 10px 30px rgba(0,0,0,.08);

}

.search-box input{

flex:1;

height:55px;

border:none;

outline:none;

font-size:17px;

padding-left:20px;

}

.search-box button{

width:180px;

background:#2563EB;

border:none;

color:white;

font-size:17px;

cursor:pointer;

border-radius:10px;

transition:.3s;

}

.search-box button:hover{

background:#1D4ED8;

}

/* CAREER */

.career{

width:90%;

margin:80px auto;

}

.career h2{

font-size:45px;

text-align:center;

margin-bottom:15px;

color:#0F172A;

}

.career p{

text-align:center;

color:#64748B;

margin-bottom:50px;

font-size:18px;

}

.career-grid{

display:grid;

grid-template-columns:repeat(2,1fr);

gap:35px;

}

.career-card{

background:white;

border-radius:20px;

overflow:hidden;

box-shadow:0 10px 30px rgba(0,0,0,.08);

transition:.4s;

}

.career-card:hover{

transform:translateY(-10px);

}

.career-card img{

width:100%;

height:250px;

object-fit:cover;

}

.career-card h3{

padding:20px;

font-size:28px;

color:#0F172A;

}

.career-card p{

padding:0 20px;

text-align:left;

line-height:30px;

margin-bottom:20px;

}

.career-card a{

display:inline-block;

margin:20px;

padding:14px 35px;

background:#2563EB;

color:white;

text-decoration:none;

border-radius:10px;

font-weight:600;

}

.career-card a:hover{

background:#1D4ED8;

}

/*==========================
    PREMIUM CTA
==========================*/

.career-cta{

width:90%;

margin:80px auto;

padding:70px;

border-radius:30px;

background:linear-gradient(
135deg,
#2563EB,
#7C3AED,
#EC4899,
#F97316
);

background-size:400% 400%;

animation:gradient 10s ease infinite;

text-align:center;

color:white;

box-shadow:0 25px 60px rgba(0,0,0,.18);

}

@keyframes gradient{

0%{
background-position:0% 50%;
}

50%{
background-position:100% 50%;
}

100%{
background-position:0% 50%;
}

}

.cta-content h2{

font-size:42px;

margin-bottom:20px;

font-weight:700;

}

.cta-content p{

font-size:19px;

line-height:34px;

margin-bottom:40px;

}

.cta-link{

display:flex;

justify-content:center;

gap:15px;

flex-wrap:wrap;

}

.cta-link input{

width:500px;

max-width:100%;

height:58px;

padding:0 20px;

border:none;

outline:none;

border-radius:10px;

font-size:16px;

}

.cta-link button{

height:58px;

padding:0 35px;

border:none;

border-radius:10px;

background:#ffffff;

color:#2563EB;

font-size:17px;

font-weight:600;

cursor:pointer;

transition:.3s;

}

.cta-link button:hover{

background:#111827;

color:white;

transform:translateY(-3px);

}

/*==========================
FOOTER
==========================*/

footer{

background:#0F172A;

padding:70px 8% 20px;

color:white;

}

.footer-container{

display:grid;

grid-template-columns:repeat(4,1fr);

gap:40px;

}

.footer-box h2,
.footer-box h3{

margin-bottom:20px;

}

.footer-box p{

line-height:28px;

color:#CBD5E1;

}

.footer-box a{

display:block;

color:#CBD5E1;

text-decoration:none;

margin:12px 0;

transition:.3s;

}

.footer-box a:hover{

color:#60A5FA;

padding-left:8px;

}

.social{

display:flex;

gap:15px;

margin-top:20px;

}

.social a{

width:45px;

height:45px;

background:#1E293B;

border-radius:50%;

display:flex;

justify-content:center;

align-items:center;

font-size:18px;

transition:.3s;

}

.social a:hover{

background:#2563EB;

transform:translateY(-5px);

}

.copyright{

border-top:1px solid rgba(255,255,255,.1);

margin-top:40px;

padding-top:20px;

text-align:center;

color:#CBD5E1;

}

/*==========================
SCROLL BUTTON
==========================*/

.top-btn{

position:fixed;

bottom:25px;

right:25px;

width:55px;

height:55px;

background:#2563EB;

color:white;

display:flex;

justify-content:center;

align-items:center;

border-radius:50%;

text-decoration:none;

font-size:20px;

box-shadow:0 10px 30px rgba(0,0,0,.25);

transition:.3s;

}

.top-btn:hover{

background:#1D4ED8;

transform:translateY(-6px);

}
</style>
<body>
<header>

<div class="logo">

<img src="image/logo.jpeg" height=90% width=50%>

<div>

<h2>NEXT STEP</h2>

<p>Your Journey to a Successful Career</p>

</div>

</div>

<nav style="text-decoration:none;">

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

<img src="image\career_page - Copy.png">

</section>

<!-- ================= SEARCH ================= -->

<section class="search">

<div class="search-box">

<input type="text" placeholder="Search Your Dream Career...">

<button>

<i class="fa-solid fa-magnifying-glass"></i>

Search

</button>

</div>

</section>

<!-- ================= CAREERS ================= -->

<section class="career">

<h2>Popular Career Paths</h2>

<p>Choose your dream career and start your professional journey.</p>

<div class="career-grid">

<div class="career-card">

<img src="image/software Development.jpg">

<h3>Software Development</h3>

<p>
HTML, CSS, JavaScript, PHP, MySQL,
React and Full Stack Development.
</p>

<a href="software_development.php">Explore</a>

</div>

<div class="career-card">

<img src="image/Artificial Intelligence.jpg">

<h3>Artificial Intelligence</h3>

<p>
Machine Learning, Deep Learning,
Python and Generative AI.
</p>

<a href="artificial_intelligence.php">Explore</a>

</div>

<div class="career-card">

<img src="image/Cyber Security.jpg">

<h3>Cyber Security</h3>

<p>
Ethical Hacking,
Network Security,
Digital Forensics.
</p>

<a href="cyber_security.php">Explore</a>

</div>

<div class="career-card">

<img src="image/Data science.jpg">

<h3>Data Science</h3>

<p>
Python,
SQL,
Power BI,
Machine Learning.
</p>

<a href="data_science.php">Explore</a>

</div>

<div class="career-card">

<img src="image\Cloud Computing.jpg">

<h3>Cloud Computing</h3>

<p>
AWS,
Azure,
Google Cloud,
DevOps.
</p>

<a href="cloud_computing.php">Explore</a>

</div>

<div class="career-card">

<img src="image/Mechanical Engineering.jpg">

<h3>Mechanical Engineering</h3>

<p>
CAD,
CAM,
Robotics,
Automation.
</p>

<a href="mechanical_engineering.php">Explore</a>

</div>

<div class="career-card">

<img src="image/civil eng.jpg">

<h3>Civil Engineering</h3>

<p>
Construction,
Surveying,
Structural Design.
</p>

<a href="civil_engineering.php">Explore</a>

</div>

<div class="career-card">

<img src="image/Government Jobs.jpg">

<h3>Government Jobs</h3>

<p>
UPSC,
MPSC,
SSC,
Banking,
Railway.
</p>

<a href="goverment_jobs.php">Explore</a>

</div>

</div>

</section>

<!-- ================= CTA ================= -->

<section class="career-cta">

<div class="cta-content">

<h2>Start Your Career Journey Today</h2>

<p>

Build your future with professional courses, career roadmaps,
top companies, placement preparation and interview practice.

</p>

<div class="cta-link">

<input type="url" placeholder="Add Your Link Here">

<button>Get Started</button>

</div>

</div>

</section>
<!-- ================= FOOTER ================= -->

<footer>

<div class="footer-container">

<div class="footer-box">

<h2>Next Step</h2>


<p>Your Journey to a Successful Career Starts Here.</P>
</div>

<div class="footer-box">

<h3>Quick Links</h3>

<a href="index.php">Home</a>

<a href="career.php">Career</a>

<a href="company.php">Company</a>

<a href="resume.php">Resume Builder</a>

<a href="interview.php">Interview</a>

<a href="feedback.php">Feedback</a>

</div>

<div class="footer-box">

<h3>Contact</h3>

<p>Email : nextstep@gmail.com</p>

<p>Phone : +91 9876543210</p>

<p>India</p>

</div>

<div class="footer-box">


</div>

</div>

</div>

<div class="copyright">

© 2026 Next Step | All Rights Reserved.

</div>

</footer>

<!-- Scroll Button -->

<a href="#" class="top-btn">

<i class="fas fa-arrow-up"></i>

</a>

</body>

</html>
