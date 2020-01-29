<?php include("static/header.php"); ?>

<main class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Tibet Trekking Package</h1>
            <div class="slideshow">
                <div id="carousel" class="carousel slide">
                    <div class="item active" id="home-carousel-inner">
                        <img src="uploads/package/1.jpeg"
                             alt="Trekking in Tibet" class="fill"/>
                        <div class="carousel-caption">
                            Trekking in Tibet
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" style="border: 1px solid lightblue; border-radius: 5px; padding: 5px; margin-bottom: 15px;">
                <style>
                    .nav-tabs>li:before{
                        content: "" !important;
                        position: absolute;
                        left: 0;
                        top: 8px;
                    }
                    .nav-tabs>li>a:hover{
                        background-color: white !important;
                        color: black !important;
                     }
                    .nav-tabs>li>a:focus{
                        background-color: white !important;
                        color: black !important;
                    }
                    .pr-5{
                        padding-right: 15px !important;
                        line-height: 12px !important;
                    }
                </style>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#overview">OVERVIEW</a></li>
                    <li><a data-toggle="tab" href="#full_itinerary">FULL ITINERARY</a></li>
                    <li><a data-toggle="tab" href="#video_photos">VIDEO & PHOTOS</a></li>
                    <li><a data-toggle="tab" href="#note">NOTE</a></li>
                    <li><a data-toggle="tab" href="#map">MAP</a></li>
                </ul>
                <div class="tab-content" style="background-color: white; padding: 15px;">
                    <div id="overview" class="tab-pane fade in active">
                        <h2><b>TREKKING</b></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus doloremque doloribus harum quidem veniam. Est in nostrum optio sequi. Architecto consectetur delectus esse iste quas sapiente? Dicta error magnam optio.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto assumenda consequatur cumque deleniti dicta doloribus dolorum enim error eum fugit magni mollitia, natus nesciunt non similique sunt suscipit unde?</p>

                        <div class="content"><h3><b>OVERVIEW ITINERAR</b></h3></div>
                        <div class="content">
                            <b class="pr-5">Day 01:</b> Arrive
                        </div>
                        <div class="content">
                            <b class="pr-5">Day 02:</b> Trek
                        </div>
                        <div class="content">
                            <b class="pr-5">Day 03:</b> Rest
                        </div>
                        <div class="content">
                            <b class="pr-5">Day 04:</b> Departure
                        </div>

                        <div class="content"><h3><b>NOTE</b></h3></div>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut commodi consequatur, cum distinctio, ducimus excepturi libero minus officiis omnis placeat quaerat qui repudiandae sed sequi totam voluptatibus. Facere, impedit.
                        </div>

                    </div>
                    <style>
                        .ml-5{
                            margin-left: 25px !important;
                        }
                    </style>
                    <div id="full_itinerary" class="tab-pane fade">
                        <div class="content"><h3><b>FULL ITINERAR</b></h3></div>
                        <div class="content">
                            <h4><b class="pr-5">Day 01:</b> Arrive</h4>
                            <div class="content ml-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eligendi exercitationem, facilis itaque nihil odio possimus quo repellat reprehenderit tenetur totam voluptate. Eligendi, illo itaque labore quam quidem rerum sed!
                            </div>
                        </div>
                        <div class="content">
                            <h4><b class="pr-5">Day 02:</b> Trek</h4>
                            <div class="content ml-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eligendi exercitationem, facilis itaque nihil odio possimus quo repellat reprehenderit tenetur totam voluptate. Eligendi, illo itaque labore quam quidem rerum sed!
                            </div>
                        </div>
                        <div class="content">
                            <h4><b class="pr-5">Day 03:</b> Rest</h4>
                            <div class="content ml-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eligendi exercitationem, facilis itaque nihil odio possimus quo repellat reprehenderit tenetur totam voluptate. Eligendi, illo itaque labore quam quidem rerum sed!
                            </div>
                        </div>
                        <div class="content">
                            <h4><b class="pr-5">Day 04:</b> Departure</h4>
                            <div class="content ml-5">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur eligendi exercitationem, facilis itaque nihil odio possimus quo repellat reprehenderit tenetur totam voluptate. Eligendi, illo itaque labore quam quidem rerum sed!
                            </div>
                        </div>

                    </div>
                    <div id="video_photos" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <a img-src="uploads/slides/slide-1.jpg" title="Slide-1" label="image-0">
                                    <img class="img-thumbnail" src="uploads/slides/slide-1.jpg" alt="Special Photo Gallery"
                                         title="Special Photo Gallery">
                                </a>
                                <h3><strong>Special Photo Gallery</strong></h3>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <a img-src="uploads/slides/slide-2.jpg" title="Slide-2" label="image-1">
                                    <img class="img-thumbnail" src="uploads/slides/slide-2.jpg" alt="Special Photo Gallery"
                                         title="Special Photo Gallery">
                                </a>
                                <h3><strong>Special Photo Gallery</strong></h3>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <a img-src="uploads/slides/slide-3.jpg" title="Slide-3" label="image-2">
                                    <img class="img-thumbnail" src="uploads/slides/slide-3.jpg" alt="Special Photo Gallery"
                                         title="Special Photo Gallery">
                                </a>
                                <h3><strong>Special Photo Gallery</strong></h3>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <a img-src="uploads/slides/slide-4.jpg" title="Slide-4" label="image-3">
                                    <img class="img-thumbnail" src="uploads/slides/slide-4.jpg" alt="Special Photo Gallery"
                                         title="Special Photo Gallery">
                                </a>
                                <h3><strong>Special Photo Gallery</strong></h3>
                            </div>
                        </div>
                    </div>
                    <div id="note" class="tab-pane fade">

                        <div class="content"><h3><b>NOTE</b></h3></div>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut commodi consequatur, cum distinctio, ducimus excepturi libero minus officiis omnis placeat quaerat qui repudiandae sed sequi totam voluptatibus. Facere, impedit.
                        </div>

                    </div>
                    <div id="map" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>
                </div>

            </div>






            <div class="top-a">

                <ul>
                    <li class="col-md-6">
                        <div class="content card-box">
                            <div class="content w-100" style="overflow: hidden;">
                                <a href="treking-package.php">
                                    <img src="uploads/category/tour.jpeg"
                                         class="image-zoom w-100"
                                         alt="Tibet Trekking Package">
                                </a>
                            </div>
                            <div class="caption">
                                <h4><a href="treking-package.php" title="Tibet Trekking Package">Tibet Trekking Package</a>
                                </h4>
                                <p><strong>Best Trekking package in Tibet | Tibet Trekking Package</strong></p>
                                <p>Tibet Trekking Package offers you great opportunity to have unique experience&#8230;</p>
                                <div class="content text-right">
                                    <a href="treking-package.php" class="btn btn-info">Read More <i
                                            class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-6">
                        <div class="content card-box">
                            <div class="content" style="overflow: hidden;">
                                <a href="treking-package.php">
                                    <img src="uploads/category/tour-1.jpeg"
                                         class="image-zoom"
                                         alt="Tibet Tour Package">
                                </a>
                            </div>
                            <div class="caption">
                                <h4><a href="treking-package.php" title="Tibet Tour Package">Tibet Tour Package</a></h4>
                                <p>
                                    <strong>Tibet Tour Package | Tour Packages for Tibet</strong></p>
                                <p>An entire collection of different scenes in landlocked Tibet gives it
                                    an&#8230;</p>
                                <div class="content text-right">
                                    <a href="treking-package.php" class="btn btn-info">Read More <i
                                            class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-md-6">

                        <div class="content card-box">
                            <div class="content" style="overflow: hidden;">
                                <a href="treking-package.php">
                                    <img src="uploads/category/tour-2.jpeg"
                                         class="image-zoom" alt="Tibet Yoga and Meditation Tour Package">
                                </a>
                            </div>
                            <div class="caption">
                                <h4><a href="treking-package.php" title="Tibet Yoga and Meditation Tour Package">Tibet Yoga
                                        and
                                        Meditation Tour Package</a></h4>
                                <p><strong>Tibet Yoga and Meditation Tour Package | Tibet Yoga Tour Package</strong>
                                </p>
                                <p>Meditation & Yoga basically are the ancient art of&#8230;</p>
                                <div class="content text-right">
                                    <a href="treking-package.php" class="btn btn-info">Read More <i
                                            class="fa fa-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-4">
            <div class="page-right">
                <div class="list box">
                    <h2>Related Activities</h2>
                    <ul>
                        <li><a href="treking-package.php"
                               title="Tibet Tour Package">Tibet Tour Package</a></li>
                        <li><a href="treking-package.php"
                               title="Jungle Safari in Tibet">Jungle Safari in Tibet</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet River Rafting Package">Tibet River Rafting Package</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet Adventure Tour Package">Tibet Adventure Tour Package</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet Sightseeing Tour Package">Tibet Sightseeing Tour Package</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet Hiking Tour Package">Tibet Hiking Tour Package</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet Domestic Flight Booking">Tibet Domestic Flight Booking</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet Transportation Service">Tibet Transportation Service</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet Responsible Travel">Tibet Responsible Travel</a></li>
                        <li><a href="treking-package.php"
                               title="Tibet Yoga and Meditation Tour Package">Tibet Yoga and Meditation Tour
                                Package</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include("static/gallery.php"); ?>
<?php include("static/footer.php"); ?>
