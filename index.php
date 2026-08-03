<!DOCTYPE html>
<html>

<head>

<title>NEXT STEP</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#f7f9fc;
}

header{
width:100%;
height:90px;
background:#FEF8F8;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 70px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
position:sticky;
top:0;
z-index:1000;
}

.logo{
display:flex;
align-items:center;
}

.logo img{
width:60px;
margin-right:12px;
}

.logo h2{
color:#0F172A;
font-size:30px;
}

.logo p{
font-size:14px;
color:#666;
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
color:#0F172A;
font-weight:bold;
transition:.3s;
}

nav ul li a:hover{
color:#2563EB;
}

.hero{
width:100%;
min-height:90vh;
display:flex;
justify-content:space-between;
align-items:center;
padding:80px;
background:linear-gradient(to right,#eef5ff,#ffffff);
}

.left{
width:50%;
}

.left h1{
font-size:60px;
color:#0F172A;
margin-bottom:20px;
}

.left h1 span{
color:#2563EB;
}

.left p{
font-size:20px;
line-height:32px;
color:#555;
margin-bottom:35px;
}

.search-box{
width:600px;
height:60px;
background:white;
display:flex;
align-items:center;
border-radius:40px;
box-shadow:0 0 15px rgba(0,0,0,.15);
overflow:hidden;
}

.search-box i{
font-size:20px;
padding-left:20px;
color:#2563EB;
}

.search-box input{
width:100%;
border:none;
outline:none;
padding:15px;
font-size:17px;
}

.search-box button{
width:150px;
height:60px;
background:#2563EB;
color:white;
border:none;
font-size:16px;
cursor:pointer;
}

.hero-btn{
margin-top:35px;
}

.hero-btn a{
text-decoration:none;
padding:15px 35px;
background:#2563EB;
color:white;
border-radius:8px;
margin-right:15px;
display:inline-block;
transition:.3s;
}

.hero-btn a:hover{
background:#1D4ED8;
}

.right{
width:45%;
position:relative;
text-align:center;
}

.right img{
width:500px;
}

.box1,.box2,.box3{
position:absolute;
background:white;
padding:15px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.15);
}

.box1{
top:20px;
left:20px;
}

.box2{
bottom:120px;
right:20px;
}

.box3{
bottom:20px;
left:100px;
}

.box1 h3,
.box2 h3,
.box3 h3{
color:#2563EB;
font-size:28px;
}

.box1 p,
.box2 p,
.box3 p{
color:#555;
}


.services{
padding:70px;
background:#ffffff;
text-align:center;
}

.services h2{
font-size:40px;
color:#0F172A;
margin-bottom:40px;
}

.service-container{
display:flex;
gap:25px;
}

.card{
display:inline-block;
width:250px;
height:250px;
background:white;
margin:15px;
padding:25px;
border-radius:18px;
box-shadow:0 5px 15px rgba(0,0,0,.15);
text-align:center;
}

.card:hover{
transform:translateY(-10px);
box-shadow:0 10px 25px rgba(37,99,235,.3);
}

.card img{
width:70px;
height:70px;
margin-bottom:20px;
}

.card h3{
margin-bottom:15px;
color:#0F172A;
}

.card p{
font-size:15px;
color:#666;
line-height:24px;
}

.why{
display:flex;
justify-content:space-between;
align-items:center;
padding:80px;
background:#f8fbff;
}

.why-image{
width:45%;
}

.why-image img{
width:100%;
}

.why-content{
width:50%;
}

.why-content h2{
font-size:42px;
color:#0F172A;
margin-bottom:20px;
}

.why-content span{
color:#2563EB;
}

.why-content p{
font-size:18px;
color:#555;
line-height:30px;
margin-bottom:30px;
}

.why-box{
display:grid;
grid-template-columns:repeat(2,1fr);
gap:20px;
}

.info{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.3s;
}

.info:hover{
transform:translateY(-8px);
box-shadow:0 10px 20px rgba(37,99,235,.25);
}

