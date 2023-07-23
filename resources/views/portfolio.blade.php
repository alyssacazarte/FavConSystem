<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="Portfolio.css"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>

    <!-- ======== Header ======== -->
    <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);" class="header">
        <div class="logo">
        <img src="{{ asset('images/Logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a class="active" href="#">Portfolio</a></li>
                <li><a href="advocacy.html">Advocacy</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="bar">
                <i class="open fa-solid fa-bars"></i>
                <i class="close fa-solid fa-xmark"></i>
            </div>
        </nav>
    </div>

    <!-- ======== Header ======== -->

    <div class="main">
        <div class="home" id="home">
            <div class="left text">
                <span>Hello, I'm</span><br>
                <h1>Hi! I’m</h1>
                <h1><span class="typing1"></span></h1><br>

                <p>I help businesses grow through the power of digital
                    marketing and <br> creative strategy.
                    Learn more about my award-winning tactics <br> and experience!
                </p>
                <div class="buttons">
                    <button class="btn"><a href="#contact">Get Started</a></button>
                </div>
            </div>
            <div class="image">
            <img src="{{ asset('images/profile.png') }}" alt="Profile">
            </div>
        </div><br><br>


        <!-- ====== for the project section ======== -->
        <div class="project" id="project">
            <div class="title aboutTxt">
                <span>PROJECTS </span>
            </div>
        </div>
        <div class="background">

        </div>
        <div class="project">

            <div class="carousel-container">

                <div class="carousel">

                    <div class="card_project">
                    <img src="{{ asset('images/aphelion.png') }}" alt="Aphelion">
                        <div class="card-content">
                            <h2>Creative Project Lead</h2><br>
                            <p> Trained over 22 influencer talent
                                accounts increasing our network following
                                by over 700,000 combined • Directed all Internal content on YouTube,
                                Twitter, Instagram, capturing over 15,000 new followers</p>

                            <button onclick="document.getElementById('id02').style.display='block'" class="btn"
                                style="font-size: 12px;font-weight: bold; margin-bottom: 1rem;"><a href="#">READ
                                    MORE</a>
                            </button>

                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content">
                                <div class="w" style="background-image: url({{ asset('images/aboutb.png') }}); background-repeat: no-repeat; background-size: cover;">
                                        <span onclick="document.getElementById('id01').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                        <h5 style="padding: 3rem; text-align: justify;">Lorem ipsum dolor, sit amet
                                            consectetur adipisicing elit.
                                            Iure quibusdam tempore voluptatem laborum, fuga saepe similique, itaque ea
                                            hic
                                            exercitationem obcaecati delectus porro illum animi dolor rem provident
                                            neque
                                            deserunt iste, harum dolores. Pariatur deserunt asperiores aspernatur ab
                                            quo,
                                            magni hic eum minima. Asperiores, itaque necessitatibus voluptatem eos a
                                            quasi
                                            ut placeat nobis veniam voluptatibus quia! Assumenda, nemo non omnis ducimus
                                            harum beatae in facere quis dolore laboriosam molestiae id doloremque
                                            laudantium
                                            repellat nesciunt maiores cumque. Eaque sit earum accusantium magnam
                                            laboriosam
                                            sapiente quo similique fugiat, maxime, sequi cum consequatur amet fuga magni
                                            quam soluta dolores culpa. Autem, dignissimos laborum!.</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card_project">
                    <img src="{{ asset('images/teamliquid.png') }}" alt="TeamLiquid">
                        <div class="card-content">
                            <h2>Creative Project Lead</h2><br>
                            <p> Trained over 22 influencer talent
                                accounts increasing our network following
                                by over 700,000 combined • Directed all Internal content on YouTube,
                                Twitter, Instagram, capturing over 15,000 new followers</p>

                            <button onclick="document.getElementById('id01').style.display='block'" class="btn"
                                style="font-size: 12px;font-weight: bold; margin-bottom: 1rem;"><a href="#">READ
                                    MORE</a>
                            </button>

                            <div id="id02" class="w3-modal">
                                <div class="w3-modal-content">
                                <div class="w" style="background-image: url({{ asset('images/aboutb.png') }}); background-repeat: no-repeat; background-size: cover;">
                                        <span onclick="document.getElementById('id02').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                        <h5 style="padding: 3rem; text-align: justify;">Lorem ipsum dolor, sit amet
                                            consectetur adipisicing elit.
                                            Iure quibusdam tempore voluptatem laborum, fuga saepe similique, itaque ea
                                            hic
                                            exercitationem obcaecati delectus porro illum animi dolor rem provident
                                            neque
                                            deserunt iste, harum dolores. Pariatur deserunt asperiores aspernatur ab
                                            quo,
                                            magni hic eum minima. Asperiores, itaque necessitatibus voluptatem eos a
                                            quasi
                                            ut placeat nobis veniam voluptatibus quia! Assumenda, nemo non omnis ducimus
                                            harum beatae in facere quis dolore laboriosam molestiae id doloremque
                                            laudantium
                                            repellat nesciunt maiores cumque. Eaque sit earum accusantium magnam
                                            laboriosam
                                            sapiente quo similique fugiat, maxime, sequi cum consequatur amet fuga magni
                                            quam soluta dolores culpa. Autem, dignissimos lab</h5>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Add more card elements if needed -->
                </div>
                <i id="left" style=" margin-left: 1rem; background-color:#F8AF5B ;" class="fa-solid fa-angle-left"></i>
                <i id="right" style=" background-color:#F8AF5B ;" class="fa-solid fa-angle-right"></i>


            </div>
        </div>
    </div>
    <!-- ====== end of the project section ======== -->


    <!-- ====== for the services section ======== -->
    <div class="services" id="services">
        <div class="servicesTxt title">
            <span>Services</span>
        </div><br><br><br>
        <div class="serviceBox">
            <div class="box">
                <div class="card">
                    <div class="icon">  
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div>
                        <div class="text">Social Media <br> Management / Marketing</div><br>
                        <p>This service involves managing and maintaining your social media profiles on various
                            platforms such as Facebook,
                            Twitter, Instagram, and LinkedIn.
                        </p><br>
                        <span class="click-span" style="color: #FF7C03; cursor: pointer;font-size: small;">READMORE
                        </span>
                        <div class="modal">
                            <div class="modal-content">
                                <span class="close-btn">&times;</span>
                                <h2> More about: </h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, magnam obcaecati
                                    necessitatibus hic, error ipsum saepe
                                    quo atque ratione optio sunt. Debitis quae in eum quos quod. Quo, nihil ea.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div>
                        <div class="text">Paid Social Ads</div><br>
                        <p>This service involves creating visual content for various marketing
                            materials such as social media posts, email campaigns, websites, and print materials.
                        </p><br><br>
                        <span class="click-test"
                            style="color: #FF7C03; cursor: pointer;font-size: small;">READMORE</span>
                        <div class="test">
                            <div class="modal-content">
                                <span class="close-test">&times;</span>
                                <h2> More about: </h2>
                                <p>bla bla bla Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias,
                                    quasi..</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-brush"></i>
                    </div>
                    <div>
                        <div class="text">Graphic Design</div><br>
                        <p>This service involves developing and executing a social media strategy
                            to promote your business, brand, or product.
                        </p><br><br><br>
                        <span class="click-third"
                            style="color: #FF7C03; cursor: pointer;font-size: small;">READMORE</span>
                        <div class="third">
                            <div class="modal-content">
                                <span class="close-third">&times;</span>
                                <h2> More about: </h2>
                                <p>chanext cute Lorem ipsum dolor sit amet., sit amet consectetur adipisicing elit. Molestias,
                                    quasi..</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <div>
                        <div class="text">Marketing / Branding <br> Consulting</div>
                        <p>This service involves providing strategic advice and guidance on marketing and branding
                            initiatives
                            to help clients achieve their business objectives. </p><br>
                            <span class="click-fourt"
                            style="color: #FF7C03; cursor: pointer;font-size: small;">READMORE</span>
                        <div class="fourt">
                            <div class="modal-content">
                                <span class="close-fourt">&times;</span>
                                <h2> More about: </h2>
                                <p>chanext cute og gwapo Lorem ipsum dolor sit amet., sit amet consectetur adipisicing elit. Molestias,
                                    quasi..</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ====== end of the services section ======== -->


    <!-- ============== for the looking expert section =============== -->
    <div class="looking" id="looking">

        <div class="lets" id="lets">
            <div class="consult">
                <p style="color: #660808; margin-top: -5rem;">LOOKING FOR AN EXPERT</p><br><br>
                <h1 style="font-size: 3rem;color: white;text-shadow: 2px 2px #7d7c7c; font-weight: bold;">LET'S START A
                    PROJECT TOGETHER
                </h1>
                <div class="buttons">
                    <button style="border: 3px solid #FF7C03;" class="btn"><a href="#contact">TELL ME THE
                            DETAILS</i></a></a></button>
                </div>
            </div>
        </div>
        <br><br>

    </div>
    <!-- ============== end of the looking expert section =============== -->


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
        <script src="{{ asset('js/portfolio.js') }}"></script>

</body>

</html>