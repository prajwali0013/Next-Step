<!DOCTYPE html>
<html>
<head>

<title>Technical Interview</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

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
text-align:center;
padding:20px;
}

.container{
width:90%;
margin:40px auto;
}

.question{
background:white;
padding:25px;
margin-bottom:20px;
border-radius:10px;
box-shadow:0 5px 10px rgba(0,0,0,.1);
border-left:6px solid #0B3D91;
}

.question h3{
color:#0B3D91;
margin-bottom:10px;
}

.question h4{
color:#222;
margin:15px 0 10px;
}

.question p{
line-height:28px;
color:#444;
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

<h1>Technical Interview Questions</h1>

</header>

<div class="container">

<div class="question">

<h3>1. What is HTML?</h3>

<h4>Answer</h4>

<p>HTML (HyperText Markup Language) is used to create the structure of web pages.</p>

</div>

<div class="question">

<h3>2. What is CSS?</h3>

<h4>Answer</h4>

<p>CSS (Cascading Style Sheets) is used to design and style HTML pages.</p>

</div>

<div class="question">

<h3>3. What is JavaScript?</h3>

<h4>Answer</h4>

<p>JavaScript is a scripting language used to make web pages interactive.</p>

</div>

<div class="question">

<h3>4. What is PHP?</h3>

<h4>Answer</h4>

<p>PHP is a server-side scripting language used for developing dynamic websites.</p>

</div>

<div class="question">

<h3>5. What is MySQL?</h3>

<h4>Answer</h4>

<p>MySQL is a Relational Database Management System (RDBMS).</p>

</div>

<div class="question">

<h3>6. Difference between GET and POST?</h3>

<h4>Answer</h4>

<p>GET sends data through the URL, while POST sends data securely in the request body.</p>

</div>

<div class="question">

<h3>7. What is DBMS?</h3>

<h4>Answer</h4>

<p>DBMS is software used to store, manage and retrieve data efficiently.</p>

</div>

<div class="question">

<h3>8. What is Primary Key?</h3>

<h4>Answer</h4>

<p>A Primary Key uniquely identifies each record in a database table.</p>

</div>

<div class="question">

<h3>9. What is a Foreign Key?</h3>

<h4>Answer</h4>

<p>A Foreign Key creates a relationship between two database tables.</p>

</div>

<div class="question">

<h3>10. Explain OOP.</h3>

<h4>Answer</h4>

<p>Object-Oriented Programming is based on Class, Object, Inheritance, Polymorphism, Encapsulation and Abstraction.</p>

</div>

<div class="question">

<h3>11. What is an API?</h3>

<h4>Answer</h4>

<p>API (Application Programming Interface) allows two software applications to communicate with each other.</p>

</div>

<div class="question">

<h3>12. What is Git?</h3>

<h4>Answer</h4>

<p>Git is a version control system used to track changes in source code.</p>

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