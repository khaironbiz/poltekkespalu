<!DOCTYPE html>
<html lang="en">
<head>
    <title>Politeknik Kesehatan Palu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('meetup')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('meetup')}}/css/style.css">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<section id="home-section" class="hero js-fullheight">
    <h3 class="vr"><span>Welcome</span> to Virtual Expo.</h3>
    <div id="timer" class="text-center">
        <div class="time" id="days"></div>
        <div class="time" id="hours"></div>
        <div class="time" id="minutes"></div>
        <div class="time" id="seconds"></div>
    </div>
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight">
            <div class="overlay"></div>
            <div class="container-fluid px-0">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last js-fullheight img">
                        <video autoplay loop muted playsinline>
                            <source src="{{asset('meetup/videos/pinguin.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                    <div class="one-forth js-fullheight d-flex align-items-start align-items-md-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text mt-4 mt-md-0">
                            <h1 class="mb-4">Virtual Expo <span>POLTEKKES Palu</span></h1>
                            <h2 class="mb-4">01-30 Oktober 2022</h2>
                            <p>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary py-3 px-4 mt-2" data-toggle="modal" data-target="#virtualExpo">
                                    Daftar Expo
                                </button>
                                <button type="button" class="btn btn-white py-3 px-4 mt-2" data-toggle="modal" data-target="#webinar">
                                    <b>Daftar Webinar</b>
                                </button>
                                <button type="button" class="btn btn-warning py-3 px-4 mt-2" data-toggle="modal" data-target="#submitPaper">
                                    <b>Submit Paper</b>
                                </button>

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="virtualExpo" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1>Virtual Expo</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="webinar" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h1>Webinar Keperawatan</h1>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="submitPaper" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="staticBackdropLabel">Submit Paper</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="staticEmail" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">HP</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="staticEmail">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Institusi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('meetup')}}/js/jquery.min.js"></script>
<script src="{{asset('meetup')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('meetup')}}/js/popper.min.js"></script>
<script src="{{asset('meetup')}}/js/bootstrap.min.js"></script>
<script src="{{asset('meetup')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('meetup')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('meetup')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('meetup')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('meetup')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('meetup')}}/js/aos.js"></script>
<script src="{{asset('meetup')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('meetup')}}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('meetup')}}/js/google-map.js"></script>

<script src="{{asset('meetup')}}/js/main.js"></script>
<script>
    function makeTimer() {
        var endTime = new Date("2022-10-01 9:56:00 GMT+07:00");
        endTime = (Date.parse(endTime) / 1000);
        var now = new Date();
        now = (Date.parse(now) / 1000);
        var timeLeft = endTime - now;
        var days = Math.floor(timeLeft / 86400);
        var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }
        $("#days").html(days + "<span>Days</span>");
        $("#hours").html(hours + "<span>Hours</span>");
        $("#minutes").html(minutes + "<span>Minutes</span>");
        $("#seconds").html(seconds + "<span>Seconds</span>");
    }
</script>
</body>
</html>
