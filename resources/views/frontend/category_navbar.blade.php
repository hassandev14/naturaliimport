<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body {
        min-height: 100vh;
    }
    .header {
        background-image: url("{{ asset('frontend/images/FLORA NAV BAR green-01.png') }}");
        height: 50px;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        backdrop-filter: blur(10px);
        border-bottom: 2px solid rgba(21, 151, 58, 0.2);
        z-index: 100;
        background-size: cover;
        box-shadow: 0px 10px 10px rgba(20, 122, 8, 0.1); /* Shadow effect */
    }
    .header.scrolled {
        background-image: none; /* Scroll hone par image remove */
        background-color: rgba(255, 255, 255, 0.6); /* White transparent background */
        backdrop-filter: blur(10px);
    }
    .logo {
        color: #333; /* Dark color for better visibility */
        font-size: 25px;
        text-decoration: none;
        font-weight: 600;
        cursor: default;
    }
    .navbar a {
        color: #333; /* Dark text color */
        font-size: 18px;
        text-decoration: none;
        margin-left: 35px;
        transition: 0.3s;
    }
    .navbar a:hover {
        color: rgb(36, 113, 40);
    }
    #menu-icon {
        display: none;
    }
    @media (max-width: 992px) {
        .header {
            padding: 1.25rem 4%;
        }
    }
    @media (max-width: 768px) {
        #menu-icon {
            display: block;
        }
        .navbar {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            padding: 0.5rem 4%;
            display: none;
        }
        .navbar.active {
            display: block;
        }
        .navbar a {
            display: block;
            margin: 1.5rem 0;
        }
        .nav-bg {
            position: absolute;
            top: 79px;
            left: 0;
            width: 100%;
            height: 295px;
            background: rgba(255, 255, 255, 0.1);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            z-index: 99;
            display: none;
        }
        .nav-bg.active {
            display: block;
        }
    }
       /* Mega Dropdown Styles */
       .mega-menu {
            position: absolute;
            opacity: 0;
            top: 100%;
            left: 0;
            width: 100vw;
            display: none;
            padding: 20px;
            z-index: 99;
            background: #fff; /* Pure White Background */
            box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.1);
        }

    .mega-menu.show {
        display: block;
        opacity: 1;
        visibility: visible;
    }

    .navbar-item:hover .mega-menu {
        display: block;
    }

    .mega-content {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        padding: 20px;
    }

    .mega-column {
        flex: 1;
        padding: 10px;
        color: white;
    }

    .mega-column h3 {
    color: #333; /* Dark color for better contrast */
    }

    .mega-column a {
        color: #333; /* Dark text */
    }

    .mega-column a:hover {
        color: #008000; /* Green hover effect */
    }
     /* Responsive Design */
     @media (max-width: 768px) {
        .mega-content {
            flex-direction: column;
        }
    }
</style>

<header class="header sticky-top" id="header">
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
        <div class="navbar-item">
            <a href="#">Home</a>
        </div>
        @foreach($attributeCategories as $attributeCategory)
        <div class="navbar-item mega-parent">
            <a href="#">{{ $attributeCategory->attribute->name ?? 'N/A' }} <!-- Attribute Name --></a>
            <div class="mega-menu">
                <div class="mega-content">
                   
                        <div class="mega-column">
                                <a href="">
                                    {{ $attributeCategory->categories->name }}
                                </a>
                        </div>
                   
                </div>
            </div>
        </div>
         @endforeach
        <div class="navbar-item">
            <a href="#">Contact</a>
        </div>
    </nav>
</header>

<div class="nav-bg"></div>

<!-- JavaScript (If needed for mobile toggle) -->
<script>
   // Mega Dropdown Click & Hover Functionality
document.addEventListener("DOMContentLoaded", function () {
    const megaParents = document.querySelectorAll(".mega-parent");

    megaParents.forEach((parent) => {
        const megaMenu = parent.querySelector(".mega-menu");

        // Click event for opening/closing
        parent.addEventListener("click", function (event) {
            event.stopPropagation(); // Prevent bubbling
            megaMenu.classList.toggle("show");
        });

        // Hover event for opening
        parent.addEventListener("mouseenter", function () {
            megaMenu.classList.add("show");
        });

        // Mouse leave event to close on hover out
        parent.addEventListener("mouseleave", function () {
            megaMenu.classList.remove("show");
        });

        // Close dropdown if clicked outside
        document.addEventListener("click", function (e) {
            if (!parent.contains(e.target)) {
                megaMenu.classList.remove("show");
            }
        });
    });
});

</script>
