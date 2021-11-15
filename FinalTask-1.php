<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" types="text/css" href="../css/mydesign.css">
</head>
<body>
<fieldset>
<h2><P align =center class="header"><b>ABC Managment System</p></h2>
<form action="" method="post">
<form>
<h1 id="i"><b>Registration </b></h1><hr>
<table width=500px border=2px class="card2">
<tr>
 <td> <label for="firstname">First name:</label><br></td>
 <td> <input type="text" id="firstname" name="firstname" minlength="5" ></td>
</tr>
<tr>
 <td><label for="lastname">Last name:</label></td>
 <td><input type="text" id="lastname" name="lastname" minlength="5"></td>
</tr>
<tr>
 <td><label for="age">Age:</label></td>
 <td> <input type="age" id="age" name="age"></td>
</tr>
<tr>
<td>Designation:</td>
<td><input type="radio" id="Programmer" name="Programmer" value="Junior Programmer">
<label for="Programmer">Junior Programmer</label>
<input type="radio" id="Programmer" name="Programmer" value="Senior Programmer">
<label for="Programmer">Senior Programmer</label>
<input type="radio" id="Programmer" name="Programmer" value="Project Manager">
<label for="Programmer">Project Manager</label></td></tr>
<tr><td></td></tr>
<tr>
<td>Preferred Languague:</td>
<td>
<input type="checkbox" id="Languague1" name="Languague1" value="Java">
<label for="Languague1"> JAVA</label>
<input type="checkbox" id="Languague2" name="Languague2" value="PHP">
<label for="Languague2"> PHP</label>
<input type="checkbox" id="Languague3" name="Languague3" value="C++">
<label for="Languague3"> C++</label>
</td>
</tr>
<tr><td>
<tr>
 <td><label for="email">Email:</label></td>
 <td> <input type="email" id="email" name="email"></td>
</tr>
<tr>
  <td> <label for="pwd">Password:</label></td>
  <td><input type="password" id="pw" name="pw" minlength="8"></td>
</tr>
<tr>
<td>
Please Choose a file:</td>
<td><input type="file" id="file" name="file" ></td>
</tr>
<tr> 
<td><input type="submit" class="button"> 
</tr>
</table>
</form>
</fieldset>
</body>
</html>
