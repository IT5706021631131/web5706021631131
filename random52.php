<!doctype html>
<html lang="en">
 <head>
</head>
<body>
<?php 
$row = 13;
$col = 4;
echo "<table align='center' border='4' width='300'>";

for ($r=1; $r <= $row; $r++){
echo "<tr>";
for ($c=1; $c <= $col; $c++){
if ($r==$c){
echo "<td align='center'>";
echo " &nbsp; </td>";
}
else
{
echo "<td align='center'> &nbsp; </td>";
}
}
echo "</tr>";
}
echo "</table>";
?>
 </body>
</html>
