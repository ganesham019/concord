<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="./css/media.css">
    <link rel="stylesheet" href="./css/modal.css">

    <link rel="stylesheet" href="./css/slick.css">

    <link rel="stylesheet" href="./css/ken.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>



<body>

    <?php include './Layout/Header.php'; ?>

    <?php include './screens/video.php';?>



    <?php include './screens/floating.php';?>
    <!-- 
    <div id="MyContainerId2" class="bg-white d-none d-md-block">
        <lottie-player id="me" src="https://assets9.lottiefiles.com/packages/lf20_ujmcy6nw.json"
            background="transparent" speed="2" style="width: 100%; height: 100%">
        </lottie-player>
    </div> -->
    <div id="MyContainerId2" class="bg-white d-none d-md-block">
        <lottie-player id="me" src="https://lottie.host/76fe26df-fe5d-47b4-b80c-0bed9ccf2698/36CRERfcyw.json"
            background="transparent" speed="1" style="width: 100%; height: 100%">
        </lottie-player>
    </div>

    <div class="versionimage d-block  d-md-none">
        <img src="./assets/version.jpg" class="versionimage_i img-fluid" alt="">
    </div>

    <div class="bg-white pt-5 pb-5">
        <h1 class="title_concord main_section">What makes Concord Helmets stand apart?</h1>

        <p class="title_concord_desc main_section d-none d-md-block">It's Material - Fiberglass!</p>
        <p class="title_concord_desc d-block d-md-none">It's Material - Fiberglass!</p>

    </div>

    <?php include './scroll.php';?>



    <?php include './screens/clients.php';?>
    <div class="container-fluid bg-white">



        <div class="container-fluid pt-3 p-absolutes ">
            <div class="giggle1">
                <?php include './giggle.svg';?>
            </div>
            <div class="giggle2">
                <?php include './giggle2.svg';?>
            </div>
            <div class="container mx-auto   wrapper_2 pt-5 pb-5 d-none d-md-block">
                <video class="videos" autoplay muted playsinline preload="metadata" width="100%" height="500px">
                    <source
                        src="https://res.cloudinary.com/tuskmelonimagestorage/video/upload/v1661340161/concordassets/Book_Flip_5_qpe4je.mp4"
                        class=" " type="video/mp4">
                </video>
            </div>
            <div class="container mx-auto  wrapper_2 pt-2 pb-2 d-block d-md-none">
                <video class="" autoplay muted playsinline preload="metadata" width="100%" height="300px">
                    <source
                        src="https://res.cloudinary.com/tuskmelonimagestorage/video/upload/v1661260436/concordassets/Book_Flip_4_pre7hs.mp4"
                        class=" " type="video/mp4">
                </video>
            </div>
        </div>

    </div>
    <?php include './screens/slides.php';?>




    <?php include './Layout/Footer.php';?>


    <button onclick="topFunction()" id="myBtn" title="Go to top">&#11165;</button>

    <script src="./scripts/backtop.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="  https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="./js/tooltip.js"></script>
    <script type="text/javascript" src="./js/ajax.js"></script>
    <script type="text/javascript" src="./js/carousel.js"></script>
    <script type="text/javascript" src="./js/slick.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.carousel').slick({
            // dots: true,
            // infinite: true,
            // autoplay: true,
            // autoplaySpeed: 2000,
            // lazyLoad: 'ondemand',
            centerMode: true,
            centerPadding: '60px',
            speed: 600,
            slidesToShow: 3,
            // slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        // slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '40px',
                        // infinite: true,
                        dots: true,

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        // slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '40px'
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        // slidesToScroll: 1
                        centerMode: true,
                        centerPadding: '40px',
                    }
                }

            ]
        });
    });
    </script>

    <!-- lottie  -->
    <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@1/dist/lottie-player.js"></script>



    <script>
    // Banner lottie
    LottieInteractivity.create({
        player: "#me",
        mode: "scroll",
        actions: [{
                visibility: [0, 1],
                type: "seek",
                frames: [1, 90]
            },

        ]
    });
    </script>
    <script>
    LottieInteractivity.create({
        player: '#me2',
        mode: 'scroll',
        actions: [{
            visibility: [0, 1],
            type: 'seek',
            frames: [1, 56],
        }, ]
    });
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->


</body>

</html>