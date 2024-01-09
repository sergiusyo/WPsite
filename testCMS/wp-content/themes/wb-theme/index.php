<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <?php wp_head(); ?> 
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="menu__desktop">
                <ul class="menu">
                    <li class="menu__item active"><a href="#">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><a href="#"><img src="img/logo.png" alt="" class="logo"></a></li>
                    <li class="menu__item"><a href="#provide">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <nav class="menu__mobile">
                <div class="menu__inner">
                    <a href="#"><img src="img/logo.png" alt="" class="logo"></a>
                    <div class="menu__burger"><span>toggle menu</span></div>
                </div>
                <ul class="menu">         
                    <li class="menu__item active"><a href="#">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><a href="#provide">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header__content">
                <h1 class="header__title">We build it with passion</h1>
                <p class="header__text">Just to be clear, we do this for fun not for you, just kidding.</p>
                <a href="" class="header__button">READ MORE</a>
            </div>
        </div>
    </header>
    <div class="about" id="about">
        <div class="container">
            <div class="about__inner">
                <div class="about__item">
                    <div class="about__year">2011</div>
                    <div class="about__text">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam
                        vitae hendrerit bigus mit.</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2012</div>
                    <div class="about__text">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam
                        vitae hendrerit bigus mit.
                        Begitus vit urna nulla.</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2013</div>
                    <div class="about__text">Sed at auctor sem, nec tincidunt elit. Pellentesque enim turpis, porttitor
                        ac orci in, ultrices efficitur nisl. Ut odio libero, sodales a tellus eleifend, suscipit dapibus
                        mi.</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2014</div>
                    <div class="about__text">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam
                        vitae hendrerit bigus mit.
                        Begitus vit urna nulla.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title">This is our team</h2>
                <p class="block__text">We are small but effective and ...</p>
            </div>
            <div class="team__inner">
                <div class="team__item">
                    <img class="team__item-img" src="img/team1.png" alt="">
                    <h3 class="team__item-title">Mark Once</h3>
                    <p class="team__item-text">Designer & Front-End Developer</p>
                    <div class="team__icon-box">
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                    </div>
                </div>
                <div class="team__item">
                    <img class="team__item-img" src="img/team2.png" alt="">
                    <h3 class="team__item-title">Justin Twice</h3>
                    <p class="team__item-text">Founder & CEO</p>
                    <div class="team__icon-box">
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                    </div>
                </div>
                <div class="team__item">
                    <img class="team__item-img" src="img/team3.png" alt="">
                    <h3 class="team__item-title">Antonio Never</h3>
                    <p class="team__item-text">Someone & Somewhere</p>
                    <div class="team__icon-box">
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="#"><i class="icon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title">We provide you everything</h2>
                <p class="block__text">Maybe not everything, but we provide you some stuff.</p>
            </div>
            <div class="provide__inner">
                <div class="provide__item">
                    <i class="icon-chart-line"></i>
                    <h3 class="provide__item-title">Some Analytics</h3>
                    <p class="provide__item-text">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</p>
                </div>
                <div class="provide__item">
                    <i class="icon-heart"></i>
                    <h3 class="provide__item-title">We provide you love</h3>
                    <p class="provide__item-text">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</p>
                </div>
                <div class="provide__item">
                    <i class="icon-upload-cloud-outline"></i>
                    <h3 class="provide__item-title">And Some Cloud</h3>
                    <p class="provide__item-text">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</p>
                </div>
            </div>
        </div>
    </div> 
    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title">Contac Us</h2>
                <p class="block__text">We know what we need to do</p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="tel:555222333">555-222-333</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-location"></i> 
                        <div class="contact__text"><a href="https://goo.gl/maps/ot9BCyYtQbSXoJYRA" target="_blank">Here is some address</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="mailto:somemail@hotmail.com">somemail@hotmail.com</a></div>
                    </div>
                </div>
                <form action="" class="contact__form">
                    <input class="contact__name" type="text" placeholder="Full Name">
                    <input class="contact__email" type="email" placeholder="Email">
                    <input class="contact__number" type="number" placeholder="Number">
                    <textarea class="contact__textarea" placeholder="Write your Message here..."></textarea>
                    <input type="submit" class="contact__button" value="Submit">
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer__text">
                Copyright &copy; Kenan Hamidic. All rights reserved.
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>

</html>