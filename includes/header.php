
<?php include('includes/arrays.php');
$TITLE = "Paru's Dining";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo ($TITLE);?></title>
  <link rel="icon" href="favicon.ico" type="image/ico">
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
  <!--  font awesome-->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Bootstrap styles -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <!--  styles -->
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

<header id="top-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <img src="img/header-pic.jpg" alt="food" class="img-fluid" />
      </div>
    </div>
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <?php include('includes/nav.php'); ?>
      </div>
    </div>
  </div>
</div>
</header>
