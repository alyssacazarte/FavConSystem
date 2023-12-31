<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('css/about.css') }}" rel="stylesheet">
    <title>About</title>
</head>

<body>
    <!-- ======== Header ======== -->
    <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);" class="header">
        <div class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="advocacy">Advocacy</a></li>
                <li><a class="test" href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <div class="bar">
                <i class="open fa-solid fa-bars"></i>
                <i class="close fa-solid fa-xmark"></i>
            </div>
        </nav>
    </div>

    <!-- ======== End for Header ======== -->



    <!-- =================== for the first section ========================= -->

    <div class="main">
        <button style="display: none;" class="btn"><a href="#contact">Go to Site</a></button>
        <div class="main">
            <div class="container">
                <h1>HI! I’M
                    <span>
                        Favio-Valentino Jasso
                    </span>
                </h1>
                <p>Marketing and Branding Expert</p>
            </div>

        </div>


        <!-- =================== end of the first section ========================= -->


        <!-- =================== for the second section ========================= -->

        <div class="section">

            <!-- ---- column 21------ -->

            <div class="column">
                <h2>Who Am I?</h2>
                <p>Favio Jasso is a Mexican-American marketer based in the New York
                    Metropolitan area.
                    Favio is accompanied by 4 years of experience working with high-profile
                    entertainment brands like Team Liquid and the San Antonio Spurs.
                </p><br>

                <button class="btn">
                    <a id="read">
                        Read More
                    </a>
                </button>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="exit">&times;</span><br><br>
                        <p>Additionally, he has achieved national recognition as CES 2022 honoree award and South by
                            SouthWest nominee for best in innovation under the tech focus led brand LetsPlott. Favio’s
                            marketing expertise has allowed him to expand into consulting influencer talent who have
                            amassed six to seven-figure followings. Favio’s extensive industry experience has proven his
                            intellect in regard to the neverending outlook of the marketing world.
                        </p>
                    </div>
                </div>

            </div>

            <!-- ---- column 2 ------ -->
            <div class="column" id="test">
                <img src="{{ asset('images/fav.png') }}" alt="an old car">
            </div>



            <!-- ---- column 3 ------ -->

            <div class="column">
                <div class="contact-icons">
                    <a href="https://www.linkedin.com/in/faviojasso/"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://github.com/FavioJasso"><i class="fa-brands fa-github"></i></a>
                    <a href="https://twitter.com/FavioJasso"><i class="fa-brands fa-twitter"></i></a>
                    <!-- Icon -->

                    <a class="click-icon"><i class="fa-solid fa-mobile-screen"></i></a>
                    <div class="icon" style="display: none;">
                    <a class="click-icon" id="myBtnM"><i class="fa-solid fa-mobile-screen"></i></a>
                    <!-- <div class="icon" style="display: none;">
                        <div class="modal-icon">
                            <span class="close-icon">x</span>
                            <div class="contact-info">
                                <h2>973-234-2073</h2>
                                <p>Contact Number</p>
                            </div>
                        </div>

                    </div>
                    <a class="click-icon2"><i class="fa-solid fa-envelope"></i></a>
                    <div class="icon2" style="display: none;">
                        <div class="modal-icon2">
                            <span class="close-icon2">x</span>
                            <div class="contact-info2">
                                <h2>fjporras04@gmail.com</h2>
                                <p>Email Address</p>
                            </div>
                        </div>

                    </div> -->

                    <!-- The Modal -->
                    <div id="myModalm" class="modalM">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="closem">&times;</span>
                                <h2>Contact Number </h2>
                            </div>
                            <div class="modal-bodym  ">
                                <h4>973-234-2073</h4>
                                <smal>Please contact this number for more information...</small>
                            </div>
                            <div class="modal-footer">
                                <h3>Modal Footer</h3>
                            </div>
                        </div>

                    </div>
                    <a class="click-icon2" id="myBtnE"><i class="fa-solid fa-envelope"></i></a>


                    <!-- The Modal -->
                    <div id="myModale" class="modalE">

                        <!-- Modal content -->
                        <div class="modal-content">
                            <div class="modal-header">
                                <span class="closee ">&times;</span>
                                <h2>My Email  </h2>
                            </div>
                            <div class="modal-bodye">
                                <h4>example email</h4>
                                <smal>Please contact this email for more information...</small>
                            </div>
                            <div class="modal-footer">
                                <h3>Modal Footer</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- =================== end of the second section ========================= -->

    <!-- ======== Footer ======== -->
    <div class="f-footer" id="f-footer">
        <ul>
            <li><a href="./index">Portfolio</a></li>
            <li><a href="./advocacy">Advocacy</a></li>
            <li><a href="./about">About Me</a></li>
            <li><a href="./contact">Contact</a></li>
        </ul>
        <hr>


        <div class="footer">

            <div class="socialIcons">
                <h6 style="font-size: 10px;">FOLLOW ME</h6>
                <a><i class="fa-brands fa-instagram"></i></a>
                <a><i class="fa-brands fa-facebook"></i></a>
                <a><i class="fa-brands fa-github"></i></a>
                <a><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="copy">
                © Copyright. All rights reserved.
            </div>

        </div>

        <div class="topBtn">
            <a href="#"><i class="fa-solid fa-angle-up"></i></a><br><br>
        </div>


        <script src="{{ asset('js/scroll.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="{{ asset('js/about.js') }}"></script>
</body>

</html>