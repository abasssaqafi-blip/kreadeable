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
<div class="contact-cont">
    <div class="ready-to">
        <img src="contact.png">
        <h3>
         <span> Ready to build </span> <br> or have a question?
        </h3>
        <p>
          Send us a message and let’s create something impactful together.
        </p>
    </div>

    <div class="contact-form contact-form2 ">
        <?php  
            $word1 = "send";
            $word2 = "message";
            $wordComplete = $word1 . " " . $word2;
            echo $wordComplete;
        ?>   
    </div>
</div>

   <?php  include "./public/footer.php"; ?>

</body>
</html>