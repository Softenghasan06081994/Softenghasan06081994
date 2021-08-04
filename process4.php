<!DOCTYPE html>
<html>
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
         body{
               font-family: "Source Sans Pro", sans-serif;
         }
         h2{
             background-color: forestgreen;
             text-align: center;
             padding: 10px;
             color: white;
             width: 350px;
             height: 50;
         }
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  margin-top: 7px;
  margin-bottom: 15px;
  margin-right: 15px;
  margin-left: 15px;

}
th, td {
  padding: 8px 25px;
  text-align: left;
}
input[type="text"]
{
  width:200px;
  height:35px;
  margin-right:2px;
  border-radius:3px;
  border:1px solid green;
  padding:5px;
}
input[type="button"]
{
  background:none;
  color:white;
  border:none;
  width:110px;
  height:35px;
  border-radius:3px;
  background-color:green;
  font-size:16px;
}

.btn-primary {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


.btn-add {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  position: absolute; right: 25%;
}


</style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>


<?php


$pinfoid = $_GET['pid'];
if(isset($_POST["submit"]))
{

 //Including config file.
include 'config.php';

$Position = $_POST["Position"];

 foreach($Position as $key => $value){
 //   echo $key . " : " . $value . "<br>";
$pinfoid = $_POST["pinfoid"][$key];
$Position = $_POST["Position"][$key];
$Designation = $_POST["Designation"][$key];
$frm = $_POST["frm"][$key];
$T = $_POST["T"][$key];
echo $sql0 = "INSERT INTO experience (pinfoid,Position,Designation,frm,T) VALUES ('$pinfoid','$Position','$Designation','$frm','$T')";
mysqli_query($connection,$sql0);
echo " Added Successfully ";
 header('Location: process4.php?pid='.$pinfoid);
}

}

 ?>

  <h1 align="center" style="color: brown"> Creative Engineering Consultants</h1>
  <h1 align="center" style="color: red">EMPLOYMENT APPLICATION FORM</h1>
  <h2> Thank You, Your application have been received. please send your CV to HR@cec.org.pk with subject POS <?php echo $pinfoid; ?> </h2>
  
  
</body>
</html>
