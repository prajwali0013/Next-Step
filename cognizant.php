<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Cognizant Company</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#eef6ff;
    color:#333;
}

/* Header */

header{
    background:#003b73;
    color:white;
    text-align:center;
    padding:30px;
}

header h1{
    font-size:40px;
}

header p{
    margin-top:10px;
}

/* Container */

.container{
    width:90%;
    max-width:1100px;
    margin:30px auto;
}

/* Company Header */

.company-header{
    background:white;
    text-align:center;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    margin-bottom:25px;
}

.company-header img{
    width:150px;
    height:120px;
    object-fit:contain;
}

.company-header h2{
    color:#003b73;
    margin-top:15px;
    font-size:30px;
}

.company-header p{
    margin-top:10px;
}

/* Information Cards */

.info-card{
    background:white;
    padding:25px;
    margin-bottom:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.12);
}

.info-card h2{
    color:#003b73;
    margin-bottom:15px;
    border-bottom:3px solid #0074cc;
    padding-bottom:10px;
}

.info-card p{
    line-height:1.7;
}

/* Founder / Leadership */

.owner{
    display:flex;
    align-items:center;
    gap:25px;
}

.owner img{
    width:120px;
    height:120px;
    object-fit:contain;
    border-radius:50%;
    background:#eef6ff;
    padding:10px;
}

.owner h3{
    color:#003b73;
    margin-bottom:10px;
}

/* Details */

.details{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.detail-box{
    background:#eef6ff;
    padding:20px;
    border-radius:10px;
}

.detail-box h3{
    color:#003b73;
    margin-bottom:8px;
}

/* Branches */

.branch-list{
    line-height:2;
    padding-left:25px;
}

/* Salary Table */

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#003b73;
    color:white;
    padding:15px;
}

table td{
    padding:15px;
    border:1px solid #ddd;
    text-align:center;
}

table tr:nth-child(even){
    background:#eef6ff;
}

/* Interview */

.interview{
    text-align:center;
}

.interview p{
    margin-top:10px;
}

.interview a{
    display:inline-block;
    background:#0074cc;
    color:white;
    text-decoration:none;
    padding:15px 30px;
    border-radius:30px;
    font-size:18px;
    font-weight:bold;
    margin-top:15px;
}

.interview a:hover{
    background:#003b73;
}

/* Back */

.back{
    text-align:center;
    margin:30px 0 40px;
}

.back a{
    text-decoration:none;
    color:#003b73;
    font-weight:bold;
}

/* Mobile */

@media(max-width:700px){

    .details{
        grid-template-columns:1fr;
    }

    .owner{
        flex-direction:column;
        text-align:center;
    }

    table{
        font-size:13px;
    }

    table th,
    table td{
        padding:10px;
    }

    header h1{
        font-size:30px;
    }

}

</style>

</head>

<body>

<!-- Header -->

<header>

<h1>Cognizant Technology Solutions</h1>

<p>Company Information & Career Guide</p>

</header>

<div class="container">

<!-- Company Logo -->

<div class="company-header">

<img
src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/cognizant-icon.png"
alt="Cognizant Logo"

>

<h2>Cognizant Technology Solutions</h2>

<p>
Information Technology • Consulting • Digital Transformation • Artificial Intelligence
</p>

</div>

<!-- Company History -->

<div class="info-card">

<h2>📖 Company History</h2>

<p>

Cognizant Technology Solutions is a leading multinational
information technology services and consulting company.

Cognizant was established in 1994 and provides technology
and business services to organizations around the world.

The company provides services in software development,
cloud computing, artificial intelligence, data analytics,
cybersecurity and digital transformation.

Cognizant serves clients across various industries and
has a strong presence in the global IT services market.

</p>

</div>

<!-- Founder / Leadership -->

<div class="info-card">

<h2>👤 Founder / Leadership</h2>

<div class="owner">

<img
src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/cognizant-icon.png"
alt="Cognizant Logo"

>

<div>

<h3>Ravi Kumar S</h3>

<p>
Chief Executive Officer of Cognizant.
</p>

<p>
Cognizant is a global IT services and consulting company
serving clients across different industries.
</p>

</div>

</div>

</div>

<!-- Company Details -->

<div class="info-card">

<h2>🏢 Company Details</h2>

<div class="details">

<div class="detail-box">

<h3>📅 Established Date</h3>

<p>1994</p>

</div>

<div class="detail-box">

<h3>👥 Employees</h3>

<p>More than 350,000 employees worldwide</p>

</div>

<div class="detail-box">

<h3>🌍 Headquarters</h3>

<p>Teaneck, New Jersey, USA</p>

</div>

<div class="detail-box">

<h3>💻 Industry</h3>

<p>Information Technology & Consulting</p>

</div>

</div>

</div>

<!-- Branches -->

<div class="info-card">

<h2>🌍 Branches & Offices</h2>

<p>
Cognizant has offices and delivery centers
in many countries around the world.
</p>

<ul class="branch-list">

<li>🇺🇸 United States</li>

<li>🇮🇳 India</li>

<li>🇬🇧 United Kingdom</li>

<li>🇨🇦 Canada</li>

<li>🇦🇺 Australia</li>

<li>🇸🇬 Singapore</li>

<li>🇯🇵 Japan</li>

</ul>

</div>

<!-- Major Services -->

<div class="info-card">

<h2>💼 Major Services</h2>

<ul class="branch-list">

<li>Software Development</li>

<li>Cloud Computing</li>

<li>Artificial Intelligence</li>

<li>Data Analytics</li>

<li>Cybersecurity</li>

<li>Digital Transformation</li>

<li>IT Consulting</li>

</ul>

</div>

<!-- Salary -->

<div class="info-card">

<h2>💰 Job Profile Wise Salary</h2>

<table>

<tr>

<th>Job Profile</th>

<th>Experience</th>

<th>Average Salary</th>

</tr>

<tr>

<td>Programmer Analyst</td>

<td>0-2 Years</td>

<td>₹3 - ₹6 LPA</td>

</tr>

<tr>

<td>Software Developer</td>

<td>0-2 Years</td>

<td>₹4 - ₹8 LPA</td>

</tr>

<tr>

<td>Web Developer</td>

<td>0-2 Years</td>

<td>₹3 - ₹7 LPA</td>

</tr>

<tr>

<td>Data Analyst</td>

<td>0-2 Years</td>

<td>₹4 - ₹8 LPA</td>

</tr>

<tr>

<td>Software Tester</td>

<td>0-2 Years</td>

<td>₹3 - ₹7 LPA</td>

</tr>

<tr>

<td>Cloud Engineer</td>

<td>1-3 Years</td>

<td>₹5 - ₹12 LPA</td>

</tr>

</table>

</div>

<!-- Interview Questions -->

<div class="info-card interview">

<h2>🎯 Frequently Asked Interview Questions</h2>

<p>

Prepare for your Cognizant interview with our
Top 50 Important Interview Questions.

</p>

<a href="interview_questions.php">

View Top 50 Interview Questions →

</a>

</div>

<!-- Back -->

<div class="back">

<a href="companies.php">

← Back to All Companies

</a>

</div>

</div>
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