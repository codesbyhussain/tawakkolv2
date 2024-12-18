<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))
    $total =  ProductController::cartItem();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Navbar -->
<style>
  .navbar-nav{
          color:"black";
  }
</style>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5e3bb;">
  <div class="navbar-nav ml-auto" style="font-weight:bold;">
  <a class="nav-item nav-link active" href="/projects">Our Projects</a>
  <a class="nav-item nav-link active" href="/shop">Shop</a>
  <a class="nav-item nav-link active" href="/contact">Contact Us</a>
  
</div>
  <a class="navbar-brand mx-auto" href="/"><img src="/images/view/bulb.png" height="50px" width="50px" alt="bulb.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
  
<div class="navbar-nav mr-auto" style="font-weight:bold;">
  <!--<a class="nav-item nav-link active" href="/admin">Admin Side</a>-->
  <?php if(Session::has('user')){ ?>
    <a class="nav-item nav-link active" href="/myorders"><?= Session::get('user')['name']?></a>
  <a class="nav-item nav-link active" href="/logout">Log Out</a>
  <a class="nav-item nav-link active" href="/cartlist">Cart(<?= $total ?>)</a>
<?php }else{?>
  <a class="nav-item nav-link active" href="/login">Log In</a>
  <a class="nav-item nav-link active" href="/register">Sign up</a>
  <?php }?>


</div>
  </nav>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--/Navbar-->
  </head>
  <body>

