<!-- Slider start -->
    <section id="home" class="hero landing hero-section">
        <div class="video-background-container">
            <video preload="auto" autoplay loop muted class="video-background">
                <source type="video/webm" src="assets/videopage/videos/Earth_Hour_Surabaya_2015_Official_Video.webm" />
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

                <?php
                    for ($i=0; $i < $eventnum; $i++) 
                    { 
                         # code...
                ?>

                <div class="item text-center">
                    <div class="single-member">
                        <div class="overlay-hover">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[$i]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="overlay-effect">
                                <ul class="social list-inline">
                                    <li> <a href="<?php echo $kontak['facebook'] ?>" target="<?php echo $kontak['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li> <a href="<?php echo $kontak['twitter'] ?>" target="<?php echo $kontak['twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li> <a href="<?php echo $kontak['pinterest'] ?>" target="<?php echo $kontak['pinterest'] ?>"> <i class="fa fa-pinterest"></i></a></li>
                                    <li> <a href="<?php echo $kontak['gplus'] ?>" target="<?php echo $kontak['gplus'] ?>"><i class="fa fa-google-plus"></i> </a></li>
                                    <li> <a href="<?php echo $kontak['instagram'] ?>" target="<?php echo $kontak['instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php echo $kontak['alamat'] ?>" target="<?php echo $kontak['facebook'] ?>"> <i class="fa fa-linkedin"></i></a></li>
                                </ul>
                                <figcaption>
                                    <p class="links">
                                        <a href="assets/videopage/images/portfolio/p3.jpg" data-rel="prettyPhoto">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </p>
                                </figcaption>
                                <p></p>
                            </div>
                        </div>
                        <h3 style="color:blue"><a href="<?php echo site_url('website'); ?>/event/<?php echo  $kegiatan[$i]['id'] ?>"><?php echo $kegiatan[$i]['nama']; ?></a></h3>
                    </div>
                </div>  <!-- item wrapper end -->

                <?php 
                    }
                ?>

                
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
                        <h3 class="feature_title">Our <b>GALERI</b></h3>
                        <div class="divider"></div>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
        </div>

        <div id="isotope-filter" class="skew3 text-center">
            <a data-filter="*"  href="#" class="active ">All</a>
            <a data-filter=".identity"  href="#" class="">Video</a>
            <a data-filter=".web-design" href="#"  class="">Gambar</a>
        </div>

        <div class="clearfix"></div>
            <div class="text-center ">

                <!--<ul class="portfolio-wrap" id="portfolio_items">
                    <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio identity web-design">
                        <figure>
                            <img src="images/portfolio/p1.jpg" alt="" class="img-responsive"/>
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="images/portfolio/p1.jpg" data-rel="prettyPhoto" >
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>
                </ul>-->
                <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="buttom: 500px;">
                  <!-- Indicators 
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                 
                    <!-- Wrapper for slides 
                    <div class="carousel-inner"> -->                       
                        
                        <div class="video-container">
                           <iframe width="640" height="480" src="<?php echo $video[0]['link'] ?>" frameborder="0" allowfullscreen></iframe>
                           <div class="carousel-caption">
                                <h3></h3>
                            </div>
                        </div>
                      
                    <!--</div>
                 
                    <!-- Controls 
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div> <!-- Carousel -->
            </div> <!-- Container Full End -->
</section>  <!-- Portfolio Section End -->
 
<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
