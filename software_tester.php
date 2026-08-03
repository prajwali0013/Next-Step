<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Software Tester Interview Questions</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI",Tahoma,Geneva,Verdana,sans-serif;
}

body{
    background:linear-gradient(135deg,#edf4ff,#dbeafe,#f8fbff);
    color:#1e293b;
    min-height:100vh;
}

/* Header */

header{
    background:linear-gradient(135deg,#0f172a,#1d4ed8,#2563eb);
    color:#fff;
    text-align:center;
    padding:60px 20px;
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

header h1{
    font-size:42px;
    font-weight:700;
    letter-spacing:1px;
    margin-bottom:12px;
}

header p{
    font-size:17px;
    opacity:.9;
}

/* Main */

.container{
    width:90%;
    max-width:1300px;
    margin:60px auto;
}

.container h2{
    text-align:center;
    font-size:34px;
    color:#0f172a;
    margin-bottom:45px;
    position:relative;
}

.container h2::after{
    content:"";
    width:80px;
    height:4px;
    background:#2563eb;
    display:block;
    margin:12px auto;
    border-radius:20px;
}

/* Company Cards */

.company-container{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
}

.company-card{
    background:rgba(255,255,255,.85);
    backdrop-filter:blur(15px);
    border-radius:20px;
    padding:35px 25px;
    text-align:center;
    border:1px solid rgba(255,255,255,.5);
    box-shadow:0 15px 35px rgba(0,0,0,.08);
    transition:.4s ease;
    overflow:hidden;
    position:relative;
}

.company-card::before{
    content:"";
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:linear-gradient(90deg,#2563eb,#38bdf8);
}

.company-card:hover{
    transform:translateY(-12px);
    box-shadow:0 25px 45px rgba(37,99,235,.25);
}

.company-card img{
    width:100px;
    height:100px;
    object-fit:contain;
    margin-bottom:20px;
    transition:.4s;
}

.company-card:hover img{
    transform:scale(1.08);
}

.company-card h3{
    font-size:24px;
    color:#0f172a;
    margin-bottom:12px;
}

.company-card p{
    font-size:15px;
    color:#64748b;
    line-height:1.7;
    margin-bottom:25px;
}

/* Button */

.btn{
    display:inline-block;
    text-decoration:none;
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:#fff;
    padding:12px 28px;
    border-radius:50px;
    font-size:15px;
    font-weight:600;
    transition:.3s;
    box-shadow:0 8px 20px rgba(37,99,235,.3);
}

.btn:hover{
    background:linear-gradient(135deg,#1e40af,#1d4ed8);
    transform:translateY(-3px);
    box-shadow:0 12px 25px rgba(37,99,235,.45);
}

/* Responsive */

@media(max-width:992px){
    header h1{
        font-size:34px;
    }

    .container h2{
        font-size:30px;
    }
}

@media(max-width:576px){

    header{
        padding:45px 15px;
    }

    header h1{
        font-size:28px;
    }

    header p{
        font-size:15px;
    }

    .company-card{
        padding:28px 20px;
    }

    .company-card h3{
        font-size:22px;
    }

    .btn{
        width:100%;
    }
}

</style>

</head>

<body>


<header>

<h1>ðŸ§ª Software Tester Interview</h1>

<p>Top 50 Important Interview Questions</p>

</header>


<div class="container">


<div class="title">

<h2>Top 50 Software Testing Interview Questions</h2>

<p>
Important questions for Freshers and Experienced Candidates
</p>

</div>


<?php

$questions = [

"What is Software Testing?",

"What is a Software Tester?",

"What are the responsibilities of a Software Tester?",

"Why is Software Testing important?",

"What is the difference between Verification and Validation?",

"What is Quality Assurance (QA)?",

"What