<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Artificial Intelligence | NextStep</title>

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
<span>N</span> NextStep
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

Become an

<span>AI Engineer</span>

</h1>

<p>

Learn Artificial Intelligence, Machine Learning, Deep Learning,
Python and build intelligent applications for the future.

</p>

<a href="#" class="btn">

Start Learning

</a>

</div>

<div class="right">

<img src="images/ai-banner.png" alt="Artificial Intelligence">

</div>

</section><!-- ================= ABOUT AI & SKILLS ================= -->

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

<h2>What is Artificial Intelligence?</h2>

<p>

Artificial Intelligence (AI) is a technology that enables computers
to think, learn and solve problems like humans. AI is used in chatbots,
self-driving cars, healthcare, finance, robotics and many other fields.

</p>

<p>

AI Engineers develop smart applications using Python, Machine Learning,
Deep Learning and Neural Networks to automate tasks and make better decisions.

</p>

</div>

<div class="about-image">

<img src="images/ai-about.png" alt="Artificial Intelligence">

</div>

</section>

<section class="skills">

<h2>Skills Required</h2>

<div class="skill-grid">

<div class="skill-card">
<i class="fa-brands fa-python"></i>
<h3>Python</h3>
<p>Most popular programming language for AI and Machine Learning.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-brain"></i>
<h3>Machine Learning</h3>
<p>Build intelligent models that learn from data.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-microchip"></i>
<h3>Deep Learning</h3>
<p>Create neural networks for image, speech and text processing.</p>
</div>

<div class="skill-card">
<i class="fa-solid fa-database"></i>
<h3>Data Analysis</h3>
<p>Collect, clean and analyze data for AI applications.</p>
</div>

</div>

</section><!-- ================= AI ROADMAP | SALARY | TOP COMPANIES ================= -->

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

<h2>AI Engineer Roadmap</h2>

<div class="roadmap-grid">

<div class="road-card">
<i class="fa-brands fa-python"></i>
<h3>Step 1</h3>
<p>Learn Python Programming.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-chart-line"></i>
<h3>Step 2</h3>
<p>Learn Mathematics, Statistics and Machine Learning.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-brain"></i>
<h3>Step 3</h3>
<p>Master Deep Learning, NLP and Computer Vision.</p>
</div>

<div class="road-card">
<i class="fa-solid fa-robot"></i>
<h3>Step 4</h3>
<p>Build AI Projects and apply for AI Engineer jobs.</p>
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
<h2>₹12 – ₹22 LPA</h2>
<p>2–5 Years Experience</p>
</div>

<div class="salary-card">
<h3>Senior</h3>
<h2>₹25+ LPA</h2>
<p>5+ Years Experience</p>
</div>

</section>

<section class="company">

<h2>Top AI Companies</h2>

<div class="company-grid">

<div class="company-box">OpenAI</div>

<div class="company-box">Google AI</div>

<div class="company-box">Microsoft AI</div>

<div class="company-box">NVIDIA</div>

<div class="company-box">Amazon AWS</div>

<div class="company-box">IBM</div>

<div class="company-box">Infosys</div>

<div class="company-box">TCS</div>

</div>

</section><!-- ================= AI TOOLS | COURSES | FAQ | CTA | FOOTER ================= -->

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

.course-section{
width:90%;
margin:80px auto;
}

.course-section h2{
text-align:center;
font-size:40px;
color:#0F172A;
margin-bottom:40px;
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

footer{
background:#0F172A;
color:#fff;
text-align:center;
padding:30px;
margin-top:80px;
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
<section class="tools">

<h2>AI Tools & Technologies</h2>

<div class="tools-grid">

<div class="tool-card">
<i class="fa-brands fa-python"></i>
<h3>Python</h3>
<p>Primary programming language for AI.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-brain"></i>
<h3>TensorFlow</h3>
<p>Build and train deep learning models.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-microchip"></i>
<h3>PyTorch</h3>
<p>Popular AI and deep learning framework.</p>
</div>

<div class="tool-card">
<i class="fa-solid fa-chart-column"></i>
<h3>Pandas</h3>
<p>Data analysis and preprocessing library.</p>
</div>

</div>

</section>

<section class="course-section">

<h2>Top AI Courses</h2>

<div class="course-grid">

<div class="course-card">
<h3>Python Programming</h3>
<p>Learn Python from beginner to advanced level.</p>
</div>

<div class="course-card">
<h3>Machine Learning</h3>
<p>Understand supervised and unsupervised learning.</p>
</div>

<div class="course-card">
<h3>Deep Learning</h3>
<p>Learn neural networks, CNNs and RNNs.</p>
</div>

<div class="course-card">
<h3>Generative AI</h3>
<p>Build applications using modern AI models.</p>
</div>

</div>

</section>

<section class="faq">

<h2>Frequently Asked Questions</h2>

<div class="faq-box">
<h3>Do I need coding for AI?</h3>
<p>Yes. Python is the most commonly used language for AI development.</p>
</div>

<div class="faq-box">
<h3>Can beginners learn AI?</h3>
<p>Yes. Start with Python, mathematics and machine learning fundamentals.</p>
</div>

<div class="faq-box">
<h3>Is AI a good career?</h3>
<p>Yes. AI is one of the fastest-growing fields with excellent career opportunities.</p>
</div>

</section>

<section class="cta">

<h2>Build Your Future in Artificial Intelligence</h2>

<p>Start learning AI today and become an industry-ready AI Engineer.</p>

<a href="#">Start Learning</a>

</section>
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