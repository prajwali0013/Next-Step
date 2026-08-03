<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Amazon Company</title>

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

/* Founder */

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

/* Interview */

.interview{
    text-align:center;
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

}

</style>

</head>

<body>


<!-- Header -->

<header>

<h1>Amazon</h1>

<p>Company Information & Career Guide</p>

</header>


<div class="container">


<!-- Company Logo -->

<div class="company-header">

<img src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/amazon-icon.png" alt="Amazon Logo">            <h3>Amazon</h3>

<h2>Amazon</h2>

<p>
E-Commerce • Cloud Computing • Technology • Artificial Intelligence
</p>

</div>


<!-- History -->

<div class="info-card">

<h2>📖 Company History</h2>

<p>

Amazon was founded by Jeff Bezos in 1994.

The company started as an online bookstore and
later expanded into a large global e-commerce platform.

Today Amazon provides online shopping, cloud computing
through Amazon Web Services (AWS), digital streaming,
artificial intelligence and many other technology services.

Amazon is one of the world's largest technology and
e-commerce companies.

</p>

</div>


<!-- Founder -->

<div class="info-card">

<h2>👤 Founder / Owner</h2>

<div class="owner">

<img src="https://icons.iconarchive.com/icons/simpleicons-team/simple/128/amazon-icon.png" alt="Amazon Logo">            <h3>Amazon</h3>

<div>

<h3>Jeff Bezos</h3>

<p>
Founder of Amazon
</p>

<p>
Jeff Bezos founded Amazon in 1994.
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

<p>July 5, 1994</p>

</div>


<div class="detail-box">

<h3>👥 Employees</h3>

<p>More than 1,500,000 employees worldwide</p>

</div>


<div class="detail-box">

<h3>🌍 Headquarters</h3>

<p>Seattle, Washington, USA</p>

</div>


<div class="detail-box">

<h3>🛒 Main Services</h3>

<p>
Amazon Shopping, AWS, Prime Video, Alexa and Kindle
</p>

</div>


</div>

</div>


<!-- Branches -->

<div class="info-card">

<h2>🌍 Branches & Offices</h2>

<p>
Amazon has offices, fulfillment centers and operations
in many countries.
</p>

<ul class="