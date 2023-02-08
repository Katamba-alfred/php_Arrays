<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays</title>

</head>
<body>

<h1>Some simple Arrays</h1>
<?php
$band[] = 'Katamba';
$band[] = 'Alfred';
$band[] = 'Murray';
$band['LL'] = 'La Liga';
$band['LL'] = 'La Liga-Santander'; //new value
$band['EPL'] = 'Premier League';
$band['EPL'] = 'English Premier League';  //New value
echo "<p>His name is $band[0] and his last name is $band[2]</p>.
<p>{$band['LL']} and {$band['EPL']}.</p>";
//The above program will print English premier league and la liga santander instead of La liga and Premier league.

//Array() function for building independent arrays
$stdNames = array(
'KA' => 'Katamba Alfred',
'BB' => 'Bahati Brian',
'KF' => 'Kasenge Fred',
'LM' => 'Lumu Mike',
'JS' => 'Jjemba Stephen'
);
//Printing the values of the array;
echo "<p><b>The names are:</b><br></p>
{$stdNames['KA']}<br>
{$stdNames['BB']}<br>
{$stdNames['KF']}<br>
{$stdNames['LM']}<br>
{$stdNames['JS']}";

//The array() single function
$mark = array(90, 86, 65, 90);
$student = array('Alfred', 'Mike', 'Brian', 'Larruy');
//printing individual values
echo "<p><b>Students and Marks:</b><br>
$student[0]   <b>$mark[0]</b><br>
$student[1]   <b>$mark[1]</b><br>
$student[2]   <b>$mark[2]</b><br>
$student[3]   <b>$mark[3]</b><br>
</p>";

?>

</body>
</html>