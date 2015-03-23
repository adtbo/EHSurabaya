    <header id="header" class="navbar-fixed-top navbar-inverse video-menu" role="banner"style="background-color:#000">
    	<div class="container">
    		<!-- <div class="row"> -->
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="assets/videopage/images/logo.png" alt="" class="img-responsive">
                        </a>
                 </div><!--Navbar header End-->
                 	<nav class="collapse navbar-collapse navigation" id="bs-example-navbar-collapse-1" role="navigation">
                        <ul class="nav navbar-nav navbar-right ">
                           	<li><a href="#home" >Home </a></li>
                            <li><a href="#service"  >Tentang Kami</a> </li>
                            <li><a href="#team" >Aksi </a></li>
                            <li><a href="#portfolio"  >Galeri</a> </li>
                            <li><a href="#footer" >Kontak</a> </li>
                        </ul>
                    </nav>
        </div><!-- /.container-fluid -->
    </header>
 <!-- Slider start -->
    <section id="home" class="hero landing hero-section">
        <div class="video-background-container">
            <video preload="auto" autoplay loop muted class="video-background">
                <!--<source type="video/mp4" src="assets/videopage/videos/tes.mp4" />
                <source type="video/ogg" src="assets/videopage/videos/gdrive.ogv" />
                --><source type="video/webm" src="<?php echo $video['link'] ?>" />-->
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
                        <h6><?php echo $kegiatan[0]['deskripsi']?></h6>
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
                        <h6><?php echo $kegiatan[1]['deskripsi']?></h6>
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
                        <h6><?php echo $kegiatan[2]['deskripsi']?></h6>
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
                        <h6><?php echo $kegiatan[3]['deskripsi']?></h6>
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


                    <!--<div class="row">
                       <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                             <img src="assets/videopage/images/portfolio/p3.jpg" 
                             alt="Generic placeholder thumbnail">
                          </div>
                          <div class="caption">
                             <h3>Thumbnail label</h3>
                             <p>Some sample text. Some sample text.</p>
                             <p>
                                <a href="#" class="btn btn-primary" role="button">
                                   Button
                                </a>
                             </p>
                          </div>
                       </div>
                       <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                             <img src="assets/videopage/images/portfolio/p3.jpg" 
                             alt="Generic placeholder thumbnail">
                          </div>
                          <div class="caption">
                             <h3>Thumbnail label</h3>
                             <p>Some sample text. Some sample text.</p>
                             <p>
                                <a href="#" class="btn btn-primary" role="button">
                                   Button
                                </a>
                             </p>
                          </div>
                       </div>
                       <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                             <img src="assets/videopage/images/portfolio/p3.jpg" 
                             alt="Generic placeholder thumbnail">
                          </div>
                          <div class="caption">
                             <h3>Thumbnail label</h3>
                             <p>Some sample text. Some sample text.</p>
                             <p>
                                <a href="#" class="btn btn-primary" role="button">
                                   Button
                                </a> 
                                <a href="#" class="btn btn-default" role="button">
                                   Button
                                </a>
                             </p>
                          </div>
                       </div>
                       <div class="col-sm-6 col-md-3">
                          <div class="thumbnail">
                             <img src="assets/videopage/images/portfolio/p3.jpg" 
                             alt="Generic placeholder thumbnail">
                          </div>
                          <div class="caption">
                             <h3>Thumbnail label</h3>
                             <p>Some sample text. Some sample text.</p>
                             <p>
                                <a href="#" class="btn btn-primary" role="button">
                                   Button
                                </a> 
                                <a href="#" class="btn btn-default" role="button">
                                   Button
                                </a>
                             </p>
                          </div>
                       </div>
                    </div>-->

                    <!--<li class="col-md-3 col-xs-12 col-sm-6 single-portfolio web-design identity">
                        <figure>
                            <img src="assets/videopage/images/portfolio/p7.jpg" alt="" class="img-responsive" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="assets/videopage/images/portfolio/p7.jpg" data-rel="prettyPhoto">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio logo web-design">
                        <figure>
                            <img src="assets/videopage/images/portfolio/p5.jpg" alt="" class="img-responsive" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="assets/videopage/images/portfolio/p5.jpg" data-rel="prettyPhoto">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio logo graphic">
                        <figure>
                            <img src="assets/videopage/images/portfolio/p6.jpg" alt="" class="img-responsive" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="assets/videopage/images/portfolio/p6.jpg" data-rel="prettyPhoto">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>

                    <!--<li class="col-md-3 col-xs-12 col-sm-6 single-portfolio graphic identity">
                        <figure>
                            <img src="assets/videopage/images/portfolio/p3.jpg" alt="" class="img-responsive" />
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
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-md-3 col-xs-12 col-sm-6 single-portfolio web-design graphic">
                        <figure>
                            <img src="assets/videopage/images/portfolio/p7.jpg" alt="" class="img-responsive" />
                            <figcaption>
                                <h5>Creative Zoe</h5>
                                <p class="links">
                                    <a href="portfolio-single.html"> <i class="fa fa-link"></i></a>
                                    <a href="assets/videopage/images/portfolio/p7.jpg" data-rel="prettyPhoto">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </p>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </figcaption>
                        </figure>
                    </li>-->

                </ul>
        </div> <!-- Container Full End -->
</section>  <!-- Portfolio Section End -->

<!-- Testimonial Start -->

