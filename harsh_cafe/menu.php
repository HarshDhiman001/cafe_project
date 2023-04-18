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
<?php
include 'navbar.php';
?>

    <!--main page heading-->
    <section>
        <div class='image-background'>
            <div class='container h-100'>
                <div class='row h-100 align-items-center'>
                    <div class='col-12 text-center'>
                        <h1 class='display-2'>Our Menu</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--main page heading-->

    <!--main content data-->
    <section id="our_menu" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs menu_tab mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast"
                            role="tab">Breakfast</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch" role="tab">Lunch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner" role="tab">Dinner</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="tab-content col-lg-12" id="myTabContent">
                    <div class="tab-pane fade show active" id="breakfast" role="tabpanel"
                        aria-labelledby="breakfast-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single_menu">
                                    <img src="images/poha.jpg" alt="burger">
                                    <div class="menu_content">
                                        <h4>Poha<span>₹ 120/-</span></h4>
                                        <p>Poha, also known as pauwa, sira, chira, aval or avalakki-in Kannada language,
                                            among many other names.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/gobipratha.jpg" alt="black coffee">
                                    <div class="menu_content">
                                        <h4>Gobi ka Paratha <span>₹ 40/-</span></h4>
                                        <p>Gobi paratha is a type of paratha or, originating from the Indian
                                            subcontinent,that is stuffed with.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/cholebhature.webp" alt="fried rice">
                                    <div class="menu_content">
                                        <h4>Chhole Bhature <span>₹ 90/-</span></h4>
                                        <p>Chole bhature is a food dish popular in the Northern areas of the Indian
                                            subcontinent. </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="single_menu">
                                    <img src="images/uttpam.jpg" alt="burger">
                                    <div class="menu_content">
                                        <h4>Uttapam <span>₹ 70/-</span></h4>
                                        <p>An uttapam is a type of dosa from South India. Unlike a typical dosa, which
                                            is crisp.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/oats.jpg" alt="black coffee">
                                    <div class="menu_content">
                                        <h4>Oats <span>₹ 120/-</span></h4>
                                        <p>The oat, sometimes called the common oat, is a species of cereal grain grown
                                            for its seed, which is known by the same.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/upma.jpg" alt="fried rice">
                                    <div class="menu_content">
                                        <h4>Upma <span>₹ 80/-</span></h4>
                                        <p>Upma, uppumavu, or uppittu is a dish originating from the Indian
                                            subcontinent, most common in Kerala, Andhra Pradesh, .</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single_menu">
                                    <img src="images/pizza.jpg
                                    " alt="pizza">
                                    <div class="menu_content">
                                        <h4>12" Pizza <span>₹ 135/-</span></h4>
                                        <p>Pizza is a dish of Italian origin consisting of a usually round, flat base of
                                            leavened wheat-based dough topped.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/salad.jpg" alt="salad">
                                    <div class="menu_content">
                                        <h4>Salad <span>₹ 120/-</span></h4>
                                        <p>A salad is a dish consisting of mixed, mostly natural ingredients. They are
                                            typically served at room temperature.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/greentea.jpg" alt="green tea">
                                    <div class="menu_content">
                                        <h4>green tea <span>₹ 115/-</span></h4>
                                        <p>Green tea is a type of tea that is made from Camellia sinensis leaves and
                                            buds that have not undergone the same.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="single_menu">
                                    <img src="images/chickenburgger.jpg." alt="burger">
                                    <div class="menu_content">
                                        <h4>Chicken Burger <span>₹ 124/-</span></h4>
                                        <p>A chicken sandwich is a sandwich that typically consists of boneless,
                                            skinless chicken breast or thigh served.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/blackcoffee.jpg" alt="black coffee">
                                    <div class="menu_content">
                                        <h4>Black coffee <span>₹ 120/-</span></h4>
                                        <p>Black coffee may reduce your risk of cancer, liver cirrhosis, and type 2
                                            diabetes.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/friedrice.jpg" alt="fried rice">
                                    <div class="menu_content">
                                        <h4>Fried Rice <span>₹ 145/-</span></h4>
                                        <p>Fried rice is a dish of cooked rice that has been stir-fried in a wok or a
                                            frying pan such as eggs, vegetables, seafood.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinner-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single_menu">
                                    <img src="images/vegpulav.jpg" alt="burger">
                                    <div class="menu_content">
                                        <h4>Veg Pulav<span>₹ 160/-</span></h4>
                                        <p>Pilaf or pilau is a rice dish, or in some regions, a wheat dish, whose recipe
                                            usually involves cooking in stock or broth.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/planenaan.jpg" alt="black coffee">
                                    <div class="menu_content">
                                        <h4>Plain Naan <span>₹ 20/-</span></h4>
                                        <p>naan is more nutrient-dense than pita or white bread. While it may contain
                                            more carbs and sugars.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/shahikorma.jpg" alt="fried rice">
                                    <div class="menu_content">
                                        <h4>Shahi Korma <span>₹ 185/-</span></h4>
                                        <p>This super aromatic and delicious vegetable korma is made with potatoes,
                                            peas, carrots, French beans, onions.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="single_menu">
                                    <img src="images/matarpanner.webp" alt="burger">
                                    <div class="menu_content">
                                        <h4>Matar Paneer <span>₹ 190/-</span></h4>
                                        <p>Mattar paneer, also known as matar paneer, muttar paneer, and mutter paneer,
                                            is a modern restaurant-style.</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/mixveg.jpeg" alt="black coffee">
                                    <div class="menu_content">
                                        <h4>Mix Veg <span>₹ 120/-</span></h4>
                                        <p>
                                            Image result for mix veg what
                                            Mixed vegetables refer to ready to use combination of cut vegetables..</p>
                                    </div>
                                </div>
                                <div class="single_menu">
                                    <img src="images/SoyaButterMashala.jpg" alt="fried rice">
                                    <div class="menu_content">
                                        <h4>Soya Butter Mashala <span>₹ 145/-</span></h4>
                                        <p>ASoya Butter Masala is a simple but elegant dish without compromising on the taste from soy, tomatoes & cashew nut.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class=" menu_btn btn btn-danger">view more</a>
            </div>
        </div>
    </section>
    <!--main content data-->


    <!--footer section-->
<?php include 'footer.php'; ?>
    <!--footer section-->
</body>

</html>