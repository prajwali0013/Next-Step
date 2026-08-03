<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Web Developer Interview Questions</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    background:#eef6ff;
    color:#333;
}

header{
    background:#003b73;
    color:white;
    text-align:center;
    padding:35px 20px;
}

header h1{
    font-size:35px;
}

header p{
    margin-top:10px;
}

.container{
    width:90%;
    max-width:1000px;
    margin:35px auto;
}

.title{
    background:white;
    padding:25px;
    text-align:center;
    border-radius:15px;
    margin-bottom:25px;
    box-shadow:0 5px 15px rgba(0,0,0,0.12);
}

.title h2{
    color:#003b73;
    margin-bottom:10px;
}

.question{
    background:white;
    padding:20px;
    margin-bottom:15px;
    border-radius:12px;
    box-shadow:0 3px 10px rgba(0,0,0,0.10);
}

.question h3{
    color:#0074cc;
    margin-bottom:10px;
}

.question p{
    line-height:1.6;
    color:#555;
}

.back{
    text-align:center;
    margin:40px 0;
}

.back a{
    display:inline-block;
    background:#003b73;
    color:white;
    text-decoration:none;
    padding:12px 25px;
    border-radius:25px;
}

.back a:hover{
    background:#0074cc;
}

</style>

</head>

<body>

<header>

<h1>ðŸŒ Web Developer Interview</h1>

<p>Top 50 Important Interview Questions</p>

</header>

<div class="container">

<div class="title">

<h2>Top 50 Web Developer Interview Questions</h2>

<p>
Important questions for Freshers and Experienced Candidates
</p>

</div>

<?php

$questions = [

"What is Web Development?",

"What is Front-End Development?",

"What is Back-End Development?",

"What is Full Stack Development?",

"What is HTML?",

"What are HTML Tags?",

"What are HTML Attributes?",

"What is HTML5?",

"What is CSS?",

"What are CSS Selectors?",

"What is the CSS Box Model?",

"What is the difference between Class and ID in CSS?",

"What is Responsive Web Design?",

"What are CSS Media Queries?",

"What is Flexbox?",

"What is CSS Grid?",

"What is JavaScript?",

"What are Variables in JavaScript?",

"What are Data Types in JavaScript?",

"What is a Function in JavaScript?",

"What is an Arrow Function?",

"What is DOM?",

"What is Event Handling in JavaScript?",

"What is Event Bubbling?",

"What is JavaScript Hoisting?",

"What is the difference between let, var and const?",

"What is an Array in JavaScript?",

"What is an Object in JavaScript?",

"What is JSON?",

"What is AJAX?",

"What is PHP?",

"What is Server-Side Scripting?",

"What is the difference between Front-End and Back-End?",

"What is MySQL?",

"What is a Database?",

"What is SQL?",

"What is a Primary Key?",

"What is a Foreign Key?",

"What is a SQL JOIN?",

"What is an API?",

"What is REST API?",

"What is HTTP?",

"What is HTTPS?",

"What is the difference between GET and POST?",

"What is a Web Server?",

"What is XAMPP?",

"What is Bootstrap?",

"What is Git?",

"What is GitHub?",

"Tell me about your Web Development project and your role in the project."

];


$i = 1;

foreach($questions as $q){

echo "<div class='question'>";

echo "<h3>Q".$i.". ".$q."</h3>";

echo "<p>
Explain the concept clearly with a suitable example
and mention its practical use in web development.
</p>";

echo "</div>";

$i++;

}

?>

</div>

<div class="back">

<a href="interview_questions.php">

â† Back to Job Profiles

</a>

</div>

</body>

</html>