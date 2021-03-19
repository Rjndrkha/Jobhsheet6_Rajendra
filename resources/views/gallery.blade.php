<!--Template Name: vacayhome
File Name: gallery.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license/-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="a/a/images/icons/favicon.png" />
    <title>vacayhome</title>

    <!-- Bootstrap core CSS -->
    <link href="a/css/bootstrap.min.css" rel="stylesheet">
    <link href="a/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="a/css/style.css" rel="stylesheet">
    <link href="a/fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
    <link rel="stylesheet" href="a/css/lightbox.min.css">
    <link href="a/css/responsive.css" rel="stylesheet">
    <script src="a/js/jquery.min.js" type="text/javascript"></script>
    <script src="a/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="a/js/jquery.imagesloaded.js"></script>
    <script src="a/js/masonry.pkgd.min.js"></script>
    <script src="a/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
    <script src="a/js/instafeed.min.js" type="text/javascript"></script>
    <script src="a/js/custom.js" type="text/javascript"></script>
    <style>
        .grid {
            background: rgba(0, 0, 0, 0);
        }

        /* clear fix */
        .grid:after {
            content: '';
            display: block;
            clear: both;
        }

        /* ---- .grid-item ---- */
        .grid-sizer,
        .grid-item {
            width: 33.34%;
        }

        .grid-item {
            float: left;
        }

        .grid-item img {
            display: block;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div id="page">
        <!---header top---->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <div class="social-grid">
                            <ul class="list-unstyled text-right">
                                <li><a><i class="fa fa-facebook"></i></a></li>
                                <li><a><i class="fa fa-twitter"></i></a></li>
                                <li><a><i class="fa fa-linkedin"></i></a></li>
                                <li><a><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header--->
        <header class="header-container">
            <div class="container">
                <div class="top-row">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-6">
                        <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="index.html"><span>ARJ </span>home</a>
                                </div>        
                        </div>
                        <div class="col-sm-6 visible-sm">
                            <div class="text-right"><button type="button" class="book-now-btn">Login</button></div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header page-scroll">
                                    <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a data-hover="Home"><span>Home</span></a></li>
                                            <li><a data-hover="About" href={{url('about')}}><span>About</span></a></li>
                                            <li><a data-hover="Rooms" href={{url('rooms')}}><span>Rooms</span></a></li>
                                            <li><a data-hover="Gallery" class="active" href={{url('gallery')}}><span>Gallery</span></a></li>
                                            <li><a data-hover="Dinning" href={{url('dinning')}}><span>Dinning</span></a></li>
                                            <li><a data-hover="News" href={{url('news')}}><span>News</span></a></li>
                                            <li><a data-hover="Contact Us" href={{url('contact')}}><span>contact Us</span></a></li>
                                        </ul>

                                    </div>
                            </nav>
                        </div>
                        <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn" href = {{url('login')}}>Login</button></div>
                            </div>
                    </div>
                </div>
            </div>
        </header>


        <!--end-->
        <section class="image-head-wrapper">
            <div class="inner-wrapper">
                <h1>Gallery</h1>
            </div>
        </section>
        <div class="clearfix"></div>

        <section class="gallery-block">
            <div class="container">
                <div class="row">
                    <div class="grid hover-effect">
                        <div class="grid-sizer"></div>
                        <div class="grid-item percent37 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery1-1.jpg" data-lightbox="example-1"><img src="a/images/gallery1.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                        <div class="grid-item percent25 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery2-2.jpg" data-lightbox="example-1"><img src="a/images/gallery2.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                        <div class="grid-item percent37 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery3-3.jpg" data-lightbox="example-1"><img src="a/images/gallery3.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                        <div class="grid-item percent25 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery4-4.jpg" data-lightbox="example-1"><img src="a/images/gallery4.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                        <div class="grid-item percent37 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery5-5.jpg" data-lightbox="example-1"><img src="a/images/gallery5.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                        <div class="grid-item percent20 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery6-6.jpg" data-lightbox="example-1"><img src="a/images/gallery6.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                        <div class="grid-item percent20 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery7-7.jpg" data-lightbox="example-1"><img src="a/images/gallery7.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                        <div class="grid-item percent20 gallery-image">
                            <a class="example-image-link img-responsive" href="a/images/gallery8-8.jpg" data-lightbox="example-1"><img src="a/images/gallery8.png" class="img-responsive" alt="gallery1"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---footer--->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 width-set-50">
                        <div class="footer-details">
                            <h4>Get in touch</h4>
                            <ul class="list-unstyled footer-contact-list">
                                <li>
                                    <i class="fa fa-map-marker fa-lg"></i>
                                    <p>701 Old York Drive Richmond USA.</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone fa-lg"></i>
                                    <p><a href="tel:+1-202-555-0100"> +1-202-555-0100</a></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o fa-lg"></i>
                                    <p><a href="mailto:demo@info.com"> demo@info.com</a></p>
                                </li>
                            </ul>
                            <div class="footer-social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                            <div class="input-group" id="subscribe">
                                <input type="text" class="form-control subscribe-box" value="" name="subscribe" placeholder="EMAIL ID">
                                <span class="input-group-btn">
                                    <button type="button" class="btn subscribe-button"><i class="fa fa-paper-plane fa-lg"></i></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 width-50 width-set-50">
                        <div class="footer-details">
                            <h4>explore</h4>
                            <ul class="list-unstyled footer-links">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="rooms.html">Rooms</a></li>
                                <li class="active"><a href="gallery.html">Gallery</a></li>
                                <li><a href="#">Dinning</a></li>
                                <li> <a href="news.html">News</a></li>
                                <li> <a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-details">
                            <h4>Now On Instagram</h4>
                            <div class="row">
                                <div class="instagram-images">
                                    <div id="instafeed"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    &copy; 2017 All right reserved. Designed by <a href="http://www.themevault.net/" target="_blank">ThemeVault.</a>
                </div>

            </div>
        </footer>

        <!--back to top--->
        <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
            <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
            <span>Top</span>
        </a>

    </div>
    <script>
        var grid = document.querySelector('.grid');

        var msnry = new Masonry(grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-sizer',
            percentPosition: true
        });

        imagesLoaded(grid).on('progress', function() {
            // layout Masonry after each image loads
            msnry.layout();
        });
    </script>
</body>

</html>