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
                    <h3 class="feature_title"><b>Galeri</b></h3>
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
        </div>
    </div>
    
    <div align="center" class="text-center" style="padding:10px">
                <div style="text-align:center;">
                    <div style="align:center;" class="html5gallery" data-skin="light" data-width="640" data-height="360">
                        <?php
                            for ($i=0; $i < $videonum; $i++) 
                            {
                        ?>       
                                    
                            <a href="<?php echo $video[$i]['link'] ?>"><img src="assets/videopage/images/Swan_small.jpg" alt="Youtube Video"></a>
                             
                        <?php 
                            }
                        ?>
                    </div>
                </div>
            </div> <!-- Container Full End -->
</section>  <!-- Portfolio Section End -->

 



