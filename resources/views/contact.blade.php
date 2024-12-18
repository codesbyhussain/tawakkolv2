<?php
if(isset($_POST['email'])) {

	$email_from = ''; //Enter your email and use SMTP access on Gmail

	$email_subject = $_POST['subject'];

	$email_body = 'You have received a new message from $_POST["name"].\n Here is the message:\n $_POST["message"]';

    $to = ""; //Enter your email and use SMTP access on Gmail

    $headers = "From: $email_from \r\n";
    
    $headers.= 'Reply-To: $_POST["email"] \r\n';
    
    mail($to,$email_subject,$email_body,$headers);

}
?>


<!doctype html>
<html lang="en">
    <title> Contact Us </title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>



  <?php require 'nav.php'?>

<div class="contact ">
<div class="overlay">
        <!--Card-->
        <div class="card mx-auto my-3">

            <!--Card content-->
            <div class="card-body">
      
                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact
                  us directly. We will come back to you within
                  a matter of hours to help you.</p>
      
                <div class="row">
      
                  <!--Grid column-->
                  <div class="col-md-4 text-center">
                      <i class="fa fa-map-marker mt-4 fa-2x"></i>
                        <p> 36B, 38B 18 St, Shuwaikh Industrial, Kuwait</p>
                      
                  </div>
                  <div class="col-md-4 text-center">
                      
      
                      <i class="fa fa-phone mt-4 fa-2x"></i>
                        <p>+965 12345678</p>
                      
      
                  </div>
                  <div class="col-md-4 text-center">
                   
      
                      <i class="fa fa-envelope mt-4 fa-2x"></i>
                        <p>contact@Tawakkol</p>
                      
                    
                  </div>
                  <!--Grid column-->
      
                </div>
      
            </div>
      
          </div>
          <!--/.Card-->
</div>
</div>
 

<?php require 'footer.php'?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<style>
    .contact{
        background-image: url("images/view/shop.jpg");
        background-color: #cccccc;
        background-size: 100% 100%;
        width: 100%;
    }
    .card{
        width: 750px;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    .overlay {
 background: rgba(0, 150, 100, 0.3);
 overflow: hidden;
 height: 100%;
}
</style>