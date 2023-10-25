<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spooky-Afro Night</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&family=Dosis:wght@200;300;400;500;600;700;800&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Teko:wght@500;700&family=Yanone+Kaffeesatz:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FavIcon -->
    <!-- Credits: Justas Galaburda. (2023). Pumpkin Cat [SVG image]. https://www.svgrepo.com/svg/426988/pumpkin-cat -->
    <link rel="shortcut icon" href="./img/pumpkin-cat-svgrepo-com.svg" type="image/x-icon">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- CSS styles -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    
    <main class="landing-section"> 

        <nav class="navbar navbar-expand-lg rounded" aria-label="Spooky Navbar">
            <div class="container-fluid">

                <button class="navbar-toggler custom-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSpooky" aria-controls="navbarSpooky" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse d-lg-flex" id="navbarSpooky" >
                    <a class="navbar-brand col-lg-3 me-0 ms-3 nav-style" href="https://thecodeevent.com">TheCode_Event</a>
                    <ul class="navbar-nav col-lg-6 justify-content-lg-around">
                        <li class="nav-item">
                        <a class="nav-link active nav-style" style="color: #CF0A0A;" aria-current="page" href="./giveaway-register.php">Giveaway</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active nav-style" style="color: #CF0A0A;" aria-current="page" href="https://instagram.com/thecode_event">About</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active nav-style" style="color: #CF0A0A;" href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">FAQ</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active nav-style" style="color: #CF0A0A;" href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Rules</a>
                        </li>
                    </ul>

                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        <button class="btn btn-spooky me-5 nav-btn-spooky"><a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Get Ticket</a></button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Small Screen Content -->
        <div class="container-fluid d-lg-none landing-mobile-section my-2">

            <div class="row d-flex flex-column">
                
                <div class="col">
                    <div class="row">
                        <h1 class="spooky-title text-center mb-0" style="font-size: 13vw;">Spooky Afro Night</h1>
                        <div class="d-flex flex-column gap-0">
                            <h3 class="text-center text-white mb-0" style="font-family: 'yanone kaffeesatz', sans-serif; font-size: 5vw;">28 october 2023</h3>
                            <div class="d-flex flex-row justify-content-center gap-2" >
                                <i class="bi bi-geo-alt text-white"></i>
                                <h4 class="text-center text-white mb-4" style="font-family: 'yanone kaffeesatz', sans-serif; font-weight: 200;" >ottawa</h4>
                            </div>
                        </div>
                        <button class="btn btn-spooky btn-spooky btn-spooky-mobile mx-auto mb-2">
                            <div ><a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Get ticket</a></div>
                        </button>
                    </div>
                </div>

                <div class="col text-center">
                    <img src="/img/webp-img/character-img-mobile.webp" class="img-fluid" alt="">
                </div>
                
                <div class="col">
                    <div class="row row-front mx-sm-1 mx-lg-4 mx-sm-auto">
                        
                        <div>
                            <p class="paragraph-text mx-2" style="text-align: justify;">
                                Afro Spooky Night promises an exhilrating blend of Halloween festivities and Afro culture.
                                <br> <br>Dive into the music, flaunt your costumes, and revel in a night of unforgettable memories.
                                <br><br>Don't miss out on this unique fusion party - mark your calendars and embrace the Afro-Halloween spirit!
                                See you there!
                            </p>
                        </div>

                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col time-heading time-heading-days-mobile">Days:</div>
                            <div class="col" ><h4 id="days-mobile" class="time time-heading-mobile">14</h4></div>
                        </div>
                        <div class="row d-flex flex-row align-items-center justify-content-between">
                            <div class="col ">
                                <div class="time-heading">Hours</div>
                                <div><h4 id="hours-mobile" class="time">08</h4></div>
                            </div>
                            <div class="col">
                                <div class="time-heading">Seconds</div>
                                <div><h4 id="seconds-mobile" class="time">45</h4></div>
                            </div>
                        </div>
            
                    </div>
                </div>

            </div>
            

        </div>

        <!-- Large Screen Content -->
        <div class="mx-4 container-fluid h-100 landing-section-large-screen my-2 d-none d-lg-block">

            <div class="row h-100 align-items-center">

                <div class="col-8 h-100">
                    <h1 class="spooky-title">Spooky Afro Night</h1>
                    <p class="paragraph-text">
                        Afro Spooky Night promises an exhilrating blend of Halloween festivities and Afro culture. 
                        Dive into the music, flaunt your costumes, and revel in a night of unforgettable memories. 
                        Don't miss out on this unique fusion party - mark your calendars and embrace the Afro-Halloween spirit! See you there!
                    </p>
                    
                    <div class="container-fluid align-items-center d-flex flex-row">

                        <div class="col">
                            <button class="btn btn-spooky">
                                <div style="font-size: larger;" ><a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Get Ticket</a></div>
                            </button>
                        </div>
                        <div class="col-8 justify-content-center d-flex flex-row container-fluid" >
                            <div class="col">
                                <div class="time-heading" >Days</div>
                                <div><h4 id="days-screen" class="time">14</h4></div>
                            </div>
                            <div class="col">
                                <div class="time-heading">Hours</div>
                                <div><h4 id="hours-screen" class="time" >08</h4></div>
                            </div>
                            <div class="col">
                                <div class="time-heading">Seconds</div>
                                <div><h4 id="seconds-screen" class="time" >45</h4></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col h-100">
                    <div class="img-wrapper">
                        <img src="./img/webp-img/character-img-2.webp" class="img-fluid img-sizing" alt="">
                    </div>
                </div>

            </div>

        </div>

    </main>

    <div class="music-section">
        
        <div class="container-fluid music-section-container">

            <div class="row d-flex flex-column align-items-center">
                <h2 class="title-music text-center">One <span class="title-accent-music">Beat</span>,<br>Infinite <span class="title-accent-music">Afro Heat</span>.</h2>
                <img src="/img/webp-img/dj-witch.webp" loading="lazy" alt="dj-witch" class="rounded-5 img-fluid img-music-large">
            </div>

        </div>

        <div class="container-fluid">

            <div class="row d-flex flex-column align-items-center">
                <h2 class="heading-music">Our <span class="title-accent-music">Non-Negotiable<br> Tunes;</span></h2>
            </div>

            <div class="row music-list-main-container my-4">
                <div class="col">
                    <div class="d-flex flex-column music-list-container align-items-center">
                        <h2 class="music-category">Coupé-Décalé</h2>
                        <ul>
                            <li>1er Gaou</li>
                            <li>Chérie Coco</li>
                            <li>Reins</li>
                            <li>Gnomi avec lait</li>
                            <li>Mets Dedans</li>
                            <li>Maplorly</li>
                            <li>Gnakpa</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column music-list-container align-items-center">
                        <h2 class="music-category">Amapiano</h2>
                        <ul>
                            <li>Mnike</li>
                            <li>Tanzania</li>
                            <li>Midnight Prayer</li>
                            <li>Amapiano</li>
                            <li>Ojapiano</li>
                            <li>Abo Mvela</li>
                            <li>Big Flexa</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column music-list-container align-items-center">
                        <h2 class="music-category">Afrobeats</h2>
                        <ul>
                            <li>Sability</li>
                            <li>Charn</li>
                            <li>Calm Down</li>
                            <li>Nwa Baby (Ashawo)</li>
                            <li>Do Me, P-Square</li>
                            <li>Ku Lo Sa</li>
                            <li>Unavailable</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column music-list-container align-items-center">
                        <h2 class="music-category">Kompa</h2>
                        <ul>
                            <li>Coller la petite</li>
                            <li>Douce Tankou Sirop</li>
                            <li>Something Going On</li>
                            <li>La Dernière Danse </li>
                            <li>Chocolate</li>
                            <li>Baby Boy</li>
                            <li>Ancré à mon port </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="d-flex flex-column music-list-container align-items-center">
                        <h2 class="music-category">Hip-Hop</h2>
                        <ul>
                            <li>Bop</li>
                            <li>Just Wanna Rock</li>
                            <li>Rich Flex</li>
                            <li>Dior</li>
                            <li>Shake Sum</li>
                            <li>Family Ties</li>
                            <li>Hot N*gga</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center fs-4 pb-4 spacing-btn-spooky-music">
                <button class="btn btn-spooky btn-spooky-larger"><a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Get Ticket</a></button>
            </div>

        </div>
    </div>

    <div class="line-section">

        <div class="container-fluid h-100">

            <div class="row h-100 d-flex flex-lg-nowrap">

                <div class="col-lg-8 col-sm-12 px-0 img-line-container">
                    <img src="/img/webp-img/line-img-cropped-2.webp" loading="lazy" class="img-fluid img-line-mobile" alt="">
                </div>

                <div class="col d-flex flex-column justify-content-around" style="background-color: #dc5f00;">
                    <h2 class="line-title">Enjoy <br> Halloween <br class="d-none d-lg-block"> Like You <br class="d-none d-lg-block" > Never Did</h2>
                    <ul class="line-list" >
                        <li>Unforgettable Memories</li>
                        <li>Spooky Afro Fun</li>
                        <li>Meet new energetic people</li>
                        <li>Budget Friendly</li>
                        <li>Stress Relief</li>
                    </ul>
                    <div class="text-center fs-4 pb-4">
                        <button class="btn btn-spooky btn-spooky-larger btn-line spacing-btn-line"><a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Get Ticket</a></button>
                    </div> 
                </div>

            </div>
        </div>
    </div>

    <div class="why-coming-section">
        <div class="container-fluid">
            <div class="row mx-4">
                <div class="col-lg-6 col-sm-12">
                    <h2 class="title-coming"> Why coming <br> is the best <br class="no-hidden-sm"> <span class="title-coming-accent"> DECISION <br class="no-hidden-sm" > </span> of your <span>life.</span> </h2>
                </div>
                <div class="col">
                    <p>
                        There are few times in <span>life</span> where you are presented with a key opportunity, and here we offer you the chance to enjoy an <span>Afro</span> Halloween Night. Dancing through the beats all night along, meeting energetic and funny individuals. 
                        <br> <br> 
                        Afro Spooky Night isn't just a celebration, it's a journey back in time, where every dance move make you stronger. <span>It's a chance</span> to be whoever you want to be, even if it's just for a night.
                        <br> <br> 
                        The <span>invaluable memories</span> you’ll make that night, the amazing people you’ll meet, the unique vibe you’ll feel, that is what we promise, and we always delivered on <span>our promise</span>. Jump into the night with us, we can’t wait for you!</p>
                    <div class="text-center fs-4 pb-4 spacing-btn-spooky-music">
                        <button class="btn btn-spooky"><a href="https://www.eventbrite.ca/e/afro-spooky-night-tickets-734436408067">Get Ticket</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    
    <div class="show-off-section d-none">
        <div class="container-fluid">
            <div class="row flex-column fill-width-title">
                <div class="col">WE THE BEST</div>
                <div class="col text-end">AT MAKING</div>
                <div class="col">FIRE EVENTS.</div>
            </div>

            <div class="mx-3 row row-cols-1 row-cols-lg-2 mt-5 content-container">
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img src="https://picsum.photos/500" class="img-fluid" alt="">
                    <h3 class="title-show-off">Lorem ipsum mara</h3>
                    <p class="date" >23/08/2023</p>
                    <a href="https://instagram.com/thecode_event">lorem ipsum mara, opeir sara →</a>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img src="https://picsum.photos/500" class="img-fluid" alt="">
                    <h3 class="title-show-off">Lorem ipsum mara</h3>
                    <p class="date" >23/08/2023</p>
                    <a href="https://instagram.com/thecode_event">lorem ipsum mara, opeir sara →</a>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img src="https://picsum.photos/500" class="img-fluid" alt="">
                    <h3 class="title-show-off">Lorem ipsum mara</h3>
                    <p class="date" >23/08/2023</p>
                    <a href="https://instagram.com/thecode_event">lorem ipsum mara, opeir sara →</a>
                </div>
                <div class="col d-flex flex-column justify-content-center align-items-center">
                    <img src="https://picsum.photos/500" class="img-fluid" alt="">
                    <h3 class="title-show-off">Lorem ipsum mara</h3>
                    <p class="date">23/08/2023</p>
                    <a href="https://instagram.com/thecode_event">lorem ipsum mara, opeir sara →</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Boostrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="/scripts/countdown.js"></script>
  
</body>

</html>