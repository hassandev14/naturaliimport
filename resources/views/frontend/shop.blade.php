@include('frontend.header')
    <!-- Sub Banner -->
    <section class="sub_banner position-relative">
        <div class="container position-relative">
            <div class="row">
                <div class="col-12">
                    <div class="sub_banner_content text-center" data-aos="fade-up">
                        <h1>Shop Layout 01</h1>
                        <div class="box">
                            <a href="index.html" class="text-decoration-none">
                                <span class="mb-0">Home</span>
                            </a>
                            <span class="mb-0 slash">/</span>
                            <span class="mb-0 box_span">Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Shop -->
<section class="shop1-con classic-con position-relative">
    <div class="container">
        <div class="row">
            <div class="sidebar sticky-sidebar col-lg-3">
                <div class="theiaStickySidebar">
                    <div class="widget widget-newsletter" data-aos="fade-up">
                        <form id="widget-search-form-sidebar" class="form-inline">
                            <div class="input-group">
                                <input type="text" aria-required="true" name="q"
                                    class="form-control widget-search-form" placeholder="Search">
                                <div class="input-group-append">
                                    <span class="input-group-btn">
                                        <button type="submit" id="widget-widget-search-form-button" class="btn"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="widget widget-categories" data-aos="fade-up">
                        <div class="widget-title font_weight_600">Categories</div>
                        <ul class="list-unstyled mb-0">
                            <li class="cat-item">
                                <a href="cart.html">Canned Ice Cream(3)</a>

                            </li>
                            <li class="cat-item">
                                <a href="cart.html">Frozen Yogurt(5)</a>

                            </li>
                            <li class="cat-item">
                                <a href="cart.html">Ice Cream Cakes(3)</a>

                            </li>
                            <li class="cat-item">
                                <a href="cart.html">Milkshakes(6)</a>

                            </li>
                            <li class="cat-item">
                                <a href="cart.html">Popsicles(4)</a>

                            </li>
                            <li class="cat-item">
                                <a href="cart.html">Sundaes(5)</a>

                            </li>
                        </ul>
                    </div>
                    <div class="widget filter" data-aos="fade-up">
                        <div class="widget-title font_weight_600">Filter by Price</div>
                        <div class="wrapper">
                            <fieldset class="filter-price">
                                <div class="price-field">
                                    <input type="range"  min="5" max="50" value="5" id="lower">
                                    <input type="range" min="5" max="50" value="50" id="upper">
                                </div>
                                <div class="price-wrap">
                                    <span class="price-title">Range:</span>
                                    <div class="price-wrap-1">
                                        <input id="one">
                                        <label for="one">$</label>
                                    </div>
                                    <div class="price-wrap_line">-</div>
                                    <div class="price-wrap-2">
                                        <input id="two">
                                        <label for="two">$</label>
                                    </div>
                                </div>
                            </fieldset> 
                        </div>
                        <!-- <div class="line1">
                            <div class="line2"></div>
                        </div>
                        <div class="value">
                            <span class="range">Range:</span>
                            <span class="price">$5.00 - $50.00</span>
                        </div> -->
                    </div>
                    <div class="widget product" data-aos="fade-up">
                        <div class="widget-title font_weight_600">Featured Products</div>
                        <div class="product-box">
                            <figure class="image image1 mb-0">
                                <img src="./assets/images/shop1-image1.png" alt="image" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="content">
                                <span class="heading">Rocky Road</span>
                                <span class="money old-price">$9.80</span>
                                <span class="money new-price">$4.99</span>
                            </div>
                        </div>
                        <div class="product-box">
                            <figure class="image image2 mb-0">
                                <img src="./assets/images/shop1-image2.png" alt="image" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="content">
                                <span class="heading">Peach Melba</span>
                                <span class="money old-price">$9.80</span>
                                <span class="money new-price">$4.99</span>
                            </div>
                        </div>
                        <div class="product-box">
                            <figure class="image image3 mb-0">
                                <img src="./assets/images/shop1-image3.png" alt="image" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="content">
                                <span class="heading">Classic Vanilla</span>
                                <span class="money old-price">$9.80</span>
                                <span class="money new-price">$4.99</span>
                            </div>
                        </div>
                        <div class="product-box">
                            <figure class="image image4 mb-0">
                                <img src="./assets/images/shop1-image4.png" alt="image" class="img-fluid" loading="lazy">
                            </figure>
                            <div class="content">
                                <span class="heading">Strawberry Cake</span>
                                <span class="money old-price">$9.80</span>
                                <span class="money new-price">$4.99</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row default-sorting-con">
                    <div class="col-12">
                        <div class="top-icons" data-aos="fade-up">
                            <div class="icons-list">
                                <figure class="grid icon mb-0">
                                    <img src="./assets/images/shop-gridicon.png" alt="image" class="img-fluid">
                                </figure>
                                <figure class="list icon mb-0">
                                    <img src="./assets/images/shop-listicon.png" alt="image" class="img-fluid">
                                </figure>
                                <span>Showing 1–18 of 24 results</span>
                            </div>
                            <div id="toolbar">
                                <select class="form-control">
                                    <option value="">Default Sorting</option>
                                    <option value="all">Cakes</option>
                                    <option value="selected">Shakes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row shop-products-con" data-aos="fade-up">
                    <?php foreach($products as $product){ ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                        <div class="classic-box">
                            <div class="classic_image_box box1">
                                <figure class="mb-0">
                                    <img src="{{asset($product->image_name)}}" alt="image" class="img-fluid">
                                </figure>
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="classic_box_content">
                                <div class="text_wrapper position-relative">
                                    <h6>{{$product->name}}</h6>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <span>4.9/5</span>
                                    </div>
                                </div>
                                <p class="text-size-16">{{$product->short_desc}}</p>
                                <div class="price_wrapper position-relative">
                                    <span class="dollar">${{$product->price}}</span>
                                    <a href="./cart.html"><img src="./assets/images/cart.png" alt="image" class="img-fluid"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    <ul class="pagination" data-aos="fade-up">
                        <li class="page-item"><a class="page-link" href="one-column.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="two-column.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="three-column.html">3</a></li>
                        <li class="page-item next">
                            <a class="page-link" href="single-blog.html"><i class="fas fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>
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
</html>