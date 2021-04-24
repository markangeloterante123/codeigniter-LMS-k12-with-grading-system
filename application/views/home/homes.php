            
        <?php
            $table="tbl_images_landing";
            foreach ($this->load->model_users->pagewall($table) as $value) {
                $pic = $value->image;
        ?>

            <section  class="single-course-intro d-flex align-items-center justify-content-center" style="height: 550px; background-repeat: no-repeat; opacity: 0.9; background-size: cover; background-image: url(<?php echo base_url(); ?>assets/background/<?php echo $pic; ?>);">
            </section>
        <?php } ?>

            <div style="padding-top: 30px; background-image: linear-gradient(to bottom right,maroon, #fffdd0);" class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                        <?php
                            $table="tbl_images_landing";
                            foreach ($this->load->model_users->datalan($table) as $value) {
                                $pic = $value->image;
                                $id = $value->id;
                        ?>
                        <div class="single-tutors-slides">
                            <div style="height:100%; width: 65vh;" class="tutor-thumbnail">
                                <a href="javascript:void(0)" data-id="<?php echo $id; ?>" class="view_images"><img style="height: 45vh;" src="<?php echo base_url(); ?>/assets/background/<?php echo $pic; ?>" alt=""></a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div> 

    <section style="background-image: linear-gradient(to bottom right,maroon, #fffdd0);" class="popular-courses-area section-padding-100-0" style="background-image: url(<?php echo base_url(); ?>assets/home/img/core-img/texture.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3  style="color:white;text-shadow: 3px 3px black; ">Philtech Course Offers</h3>
                    </div>
                </div>
            </div>

            <div  class="row">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="<?php echo base_url(); ?>assets/home/img/bg-img/c1.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>English Grammar</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="<?php echo base_url(); ?>assets/home/img/bg-img/c2.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Vocabulary</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#">$20</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="<?php echo base_url(); ?>assets/home/img/bg-img/c3.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Expository writing</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="modal fade bd-example-modal-lg" id="images_big" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content display_images">

    </div>
  </div>
</div>
