<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?php include('title_bar.php');?> </title>
    <!--/google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <!--//google-fonts -->
    <!--/Template-CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!--//Template-CSS -->
</head>

<body>
    <!--/Header-->
    <?php include('header.php'); ?>
    <!--//Header-->
    <!--/Banner-Start-->
    <!-- main-slider -->
    <?php include('main_slider.php'); ?>
    <!-- //main-slider -->
    <!--/grids-->
    <?php include('grid1.php'); ?>
    <!--//grids-->
    <!-- features-section -->
    <?php include('grid2.php'); ?>
    <!--//features-section -->
    <!--/w3-grids-->
    <?php include('grid3.php'); ?>
    <!--//w3-grids-->
    <!--/testimonials-->
    <?php include('testimonials.php'); ?>
    <!--//testimonials-->
     <!--/Gallery-Section-->
     <?php include('gallery.php'); ?>
    <!--//Gallery-Section-->

    <!--/footer-->
    <?php include('footer.php'); ?>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-arrow-up" aria-hidden="true"></span>
    </button>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <!-- //move top -->
    <!--//footer-9 -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>


    <!-- MENU-JS -->
    <script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
    </script>
    <!-- Add active dynamically-->


    <script src="assets/js/active.js"></script>

    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>