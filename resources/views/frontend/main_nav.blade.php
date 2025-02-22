<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<style>
    .navbar1 {
        background-color: #f8f9fa;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 10px 20px;
        margin-top: -13px;
    }
    
    .contact-card {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 5px 10px;
        border-radius: 8px;
        background-color: #f8f9fa;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease-in-out;
        margin-right: 40px;
    }

    .contact-card:hover {
        background-color: #2ca237;
        transform: translateY(-2px);
    }

    .contact-card:hover i,
    .contact-card:hover .contact-info span {
        color: #fff;
    }

    .contact-info span {
        display: block; /* Alag-alag line pe le aayega */
        color: #333;
        font-size: 14px;
        font-weight: 500;
    }
    
    .img {
        height: 118px;
        margin-right: 82px;
    }
    
    .icons {
        display: flex;
        gap: 2px;
        align-items: center;
    }
    
    .navbar-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    @media screen and (max-width:768px) {
            .centerOnMobile {
                flex-direction: column;
                text-align: center
            }
        }
    .cart{
        margin-left: -37px
    }
    .search{
        margin-left: -60px
    }
</style>

<nav class="navbar1 navbar navbar-expand-lg bg-white navbar-light p-3 shadow-sm">
    <div class="container-fluid navbar-container">
        <!-- Left Icons -->
        <div class="d-flex gap-3 align-items-center">
            <a href="{{ route('login') }}" class=" ">
                LOGIN / REGISTER
            </a>
            
            <a href="" class="text-dark position-relative">
               <i class="bi bi-cart cart"></i>
                <!--<span class="cart-badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-white">-->
                <!--</span>-->
            </a>
            <a href="#" class="text-dark">
                <i class="bi bi-search search"></i>
            </a>
        </div>
        
        <!-- Center Logo -->
        <a class="navbar-brand fw-bold text-warning" href="#">
            <img src="{{ asset('frontend/images/web_logo.png') }}" alt="Logo" class="img">
        </a>
        
        <!-- Right Contact Card -->
        <div class="navbar-nav">
            <div class="contact-card">
                <i class="fa-solid fa-envelope"></i>
                <div class="contact-info">
                    <span>Email: info@example.com</span>
                    <span>Phone: +91 98765 43210</span>
                </div>
            </div>
        </div>
    </div>
</nav>