<?php

include '../connection.php'; 
require_once __DIR__ . './../vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();



$html=' 
<h2> Report </h2>
<br>
<h5>List of all users</h5>
<table border="1" style="width:100%;border-collapse: collapse;">
 
<tr>
<td style="width:40%;">First Name</td>
<td style="width:40%;">Last name</td>
<td style="width:40%;">Telephone</td>
</tr> 
';
$sel=$conn->query("SELECT * from user");
while ($row=mysqli_fetch_array($sel)) {
      $username=$row['username'];
      $othername=$row['othername'];
      $phone=$row['phone'];
      
      $html .='
      <tr>
        <td style="width:40%;">'.$username.'</td>
        <td style="width:40%;">'.$othername.'</td>
        <td style="width:40%;">'.$phone.'</td>
      </tr>';
}
$html .='
</table>
<br>
<h5>List of all appointments</h5>
<table border="1" style="width:100%;border-collapse: collapse;">
 
<tr>
<td style="width:40%;">Parent Name</td>
<td style="width:40%;">Email</td>
<td style="width:40%;">Messages</td>
</tr> 
';
$sel=$conn->query("SELECT * from appointment");
while ($row=mysqli_fetch_array($sel)) {
      $pname=$row['pname'];
      $pemail=$row['pemail'];
      $messages=$row['messages'];
      
      $html .='
      <tr>
        <td style="width:40%;">'.$pname.'</td>
        <td style="width:40%;">'.$pemail.'</td>
        <td style="width:40%;">'.$messages.'</td>
      </tr>';
}
$html .='
</table>
<br>
<h5>List of Questions
<table border="1" style="width:100%;border-collapse: collapse;">
 
<tr>
<td style="width:40%;">Guardian Name</td>
<td style="width:40%;">Age</td>
<td style="width:40%;">Question</td>
</tr> 
';
$sel=$conn->query("SELECT * from questions");
while ($row=mysqli_fetch_array($sel)) {
      $guardian_name=$row['guardian_name'];
      $guardian_email=$row['guardian_email'];
      $message=$row['message'];
      
      $html .='
      <tr>
        <td style="width:40%;">'.$guardian_name.'</td>
        <td style="width:40%;">'.$guardian_email.'</td>
        <td style="width:40%;">'.$message.'</td>
      </tr>';
}
$html .='
</table>
<p> Benefits of the report </b><br>
A production report represented in the form of a dashboard helps monitor the most critical key performance indicators in one central point of access. It allows  users to track and optimize product quality and is a valuable analytics tool to manage all associated production costs efficiently
</p>

';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>