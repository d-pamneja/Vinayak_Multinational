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
    <?php include('header.php')?>
    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            Contact Us </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><span class="fas fa-arrow-right mx-2"></span> Contact</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!-- contacts-5-grid -->
    <?php include('sendQuery.php')?>
    <?php include('contactForm.php')?>
    <!-- /map-->
    <div class="contacts-sub-5">
        <div class="contacts-mapw3 position-relative">
            <iframe
                src="https://www.google.com/maps/d/u/0/embed?mid=1WMe11PzBGd5wSNZubHKf-qmcSGjb4yU&ehbc=2E312F&noprof=1"
                width="640" height="480"></iframe>
        </div>
        <br>
    </div>
    <!-- //map-->
    <!--/footer-->
    <?php include('footer.php')?>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="assets/js/active.js"></script>
    <script>
    $(document).ready(function() {
        $('#contactForm').on('submit', function(event) {
            event.preventDefault(); // Prevent the default form submission

            var formData = $(this).serialize(); // Serialize form data

            $.ajax({
                type: 'POST',
                url: 'sendQuery.php', // Your PHP script to handle the request
                data: formData,
                success: function(response) {
                    // Display the server response in the #response div
                    $('#response').html('<div class="success">' + response + '</div>')
                        .show();

                },
                error: function(xhr, status, error) {
                    // Display an error message if something went wrong
                    $('#response').html('<div class="error">An error occurred: ' + error +
                        '</div>').show();
                }
            });
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
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>