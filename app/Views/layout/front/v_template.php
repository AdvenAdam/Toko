<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dking - Multipurpose eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/front/dking/assets/images/favicon.png">

    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="/front/dking/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/style.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/dropdown.css">

</head>

<body>
    <div class="main-wrapper main-wrapper-3">
        <?= $this->renderSection('content'); ?>
        <?= $this->include('layout/front/v_footer.php'); ?>

    </div>
    <!-- All JS is here
============================================ -->

    <script src="/front/dking/assets/js/vendor/vendor.min.js"></script>
    <script src="/front/dking/assets/js/plugins/plugins.min.js"></script>
    <!-- Main JS -->
    <script src="/front/dking/assets/js/main.js"></script>


    <!-- fade out alert -->
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            })
        }, 3000);
    </script>
    <!-- smooth scroll -->
    <script>
        $(document).ready(function() {

            // Add smooth scrolling to all links

            $(".smooth").on('click', function(event) {



                // Make sure this.hash has a value before overriding default behavior

                if (this.hash !== "") {

                    // Prevent default anchor click behavior

                    event.preventDefault();



                    // Store hash

                    var hash = this.hash;



                    // Using jQuery's animate() method to add smooth page scroll

                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area

                    $('html, body').animate({

                        scrollTop: $(hash).offset().top

                    }, 800, function() {



                        // Add hash (#) to URL when done scrolling (default click behavior)

                        window.location.hash = hash;

                    });

                } // End if

            });

        });
    </script>
</body>

</html>