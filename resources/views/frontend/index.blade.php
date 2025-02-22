@include('frontend.header')
<style>
    /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
        text-align: center;
    }

    .global_container_ {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 62vh;
        width: 100%;
        position: relative;
        background: url("{{ asset('frontend/images/bg-imagee.jpg') }}") no-repeat center center;
        background-size: cover;
        background-repeat: no-repeat;
        animation: fadeInBackground 1.5s ease-in-out;
    }

    .naturali-import-web-hero-banner {
        display: block;
        width: 100%;
        height: auto;
        object-fit: cover;
        opacity: 0;
        transform: translateY(50px) scale(0.8);
        animation: slideFadeZoom 1.8s ease-out forwards;
    }

    /* Text Overlay */
    .hero-content {
        position: absolute;
        top: 30%;
        left: 30%;
        transform: translateY(-50%);
        text-align: left;
        color: white;
        opacity: 0;
        animation: fadeInText 2s ease-in-out forwards;
    }

    .hero-content h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 10px;
        text-transform: uppercase;
        animation: slideUp 1.5s ease-in-out forwards;
    }

    .hero-content p {
        font-size: 1.2rem;
        max-width: 600px;
        text-align: center;
        margin: 0 auto;
        animation: fadeInText 1.8s ease-in-out forwards;
    }

    /* Background Fade-in Animation */
    @keyframes fadeInBackground {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Image Slide-in + Fade-in + Zoom Animation */
    @keyframes slideFadeZoom {
        0% {
            opacity: 0;
            transform: translateY(50px) scale(0.8);
        }
        50% {
            opacity: 0.5;
            transform: translateY(20px) scale(0.9);
        }
        100% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    /* Text Fade-in Animation */
    @keyframes fadeInText {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Heading Slide-up Animation */
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Banner -->
<section class="banner-con position-relative">
    <div class="global_container_">
        <img class="naturali-import-web-hero-banner" src="{{ asset('frontend/images/naturali_import_web_hero_.png') }}" alt="Naturali Import Hero Banner">
        
        <!-- Hero Text Overlay -->
        <div class="hero-content">
            <h1>Welcome to Naturali</h1>
            <p>Experience the essence of nature with our premium organic products.</p>
        </div>
    </div>
</section>
</div>
<!-- Categories -->
<section class="categories-con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="categories_content text-center" data-aos="fade-up">
                    <h2>Explore Our <span>Categories</span></h2>
                    <p>Browse through our different categories to find your favorite ice cream treats.</p>
                </div>
            </div>
        </div>
        <div class="categories_wrapper" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="categories-box">
                        <figure class="image mb-0">
                            <img src="{{ asset('frontend/images/categories-image1.jpg') }}" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h5 class="mb-0">Sundaes</h5>
                            <a href="./shop1.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="categories-box">
                        <figure class="image mb-0">
                            <img src="{{ asset('frontend//images/categories-image2.jpg') }}" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h5 class="mb-0">Ice Cream Cones</h5>
                            <a href="./shop1.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="categories-box">
                        <figure class="image mb-0">
                            <img src="{{ asset('frontend/images/categories-image3.jpg') }}" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h5 class="mb-0">Milkshakes</h5>
                            <a href="./shop1.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="categories-box">
                        <figure class="image mb-0">
                            <img src="{{ asset('frontend/images/categories-image4.jpg') }}" alt="image" class="img-fluid">
                        </figure>
                        <div class="content">
                            <h5 class="mb-0">Seasonal Flavors</h5>
                            <a href="./shop1.html"><i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Classic -->
<section class="classic-con position-relative">
    <figure class="classic-leftimage mb-0">
    </figure>
    <figure class="classic-rightimage mb-0">
    </figure>
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="classic_content text-center" data-aos="fade-up">
                    <h2>Our <span>Classic</span> Favorites</h2>
                    <p>Check out our top products that our customers love.</p>
                </div>
            </div>
        </div>
        <div class="classic_wrapper" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box1">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image1.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Classic Vanilla Ice Cream</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Creamy vanilla ice cream topped with cherry.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">4</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box2">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image2.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Chocolate Brownie Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Rich chocolate ice cream with chunks of brownie.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.49</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box3">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image3.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Strawberry Shortcake</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Strawberry ice cream layered with shortcake</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.29</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box4">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image4.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Mint Chocolate Chip Cone</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Refreshing mint ice cream with chocolate chips.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">3</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box1">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image1.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Classic Vanilla Ice Cream</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Creamy vanilla ice cream topped with cherry.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">4</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box2">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image2.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Chocolate Brownie Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Rich chocolate ice cream with chunks of brownie.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.49</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box3">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image3.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Strawberry Shortcake</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Strawberry ice cream layered with shortcake</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.29</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box4">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image4.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Mint Chocolate Chip Cone</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Refreshing mint ice cream with chocolate chips.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">3</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box1">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image1.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Classic Vanilla Ice Cream</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Creamy vanilla ice cream topped with cherry.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">4</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box2">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image2.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Chocolate Brownie Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Rich chocolate ice cream with chunks of brownie.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.49</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box3">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image3.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Strawberry Shortcake</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Strawberry ice cream layered with shortcake</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.29</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="classic-box">
                                <div class="classic_image_box box4">
                                    <figure class="mb-0">
                                        <img src="./assets/images/classic-image4.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="classic_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Mint Chocolate Chip Cone</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Refreshing mint ice cream with chocolate chips.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">3</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
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
<!-- Special -->
<section class="special-con position-relative">
    <figure class="special-rightimage mb-0">
        <img src="./assets/images/special-rightimage.png" alt="image" class="img-fluid">
    </figure>
    <div class="container position-relative">
        <figure class="special-triangle mb-0">
            <img src="./assets/images/special-triangle.png" alt="image" class="img-fluid">
        </figure>
        <figure class="special-doted mb-0">
            <img src="./assets/images/special-doted.png" alt="image" class="img-fluid">
        </figure>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="special_content" data-aos="fade-up">
                    <h2 class="text-white">Summer Special!</h2>
                    <p class="text-white">Buy One Sundae, Get One 50% Off!</p>
                    <div class="button">
                        <a href="./special-offer.html" class="text-decoration-none all_button get_started">Get This Deal<i class="fa-solid fa-arrow-right"></i></a>
                        <span class="text-white">Use code: SUMMER50 at checkout.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                <div class="special_wrapper position-relative" data-aos="zoom-in">
                    <figure class="special-image mb-0">
                        <img src="./assets/images/special-image.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="special-dotedarrow mb-0">
                        <img src="./assets/images/special-dotedarrow.png" alt="image" class="img-fluid">
                    </figure>
                    <div class="circle-text">
                        <div class="content">
                            <span class="persent"><span class="">50</span>%</span>
                            <span class="text">OFF</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Seller -->
<section class="seller-con position-relative">
    <div class="container position-relative">
        <div class="row">
            <div class="col-12">
                <div class="seller_content text-center" data-aos="fade-up">
                    <h2>Our <span>Best</span> Sellers</h2>
                    <p>Discover the favorites that keep our customers coming back for more.</p>
                </div>
            </div>
        </div>
        <div class="seller_wrapper" data-aos="fade-up">
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box1">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image1.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Strawberry Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Strawberry ice cream with fresh strawberries</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box2">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image2.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Chocolate Chip Cookie Cone</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Chocolate chip cookie dough ice cream in a cone.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">4</span><span>.49</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box3">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image3.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Rocky Road Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Marshmallow and nutty rocky road ice cream</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.69</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box4">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image4.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Peach Melba Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Peach ice cream topped with raspberry sauce </p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.39</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box1">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image1.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Strawberry Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Strawberry ice cream with fresh strawberries</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box2">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image2.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Chocolate Chip Cookie Cone</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Chocolate chip cookie dough ice cream in a cone.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">4</span><span>.49</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box3">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image3.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Rocky Road Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Marshmallow and nutty rocky road ice cream</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.69</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box4">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image4.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Peach Melba Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Peach ice cream topped with raspberry sauce </p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.39</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box1">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image1.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Strawberry Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Strawberry ice cream with fresh strawberries</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.99</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box2">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image2.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Chocolate Chip Cookie Cone</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Chocolate chip cookie dough ice cream in a cone.</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">4</span><span>.49</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box3">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image3.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Rocky Road Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Marshmallow and nutty rocky road ice cream</p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.69</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="seller-box">
                                <div class="seller_image_box box4">
                                    <figure class="mb-0">
                                        <img src="./assets/images/seller-image4.png" alt="image" class="img-fluid">
                                    </figure>
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                                <div class="seller_box_content">
                                    <div class="text_wrapper position-relative">
                                        <h6>Peach Melba Sundae</h6>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <span>4.9/5</span>
                                        </div>
                                    </div>
                                    <p class="text-size-16">Peach ice cream topped with raspberry sauce </p>
                                    <div class="price_wrapper position-relative">
                                        <span class="dollar">$<span class="counter">5</span><span>.39</span></span>
                                        <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
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
<!-- Testimonial -->
<section class="testimonial-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1 col-1 d-md-block d-none" data-aos="zoom-in">
                <div class="testimonial_wrapper">
                    <figure class="testimonial-image1 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image1.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image2 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image2.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image3 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image3.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image4 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image4.png" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-12" data-aos="fade-up">
                <div class="testimonial_content_box position-relative">
                    <h2 class="col-lg-8 mx-auto">Hear from Our <span>Happy Ice Cream</span> Lovers</h2>      
                    <figure class="testimonial-quoteimage mb-0 position-absolute">
                        <img src="./assets/images/testimonial-quoteimage.png" alt="image" class="img-fluid">
                    </figure>
                </div>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial_content">
                            <p class="paragraph">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas as pernatur aut odit aut fugit,
                                sed beatae vitae dicta ripiscing elit, sed do euismod tempor incidunt. Labore et dolore magna aliqua ut enim ad minim adipiscing elit,
                                sed do euismod tempor incidunt aut labore.
                            </p>
                            <span class="name">Kevin Andrew</span>
                            <span class="review">Happy Customer</span>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_content">
                            <p class="paragraph">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas as pernatur aut odit aut fugit,
                                sed beatae vitae dicta ripiscing elit, sed do euismod tempor incidunt. Labore et dolore magna aliqua ut enim ad minim adipiscing elit,
                                sed do euismod tempor incidunt aut labore.
                            </p>
                            <span class="name">Kevin Andrew</span>
                            <span class="review">Happy Customer</span>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial_content">
                            <p class="paragraph">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas as pernatur aut odit aut fugit,
                                sed beatae vitae dicta ripiscing elit, sed do euismod tempor incidunt. Labore et dolore magna aliqua ut enim ad minim adipiscing elit,
                                sed do euismod tempor incidunt aut labore.
                            </p>
                            <span class="name">Kevin Andrew</span>
                            <span class="review">Happy Customer</span>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-1 d-md-block d-none" data-aos="zoom-in">
                <div class="testimonial_wrapper">
                    <figure class="testimonial-image5 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image5.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image6 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image6.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image7 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image7.png" alt="image" class="img-fluid">
                    </figure>
                    <figure class="testimonial-image8 image mb-0 position-absolute">
                        <img src="./assets/images/testimonial-image8.png" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Upadte -->
<section class="update-con position-relative">
    <div class="container position-relative">
        <figure class="update-circle mb-0">
            <img src="./assets/images/relive-circle.png" alt="image" class="img-fluid">
        </figure>
        <figure class="update-triangle mb-0">
            <img src="./assets/images/relive-triangle.png" alt="image" class="img-fluid">
        </figure>
        <div class="row">
            <div class="col-lg-8 col-12 mx-auto">
                <div class="update_content text-center" data-aos="fade-up">
                    <h2>Sign up For <span>Exclusive Deals</span> and Updates</h2>
                    <p>Get 10% off your next order and stay updated with our latest offers.</p>
                    <form action="javascript:;">
                        <div class="form-group float-left position-relative">
                            <input type="text" class="form_style" placeholder="Enter Your Email Address" name="email">
                            <button>Subscribe<i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                        <div class="form-group check-box m-0">
                            <input type="checkbox" id="privacy">
                           <label for="privacy">I agree to the <a class="text-decoration-none" href="./privacy-policy.html">Privacy Policy</a>.</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Follow -->
<section class="follow-con position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 position-relative">
                <div class="follow_content text-center" data-aos="fade-up">
                    <h2>Follow Us on <span>Instagram</span></h2>
                    <p>Join our Instagram community for updates, special deals, and more!</p>
                </div>
                <ul class="list-unstyled mb-0" data-aos="fade-up">
                    <li>
                        <a href="https://www.instagram.com/">
                            <figure class="image mb-0">
                                <img src="./assets/images/follow-image1.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <figure class="image mb-0">
                                <img src="./assets/images/follow-image2.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <figure class="image mb-0">
                                <img src="./assets/images/follow-image3.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <figure class="image mb-0">
                                <img src="./assets/images/follow-image4.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">
                            <figure class="image mb-0">
                                <img src="./assets/images/follow-image5.jpg" alt="image" class="img-fluid">
                            </figure>
                            <div class="icon"><i class="fa-brands fa-instagram" aria-hidden="true"></i></div>
                        </a>
                    </li>
                </ul>
                <div class="circle1"></div>
                <div class="circle2"></div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<section class="footer-con position-relative">
    <figure class="footer-image mb-0">
        <img class="img-fluid" src="assets/images/footer-image.png" alt="image">
    </figure>
    <div class="container">
        <div class="middle_portion">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-6 col-12 order-md-1 order-sm-1 order-1">
                    <a href="index.html">
                        <figure class="footer-logo mb-0">
                            <img class="img-fluid" src="assets/images/footer-logo.png" alt="image">
                        </figure>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 order-md-2 order-sm-4 order-2">
                    <div class="links">
                        <h5 class="heading">Navigation</h5>
                        <div class="pages">
                            <ul class="list-unstyled mb-0 list1">
                                <li><i class="fas fa-circle"></i><a href="index.html">Home</a></li>
                                <li><i class="fas fa-circle"></i><a href="about.html">About</a></li>
                                <li><i class="fas fa-circle"></i><a href="shop1.html">Shop</a></li>
                            </ul>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fas fa-circle"></i><a href="shop1.html">Prodects</a></li>
                                <li><i class="fas fa-circle"></i><a href="blog.html">Blog</a></li>
                                <li><i class="fas fa-circle"></i><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 order-md-3 order-sm-3 order-3">
                    <div class="info">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <div class="text">
                                    <span>Address:</span>
                                    <a href="https://www.google.com/maps/place/121+King+St,+Melbourne+VIC+3000,+Australia/@-37.8172467,144.9532001,17z/data=!3m1!4b1!4m6!3m5!1s0x6ad65d4dd5a05d97:0x3e64f855a564844d!8m2!3d-37.817251!4d144.955775!16s%2Fg%2F11g0g8c54h?entry=ttu"
                                        class="text-decoration-none address mb-0">121 King Street Melbourne, 3000, Australia
                                    </a>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-envelope-open-text"></i>
                                <div class="text">
                                    <span>Email:</span>
                                    <a href="mailto:info@icedelights.com" class="text-decoration-none">info@icedelights.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 order-md-4 order-sm-2 order-4">
                    <div class="icon">
                        <div class="phone_wrapper">
                            <i class="fa-solid fa-phone phone"></i>
                            <div class="phone_content">
                                <a href="tel:+568925896325" class="text-decoration-none d-block">+5689 2589 6325</a>
                                <span>Got Questions? Call us 24/7</span>
                            </div>
                        </div>
                        <ul class="list-unstyled mb-0 social-icons">
                            <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/"><i class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p class="mb-0">Copyright © 2024 icedelights All rights reserved.</p>
        </div>
    </div>
</section>
<!-- PRE LOADER -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
        <div></div>
    </div>
</div>
<!-- Latest compiled JavaScript -->
<script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/aos.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/js/carousel.js') }}"></script>
<script src="{{ asset('frontend/js/animation.js') }}"></script>
<script src="{{ asset('frontend/js/back-to-top-button.js') }}"></script>
<script src="{{ asset('frontend/js/preloader.js') }}"></script>
<script src="{{ asset('frontend/js/counter.js') }}"></script>
<script src="{{ asset('frontend/js/search.js') }}"></script>
</body>

</body>
</html>