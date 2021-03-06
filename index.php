<?php
include "config.php";
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Godwin KODJO |<?php echo $lang['title'] ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="device-nav" id="nav-icon"><img src="images/menu-btn.png" class="img-fluid" /></div>
            <div class="row">
                <div class="col-lg-3 my-auto">
                    <div class="logo"><a href="index.html"><img src="images/logo.png" class="img-fluid" /></a></div>
                </div>
                <div class="col-lg-9 my-auto navigation">
                    <nav>
                        <ul>
                            <li><a href="#top"><?= $lang['home'] ?> </a></li>
                            <li><a href="#aboutme"><?= $lang['AboutUs'] ?> </a></li>
                            <li><a href="#myservices">Services </a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contactme"><?= $lang['contactus'] ?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="hero-section" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-auto">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="text-box">
                                <h1>HELLO, MY NAME IS</h1>
                                <h2>Godwin KODJO</h2>
                                <p>Obviously I'm a Web Designer. Web Developer with over 3 years of experience. Experienced with all stages of the development</p>
                                <a href="#" class="download">Download CV<span class="fa fa-download"></span></a>
                                <a href="#portfolio" class="portfolio">Portfolio</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-auto">
                    <div class="right-box">
                        <img src="images/top-person.png" class="img-fluid" /></div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="about-me" id="aboutme">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading-all">About Me</h2>
                </div>
            </div>
            <div class="row flex-row-reverse boxes-wrap">
                <div class="col-lg-7">
                    <div class="right-box">
                        <audio id="myAudio">
                            <source src="images/audio.mp3" type="audio/mpeg">
                        </audio>
                        <h3>I'm a Web Designer. </h3>
                        <p>
                            Lorem ipsum dolor sit amet,
                            <span class="play-stop">
                                <span class="audio-icon">
                                    <span class="fa fa-play" id="play" onclick="playAudio()"></span>
                                    <span class="fa fa-pause" id="pause" onclick="pauseAudio()"></span>
                                </span>
                            </span> consectetur adipiscing elit. Etiam fringilla pretium lacus, eu luctus neque ultricies a. Phasellus faucibus orci a purus mattis tincidunt ut non nulla. Donec ullamcorper sapien eget neque facilisis euismod.
                        </p>
                        <h4>Reach out through Social Media</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="social-media">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="icons youtube"><span class="fa fa-github"></span></div>
                                                @Godwin KODJO
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="icons facebook"><span class="fa fa-linkedin"></span></div>
                                                @Godwin KODJO
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="icons twitter"><span class="fa fa-twitter"></span></div>
                                                @Godwin KODJO
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="icons instagram"><img src="images/instagram.png" class="img-fluid" /></div>
                                                @Godwin KODJO
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="left-box"><img src="images/about-image1.svg" class="img-fluid" /></div>
                </div>

            </div>
        </div>
    </section>
    <section class="my-services" id="myservices">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading-all">My Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 boxes-wrap">
                    <div class="boxes">
                        <div class="image-main"><img src="images/web-design.jpg" class="img-fluid" /></div>
                        <h3>Web Design</h3>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 boxes-wrap">
                    <div class="boxes">
                        <div class="image-main"><img src="images/web-development.jpg" class="img-fluid" /></div>
                        <h3>Web Development</h3>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 boxes-wrap">
                    <div class="boxes">
                        <div class="image-main"><img src="images/website-managment.jpg" class="img-fluid" /></div>
                        <h3>Website Management</h3>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="work-experience" id="work">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-7">
                    <div class="right-box">
                        <h2 class="heading-all">Work Experties</h2>
                        <p>
                        </p>
                        <?= $lang['description'] ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="boxes">
                                    <!-- <div class="counter">80%</div> -->
                                    <img src="images/work-one.png" class="img-fluid" />
                                </div>
                                <div class="boxes">
                                    <!-- <div class="counter">75%</div> -->
                                    <img src="images/work-two.png" class="img-fluid" />
                                </div>
                                <div class="boxes">
                                    <!-- <div class="counter">90%</div> -->
                                    <img src="images/work-three.png" class="img-fluid" />
                                </div>
                                <div class="boxes">
                                    <!-- <div class="counter">86%</div> -->
                                    <img src="images/work-foure.jpg" class="img-fluid" />
                                </div>
                                <div class="boxes">
                                    <!-- <div class="counter">80%</div> -->
                                    <img src="images/work-five.jpg" class="img-fluid" />
                                </div>
                                <div class="boxes">
                                    <!-- <div class="counter">75%</div> -->
                                    <img src="images/work-six.png" class="img-fluid" />
                                </div>
                                <div class="boxes">
                                    <!-- <div class="counter">90%</div> -->
                                    <img src="images/work-seven.jpg" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="left-box"><img src="images/work-task.svg" class="img-fluid" /></div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading-all">My Portfolio</h2>
                </div>
            </div>
            <div class="row boxes-wrap">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-6">
                            <div class="boxes">
                                <a href="#" target="_blank"><img src="images/01.jpg" class="img-fluid" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6">
                            <div class="boxes">
                                <a href="#" target="_blank"><img src="images/02.jpg" class="img-fluid" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="boxes">
                                <a href="#" target="_blank"><img src="images/03.jpg" class="img-fluid" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-6">
                            <div class="boxes">
                                <a href="#" target="_blank"><img src="images/04.jpg" class="img-fluid" /></a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-6">
                            <div class="boxes">
                                <a href="#" target="_blank"><img src="images/05.png" class="img-fluid" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-me" id="contactme">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="heading-all">Contact Me</h2>
                </div>
                <div class="col-lg-12">
                    <form action="#" method="post">
                        <div class="row boxes-wrap">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Email</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Subject</label>
                                        <input type="text" placeholder="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Message</label>
                                        <textarea></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="text-center text-white bg-dark">
                <a href="index.php?lang=en"><?= $lang['lang_en']  ?></a> | <a href="index.php?lang=fr">
                    
                    <?$lang['lang_fr']?></a>
                 <p><?= $lang['mentions']  ?></p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2020 Godwin KODJO.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.smooth-scroll.js"></script>
    <script src="js/function.js"></script>
</body>

</html>