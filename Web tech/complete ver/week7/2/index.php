<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        }
</style>
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>
        <?php 
        for ($i = 1; $i <= 31; $i++) {
            if (($i-1)%7 == 0){
                echo "<tr><td>$i";
            }else{
                echo "<td>$i";
            }
        }
        echo "<td><td><td><td>";
    ?>

    </table>

    
    
</body>
</html>