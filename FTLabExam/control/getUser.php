<?php
include('../db/db.php');



$name = $_POST['uname'];
$interest = $_POST['uinterest'];
$des = $_POST['udesignation'];




if($name!="" || $interest!="" || $des!="")
{



$connection = new db();
$conobj=$connection->OpenCon();



$MyQuery=$connection->SearchByName($conobj,"faculty",$name);
$myQuery=$connection->SearchByInterest($conobj,"faculty",$interest);
$hisQuery=$connection->SearchByDesignation($conobj,"faculty",$des);







if ($MyQuery->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Name</th><th><th>Department</th></th><th>Interest</th><th>Designation</th></tr>";

while($row = $MyQuery->fetch_assoc()) {
echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
}
echo "</table>";
} else {
echo "All fields are not entered";
}
if ($myQuery->num_rows > 0) {
echo "<table><tr><th>ID</th><th>Name</th><th>Department</th><th>Interest</th><th>Designation</th></tr>";

while($row = $myQuery->fetch_assoc()) {
echo "<tr><td>".$row["ID"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td><td>".$row["Interest"]."</td><td>".$row["Designation"]."</td></tr>";
}
echo "</table>";
} else {
echo "All fields are not entered";
}
}
else{
echo "please Enter Something";

}
