<?php
/**
 * Template Name: Página Principal
 */

get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php
    function add_favicon() {
        echo '<link rel="icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" />';
    }
    add_action('wp_head', 'add_favicon');
    ?>
   
    <title>Simon Castaño R</title>
</head>
<body>
    <img src="<?php echo get_template_directory_uri(); ?>/img/profile.png"  class="picture_logo" width="100px" alt="">
    <nav class="nav">
        <a href="#about">ABOUT</a>
        <a href="#what_i_do">WHAT I DO</a>
        <a href="#experience">EXPERIENCE</a>
        <a href="#Connect">CONTACT</a>
    </nav>
    <div id="circle"></div>
    <main class="content">
        <section class="hero">
            <h1>SIMON CASTAÑO | PRODUCT DESIGNER</h1>
        <h2 class="hero-title">
            ALWAYS WORKING 
        </h2>
        <h2 class="hero-title2">
           A IN AMAZING PROJECTS
        </h2>
        </section>
        <section class="about " id="about">
            <h2>ABOUT ME</h1>
            <p>I´m  a selectively skilled product designer with strong focus on producing high quality & impactful digital experience</p>
        </section>
        <section class="what_i_do" id="what_i_do">
            <h2>WHAT I DO</h1>
            <p  class="skill">PRODUCT DESIGN</p>
            <p  class="skill">UI/UX DESING</p>
            <p  class="skill">CONTENT CREATION</p>
            <p  class="skill">MOTION DESGIN</p>
            <p  class="skill">FRONTEND</p>
            <p  class="skill">CMS PROJECTS</p>
        </section>
        <section class="experience" id="experience">
            <h2>Expirience</h1>
            <p>Almost 4 years working on interactive design and code and working with some of the most talented people in the business</p>
            <br>
            <div class="card-enxperience">
                <div class="time">
                    <h5>11 mos</h5>
                    <p>Aug 2022 - present</p>
                </div>
                <div class="position">
                    <h5>Lead frontend</h5>
                    <p>At Imergi - Full time</p>
                </div>
            </div>
            <div class="card-enxperience">
                <div class="time">
                    <h5>5 mos</h5>
                    <p>Mar 2022 - Jul 2022</p>
                </div>
                <div class="position">
                    <h5>UI designer</h5>
                    <p>At e-Partner - Full time</p>
                </div>
            </div>
            <div class="card-enxperience">
                <div class="time">
                    <h5>2 yrs 3 mos</h5>
                    <p>Jan 2020 - Mar 2022</p>
                </div>
                <div class="position">
                    <h5>Marketing director</h5>
                    <p>At DODO - Freelance</p>
                </div>
            </div>
            <div class="card-enxperience">
                <div class="time">
                    <h5>1 yr 3 mos</h5>
                    <p>Oct 2020 - Dec 2021</p>
                </div>
                <div class="position">
                    <h5>Designer and Video Produce</h5>
                    <p>At klout pro - Full time</p>
                </div>
            </div>
            <div class="card-enxperience">
                <div class="time">
                    <h5>10 mos </h5>
                    <p>JAN 2018 - OCT 2020</p>
                </div>
                <div class="position">
                    <h5>Wordpress developer</h5>
                    <p>At Eiser group - Full time</p>
                </div>
            </div>
        </section>
        <footer id="Connect">
            <h2>Connect</h2>
            <div class="list_container">
            <div class="list_my_work">
                <a target="_blank" href="https://www.behance.net/simoncastao1?isa0=1">
                    <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11.5L0.499999 22.7583L0.5 0.241669L20 11.5Z" fill="#D9D9D9"/>
                    </svg>
                    Behance   
                </a>
                <a target="_blank" href="https://github.com/SimonCastano">
                    <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11.5L0.499999 22.7583L0.5 0.241669L20 11.5Z" fill="#D9D9D9"/>
                    </svg>
                    Github   
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/simoncastano/">
                    <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11.5L0.499999 22.7583L0.5 0.241669L20 11.5Z" fill="#D9D9D9"/>
                    </svg>
                    Linkedin   
                </a>
            </div>
            <div class="list_content">
                <a target="_blank" href="https://www.instagram.com/simoncastano_/">
                    <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11.5L0.499999 22.7583L0.5 0.241669L20 11.5Z" fill="#D9D9D9"/>
                    </svg>
                    Instagram   
                </a>
                <a target="_blank" href="https://www.youtube.com/channel/UCFCkotll27xZXUakq7NXV5g">
                    <svg width="20" height="23" viewBox="0 0 20 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 11.5L0.499999 22.7583L0.5 0.241669L20 11.5Z" fill="#D9D9D9"/>
                    </svg>
                    Youtube   
                </a>
            </div>
            <div class="list_contact">
                <div class="email">
                    <h5>Email</h5>
                    <a target="_blank" href="mailto:castanosimon2002@gmail.com">castanosimon2002@gmail.com</a>
                </div>
                <div class="phone">
                    <h5>Phone</h5>
                    <a target="_blank" href="https://api.whatsapp.com/send?phone=573193081150&text=I%20came%20from%20your%20website%20and%20I%20am%20interested%20in%20">+57 319 308 1150</a>
                </div>
            </div>
        </div>
        </footer>
    </main>
    <script src="./js.js"></script>
</body>
</html>