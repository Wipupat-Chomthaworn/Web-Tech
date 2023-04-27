<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<form action="index.php" method="POST">
<?php
    // Connect to Database
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('customers.db');
        }
    }

    // Open Database
    $db = new MyDB();

    //THead
    echo '<table id="table" class="table border border-dark"><tr><th>ID<th>Name<th>Address<th>Phone<th>Email';
    // SQL SELECT
    $sql ="SELECT * from customers";

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      echo "<tr><td>". $row['CustomerId'];
      echo "<td>". $row['FirstName']."  ". $row['LastName'];
      echo "<td>". $row['Address'];
      echo "<td>".$row['Phone'];
      echo "<td>".$row['Email'];

   }

   if (isset($_POST["del"])){
    $sql = "DELETE from customers where CustomerId = (SELECT MAX(CustomerId) FROM customers)";
    $ret = $db->exec($sql);
    if(!$ret){
      echo $db->lastErrorMsg();
    } else {
       echo $db->changes(), " Record deleted successfully<br>";
    }
    }
   // Close database
   $db->close();
?>

<?php

?>
</table>
<button type="submit" name="del">Delete last now</button>
</form>


</body>
</html>
