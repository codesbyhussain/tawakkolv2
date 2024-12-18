<!doctype html>
<html>
<!-- Bootstrap and more-->
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
<!-- Section A -->
        <div class="sectiona">
        <div class="container pt-3 pb-3">
  <div class="row mt-5">
    <div class="col-lg mx-auto">
      <img class="rounded-circle" src="/images/view/logo.jpg" height ="250px" width="250px">
    </div>
    <div class="col-lg text-black abt">
      Established in 1995, Tawakkol International Lights has been going strong and thriving in demand from the local community
      This is all in due part of your enthusiasm and love and we hope to provide our services to a larger audience.

    </div>
    <div class="col-lg mx-auto float-right">
      <img class="rounded-circle" src="/images/view/face.jpg" height ="250px" width="250px">
    </div>
  </div>
</div>
        </div>
<!-- /Section A-->

<!-- Section B Rotator -->
        <div class="sectionb">
                <h2 style="text-align: center; color:gold; padding-top: 10px; padding-bottom: 10px;"> What Our Customers Have To Say: </h2>
                <div class="slideshow-container mx-auto">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade" style="text-align:center">
                          <img src="/images/view/mama.jpeg" alt="t1.jpg" class="rounded-circle pb-2" height="10%" width="10%">
                          <div class="text">"Brightened up our house no problem. Fast, Reliable, and Efficient."</br></div>
                          <div class="author">
                                - Hussain Jamdar
                        </div>
                        </div>
                      
                        <div class="mySlides fade" style="text-align:center">
                          <img src="images/view/mami.jpeg" alt="t1.jpg" class="rounded-circle pb-2" height="10%" width="10%">
                          <div class="text">"Was with me all the way. Very professional and aware."</br></div>
                          <div class="author">
                                - Fatema Jamdar
                        </div>
                        </div>
                      
                        <div class="mySlides fade" style="text-align:center">
                          <img src="images/view/tiktok.png" alt="t1.jpg" class="rounded-circle pb-2" height="10%" width="10%">
                          <div class="text">"Bringing innovation and strides to our understandings in the business of lighting."</br></div>
                          <div class="author">
                                - BestofTikTokers
                          </div>
                        </div>
                      
                        <!-- Next and previous buttons -->
                        <a class="prev" style="color: gold;" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" style="color: gold;" onclick="plusSlides(1)">&#10095;</a>
                      </div>
                      <br>
                      
                      <!-- The dots/circles -->
                      <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                      </div>
        </div>

<!-- /Section B Rotator-->

<!-- Section C -->
<div class="sectionc">
        <div class="slideshow-container mx-auto">

                <!-- Full-width images with number and caption text -->
                <div class="mySlidesAuto fade">
                  <img src="images/view/b1.jpg" alt="b1.jpg" height="600px" style="width:100%">
                  <div class="textshop1">
                        LEDs and Neon fitting services at best prices! Don't forget to visit our online store for all kinds of products!!
                  </div>
                </div>
              
                <div class="mySlidesAuto fade">
                  <img src="images/view/b2.jpg" alt="b2.jpg" height="600px" width="100%">
                  <div class="textshop2">
                        LEDs can save the average person over 200kWh of power per week and provide 10x the luminence and shelf life.
                        Invest in a healthier eco friendly lighting environment today!
                  </div>
                </div>
              
                <div class="mySlidesAuto fade">
                  <img src="images/view/b3.jpg" alt="b3.jpg" height="600px" width="100%">
                  <div class="textshop3">
                        Decorate your homes with the best lighting and design options you can find on the market.
                        <br>This Eid make it special with your loved ones.
                  </div>
                </div>
        </div>
</div>
<!-- /Section C-->

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
        .sectiona{
                background-image: url('images/view/b.jpg');
                background-color: #cccccc;
                background-size: 100% 100%;
                height: 500px;
                width: 100%;
        }

        .abt{
                font-family: serif;
                font-size: 25px;
                font-weight: bold;
                background-color: rgba(211, 138, 28, 0.76);
        }

</style>