<!--<section id="testimonial" class="wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title"><b>Customers</b> Feedback</h3>
                    <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                    <div class="divider"></div>
                </div>
            </div>  <!-- Col-md-12 End -->
        <!--</div>
                <div class="row">
                    <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                        <div class="item">
                          <div class="testimonial-thumb">
                            <img class="img-circle" src="images/team/pic1.jpg" alt="testimonial" class="img-responsive">
                          </div>
                          <div class="testimonial-content">
                            <h3 class="name">Katee Nureen <span>Exectuive Director</span></h3>
                            <p class="testimonial-text">
                              iLorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                          </div>
                        </div>
                        <div class="item">
                          <div class="testimonial-thumb">
                            <img class="img-circle" src="images/testimonial2.png" alt="testimonial" class="img-responsive">
                          </div>
                          <div class="testimonial-content">
                          	<h3 class="name">Angry Figer <span>Frozen Director</span></h3>
                            <p class="testimonial-text">
                              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                          </div>
                        </div>
                        <div class="item">
                          <div class="testimonial-thumb">
                            <img class="img-circle" src="images/team/pic6.jpg" alt="testimonial" class="img-responsive">
                          </div>
                          <div class="testimonial-content">
                          	<h3 class="name wow bounceInLeft">Monica Lunaxy<span>Sales Manager</span></h3>
                            <p class="testimonial-text">
                              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose. Lorem Ipsum is that it as opposed to using.
                            </p>
                          </div>
                        </div>
                    </div>
                  	<!-- Navigation start -->
                  	<!--<div class="customNavigation cyprass-carousel-controller">
                        <a class="prev left">
                        	<i class="fa fa-chevron-left"></i>
                       	</a>
                        <a class="next right">
                          <i class="fa fa-chevron-right"></i>
                        </a>
                	</div>
                	<!-- Navigation ENd -->
                <!--</div>
            </div> <!-- Row End -->
<!--</section> <!-- Section Testimonial End -->

<!-- Testimonial Area End -->


<!-- Conatct Area Start-->

<!--<section id="contact">
    <div class="container">
        <div class="row">
  			<div class="col-md-12">
                <div class="feature_header text-center">
                    <h3 class="feature_title">Keep In <b>touch</b></h3>
                    <h4 class="feature_sub">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h4>
                    <div class="divider"></div>
                </div>
  			</div>
        </div>
        <div class="row">
             <div class="contact_full">
                <div class="col-md-6 left">
                    <div class="left_contact">
                        <form action="role">
                            <div class="form-level">
                                <input name="name" placeholder="Name" id="name"  value="" type="text" class="input-block">
                                <span class="form-icon fa fa-user"></span>
                            </div>
                            <div class="form-level">
                                <input name="email" placeholder="Email" id="mail" class="input-block" value="" type="email">
                                <span class="form-icon fa fa-envelope-o"></span>
                            </div>
                            <div class="form-level">
                                <input name="name" placeholder="Phone" id="phone" class="input-block" value="" type="text">
                                <span class="form-icon fa fa-phone"></span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 right">
                    <div class="form-level">
                        <textarea name="" id="messege"  rows="5" class="textarea-block" placeholder="message"></textarea>
                        <span class="form-icon fa fa-pencil"></span>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="btn btn-main featured">Submit Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Area Start -->

<section id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3 class="menu_head">Main Menu</h3>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#home">Home</a></li>
                            <li><a href="#service">Tentang Kami</a></li>
                            <li><a href="#team">Aksi</a></li>
                            <li><a href="#portfolio">Galeri</a></li>
                            <li><a href="#contact">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <h3 class="menu_head">Kontak</h3>
                    <div class="footer_menu_contact">
                        <ul>
                            <li> <i class="fa fa-home"></i>
                                <span> <?php echo $kontak['alamat']?> </span></li>
                            <li><i class="fa fa-mail-reply"></i>
                                <span> <?php echo $kontak['email']?></span></li>
                            <li><i class="fa fa-phone"></i>
                                <span> <?php echo $kontak['telp']?></span></li>
                            <li><i class="fa fa-facebook"></i>
                                <span> <?php echo $kontak['facebook']?></span></li>
                            <li> <i class="fa fa-twitter"></i>
                                <span> <?php echo $kontak['twitter']?> </span></li>
                            <li><i class="fa fa-pinterest"></i>
                                <span> <?php echo $kontak['pinterest']?></span></li>
                            <li><i class="fa fa-google-plus"></i>
                                <span> <?php echo $kontak['gplus']?></span></li>
                            <li><i class="fa fa-instagram"></i>
                                <span> <?php echo $kontak['instagram']?></span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <h3 class="menu_head">Tags</h3>
                    <div class="footer_menu tags">
                        <a href="#"> Design</a>
                        <a href="#"> User Interface</a>
                        <a href="#"> Graphics</a>
                        <a href="#"> Web Design</a>
                        <a href="#"> Development</a>
                        <a href="#"> Asp.net</a>
                        <a href="#"> Bootstrap</a>
                        <a href="#"> Joomla</a>
                        <a href="#"> SEO</a>
                        <a href="#"> Wordepress</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer_b">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer_bottom">
                        <p class="text-block"> &copy; Copyright reserved to <span>EARTH HOUR Surabaya 2015</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer_mid pull-right">
                        <ul class="social-contact list-inline">
                            <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-rss"></i></a></li>
                            <li> <a href="#"><i class="fa fa-google-plus"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"> <i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Footer Area End -->



<!-- Back To Top Button -->
       <!--  <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
            </div> -->
    <div id="back-top">
        <a href="#slider_part" class="scroll" data-scroll>
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-up"></i></button>
        </a>
    </div>
    <!-- End Back To Top Button -->
