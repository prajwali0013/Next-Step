<!DOCTYPE html>
<html>
<head>

<title>Aptitude Test</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eef5ff;
}

header{
background:#0B3D91;
color:white;
padding:20px;
text-align:center;
}

.container{
width:80%;
margin:30px auto;
}

.question{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:10px;
box-shadow:0 5px 10px rgba(0,0,0,.1);
}

.question h3{
color:#0B3D91;
margin-bottom:15px;
}

label{
display:block;
padding:8px;
font-size:17px;
}

button{
background:#0B3D91;
color:white;
padding:12px 30px;
border:none;
border-radius:8px;
font-size:18px;
cursor:pointer;
}

button:hover{
background:#1257d6;
}

.result{
background:white;
padding:20px;
border-radius:10px;
margin-top:20px;
font-size:22px;
font-weight:bold;
color:#0B3D91;
text-align:center;
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

</head>

<body>
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
<header>

<h1>Aptitude Test</h1>

</header>

<div class="container">

<form>

<div class="question">

<h3>1. 20 + 15 = ?</h3>

<label><input type="radio" name="q1">30</label>
<label><input type="radio" name="q1">35</label>
<label><input type="radio" name="q1">40</label>
<label><input type="radio" name="q1">45</label>

</div>

<div class="question">

<h3>2. Percentage of 50 out of 100?</h3>

<label><input type="radio" name="q2">25%</label>
<label><input type="radio" name="q2">50%</label>
<label><input type="radio" name="q2">75%</label>
<label><input type="radio" name="q2">100%</label>

</div>

<div class="question">

<h3>3. Which number is Prime?</h3>

<label><input type="radio" name="q3">21</label>
<label><input type="radio" name="q3">27</label>
<label><input type="radio" name="q3">29</label>
<label><input type="radio" name="q3">35</label>

</div>

<div class="question">

<h3>4. 12 × 8 = ?</h3>

<label><input type="radio" name="q4">86</label>
<label><input type="radio" name="q4">96</label>
<label><input type="radio" name="q4">106</label>
<label><input type="radio" name="q4">88</label>

</div>

<div class="question">

<h3>5. Time taken to travel 120 km at 60 km/hr?</h3>

<label><input type="radio" name="q5">1 hr</label>
<label><input type="radio" name="q5">2 hr</label>
<label><input type="radio" name="q5">3 hr</label>
<label><input type="radio" name="q5">4 hr</label>

</div>

<center>

<button type="submit">
Submit Test
</button>

</center>

</form>

<div class="result">

Your Score will be displayed here using PHP.

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