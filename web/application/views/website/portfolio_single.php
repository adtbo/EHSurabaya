    <section id="portfolio_single">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-header text-center">
                        <h2>Portfolio Details</h2>
                        <ul class="breadcrumb">
                            <li>home</li>
                            <li>portfolio</li>
                            <li>portfolio details</li>
                        </ul>
                    </div>
                </div>  <!-- Col-md-12 End -->
            </div>
        </div>
    </section>
    <section id="portfolio-single">
        <div class="container">
            <!-- Portfolio item row start -->
            <div class="row">
                <!-- Portfolio item slider start -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="portfolio-slider-wrapper">
                        <ul id="portfolio-slider">
                            <li><?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" alt="" class="img-responsive">' ?></li>
                        </ul>
                    </div>
                </div>
                <!-- Portfolio item slider end -->
            </div><!-- Portfolio item row end -->

        </div><!-- Portfolio item container end -->
</section>  <!-- Portfolio Section End -->

<section id="port-content">
    <div class="container">
        <div class="row">
             <!-- sidebar start -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="portfolio-desc">
                            <h4><?php echo $kegiatan[0]['nama'] ?></h4>
                            <p><?php echo $kegiatan[0]['deskripsi'] ?></p>
                        <p><a href="#" class="btn btn-main featured">Project Link</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="right-sidebar">
                    <h4>Project Details</h4>
                    <ul class="circle">
                        <li><span>date : </span> 15 May 2014</li>
                        <li><span>client : </span>Enavto</li>
                        <li><span>Category :</span> Web design</li>
                    </ul>
                </div>
                <div class="share">
                    <!-- <h4>Share this :</h4> -->
                    <ul class="social-contact list-inline text-left">
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
</section>
 

<section id="related">
    <div class="container">
        <div class="row">
             <div class="related text-center">
                <h3>Related Projects</h3>
                <!-- <hr> -->
                <div class="col-md-3 col-sm-6">
                    <div class="rel-post">
                        <a href="#">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[0]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="caption">
                                <h4><?php echo $kegiatan[0]['nama'] ?></h4>
                                <p>Graphics design</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="rel-post">
                        <a href="#">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[5]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="caption">
                                <h4><?php echo $kegiatan[1]['nama'] ?></h4>
                               <p>photograph</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="rel-post">
                        <a href="#">
                            <?php  echo '<img src="data:image/jpeg; base64,'.base64_encode($gambar[5]['data']).'" alt="" class="img-responsive">' ?>
                            <div class="caption">
                                <h4><?php echo $kegiatan[2]['nama'] ?></h4>
                               <p>Web design</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="rel-post">
                        <a href="#">
                            <img src="assets/videopage/images/blog/pic11.jpg" alt="" class="img-responsive">
                            <div class="caption">
                                <h4>Top rider</h4>
                                <p>Wordpress</p>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Back To Top Button -->
    <section id="back-top">
        <a href="#slider_part" class="scroll"></a>
    </section>
    <!-- End Back To Top Button -->
	
        <script>
              $('#portfolio-slider').bxSlider({
                mode: 'fade',
                autoControls: false
              });
        </script>
