<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Nkathuto Online Scoresheet"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Nkathuto Online Scoresheet</title>
  </head>
  <body style="background-color:yellow">

      <div class="container-fluid">
    <?php require_once 'next.php';
    ?>
      <div class="row justify-content-center">
          <form action="next.php" method="post">
        <div class="form-group">
        <input type="password" name="pass" class="form-control" placeholder="Enter Password" required>
        </div>
        <div class="form-group">
      <button type="submit" class="btn btn-primary" name="save">Login</button>
      </div>
        
  </form>
          </div>
      </div>
  </body>
</html>








