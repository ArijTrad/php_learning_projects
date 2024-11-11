<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tp1ex2</title>
</head>
<body>
  


<?php

$nom='arij';
$pre='trad';
$info= $nom.' '.$pre;

echo"<table>
    <tr>
        <th>nom</th>
        <th>prenom</th>
    </tr>
    <tr>
        <td>$nom</td>
        <td>$pre</td>
    </tr>
</table>";


echo " <script>
alert('$info');
</script>";


?>
</body>
<style>
        table {
            border-collapse: collapse; /* Ensures there is only a single line border between cells */
            width: 50%;
        }
        table, th, td {
            border: 1px solid black; /* 1px border for the table, table header, and table cells */
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</html>