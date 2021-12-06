<!DOCTYPE html>
<html>
<head>
<title>Search Employee</title>
<script>
function myAjax() {
var uname= document.getElementById("uname").value;
var uinterest= document.getElementById("uinterest").value;
var udesignation= document.getElementById("udesignation").value;
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("demo").innerHTML = this.responseText;
}
else
{
document.getElementById("demo").innerHTML = this.status;
}
};
xhttp.open("POST", "/control/controls.php", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send("uname="+uname+"&uinterest="+uinterest+"&udesignation="+udesignation);
}
</script>
</head>

</head>



<body>
<legend>
    <h1> Search faculty</h1>
   
    <br>
Search By Faculty Name:
<input type="text" id="uname" >
<br>
<br>
Search By Research Interest:
<input type="text" id="uinterest" >
<br>
<br>
Search By Designation: <select id="udesignation" name="udesignation">
<option value="">select Designation</option>
<option value="saab">Lecturer</option>
<option value="opel">Assistant Professor</option>
<option value="audi">Professor</option>
</select>
<br>
<br>
<button name="submit" onclick="myAjax()">Search</button>
<br>
<br>
<p id="demo"></p>
</legend>
</body>
</html>
