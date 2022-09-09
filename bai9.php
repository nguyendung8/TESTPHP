<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 9</title>
</head>
<body>
<table border="1px" border-collapse="collapse" cellspacing="0" cellpadding="0">

<?php
for($i = 1; $i <= 9; $i ++) {
    echo "<tr>";
    for($j = 1; $j <= 10; $j ++) {
        echo "<td bgcolor =#d8ebeb > " ;
        echo "$i * $j = " . ($i * $j);
        echo "<br>";
    }
    echo "</tr>";
}
?>

</table>
</body>
</html>