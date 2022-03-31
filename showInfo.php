<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include "database.php";

        $showQuery = "SELECT * FROM owners";

        $result = $conn->query($showQuery);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["owner"]. " " . $row["expiration_date"]. "<br>";
            }
        } else {
            echo ") results";
        }

    ?>
</body>
</html>