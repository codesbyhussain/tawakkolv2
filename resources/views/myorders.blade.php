
<!doctype html>
<html lang="en">
    <title> Your Orders </title>
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
    
  
   
  <h2 class="my-3"> Your Orders: </h2>
<hr>
<?php foreach ($orders as $product) {?>
  <div class="row my-2 mx-2">
        <div class="col">
      <a href="/detail/{{$product->id}}">
      <img src="{{$product->image}}" alt="Card image cap">
    </div>
      <div class="col">
        <h5>{{$product->name}}</h5>
    </a>
        <p >{{$product->description}}</p>
    </div>
    <div class="col">
        <strong>Price: KD {{$product->price}}</strong>
    </div>
  </div>
</div>
<hr>
<?php } ?>


</div>


<?php require 'footer.php'?>

<!--JS SCRIPTS-->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>


<!-- /js scripts-->
</body>
</html>


<style>
img{
  max-height:150px;
}
h2{
  text-align:center;
  margin-bottom: 100px;
}
</style>
