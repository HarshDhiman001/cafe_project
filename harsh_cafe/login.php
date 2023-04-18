<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Deep Cafe</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Sofia&effect=neon|outline|emboss|shadow-multiple">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- Navbar & Hero Start -->
<?php include 'navbar.php'; ?>
    <!-- Navbar & Hero End -->
        <!--main content data-->
        <section class="contactus">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-4 mb-5 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info">
                        <div class="address mt-4">
                            <i class="bi bi-geo-alt-fill"></i>
                            <h4 class="mb-2">Location:</h4>
                            <p>160055 Mohali, chandigarh</p>
                        </div>
                        <div class="open-hours mt-4">
                            <i class="bi bi-clock"></i>
                            <h4 class="mb-2">Open Hours:</h4>
                            <p>
                                Sunday-Friday:<br>
                                11:00 AM - 2300 PM
                            </p>
                        </div>
                        <div class="email mt-4">
                            <i class="bi bi-envelope-fill"></i>
                            <h4 class="mb-2">Email:</h4>
                            <p>deepcafe@info.com</p>
                        </div>
                        <div class="phone mt-4">
                            <i class="bi bi-telephone-fill"></i>
                            <h4 class="mb-2">Call:</h4>
                            <p>+91- 00000-00000</p>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <form action="loginadmin.php" method="post">
                        <div class="row">
                            <!-- <div class="col-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div> -->
                            <div class="col-12 mb-3">
                                <label for="">Enter Your Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-12 mb-3">
                            <label for="">Enter Your Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <input type="submit" value="Login" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
                <img src="images/deepcafe.jpg" class="rounded float-right" alt="...">
            </div>
        </div>
    </section>
    <!--main content data-->
    <?php
    include 'footer.php';
    ?>