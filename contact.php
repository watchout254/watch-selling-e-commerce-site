<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/contact.css">
    <link rel="shortcut icon" href="./IMAGES/mziza.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css"
        integrity="sha512-EZLkOqwILORob+p0BXZc+Vm3RgJBOe1Iq/0fiI7r/wJgzOFZMlsqTa29UEl6v6U6gsV4uIpsNZoV32YZqrCRCQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/1cfb698203.js" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <title>F-WATCHES | CONTACT US</title>
</head>

<body>
    <section id="header"> <a href="index.php"> <img src="./IMAGES/vum.png" class="logo" alt="" width="50px"> </a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">HOME</a></li>
                <li><a href="shop.html">SHOP</a></li>
                <li><a href="blog.html">BLOG</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a class="active" href="contact.php">CONTACT</a></li>
                <li id="lg-bag"><a href="cart.html"> <img src="./IMAGES/cart.png" alt="" width="40px" height="40%"
                            class="cart"> </a></li>
                <a href="#" id="close"><img src="./IMAGES/tinga.png" alt="" width="15px"></a>
            </ul>
        </div>

        <div id="mobile">
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>


    <section id="page-header" class="blog-header">
        <h2>#Lets converse bana</h2> <br>
        <p>Any burning issue?...</p> <br>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>Itufikie bana</span>
            <h2>Visit one of our branches</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Utawala, mihang'o</p>
                </li>

                <li>
                    <i class="far fa-envelope"></i>
                    <p>mukenyadaniel299@gmail.com</p>
                </li>

                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+2547 905 099 98</p>
                </li>

                <li>
                    <i class="far fa-clock"></i>
                    <p>Mon-Sat: 8am - 6pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.822135457046!2d36.961775014854645!3d-1.2803835359811473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f6ca8bc774695%3A0xe822c3eebd1fc561!2sUtawala%20Complex%2C%20Eastern%20Bypass%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1663223147962!5m2!1sen!2ske"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-down<?php include_once 'header.php'; ?>grade"></iframe>
        </div>
    </section>


    <section id="form-details">
        <?php
        session_start();
         if(isset($_SESSION['success'])){
             echo '<p class="success">'.$_SESSION['success'].'</p>';
             unset($_SESSION['success']);
         }
            if(isset($_SESSION['error'])){
                echo '<p class="error">'.$_SESSION['error'].'</p>';
                unset($_SESSION['error']);
            }
        ?>
        <form action="consave.php" method="post">
            <span>Leave a message</span>
            <h2>We'd love to hear from you mazeee!!</h2>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Your name">

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="E-mail">

            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject" placeholder="Subject">

            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>

            <button type="submit">Send</button>
        </form>

        <div class="people">
            <div>
                <img src="./IMAGES/ttttt.jpg" alt="" width="100px">
                <p><span>Natasha G: Managing Director</span> <br>
                    Phone: +254123456789 <br>
                    Gmail:gnat01@gmail.com</p>
            </div>

            <div>
                <img src="./IMAGES/dddd.jpg" alt="" width="100px">
                <p><span>Mukenya D: Web&software developer</span> <br>
                    Phone: +254123456789 <br>
                    Gmail:weeee@gmail.com</p>
            </div>
        </div>

    </section>

    <footer class="section-p1">

        <div class="col">
            <img src="./IMAGES/vum.png" class="logo" alt="" width="50px">
            <h4>Contact</h4>
            <p><b>Address:</b>Nairobi CDB 00100</p>
            <p> <b>Phone:</b>+254790509998</p>
            <p><b>Hours:</b>8am-6pm Mon-Sat</p>

            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.html">About us</a>
            <a href="#">Delivery information</a>
            <a href="#">Privacy policy</a>
            <a href="#">Terms & condition</a>
            <a href="contact.php">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign in</a>
            <a href="cart.html">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track my order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From appstore or google play</p>
            <div class="row">
                <img src="./IMAGES/app.png" alt="" width="150" height="60">
                <img src="./IMAGES/play.png" alt="" width="150" height="60">
            </div>
            <p>Secured payment Gateways</p>
            <img src="./IMAGES/v1.jpg" alt="" width="80" height="50">
            <img src="./IMAGES/mc.png" alt="" width="80" height="50">
            <img src="" alt="">
        </div>

        <div class="copyright">
            &copy;2022, Daniel Mukenya &trade;,All rights reserved.
        </div>

    </footer>
</body>

</html>