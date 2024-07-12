<html>
<body>
<style>

h1 { 	
	font-size:300% ; 
	text-align:center ; 
	background-color:firebrick ; 
	color:white;
        font-family:courier;
}
h2 { 
	font-size:100% ; 
	text-align:left ; 
	background-color:#ff9800 ; 
	color:black;
}
form { 
	text-align:center;
}
p2 {
	align:center;
	font-size:150%;
}

.center {
    text-align:center;
}

.label {
  color: white;
  padding: 8px;
}

.success {background-color: #4CAF50;} /* Green */
.info {background-color: #2196F3;} /* Blue */
.warning {background-color: #ff9800;} /* Orange */
.danger {background-color: #f44336;} /* Red */
.other {background-color: #e7e7e7; color: black;} /* Gray */

</style>


<h1>Definite Integral Calculation</h1>
<h2>
<br>

      <table border = "1" width = "100%" bordercolor = "green">
         <tr>
            <td><strong>Deadline</strong></td><td> 19 November 2019</td>
         </tr>
         
         <tr>
            <td><strong>Submission </strong></td><td>Projects will be developed by the teams each of which consists of five students from CENG and MATH departments. Project team information is provided on CMS. Submission will be done through CMS. Each team is required to submit one PHP file that includes both html and PhP code.</td>
         </tr>
      </table>
<br>
</h2>

<form  method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<em>
f(x)=
<input style="width:60px" type="text" name="A" title="enter A value" value="<?php echo isset($_POST["A"]) ? $_POST["A"] : ''; ?>" />
+
<input style="width:60px" type="text" name="B" title="enter B value" value="<?php echo isset($_POST["B"]) ? $_POST["B"] : ''; ?>" />
x+
<input style="width:60px" type="text" name="C" title="enter C value" value="<?php echo isset($_POST["C"]) ? $_POST["C"] : ''; ?>" />
x<sup>2</sup>+
<input style="width:60px" type="text" name="D" title="enter D value" value="<?php echo isset($_POST["D"]) ? $_POST["D"] : ''; ?>" />
x<sup>3</sup>+
<input style="width:60px" type="text" name="E" title="enter E value" value="<?php echo isset($_POST["E"]) ? $_POST["E"] : ''; ?>" />
(exp)x+
<input style="width:60px" type="text" name="F" title="enter F value" value="<?php echo isset($_POST["F"]) ? $_POST["F"] : ''; ?>" />
sin(x)
<br><br>
</em>
a=<input style="width:60px" type="text" name="a" title="enter a value" value="<?php echo isset($_POST["a"]) ? $_POST["a"] : ''; ?>" />
b=<input style="width:60px" type="text" name="b" title="enter b value" value="<?php echo isset($_POST["b"]) ? $_POST["b"] : ''; ?>" />
<br><br>
<input style="width:80px" type="submit" name="Submit" value="Submit" /><br><br>
</form>

</body>
</html>

<?php
$err = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
$result="0";
$A=$_POST["A"];
$B=$_POST["B"];
$C=$_POST["C"];
$D=$_POST["D"];
$E=$_POST["E"];
$F=$_POST["F"];
$a=$_POST["a"];
$b=$_POST["b"];
if (is_null($A)){
	$err = " A is NULL! ";
}
else {
	if (!is_numeric($A)){
		$err = $err." A is NOT a numeric value! ";
	}
}
if (is_null($B)){
	$err = $err." B is NULL! ";
}
else {
	if (!is_numeric($B)){
		$err = $err." B is NOT a numeric value! ";
	}
}
if (is_null($C)){
	$err = $err." C is NULL! ";
}
else {
	if (!is_numeric($C)){
		$err = $err." C is NOT a numeric value! ";
	}
}
if (is_null($D)){
	$err = $err." D is NULL! ";
}
else {
	if (!is_numeric($D)){
		$err = $err." D is NOT a numeric value! ";
	}
}
if (is_null($E)){
	$err = $err." E is NULL! ";
}
else {
	if (!is_numeric($E)){
		$err = $err." E is NOT a numeric value! ";
	}
}
if (is_null($F)){
	$err = $err." F is NULL! ";
}
else {
	if (!is_numeric($F)){
		$err = $err." F is NOT a numeric value! ";
	}
}
if (is_null($a)){
	$err = $err." a is NULL! ";
}
else {
	if (!is_numeric($a)){
		$err = $err." a is NOT a numeric value! ";
	}
}
if (is_null($b)){
	$err = $err." b is NULL! ";
}
else {
	if (!is_numeric($b)){
		$err = $err." b is NOT a numeric value! ";
	}
}
if (empty($err)) {
$upperintegral= ($A)*($b)+ ($B)*(1/2)*pow($b,2) + ($C)*(1/3)*pow($b,3) + ($D)*(1/4)*pow($b,4) + ($E)*exp($b) - $F*cos($b);
$lowerintegral= ($A)*($a)+ ($B)*(1/2)*pow($a,2) + ($C)*(1/3)*pow($a,3) + ($D)*(1/4)*pow($a,4) + ($E)*exp($a) - $F*cos($a);
$result=$upperintegral - $lowerintegral;
echo "<p align='center'><font color=black size='6pt'><b>&#x222b</b><sub>a</sub><sup>b</sup> f(x)dx = <span class='label success'>$result</span> </p>";
}
else {
 echo "<p align='center'><span class='label danger'>$err</span> </p>";
}
}
?>
