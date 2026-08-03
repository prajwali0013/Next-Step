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

</style>

</head>

<body>

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

</body>
</html>