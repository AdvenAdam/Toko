<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/aset/favicon.png">

    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="/front/dking/assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/front/dking/assets/css/style.min.css">
    <!-- not main -->
    <link rel="stylesheet" href="/front/dking/assets/css/dropdown.css">
    <link rel="stylesheet" href="/front/dking/assets/css/rating.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- css utk Gambar -->
    <link rel="stylesheet" href="/zz/src/assets/css/gambar.css">

</head>

<body>
    <div class="main-wrapper main-wrapper-3">
        <?= $this->renderSection('content'); ?>
        <?= $this->include('layout/front/v_page/v_footer.php'); ?>
    </div>
    <!-- All JS is here
============================================ -->

    <script src="/front/dking/assets/js/vendor/vendor.min.js"></script>
    <script src="/front/dking/assets/js/plugins/plugins.min.js"></script>
    <script src="/zz/src/assets/jquery/jquery.inputmask.bundle.min.js"></script>
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
    <!-- phone number format -->
    <script>
        $('.phone').inputmask({
            prefix: '(0)',
            groupSeparator: "-",
            alias: "numeric",
            autoGroup: true,
            digits: 0,
            rightAlign: false
        });
    </script>

</body>

</html>