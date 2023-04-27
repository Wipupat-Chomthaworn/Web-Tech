<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
       <form method="POST">
        <div class="mb-3">
            <label for="ID" class="form-label">ID:  <input type="text"  name="ID"></label>
        </div>
        <div class="mb-3">
            <label for="Name" class="form-label">Name:  <input type="text"  name="fname"></label>
        </div>
        <div class="mb-3">
            <label for="Age" class="form-label">Age:  <input type="text" style="width=5px" name="age"></label>
        </div>
        <div class="mb-3">
            <label for="Salary" class="form-label">Salary:  <input type="text"  name="salary"></label>
        </div>
        <div class="mb-3">
            <label for="Address" class="form-label">Address:  <textarea name="address" cols="30" rows="3"></textarea></label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    <?php




    // Connect to Database and Open Database
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('employees.db');
        }
    }
    $db = new MyDB();




    if(isset($_POST["submit"])){
        $ID = $_POST["ID"];
        $name = $_POST["fname"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $salary = $_POST["salary"];


        //Insert
        $sql =<<<EOF
        INSERT INTO employees (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES ($ID, '$name', $age, '$address', $salary);
        EOF;
        $ret = $db->exec($sql);
        if(!$ret){
            echo $db->lastErrorMsg();
          } else {

            
            //Create table in HTML
            echo'<h1>List of Employees</h1>
            <table class="table"><tr><th>ID</th><th>Name</th><th>Age</th><th>Address</th><th>Salary</th></tr>';

            // SQL SELECT loop ข้อมูลในdata base
            $sql ="SELECT * from employees";
            $ret = $db->query($sql);
            while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                echo "<tr><td>". $row['ID'];
                echo "<td>". $row['name'];
                echo "<td>". $row['age'];
                echo "<td>".$row['address'];
                echo "<td>".$row['salary'];
            }
        }
        //ต้องการบรรทัดนี้ด้วย





        // Close database
        $db->close();
    }



    ?>
    </div>
</body>
</html>
