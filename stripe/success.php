<?php
  if(!empty($_GET['tid'] && !empty($_GET['product']))) {
    $tid = htmlspecialchars($_GET['tid'], ENT_QUOTES, 'UTF-8');
    $product = htmlspecialchars($_GET['product'], ENT_QUOTES, 'UTF-8');
} else {
    header('Location: index.php');
    exit(); // Assurez-vous de sortir du script après une redirection
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Thank You</title>
</head>
<body>
  <div class="container mt-4">
    <h2>Merci d'avoir acheté la chambre <?php echo $product; ?></h2>
    <hr>
    <p>votre ID de transaction est <?php echo $tid; ?></p>
    <p><a href="index.php" class="form-control btn btn-primary  mt-2">Go Back</a></p>
  </div>
</body>
</html>