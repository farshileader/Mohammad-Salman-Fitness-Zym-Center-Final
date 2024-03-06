<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MOHAMMAD SALMAN FITNESS GYM CENTER</title>
    <style>
        header {
            background: linear-gradient(to right, #000000, purple, brown, yellow, green, pink);
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 140px;
            height: 140px;
            margin-right: 5px;
            margin-left: 10px;
            margin-top: 1px;
            margin-bottom: 1px;
            border-radius: 40%;
        }

        h1 {
            font-size: 36px;
            margin: 0;
        }

        nav {
            display: flex;
            align-items: right;
            justify-content: right;
            /* Centered navigation items */
        }

        nav a {
            text-decoration: none;
            color: #000000;
            background-color: #f1f1f1;
            padding: 8px;
            margin: 0 5px;
            margin-top: 0%;
            border: 1px solid transparent;
            border-radius: 50px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        nav a:hover {
            background-color: #eb88ff;
            border-color: #d8d7d7;
        }

        #Name {
            font-family: 'Helvetica Neue', sans-serif;
            font-weight: bold;
            font-size: 48px;
            color: white;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            letter-spacing: 2px;
            border-bottom: 2px solid #d400ff;
            display: inline-block;
            cursor: pointer;
            transition: color 0.3s;
            
        }

        #Name:hover {
            color: yellow;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="salmangymlogo.png" alt="Mohammad Salman Fitness Training Center Logo" />
            <h1 id="Name">Mohammad Salman Fitness Gym Center</h1>
        </div>
        <nav>
            <a href="home.php">HOME</a>
            <a href="service.php">SERVICES</a>
            <a href="about.php">ABOUT</a>
            <a href="contact.php">CONTACT</a>
            <a href="user.php">JOIN US</a>
            <a href="admin.php">ADMIN</a>
        </nav>
    </header>