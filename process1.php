<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
      <title> employee form registration</title>
      <link rel="stylesheet" type="text/css" href"css/bootstrap.min.css">
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

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} 
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
      <title> employee form registration</title>
      <link rel="stylesheet" type="text/css" href"css/bootstrap.min.css">
  




   <?php
    if (isset($_POST['submit'])) {
      $NAME                 = $_POST['NAME'];
      $Dateofbirth          = $_POST['Dateofbirth'];
      $FathersName          = $_POST['FathersName'];
      $MartialStatus        = $_POST['MartialStatus'];
      $MobileNumberLandLineNumber   = $_POST['MobileNumberLandLineNumber'];
      $EmailAddress         = $_POST['EmailAddress'];
      $CNICPASSPORT         = $_POST['CNICPASSPORT'];
      $HomeAddress          = $_POST['HomeAddress'];


     $sql = "INSERT INTO personalinfo (NAME,Dateofbirth, FathersName,MartialStatus,MobileNumberLandLineNumber,EmailAddress,CNICPASSPORT,HomeAddress) values(?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$NAME, $Dateofbirth,$FathersName, $MartialStatus, $MobileNumberLandLineNumber, $EmailAddress,$CNICPASSPORT,$HomeAddress]);
     if($result){

      $sql0="select * from personalinfo where CNICPASSPORT = '$CNICPASSPORT'";//  check id is already copied 


 //$sql0="select * from personalinfo where CNICPASSPORT = '1730162408909'";//  check id is already copied 

      $res=mysqli_query($connection,$sql0);

     while ($row = mysqli_fetch_row($res))  {
     $laststroedid = $row[0];
}
        echo "Sucessfully saved.";
         $url = 'process2.php?pid='.$laststroedid;
        header('Location: '.$url);
     }else{
         echo "there were errors while saving the data.";
      
     }
  }
    ?>




  <h1 align="center" style="color: brown"> Creative Engineering Consultants</h1>
  <h1 align="center" style="color: red">EMPLOYMENT APPLICATION FORM</h1>
  <h2> Step 1 of 3</h2>
   <form action="process1.php" method="post">
     <div class="container">


			
        <p> Fill up the form</p>
          <table style="width:35%">
           <tr >
           <th>Name</th>
           <td>
         <label for="Name"><b></b></label>
         
        
        <input class="form-control" type="text" name="NAME" style="width: 220px; height:20px; " required=""><br><br>
        </td>
      </tr>
       <th>Date of Birth</th>
        <td>
        <label for="DateofBirth"><b></b></label>
        <input class="form-control" type="date" name="Dateofbirth" style="width: 220px; height:20px; " required=""><br><br>
        </td>
       </tr>
       <tr>
       <th>Father's Name</th>
        <td>
        <label for="FathersName"><b></b></label>
        <input class="form-control" type="text" name="FathersName" style="width: 220px; height:20px; " required=""><br><br>
        </td>
        </tr>
         <tr>
         <th>Martial Status</th>
         <td>
        <label for="Martial Status"><b></b></label>
        <input class="form-control" type="text" name="MartialStatus" style="width: 220px; height:20px; " required=""><br><br>
        </td>
        </tr>
        <th>Contact Number</th>
         <td>
        <label for="MobileNumberLandLineNumber"><b></b></label>
        <input class="form-control" type="text" name="MobileNumberLandLineNumber"style="width: 220px; height:20px;   "required=""><br><br>
        </td>
        </tr>
        <tr>
        <th>Email Address</th>
        <td>
        <label for="Email Address"><b></b></label>
        <input class="form-control" type="text" name="EmailAddress" style="width: 220px; height:20px;   "required=""><br><br>
        </td>
        </tr>
        <th>CNIC </th>
        <td>
        <label for="CNIC/PASSPORT"><b></b></label>
        <input class="form-control" type="text" name="CNICPASSPORT" style="width: 220px; height:20px;   "required=""><br><br>
        </td>
        </tr>
        <tr>
        <th>Home Address</th>
        <td>
        <label for="HomeAddress"><b></b></label>
        <input class="form-control" type="text" name="HomeAddress" style="width: 220px; height:20px;   "required=""><br><br>
        </td>
        </tr>
        </table>
        <hr class="mb-3">
        <input class="btn-primary" type="submit" name="submit" value="submit">
      </div>
     </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
  $(function(){
    $('#register').click(function(e){

      var valid = this.form.checkValidity();

      if(valid){


      var NAME   = $('#NAME').val();
      var Dateofbirth  = $('#Dateofbirth').val();
      var FathersName     = $('#FathersName').val();
      var MartialStatus = $('#MartialStatus').val();
      var MobileNumberLandLineNumber  = $('#MobileNumberLandLineNumber').val();
      var EmailAddress  = $('#EmailAddress').val();
      var CNICPASSPORT  = $('#').val()CNICPASSPORT;
      var HomeAddress  = $('#HomeAddress').val();


        e.preventDefault();

        $.ajax({
          type: 'POST',
          url: 'process.php',
          data: {NAME: NAME,Dateofbirth: Dateofbirth,FathersName: FathersName,MartialStatus:MartialStatus,MobileNumberLandLineNumber: MobileNumberLandLineNumber EmailAddress: EmailAddress CNICPASSPORT: CNICPASSPORT     HomeAddress: HomeAddress},
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
</body>
</html>
