<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michigan Page</title>
    <style>
        <?php 
        include 'CSS/bootstrap.min.css';
        include 'CSS/michigan.css';
        include 'CSS/styles.css';
         ?>
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> <!--Works with all of the fa, fab, and fas classes. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--Works for all of the fa classes NOT Discord or the Phone Icon-->
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark top-navigation">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav top-links">
                        <a class="navbar-brand text-white top-link home" href="index.php">Home</a>
                        <a class="nav-link text-white top-link about" href="about.php">About</a>
                        <a class="nav-link text-white top-link contact" href="contact.php">Contact</a>
                        <a class="nav-link text-white top-link story" href="story.php">Story</a>
                        <a class="nav-link text-white top-link travel" href="travel.php">Travel</a> 
                        <a class="nav-link text-white top-link projects" href="projects.php">Projects</a>
                        <p class="title">Michigan</p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="michigan-top-section">
            <h2 class="michigan-header">Michigan</h2>
        </section>
        <section>
            <h3 class="body-headers">Sawyer (The Dunes)</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sami.jpeg" alt="This is the picture of my friend Sami and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friend Sami and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.</p>
                            <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                        </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/nicole.jpeg" alt="This is the picture of my friend Nicole and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is the picture of my friend Nicole and I <br> sitting on a tree at The Dunes in Sawyer <br> Michigan.</p>
                        <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sami2.jpeg" alt="This is the picture of my friend Sami and I <br> in the clean mud of The Dunes in Sawyer <br> Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friend Sami and I <br> in the clean mud of The Dunes in Sawyer <br> Michigan.</p>
                            <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Clean mud of The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/nicole-sami.jpeg" alt="This is the picture of my friends Nicole and Sami in the clean mud of <br> The Dunes in Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Nicole and Sami in the clean mud of <br> The Dunes in Sawyer Michigan.</p>
                            <p class="card-text"><small class="text-muted">July 14, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Beach of the Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/gabi-nora.jpeg" alt="This is the picture of my friends Gabi and Nora at the beach in <br> Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Gabi and Nora at the beach in <br> Sawyer Michigan.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Beach of the Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sawyer2.jpeg" alt="This is the picture of my friends Alex, Kaitlin, Gabi, and Nora <br> at the beach in Sawyer Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Alex, Kaitlin, Gabi, and Nora <br> at the beach in Sawyer Michigan.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/alex.jpeg" alt="This is the picture of my friend Alex and I sitting on a tree at the Dunes.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friend Alex and I sitting on a tree at the Dunes.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/kaitlin-alex.jpeg" alt="This is the picture of my friends Alex, Kaitlin, and I sitting on a <br> tree at the Dunes covered in clean mud.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is the picture of my friends Alex, Kaitlin, and I sitting on a <br> tree at the Dunes covered in clean mud.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-3 mt-3 mr-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">The Dunes</div>
                        <img class="michigan-images" src="states-images/michigan-images/sawyer.jpeg" alt="This is a group picture of my friends and I sitting on a tree at <br> The Dunes.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a group picture of my friends and I sitting on a tree at <br> The Dunes.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Clean Mud</div>
                        <img class="michigan-images" src="states-images/michigan-images/alex2.jpeg" alt="This is a selfie taken by me of my friend <br> Alex and I covered in clean mud at <br> The Dunes.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a selfie taken by me of my friend <br> Alex and I covered in clean mud at <br> The Dunes.</p>
                            <p class="card-text"><small class="text-muted">August 10, 2019</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Lake Michigan Beach (Friends Lakehouse)</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lake Michigan Beach</div> 
                        <img class="michigan-images" src="states-images/michigan-images/nikki.jpeg" alt="This is a picture of my friend Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a picture of my friend Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.</p>
                            <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                        </div>
                    </div>
                    <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lake Michigan Beach</div>
                        <img class="michigan-images" src="states-images/michigan-images/nikki-chloe.jpeg" alt="This is an image of my friends Nikki, Chloe, <br> and I at Lake Michigan Beach on the <br> Fourth of July.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of my friends Nikki, Chloe, <br> and I at Lake Michigan Beach on the <br> Fourth of July.</p>
                    <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Lake Michigan Beach</div>
                        <img class="michigan-images" src="states-images/michigan-images/nikki2.jpeg" alt="This is an image of my friends Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.">
                <div class="card-body m-1">
                    <h5 class="card-title text-center" id="cardTitle"></h5>
                    <hr>
                    <p class="card-text" id="description">This is an image of my friends Nikki and I <br> at Lake Michigan Beach on the Fourth <br> of July.</p>
                    <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                </div>
                </div> 
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-3 m-1 mt-3" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Fireworks</div>
                        <img class="michigan-images" src="states-images/michigan-images/fireworks.jpeg" alt="This is an image of my friends Nikki, Chloe, <br> and I blowing up fireworks outside on the <br> Fourth of July.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is an image of my friends Nikki, Chloe, <br> and I blowing up fireworks outside on the <br> Fourth of July.</p>
                            <p class="card-text"><small class="text-muted">July 4, 2020</small></p>
                        </div>
                </div>
            </div>
        </section>
        <section>
            <h3 class="body-headers">Wakefield</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Cabin</div>
                    <img class="michigan-images" src="states-images/michigan-images/cabin.jpeg" alt="This is an image of me sitting inside my <br> cabin before skiing.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me sitting inside my <br> cabin before skiing.</p>
                        <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                    </div>
                </div>
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                    <img class="michigan-images" src="states-images/michigan-images/wakefield3.jpeg" alt="This is an image of me skiing in Wakefield <br> Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me skiing in Wakefield <br> Michigan.</p>
                        <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-3 mt-3 mr-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                    <img class="michigan-images" src="states-images/michigan-images/ski.jpeg" alt="This is an image of where I was skiing in Wakefield Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of where I was skiing in Wakefield Michigan.</p>
                        <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                    </div>
                </div>
                <div class="card mb-3 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                        <img class="michigan-images" src="states-images/michigan-images/wakefield4.jpeg" alt="This is a selfie of me skiing in Wakefield Michigan after I fell <br> and had snow all over my face.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a selfie of me skiing in Wakefield Michigan after I fell <br> and had snow all over my face.</p>
                            <p class="card-text"><small class="text-muted">January 22, 2022</small></p>
                        </div>
                </div>                
            </div>
        </section>
        <section>
            <div class="body-images">
                <div class="card mb-5 mt-3 mr-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                    <img class="michigan-images" src="states-images/michigan-images/wakefield.jpeg" alt="This is a selfie of me skiing in Wakefield Michigan.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is a selfie of me skiing in Wakefield Michigan.</p>
                        <p class="card-text"><small class="text-muted">January 23, 2022</small></p>
                    </div>
                </div>
                <div class="card mb-5 mt-3 ml-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">Wakefield</div>
                        <img class="michigan-images" src="states-images/michigan-images/wakefield2.jpeg" alt="This is a selfie of me skiing in Wakefield Michigan.">
                        <div class="card-body m-1">
                            <h5 class="card-title text-center" id="cardTitle"></h5>
                            <hr>
                            <p class="card-text" id="description">This is a selfie of me skiing in Wakefield Michigan.</p>
                            <p class="card-text"><small class="text-muted">January 23, 2022</small></p>
                        </div>
                </div>                
            </div>
        </section>
        <section>
            <h3 class="body-headers">Detroit</h3>
            <hr class="header-hr">
            <div class="body-images">
                <div class="card m-5" id="cardBody">
                    <div class="card-header text-center" id="featureTitle">German Event</div>
                    <img class="michigan-images" src="states-images/michigan-images/me.jpeg" alt="This is an image of me sitting inside <br> a bus on a way to a German event.">
                    <div class="card-body m-1">
                        <h5 class="card-title text-center" id="cardTitle"></h5>
                        <hr>
                        <p class="card-text" id="description">This is an image of me sitting inside <br> a bus on a way to a German event.</p>
                        <p class="card-text"><small class="text-muted">August 31, 2013</small></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="navbar navbar-dark bg-dark bottom-footer">
        <div class="bottom-links">
            <a href="https://www.facebook.com/adan.vivero97/" class="fa fa-facebook footer-links facebook"></a>
            <a href="https://www.instagram.com/adxadan/" class="fa fa-instagram footer-links instagram"></a>
            <a href="https://www.snapchat.com/" class="fa fa-snapchat-ghost footer-links snapchat"></a>
            <a href="https://www.youtube.com/channel/UC44ZQ3MDGUBNPA0ZFsY8Lfg" class="fa fa-youtube footer-links youtube"></a>
            <a href="https://www.linkedin.com/in/adan-vivero-a93970156/" class="fa fa-linkedin footer-links linkedin"></a>
            <i class="fa fa-stack-overflow footer-links stackoverflow"></i>
            <i class="fab fa-discord footer-links discord"></i> 
            <a href="#" class="fa fa-google footer-links google"></a> 
        </div>
        <div class="footer-nav">
            <a class="nav-link text-white footer-link" href="about.php">About</a>
            <a class="nav-link text-white footer-link" href="contact.php">Contact</a>
            <a class="nav-link text-white footer-link" href="story.php">Story</a>
            <a class="nav-link text-white footer-link" href="travel.php">Travel</a>
            <a class="nav-link text-white footer-link" href="projects.php">Projects</a>
        </div>
        <div>
            <span class="english" onclick="currentSlide(5)">English</span>
            <span class="spanish" onclick="currentSlide(6)">Spanish</span>
            <span class="copyright">© Copyright <script>document.write(new Date().getFullYear());</script> by Adan Vivero</span>
        </div>
</footer>
<script>
    <?php 
        include 'michigan.js';
    ?>
</script>
</body>
</html>