.info h3{
color:#2563EB;
margin-bottom:10px;
}

.info p{
font-size:15px;
line-height:24px;
margin:0;
}

.career{
padding:80px;
background:#ffffff;
text-align:center;
}

.career h2{
font-size:42px;
color:#0F172A;
margin-bottom:15px;
}

.career-text{
font-size:18px;
color:#666;
margin-bottom:50px;
}

.career-container{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.career-card{
background:#fff;
padding:30px;
border-radius:18px;
box-shadow:0 5px 15px rgba(0,0,0,.12);
transition:.4s;
}

.career-card:hover{
transform:translateY(-10px);
box-shadow:0 10px 25px rgba(37,99,235,.25);
}

.career-card img{
width:70px;
height:70px;
margin-bottom:20px;
}

.career-card h3{
margin-bottom:15px;
color:#0F172A;
}

.career-card p{
font-size:15px;
line-height:25px;
color:#666;
margin-bottom:20px;
}

.career-card a{
display:inline-block;
padding:10px 20px;
background:#2563EB;
color:white;
text-decoration:none;
border-radius:8px;
transition:.3s;
}

.career-card a:hover{
background:#1D4ED8;
}
.company{
padding:80px;
background:#F8FAFC;
text-align:center;
}

.company h2{
font-size:42px;
color:#0F172A;
margin-bottom:15px;
}

.company-text{
font-size:18px;
color:#666;
margin-bottom:50px;
}

.company-container{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:25px;
}

.company-card{
background:white;
padding:25px;
border-radius:18px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.4s;
}

.company-card:hover{
transform:translateY(-10px);
box-shadow:0 10px 20px rgba(37,99,235,.25);
}

.company-card img{
width:90px;
height:90px;
margin-bottom:20px;
}

.company-card h3{
margin-bottom:10px;
color:#0F172A;
}

.company-card p{
color:#666;
margin-bottom:8px;
}

.company-card h4{
color:#2563EB;
margin-bottom:20px;
}

.company-card a{
display:inline-block;
padding:10px 22px;
background:#2563EB;
color:white;
text-decoration:none;
border-radius:8px;
}

.company-card a:hover{
background:#1D4ED8;
}

.blog{
padding:80px;
background:#ffffff;
text-align:center;
}

.blog h2{
font-size:42px;
color:#0F172A;
margin-bottom:15px;
}

.blog-text{
font-size:18px;
color:#666;
margin-bottom:50px;
}

.blog-container{
display:flex;
justify-content:center;
gap:30px;
flex-wrap:wrap;
}

.blog-card{
width:350px;
background:white;
border-radius:18px;
overflow:hidden;
box-shadow:0 5px 15px rgba(0,0,0,.12);
transition:.4s;
}

.blog-card:hover{
transform:translateY(-10px);
box-shadow:0 10px 25px rgba(37,99,235,.25);
}

.blog-card img{
width:100%;
height:220px;
object-fit:cover;
}

.blog-card h3{
padding:20px 20px 10px;
color:#0F172A;
}

.blog-card p{
padding:0 20px 20px;
color:#666;
line-height:25px;
}

.blog-card a{
display:inline-block;
margin-bottom:25px;
padding:12px 25px;
background:#2563EB;
color:white;
text-decoration:none;
border-radius:8px;
}

.blog-card a:hover{
background:#1D4ED8;
}


.roadmap{
padding:80px;
background:#F8FAFC;
text-align:center;
}

.roadmap h2{
font-size:42px;
color:#0F172A;
margin-bottom:15px;
}

.roadmap-text{
font-size:18px;
color:#666;
margin-bottom:50px;
}

.roadmap-container{
display:flex;
justify-content:center;
align-items:center;
flex-wrap:wrap;
gap:15px;
}

.step{
width:200px;
background:white;
padding:25px;
border-radius:18px;
box-shadow:0 5px 15px rgba(0,0,0,.12);
transition:.3s;
}

.step:hover{
transform:translateY(-8px);
box-shadow:0 10px 25px rgba(37,99,235,.25);
}

.step img{
width:70px;
height:70px;
margin-bottom:15px;
}

.step h3{
color:#2563EB;
margin-bottom:8px;
}

.step h4{
margin-bottom:12px;
color:#0F172A;
}

.step p{
font-size:15px;
line-height:24px;
color:#666;
}

.arrow{
font-size:35px;
color:#2563EB;
font-weight:bold;
}


.statistics{
padding:80px;
background:#ffffff;
text-align:center;
}

.statistics h2{
font-size:42px;
color:#0F172A;
margin-bottom:15px;
}

.statistics-text{
font-size:18px;
color:#666;
margin-bottom:50px;
}

.statistics-container{
display:flex;
justify-content:center;
flex-wrap:wrap;
gap:25px;
}

.stat-card{
width:220px;
background:#F8FAFC;
padding:30px;
border-radius:18px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.3s;
}

.stat-card:hover{
background:#2563EB;
color:white;
transform:translateY(-10px);
}

.stat-card img{
width:65px;
height:65px;
margin-bottom:20px;
}

.stat-card h3{
font-size:34px;
margin-bottom:10px;
color:#2563EB;
}

.stat-card:hover h3,
.stat-card:hover p{
color:white;
}

.stat-card p{
font-size:16px;
color:#555;
}


.faq{
padding:80px;
background:#F8FAFC;
text-align:center;
}

.faq h2{
font-size:42px;
color:#0F172A;
margin-bottom:15px;
}

.faq-text{
font-size:18px;
color:#666;
margin-bottom:40px;
}

.faq-container{
width:80%;
margin:auto;
}

details{
background:white;
margin-bottom:18px;
padding:18px 25px;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
text-align:left;
}

summary{
font-size:18px;
font-weight:bold;
cursor:pointer;
color:#2563EB;
}

details p{
margin-top:15px;
line-height:28px;
color:#555;
}



.testimonial,
.newsletter,
.contact{
padding:80px;
text-align:center;
}

.testimonial-container{
display:flex;
justify-content:center;
gap:25px;
flex-wrap:wrap;
}

.testimonial-card{
width:300px;
padding:25px;
background:white;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

.testimonial-card img{
width:90px;
height:90px;
border-radius:50%;
margin-bottom:15px;
}

.newsletter input{
width:350px;
padding:15px;
border:1px solid #ccc;
border-radius:8px;
}

.newsletter button{
padding:15px 25px;
background:#2563EB;
color:white;
border:none;
border-radius:8px;
margin-left:10px;
cursor:pointer;
}

.contact-box{
display:flex;
justify-content:space-around;
flex-wrap:wrap;
margin-top:40px;
}

.contact form input,
.contact form textarea{
width:350px;
padding:12px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:8px;
display:block;
}

.contact form textarea{
height:120px;
resize:none;
}

.contact button{
padding:12px 25px;
background:#2563EB;
color:white;
border:none;
border-radius:8px;
cursor:pointer;
}

footer{
background:#0F172A;
color:white;
padding:50px;
margin-top:50px;
}

.footer-container{
display:flex;
justify-content:space-around;
flex-wrap:wrap;
}

.footer-container a{
display:block;
color:white;
text-decoration:none;
margin-top:10px;
}

.copy{
text-align:center;
margin-top:20px;
}
</style>

</head>

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

<div class="left">

<h1>Build Your <span>Dream Career</span></h1>

<p>
Discover the right career path, build a professional resume,
prepare for interviews and explore top companies with NEXT STEP.
</p>

<div class="search-box">

<i class="fa-solid fa-magnifying-glass"></i>

<input type="text" placeholder="Search Career, Company or Skill">

<button>Search</button>

</div>

<div class="hero-btn">

<a href="#">Explore Career</a>

<a href="#">Resume Builder</a>

</div>

</div>

<div class="right">

<img src="images/student.png" alt="Career">

<div class="box1">
<h3>500+</h3>
<p>Top Companies</p>
</div>

<div class="box2">
<h3>10,000+</h3>
<p>Students</p>
</div>

<div class="box3">
<h3>95%</h3>
<p>Success Rate</p>
</div>

</div>

</section>

<section class="services">

<h2>Our Career Services</h2>

<marquee behavior="scroll" direction="left" scrollamount="8">

<div class="service-container">

<div class="card">

<img src="image/career guidence.webp">

<h3>Career Guidance</h3>

<p>Choose the best career according to your skills.</p>

</div>

<div class="card">

<img src="image/top comapnies.webp">

<h3>Top Companies</h3>

<p>Explore company details, salary and eligibility.</p>

</div>

<div class="card">

<img src="image/resum bulider.jpg">

<h3>Resume Builder</h3>

<p>Create a professional ATS friendly resume.</p>

</div>

<div class="card">

<img src="image/interview practice.png">

<h3>Interview Practice</h3>

<p>Practice HR and Technical interview questions.</p>

</div>

<div class="card">

<img src="image/career to roadmap.jpg">

<h3>Career Roadmap</h3>

<p>Follow step-by-step roadmap to achieve your goal.</p>

</div>

<div class="card">

<img src="image/skill development.webp">

<h3>Skill Development</h3>

<p>Improve technical and soft skills.</p>

</div>

</div>

</marquee>

</section>
<section class="why">

<div class="why-image">

<img src="images/why.png" alt="Career Guidance">

</div>

<div class="why-content">

<h2>Why Choose <span>NEXT STEP?</span></h2>

<p>
NEXT STEP is a complete career guidance platform that helps students
choose the right career, build professional resumes, prepare for
interviews and explore top companies.
</p>

<div class="why-box">

<div class="info">

<h3>Career Guidance</h3>

<p>Choose the right career based on your interests and skills.</p>

</div>

<div class="info">

<h3>Top Companies</h3>

<p>Know company details, salary, hiring process and eligibility.</p>

</div>

<div class="info">

<h3>Resume Builder</h3>

<p>Create a professional resume in just a few minutes.</p>

</div>

<div class="info">

<h3>Interview Practice</h3>

<p>Practice HR, Technical and Aptitude questions.</p>

</div>

<div class="info">

<h3>Career Roadmap</h3>

<p>Follow a step-by-step learning roadmap.</p>

</div>

<div class="info">

<h3>Placement Support</h3>

<p>Prepare for placements with confidence.</p>

</div>

</div>

</div>

</section>

<section class="career">

<h2>Career Categories</h2>

<p class="career-text">
Choose your dream career and explore detailed guidance.
</p>

<div class="career-container">

<div class="career-card">

<img src="image/software Development.jpg">

<h3>Software Development</h3>

<p>Become a Full Stack, Frontend or Backend Developer.</p>

<a href="#">Know More</a>

</div>

<div class="career-card">

<img src="image/Artificial Intelligence.jpg">

<h3>Artificial Intelligence</h3>

<p>Learn AI, Machine Learning and Deep Learning.</p>

<a href="#">Know More</a>

</div>

<div class="career-card">

<img src="image/Cyber Security.jpg">

<h3>Cyber Security</h3>

<p>Protect systems and networks from cyber attacks.</p>

<a href="#">Know More</a>

</div>

<div class="career-card">

<img src="image/Data science.jpg">

<h3>Data Science</h3>

<p>Analyze data and build intelligent solutions.</p>

<a href="#">Know More</a>

</div>

<div class="career-card">

<img src="image/Cloud Computing.jpg">

<h3>Cloud Computing</h3>

<p>Learn AWS, Azure and Google Cloud.</p>

<a href="#">Know More</a>

</div>

<div class="career-card">

<img src="image/Mechanical Engineering.jpg">

<h3>Mechanical Engineering</h3>

<p>Design and develop mechanical systems.</p>

<a href="#">Know More</a>

</div>

<div class="career-card">

<img src="image/civil eng.jpg">

<h3>Civil Engineering</h3>

<p>Plan and construct buildings and infrastructure.</p>

<a href="#">Know More</a>

</div>

<div class="career-card">

<img src="image/Government Jobs.jpg">

<h3>Government Jobs</h3>

<p>Prepare for UPSC, MPSC, SSC and Banking exams.</p>

<a href="#">Know More</a>

</div>

</div>

</section>

<section class="company">

<h2>Top Hiring Companies</h2>

<p class="company-text">
Explore top companies and prepare for your dream job.
</p>

<div class="company-container">

<div class="company-card">

<img src="image/Google.jpg">

<h3>Google</h3>

<p>Average Package</p>

<h4>₹18 LPA</h4>

<a href="#">View Details</a>

</div>

<div class="company-card">

<img src="image/Microsoft.png">

<h3>Microsoft</h3>

<p>Average Package</p>

<h4>₹16 LPA</h4>

<a href="#">View Details</a>

</div>

<div class="company-card">

<img src="image/Amazon.png">

<h3>Amazon</h3>

<p>Average Package</p>

<h4>₹15 LPA</h4>

<a href="#">View Details</a>

</div>

<div class="company-card">

<img src="image/TCS.jpg">

<h3>TCS</h3>

<p>Average Package</p>

<h4>₹4 LPA</h4>

<a href="#">View Details</a>

</div>

<div class="company-card">

<img src="image/infosys.jpg">

<h3>Infosys</h3>

<p>Average Package</p>

<h4>₹4.5 LPA</h4>

<a href="#">View Details</a>

</div>

<div class="company-card">

<img src="image/Wipro.jpg">

<h3>Wipro</h3>

<p>Average Package</p>

<h4>₹4.2 LPA</h4>

<a href="#">View Details</a>

</div>

<div class="company-card">

<img src="image/Capgemini.png">

<h3>Capgemini</h3>

<p>Average Package</p>

<h4>₹5.5 LPA</h4>

<a href="#">View Details</a>

</div>

<div class="company-card">

<img src="image/Accenture.png">

<h3>Accenture</h3>

<p>Average Package</p>

<h4>₹6 LPA</h4>

<a href="#">View Details</a>

</div>

</div>

</section>

<section class="blog">

<h2>Latest Career Tips & Blogs</h2>

<p class="blog-text">
Read career guidance articles and improve your placement preparation.
</p>

<div class="blog-container">

<div class="blog-card">

<img src="image/blog1.jpg">

<h3>How to Crack Your First Interview</h3>

<p>
Learn how to answer HR questions confidently and make a great first impression.
</p>

<a href="#">Read More</a>

</div>

<div class="blog-card">

<img src="images/blog2.jpg">

<h3>Build an ATS Friendly Resume</h3>

<p>
Create a resume that increases your chances of getting shortlisted.
</p>

<a href="#">Read More</a>

</div>

<div class="blog-card">

<img src="images/blog3.jpg">

<h3>Top 10 In-Demand IT Skills</h3>

<p>
Explore the latest technical skills required by top companies.
</p>

<a href="#">Read More</a>

</div>

</div>

</section>


<section class="roadmap">

<h2>Your Career Roadmap</h2>

<p class="roadmap-text">
Follow these simple steps to achieve your dream career.
</p>

<div class="roadmap-container">

<div class="step">
<img src="icons/career.png">
<h3>Step 1</h3>
<h4>Choose Career</h4>
<p>Select the career that matches your interests.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="icons/skills.png">
<h3>Step 2</h3>
<h4>Learn Skills</h4>
<p>Develop technical and soft skills.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="images/resume builder.jpg">
<h3>Step 3</h3>
<h4>Build Resume</h4>
<p>Create a professional ATS-friendly resume.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="images/interview practice.png">
<h3>Step 4</h3>
<h4>Interview Practice</h4>
<p>Prepare HR and technical interview questions.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="images/company.png">
<h3>Step 5</h3>
<h4>Get Placed</h4>
<p>Apply to companies and start your career.</p>
</div>

</div>

</section>


<section class="statistics">

<h2>Our Achievements</h2>

<p class="statistics-text">
Helping students build successful careers with guidance and opportunities.
</p>

<div class="statistics-container">

<div class="stat-card">

<img src="icons/student.png">

<h3>10,000+</h3>

<p>Students Guided</p>

</div>

<div class="stat-card">

<img src="icons/company.png">

<h3>500+</h3>

<p>Top Companies</p>

</div>

<div class="stat-card">

<img src="icons/resume.png">

<h3>8,000+</h3>

<p>Resumes Created</p>

</div>

<div class="stat-card">

<img src="icons/job.png">

<h3>2,500+</h3>

<p>Placements</p>

</div>

<div class="stat-card">

<img src="icons/star.png">

<h3>95%</h3>

<p>Student Satisfaction</p>

</div>

</div>

</section>


<section class="faq">

<h2>Frequently Asked Questions</h2>

<p class="faq-text">
Find answers to the most commonly asked career-related questions.
</p>

<div class="faq-container">

<details>
<summary>How do I choose the right career?</summary>
<p>
Explore different career paths based on your interests, skills and future goals.
</p>
</details>

<details>
<summary>Can I create my resume on this website?</summary>
<p>
Yes. NEXT STEP provides a professional Resume Builder to create an ATS-friendly resume.
</p>
</details>

<details>
<summary>How can I prepare for interviews?</summary>
<p>
Practice HR questions, technical questions and aptitude tests using our Interview Practice section.
</p>
</details>

<details>
<summary>Can I find company information?</summary>
<p>
Yes. You can explore company profiles, eligibility, hiring process, interview rounds and salary details.
</p>
</details>

<details>
<summary>Is this website free for students?</summary>
<p>
Yes. All career guidance features are available free for students.
</p>
</details>

</div>

</section>

<section class="testimonial">

<h2>What Students Say</h2>

<div class="testimonial-container">

<div class="testimonial-card">

<img src="images/student1.jpg">

<h3>Prajwali Kamble</h3>

<h4>Computer Engineering Student</h4>

<p>
"This website helped me choose the right career path and prepare for placements."
</p>

</div>

<div class="testimonial-card">

<img src="images/student2.jpg">

<h3>Gautami Pharane</h3>

<h4>Computer Engineering Student</h4>

<p>
"The Resume Builder and Company Information sections are really useful."
</p>

</div>

<div class="testimonial-card">

<img src="images/student3.jpg">

<h3>Arju jamadhar</h3>

<h4>Diploma Student</h4>

<p>
"Interview Practice gave me confidence before my campus interview."
</p>

</div>

</div>

</section>


<section class="newsletter">

<h2>Stay Updated</h2>

<p>Get Career Tips and Job Updates.</p>

<input type="email" placeholder="Enter Your Email">

<button>Subscribe</button>

</section>


<section class="contact">

<h2>Contact Us</h2>

<div class="contact-box">

<div>

<h3>Address</h3>

<p>Kolhapur, Maharashtra</p>

<h3>Email</h3>

<p>nextstep@gmail.com</p>

<h3>Phone</h3>

<p>+91 9876543210</p>

</div>

<div>

<form>

<input type="text" placeholder="Your Name">

<input type="email" placeholder="Your Email">

<textarea placeholder="Message"></textarea>

<button>Send Message</button>

</form>

</div>

</div>

</section>


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

<a href="#">Home</a>

<a href="#">Career</a>

<a href="company.php">Company</a>

<a href="#">Resume Builder</a>

<a href="#">Interview Practice</a>

<a href="#">Feedback</a>

</div>

<div>

<h3>Contact</h3>

<p>Email : nextstep@gmail.com</p>

<p>Phone : +91 9876543210</p>

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