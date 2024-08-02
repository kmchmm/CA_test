<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Chez Alice | About</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Jost:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Jost:ital,wght@0,100..900;1,100..900&family=Lusitana:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!--Icons-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    </head>
    <body class="antialiased">
        <div>
            <section class="main-about-container">
                <nav>
                    <ul class="navigation-buttons">
                        <li>
                            <img src="images/logo_chez_alice.png" alt="logo of chez alice">
                        </li>
                        <li class="dropdown">
                            <button class="drop-button">About</button>
                            <div class="dropdown-content">
                                <a href="{{ url('/') }}">Personnel</a>
                                <a href="{{ url('/news') }}">News</a>
                            </div>
                        </li>
                        <li>Offerings</li>
                        <li>Contact/Locations</li>
                    </ul>
                    <div class="menu-btn">
                        <div class="menu-btn_burger-bfr"></div>
                        <div class="menu-btn_burger"></div>
                        <div class="menu-btn_burger-aft"></div>
                    </div>
                    <ul class="navigation-buttons-mobile">
                        <div class="navigation-mobile-container">
                            <li class="dropdown">
                                {{-- <button class="drop-button">About</button> --}}
                                <div class="dropdown-content">
                                    <a href="{{ url('/') }}">Personnel</a>
                                    <a href="{{ url('/news') }}">News</a>
                                </div>
                            </li>
                            <li>Offerings</li>
                            <li>Contact/Locations</li>
                        </div>
                    </ul>
                    <ul>
                        <div class="store-choice">
                            <ul>
                                <li><i class='bx bxs-store'></i></li>
                                <li>
                                    <select name="" id="">
                                        <option value="Princeton">Princeton</option>
                                        <option value="Lambertville">Lambertville</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <li>
                                    <i class='bx bx-cart-alt'></i>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </nav>
                <div class="sub-about-container">
                    <div class="introduction-container">
                        <div>
                            <img src="images/upper-right-bread.png" alt="">
                            <img src="images/upper-left-bread.png" alt="">
                            <img src="images/bottom-left-bread.png" alt="">
                            <img src="images/top-bread.png" alt="">
                        </div>
                        <div class="introduction">
                            <h3>&mdash; patisserie &mdash;</h3>
                            <h1>Chez Alice</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione dolorem velit doloribus quasi numquam ex illo, sit non. Illo nihil iure soluta sed voluptatum dignissimos fugiat omnis vero neque quae.</p>
                            <div>
                                <button>Contact Now &#8594;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="personnel-container">
                <h3>&mdash; bonjour &mdash;</h3>
                <h1>Personnel</h1>

                <div class="slider-main-container">
                    {{-- <div class="slider-container">
                        @foreach ($sliders as $slider)
                            <div class="slider-item">
                                <img src="{{ asset($slider->image_url) }}" alt="{{ $slider->title }}">
                                <h2>{{ $slider->title }}</h2>
                                <h3>{{ $slider->name }}</h3>
                                <p>{{ $slider->description }}</p>
                            </div>
                        @endforeach
                    </div> --}}
                    <div class="slider" id="slider">
                        @foreach($sliders as $index => $slider)
                        <div class="slide">
                            <div class="h2-background">
                                <img src="{{ $slider['image_url'] }}" alt="{{ $slider['name'] }}">
                            </div>
                            <div class="text">
                                <div>
                                    <h2>{{ $slider['title'] }}</h2>
                                </div>
                                <div>
                                    <h4>{{ $slider['name'] }}</h4>
                                    <p>{{ $slider['description'] }}</p>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="navigation-slider">
                        <button type="button" class="nav-button" id="prev">PREV <span>&#10094;</span></button>
                        <button type="button" class="nav-button" id="next"><span>&#10095;</span> NEXT</button>
                    </div>
            </div>
            </section>
            <footer>
                <div class="footer-additional-information">
                    <div>
                        <h2>Contact</h2>
                        <p>5 Palmer Square West</p>
                        <p>Princeton, NJ 08542</p>
                        <p>609-921-6760</p>
                    </div>
                    <div class="information-footer">
                        <h2>Information</h2>
                        <ul>
                            <li>Careers</li>
                            <li>Privacy Policy</li>
                            <li>Terms of Use</li>
                        </ul>
                    </div>
                    <div class="connect-with-us">
                        <h2>Connect with us</h2>
                        <ul>
                            <li><i class='bx bxl-facebook-square' ></i></li>
                            <li><i class='bx bxl-twitter' ></i></li>
                            <li><i class='bx bxl-instagram-alt' ></i></li>
                        </ul>
                        <p>Join our mailing list!</p>
                    </div>
                    <div>
                        <img src="images/logo_gh_member.png" alt="logo for gh members">
                    </div>
                </div>
                <div class="footer-copyright">
                    &copy; 2024 Chez Alice Patisserie. All rights reserved.
                </div>
            </footer>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const slider = document.getElementById('slider');
                const slides = document.querySelectorAll('.slide');
                const totalSlides = slides.length;
                const slideWidth = slides[0].offsetWidth;
                let currentSlide = 0;

                let startX;
                let currentTranslateX;
                let isDragging = false;

                function updateSlider() {
                    slider.style.transform = `translateX(${-currentSlide * slideWidth}px)`;
                }

                function handleMouseDown(event) {
                    startX = event.pageX || event.touches[0].pageX;
                    currentTranslateX = parseFloat(getComputedStyle(slider).transform.split(',')[4]) || 0;
                    isDragging = true;
                    slider.style.cursor = 'grabbing';
                }

                function handleMouseMove(event) {
                    if (!isDragging) return;
                    const x = event.pageX || event.touches[0].pageX;
                    const dx = x - startX;
                    slider.style.transform = `translateX(${currentTranslateX + dx}px)`;
                }

                function handleMouseUp(event) {
                    if (!isDragging) return;
                    const endX = event.pageX || event.touches[0].pageX;
                    const dx = endX - startX;
                    const threshold = slideWidth / 3;

                    if (Math.abs(dx) > threshold) {
                        if (dx < 0) {
                            // Swipe left
                            currentSlide = (currentSlide < totalSlides - 1) ? currentSlide + 1 : 0;
                        } else {
                            // Swipe right
                            currentSlide = (currentSlide > 0) ? currentSlide - 1 : totalSlides - 1;
                        }
                    }

                    slider.style.transition = 'transform 0.3s ease-in-out';
                    updateSlider();
                    slider.style.cursor = 'grab';
                    isDragging = false;
                }

                slider.addEventListener('mousedown', handleMouseDown);
                slider.addEventListener('mousemove', handleMouseMove);
                slider.addEventListener('mouseup', handleMouseUp);
                slider.addEventListener('mouseleave', handleMouseUp);
                slider.addEventListener('touchstart', handleMouseDown);
                slider.addEventListener('touchmove', handleMouseMove);
                slider.addEventListener('touchend', handleMouseUp);

                document.getElementById('prev').addEventListener('click', function () {
                    currentSlide = (currentSlide > 0) ? currentSlide - 1 : totalSlides - 1;
                    updateSlider();
                });

                document.getElementById('next').addEventListener('click', function () {
                    currentSlide = (currentSlide < totalSlides - 1) ? currentSlide + 1 : 0;
                    updateSlider();
                });

                updateSlider();
            });
        </script>
        <script>
            const menuBtn = document.querySelector('.menu-btn');
            let menuOpen = false;
            const menu = document.querySelector('.navigation-buttons-mobile');
            const menuBrgBfr = document.querySelector('.menu-btn_burger-bfr');
            const menuBrgAft = document.querySelector('.menu-btn_burger-aft');
            menuBtn.addEventListener('click', () => {
                if(!menuOpen){
                    menuBtn.classList.add('open');
                    menuOpen = true;
                    menu.style.display = "block";
                    menuBrgBfr.style.backgroundColor = "#ffffff";
                    menuBrgAft.style.backgroundColor = "#ffffff";
                } else {
                    menuBtn.classList.remove('open');
                    menuOpen = false;
                    menu.style.display = "none";
                    menuBrgBfr.style.backgroundColor = "#212529";
                    menuBrgAft.style.backgroundColor = "#212529";
                }
            })
        </script>
    </body>
</html>
