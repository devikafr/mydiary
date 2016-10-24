
<?php
    session_start();

    include("connection.php");
    include ("diary.php");


?>

<html>
<head>
  <meta charset="utf-8"></meta>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>my diary</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <link rel="stylesheet" type="text/css" href="css/main.css">
 <script type="text/javascript" src="js/update.js"></script>
</head>

<body data-spy="scroll" data target=".navbar-collapse">

      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header pull-left">
            <a class="navbar-brand">My Diary</a>
          </div>
        <div class="pull-right">
          <ul class="navbar-nav nav pull-right">
              <li><a href="index.php?logout=1">Log Out</a></li>
          </ul>
          </div>
        </div>
      </div>


<div class="container contentContainer" id="topContainer">
    <div class="row">
      <div class="col-md-6 col-md-offset-3" id="topRow" "center">
        <textarea class="form-control"><?php echo $diary;?></textarea>

      </div>
    </div>
  </div>
<?php include ("js/update.js"); ?>

</body>
</html>
