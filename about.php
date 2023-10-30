<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buss Pass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/about.css">
    <script src="https://kit.fontawesome.com/c7348bdcd6.js" crossorigin="anonymous"></script>
</head>
<body>
      <?php
      session_start();

      if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
        include("partials/nav.php");
      }
      else{
        
        include("partials/navl.php");
      }
    ?>
    <!--Section Content Starts-->
    <section id="about">
        <h1 class="header1"><b>About us</b></h1>
        <hr>
        <p class="lead">Travel Bus pass will help you to buy and renewal of bus pass without standing on long queue.<br />Initially you have register the yourself and book pass and then administrator will confirm your request and <br />you will able to do payment and then you can print your pass.Students will get special concession for bus pass.<br />Travel Buss pass is an economical, sustainable, and hassle-free way to travel. Save money on transportation while reducing your carbon footprint.</p><br><br>
        <div class="row">
            <div class="col-6">
                <h1 class="header2"><b>Download</b></h1>
                <h4 class="header3"><b>Our App</b></h3>

                <p class='lead2'>Explore, Travel, and Save Time with Our Bus Pass App!<br>Tired of waiting in long queues to get your bus pass? Say goodbye to the hassle with our state-of-the-art Bus Pass App. Enjoy a seamless and efficient travel experience while saving both time and money!</p>
                <p class="lead3">Why Choose Our Bus Pass App?
                <ul>
                    <li>Quick and Easy: No more waiting in lines, get your bus pass instantly<br> with just a few clicks.</li>
                    <li>Convenient Payments: Enjoy hassle-free payments through secure and reliable transactions.</li>
                    <li>Real-Time Updates: Stay updated with real-time information on bus schedules, routes, and more.</li>
                    <li>User-Friendly Interface: Navigate easily with our intuitive and user-friendly design.</li>
                </ul></p><br><br>
                &emsp;&emsp;&emsp;<img src="image/playstore.png" alt="" width="30%">&emsp;&emsp;&emsp;<img src="image/app store.png" alt="" width="30%">
            </div>
            <div class="col-6">
                <img src="image/mobile.png" alt="" width="40%" style="margin-left:30%"/>
            </div>
        </div>
    </section>
    <!--Section Content Ends-->
    <!--Footer Starts-->
    <footer class=" ender text-center text-white">
        <!-- Grid container -->
        <div class="container p-4">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
      
          <!-- Section: Text -->
          <section class="mb-4">
            <p>
            You can avoid all the hassles and get hassle-free rides with Travel Buss Pass. It's the best time to buy now.
            </p>
          </section>
          <!-- Section: Text -->
          <!-- Section: Form -->
          <section class="">
            <form action="">
              <!--Grid row-->
              <div class="row d-flex justify-content-center">
                <!--Grid column-->
                <div class="col-auto">
                  <p class="pt-2">
                    <strong>Sign up for our newsletter</strong>
                  </p>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-md-5 col-12">
                  <!-- Email input -->
                  <div class="form-outline form-white mb-4">
                    <input type="email" id="form5Example21" class="form-control" />
                    <label class="form-label" for="form5Example21">Email address</label>
                  </div>
                </div>
                <!--Grid column-->
      
                <!--Grid column-->
                <div class="col-auto">
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-outline-light mb-4">
                    Subscribe
                  </button>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->
            </form>
          </section>
          <!-- Section: Form -->
        </div>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2020 Copyright:
          <a class="text-white" href="https://vibinrajesh-portfolio.000webhostapp.com/">Vibinraj Rajesh</a>
        </div>
        <!-- Copyright -->
      </footer>
      <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="/js/modal.js"></script>
</body>
</html>