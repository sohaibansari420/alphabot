<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta setup -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('partials.seo')

    <!-- Title -->
    <title> {{ $general->sitename }} - {{ __(@$page_title) }} </title>

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{ getImage(imagePath()['logoIcon']['path'] . '/favicon.png') }}" type="image/x-icon">

    
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'frontend/app/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'frontend/app/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'frontend/assets/font/font-awesome.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://code.highcharts.com/highcharts.js"></script>

    @stack('style-lib')
    <!-- style main css -->
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue . 'frontend/app/dist/app.css') }}">

    @stack('css')

    @stack('style')
</head>

<body class="header-fixed main home1 counter-scroll">
        <!-- preloade -->
        <div class="preloader">
            <div class="clear-loading loading-effect-2">
            <span></span>
            </div>
        </div>
        <!-- /preload -->
    <div id="wrapper">
    @stack('facebook')
    <!-- Header -->
    <header id="header_main" class="header">
        <div class="container">
            <div id="site-header-inner">
                <div class="header_logo">
                    <a href="{{ url('/') }}"><img src="{{ getImage(imagePath()['logoIcon']['path'] . '/logo.png') }}" width="231" height="44" alt="Millionaire Metaverse Logo"></a>
                </div>
               
                <nav id="main-nav" class="main-nav">
                    <ul id="menu-primary-menu" class="menu">
                        <li class="menu-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#about">About</a>
                        </li>
                        <li class="menu-item">
                            <a href="#products">Products</a>
                        </li>
                        <li class="menu-item ">
                            <a href="#roadmap">Roadmap</a> 
                        </li> 
                        <li class="menu-item ">
                            <a href="#contact">Contact</a> 
                        </li>
                    </ul>
                </nav><!-- /#main-nav -->
                <a href="{{ route('user.login') }}" class="tf-button style1">
                    Sign In
                </a>
                <div class="mobile-button"><span></span></div><!-- /.mobile-button -->
            </div>
        </div>
    </header>
    <!-- end Header -->

    <section class="page-title">
        <div class="icon_bg">
            <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/backgroup/bg_inner_slider.png') }}" alt="">
        </div>
        <div class="swiper-container slider-main">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-st1">
                        <div class="overlay">
                            <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/backgroup/bg-slider6.png') }}" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box-slider">
                                        <div class="content-box">
                                            <h1 class="title" >Discover The <br/>Millionaire Metaverse</h1>
                                            <p class="sub-title">Join our innovative platform today and explore the limitless possibilities of the metaverse</p>
                                            <div class="wrap-btn">
                                                <a href="{{route('user.register')}}" class="tf-button style2">
                                                    Join Now
                                                </a>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img class="img_main" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/slider/Furore.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tf-section project_3 mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">
                            Easy to join with 3 steps
                        </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-box-style2_wrapper">
                        <div class="project-box-style2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="800">
                            <div class="image">
                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_5.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h5>Sign Up</h5>
                                <p class="desc">Visit our website and click on the "Join Now" button to sign up. Fill in your personal details, including your name, email address, and a strong password.</p>
                                <p class="number">01</p>
                            </div>
                            <a href="#" class="btn_project">
                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/button_project.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="project-box-style2" data-aos="fade-up" data-aos-delay="200" data-aos-duration="800">
                            <div class="image">
                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_6.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h5>Choose your Package</h5>
                                <p class="desc">Select the package that best suits your needs and budget. We offer a range of packages to choose from, each with its own unique features and benefits.</p>
                                <p class="number">02</p>
                            </div>
                            <a href="#" class="btn_project">
                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/button_project.svg') }}" alt="">
                            </a>
                        </div>
                        <div class="project-box-style2" data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
                            <div class="image">
                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_7.png') }}" alt="">
                            </div>
                            <div class="content">
                                <h5>Start Earning</h5>
                                <p class="desc">Start earning and exploring the limitless potential of the metaverse with The Millionaire Metaverse.</p>
                                <p class="number">03</p>
                            </div>
                            <a href="#" class="btn_project">
                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/button_project.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="tf-section technology">
        <div class="container w_1490">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="tf-title" data-aos="fade-right" data-aos-duration="800">
                        <div class="img_technology">
                            <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/img_technology1.png') }}" alt="">
                            <img class="coin coin_1" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/coin1.png') }}" alt="">
                            <img class="coin coin_2" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/coin2.png') }}" alt="">
                            <img class="coin coin_3" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/coin3.png') }}" alt="">
                            <img class="coin coin_4" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/coin4.png') }}" alt="">
                            <img class="coin coin_5" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/coin5.png') }}" alt="">
                            <img class="coin coin_6" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/coin6.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="content_technology" data-aos="fade-up" data-aos-duration="800">
                        <div class="tf-title left">
                            <h2 class="title mb20">
                                Explore the Limitless Possibilities of Millionaire Metaverse
                            </h2>
                        </div>
                        <p class="sub_technology">Millionaire Metaverse is a blockchain-powered platform that offers an immersive and seamless experience across a range of applications. Our ecosystem includes an OTT platform, 3D NFT game, Online shopping mall application, and Crypto Currency Exchange. Our goal is to create a unique and inclusive entertainment experience that is accessible to everyone. We have a team of experts in gaming, blockchain, and entertainment, who are passionate about innovation and pushing the boundaries of what is possible in the Metaverse. Whether you want to play a 3D NFT game, shop for physical goods using cryptocurrency, or exchange cryptocurrencies with other users, Millionaire Metaverse has exciting applications that are sure to keep you engaged and entertained. Join us on our journey to redefine the future of entertainment in the Metaverse. With Millionaire Metaverse, the possibilities are endless.
                        </p>
                        {{-- <img class="move4 mt-4 mb-4" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/site/legal.png') }}" alt="Legal Document"> --}}
                        <div class="swiper-container slider-6">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_1.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_2.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_3.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_4.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_5.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_6.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_4.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_5.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_6.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_1.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_2.png') }}" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/logo_tech_3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination pagination_slider-6"></div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    

    <section class="tf-section tf_CTA">
        <div class="overlay">
            <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/backgroup/bg_team_section.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tf-title left mt58" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">
                            Founder &amp; CEO
                        </h2>
                        <p>I am honored to serve as the CEO of this innovative and dynamic company. With over thirty years of experience in sales and distribution network marketing, I have witnessed the industry's evolution and its tremendous potential. Millionaire Metaverse offers a range of applications, including an OTT platform, a 3D NFT game, an Online shopping mall application, and a Crypto Currency Exchange. Our team of gaming, blockchain, and entertainment experts is dedicated to pushing the boundaries of what is possible in the Metaverse.</p>
                        <p>Join us on this exciting journey as we redefine the future of entertainment in the Metaverse. With Millionaire Metaverse, the possibilities are endless, and we are committed to providing a unique and inclusive entertainment experience that is accessible to everyone.</p>
                        <div class="wrap-btn">
                            <a href="{{route('user.register')}}" class="tf-button style3">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                  <div class="image_cta" data-aos="fade-left" data-aos-duration="1200">
                    <img class="move4" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/ceo.png') }}" alt="CEO">
                  </div>
                </div>
                
            </div>
        </div>
    </section>

    <section id="products" class="tf-section project_4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title center" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">
                            Millionaire Metaverse Products
                        </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="project-box-style3_wrapper">
                        <div class="project-box-style3" data-aos="fade-in" data-aos-duration="800">
                            <div class="header_project">
                                <div class="image">
                                    <img class="mask" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_8.png') }}" alt="">
                                    <div class="shape">
                                        <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/shape_2.png') }}" alt="">
                                    </div>
                                </div>
                                <h5 class="heading"><a href="#">FMC Token</a></h5>
                            </div>
                            <div class="content">
                                <p>FMC Token is a cryptocurrency built on the Binance Smart Chain using the BEP-20 token protocol. As the native token of the Millionaire Metaverse ecosystem, it serves as a medium of exchange and store of value for users within the platform. FMC can be used to purchase virtual land, goods, and services within the Metaverse, as well as participate in community governance and decision-making processes. The token is designed to be deflationary, with a maximum supply of 100 million and regular burn events to decrease the circulating supply over time. FMC Token also offers staking and yield farming opportunities, allowing users to earn rewards for providing liquidity and participating in the ecosystem.</p>
                            </div>
                        </div>
                        <div class="project-box-style3" data-aos="fade-in" data-aos-duration="800">
                            <div class="header_project">
                                <div class="image">
                                    <img class="mask" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_555.png') }}" alt="">
                                    <div class="shape">
                                        <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/shape_2.png') }}" alt="">
                                    </div>
                                </div>
                                <h5 class="heading"><a href="#">Online Shopping Mall</a></h5>
                            </div>
                            <div class="content">
                                <p>The online shopping mall application in Millionaire Metaverse is a state-of-the-art e-commerce platform that allows users to browse and purchase products from a wide range of merchants. The platform is designed to be user-friendly and intuitive, with features like personalized recommendations, easy checkout, and secure payment processing. The application is integrated with the FMC Token, allowing users to make purchases using the cryptocurrency.</p>
                            </div>
                        </div>
                        <div class="project-box-style3" data-aos="fade-in" data-aos-duration="800">
                            <div class="header_project">
                                <div class="image">
                                    <img class="mask" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_222.png') }}" alt="">
                                    <div class="shape">
                                        <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/shape_2.png') }}" alt="">
                                    </div>
                                </div>
                                <h5 class="heading"><a href="#">OTT Platform</a></h5>
                            </div>
                            <div class="content">
                                <p>The OTT (Over-The-Top) platform in Millionaire Metaverse is a streaming service that provides users with access to a wide range of movies, TV shows, and other video content. It uses advanced streaming technology to deliver high-quality video content to users, and it is designed to be fast, reliable, and easy to use. The platform also includes features like personalized recommendations, user profiles, and social sharing, making it a truly immersive entertainment experience.</p>
                            </div>
                        </div>
                        <div class="project-box-style3" data-aos="fade-in" data-aos-duration="800">
                            <div class="header_project">
                                <div class="image">
                                    <img class="mask" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_444.png') }}" alt="">
                                    <div class="shape">
                                        <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/shape_2.png') }}" alt="">
                                    </div>
                                </div>
                                <h5 class="heading"><a href="#">3D NFT Metaverse Game</a></h5>
                            </div>
                            <div class="content">
                                <p>The 3D NFT Metaverse Game in Millionaire Metaverse is a cutting-edge gaming platform that allows users to enter a fully immersive virtual world where they can interact with other players, explore new environments, and complete quests and challenges. The game uses NFTs (Non-Fungible Tokens) to provide unique and collectible in-game items, such as weapons, armor, and special abilities, which players can use to enhance their gaming experience. The game is built on the latest blockchain technology, providing users with a secure and transparent gaming environment.</p>
                            </div>
                        </div>
                        <div class="project-box-style3" data-aos="fade-in" data-aos-duration="800">
                            <div class="header_project">
                                <div class="image">
                                    <img class="mask" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/project_333.png') }}" alt="">
                                    <div class="shape">
                                        <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/shape_2.png') }}" alt="">
                                    </div>
                                </div>
                                <h5 class="heading"><a href="#">Crypto Currency Exchange</a></h5>
                            </div>
                            <div class="content">
                                <p>The crypto currency exchange in Millionaire Metaverse is a platform that allows users to buy, sell, and trade cryptocurrencies like Bitcoin, Ethereum, and FMC. The exchange is built on the latest blockchain technology, providing users with a secure and transparent trading environment. It is designed to be user-friendly, with features like advanced charting, real-time market data, and customizable trading interfaces. The exchange is integrated with the FMC Token, allowing users to trade cryptocurrencies using the Millionaire Metaverse's native cryptocurrency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="roadmap" class="tf-section roadmap">
        <div class="container w_1850">
            <div class="row">
                <div class="col-md-12">
                    <div class="tf-title" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">
                            Roadmap
                        </h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="container_inner roadmap_boder">
                        <div class="roadmap-wrapper" data-aos="fade-in" data-aos-duration="1000">
                            <div class="swiper-container slider-7">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="roadmap-box active">
                                            <div class="icon">
                                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/icon_roadmap.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="date">Q3, 2023</h6>
                                                <ul>
                                                    <li><h6>Launching</h6></li>
                                                    <li>Launch of Millionaire Metaverse</li>
                                                    <li>Expansion of network marketing team/li>
                                                    <li>Launch of new promotional campaigns and incentives for network marketers</li>
                                                    <li>Continued expansion and growth of the network marketing team</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/icon_roadmap.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="date">Q4, 2023</h6>
                                                <ul>
                                                    <li><h6>FMC Token</h6></li>
                                                    <li>Launch FMC token on multiple exchanges</li>
                                                    <li>Integration of FMC token for payments within The Millionaire Metaverse ecosystem</li>
                                                    <li>Collaboration with other projects for increased use cases and adoption of FMC</li>
                                                    <li>Develop a mobile wallet for FMC</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/icon_roadmap.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="date">Q1, 2024</h6>
                                                <ul>
                                                    <li><h6>Online Shopping Mall</h6></li>
                                                    <li>Onboard more merchants to the shopping mall</li>
                                                    <li>Launch of an affiliate program for members to earn rewards for referring shoppers</li>
                                                    <li>Integration of FMC token for payments within the shopping mall</li>
                                                    <li>Addition of more product categories and features</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/icon_roadmap.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="date">Q3, 2024</h6>
                                                <ul>
                                                    <li><h6>OTT Platform</h6></li>
                                                    <li>Launch of original content series</li>
                                                    <li>Integration of FMC token for subscriptions and pay-per-view content</li>
                                                    <li>Expansion of platform to more regions</li>
                                                    <li>Partnership with content creators and studios for exclusive content</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/icon_roadmap.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="date">Q1, 2025</h6>
                                                <ul>
                                                    <li><h6>3D NFT Game</h6></li>
                                                    <li>Launch of beta version for testing and feedback</li>
                                                    <li>Addition of more game modes and features</li>
                                                    <li>Integration of FMC token for in-game purchases and rewards</li>
                                                    <li>Launch of esports tournaments with FMC prize pools</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="roadmap-box">
                                            <div class="icon">
                                                <img src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/icon_roadmap.svg') }}" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="date">Q3, 2025</h6>
                                                <ul>
                                                    <li><h6>Crypto Exchange</h6></li>
                                                    <li>Obtain necessary licenses and regulatory approvals</li>
                                                    <li>Onboard more cryptocurrency pairs</li>
                                                    <li>Integration of FMC token for trading and fee discounts</li>
                                                    <li>Partnership with other exchanges for increased liquidity and trading volume</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                   
                            </div>
                          
                        </div>
                        <div class="next_slider-7 next_slider"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8H16.5M16.5 8L9.75 1.25M16.5 8L9.75 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            </div>
                        <div class="prev_slider-7 prev_slider"><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5 8H1.5M1.5 8L8.25 1.25M1.5 8L8.25 14.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="tf-section tf_CTA">
        <div class="container relative">
            <div class="overlay">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="tf-title left mt58" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="title">
                            Join The <br/>Millionaire Metaverse Community Today!
                        </h2>
                        <p class="sub">Take the first step towards financial freedom in the metaverse. Join Millionaire Metaverse or contact us to learn more about our innovative products and earning opportunities.</p>
                        <div class="wrap-btn">
                            <a href="{{route('user.register')}}" class="tf-button style3">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="image_cta" data-aos="fade-left" data-aos-duration="1200">
                    <img class="move4" src="{{ asset($activeTemplateTrue . 'frontend/assets/images/common/img_cta.png') }}" alt="">
                  </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="footer-logo">
                        <div class="logo_footers">
                            <img src="{{ getImage(imagePath()['logoIcon']['path'] . '/logo.png') }}" width="231" height="44" alt="Fairy Metaverse Logo">
                        </div>
                        <p class="mt-4">The Millionaire Metaverse is a cutting-edge ecosystem that offers innovative digital asset products and limitless earning opportunities. Join us to explore the potential of the metaverse and achieve financial freedom.</p>
                    </div>
                    <div class="widget">
                        
                    </div>
                    
                    <div class="widget">
                        <h5 class="widget-title">
                            Contact us
                        </h5>
                        <ul class="widget-link contact">
                            <li>
                                <p>Address</p>
                                <a href="#">291 Brighton Road, South Croydon, United Kingdom</a>
                            </li>
                            <li>
                                <p>Phone</p>
                                <a href="#">+44 20 3435 4354</a>
                            </li>
                            <li class="email">
                                <p>Email</p>
                                <a href="#">admin@fairymetaverse.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="wrap-fx">
                    <div class="Copyright">
                        Copyright © Millionaire Metaverse. All Rights Reserved.
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
    </div>
    <a id="scroll-top"></a>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/jquery.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/swiper.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/app.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/jquery.easing.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/parallax.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/count-down.js') }}"></script>
    <script src="{{ asset($activeTemplateTrue . 'frontend/app/js/countto.js') }}"></script>

    @stack('script-lib')

    @stack('js')
    @include('partials.notify')
    @include('partials.plugins')

    <script>
    $(document).on("change", ".langSel", function() {
        window.location.href = "{{ url('/') }}/change/" + $(this).val();
    });
    </script>

    @stack('script')
</body>

</html>