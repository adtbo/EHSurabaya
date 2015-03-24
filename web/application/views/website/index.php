    <!-- Slider start -->
    <section id="home" class="hero landing hero-section">
        <div class="video-background-container">
            <video preload="auto" autoplay loop muted class="video-background">
                <!--<source type="video/mp4" src="assets/videopage/videos/tes.mp4" />
                <source type="video/ogg" src="assets/videopage/videos/gdrive.ogv" />
                --><source type="video/webm" src="assets/videopage/videos/gdrive.webm" />
            </video>
        </div> 
    </section><!--/ Home end -->

<!-- Service Area start -->

    <section id="service">
        <div class="container-fluid">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-12">
                        <div class="feature_header text-center">
                            <h3 class="feature_title"> <b>Tentang Kami</b></h3>
                            <h4 class="feature_sub"><?php echo $deskripsi_organisasi; ?></h4>
                            <div class="divider"></div>
                        </div>
                    </div>  <!-- Col-md-12 End -->
                </div>
            </div>
        </div>  <!-- Container End -->
    </section>
<!-- Service Area End -->

<!-- Team MEmber Start -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Ini <b>Aksiku!</b></h3>
                    <!--<h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>-->
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->

            
            <div id="owl-demo" class="owl-carousel owl-theme team-items">
                <div class="item text-center">
                    <div class="single-member">
                        <div class="overlay-hover">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="overlay-effect">
                                <ul class="social list-inline">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <figcaption>
                                    <p class="links">
                                        <?php  echo '<a href="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" data-rel="prettyPhoto">' ?>
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </p>
                                </figcaption>
                                <p></p>
                            </div>
                        </div>
                        <h3 style="color:blue"><?php echo $kegiatan[0]['nama'] ?></h3>
                    </div>
                </div>  <!-- item wrapper end -->
                <div class="item text-center">
                    <div class="single-member">
                        <div class="overlay-hover">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[5]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="overlay-effect">
                                <ul class="social list-inline">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <figcaption>
                                    <p class="links">
                                        <?php  echo '<a href="data:image/jpeg; base64,'.base64_encode($gambar[5]['data']).'" data-rel="prettyPhoto">' ?>
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </p>
                                </figcaption>
                                <p></p>
                            </div>
                        </div>
                        <h3 style="color:green"><?php echo $kegiatan[1]['nama'] ?></h3>
                    </div>
                </div>  <!-- item wrapper end -->
                <div class="item text-center">
                    <div class="single-member">
                        <div class="overlay-hover">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="overlay-effect">
                                <ul class="social list-inline">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <figcaption>
                                    <p class="links">
                                        <?php  echo '<a href="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" data-rel="prettyPhoto">' ?>
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </p>
                                </figcaption>
                                <p></p>
                            </div>
                        </div>
                        <h3><?php echo $kegiatan[2]['nama'] ?></h3>
                    </div>
                </div>  <!-- item wrapper end -->
                <div class="item text-center">
                    <div class="single-member">
                        <div class="overlay-hover">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="overlay-effect">
                                <ul class="social list-inline">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <figcaption>
                                    <p class="links">
                                        <?php  echo '<a href="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" data-rel="prettyPhoto">' ?>
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </p>
                                </figcaption>
                                <p></p>
                            </div>
                        </div>
                        <h3><?php echo $kegiatan[3]['nama'] ?></h3>
                    </div>
                </div>  <!-- item wrapper end -->
                <div class="item text-center">
                    <div class="single-member">
                        <div class="overlay-hover">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="overlay-effect">
                                <ul class="social list-inline">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href=""><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus dignissimos, maxime ea excepturi veritatis itaque. </p>
                            </div>
                        </div>
                        <h3>John Abraham</h3>
                        <h5>Chief Designer</h5>
                    </div>
                </div>  <!-- item wrapper end -->
            </div>
        </div>
    </div> <!-- Conatiner Team end -->
</section>  <!-- Section TEam End -->

<!-- Our Team Members End -->

<!-- Portfolio works Start -->

<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title"><b>Galeri</b></h3>
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
        </div>
    </div>


    <div id="isotope-filter" class="skew3 text-center">
        <a data-filter="*"  href="#" class="active ">Semua</a>
        <a data-filter=".gambar"  href="#" class="">Gambar</a>
        <a data-filter=".video" href="#"  class="">Video</a>
    </div>
    <div class="clearfix"></div>
   			<div class="text-center " style="padding:10px">
              <ul class="portfolio-wrap" id="portfolio_items">
                    <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio gambar">
                        <figure style="padding:5px">
                            <!--<img src="assets/videopage/images/portfolio/p1.jpg" alt="" class="img-responsive"/>
                            <!--<img src="img_pulpit.jpg" alt="The Pulpit Rock" width="304" height="228">
                            
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="assets/videopage/images/portfolio/p2.jpg"  data-rel="prettyPhoto">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>-->
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Yz1PDyi3vnY" width="300" height="200"></iframe>
                            </div>
                        </figure>
                    </li>

                    <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio gambar">
                        <figure style="padding:5px">
                        <!--<img src="assets/videopage/images/portfolio/p2.jpg" alt="" class="img-responsive" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="assets/videopage/images/portfolio/p2.jpg"  data-rel="prettyPhoto">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                                </figcaption>-->
                                <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Yz1PDyi3vnY" width="300" height="200"></iframe>
                            </div>
                        </figure>
                    </li>

                    <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio video">
                        <figure style="padding:5px">
                            <!--<img src="assets/videopage/images/portfolio/p3.jpg" alt="" class="img-responsive"/>
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="assets/videopage/images/portfolio/p3.jpg" data-rel="prettyPhoto">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>-->
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/Yz1PDyi3vnY" width="300" height="200"></iframe>
                            </div>
                        </figure>
                    </li>
                </ul>
        </div> <!-- Container Full End -->
</section>  <!-- Portfolio Section End -->

