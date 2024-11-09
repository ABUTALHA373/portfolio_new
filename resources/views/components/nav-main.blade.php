<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO Meta Tags -->
    <meta name="description"
          content="Abu Talha - A professional web developer specializing in modern web technologies like Laravel, PHP, HTML, CSS, Tailwind, Bootstrap, and JavaScript for websites." />
    <meta name="keywords"
          content="Web Developer,Website Developer, Laravel Developer,PHP Developer,Frontend Developer,PHP Developer, HTML, CSS, JavaScript, Tailwind,Bootstrap, Abu Talha" />
    <meta name="author" content="Abu Talha" />
    <link rel="canonical" href="https://talha373.netlify.app/" />

    <!-- Open Graph Tags (for social media previews) -->
    <meta property="og:title" content="Abu Talha | Web Developer | Laravel, PHP, JavaScript, Bootstrap, Tailwind CSS" />
    <meta property="og:description"
          content="A professional web developer specializing in modern web technologies like Laravel, PHP, HTML, CSS, Tailwind, Bootstrap, and JavaScript for websites." />
    <meta property="og:image" content="https://talha373.netlify.app/branding/og-image.png" />
    <meta property="og:url" content="https://talha373.netlify.app/" />
    <meta property="og:type" content="website" />

    <!-- Favicon for Branding -->
    <link rel="icon" href="https://talha373.netlify.app//branding/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://talha373.netlify.app/branding/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://talha373.netlify.app/branding/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://talha373.netlify.app/branding/favicon-16x16.png">
    <link rel="manifest" href="https://talha373.netlify.app/branding/site.webmanifest">
    <link rel="manifest" href="https://talha373.netlify.app/branding/og-image.png">

    <!-- Stylesheets -->
{{--    <link rel="stylesheet" href="./src/css/output.css" />--}}
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="./src/css/style.css" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <script src="./src/js/ls.js" defer></script>

    <title>Abu Talha | Web Developer | Laravel, PHP, JavaScript, Bootstrap, Tailwind CSS</title>
</head>

<body>



{{$slot}}



<script type="module" src="https://unpkg.com/@dotlottie/player-component@2.3.0/dist/dotlottie-player.mjs">
</script>
<script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- <script src="https://unpkg.com/@popperjs/core@2"></script> -->

<script src="./src/js/app.js"></script>
<script src="./src/js/main.js"></script>
<script src="./src/js/modal.js"></script>
<!-- js codes -->

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 2000,
            center: true,
            margin: 10,  // Adds a 10px gap between items
            responsive: {
                600: {
                    items: 2
                }
            }
        });
    });
</script>


</body>

</html>
