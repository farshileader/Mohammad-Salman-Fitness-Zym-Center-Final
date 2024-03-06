<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: white;
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
      padding: 15px;
      grid-row: 1 / span 2;
      overflow: hidden;
    }

    .item2 {
      grid-column: 2;
      margin-top: 0px;
      padding: 5px;
      grid-row: 2;
      overflow: hidden;
    }


    .item3 {
      grid-column: 2;
      grid-row: 1;
      overflow: hidden;
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      text-align: center;
      font-size: 16px;
    }

    /* Style the FontAwesome icons */
    .item3 i {
      color: #007BFF;
      /* Icon color */
      font-size: 24px;
      /* Icon size */
      margin-right: 8px;
      /* Space between icon and text */
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
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <h1 class="a">Contact Information</h1>

  <div class="grid-container">
    <div class="grid-item item1">
      <img src="1.png" alt="Gym Image" style="max-width: 100%; height: auto;">
    </div>

    <div class="grid-item item3">
      <h1>Our Location</h1>
      <p>
        <i class="fas fa-map-marker-alt"></i> Address: 1129/5, Dhaka Cantonment, Dhaka-1206
      </p>
      <p>
        <i class="fas fa-phone"></i> Phone: +880 01613795715
      </p>
      <p>
        <i class="far fa-envelope"></i> Email: mohammad.salman.diu@gmail.com
      </p>
    </div>

    <div class="grid-item item2">
      <h2>Google Map Location</h2>
      <p>
        <iframe width="500" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.6354449259387!2d90.39341481436595!3d23.827352584552796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8656347a5f3%3A0x4d6c2c41671722d!2sDhaka%20Cantonment!5e0!3m2!1sen!2sbd!4v1643182168961!5m2!1sen!2sbd"></iframe>
      </p>
    </div>

  </div>

</body>

<h1 class="b"></h1>

</html>

<?php include('footer.php'); ?>