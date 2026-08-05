<html>
<style>
.interview{
padding:80px;
background:#f5f9ff;
}

.interview h2{
text-align:center;
font-size:40px;
color:#0B3D91;
margin-bottom:40px;
}

.cards{
display:flex;
justify-content:center;
gap:30px;
flex-wrap:wrap;
}

.card{
width:300px;
background:white;
padding:30px;
border-radius:15px;
text-align:center;
box-shadow:0 5px 15px rgba(0,0,0,.1);
transition:.3s;
}

.card:hover{
transform:translateY(-10px);
}

.card i{
font-size:55px;
color:#0B3D91;
margin-bottom:20px;
}

.card h3{
margin-bottom:15px;
color:#0B3D91;
}

.card p{
font-size:15px;
line-height:25px;
color:#555;
margin-bottom:25px;
}

.card a{
background:#0B3D91;
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:8px;
display:inline-block;
}

.card a:hover{
background:#1257d6;
}
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
<section class="interview">

<h2>Interview Practice</h2>

<div class="cards">

<div class="card">

<i class="fa-solid fa-user-tie"></i>

<h3>HR Interview</h3>

<p>
Practice common HR interview questions such as self introduction,
strengths, weaknesses, career goals, teamwork, leadership and salary expectations.
Improve your confidence with detailed answers and tips.
</p>

<a href="hr.php">Start Practice</a>

</div>

<div class="card">

<i class="fa-solid fa-laptop-code"></i>

<h3>Technical Interview</h3>

<p>
Prepare technical questions for C, C++, Java, Python, PHP,
HTML, CSS, JavaScript, SQL, DBMS, Operating System,
Computer Networks and Data Structures.
</p>

<a href="technical.php">Start Practice</a>

</div>

<div class="card">

<i class="fa-solid fa-calculator"></i>

<h3>Aptitude Test</h3>

<p>
Solve aptitude questions including Quantitative Aptitude,
Logical Reasoning, Verbal Ability, Data Interpretation,
Percentage, Profit & Loss and Time & Work.
</p>

<a href="aptitude.php">Start Practice</a>

</div>

<div class="card">

<i class="fa-solid fa-video"></i>

<h3>Mock Interview</h3>

<p>
Take a complete mock interview with HR and Technical questions.
Evaluate your communication skills and interview performance.
</p>

<a href="mock-interview.php">Start Practice</a>

</div>

</div>

</section>
</body>
</html>