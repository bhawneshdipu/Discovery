<!DOCTYPE html>
<html lang="en">

@include('Welcome.head')
@include('Welcome.headernav')
<body class="">

<div class="container" style="padding: 0px;margin-top: 80px;width: 100%;">
    <div id="myCarousel" class="carousel slide " data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                <img src="images/Apple%20Chicken%20of%20Discovery%20Restaurant.jpg" alt="Slide 1" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Apple Chicken</h3>
                    <p>Discovery Restaurant</p>
                </div>
            </div>

            <div class="item">
                <img src="images/Egg Fried Rice of Discovery Restaurant.JPG" alt="Slide 2" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Egg Fried Rice</h3>
                    <p>Discovery Restaurant</p>
                </div>
            </div>

            <div class="item">
                <img src="images/Steam%20Basil%20Rice%20with%20Malysian%20Yellow%20Curry%20of%20discovery%20restaurant.JPG" alt="Slide 3" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Steam Basil Rice with Malysian Yellow Curry</h3>
                    <p>Discovery Restaurant</p>
                </div>
            </div>

            <div class="item">
                <img src="images/Szchuan Fried Rice of Discovery Restaurant.JPG" alt="Slide 3" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Szchuan Fried Rice</h3>
                    <p>Discovery Restaurant</p>
                </div>
            </div>

            <div class="item">
                <img src="images/Thai Peanut Noodle of Discovery Restaurant.JPG" alt="Slide 3" style="width:100%;">
                <div class="carousel-caption">
                    <h3>Thai Peanut Noodle</h3>
                    <p>Discovery Restaurant</p>
                </div>
            </div>



        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>



    </div>



    <div class=" bgimg-0 col-lg-12" >

        <div class=" col-lg-12 caption" style="margin-top: 2.5%" >
            <span class="border" >About Us</span>
        </div>
        <div class="col-lg-12">
            <div class="col-lg-6" style="margin-top: 10%;">
                <div class="col-lg-12 caption"  style="background-color: #0f0f0f">
                    <span class="border" >Best Moments</span>
                </div>
                <div class="col-lg-12" style="margin-top: 10%">
                    <div id="mysmallCarousel" class="carousel slide" data-interval="7000" data-ride="carousel" >
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#mysmallCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#mysmallCarousel" data-slide-to="1"></li>
                            <li data-target="#mysmallCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">

                            <div class="item active">
                                <img src="images/DDD_7556.JPG" alt="Slide 1" style="width:100%;">
                                <div class="carousel-caption  small">
                                    <h3>Combo</h3>
                                    <p>Discovery Restaurant!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/DDD_7602.JPG" alt="Slide 2" style="width:100%;">
                                <div class="carousel-caption small">
                                    <h3>Soup</h3>
                                    <p>Discovery Restaurant!</p>
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/DDD_7653.JPG" alt="Slide 3" style="width:100%;">
                                <div class="carousel-caption small">
                                    <h3>Chineese </h3>
                                    <p>Discovery Restaurant!</p>
                                </div>
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#mysmallCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#mysmallCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>



            </div>

            <div class="col-lg-6" style="margin-top: 10%;">
                <div class="col-lg-12 caption"  style="background-color: #0f0f0f">
                    <span class="border" >Contact us</span>
                </div>
            </div>

        </div>


        <div class=" col-lg-12 "  style="margin-top: 5%;margin-bottom: 5%">
            <div class="col-lg-12 caption">
                <span class="border" >We Are</span>
            </div>
        </div>


    </div>



</div>








@include('Welcome.footernav')
@include('Welcome.footnav')
</body>
</html>