<?php include('header.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: bisque;
    }

    .grid-container {
      display: grid;
      gap: 10px;
      background-color: white;
      padding: 10px;
    }

    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      text-align: center;
      padding: 0px;
      margin-top: 0%;
      font-size: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.2s;
      flex-direction: column;
      /* Vertical text layout */
    }

    .grid-item:hover {
      transform: scale(1.05);
    }

    .item1 {
      grid-column: 1;
      margin-top: 0px;
      padding: 0px;
      grid-row: 1 / span 2;
      overflow: hidden;
    }

    .item2 {
      grid-column: 2;
      grid-row: 1;
      text-align: left;
      margin-top: 39px;
      padding: 20px;
      font-size: 16px;
      overflow: hidden;
      width: fit-content;
    }

    .item3 {
      grid-column: 2;
      grid-row: 2;
      overflow: hidden;
      position: relative;
    }

    .a {
      text-align: center;
      background-color: white;
      margin-top: 10px;
      margin-bottom: 10px;
      font-size: 40px;
      font-style: italic;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .b {
      margin-top: 0px;
      margin-bottom: 10px;
      font-family: Georgia, 'Times New Roman', Times, serif;
      color: #007BFF;
    }

    .item4 {
      margin-top: 10px;
      grid-column: 1;
      grid-row: 3;
      overflow: hidden;
      position: relative;
    }

    .item5 {
      grid-column: 2;
      grid-row: 3;
      overflow: hidden;
      padding: 90px;
      margin: 30px;
      position: relative;
    }

    .slideshow-container {
      position: relative;
      max-width: 110%;
    }

    /* Style the slideshow images */
    .mySlides {
      display: none;
    }

    .mySlides img {
      width: 70%;

    }

    /* Style the navigation dots */
    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    /* Style the active dot */
    .active {
      background-color: #717171;
    }

    /* Additional styles for navigation icons (FontAwesome) */
    .prev,
    .next {
      position: absolute;
      top: 20%;
      font-size: 20px;
      cursor: pointer;
      color: #007BFF;
    }

    .next {
      right: 0;
    }

    .prev {
      left: 0;
    }
  </style>
</head>

<body>
  <h1 class="a">Welcome to our Fitness Gym Center</h1>

  <div class="grid-container">
    <div class="grid-item item1">
      <img src="1.png" alt="Gym Image" style="max-width: 100%; height: auto;">
      <h2>Our Gym Building</h2>
    </div>
    <div class="grid-item item2">
      <h4>
        Discover a place where fitness becomes a way of life. Welcome to the Mohammad Salman Fitness Gym Center, where your journey to a healthier and stronger you begins.
      </h4>
      <p>
        Our state-of-the-art fitness center is more than just a gym; it's a sanctuary of transformation, dedication, and inspiration.
      </p>
      <p>
        We are committed to helping you achieve your fitness goals, whether it's sculpting your body, increasing strength, improving endurance, or simply adopting a healthier lifestyle.
      </p>
      <p>
        Our team of experienced trainers and fitness experts is here to guide and motivate you every step of the way.
      </p>
      <p>
        Our gym is equipped with the latest fitness equipment and offers a wide range of workout programs and classes to suit your needs. We provide a supportive and inclusive environment where individuals of all fitness levels are welcome.
      </p>
      <h4>
        Join us at the Mohammad Salman Fitness Gym Center and embark on a journey towards a healthier, stronger, and happier you. Get ready to sweat, push your limits, and celebrate your achievements. Your fitness transformation starts here!
      </h4>
    </div>

    <div class="grid-item item3">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.769031124157!2d90.4229750149998!3d23.81314688455793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755a4492bd2c2c7%3A0x8a93e7237306fc61!2sDhaka%20Cantonment!5e0!3m2!1sen!2sbd!4v1663476404887!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>


    <div class="grid-item item4">
      <h1 class="b">Special Offers in our GYM</h1>
      <div class="slideshow-container">
        <div class="mySlides fade">
          <img src="1.png">
        </div>
        <div class="mySlides fade">
          <img src="2.png">
        </div>
        <div class="mySlides fade">
          <img src="3.png">
        </div>
        <div class="mySlides fade">
          <img src="4.png">
        </div>
        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>
    </div>

    <div class="grid-item item5">
      <h1>50% Discount running now</h1>
      <img src="3.png" alt="Gym Image" style="max-width: 100%; height: auto;">
    </div>

  </div>


  <script>
    var slideIndex = 0;

    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>

</body>

<h1 class="b"></h1>

</html>





<?php include('footer.php'); ?>