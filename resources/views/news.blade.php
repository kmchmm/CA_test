<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Chez Alice | News</title>

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
                <div class="sub-news-container">
                    <div class="news-introduction-container">
                        <div class="news-modals">
                            <div class="news-modal">
                                <div>
                                    <h3>August 3, 2023</h3>
                                    <p>Genesis Hospitality Pastry Chef Invited To Attend Prestigious Culinary Master Class in Switzerland.</p>
                                </div>
                                <button class="open-modal-button">READ</button>
                                <div class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <iframe class="pdf-iframe" src="images/ca_condirama.pdf" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="news-modal">
                                <div>
                                    <h3>January 5, 2023</h3>
                                    <p>Chez Alice Patisserie opens a new location in Downtown Lambertville.</p>
                                </div>
                                <button class="open-modal-button">READ</button>
                                <div class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <iframe class="pdf-iframe" src="images/ca_opening_lambertville.pdf" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="news-modal">
                                <div>
                                    <h3>April 27, 2021</h3>
                                    <p>Chez Alice Patisserie Receives 2021 Best of Princeton Award</p>
                                </div>
                                <button class="open-modal-button">READ</button>
                                <div class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <iframe class="pdf-iframe" src="images/ca_best_princeton.pdf" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
