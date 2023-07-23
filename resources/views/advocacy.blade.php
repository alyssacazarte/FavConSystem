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
    <link href="{{ asset('css/advocacy.css') }}" rel="stylesheet">

    <title>Advocacy</title>
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
                <li><a class="test" href="advocacy.html">Advocacy</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="bar">
                <i class="open fa-solid fa-bars"></i>
                <i class="close fa-solid fa-xmark"></i>
            </div>
        </nav>
    </div>

    <!-- ======== End for Header ======== -->



    <div class="main">

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="{{ asset('images/1a.png') }}" style="width:100%;height: 30rem;" alt="Image">
                <div class="text">
                    <div class="buttons">
                        <button class="btn"><a href="#contact">Go to Site</a></button>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="{{ asset('images/2b.png') }}" style="width:100%;height: 30rem;">
                <div class="text">
                    <div class="buttons">
                        <button class="btn"><a href="#contact">Go to Site</a></button>
                    </div>
                </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="{{ asset('images/3c.png') }}" style="width:100%;height: 30rem;">
                <div class="text">
                    <div class="buttons">
                        <button class="btn"><a href="#contact">Go to Site</a></button>
                    </div>
                </div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </div>




    <div class="experience" id="experience">
        <div class="title aboutTxt">
            <span>EXPERIENCE </span>
        </div>


        <center>
            <p class="caption">
                It's the experience section dedicated to showcasing the projects that Mr. Favio has completed,
                providing a comprehensive overview of his roles, responsibilities,
                accomplishments, and relevant skills within each project.
            </p><br>
        </center>
        <br>

        <div class="card-container">
            <div class="card">
                <img src="{{ asset('images/1.png') }}" alt="Image 1" class="card-image">
                <h3 class="card-title">Buying.com</h3>
                <p class="card-definition">Administrative Assistant</p>
                <button class="btn-read-more"><a>Read More</a></button>


                <div class="card-modal-overlay">
                    <div class="card-modal-content">
                        <p class="card-definition-full">
                            <img src="img/1.png" alt=""><br><br>
                            <small>• Leads group
                                of customer service admins to monitor and serve over 31,0000 monthly
                                delivery food orders. <br><br>

                                • Liaise with executive and senior administrative assistants to handle requests from
                                senior
                                management. <br><br>

                                • Lead and trained a team of sales reps to generate monthly sales of $100,000 gross
                                software
                                sales. <br><br>

                                • Write and distribute email, correspondence memos, letters, faxes and forms
                            </small>
                        </p>
                        <button class="btn-close">Close</button>
                    </div>
                </div>


            </div>
            <div class="card">
                <img src="{{ asset('images/2.png') }}" alt="Image 1" class="card-image">
                <h3 class="card-title">LetsPlott</h3>
                <p class="card-definition">Social Media Manager</p>
                <button class="btn-read-more"><a>Read More</a></button>


                <div class="card-modal-overlay">
                    <div class="card-modal-content">
                        <p class="card-definition-full">
                            <img src="{{ asset('images/2.png') }}" alt=""><br><br>
                            <small>• Managed a
                                budget of $250,000 dollars in yearly ad spend on social media + e-commerce, which
                                generated
                                $37,500 in monthly gross
                                sales revenue <br><br>
                                • Best in App honoree at CES 2022 for our newest advancements in XR and AR within our
                                App,
                                assisted in Awards submission, in app
                                testing, taking photos, coordinating slides and more <br><br>
                                • Directed all content and strategy on TikTok, YouTube, Instagram and Facebook;
                                Instagram
                                engagement increase by 50%, 35 million global
                                impressions combined <br><br>
                                • Front camera personality, hosted content series/pieces and sprouting new company
                                culture
                            </small>
                        </p>
                        <button class="btn-close">Close</button>
                    </div>
                </div>


            </div>
            <div class="card">
                <img src="{{ asset('images/3.png') }}" alt="Image 1" class="card-image">
                <h3 class="card-title">TribeGaming</h3>
                <p class="card-definition">Social Media Specialist</p>
                <button class="btn-read-more"><a>Read More</a></button>


                <div class="card-modal-overlay">
                    <div class="card-modal-content">
                        <p class="card-definition-full">
                            <img src="img/3.png" alt=""><br><br>
                            <small>• Executed
                                social media strategy collaborating with influencers and talent in the “One Tribe
                                Campaign”
                                which amassed an increase of
                                50,000 followers across platforms over a 2 months span. <br><br>
                                • Content strategy on @TribeGaming YouTube channel contributed to a total amassed
                                28,000,000
                                views over 6 months. <br><br>
                                • Worked with high-level brands like Ford, San Antonio Spurs, and Razer to create
                                sponsor
                                activations, partnerships announcements, and
                                more <br><br>
                                • Trained and consulted on content with top creator talent, @OrangeJuiceGaming,
                                @SirTagCR,
                                @Godzly and more which led to
                                accumulating over 500,000,000 views over TribeGaming network over a 6 months span
                            </small>
                        </p>
                        <button class="btn-close">Close</button>
                    </div>
                </div>


            </div>
        </div>

    </div>


    <!-- =============== for the reminder ============== -->

    <div class="reminder">
        <span class="closeReminderbtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Reminder!</strong> I don't know yet to put here, need to ask first.
    </div>



    <!-- ======== Footer ======== -->
    <div class="f-footer" id="f-footer">
        <ul>
            <li><a href="./index.html">Portfolio</a></li>
            <li><a href="./advocay.html">Advocacy</a></li>
            <li><a href="./about.html">About Me</a></li>
            <li><a href="./contact.html">Contact</a></li>
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
        <script src="{{ asset('js/advocacy.js') }}"></script>
</body>

</html>