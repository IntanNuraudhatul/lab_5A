<!DOCTYPE html>
<html lang="en">
<head>
<title>Lab 5a Q3</title>
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
// Function to generate multiplication table
function multiplication($multiplier) {
$results = [];
for ($i = 1; $i <= 12; $i++) {
$results[] = [
'no' => $i,
'multiplier' => $multiplier,
'answer' => $i * $multiplier
];
}
return $results;
}
// Generate multiplication table for 2
$tableData = multiplication(2);
?>
<table>
<tr>
<th>No</th>
<th>Multiplier</th>
<th>Answer</th>
</tr>
<?php
foreach ($tableData as $row) {
echo "<tr>";
echo "<td>{$row['no']}</td>";
echo "<td>{$row['multiplier']}</td>";
echo "<td>{$row['answer']}</td>";
echo "</tr>";
}
?>
</table>
</body>
</html>
