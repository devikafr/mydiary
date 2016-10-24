<?php
  session_start();

  include("connection.php");
  include("login.php");
  $email_webmaster="darshani.devika@gmail.com";

    if ($_POST['submit']=="Email me!") {


        if (!$_POST['email']){
          $error.="Please enter your email";
        }

      else{

        $query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";
      //  print "wow";
              $result = mysqli_query($link, $query);
              $row = mysqli_fetch_array($result);
            //  print "yessss";
            //  print "MyMail = ".$row['email'];

                 if (!empty($row['email'])) {
                  //email de celui qui envoie
                  $webmaster = $email_webmaster;
                  //email de celui qui reçoit
                  $a_qui_j_envoie = $_POST['email'];
                  //sujet
                  $subject = "Vos identifiants";
                  //message
                  $msg = "Bonjour ".$row['email']."<br/><br/>";
                  $msg .= "You have forgotten your password. Please use a new password and re-register with your email :
                  <br/>Email : ".htmlspecialchars($row['email'])."<br/>
                  Password : ".$row['password']."<br/><br/>";
                  $msg .= "Thanks";
                  //permet de savoir qui envoie le mail et d'y répondre
                  $mailheaders = "From: $webmaster\n";
                  $mailheaders .= "MIME-version: 1.0\n";
                  $mailheaders .= "Content-type: text/html; charset= UTF-8\n";
                  //on envoie l'email
                  //print "a=$a_qui_j_envoie, b=$subject, c=$msg, d=$mailheaders";
                  mail($a_qui_j_envoie, $subject, $msg, $mailheaders);
                  //on laisse un message de confirmation
                  //echo '<div id="ok">Vos identifiants ont été envoyé sur votre boite email.</div>';
                  $message.="Please check your email!";
               } else{
                 $error.="Sorry, you are not on our records";
               }
             //}
}
}

?>
