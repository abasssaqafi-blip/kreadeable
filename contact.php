<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredible Technologies</title>
    <link rel="stylesheet" href="./assets/styles/main.css">
    <link rel="shortcut icon" href="./assets/images/kr-favicon.png" type="image/x-icon">
    <link href="https://fonts.cdnfonts.com/css/satoshi" rel="stylesheet">
</head>
    <body>

    <?php  include "./public/header.php"; ?>

<div id="contact-page">
    <h1>CONTACT US</h1>
    <div class="contact-us-cont">
        <p>
            Innovation requires action. At Kredible Technologies, we combine strategy, design, and engineering to deliver digital solutions that perform. When you're ready to move forward, we’re ready to build.
        </p>
    </div>
</div>

<div class="contact-cont">
    <div class="ready-to">
        <img src="./assets/images/contact.png">
        <h3>
         <span> Ready to build </span> <br> or have a question?
        </h3>
        <p>
          Send us a message and let’s create something impactful together.
        </p>
    </div>
    <div class="contact-form">
        <h3>Send a Message</h3>
        <form action="https://formspree.io/f/mojlgbjb" method="post">
            
            <input type="text" name="Firstname" class="name" placeholder="Firstname">
            <input type="text" name="Lastname" class="name"  placeholder="Lastname"> <br>
            <input type="email" name="Email" class="name"  placeholder="Email">
            <input type="number" name="phone-number" class="name" placeholder="Phone Number">
            <input type="text" name="Subject" class="name Subject" placeholder="Subject">
            <input type="text" name="message" class="name Subject comment" placeholder="Write a Message.......">
            <button class="hero-btn about-btn form-btn">
                <div class="work-w">
                    Submit <img src="./assets/images/arrow2.png">
                </div>
            </button>
        </form>
    </div>
</div>

<?php  include "./public/footer.php"; ?>

</body>
</html>