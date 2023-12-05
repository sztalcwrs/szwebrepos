<!-- doctype html -->
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--==Title============================================================-->
    <title>Sardar Zadran poultry</title>
    
    
    <link rel="shortcut icon" href="{{ URL::asset('backend/imgages/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('backend/imgages/favicon.ico')}}" type="image/x-icon">

    <!--==Stylesheet=======================================================-->
    <!-- <link rel="stylesheet" href="{{ URL::asset('frontend/css/style.css') }}" /> -->

    <link rel="stylesheet" href="{{ URL::asset('frontend/css/all.css') }}" />

    @yield('style')
    <!--==Fav-icon=========================================================-->
    <link rel="stylesheet" href="{{ URL::asset('frontend/images/fav-icon.png') }}" />


    <!--==Using-Font-Awesome-for-Icons=====================================-->
    <script src="{{ URL::asset('frontend/js/fontawsomekit.js') }}"></script>

    <!--==Import-Poppins-Font-Family-From-Google-Font======================-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Link Swiper's CSS -->

    <link rel="stylesheet" href="{{ URL::asset('frontend/css/swiper-bundle.min.css') }}" />
</head>

<body>
    <!--==Navigation=============================-->
    <nav class="navigation">
        <!--logo-->
        <a href="/" class="logo"><i class="fab fa-phoenix-framework"></i>SZ Poultry</a>

        <!--menu-btn-->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>

        <!--menu-->
        <ul class="menu">
            <li><a href="/" class=" @if($page=='home') active @endif">Home</a></li>
            <li><a href="/products" class=" @if($page=='allproducts') active @endif">Products</a></li>
            <li><a href="/about" class=" @if($page=='about') active @endif">About Us</a></li>
            <li><a href="/contact" class=" @if($page=='contact') active @endif">Contact Us</a></li>
        </ul>

        <!--book-now-btn-->
        <a href="/contact" class="book-now-btn">Let's Trade</a>
    </nav>
    <!--nav-end-->

    @yield('content')

    <!--==footer===============================-->
    <footer>
        <!--container**********************-->
        <div class="footer-container">
            <!--footer-box********************-->
            <div class="footer-box">
                <strong><i class="fab fa-phoenix-framework"></i> SZ Poultry</strong>
                <p>
                    We provide custom pet-friendly compounded medications for over 80%
                    of the veterinarians in Afghanistan!
                </p>
                <div class="footer-social">
                    <a href="https://www.facebook.com/profile.php?id=100048855322865" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://wa.me/93782060215" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>
            </div>

            <!--footer-box***********************-->
            <div class="footer-box">
                <strong>Internal</strong>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>

            <!--footer-box***********************-->
            <div class="footer-box">
                <strong>Social</strong>
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100048855322865">Facebook Page</a></li>
                    <li><a href="https://wa.me/93782060215" target="_blank">Whatsapp</a></li>
                </ul>
            </div>

            <!--footer-box***********************-->
            <div class="footer-box">
                <strong>Links</strong>
                <ul>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>

            <!--**Footer-box*******************--> 
            <div class="footer-box">
                <strong>Contact</strong>
                <span><i class="fas fa-map-marker-alt"></i> Kabul, Afghanistan</span>
                <span><i class="far fa-envelope"></i>
                    ceo@szpoultry.com</span>
                <span><i class="fas fa-phone-square-alt"></i>+93 78 880 3262</span>
            </div>
        </div>
    </footer>
    <span class="copyright">Copyright &copy; Sardar Zadran Poultry - 2023</span>

    @yield('script')
</body>

</html>