<!doctype html>
<html lang="en">
    <title>
        Our Shop
    </title>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php require 'nav.php'?>
  </head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src=<?="/".$product->image?> class="detailimg">
            </div>
            <div class="col-sm-6">
                <strong>Name:</strong> {{$product->name}}
</br>
                <strong>Description:</strong> {{$product->description}}
</br>
                <strong>Price:</strong> {{$product->price}}
                </br></br>
                <form action="/add_to_cart"method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value={{$product['id']}}>
                    <button> Add to cart </button>
</form>
                </br></br>
                <a href="/shop">
                Go back            
</a>
            </div>
        </div>
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

    .detailimg{
        height:200px;
    }
    .container{
        height:500px;
    }
</style>