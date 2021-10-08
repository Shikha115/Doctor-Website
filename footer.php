    <!-- footer -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-footer-widget">
                        <h2>
                            <a href="index.php">Doctor's clinic</a>
                        </h2>
                        <p>Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor ut labore dolore magna</p>
                        <div class="contact-info">
                            <div class="contact-info-content">
                                <ul class="social">
                                    <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                                    <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                                    <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>News & Blog</h3>
                        <div class="footer-widget-blog">
                            <article class="item">
                                <a href="blog-details.php" class="thumb">
                                    <span class="fullimage bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>By Daisy Gabriela</span>
                                    <h4><a href="blog-details.php">Hygiene for Children</a></h4>
                                </div>
                            </article>
                            <article class="item">
                                <a href="blog-details.php" class="thumb">
                                    <span class="fullimage bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>By Ronnie Aaron</span>
                                    <h4><a href="blog-details.php">Regular Checkup for Good Teeth</a></h4>
                                </div>
                            </article>
                            <article class="item">
                                <a href="blog-details.php" class="thumb">
                                    <span class="fullimage bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>By Babatunde Jon</span>
                                    <h4><a href="blog-details.php">Teeth Whitening is Now Popular</a></h4>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Useful Link</h3>
                        <ul class="quick-links">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="our-doctors.php">Our Doctors</a>
                            </li>
                            <li>
                                <a href="blog.php">Our Blogs</a>
                            </li>
                            <li>
                                <a href="FAQ.php">FAQ</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Contact Information</h3>
                        <ul class="footer-information">
                            <li>
                                <i class="flaticon-emergency-call"></i> Call Today
                                <span><a href="tel:088123654987">+088 123 654 987</a></span>
                            </li>
                            <li>
                                <i class="flaticon-wall-clock"></i> Open Hour
                                <span>09:00 AM to 18:00 PM</span>
                            </li>
                            <li>
                                <i class="flaticon-red-cross"></i> Our Location
                                <span>506-507,ITL Northex Tower,A09 Netaji Subhash Place,Pitampura, Delhi-110034</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- copyright -->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>Copyright &copy; 2021 Doctor's clinic. All rights reserved. Designed by 
                    <a href="https://ebslon.com/" target="_blank">
                    Ebslon Infotech
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- arrow -->
    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>

    <!-- scripts -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="https://kit.fontawesome.com/8aa71aba32.js " crossorigin="anonymous"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/test.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(() => {

            $(() => {
                var $radioButtons = $('input[type="radio"]');
                $radioButtons.click(function() {
                    $radioButtons.each(function() {
                        $(this).parent().toggleClass('active1', this.checked);
                    });
                });
            });

            $(() => {
                $("#d1").datepicker();
                $("#d2").datepicker();
            });

        });
    </script>
</body>
</html>