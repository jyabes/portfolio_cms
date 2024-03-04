<?php
include_once('admin/dynamic_page_db.php');

$query = "SELECT * FROM videos WHERE id = 1";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $video = mysqli_fetch_assoc($result);
} else {
    $video = null;
}

mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link rel="stylesheet" href="css/hamburger-menu.css">
    <script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://kit.fontawesome.com/2e48d723be.js" crossorigin="anonymous"></script>
    <title>Portfolio: Jonathan Yabes</title>
    

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
    

</head>
<body>

    <div class="preloader">
        <img src="images/svg/tube-spinner.svg" alt="Loading">
    </div>

    <!--------- START : DESKTOP MENU --------->
    <div class="col-span-full"> 
        <header class="desktop-menu">
            <nav id="desktop-nav"> 
                <h2 class="hidden">desktop nav</h2>
                <a href="index.html">
                    <img src="images/svg/logo_ver2c.svg" id="logo" alt="logo_ver2">
                </a>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav>

            <!--------- hamburger button for mobile --------->
            
        </header>
    </div>
    <!--------- END : DESKTOP MENU --------->

    <!--------- START : MOBILE MENU --------->
    <header id="main-header" class="col-span-full">
            <button class="hamburger">
                <div class="bar"></div>
            </button>
            
        <nav class="mobile-nav"> 
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="introductionSection">
        <div class="grid-con">
            <div class="col-span-full m-col-start-2 m-col-end-12 l-col-start-2 l-col-end-12 xl-col-start-2 xl-col-end-10">
                <h2 class="hidden">Introduction</h2><br><br>
                <p class="intro">Hi there! I’m Jonathan, bringing brands to life through fun and engaging 3D motion design and videography.
                    <br>From animated videos to ads and more, telling visual stories that grab attention.
                    Ready to create something exciting together? Let’s connect!</p>
            </div>
        </div>
        
        
        

        <div class="grid-con animate-in-right" id="reel-video">
            
            <div class="col-span-full m-col-start-2 m-col-end-12 l-col-start-2 l-col-end-12 xl-col-start-2 xl-col-end-12">
                <div style="padding:56% 0 0 0;position:relative;"><iframe id="reel-video" src="https://player.vimeo.com/video/891705838?badge=0&amp;autopause=0&amp;quality_selector=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Showreel 2023"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            </div>
        </div>
    </section>



    <section id="colab">
        <div class="grid-con">
            <h2 class="hidden">Credible Collaborations</h2>
        </div>
        <div class="grid-con-full slide-in-bottom-2">
            <h2 class="colab-title">Credible Collaborations</h2>
        </div>

        <div class="grid-con slide-in-bottom-2" id="colab-logos">
            <div class="col-span-full m-col-span-4 l-col-span-4 xl-col-span-4 "><img src="images/png/client1-allianz.png" alt="award"></div>
            <div class="col-span-full m-col-span-4 l-col-span-4 xl-col-span-4 "><img src="images/png/client2-guardian.png" alt="award"></div>
            <div class="col-span-full m-col-span-4 l-col-span-4 xl-col-span-4 "><img src="images/png/client3-loowatt.png" alt="award"></div>
        </div>
        <div class="grid-con slide-in-bottom-2" id="colab-logos2">
            <div class="col-span-full m-col-span-3 l-col-span-3 xl-col-span-3 "><img src="images/png/client4-mpc.png" alt="award"></div>
            <div class="col-span-full m-col-span-3 l-col-span-3 xl-col-span-3 "><img src="images/png/client5-slingers.png" alt="award"></div>
            <div class="col-span-full m-col-span-3 l-col-span-3 xl-col-span-3 "><img src="images/png/client6-aia.png" alt="award"></div>
            <div class="col-span-full m-col-span-3 l-col-span-3 xl-col-span-3 "><img src="images/png/client7-runbnb.png" alt="award"></div>
        </div>
    </section>

    <section id="client-experiences">
        <div class="grid-con slide-in-bottom-2" id="clients">
            <div class="col-span-full m-col-start-2 m-col-end-12 l-col-start-2 l-col-end-12 xl-col-start-2 xl-col-end-12">
                <h2 class="slide-in-bottom-2"><b>Client Experiences</b></h2><br><br>
            </div>
            <div class="col-span-full m-col-start-2 m-col-end-12 l-col-start-2 l-col-end-12 xl-col-start-2 xl-col-end-12">
                <div class="client-logo">
                    <div class="testimonials">
                        <svg viewBox="0 0 1024 1024" class="testimonial-icon">
                            <path
                            d="M800 640c-123.712 0-224-100.29-224-224 0-123.712 100.288-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.634-11.636 22.252-24.016 31.83-37.020-11.438 1.8-23.16 2.746-35.104 2.746zM224 640c-123.71 0-224-100.29-224-224 0-123.712 100.29-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.636-11.636 22.254-24.016 31.832-37.020-11.44 1.8-23.16 2.746-35.106 2.746z"
                            ></path>
                        </svg>
                        <p>I wanted stories and he knew exactly what to do. He works excellently. He is also very professional and comes on time. Thank you Jonathan!</p>
                        <div>
                            <img src="images/png/test-misha.png" class="testimonial-image" alt="profile">
                        </div>
                        <div>
                            <span>Misha O.</span>
                        </div>
                    </div>
                    
                    <div class="testimonials">
                        <svg viewBox="0 0 1024 1024" class="testimonial-icon">
                            <path
                            d="M800 640c-123.712 0-224-100.29-224-224 0-123.712 100.288-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.634-11.636 22.252-24.016 31.83-37.020-11.438 1.8-23.16 2.746-35.104 2.746zM224 640c-123.71 0-224-100.29-224-224 0-123.712 100.29-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.636-11.636 22.254-24.016 31.832-37.020-11.44 1.8-23.16 2.746-35.106 2.746z"
                            ></path>
                        </svg>
                        <p>He listens to your ideas, providing valuable advice without imposing his own. We truly enjoyed having him as our videographer and editor and the results-stunning!</p>
                        <div>
                            <img src="images/png/test-kristina.png" class="testimonial-image" alt="profile">
                        </div>
                        <div>
                            <span>Kristina D.</span>
                        </div>
                    </div>

                    <div class="testimonials">
                        <svg viewBox="0 0 1024 1024" class="testimonial-icon">
                            <path
                            d="M800 640c-123.712 0-224-100.29-224-224 0-123.712 100.288-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.634-11.636 22.252-24.016 31.83-37.020-11.438 1.8-23.16 2.746-35.104 2.746zM224 640c-123.71 0-224-100.29-224-224 0-123.712 100.29-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.636-11.636 22.254-24.016 31.832-37.020-11.44 1.8-23.16 2.746-35.106 2.746z"
                            ></path>
                        </svg>
                        <p>So easy to work with you, that you manage to capture the genuine love of people through your vision. Thank you and more power to you and your team.</p>
                        <div>
                            <img src="images/png/test-john.png"  class="testimonial-image" alt="profile">
                        </div>
                        <div>
                            <span>John B.</span>
                        </div>
                    </div>
                    
                </div>
            </div>



            <div class="col-span-full m-col-start-2 m-col-end-12 l-col-start-2 l-col-end-12 xl-col-start-2 xl-col-end-12">
                <div class="client-logo">
                    <div class="testimonials">
                        <svg viewBox="0 0 1024 1024" class="testimonial-icon">
                            <path
                            d="M800 640c-123.712 0-224-100.29-224-224 0-123.712 100.288-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.634-11.636 22.252-24.016 31.83-37.020-11.438 1.8-23.16 2.746-35.104 2.746zM224 640c-123.71 0-224-100.29-224-224 0-123.712 100.29-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.636-11.636 22.254-24.016 31.832-37.020-11.44 1.8-23.16 2.746-35.106 2.746z"
                            ></path>
                        </svg>
                        <p>Absolutely fantastic! Not only is he an awesome guy, his videos are truly remarkable. Highly recommended for an extraordinary videography experience!</p>
                        <div>
                            <img src="images/png/test-verjun.png" class="testimonial-image" alt="profile">
                        </div>
                        <div>
                            <span>Verjun C.</span>
                        </div>
                    </div>
                    
                    <div class="testimonials">
                        <svg viewBox="0 0 1024 1024" class="testimonial-icon">
                            <path
                            d="M800 640c-123.712 0-224-100.29-224-224 0-123.712 100.288-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.634-11.636 22.252-24.016 31.83-37.020-11.438 1.8-23.16 2.746-35.104 2.746zM224 640c-123.71 0-224-100.29-224-224 0-123.712 100.29-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.636-11.636 22.254-24.016 31.832-37.020-11.44 1.8-23.16 2.746-35.106 2.746z"
                            ></path>
                        </svg>
                        <p>He goes the extra mile by personally inspecting the location, showcasing his genuine effort. His willingness to lend a helping hand to the client adds a special touch.</p>
                        <div>
                            <img src="images/png/test-val.png" class="testimonial-image" alt="profile">
                        </div>
                        <div>
                            <span>Val U.</span>
                        </div>
                    </div>

                    <div class="testimonials">
                        <svg viewBox="0 0 1024 1024" class="testimonial-icon">
                            <path
                            d="M800 640c-123.712 0-224-100.29-224-224 0-123.712 100.288-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.634-11.636 22.252-24.016 31.83-37.020-11.438 1.8-23.16 2.746-35.104 2.746zM224 640c-123.71 0-224-100.29-224-224 0-123.712 100.29-224 224-224s224 100.288 224 224l1 32c0 247.424-200.576 448-448 448v-128c85.474 0 165.834-33.286 226.274-93.726 11.636-11.636 22.254-24.016 31.832-37.020-11.44 1.8-23.16 2.746-35.106 2.746z"
                            ></path>
                        </svg>
                        <p>Experience excellence with award-winning and internationally recognized standards for your project events. 🏆 Your memories, meticulously preserved.</p>
                        <div>
                            <img src="images/png/test-niko.png"  class="testimonial-image" alt="profile">
                        </div>
                        <div>
                            <span>Niko P.</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>


    <footer>
        <h3 class="hidden">Footer</h3>
        <div class="col-span-full">
            <div class="col-span-full m-span-full l-col-span-full xl-col-span-full">
                <div class="call-to-action">
                    <h3>Let's Work Together!</h3><br>
                    <div class="contact-container">
                        <form class="contact-form1">
                            <div class="form-group">
                            
                            <input type="email" id="email" name="email" placeholder="Enter your email address">
                            </div>
                            <div>
                            <button type="submit" class="contact-btn-footer">Submit</button></div>
                        </form><br>
                        <div class="social-icons">
                            <a href="index.html">
                                <i class="fa-brands fa-square-facebook fa-fade"></i>
                            </a>
                            <a href="https://www.instagram.com/yabesfilms/">
                                <i class="fa-brands fa-square-instagram fa-fade"></i>
                            </a>
                            <a href="https://vimeo.com/yabesfilms">
                                <i class="fa-brands fa-vimeo fa-fade"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-span-full">
                <div class="copyright">
                <p>&copy; 2023 Jonathan Yabes. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script defer src="js/SplitText.js"></script>
    <script defer src="js/main.js"></script>
</body>
</html>