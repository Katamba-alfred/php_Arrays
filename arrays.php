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
$band['LL'] = 'La Liga-Santander';
$band['EPL'] = 'Premier League';
$band['EPL'] = 'English Premier League';
echo "<p>His name is $band[0] and his last name is $band[2]</p>.
<p>{$band['LL']} and {$band['EPL']}.</p>";

//The program will print English premier league and la liga santander instead of La liga and Premier league
?>

</body>
</html>