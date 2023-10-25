<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Dosis:wght@200;300;400;500;600;700;800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@500;700&family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FavIcon -->
    <!-- Credits: Justas Galaburda. (2023). Pumpkin Cat [SVG image]. https://www.svgrepo.com/svg/426988/pumpkin-cat -->
    <link rel="shortcut icon" href="./img/pumpkin-cat-svgrepo-com.svg" type="image/x-icon">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Icons Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- CSS styles -->
    <link rel="stylesheet" href="./styles/fonts.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./styles/thank-you-style.css">
    
</head>

<body>

    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        // Now you can use the $name variable in anotherfile.php
    } else {
        $name="";
    }
    ?>

<div class="thanks-section">
        <div class="container my-5 ">
            <h1 class="text-center" >Thanks You <?php echo ucfirst($name) ?>! </h1>

            <div class="text-center">
                <a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067"><img class="w-75 my-3 img-fluid" src="./img/webp-img/thanks-image-final.webp" alt="Thanks-You-image"></a>
            </div>

            <h3 class="text-center mb-5" style="text-decoration: underline;" >Next Steps ;</h3>

            <div class="steps-container">
                <h3>#1- Check your E-mail <i class="bi bi-envelope"></i> </h3>

                <p>We sent you an e-mail confirming your registration to our giveaway. If you did not receive the e-mail, let us know through our customer support
                <a href="mailto:info@thecodeevent.com?subject=Need Help With giveaway registration" target="_blank" rel="noopener noreferrer"><i class="bi bi-envelope"></i></a> </p>
            </div>

            <div class="steps-container">
                <h3>#2- Get your Unique ID <i class="bi bi-fingerprint"></i></h3>

                <p>In the e-mail we sent there is an unique ID that we will used to identify you and your costume </p>
            </div>

            <div class="steps-container">
                <h3>#3- Bring Your Awesome Costume! <i class="bi bi-fire"></i></h3>

                <p>We can't wait to see your awesome costume that you crafted for this halloween. We are certain you have a big chance to win it and we will always be transparent with you in this regards. <br> <br> If you don't have your ticket yet Hurry up to grab yours!
                </p>
                <button class="btn btn-spooky mt-4">
                    <div style="font-size: larger;"><a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Get Ticket</a></div>
                </button>
            </div>

            <div class="steps-container">
                <h3>#4- Follow Our Socials For More! <a href="https://instagram.com/thecode_event"><i class="bi bi-instagram"></i></a></h3>

                <p>Follow our social media for all the information related to the event and Happy Halloween!</p>
            </div>

            <div class="steps-container text-center mt-5">
                <a href="https://instagram.com/thecode_event">
                    <i style="font-size: 5em;" class="bi bi-instagram">
                    </i>
                </a>
                <p>@TheCode_Event</p>

            </div>
            
            <div class="help-container text-center" style="font-size: small;">
                <p>If you need help, reach out on our email : info@thecodeevent.com <a href="mailto:info@thecodeevent.com?subject=Need Help With giveaway registration" target="_blank" rel="noopener noreferrer"><i class="bi bi-envelope" ></i></a></p>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>