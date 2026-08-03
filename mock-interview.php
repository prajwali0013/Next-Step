<!DOCTYPE html>
<html>
<head>

<title>Mock Interview</title>

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
max-width:900px;
margin:40px auto;
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 15px rgba(0,0,0,.1);
}

h2{
color:#0B3D91;
margin-bottom:20px;
text-align:center;
}

.timer{
font-size:22px;
font-weight:bold;
color:#d32f2f;
text-align:center;
margin-bottom:25px;
}

.question{
margin-bottom:25px;
padding:20px;
border-left:5px solid #0B3D91;
background:#f8fbff;
border-radius:8px;
}

.question h3{
color:#0B3D91;
margin-bottom:10px;
}

textarea{
width:100%;
height:100px;
padding:10px;
border:1px solid #ccc;
border-radius:8px;
resize:none;
font-size:15px;
}

.buttons{
text-align:center;
margin-top:30px;
}

button{
background:#0B3D91;
color:white;
border:none;
padding:12px 30px;
border-radius:8px;
font-size:16px;
cursor:pointer;
margin:10px;
}

button:hover{
background:#1257d6;
}

</style>

</head>

<body>

<header>

<h1>Mock Interview</h1>

</header>

<div class="container">

<h2>Placement Mock Interview</h2>

<div class="timer">

Time : 30 Minutes

</div>

<div class="question">

<h3>1. Tell me about yourself.</h3>

<textarea placeholder="Write your answer here..."></textarea>

</div>

<div class="question">

<h3>2. Why should we hire you?</h3>

<textarea placeholder="Write your answer here..."></textarea>

</div>

<div class="question">

<h3>3. Explain your final year project.</h3>

<textarea placeholder="Write your answer here..."></textarea>

</div>

<div class="question">

<h3>4. What is PHP?</h3>

<textarea placeholder="Write your answer here..."></textarea>

</div>

<div class="question">

<h3>5. What are your strengths and weaknesses?</h3>

<textarea placeholder="Write your answer here..."></textarea>

</div>

<div class="buttons">

<button>Submit Interview</button>

<button onclick="window.print()">Print Answers</button>

</div>

</div>

</body>
</html>