<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="remove" id="name">
        <button type="submit">
            asdfasdf
        </button>
    </form>

        <?php
        // Connect to Database
        class MyDB extends SQLite3 {
           function __construct() {
              $this->open('wt-company.db');
           }
        }

        // Open Database
        $db = new MyDB();
        if(!$db) {
           echo $db->lastErrorMsg();
        }

        // Query process

        if (isset($_POST['remove'])){
            delete($_POST['remove']);
        }


        function delete($em_id){

            $db = new MyDB();
            if(!$db) {
                echo $db->lastErrorMsg();
            }

            $sql = "DELETE from COMPANY where ID = $em_id;";

            $ret = $db->exec($sql);
            if(!$ret){
                echo $db->lastErrorMsg();
            } else {
                echo $db->changes(), " Record deleted successfully<br>";
            }
            $db->close();
        }

        // Close database
        $db->close();

     ?>

</body>
</html>
