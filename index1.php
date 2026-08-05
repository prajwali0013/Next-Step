<!DOCTYPE html>
<html>

<head>

<title>NEXT STEP</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<style>
/* ===========================
   GOOGLE FONT
=========================== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

/* ===========================
   GLOBAL
=========================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
    scroll-behavior:smooth;
}

body{
    background:#f4f8fc;
    color:#1e293b;
    overflow-x:hidden;
}

/* Scrollbar */

::-webkit-scrollbar{
    width:10px;
}

::-webkit-scrollbar-track{
    background:#eef2f7;
}

::-webkit-scrollbar-thumb{
    background:#2563eb;
    border-radius:20px;
}

::-webkit-scrollbar-thumb:hover{
    background:#1d4ed8;
}

img{
    max-width:100%;
    display:block;
}

section{
    padding:90px 8%;
}

/* ===========================
HEADER
=========================== */
/*==========================
   PREMIUM HEADER
==========================*/

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

/* ===========================
HERO
=========================== */

.hero{

    min-height:100vh;

    display:flex;

    justify-content:space-between;

    align-items:center;

    gap:60px;

    background:
    linear-gradient(135deg,#eff6ff,#ffffff,#dbeafe);

    padding-top:130px;
}

.left{

    width:50%;
}

.left h1{

    font-size:68px;

    line-height:1.2;

    color:#0f172a;

    margin-bottom:25px;
}

.left h1 span{

    color:#2563eb;
}

.left p{

    font-size:19px;

    color:#475569;

    line-height:34px;

    margin-bottom:35px;
}

/* ===========================
SEARCH BOX
=========================== */

.search-box{

    display:flex;

    align-items:center;

    background:white;

    border-radius:60px;

    overflow:hidden;

    box-shadow:0 15px 40px rgba(37,99,235,.18);

    border:2px solid transparent;

    transition:.35s;
}

.search-box:hover{

    border-color:#2563eb;
}

.search-box i{

    font-size:22px;

    color:#2563eb;

    padding:0 22px;
}

.search-box input{

    flex:1;

    border:none;

    outline:none;

    font-size:17px;

    padding:20px 10px;
}

.search-box button{

    padding:20px 35px;

    border:none;

    background:linear-gradient(135deg,#2563eb,#1d4ed8);

    color:white;

    font-size:16px;

    font-weight:600;

    cursor:pointer;

    transition:.35s;
}

.search-box button:hover{

    background:linear-gradient(135deg,#1d4ed8,#0f4ad8);
}

/* ===========================
BUTTONS
=========================== */

.hero-btn{

    margin-top:40px;
}

.hero-btn a{

    display:inline-block;

    text-decoration:none;

    padding:16px 36px;

    border-radius:50px;

    background:linear-gradient(135deg,#2563eb,#1d4ed8);

    color:white;

    font-weight:600;

    margin-right:15px;

    transition:.35s;

    box-shadow:0 15px 30px rgba(37,99,235,.25);
}

.hero-btn a:hover{

    transform:translateY(-6px);

    box-shadow:0 25px 40px rgba(37,99,235,.35);
}

/* ===========================
RIGHT IMAGE
=========================== */

.right{

    width:45%;

    position:relative;
}

.right img{

    width:100%;

    border-radius:25px;

    animation:float 4s ease-in-out infinite;

    filter:drop-shadow(0 25px 45px rgba(0,0,0,.18));
}

@keyframes float{

0%{

transform:translateY(0px);
}

50%{

transform:translateY(-15px);
}

100%{

transform:translateY(0px);
}

}

/* ===========================
FLOATING BOX
=========================== */

.box1,
.box2,
.box3{

    position:absolute;

    background:white;

    padding:20px;

    border-radius:18px;

    box-shadow:0 15px 35px rgba(0,0,0,.12);

    transition:.35s;
}

.box1:hover,
.box2:hover,
.box3:hover{

    transform:scale(1.08);
}

.box1{

    top:20px;

    left:-20px;
}

.box2{

    top:45%;

    right:-25px;
}

.box3{

    bottom:0;

    left:-15px;
}

.box1 h3,
.box2 h3,
.box3 h3{

    color:#2563eb;

    font-size:30px;
}

.box1 p,
.box2 p,
.box3 p{

    color:#64748b;
}
/*=====================================
        SECTION TITLE
======================================*/

section h2{
    font-size:48px;
    text-align:center;
    color:#0f172a;
    font-weight:700;
    margin-bottom:15px;
}

section h2 span{
    color:#2563eb;
}

section .sub-title,
.career-text,
.company-text,
.blog-text,
.roadmap-text,
.statistics-text,
.faq-text{
    text-align:center;
    color:#64748b;
    font-size:18px;
    line-height:30px;
    margin-bottom:60px;
}

/*=====================================
        SERVICES
======================================*/

.services{
    background:#ffffff;
}

.service-container{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:30px;
    justify-content:center;
}

.card{

    background:#ffffff;

    border-radius:25px;

    padding:35px 30px;

    text-align:center;

    transition:.4s;

    border:1px solid #e5e7eb;

    box-shadow:
    0 10px 25px rgba(0,0,0,.05);

    overflow:hidden;

    position:relative;
}

.card::before{

    content:"";

    position:absolute;

    left:0;

    top:0;

    width:100%;

    height:6px;

    background:linear-gradient(90deg,#2563eb,#60a5fa);
}

.card:hover{

    transform:translateY(-15px);

    box-shadow:
    0 25px 45px rgba(37,99,235,.18);
}

.card img{

    width:90px;

    height:90px;

    object-fit:contain;

    margin:auto;

    margin-bottom:25px;

    transition:.4s;
}

.card:hover img{

    transform:rotate(10deg) scale(1.08);
}

.card h3{

    color:#0f172a;

    margin-bottom:15px;

    font-size:23px;
}

.card p{

    color:#64748b;

    line-height:28px;
}

/*=====================================
        WHY CHOOSE
======================================*/

.why{

    display:grid;

    grid-template-columns:1fr 1fr;

    gap:70px;

    align-items:center;

    background:#f8fbff;
}

.why-image img{

    border-radius:30px;

    box-shadow:
    0 20px 45px rgba(0,0,0,.12);
}

.why-content h2{

    text-align:left;

    margin-bottom:20px;
}

.why-content p{

    color:#64748b;

    line-height:32px;

    margin-bottom:35px;

    font-size:18px;
}

.why-box{

    display:grid;

    grid-template-columns:repeat(2,1fr);

    gap:25px;
}

.info{

    background:#ffffff;

    border-radius:20px;

    padding:25px;

    transition:.35s;

    border-left:5px solid #2563eb;

    box-shadow:
    0 12px 30px rgba(0,0,0,.06);
}

.info:hover{

    transform:translateY(-10px);

    background:#2563eb;
}

.info h3{

    color:#2563eb;

    margin-bottom:12px;

    transition:.3s;
}

.info p{

    color:#64748b;

    line-height:26px;

    transition:.3s;
}

.info:hover h3,
.info:hover p{

    color:#fff;
}

/*=====================================
        CAREER
======================================*/

.career{

    background:#ffffff;
}

.career-container{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));

    gap:35px;
}

.career-card{

    background:#ffffff;

    border-radius:25px;

    padding:35px;

    text-align:center;

    transition:.4s;

    border:1px solid #edf1f7;

    box-shadow:
    0 15px 35px rgba(0,0,0,.05);

    position:relative;

    overflow:hidden;
}

.career-card::before{

    content:"";

    position:absolute;

    width:100%;

    height:100%;

    left:0;

    top:-100%;

    background:linear-gradient(
    rgba(37,99,235,.05),
    rgba(37,99,235,.18));

    transition:.4s;
}

.career-card:hover::before{

    top:0;
}

.career-card:hover{

    transform:translateY(-15px);

    box-shadow:
    0 25px 45px rgba(37,99,235,.18);
}

.career-card img{

    width:95px;

    height:95px;

    object-fit:contain;

    margin:auto;

    margin-bottom:25px;

    transition:.4s;
}

.career-card:hover img{

    transform:scale(1.1) rotate(6deg);
}

.career-card h3{

    color:#0f172a;

    margin-bottom:15px;

    font-size:24px;
}

.career-card p{

    color:#64748b;

    line-height:28px;

    margin-bottom:30px;
}

.career-card a{

    display:inline-block;

    text-decoration:none;

    background:linear-gradient(135deg,#2563eb,#1d4ed8);

    color:#fff;

    padding:14px 30px;

    border-radius:50px;

    font-weight:600;

    transition:.35s;
}

.career-card a:hover{

    transform:scale(1.08);

    box-shadow:
    0 15px 35px rgba(37,99,235,.30);
}

/*====================================
        COMPANY SECTION
====================================*/

.company{
    background:#f8fbff;
}

.company-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:35px;
}

.company-card{

    background:#fff;

    border-radius:25px;

    padding:35px;

    text-align:center;

    transition:.4s;

    position:relative;

    overflow:hidden;

    box-shadow:0 15px 35px rgba(0,0,0,.06);

    border:1px solid #edf2f7;
}

.company-card::before{

    content:"";

    position:absolute;

    width:100%;
    height:5px;

    left:0;
    top:0;

    background:linear-gradient(90deg,#2563eb,#60a5fa);
}

.company-card:hover{

    transform:translateY(-15px);

    box-shadow:0 25px 50px rgba(37,99,235,.18);
}

.company-card img{

    width:100px;
    height:100px;

    object-fit:contain;

    margin:auto;

    margin-bottom:25px;

    transition:.4s;
}

.company-card:hover img{

    transform:scale(1.08) rotate(5deg);
}

.company-card h3{

    font-size:24px;

    margin-bottom:12px;

    color:#0f172a;
}

.company-card p{

    color:#64748b;

    margin-bottom:10px;
}

.company-card h4{

    color:#2563eb;

    font-size:28px;

    margin-bottom:25px;
}

.company-card a{

    display:inline-block;

    text-decoration:none;

    padding:14px 28px;

    border-radius:40px;

    background:linear-gradient(135deg,#2563eb,#1d4ed8);

    color:#fff;

    transition:.35s;
}

.company-card a:hover{

    transform:scale(1.05);
}

/*====================================
        BLOG
====================================*/

.blog{

    background:#ffffff;
}

.blog-container{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(340px,1fr));

    gap:40px;
}

.blog-card{

    background:#fff;

    border-radius:25px;

    overflow:hidden;

    transition:.4s;

    box-shadow:0 18px 40px rgba(0,0,0,.08);
}

.blog-card:hover{

    transform:translateY(-15px);
}

.blog-card img{

    width:100%;

    height:230px;

    object-fit:cover;

    transition:.4s;
}

.blog-card:hover img{

    transform:scale(1.08);
}

.blog-card h3{

    padding:25px;

    padding-bottom:10px;

    color:#0f172a;
}

.blog-card p{

    padding:0 25px;

    line-height:30px;

    color:#64748b;
}

.blog-card a{

    display:inline-block;

    margin:25px;

    text-decoration:none;

    background:#2563eb;

    color:#fff;

    padding:12px 25px;

    border-radius:40px;

    transition:.35s;
}

.blog-card a:hover{

    background:#1d4ed8;
}

/*====================================
        ROADMAP
====================================*/

.roadmap{

    background:linear-gradient(135deg,#eef6ff,#ffffff);
}

.roadmap-container{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:30px;

    justify-content:center;

    align-items:center;
}

.step{

    

    background:#fff;

    border-radius:22px;

    padding:30px;

    text-align:center;

    transition:.35s;

    box-shadow:0 15px 35px rgba(0,0,0,.08);


    width:100%;

    max-width:260px;

    margin:auto;
}
}

.step:hover{

    transform:translateY(-12px);

    box-shadow:0 25px 45px rgba(37,99,235,.18);
}

.step img{

    width:90px;

    height:90px;

    object-fit:contain;

    margin:auto;

    margin-bottom:20px;
}

.step h3{

    color:#2563eb;

    margin-bottom:10px;
}

.step h4{

    color:#0f172a;

    margin-bottom:15px;
}

.step p{

    color:#64748b;

    line-height:28px;
}

.arrow{
    display:none;
}

/* Floating Animation */

.step:nth-child(even){

    animation:updown 4s infinite;
}

@keyframes updown{

    0%{
        transform:translateY(0);
    }

    50%{
        transform:translateY(-12px);
    }

    100%{
        transform:translateY(0);
    }
}

/*====================================
        STATISTICS
====================================*/

.statistics{
    background:#ffffff;
}

.statistics-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:30px;
    margin-top:50px;
}

.stat-card{

    background:#fff;

    border-radius:22px;

    padding:35px;

    text-align:center;

    transition:.4s;

    box-shadow:0 15px 35px rgba(0,0,0,.08);

    border:1px solid #edf2f7;
}

.stat-card:hover{

    transform:translateY(-12px);

    background:linear-gradient(135deg,#2563eb,#1d4ed8);

    color:#fff;
}

.stat-card img{

    width:70px;

    height:70px;

    margin:auto;

    margin-bottom:20px;
}

.stat-card h3{

    font-size:38px;

    color:#2563eb;

    margin-bottom:10px;

    transition:.3s;
}

.stat-card p{

    color:#64748b;

    transition:.3s;
}

.stat-card:hover h3,
.stat-card:hover p{

    color:#fff;
}

/*====================================
        FAQ
====================================*/

.faq{

    background:#f8fbff;
}

.faq-container{

    width:85%;

    margin:auto;
}

details{

    background:#fff;

    margin-bottom:20px;

    border-radius:15px;

    box-shadow:0 12px 30px rgba(0,0,0,.06);

    overflow:hidden;

    transition:.3s;
}

details:hover{

    transform:translateY(-4px);
}

summary{

    padding:20px 25px;

    cursor:pointer;

    font-size:18px;

    font-weight:600;

    color:#2563eb;

    list-style:none;
}

summary::-webkit-details-marker{

    display:none;
}

details p{

    padding:0 25px 25px;

    line-height:30px;

    color:#64748b;
}

/*====================================
        TESTIMONIAL
====================================*/

.testimonial{

    background:#ffffff;
}

.testimonial-container{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));

    gap:35px;
}

.testimonial-card{

    background:#fff;

    border-radius:25px;

    padding:35px;

    text-align:center;

    transition:.35s;

    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.testimonial-card:hover{

    transform:translateY(-12px);

    box-shadow:0 25px 45px rgba(37,99,235,.18);
}

.testimonial-card img{

    width:110px;

    height:110px;

    border-radius:50%;

    margin:auto;

    border:5px solid #2563eb;

    margin-bottom:20px;
}

.testimonial-card h3{

    color:#0f172a;

    margin-bottom:8px;
}

.testimonial-card h4{

    color:#2563eb;

    margin-bottom:18px;
}

.testimonial-card p{

    color:#64748b;

    line-height:30px;

    font-style:italic;
}

/*====================================
        NEWSLETTER
====================================*/

.newsletter{

    background:linear-gradient(135deg,#2563eb,#1d4ed8);

    color:#fff;

    border-radius:30px;

    width:90%;

    margin:70px auto;
}

.newsletter h2{

    color:#fff;
}

.newsletter input{

    width:380px;

    padding:18px;

    border:none;

    border-radius:50px;

    outline:none;

    font-size:16px;
}

.newsletter button{

    padding:18px 35px;

    border:none;

    border-radius:50px;

    background:#fff;

    color:#2563eb;

    font-weight:600;

    cursor:pointer;

    margin-left:10px;

    transition:.3s;
}

.newsletter button:hover{

    transform:scale(1.05);
}

/*====================================
        CONTACT
====================================*/

.contact{

    background:#f8fbff;
}

.contact-box{

    display:grid;

    grid-template-columns:1fr 1fr;

    gap:50px;

    margin-top:40px;
}

.contact form{

    background:#fff;

    padding:35px;

    border-radius:25px;

    box-shadow:0 15px 35px rgba(0,0,0,.08);
}

.contact input,
.contact textarea{

    width:100%;

    padding:16px;

    margin-bottom:20px;

    border:1px solid #dbe4ef;

    border-radius:12px;

    outline:none;

    transition:.3s;

    font-size:16px;
}

.contact input:focus,
.contact textarea:focus{

    border-color:#2563eb;

    box-shadow:0 0 0 4px rgba(37,99,235,.15);
}

.contact textarea{

    height:150px;

    resize:none;
}

.contact button{

    background:linear-gradient(135deg,#2563eb,#1d4ed8);

    color:#fff;

    border:none;

    padding:15px 35px;

    border-radius:50px;

    cursor:pointer;

    font-size:16px;

    transition:.35s;
}

.contact button:hover{

    transform:translateY(-5px);

    box-shadow:0 15px 35px rgba(37,99,235,.30);
}
/*====================================
        PREMIUM FOOTER
====================================*/

footer{

    background:linear-gradient(135deg,#0f172a,#1e293b);

    color:#ffffff;

    padding:80px 8% 30px;
}

.footer-container{

    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));

    gap:50px;

    margin-bottom:40px;
}

.footer-container h2,
.footer-container h3{

    margin-bottom:20px;

    color:#ffffff;
}

.footer-container p{

    color:#cbd5e1;

    line-height:28px;
}

.footer-container a{

    display:block;

    color:#cbd5e1;

    text-decoration:none;

    margin-bottom:12px;

    transition:.3s;
}

.footer-container a:hover{

    color:#60a5fa;

    transform:translateX(8px);
}

/*====================================
        SOCIAL ICONS
====================================*/

.social{

    display:flex;

    gap:15px;

    margin-top:25px;
}

.social a{

    width:48px;

    height:48px;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    background:rgba(255,255,255,.08);

    color:#fff;

    font-size:20px;

    transition:.35s;
}

.social a:hover{

    background:#2563eb;

    transform:translateY(-6px) rotate(360deg);
}

/*====================================
        COPYRIGHT
====================================*/

.copy{

    border-top:1px solid rgba(255,255,255,.15);

    margin-top:30px;

    padding-top:25px;

    text-align:center;

    color:#cbd5e1;

    font-size:15px;
}

/*====================================
        SCROLL TO TOP
====================================*/

.top-btn{

    position:fixed;

    right:25px;

    bottom:25px;

    width:55px;

    height:55px;

    background:#2563eb;

    color:#fff;

    border-radius:50%;

    display:flex;

    justify-content:center;

    align-items:center;

    text-decoration:none;

    font-size:22px;

    box-shadow:0 12px 30px rgba(37,99,235,.35);

    transition:.35s;

    z-index:999;
}

.top-btn:hover{

    transform:translateY(-8px);

    background:#1d4ed8;
}

/*====================================
        FADE ANIMATION
====================================*/

@keyframes fadeUp{

    from{

        opacity:0;

        transform:translateY(40px);
    }

    to{

        opacity:1;

        transform:translateY(0);
    }
}

.card,
.career-card,
.company-card,
.blog-card,
.step,
.stat-card,
.testimonial-card,
.info{

    animation:fadeUp .8s ease;
}

/*====================================
        RESPONSIVE
====================================*/

@media(max-width:992px){

header{

    flex-direction:column;

    padding:20px;
}

nav ul{

    flex-wrap:wrap;

    justify-content:center;

    gap:20px;

    margin-top:20px;
}

.hero{

    flex-direction:column;

    text-align:center;
}

.left,
.right{

    width:100%;
}

.left h1{

    font-size:50px;
}

.search-box{

    width:100%;
}

.why{

    grid-template-columns:1fr;
}

.contact-box{

    grid-template-columns:1fr;
}

.newsletter input{

    width:100%;

    margin-bottom:15px;
}

.newsletter button{

    width:100%;

    margin-left:0;
}

.box1,
.box2,
.box3{

    display:none;
}

}

@media(max-width:768px){

section{

    padding:70px 20px;
}

section h2{

    font-size:34px;
}

.left h1{

    font-size:40px;
}

.left p{

    font-size:16px;
}

.search-box{

    flex-direction:column;

    border-radius:20px;
}

.search-box input{

    width:100%;

    text-align:center;
}

.search-box button{

    width:100%;
}

.arrow{

    display:none;
}

}

@media(max-width:576px){

.logo h2{

    font-size:24px;
}

.logo p{

    font-size:12px;
}

.hero{

    padding-top:150px;
}

.hero-btn a{

    display:block;

    margin:15px auto;

    width:220px;

    text-align:center;
}

.newsletter{

    width:95%;
}

.footer-container{

    text-align:center;
}

.social{

    justify-content:center;
}

}

/*====================================
        HOVER EFFECTS
====================================*/

img{

    transition:.4s;
}

img:hover{

    transform:scale(1.03);
}

button{

    transition:.35s;
}

button:hover{

    transform:translateY(-3px);
}

html{

    scroll-behavior:smooth;
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


</div>

</div>

<div class="right">

<img src="image/logo.jpeg" alt="Career">

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

<p>Choose the best career </p>

</div>

<div class="card">

<img src="image/top comapnies.webp">

<h3>Top Companies</h3>

<p>Explore company details.</p>

</div>

<div class="card">

<img src="image/resum bulider.jpg">

<h3>Resume Builder</h3>

<p>Create a professional friendly </p>

</div>

<div class="card">

<img src="image/interview practice.png">

<h3>Interview Practice</h3>

<p>Practice interview questions.</p>

</div>

<div class="card">

<img src="image/career to roadmap.jpg">

<h3>Career Roadmap</h3>

<p>Follow step-by-step roadmap.</p>

</div>

<div class="card">

<img src="image/skill development.webp">

<h3>Skill Development</h3>

<p>Improve technical skills.</p>

</div>

</div>

</marquee>

</section>
<section class="why">

<div class="why-image">

<img src="image/career.png" alt="Career Guidance">

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

<a href="career.php">Know More</a>

</div>

<div class="career-card">

<img src="image/Artificial Intelligence.jpg">

<h3>Artificial Intelligence</h3>

<p>Learn AI, Machine Learning and Deep Learning.</p>

<a href="career.php">Know More</a>

</div>

<div class="career-card">

<img src="image/Cyber Security.jpg">

<h3>Cyber Security</h3>

<p>Protect systems and networks from cyber attacks.</p>

<a href="career.php">Know More</a>

</div>

<div class="career-card">

<img src="image/Data science.jpg">

<h3>Data Science</h3>

<p>Analyze data and build intelligent solutions.</p>

<a href="career.php">Know More</a>

</div>

<div class="career-card">

<img src="image/Cloud.jpg">

<h3>Cloud Computing</h3>

<p>Learn AWS, Azure and Google Cloud.</p>

<a href="career.php">Know More</a>

</div>

<div class="career-card">

<img src="image/Mechanical Engineering.jpg">

<h3>Mechanical Engineering</h3>

<p>Design and develop mechanical systems.</p>

<a href="career.php">Know More</a>

</div>

<div class="career-card">

<img src="image/civil eng.jpg">

<h3>Civil Engineering</h3>

<p>Plan and construct buildings and infrastructure.</p>

<a href="career.php">Know More</a>

</div>

<div class="career-card">

<img src="image/Government Jobs.jpg">

<h3>Government Jobs</h3>

<p>Prepare for UPSC, MPSC, SSC and Banking exams.</p>

<a href="career.php">Know More</a>

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

<a href="company.php">View Details</a>

</div>

<div class="company-card">

<img src="image/microsoft.jpg">

<h3>Microsoft</h3>

<p>Average Package</p>

<h4>₹16 LPA</h4>

<a href="company.php">View Details</a>

</div>

<div class="company-card">

<img src="image/Amazon.png">

<h3>Amazon</h3>

<p>Average Package</p>

<h4>₹15 LPA</h4>

<a href="company.php">View Details</a>

</div>

<div class="company-card">

<img src="image/TCS.jpg">

<h3>TCS</h3>

<p>Average Package</p>

<h4>₹4 LPA</h4>

<a href="company.php">View Details</a>

</div>

<div class="company-card">

<img src="image/infosys.jpg">

<h3>Infosys</h3>

<p>Average Package</p>

<h4>₹4.5 LPA</h4>

<a href="company.php">View Details</a>

</div>

<div class="company-card">

<img src="image/Wipro.jpg">

<h3>Wipro</h3>

<p>Average Package</p>

<h4>₹4.2 LPA</h4>

<a href="company.php">View Details</a>

</div>

<div class="company-card">

<img src="image/Capgemini.png">

<h3>Capgemini</h3>

<p>Average Package</p>

<h4>₹5.5 LPA</h4>

<a href="company.php">View Details</a>

</div>

<div class="company-card">

<img src="image/Accenture.png">

<h3>Accenture</h3>

<p>Average Package</p>

<h4>₹6 LPA</h4>

<a href="company.php">View Details</a>

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

<img src="image/how to Crack Your First Interview.jpg">

<h3>How to Crack Your First Interview</h3>

<p>
Learn how to answer HR questions confidently and make a great first impression.
</p>

<a href="career.php">Read More</a>

</div>

<div class="blog-card">

<img src="image/Build an ATS Friendly Resume.jpg">

<h3>Build an ATS Friendly Resume</h3>

<p>
Create a resume that increases your chances of getting shortlisted.
</p>
<a href="resume.php">Read More</a>


</div>

<div class="blog-card">

<img src="image/top comapnies.webp">

<h3>Top 10 In-Demand IT Skills</h3>

<p>
Explore the latest technical skills required by top companies.
</p>

<a href="company.php">Read More</a>

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
<img src="image/step 1.webp">
<h3>Step 1</h3>
<h4>Choose Career</h4>
<p>Select the career that matches your interests.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="image/step 2.jpg">
<h3>Step 2</h3>
<h4>Learn Skills</h4>
<p>Develop technical and soft skills.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="image/step3.avif">
<h3>Step 3</h3>
<h4>Build Resume</h4>
<p>Create a professional ATS-friendly resume.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="image/interview practice.png">
<h3>Step 4</h3>
<h4>Interview Practice</h4>
<p>Prepare HR and technical interview questions.</p>
</div>

<div class="arrow">➜</div>

<div class="step">
<img src="image/step 5.jpg">
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

<img src="image/graduated.png">

<h3>10,000+</h3>

<p>Students Guided</p>

</div>

<div class="stat-card">

<img src="image/workplace.png">

<h3>500+</h3>

<p>Top Companies</p>

</div>

<div class="stat-card">

<img src="image/human-resources.png">

<h3>8,000+</h3>

<p>Resumes Created</p>

</div>

<div class="stat-card">

<img src="image/job-search.png">

<h3>2,500+</h3>

<p>Placements</p>

</div>

<div class="stat-card">

<img src="image/study.png">

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

<img src="image/human.png">


<h3>Prajwali Kamble</h3>

<h4>Computer Engineering Student</h4>

<p>
"This website helped me choose the right career path and prepare for placements."
</p>

</div>

<div class="testimonial-card">

<img src="image/human.png">


<h3>Gautami Pharane</h3>

<h4>Computer Engineering Student</h4>

<p>
"The Resume Builder and Company Information sections are really useful."
</p>

</div>

<div class="testimonial-card">

<img src="image/human.png">

<h3>Arju jamadhar</h3>

<h4>Diploma Student</h4>

<p>
"Interview Practice gave me confidence before my campus interview."
</p>

</div>

</div>

</section>

<center>
<section style="<div style="width:350px; background:#fff; padding:30px; margin:20px auto; border-radius:12px; box-shadow:0 5px 15px rgba(0,0,0,0.2); text-align:center; font-family:Arial,sans-serif;">
    <h2 style="color:#003b73; margin-bottom:15px;"> Stay Updated </h2>
    <p style="color:#555; line-height:1.6;">
       
    </p>
</div>

<p>Get Career Tips and Job Updates.</p><br>

<input type="email" placeholder="Enter Your Email">

<button>Subscribe</button>

</section>


<section class="contact">

<h2 align="center">Contact Us</h2>

<table colspan="20" cellspacing=50 align="center"><tr><th>
<div class="testimonial-card" align="center">

<h3>Address</h3>

<p>Kolhapur, Maharashtra</p>

<h3>Email</h3>

<p>nextstep@gmail.com</p>

<h3>Phone</h3>

<p>+91 9876543210</p>

</div></th><th>

<div>

<form>

<input type="text" placeholder="Your Name">

<input type="email" placeholder="Your Email">

<textarea placeholder="Message"></textarea>

<button>Send Message</button>

</form>

</div></th></tr></table>


</section>


<footer>

<div class="footer-container">

<div>

<h2>NEXT STEP</h2>

<p>
Your Journey to a Successful Career Starts Here.
</p>

</div>

<div align="left">

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