<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{$title}}</title>
    <!-- /SEO Ultimate -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta charset="utf-8">
    <link rel="manifest" href="{{ asset('frontend/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/images/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Custom CSS -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/shop.css') }}" rel="stylesheet" type="text/css">


    <style>
        .superNav {
            font-size: 16px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #f8f9fa;
            padding: 5px 20px;
            margin-bottom: 8px;
        }

        .language-selector {
            display: flex;
            gap: 15px;
            cursor: pointer;
            margin-left:50px;
        }

        .social-links {
            display: flex;
            gap: 15px;
             margin-right:50px;
        }

        .social-links a {
            color: #333;
            transition: 0.3s;
        }

        .social-links a:hover {
            color: #007bff;
        }

        .welcome-text {
            font-size: 16px;
            text-align: center;
            flex-grow: 1;
        }

        @media screen and (max-width: 768px) {
            .superNav {
                flex-direction: column;
                text-align: center;
                height: auto;
                padding: 10px 0;
            }

            .language-selector, .social-links {
                justify-content: center;
            }

            .welcome-text {
                margin: 5px 0;
            }
        }

        .flag {
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .flag:hover {
            transform: scale(1.2);
        }

        /* Hide the Google Translate widget */
        #google_translate_element {
            display: none;
        }

        /* Hide Google Promotions (Ads) */
        .goog-te-banner-frame {
            display: none !important;
        }

        body {
            top: 0px !important;
        }
    </style>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }

        function changeLanguageAndDomain(lang) {
            // Google Translate Language Change with a Hidden Link Click
            let googleFrame = document.querySelector('iframe.goog-te-menu-frame');
            
            if (googleFrame) {
                let innerDoc = googleFrame.contentDocument || googleFrame.contentWindow.document;
                let langLinks = innerDoc.querySelectorAll("a");
                
                for (let link of langLinks) {
                    if (link.textContent.includes(lang)) {
                        link.click();
                        break;
                    }
                }
            }

            // Domain Change Logic
            let currentDomain = window.location.hostname;
            let newDomain = currentDomain;

            switch (lang) {
                case 'en':
                    newDomain = "naturaliimport.com";
                    break;
                case 'it':
                    newDomain = "naturaliimport.it";
                    break;
                case 'fr':
                    newDomain = "naturaliimport.fr";
                    break;
                case 'de':
                    newDomain = "naturaliimport.de";
                    break;
                case 'es':
                    newDomain = "naturaliimport.es";
                    break;
            }

            // Redirect to new domain if it's different
            if (currentDomain !== newDomain) {
                window.location.href = "https://" + newDomain + window.location.pathname;
            }
        }
    </script>

      <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>

<body>
    <!-- Top Navigation -->
    <div class="superNav border-bottom">
        <div class="language-selector">
            <span onclick="changeLanguageAndDomain('en')" class="flag">🇺🇸</span>
            <span onclick="changeLanguageAndDomain('it')" class="flag">🇮🇹</span>
            <span onclick="changeLanguageAndDomain('fr')" class="flag">🇫🇷</span>
            <span onclick="changeLanguageAndDomain('de')" class="flag">🇩🇪</span>
            <span onclick="changeLanguageAndDomain('es')" class="flag">🇪🇸</span>
        </div>

        <div class="welcome-text" >WELCOME TO NATURALI IMPORT</div>

        <div class="social-links">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>

    <!-- Google Translate API -->
    <div id="google_translate_element"></div>

      
    <div class="custom-nav">
        @include('frontend.main_nav')
    </div>
    
    @include('frontend.category_navbar')
    
    <main>