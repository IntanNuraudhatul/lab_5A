<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q2</title>
<style>
table {
border-collapse: collapse;
width: 50%;
margin: 20px auto;
}
table, th, td {
border: 1px solid black;
}
th, td {
text-align: center;
padding: 8px;
}
th {
font-weight: bold;
}
</style>
</head>
<body>
<?php
// Associative array of students
$students = [
[
'name' => 'Alice',
'program' => 'BIP',
'age' => 21,
],
[
'name' => 'Bob',
'program' => 'BIS',
'age' => 20,
],
[
'name' => 'Raju',
'program' => 'BIT',
'age' => 22,
],
];
?>
<table>
<tr>
<th>Name</th>
<th>Program</th>
<th>Age</th>
</tr>
<?php
foreach ($students as $student) {
echo "<tr>";
echo "<td>{$student['name']}</td>";
echo "<td>{$student['program']}</td>";
echo "<td>{$student['age']}</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>
