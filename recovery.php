
<?php

      include("connection.php");

      include("email.php");
?>

<html>
<head>
<meta charset="utf-8"></meta>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>help login</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/recovery.css">

</head>


<body data-spy="scroll" data target=".navbar-collapse">

      <!--<div class="navbar navbar-inverse navbar-fixed-top">-->
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand">My Diary</a>
          </div>
        <div class="collapse navbar-collapse">
            <form class="navbar-form navbar-right" method="post">

              <input type="submit" name="submit" class="btn btn-success" value="Go back" onclick="window.open('index.php')"/>
            </form>
          </div>
        </div>
      </div>


<div class="container contentContainer" id="topContainer">
    <div class="row">
      <div class="col-md-6 col-md-offset-3" id="topRow">
        <h1 class="marginTop">My Diary</h1>
          <p class="lead"> Your own private diary, with you wherever you go</p>
            <?php include("alert.php"); ?>

            <p class="bold marginTop">type your email to recover your password</p>

            <form class="marginTop" method="post">
              <div class="form-group">
                <label for="email"></label>
                <input type="email" name="email" class="form-control" placeholder="your email" value="<?php if (!empty($_POST["email"]))
                { md5(md5($_POST["email"])); } ?>"/>
              </div>

                <input type="submit" name="submit" value="Email me!"  class="btn btn-success btn-lg margin-top"/>
            </form>
      </div>
    </div>
  </div>
</body>
</html>
