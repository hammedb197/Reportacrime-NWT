<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Report Form</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="ray/js/jquery-3.2.1.min.js"></script> 
<script src="ray/js/bootstrap.min.js"> </script>

    <!-- Custom styles for this template -->
    <link href="css/reportacrime.min.css" rel="stylesheet">
<style>
    #mainNav {background-color:black;}
    </style>
  </head>

  <body> 

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html">ReportACrime.ng</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">Back To ReportACrime </a>
            </li>
        
          </ul>
        </div>
      </div>
    </nav>
<?php
 
// Create connection
$conn = new mysql('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Your report has been successfully saved<br>";
 
// this will select the Database reportacrime
mysqli_select_db($conn,"reportacrime");
 
echo "\n Thanks for getting in touch with ReportAcrime.ng";
 
// create INSERT query
 
 
$sql="INSERT INTO reported (rname,Email,PhoneNumber,Anonymos,crimeaddress,crimecity,crimestate,crimecategory,crimetime,crimedate,datereported,Crimedescription,criminalname,criminalage,criminaladdress,criminalphone,criminalemail,witnessname,witnessphone,witnessemail,witnessaddress,witnessname2,witnessphone2,witnessemail2,witnessaddress2,witnessname3,witnessphone3,witnessemail3,witnessaddress3,audioevidence1,audioevidence2,audioevidence3,videoevidence1,videoevidence2,videoevidence3,pictureevidence1,pictureevidence2,pictureevidence3) VALUES ('$_POST[rname]','$_POST[Email]', '$_POST[PhoneNumber]','$_POST[Anonymos]','$_POST[crimeaddress]','$_POST[crimecity]','$_POST[crimestate]','$_POST[crimecategory]','$_POST[crimetime]','$_POST[crimedate]','$_POST[datereported]','$_POST[Crimedescription]','$_POST[criminalname]','$_POST[criminalage]','$_POST[criminaladdress]','$_POST[criminalphone]','$_POST[criminalemail]','$_POST[witnessname]','$_POST[witnessphone]','$_POST[witnessemail]','$_POST[witnessaddress]','$_POST[witnessname2]','$_POST[witnessphone2]','$_POST[witnessemail2]','$_POST[witnessaddress2]','$_POST[witnessname3]','$_POST[witnessphone3]','$_POST[witnessemail3]','$_POST[witnessaddress3]','$_POST[audioevidence1]','$_POST[audioevidence2]','$_POST[audioevidence3]','$_POST[videoevidence1]','$_POST[videoevidence2]','$_POST[videoevidence3]','$_POST[pictureevidence1]','$_POST[pictureevidence2]','$_POST[pictureevidence3]')";
if ($conn->query($sql) === TRUE) {
    echo "We'll get back to you";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
?>
<br>
<br>
<br>
<br>
<br>
<h4>Your report has been successfully saved, Thanks for getting in touch with ReportAcrime.ng</h4>
<h3>We'll get back to you once your case has been reviewed</h3>
<br>
<br>
<br>
<br>
<a href="index.html">Go back to Reportacrime.ng</a>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span class="copyright">Copyright © ReportAcrime.ng is an initiative of Curly Braces{Group4}, Nigerian Women Techsters(NWT). All rights reserved 2018</span>
          </div>
          <div class="col-md-12">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>