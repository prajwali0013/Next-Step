<?php

require 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

include "connection.php";

$sql="SELECT * FROM personal_info ORDER BY id DESC LIMIT 1";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$html='

<h1 style="text-align:center;color:#0B3D91;">Resume</h1>

<hr>

<h2>'.$row['full_name'].'</h2>

<p><b>Email :</b> '.$row['email'].'</p>

<p><b>Mobile :</b> '.$row['mobile'].'</p>

<p><b>Address :</b> '.$row['address'].'</p>

<h3>Career Objective</h3>

<p>'.$row['objective'].'</p>

<h3>Education</h3>

<p>'.$row['college'].'</p>

<p>'.$row['course'].'</p>

<p>'.$row['branch'].'</p>

<p>'.$row['passing_year'].'</p>

<p>'.$row['percentage'].'</p>

<h3>Skills</h3>

<p>'.$row['technical_skills'].'</p>

<p>'.$row['soft_skills'].'</p>

<h3>Projects</h3>

<p>'.$row['project_title'].'</p>

<p>'.$row['technology'].'</p>

<p>'.$row['project_description'].'</p>

<h3>Experience</h3>

<p>'.$row['company'].'</p>

<p>'.$row['job_role'].'</p>

<p>'.$row['duration'].'</p>

<p>'.$row['experience'].'</p>

<h3>Certificates</h3>

<p>'.$row['certificate_name'].'</p>

<h3>Achievements</h3>

<p>'.$row['achievement'].'</p>

<h3>Languages</h3>

<p>'.$row['language'].'</p>

<h3>Hobbies</h3>

<p>'.$row['hobbies'].'</p>

';

$dompdf=new Dompdf();

$dompdf->loadHtml($html);

$dompdf->setPaper('A4','portrait');

$dompdf->render();

$dompdf->stream("Resume.pdf",array("Attachment"=>1));

?>