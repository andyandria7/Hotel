<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Pay Page</title>
</head>

<body>
  <div class="container">
    <h2 class="my-4 text-center">Intro To React Course [<span id="price">0 MGA</span>]</h2>
    <form action="./charge.php" method="post" id="payment-form">
    <input type="hidden" name="room_price" id="room_price_hidden" value="0">
      <div class="form-row">
        <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name" required>
        <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name" required>
        <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" required>
        <select class="form-control mb-3 StripeElement StripeElement--empty" name="room_type" onchange="updatePrice()" required>
          <option value="0" selected>Selection de chambre/Suite </option>
          <option value="Standard"> Standard </option>
          <option value="Luxe"> Luxe </option>
          <option value="Super luxeux"> Super luxeux </option>
          <option value="Premier luxe"> Premier luxe </option>
          <option value="Executive Suite"> Executive Suite </option>
          <option value="Junior Suite"> Junior Suite </option>
          <option value="Suite pour voyage de noces"> Suite pour voyage de noces </option>
        </select>
        <div id="card-element" class="form-control">
        </div>

        <div id="card-errors" role="alert"></div>
      </div>

      <button>Submit Payment</button>
      <a href="../pages/membre.php" class="form-control btn btn-primary  mt-2">Return</a>
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="./js/charge.js"></script>
  <script>
    var basePrices = {
      'Standard': 831891,
      'Luxe': 418269,
      'Super luxeux': 25015917,
      'Premier luxe': 138958213,
      'Executive Suite': 48431132,
      'Junior Suite': 46229717,
      'Suite pour voyage de noces': 50632547
    };

    function updatePrice() {
        var roomType = document.querySelector('select[name="room_type"]').value;
        var roomPriceHidden = document.getElementById('room_price_hidden');
        if (basePrices.hasOwnProperty(roomType)) {
            roomPriceHidden.value = basePrices[roomType];
            document.getElementById('price').textContent = basePrices[roomType] + ' MGA';
        } else {
            roomPriceHidden.value = '0';
            document.getElementById('price').textContent = '0 MGA';
        }
    }
  </script>
</body>

</html>
