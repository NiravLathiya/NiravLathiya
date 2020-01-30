<?php
$con = mysqli_connect("localhost", "root", "", "nill");
$servername = "localhost";
$username = "username";

if (isset($_POST['submit'])) {
    // echo "<pre>";
    // print_r($_POST);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO `nill`(`name`,`email`,`comments`)VALUES('$name','$email','$comments')";
    mysqli_query($con, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nirav Lathiya - Proffesional Experience In Web Designing</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Retrina group" />

    <!--  FavIcon  -->
    <link rel="shortcut icon" href="assets/img/Group 1.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!--  plugins Css  -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
    <!--  Custom Style CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    <body class="pilling-page nill-dark"  data-spy="scroll" data-target="#scrollspy" data-offset="1">

    <!--  Pre Loader  -->
    <div id="overlayer">
        <span class="spinner-grow spinner-grow-lg loader" role="status" aria-hidden="true"></span>
    </div>


        <!-- Blog Single Modal -->
        <div class="blog-single modal fade" id="blog-single" tabindex="-1" role="dialog" aria-labelledby="blogModalScrollable" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="blogModalScrollable">Write Your Dreams</h5>
                        <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--   Blog-single   Start -->
                        <div class="pt-4 pb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1 blog">
                                        <div class="rounded px-lg-5">
                                            <div class="text-md-left">
                                                <h4 class="mb-4">The best way to become a good web designer</h4>
                                                <img src="assets/img/blog-single-01.jpg" alt="" class="img-fluid w-100 rounded">
                                                <span class="d-inline-block py-4"> 1 April 2019
                                        / By <span class="purple-color text-right"> John Doe. </span>
                                        </span>
                                                <p class="text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <div class="px-md-5 px-3 py-4 quotation">
                                                    <i class="base-color lni-quotation size-md"></i>
                                                    <h6 class="base-color font-italic mb-0">We Love Buna, lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula felis euismod semper.</h6>
                                                </div>
                                                <p class="my-3 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                                <ul class="list-unstyled mt-4 checkmark-list">
                                                    <!-- Item-01 -->
                                                    <li class="mb-2">
                                                        <span class="text-muted ml-1">The purpose of lorem ipsum is to create</span>
                                                    </li>
                                                    <!-- Item-02 -->
                                                    <li class="mb-2">
                                                        <span class="text-muted ml-1">In particular, the garbled words of lorem ipsum</span>
                                                    </li>
                                                    <!-- Item-03 -->
                                                    <li class="mb-2">
                                                        <span class="text-muted ml-1">occasionally circumstances occur in which toil</span>
                                                    </li>
                                                </ul>

                                                <!--Blog Reply-->
                                                <div class="contact mt-4">
                                                    <div class="contact-form">
                                                        <h2 class="text-left mb-4">Leave a reply</h2>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6 form-item">
                                                                    <div class="form-group">
                                                                        <input name="name" id="blog-name" type="text" class="form-control" placeholder="Your Name*" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 form-item">
                                                                    <div class="form-group">
                                                                        <input name="email" id="blog-email" type="email" class="form-control" placeholder="Your Email*" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 form-item">
                                                                    <div class="form-group">
                                                                        <textarea name="comments" id="blog-comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12 mt-4 text-left">
                                                                    <button type="submit" class="pill-button" id="blog-submit-btn">Submit</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--   Blog-Single End  -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Single Modal -->
        <div class="portfolio-single modal fade" id="portfolio-single" tabindex="-1" role="dialog" aria-labelledby="portfolioModalScrollable" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 class="modal-title" id="portfolioModalScrollable">My Work</h5>
                        <button type="button" class="close text-muted" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="pt-4 pb-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-10 offset-md-1">
                                        <div class="text-center">
                                            <h2 class="text-dark mb-3">Single <span class="base-color"> Portfolio</span></h2>
                                            <p class="text-muted max-width-450">In a professional context it often happens that private clients corder a publication to be made.</p>
                                        </div>
                                        <div class="row contact-info mt-5">
                                            <div class="col-md-4">
                                                <div class="text-center">
                                                    <div>
                                                        <h6>Created by:</h6>
                                                        <p class="text-muted mb-0">John Doe</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 p-title-border mt-3 mt-md-0">
                                                <div class="text-center">
                                                    <div>
                                                        <h6 class="contact_detail-title">Completed on:</h6>
                                                        <p class="text-muted mb-0">September 30, 2019</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mt-3 mt-md-0">
                                                <div class="text-center">
                                                    <div>
                                                        <h6>Skills:</h6>
                                                        <p class="text-muted mb-0">HTML5 / PHP / CSS3</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <div class="portfolio-single-item">
                                                <img src="assets/img/005.jpg" class="d-block w-100 rounded" alt="...">
                                            </div>
                                        </div>
                                        <div class="text-md-left mt-5">
                                            <p class="my-3 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                            <p class="mt-3 mb-0 text-muted">These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. These words are here to provide the reader with a basic impression of how actual text will appear in its final presentation. Only for show.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--  Page Pilling  Strat  -->
    <div id="pagepiling" class="pagepiling">

        <!--   Header Start -->
        <header>
            <div class="logo-area">
                <a href="index.html" class="logo">
                    <img src="assets/img/Group 1.png" alt="">
                </a>
            </div>
            <div class="header-info-area">
                <a class="overlay-menu-toggler lni-menu size-md" href="javascript:void(0);"></a>
            </div>
        </header>
        <!--   Header End   -->

        <!--    Overlay Menu Start    -->
        <div class="overlay-menu bg-blue py-3 px-4 text-center center-item">
            <!-- Overlay Menu -->
            <div id="scrollspy" class="overlay-menu-list">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 overlay-nav">
                            <ul class="list-group text-left" id="myMenu">
                                <li data-menuanchor="hero" class="list-group-item"><a href="#hero">Home</a></li>
                                <li data-menuanchor="about" class="list-group-item"><a href="#about">About me</a></li>
                                <li data-menuanchor="services" class="list-group-item"><a href="#services">Services</a></li>
                                <li data-menuanchor="portfolio" class="list-group-item"><a href="#portfolio">Portfolio</a></li>
                                <li data-menuanchor="client" class="list-group-item"><a href="#testimonial">Client</a></li>
                                <li data-menuanchor="blog" class="list-group-item"><a href="#blog">Blog</a></li>
                            </ul>
                            <ul class="list-group contact-info text-left mb-0">
                                <li class="list-group-item"><span>Contact Info :</span></li>
                                <li class="list-group-item"><span><i class="lni-map-marker"></i> Surat, India</span></li>
                                <li class="list-group-item"><span><i class="lni-phone-handset"></i><a href="tel:+918153812212">+91 8153812212</a></span></li>
                                <li class="list-group-item"><span><i class="lni-envelope"></i><a href="mailto:Niravlathiya212@gmail.com">Niravlathiya212@gmail.com</a></span></li>
                                <li class="list-group-item"><span>Follow me :</span></li>
                                <li class="list-group-item">
                                    <ul class="list-inline socails">
                                        <li class="list-inline-item"><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="lni-github-original"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="lni-linkedin-original"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    Overlay Menu End    -->

        <!--    Hero Start    -->
        <section class="section pp-scrollable hero hero-02 full-screen p-0 bg-dark" id="hero">
            <div class="container-fluid">
                <div class="title-small">
                    <p class="text-dark">Home</p>
                </div>
                <div class="row justify-content-center" id="hero-slider">
                    <div class="owl-carousel owl-theme">
                        <!--  Item1 -->
                        <div class="hero-slide hero-item1 full-screen"></div>
                        <!--  Item2 -->
                        <div class="hero-slide hero-item2 full-screen"></div>
                        <!--  Item3 -->
                        <div class="hero-slide hero-item3 full-screen"></div>
                    </div>
                </div>
                <div class="text-center hero-content">
                    <div class="col-lg-12">
                        <div class="hero-content text-center">
                            <img src="assets/img/hero.jpg" alt="" class="rounded-circle img-thumbnail">
                            <h3 class="text-dark mb-0 mt-3">I'M Nirav Lathiya</h3>
                            <h1 class="text-dark text-capitalize mb-3"><span class="base-color">A  </span> <span class="element" data-elements="UI Designer.,Web Designer.,Web Developer."></span></h1>
                            <div>
                                <ul class="list-inline social-icon mt-2">
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-facebook-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-twitter-filled text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-github-original text-dark"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void(0);"><i class="lni-linkedin-original text-dark"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-icon">
                    <a href="#about">
                        <i class="lni-arrow-down text-dark size-sm"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--    Hero End    -->

        <!--   About Start   -->
        <section id="about" class="section pp-scrollable about text-dark bg-dark">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">About me</p>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <img src="assets/img/about.jpg" alt="/" class="rounded img-thumbnail w-100">
                            </div>
                            <div class="col-lg-6 personal-item  mb-4 mb-lg-0">
                                <h2 class="text-dark mb-2">About <span class="base-color">Me</span></h2>
                                <h5 class="text-dark mb-3">Hello I'M Nirav Lathiya</h5>
                                <div class="row">
                                    <div class="col-lg-5 col-sm-6 personal-info">
                                        <p class="text-dark">Birthday : <span class="text-gray"> 29 July 2000</span></p>
                                        <p class="text-dark">Website : <span class="text-gray"><a href="www.niravlathiya.github.io" class="text-white">www.niravlathiya.github.io</a></span></p>
                                        <p class="text-dark">Phone : <span class="text-gray"><a href="tel:+918153812212" class="text-white">+91 8153812212</a></span></p>
                                        <p class="text-dark">City : <span class="text-gray"> Surat, INDIA</span></p>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 personal-info">
                                        <p class="text-dark">Age : <span class="text-gray">20</span></p>
                                        <p class="text-dark">Degree : <span class="text-gray">bachelor</span></p>
                                        <p class="text-dark">Mail : <span class="text-gray"><a href="mailto:Niravlathiya212@gmail.com " class="text-white">Niravlathiya212@gmail.com</a></span></p>
                                        <p class="text-dark">Freelance : <span class="text-gray">Available</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#contact" class="pill-button mt-3 mb-lg-0">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="count-up" class="text-center">
                            <div class="container">
                                <div class="row mt-4">
                                    <!-- Item-01 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-download size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="28" data-speed="5000">28</span>
                                        </div>
                                        <p class="mb-0 ">Files Download</p>
                                    </div>
                                    <!-- Item-02 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-pencil-alt size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="10" data-speed="5000">10</span>
                                        </div>
                                        <p class="mb-0">Project Done</p>
                                    </div>
                                    <!-- Item-03 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-medall size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="5" data-speed="5000">5</span>
                                        </div>
                                        <p class="mb-0">Get Award</p>
                                    </div>
                                    <!-- Item-04 -->
                                    <div class="col-6 col-md-3 mt-5 mb-md-0 count-item">
                                        <div class="count-icon">
                                            <i class="lni-emoji-smile size-md"></i>
                                        </div>
                                        <div class="count-content">
                                            <span class="timer count-number" data-from="0" data-to="3" data-speed="5000">3</span>
                                        </div>
                                        <p class="mb-0">Happy Client</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--    About End    -->

        <!--   Resume Start   -->
        <section id="resume" class="section pp-scrollable resume bg-dark">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Resume</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Resume</span></h2>
                                    <p class="text-muted">I Am Available For Freelance Projects.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2"><i class="lni-graduation base-color"></i>Education</h3>
                                <ul class="timeline">
                                    <li>
                                        <h6 class="base-color mb-0">11thand 12th Commerce</h6>
                                        <small class="text-muted ">2016 - 2018</small>
                                        <p class="text-dark py-3">Commerce is the conduct of trade among economic agents. Generally, commerce refers to the exchange of goods, services or something of value, between businesses or entities.</p>
                                    </li>
                                    <li>
                                        <h6 class="base-color mb-0">Studied at SRK University</h6>
                                        <small class="text-muted ">2018 - 2020</small>
                                        <p class="text-dark py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h3 class="text-dark mb-2 mt-5 mt-lg-0"><i class="lni-pencil base-color"></i>Experience</h3>
                                <ul class="timeline">
                                    <li>
                                        <h6 class="base-color mb-0">UI/UX Developer </h6>
                                        <small class="text-muted ">2018 - 2019</small>
                                        <p class="text-dark py-3">JV Softs</p>
                                    </li>
                                    <li>
                                        <h6 class="base-color mb-0">Web Designer</h6>
                                        <small class="text-muted ">Current</small>
                                        <p class="text-dark py-3">I am Currently Work Here as Web Designer Post</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row pt-6">
                            <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>HTML</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">95%</div>
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>CSS</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>PHP</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>JQuery</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="skill-box pt-4 pt-lg-0 mt-4 mt-lg-0">
                                    <div class="skillbar clearfix" data-percent="95%">
                                        <div class="skillbar-title"><span>angular js</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">95%</div>
                                    </div>
                                    <div class="skillbar clearfix " data-percent="85%">
                                        <div class="skillbar-title"><span>javascript</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">85%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="75%">
                                        <div class="skillbar-title"><span>wordpress</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">75%</div>
                                    </div>
                                    <div class="skillbar clearfix" data-percent="80%">
                                        <div class="skillbar-title"><span>Photoshop</span></div>
                                        <div class="skillbar-bar"></div>
                                        <div class="skill-bar-percent">80%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Resume End   -->

        <!--   Services Start   -->
        <section id="services" class="section pp-scrollable services bg-dark">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">My Services</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark mb-3">My <span class="base-color">Services</span></h2>
                                    <p class="text-muted">Services I Offer To My Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Item 01 -->
                            <div class="col-lg-4 text-left">
                                <div class="services-item">
                                    <div class="float-left mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-brush-alt size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Graphic Design</h5>
                                        <p class="text-muted mb-0">I have used the same methodology in many of the projects and have delivered over the top UX results for the clients. As a leading UI & UX design agency, Narola creates user interfaces that will fit your vision.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 02 -->
                            <div class="col-lg-4 text-left">
                                <div class="services-item">
                                    <div class="float-left mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-check-mark-circle size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Web Designing</h5>
                                        <p class="text-muted mb-0">Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design; authoring, including standardised code and proprietary software; user experience design; and search engine optimization</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 03 -->
                            <div class="col-lg-4 text-left">
                                <div class="services-item">
                                    <div class="float-left mt-lg-1 d-inline-block services-icon">
                                        <i class="lni-heart size-md base-color"></i>
                                    </div>
                                    <div class="services-content">
                                        <h5 class="mb-3">Web Development</h5>
                                        <p class="text-muted mb-0">Web development is the work involved in developing a web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services</p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Services End   -->

        <!--  Portfolio Start  -->
        <section id="portfolio" class="section pp-scrollable portfolio bg-dark">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Portfolio</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">Creative <span class="base-color">Works</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Meet My Awesome Works and Enjoy</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!--   Portfolio Filters   -->
                            <ul id="portfolio-filter" class="list-unstyled list-inline mb-0 col-lg-12 text-left portfolio-filter">
                                <li class="list-inline-item">
                                    <a href="#" data-filter="*" class="active my-1">All</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".webdesign" class="my-1">Web Design</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".mobiledesign" class="my-1">Mobile Design</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".seo" class="my-1">Seo</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-filter=".graphic" class="my-1">Graphic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="portfolio-items mt-4 row">
                            <!-- Item 03 -->
                            <div class="col-lg-4 portfolio-item my-3 webdesign graphic">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/003.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-toggle="modal" data-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/003.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 04 -->
                            <div class="col-lg-4 portfolio-item my-3 webdesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/004.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-toggle="modal" data-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/004.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 05 -->
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/005.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-toggle="modal" data-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/005.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 06 -->
                            <div class="col-lg-4 portfolio-item my-3 webdesign seo">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/007.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-toggle="modal" data-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/007.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 07 -->
                            <div class="col-lg-4 portfolio-item my-3 mobiledesign">
                                <div class="portfolio-item-content rounded">
                                    <img src="assets/img/portfolio/009.jpg" alt="/">
                                    <div class="img-overlay text-center">
                                        <div class="img-overlay-content">
                                            <div class="portfolio-icon">
                                                <button type="button" data-toggle="modal" data-target="#portfolio-single">
                                                    <i class="lni-link"></i>
                                                </button>
                                                <a href="assets/img/portfolio/009.jpg" class="js-zoom-gallery">
                                                    <i class="lni-search"></i>
                                                </a>
                                            </div>
                                            <h5 class="text-white mt-3 mb-0">My Work</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Portfolio End   -->

        <!-- Testimonial Start -->
        <section id="testimonial" class="section pp-scrollable testimonial text-center bg-dark">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Testimonial</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">My  <span class="base-color">Clients</span></h2>
                                    <p class="text-muted mt-1">What my clients say about me</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <div class="">
                                    <!-- Item 01 -->
                                    <div class="testimonial-item text-left">
                                        <p class="mb-2 text-muted">" A professional Freelancer with good working environment and Experience."</p>
                                        <div class="float-left mt-4 mr-3 mr-sm-4">
                                            <img src="assets/img/client-04.png" alt="/" class="rounded-circle">
                                        </div>
                                        <h4 class="float-left mt-5">-Mark Den, <span class="font-weight-bold">Seo Manager</span></h4>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Testimonial End  -->

        <!--   Contact Start   -->
        <section id="contact" class="section pp-scrollable contact bg-dark">
            <div class="display-table">
                <div class="display-content">
                    <div class="container">
                        <div class="row">
                            <div class="title-small">
                                <p class="text-dark">Get in Touch</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="text-left">
                                    <h2 class="text-dark">Get <span class="base-color">In Touch</span></h2>
                                    <p class="text-muted mx-auto section-subtitle mt-3">Feel Free To Contact Me Any Time</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-lg-6 text-left">
                                <div class="contact-form">
                                    <h6 class="font-weight-semibold">Let’s Get Work With Me </h6>
                                    <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                                    <div class="mt-4">
                                        <p class="mt-2 font-weight-bold"> Address : <span class="text-muted"> 441,Tulsi Arcade, near Sudama Chowk, Mota Varachha, Surat, Gujarat 394101</span></p>
                                        <p class="mt-2 font-weight-bold"> Phone : <span class="text-muted"><a href="tel:+918153812212" class="text-white">+91 8153812212</a></span></p>
                                        <p class="mt-2 font-weight-bold"> Mail : <span class="text-muted"><a href="mailto:Niravlathiya212@gmail.com" class="text-white">Niravlathiya212@gmail.com</a></span></p>
                                        <p class="mt-2 font-weight-bold"> Web : <span class="text-muted"><a href="https://Niravlathiya.github.io" class="text-white">Niravlathiya.github.io</a></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 text-left">
                                <h6 class="font-weight-semibold">How can I help you ? </h6>
                                <form id="contactForm" class="form mt-3">
                                    <div class="row">
                                        <div class="col-lg-12 form-item">
                                            <div class="form-group">
                                                <input name="name" id="name" type="text" class="form-control" placeholder="Your Name*" required >
                                            </div>
                                        </div>
                                        <div class="col-lg-12 form-item">
                                            <div class="form-group">
                                                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email*" required >
                                            </div>
                                        </div>
                                        <div class="col-12 form-item">
                                            <div class="form-group">
                                                <textarea name="comments" id="comments" rows="2" class="form-control h-auto" placeholder="Your message..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-1 text-left">
                                            <button type="button" class="pill-button" id="submit-btn" onclick="sendEmail()">Send Message</button>
                                            <div id="message" class="toast text-white shadow-none border-0" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                                <div class="toast-body d-inline-block"></div>
                                                <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                                    <span aria-hidden="true" class="lni-close size-xs text-white"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Contact End   -->

        <!--   Footer Start   -->
        <div id="footer" class="section pp-scrollable footer">
            <div class="container-fluid">
                <div class="row py-6">
                    <div class="title-small">
                        <p class="text-dark">Footer</p>
                    </div>
                    <div class="text-center m-auto">
                        <p class="text-dark size-sm"><img src="assets/img/Group 1.png" alt=""></p>
                        <ul class="list-inline socails">
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-facebook-filled text-dark mr-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-twitter-filled text-dark mr-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-github-original text-dark mr-2"></i></a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="lni-linkedin-original text-dark mr-2"></i></a></li>
                        </ul>
                        <p class="pl-3 text-dark">Copyright © 2020. This Site  has been designed by <a class="base-color" href="index.html">Nirav Lathiya</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--   Footer End   -->


    </div>
    <!--  Page Pilling  End -->


    <!--  JavaScripts  -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!--  Plugins JS  -->
    <script src="assets/js/plugins.js"></script>
    <!-- Map Js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcmB207_E3E4SkA8jTA8FQjSWTop9YxZU"></script>
    <!--  Custom JS  -->
    <script src="assets/js/nill.js"></script>

    <script>
		document.onkeydown = function (e) {
			if (e.keyCode == 123) {
				return false;
			}
			if (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
				return false;
			}
			if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
				return false;
			}
			if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
				return false;
			}

			if (e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
				return false;
			}
		}
	</script>
	<script language="JavaScript">
		/**
		 * Disable right-click of mouse, F12 key, and save key combinations on page
		 * By Arthur Gareginyan (arthurgareginyan@gmail.com)
		 * For full source code, visit https://mycyberuniverse.com
		 */
		window.onload = function () {
			document.addEventListener("contextmenu", function (e) {
				e.preventDefault();
			}, false);
			document.addEventListener("keydown", function (e) {
				//document.onkeydown = function(e) {
				// "I" key
				if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
					disabledEvent(e);
				}
				// "J" key
				if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
					disabledEvent(e);
				}
				// "S" key + macOS
				if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
					disabledEvent(e);
				}
				// "U" key
				if (e.ctrlKey && e.keyCode == 85) {
					disabledEvent(e);
				}
				// "F12" key
				if (event.keyCode == 123) {
					disabledEvent(e);
				}
			}, false);

			function disabledEvent(e) {
				if (e.stopPropagation) {
					e.stopPropagation();
				} else if (window.event) {
					window.event.cancelBubble = true;
				}
				e.preventDefault();
				return false;	
			}
		};
	</script>
    </body>
</html>