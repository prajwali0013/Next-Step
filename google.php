<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Google Company</title>

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


/* Main Container */

.container{
    width:90%;
    max-width:1100px;
    margin:30px auto;
}


/* Company Logo Section */

.company-header{
    background:white;
    text-align:center;
    padding:30px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.15);
    margin-bottom:25px;
}

.company-header img{
    width:130px;
    height:130px;
    object-fit:contain;
}

.company-header h2{
    color:#003b73;
    margin-top:15px;
    font-size:30px;
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


/* Owner */

.owner{
    display:flex;
    align-items:center;
    gap:25px;
}

.owner img{
    width:120px;
    height:120px;
    object-fit:cover;
    border-radius:50%;
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
    padding-left:20px;
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


/* Interview Button */

.interview{
    text-align:center;
    margin:30px 0;
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
}

.interview a:hover{
    background:#003b73;
}


/* Back Button */

.back{
    text-align:center;
    margin-bottom:40px;
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

}

</style>

</head>


<body>


<!-- Header -->

<header>

<h1>Google</h1>

<p>Company Information & Career Guide</p>

</header>


<div class="container">


<!-- Company Logo -->

<div class="company-header">

<img src="https://cdn.simpleicons.org/google">

<h2>Google</h2>

<p>
Technology • Search • Cloud • Artificial Intelligence
</p>

</div>


<!-- History -->

<div class="info-card">

<h2>📖 Company History</h2>

<p>

Google was founded by Larry Page and Sergey Brin
while they were students at Stanford University.

Google started as a search engine project and
later became one of the world's leading technology companies.

Today Google provides many products and services
including Search, YouTube, Android, Google Maps,
Google Cloud and Artificial Intelligence technologies.

</p>

</div>


<!-- Owner / Founder -->

<div class="info-card">

<h2>👤 Founder / Owner</h2>

<div class="owner">

<img src="https://cdn.simpleicons.org/google">

<div>

<h3>Sergey Brin</h3>

<p>
Co-founder of Google
</p>

<p>
Google was founded by Larry Page and Sergey Brin.
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

<p>September 4, 1998</p>

</div>


<div class="detail-box">

<h3>👥 Employees</h3>

<p>More than 180,000 employees worldwide</p>

</div>


<div class="detail-box">

<h3>🌍 Headquarters</h3>

<p>Mountain View, California, USA</p>

</div>


<div class="detail-box">

<h3>🌐 Website Users</h3>

<p>Billions of users worldwide use Google services.</p>

</div>


</div>

</div>


<!-- Branches -->

<div class="info-card">

<h2>🌍 Branches & Offices</h2>

<p>Google has offices and locations around the world.</p>

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


<!-- Job Profiles & Salary -->

<div class="info-card">

<h2>💰 Job Profile Wise Salary</h2>

<table>

<tr>

<th>Job Profile</th>

<th>Experience</th>

<th>Average Salary</th>

</tr>


<tr>

<td>Software Developer</td>

<td>0-2 Years</td>

<td>₹8 - ₹15 LPA</td>

</tr>


<tr>

<td>Web Developer</td>

<td>0-2 Years</td>

<td>₹5 - ₹10 LPA</td>

</tr>


<tr>

<td>Data Analyst</td>

<td>0-2 Years</td>

<td>₹6 - ₹12 LPA</td>

</tr>


<tr>

<td>Software Tester</td>

<td>0-2 Years</td>

<td>₹5 - ₹10 LPA</td>

</tr>


<tr>

<td>Data Scientist</td>

<td>1-3 Years</td>

<td>₹10 - ₹20 LPA</td>

</tr>


<tr>

<td>Cloud Engineer</td>

<td>1-3 Years</td>

<td>₹8 - ₹18 LPA</td>

</tr>


</table>

</div>


<!-- Interview Questions -->

<div class="info-card interview">

<h2>🎯 Frequently Asked Interview Questions</h2>

<p>

Prepare for your interview with our
Top 50 Important Interview Questions.

</p>

<br>

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


</body>

</html>