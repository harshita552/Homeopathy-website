<?php
require 'configs/config.php';
session_start(); // Start the session
?>

<!doctype html>
<html lang="en">

<head>
    <?php
    require "./body/before_body.php";
    ?>

    <style>
        .slider {
            position: relative;
            overflow: hidden;
        }

        .slider li {
            position: relative;
            list-style: none;

            height: 100vh;
            /* Adjust height as needed */
            background-size: cover;
            background-position: center;
            opacity: 0.8;
            /* Adjust opacity level */
        }

        .slider-layer {
            position: absolute;
            top: 0;
            left: 0;

            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            /* Background overlay color and opacity */
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            /* Text color */
            padding: 20px;
            text-align: center;
        }

        .slider-layer h1,
        .slider-layer p {
            margin: 0;
            padding: 0;
        }

        .slider-layer .btn {
            display: inline-block;
            background-color: #fff;
            color: #000;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            text-decoration: none;
        }

        /* .gallery-images{
            height: auto;
            width: 300px;
        } */

        .gallery-images img {
            width: 100%;
            height: 200px !important;
            /* Set your desired height and mark it as important */
            max-width: 400px;
            /* Set your desired width */
            object-fit: cover;
            /* This will crop the image to fit the specified dimensions */
        }
    </style>

    <style>
        .map-container {
            position: relative;
        }

        .card-overlay {
            position: absolute;
            top: 140px;
            left: 20px;
            z-index: 10;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 10px;
            width: calc(100% - 40px);
            max-width: 500px;
            height: auto;
        }

        .single-key {
            height: 300px;
            /* padding: 30px; */
        }

        .contact-background {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZjBxd4a2TvDnLKGRcvHmQxgniWc66CPGpntlfeuZrTaZjoAiL8atJR0nnzWbYq6BLgsw&s');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 20px;
            /* Adjust as needed to ensure content is readable */
        }
    </style>
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="assets/images/logo.jpg" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#about_us">About Us</a></li>
                            <!-- <li><a href="#blog">Blog</a></li> -->
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact_us">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) : ?>
                            <a href="./php/logout.php" class="btn btn-success">Logout</a>
                        <?php else : ?>
                            <a href="pages/login.php" class="btn btn-success">Login</a>
                            <!-- <a href="pages/signup.php" class="btn btn-success">Signup</a> -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ################# Slider Starts Here#######################--->

    <!--***************************** Slider Starts Here *****************************-->
    <div class="slider container-fluid">
        <ul id="slider">
            <li data-active="1" data-background="https://images.pexels.com/photos/7526011/pexels-photo-7526011.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <div class="slider-layer">
                    <div class="container">
                        <h1 class="animated slideInDown">You are in the Right Place <br> at the Right Time</h1>
                        <!-- <p class="animated zoomInLeft">Therefore do not be anxious about tomorrow, for tomorrow will be anxious for itself.<br> Sufficient for the day is its own trouble.</p> -->
                        <!-- <span class="animated fadeInLeftBig ">Matthew 6:34</span> -->
                        <div class="animated fadeInUpBig buttn-row">
                            <!-- <div class="btn">Read more</div> -->
                            <!-- <div class="btn">Donate Now</div> -->
                        </div>
                    </div>
                </div>
            </li>
            <li data-active="0" data-background="https://images.pexels.com/photos/7615463/pexels-photo-7615463.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <div class="slider-layer">
                    <div class="container">
                        <h1 class="animated slideInDown">You are in the Right Place <br> at the Right Time</h1>
                        <!-- <p class="animated zoomInLeft">Therefore do not be anxious about tomorrow, for tomorrow will be anxious for itself.<br> Sufficient for the day is its own trouble.</p> -->
                        <!-- <span class="animated slideInUp ">Matthew 6:34</span> -->
                        <div class="buttn-row animated zoomInLeft">
                            <!-- <div class="btn">Read more</div> -->
                            <!-- <div class="btn">Donate Now</div> -->
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--########## Slider Ends Here ##########-->

    <!-- ################# Key Features Starts Here#######################--->

    <section id="services" class="key-features">
        <div class="container">
            <div class="inner-title">
                <h2>Expertise at Your Fingertips:</h2>
                <!-- <p>Take a look at some of our key features</p> -->
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-key card rounded shadow d-flex align-items-center justify-content-center ">
                        <div class="d-flex align-items-center justify-content-center rounded-circle border-0 text-center " style="width: 100px; height: 100px;">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <h5>Consultation
                            scheduling</h5>
                        <p class="text-muted">You can visit our website to schedule an online session with doctors at your convenient time.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-key card rounded d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center justify-content-center rounded-circle border-0 text-center " style="width: 100px; height: 100px;">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h5>Virtual Consultation</h5>
                        <p>Connect through a secure online platform that allows you to discuss health concerns and history with qualified professionals.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-key card rounded d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center justify-content-center rounded-circle border-0 text-center " style="width: 100px; height: 100px;">
                            <i class="fas fa-edit"></i>
                        </div>
                        <h5>Tailored
                            Treatment Plans</h5>
                        <p>Every health concern is different with different symptoms. At Dr Chanchal, you receive a personalized treatment plan.</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="single-key card rounded d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center justify-content-center rounded-circle border-0 text-center " style="width: 100px; height: 100px;">
                            <i class="fa fa-users"></i>
                        </div>
                        <h5>Follow up</h5>
                        <p>We are committed to your journey to health. With regular follow ups we make sure that your progress is monitored.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!-- ################# With Medical Starts Here#######################--->

    <section id="about_us" class="with-medical">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <!-- <img class="rounded mt-3" src="https://images.pexels.com/photos/7526013/pexels-photo-7526013.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->

                    <img src="./images/drchanchal.jpeg" height="" alt="">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4 class="text-primary">Why choose Dr. Chanchal's Homeopathy Consultation <br>
                        <!-- <span>Medical Hospital</span> -->
                    </h4>
                    <div class="p-4">
                        <h6>The Benefits Beyond Borders:</h6>
                        <p>Location Independence: No matter where you reside—be it a bustling city or a remote area—quality healthcare is within reach. Dr. Chanchal’s online homeopathy consultation eliminates geographical barriers, bringing expert care to your doorstep.</p>
                        <br>
                        <h6>Comprehensive care for Chronic and Acute Conditions:</h6>
                        <p>Homeopathic remedies can address a wide range of health issues, both acute and chronic. Dr. Chanchal’s online consultation is tailored to meet diverse health needs, ensuring holistic care for all.</p>
                        <br>
                        <h6>The Follow-Up Journey:</h6>
                        <p>Wellness is an ongoing journey. At Dr. Chanchal's homeopathy online consultation, we prioritize regular follow-ups to monitor your progress and adjust treatments as needed, ensuring you stay on the path to optimal health.</p>
                        <br>
                        <h6>Expertise at Your Fingertips:</h6>
                        <p>Experience holistic healing from the comfort of your home. Dr. Chanchal’s homeopathy services bring professional care right to you, eliminating the need to leave your sanctuary.</p>
                        <br>
                        <h6>Navigating the Virtual Consultation Experience:</h6>
                        <p>Scheduling your consultations is seamless with Dr. Chanchal’s homeopathy services. Enjoy the flexibility to book appointments at your convenience, making it easier to fit healthcare into your busy life.</p>
                        <br>
                        <h6>Customized Homeopathic Care:</h6>
                        <p>Our online sessions delve deep into your ailments, health history, and lifestyle concerns. Dr. Chanchal’s homeopathy consultations are designed to provide personalized care that addresses the root causes of your health issues.</p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- <section id="about_us" class="with-medical">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src="./images/drchanchal_7.jpeg" height="" alt="">
                </div>
                <div class="col-lg-6 col-md-12">
                    <h4 class="text-danger">More About Dr. Chanchal Kumar Jain <br>
                    </h4>
                    <div class="p-1">
                        <h6>BHMS, MD - Homeopathy</h6>
                        <h6>23 Years Experience Overall</h6>
                        <p>Dr. Chanchal Kumar Jain is a Homoeopath practicing in Kolar road, Bhopal. He has a humongous experience of 18 years in the field of homeopathy and is a master in Reiki Healing. Dr. Chanchal Jain is also a professor and head of department (HOD) in the department of Repertory at Narayan Shree Homoeopathic Medical College & Hospital, Bhopal. Dr. Chanchal Jain practices at Jain Homoeo Hall, Kolar Road, Bhopal. <br><br>

                            He is a master healer in various problems like A migraine, Gastroenterological complaints, female & menstrual cycle problems, Pediatric complaints, Piles, Fissures, Renal Stone, Prostate, Recurrent Tonsillitis, all kind of Allergies like Asthma, hay Fever, Urticaria, Allergic Rhinitis, different allergies to food. <br><br>

                            Dr. Chanchal Jain has conducted a comprehensive research for 2 years on skin disorder especially for Acne and its Scar problems, Freckles and Pigmentation and Dark Ring Around the eyes. As a result, he has come up with a product "Clean o fresh" to make skin bright, fresh and clear. <br><br>

                            Dr. Chanchal Kumar Jain is a shiv yogi. He regularly meditates and prays for his patients from Bhagwan Mahamrityunjay and from his Guru Avadhoot Baba Shivanand Ji. He gives healing of Shivyog Shakti to the patient if required. <br><br>

                            The doctor is not only a gold medalist he is also a Limca book of the record holder.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section> -->

    <!--  ************************* Blog Starts Here ************************** -->
    <!-- <div id="blog" class="blog">
        <div class="row session-title">
            <h2>Latest Blog</h2>
            <p>We can talk for a long time about advantages of our Dental clinic before other medical treatment facilities.
                But you can read the following facts in order to make sure of all pluses of our clinic:</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="blog-singe no-margin row">
                        <div class="col-sm-5 blog-img-tab">
                            <img src="assets/images/blog/blog_01.jpg" alt="">
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <h2>Why Primary treatment is important ?</h2>
                            <p><i class="fas fa-user"><small>Admin</small></i> <i class="fas fa-eye"><small>(12)</small></i> <i class="fas fa-comments"><small>(12)</small></i></p>
                            <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                            <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="blog-singe no-margin row">
                        <div class="col-sm-5 blog-img-tab">
                            <img src="assets/images/blog/blog_02.jpg" alt="">
                        </div>
                        <div class="col-sm-7 blog-content-tab">
                            <h2>Why Primary treatment is important ?</h2>
                            <p><i class="fas fa-user"><small>Admin</small></i> <i class="fas fa-eye"><small>(12)</small></i> <i class="fas fa-comments"><small>(12)</small></i></p>
                            <p class="blog-desic">Lorem Ipsum, type lorem then press the shortcut. The default keyboard shortcut is the same keyboard shortcut is the </p>
                            <a href="blog_single.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- ######## Blog End ####### -->

    <!--  ************************* Gallery Starts Here ************************** -->
    <div id="gallery" class="gallery">
        <div class="container">
            <div class="row">


                <div class="gallery-filter d-none d-sm-block">
                    <!-- <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="hdpe">Cancer Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Bronchitis Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="spray"> Thyroid Disorder Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Lifestyle Disorders Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">PCOD/PCOS Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Chronic Kidney Disease ( CKD )</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Yoga Therapy</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Diabetes Management</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Pigmentation Disorder</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Acne / Pimples Treatment</button> -->

                    <button class="btn btn-default filter-button" data-filter="all">All</button>
                    <button class="btn btn-default filter-button" data-filter="all">Cancer Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="all">Bronchitis Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="all"> Thyroid Disorder Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="all">Lifestyle Disorders Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="all">PCOD/PCOS Treatment</button>
                    <button class="btn btn-default filter-button" data-filter="all">Chronic Kidney Disease ( CKD )</button>
                    <button class="btn btn-default filter-button" data-filter="all">Yoga Therapy</button>
                    <button class="btn btn-default filter-button" data-filter="all">Diabetes Management</button>
                    <button class="btn btn-default filter-button" data-filter="all">Pigmentation Disorder</button>
                    <button class="btn btn-default filter-button" data-filter="all">Acne / Pimples Treatment</button>

                </div>
                <br />
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="./images/homeopathy_10.jpeg" height="100%" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img height="100%" src="https://lh3.googleusercontent.com/p/AF1QipOf9s4oQzR7dvzSV7fPIxMTszrqn9QveDIqFioO=s1360-w1360-h1020" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="./images/homeopathy_11.jpeg" height="100%" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="./images/drchanchal_4.jpeg" height="100%" class="img-responsive ">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="./images/drchanchal_7.jpeg" height="100%" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="./images/drchanchal_3.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe gallery-images">
                    <img src="./images/homeopathy_2.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray gallery-images">
                    <img src="./images/homeopathy_8.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray gallery-images">
                    <img src="./images/homeopathy_12.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe gallery-images">
                    <img src="./images/homeopathy_9.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray gallery-images">
                    <img src="./images/homeopathy_7.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray gallery-images">
                    <img src="./images/homeopathy_4.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation gallery-images">
                    <img src="./images/homeopathy_1.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation gallery-images">
                    <img src="./images/homeopathy_3.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation gallery-images">
                    <img src="./images/homeopathy_5.jpeg" class="img-responsive">
                </div>

            </div>
        </div>


    </div>
    <!-- ######## Gallery End ####### -->

    <!-- ################# Our Team Starts Here#######################--->
    <!-- <section class="our-team">
        <div class="container">
            <div class="inner-title row">
                <h2>Our Team</h2>
                <p>Take a look at our Team</p>
            </div>
            <div class="row team-row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb1.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. Chanchal Jain</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb2.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. Chanchal Jain</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb3.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. Chanchal Jain</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-usr">
                        <img src="assets/images/team/team-memb4.jpg" alt="">
                        <div class="det-o">
                            <h4>Dr. Chanchal Jain</h4>
                            <i>Facial Surgan</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section> -->

    <!--  ************************* Contact Us Starts Here ************************** -->

    <section id="contact_us" class="contact-us-single contact-background">
        <div class="row no-margin">
            <div class="col-sm-6 no-padding map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14671.05385456644!2d77.4172972!3d23.1788316!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c430c16474287%3A0xcc2fcdbf5aea6e4f!2sDr.%20Chanchal%20kumar%20Jain%20Homeopathic%20doctor%20in%20Bhopal%2C%20Madhya%20Pradesh%20SK%20plaza!5e0!3m2!1sen!2sin!4v1719569362666!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <div class="card-overlay">
                    <div class="col-md-12 col-sm-12 map-img">
                        <h2>Contact Us</h2>
                        <address class="md-margin-bottom-40">
                            <h6 class="fw-bold">Address:</h6>
                            45/3, S.K. Plaza,
                            Kolar Road,
                            <h6 class="fw-bold"> Landmark :</h6>
                            Near Kwality Homes And Opposite Bank Of Baroda, Bhopal<br>
                            <h6 class="fw-bold"> Phone: </h6>
                            <a href="tel:+9107942683672"> +91 07942683672</a>
                            <h6 class="fw-bold"> Email: </h6>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=drchanchalkumarjain@gmail.com" target="_blank">drchanchalkumarjain@gmail.com</a>
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 cop-ck">
                <h1>Enquiry Form</h1>
                <form action="php/enquiry.php" method="post">
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="address" placeholder="Enter Email Address" class="form-control input-sm"></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Message:</label></div>
                        <div class="col-sm-8">
                            <textarea rows="5" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button type="submit" name="submit" class="btn btn-success btn-sm">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ################# Footer Starts Here#######################--->

    <div class="container-fluid bg-primary text-white p-3">
        <div class="row">
            <div class="col-md-6 mx-5">
                <h3>
                    <i class="fa fa-phone"></i> CALL NOW
                    <a class="text-white mx-3" href="tel:+919425009030">Call +91 94250 09030</a>

                </h3>
            </div>
        </div>
    </div>
    <div class="container p-4">
        <div class="row justify-content-center text-center p-2">
            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fas fa-shield-alt text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">Boosts Immunity</p>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fa fa-leaf text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">Natural, Safe & Effective</p>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fa fa-heartbeat text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">No side effects</p>
            </div>
        </div>

        <div class="row justify-content-center text-center p-2">
            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fa fa-search text-primary" style="font-size: 40px;"></i>
                </div>
                <p class="mt-2">Treats the root cause of the problem</p>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fas fa-sad-tear text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">Addresses emotional concerns like stress & anxiety</p>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fa fa-hourglass text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">Provides Symtomatic Relief</p>
            </div>
        </div>

        <div class="row justify-content-center text-center p-2">
            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fas fa-pills text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">Decreased Tendency and Frequency of Recurrence</p>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fas fa-hand-holding-usd text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">Cost Effective</p>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-center">
                <div class="d-flex align-items-center justify-content-center rounded-circle border border-primary" style="width: 100px; height: 100px;">
                    <i class="fas fa-users text-primary" style="font-size: 50px;"></i>
                </div>
                <p class="mt-2">Safe for all Age Groups</p>
            </div>
        </div>
    </div>

    <div class="copy">
        <div class="container">
            <a href="">2015 &copy; All Rights Reserved | Developed by Innobimb InfoTech</a>
            <span>
                <a href="https://www.instagram.com/spiritmindbodydoc/?igsh=MTl1a2s0ZmJjNm05OQ%3D%3D"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@drchanchalkumarjain"><i class='fab fa-youtube'></i></a>
                <!-- <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a> -->
                <a href=""><i class="fab fa-facebook-f"></i></a>
            </span>
        </div>
    </div>

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/js/script.js"></script>

</html>