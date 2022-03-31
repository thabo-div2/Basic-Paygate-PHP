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

       if(isset($_POST['submit'])) {
           
            $owner = $_POST["owner"];
            $cvv = $_POST["cvv"];
            $card_number = $_POST["card_number"];
            $expiration_date = $_POST["expiration_date"];
            // $date = date_format($expiration_date, "Y/m/d");

            // echo $expiration_date;

            if (empty($owner)) {
                die("Please add account owner");
            }
            if (empty($cvv)) {
                die("Please add cvv");
            }
            if (empty($card_number)) {
                die("Please add card_number");
            }
            if (empty($expiration_date)) {
                die("Please add the card's expiration date");               
            }

            
            $insertQuery = "INSERT INTO owners (owner, cvv, card_number, expiration_date) VALUES (?, ?, ?, ?)";

            $statement = $conn->prepare($insertQuery);
            $statement->bind_param('ssss', $owner, $cvv, $card_number, $expiration_date);

            if($statement->execute()) {
                echo $owner."'s Info has been inserted";
                header("location: showInfo.php");
                exit;
            } else {
                echo $conn->error;
            }
            $conn->close();
            
       }
    ?>
</body>
</html>