 <?php


 $id = $_POST['password'];
 if(!empty($id)){
 $db = mysqli_connect('localhost','','','')
 or die('Error connecting to MySQL server.');
 
$sql = "SELECT * FROM S_Detail WHERE IndexNo=$id";
$result = mysqli_query($db, $sql);
    

}
 ?>
<?php

if ($result)
 {
  while($row = mysqli_fetch_array($result))
 {

?>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Application</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
       
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
<style> 

    .image{
  background-image: url("lumbini.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
    
}
div.d {
  line-height: 200%;
}



@media print {
  @page {
    size: 330mm 427mm;
    margin: 14mm;
  }
  .container {
    width: 1170px;
  }
}
</style>


</head>
    <body>

<div class="container-fluid">
 <div class = "image">   
  <h5 class="text-center">Lumbini College Colombo 05</h5> 
     <h4 class="text-center"> Application for Advanced Level Admission Registration 2023</h4> 
     <h4 class="text-center"><?php echo $row["Stream"]; ?>  Stream </h4> 
      <h5 class="text-center">Reference Number: <?php echo $row["Reference_no"]; ?>   </h4>
        <div class="form-group"></div>
        <div class="form-group"></div>
        <div class="form-group"></div>
        <h4 class="text-center"><?php echo $row["Name"]; ?></h4>
         <div class="form-group"></div>
        <div class="form-group"></div>
          <div class="form-group"></div>

<p>Subjects you applied:</p>
<p><?php echo $row["Subject"]; ?></p>
<p><?php echo $row["Subject2"]; ?></p>
<p><?php echo $row["Subject3"]; ?></p>
<hr>
<div class="d">
<div class = "form-group">
    
<h4 class="text-center">Personal Details</h4>
<div class="form-group"></div>
<div class="form-group"></div>
<div class="form-group"></div>
<div class="col-sm-3"><b>Name with Initials</b></div>
<div class="col-sm-3"><?php echo $row["Name_with_Initials"]; ?></div> 
<div class="col-sm-3"><b>Gender</b></div>
<div class="col-sm-3"><?php echo $row["Gender"]; ?></div>
<div class="col-sm-3"><b>Birthday</b></div>
<div class="col-sm-3"><?php echo $row["Birthday"]; ?></div>
<div class="col-sm-3"><b>NIC Number</b></div>
<div class="col-sm-3"><?php echo $row["NIC"]; ?></div>
</div>
</div>
<hr>
<br><br>
 <div class ="d">
<div class = "form-group">
    <div class="row">
 <div class="col-sm-12">
     
<h4 class="text-center">Contact Details</h4> </div></div></div>  
<div class="form-group"></div>
<div class="form-group"></div>
<div class="form-group"></div>

<div class ="form-group>">
   
   
<div class="col-sm-3"><b>Guardian's Name</b></div>
<div class="col-sm-9"><?php echo $row["Guardian_Name"]; ?></div> 
</div> 
<br>

<div class = "form-group">
<div class="col-sm-3"><b>Contact Numbers</b></div>
<div class="col-sm-2"><?php echo $row["ResidentialNo"]; ?></div>
<div class="col-sm-2"><?php echo $row["Mobile1"]; ?></div>
<div class="col-sm-5"><?php echo $row["Mobile2"]; ?></div>
</div>
<br>
<div class="form-gorup">
<div class="col-sm-3"><b>Personal Address</b></div>
<div class="col-sm-5"><?php echo $row["Address1"]; ?></div>
<div class="col-sm-2"><?php echo $row["Address2"]; ?></div>
<div class="col-sm-2"><?php echo $row["CIty"]; ?></div>
</div>
<br>
<div class="form-gorup">
<div class="col-sm-3"><b>E-mail</b></div>
<div class="col-sm-9"><?php echo $row["E_mail"]; ?></div>
</div>
<br>
<div class="form-group">
<div class="col-sm-3"><b>Distance to the school (km)</b> </div>
<div class="col-sm-3"><?php echo $row["Distance"]; ?></div>
<div class="col-sm-3"><b>Travel Mode</b></div>
<div class="col-sm-3"><?php echo $row["Transport"]; ?></div>
</div>
</div>
<hr> <br> <br>
<div class="form-group">
    <div class="d">
        <p>&nbsp;&nbsp;</p>
    </div>
</div>
<div class = "form-group">
<h4 class="text-center">Ordinary Level Qualifications</h4> </div>
<div class="form-group">
<p style="text-align:center"><?php echo $row["School"]; ?></p>
<p style="text-align:center"><?php echo $row["IndexNo"]; ?></p>
<p style="text-align:center"><?php echo $row["Medium"]; ?> Medium</p>
</div>
<div class="form-group">
    <div class="d">
    <div class="col-sm-4">Religion</div>
    <div class="col-sm-2"><?php echo $row["Religion"]; ?></div>
    <div class="col-sm-4">Sinhala Language & Lit.</div>
    <div class="col-sm-2"><?php echo $row["Sinhala"]; ?></div>
    <div class="col-sm-4">English Language</div>
    <div class="col-sm-2"><?php echo $row["English"]; ?></div>
    <div class="col-sm-4">Mathematics</div>
    <div class="col-sm-2"><?php echo $row["Mathematics"]; ?></div>
    <div class="col-sm-4">History</div>
    <div class="col-sm-2"><?php echo $row["History"]; ?></div>
    <div class="col-sm-4">Science</div>
    <div class="col-sm-2"><?php echo $row["Science"]; ?></div>
    <div class="col-sm-4"><?php echo $row["Optional1"]; ?></div>
    <div class="col-sm-2"><?php echo $row["Result1"]; ?></div>
    <div class="col-sm-4"><?php echo $row["Optional2"]; ?></div>
    <div class="col-sm-2"><?php echo $row["Result2"]; ?></div>
    <div class="col-sm-4"><?php echo $row["Optional3"]; ?></div>
    <div class="col-sm-2"><?php echo $row["Result3"]; ?></div>

    </div>        


<div class="form-group">
    <div class="d">
        <p>&nbsp;&nbsp;</p>
    </div>
<div class="form-group">
    <div class="col-sm-12">
     
<h4 class="text-center">Extra Curricular Activities</h4>  
<p>Please mention your Extra Curricular Activities below. </p>
<p>1. ..........................................................................................................................................................................................................</p>
<p>2. ..........................................................................................................................................................................................................</p>
<p>3. ..........................................................................................................................................................................................................</p>
<p>4. ..........................................................................................................................................................................................................</p>
<p>5. ..........................................................................................................................................................................................................</p>
<p>6. ..........................................................................................................................................................................................................</p>
</div></div>
<div class="form-group"></div>
<div class="form-group"></div>
<div class="form-group"></div>
</div>
<br><br>
<div class = "form-group">
<h4 class="text-center">Decleration of the Student</h4> </div>
<div class="form-group">
<p>I hereby declare that the above given particulars by me are true and correct.</p>
<br>
<div class="col-sm-3">
    <p>Date</p>
</div>
<div class="col-sm-3">
    <p>..............................................</p>
</div>
<div class="col-sm-3">
    <p>Signature</p>
</div>
<div class="col-sm-3">
    <p>..............................................</p>
</div>
</div>
</div>
<div>
<button onclick="window.print()">Click here to save as PDF</button>
</div>
</body>
</html>
<?php
 }
} 
?>
