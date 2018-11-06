<?php


include 'includes/db_connection.inc.php';
include 'includes/submit.inc.php';
include 'includes/users.php';



?>

<?php
$object = new submit;
  if(isset($_POST["submit"])){

    $object->setSubmitForm();


  }
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- Tinymce Editior Script -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'#textarea' });</script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Sean Lee sexton</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section class="container">
      <row class="col-lg-8 center-block">
        <form action="calc.php" method="POST">
          <input type="text" name="num1"/>
          <input type="text" name="num2"/>
          <select name="cal" id="">
            <option value="add">Add</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
          </select>
          <button type="submit">Calculate</button>
        </form>


      </row>
    </section>
    <section class="container">
      <row class="col-lg-8 center-block">
<?
$value = $object->getSubmitForm();

?>
        <form action="" method="post">
          <div class="form-group">
            <label for="comment">Comment:</label>
            <input value="<?=$value;?>" type="text" name="content" id="textarea" class="form-control" rows="5" wrap="hard">
            <input type="text" name="active" class="form-control" rows="5" wrap="hard" hidden value="Y">
            <input type="text" name="deleted" class="form-control" rows="5" wrap="hard" hidden value="N">
          </div>
          <input type="submit" class="btn btn-primary" value="Submit" name="submit"/>
        </form>
      </row>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>



  </body>

</html>



