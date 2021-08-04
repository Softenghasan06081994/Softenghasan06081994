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

  $DegreeDiploma = $_POST["DegreeDiploma"];

   foreach($DegreeDiploma as $key => $value){
   //   echo $key . " : " . $value . "<br>";  
  $pinfoid = $_POST["pinfoid"][$key];
  $DegreeDiploma = $_POST["DegreeDiploma"][$key];
  $Institution = $_POST["Institution"][$key];
  $YearofPassing = $_POST["YearofPassing"][$key];
  $DivGradeGPA = $_POST["DivGradeGPA"][$key];
  echo $sql0 = "INSERT INTO qualification (Pinfoid,DegreeDiploma,Institution,YearofPassing,DivGradeGPA) VALUES ('$pinfoid','$DegreeDiploma','$Institution','$YearofPassing','$DivGradeGPA')";
  mysqli_query($connection,$sql0);

  echo " Added Successfully ";
  echo $sql0 = "select * from qualification where Pinfoid = ".$row['id'];
$query0 = mysqli_query($connection,$sql0);
while ($row0 = mysqli_fetch_array($query0)) {

echo "------Qualification TABLE - ".$row0['ID'];

echo $row0['DegreeDiploma']."<br>";

}

   header('Location: process3.php?pid='.$pinfoid);

  }

  }

    ?>

  <h1 align="center" style="color: brown"> Creative Engineering Consultants</h1>
  <h1 align="center" style="color: red">EMPLOYMENT APPLICATION FORM</h1>
  <h2> Step 2 of 3</h2>
<form action="process2.php" method="post">

<h2>  Qualifications</h2>

<div class="example-1">
  <div class="example-2">
<table style="width:35%">


 <tr>

    <th>Degree/Diploma</th>
	<th>Institution</th>
	<th>Year of Passing</th>
	<th>Div/Grade/GPA</th>
	</tr>
 <tr>

    <td>
      
      <input type="text" id="text" name="pinfoid[]" value = '<?php echo $pinfoid;?>' name="" style="width: 220px; height:20px;  " required="">
      <input type="text" id="text" name="DegreeDiploma[]" style="width: 220px; height:20px;  " required="">
    </td>
  
    <td>
      <input type="name" id="text" name="Institution[]" style="width: 220px; height:20px;  " required="">
    </td>
  
  
    <td>
      <input type="date" id="text" name="YearofPassing[]" style="width: 220px; height:20px;  " required="">
    </td>
  
    <td>
      <input type="" id="text" name="DivGradeGPA[]" style="width: 220px; height:20px;  " required="">
    </td>
  </tr>
  
</table>


<hr class="mb-3">
        

</script>
</div>
</div>
<button class="btn-add">Add More Qualifications</button>
<br><br>
<input class="btn-primary" type="submit" name="submit" value="submit">
</form>
  <p align="margin-right">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
  $(function(){
    $('#register').click(function(e){

      var valid = this.form.checkValidity();

      if(valid){

    ;
      var DegreeDiploma   = $('#DegreeDiploma').val();
      var Institution     = $('#Institution').val();
      var YearofPassing    = $('#YearofPassing').val();
      var DivGradeGPA     = $('#DivGradeGPA').val();



        e.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'process.php',
          data: {DegreeDiploma: DegreeDiploma,Institution: Institution,YearofPassing: YearofPassing,DivGradeGPA:DivGradeGPA},
          success: function(data){
          Swal.fire({
                'title': 'Successful',
                'text': data,
                'type': 'success'
                })

          },
          error: function(data){
            Swal.fire({
                'title': 'Errors',
                'text': 'There were errors while saving the data.',
                'type': 'error'
                })
          }
        });


      }else{

      }


    });


  });

</script>
      <script>

 $(document).ready(function (){
  $('button').click(function (){
        $('.example-1').append($('.example-2').html())

        //console.log($('.example-1').html());
        //console.log($('.example-1').html());
    })

  })

</script>
</body>
</html>
