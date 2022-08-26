<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    *,
    :after,
    :before {
        box-sizing: border-box;
        border-collapse: inherit;
        padding: 0;
        margin: 0;
    }

    body {
        height: 100%;
        overflow-x: hidden;
        overflow-y: scroll;
    }

    .background-container {
        position: fixed;
        z-index: -1;
        display: flex;
        bottom: 0px;
        /* right: 0px; */
        /* width: 100%; */
        height: 100vh;
        overflow: hidden;
        flex-direction: row;
        align-items: center;
    }

    .video-container {
        /* flex: 1; */
        /* width: 100%;
            height: 100%; */
        display: flex;
        justify-content: center;
    }


    #bgVideo {
        width: 600px;
        flex: 1;
        background-color: #000;
        opacity: 1;
        visibility: visible;
    }

    .scroll-container {
        overflow: hidden;
        z-index: -1;
    }

    .step {
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        height: 100vh;
        /* margin: 10px; */
        width: 100%;
        /* background-color: #ff66ff; */
        overflow: hidden;
    }

    .step>div {
        display: flex;
        align-content: center;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        opacity: 1;
        transition: all 1s ease;
        /* background-color: #ff66ff; */
    }

    .bg {
        position: relative;
        z-index: 1000;
    }

    /* 
    @media screen and (max-width:768px) {
        .background-container {
            height: 100vh;
        }
    } */
    </style>
</head>

<body style="background-color: #000;">

    <div class="container-fluid p-0 m-0">
        <div class="row m-0 p-0">
            <div class="col-sm-6  m-0 p-0">
                <div id="scroll-container" class="scroll-container">
                    <section id="step0" class="step d-none">
                    </section>
                    <section id="step1" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        1. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>

                    </section>
                    <section id="step2" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        2. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="step3" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        3. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="step4" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        4. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="step5" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        5. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="step6" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        6. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="step7" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        7. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section id="step8" class="step">
                        <div class="title">
                            <div class="section_titles">
                                <h4>Introducing Concord</h4>
                                <h3> Fiber Glass Helmets</h3>
                                <div class="section_title_desc">
                                    <h2>
                                        8. High Tensile Strength
                                    </h2>
                                    <p>Glass has greater tensile strength
                                        than steel wire of the same
                                        diameter, at a lower weight.</p>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <div class="col-sm-6 m-0 p-0">
                <div id="background-container" class="background-container">
                    <div id="video-container" class="video-container">
                        <video
                            src="https://www.apple.com/media/us/mac-pro/2013/16C1b6b5-1d91-4fef-891e-ff2fc1c1bb58/videos/macpro_main_desktop.mp4"
                            type="video/mp4" id="bgVideo" preload="auto" muted="" plays-inline=""></video>
                        <!-- <video
                            src="https://res.cloudinary.com/tuskmelonimagestorage/video/upload/v1661407711/Tuskmelon/tinywow_Podium_vznupm_4772362_aizysd.mp4"
                            type="video/mp4" id="bgVideo" preload="auto" muted="" plays-inline=""></video> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/ScrollTrigger.min.js"></script>
    <script>
    gsap.registerPlugin(ScrollTrigger);

    const bgVvideo = document.querySelector("#bgVideo");

    bgVideo.pause();
    bgVideo.currentTime = 0;

    let sections = gsap.utils.toArray(".step");
    sections.forEach((step, i) => {

        ScrollTrigger.create({
            trigger: step,
            start: "bottom bottom",
            end: "+=300",
            pin: true,
            anticipatePin: 1,
        });

        gsap.fromTo(bgVideo, {
            currentTime: 1.5 * i
        }, {
            scrollTrigger: {
                trigger: step,
                scrub: true,
                // ease: "SlowMo",
                start: "top bottom",
                end: "bottom bottom",
            },
            currentTime: 1.5 * (i + 1),
            duration: 1.5,
            // ease: "SlowMo",
        });
    });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>