
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    

<?php

include 'config.php';
$gid = $_GET['pid'];

echo "<table border='1'>";
$sql00 = "select * from personalinfo where id = ".$gid;
$query = mysqli_query($connection,$sql00);
while ($row = mysqli_fetch_array($query)) {
  
echo  "<Th>personalinfo - </th>".$row['id']." -";
echo "<tr><th> NAME</th><th>FathersName</th></tr>";
  
$name = $row['NAME'];
$fname = $row['FathersName'];
echo "<tr><td>".$name."</td><td>".$fname."</td></tr>"; 



// 2nd looop started
 $sql0 = "select * from qualification where Pinfoid  = ".$row['id'];
$query0 = mysqli_query($connection,$sql0);
while ($row0 = mysqli_fetch_array($query0)) {
echo "<Th> qualification</th>".$row0['ID']." -";
echo "<tr><th> DegreeDiploma</th><th>Institution</th></tr>";


$DegreeDiploma= $row0['DegreeDiploma'];
$Institution= $row0['Institution'];
echo "<tr><td>".$DegreeDiploma."</td><td>".$Institution."</td></tr><br>";
echo "<tr><th> Yearofpassing</th><th>DivGradeGPA</th></tr>";
$YearofPassing= $row0['YearofPassing'];
$DivGradeGPA= $row0['DivGradeGPA'];
echo "<tr><td>".$YearofPassing."</td><td>".$DivGradeGPA."</td></tr><br>";

}

// 2nd looop started
 $sql1 = "select * from experience where Pinfoid  = ".$row['id'];
$query1 = mysqli_query($connection,$sql1);
while ($row1 = mysqli_fetch_array($query1)) {
echo "<th>Experience</th>".$row1['id']." -";
echo "<tr><th>Position</th><th>Designation</th></tr>";

$Position=$row1['Position'];
$Designation=$row1['Designation'];
echo "<tr><td>".$Position."</td><td>".$Designation."</td></tr><br>";
echo "<th>frm</th><th>T</th>"; 
$frm=$row1['frm'];
$T=$row1['T'];
echo "<tr><td>".$frm."</td><td>".$T."</td></tr>"; 
}
}
?>
</table>
</body>
</html>  