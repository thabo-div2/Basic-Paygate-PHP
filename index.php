
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
    <script src="assets/js/script.js"></script>
    <?php include "database.php" ?>
    <div class="creditCardForm">
      <div class="heading">
        <h1>Confirm Purchase</h1>
      </div>
      <div class="payment">
        <form action="add.php" method="POST" enctype="multipart/form-data" >
          <div class="form-group owner">
            <label for="owner">Owner</label>
            <input type="text" class="form-control" id="owner" name="owner" />
          </div>
          <div class="form-group CVV">
            <label for="cvv">CVV</label>
            <input type="number" name="cvv" class="form-control" id="cvv" />
          </div>
          <div class="form-group" id="card-number-field">
            <label for="cardNumber">Card Number</label>
            <input type="number" name="card_number" class="form-control" id="cardNumber" />
          </div>
          <div class="form-group" id="expiration-date">
            <label>Expiration Date</label>
            <input type="date" name="expiration_date">
          <div class="form-group" id="credit_cards">
            <img src="./images/visa.jpg" id="visa" />
            <img src="./images/mastercard.jpg" id="mastercard" />
            <img src="./images/amex.jpg" id="amex" />
          </div>
          <div class="form-group" id="pay-now">
            <!-- <button type="submit" class="btn btn-default" id="confirm-purchase">
              Confirm
            </button> --> 
            <input  type="submit" name="submit" value="submit">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>