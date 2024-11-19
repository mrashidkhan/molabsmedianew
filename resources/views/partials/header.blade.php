<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <!--Calendly required import-->
    <link href="/assets/calendly.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <!-- -->
    <script src="/assets/analytics.js" type="text/javascript" async></script>

    <link rel="shortcut icon" type="image/jpg" href="{{ asset('essentials/images/favicon/favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <title>Molabs Media – Content Services</title>
    <meta name="description" content="Impress your prospects with stunning and unified content across all channels.">

    <style type="text/css">
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {

            .dropdown-menu li {
                position: relative;
            }

            .dropdown-menu .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .dropdown-menu .submenu-left {
                right: 100%;
                left: auto;
            }

            /* .dropdown-menu > li:hover{ background-color: #f1f1f1 } */
            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }

        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {

            .dropdown-menu .dropdown-menu {
                margin-left: 0.7rem;
                margin-right: 0.7rem;
                margin-bottom: .5rem;
            }

        }

        /* ============ small devices .end// ============ */
    </style>


    <script type="text/javascript">
        //	window.addEventListener("resize", function() {
        //		"use strict"; window.location.reload();
        //	});


        document.addEventListener("DOMContentLoaded", function() {


            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.stopPropagation();
                });
            })



            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                    everydropdown.addEventListener('hidden.bs.dropdown', function() {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                    element.addEventListener('click', function(e) {

                        let nextEl = this.nextElementSibling;
                        if (nextEl && nextEl.classList.contains('submenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();
                            console.log(nextEl);
                            if (nextEl.style.display == 'block') {
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth

        });
        // DOMContentLoaded  end
    </script>
</head>

<body>
    <!-- audience files and page -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"
        integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g=="
        crossorigin="anonymous"></script>



    <nav class="navbar" id="desktop-navbar">
        <div id="desktop-navbar-container">
            <div id="phone-desk-container">
                <button id="phone" class="nav-link flexauto">
                    <img id="footer_outlined_phone" src="{{ asset('essentials/images/Phone_white.png') }}">
                </button>
                <img id="phone-dropdown-img" src="{{ asset('essentials/images/phone(dropdown)-01.png') }}">
                <a href="tel:0012146796818" id="mobile-phone" class="nav-link">
                    <img id="footer_outlined_phone_mobile" src="{{ asset('essentials/images/Phone_white.png') }}">
                </a>
                <a href="{{ url('index') }}" id="mobile-logo" class="nav-link flexauto">
                    <img id="mobile-logo-img" src="{{ asset('molabsmedia/molabs_logo.png') }}" alt="Molabs Media Logo">
                </a>
            </div>
            <a class="navbar-brand flexauto" href="{{ url('/') }}">
                <img id="desktop-logo" src="{{ asset('molabsmedia/molabs_logo.png') }}" alt="Molabs Media Logo">
            </a>

            <li class="nav-item dropdown">
                <a id="services" class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="{{ url('events') }}">Events &raquo; </a>
                        <ul class="submenu dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ url('upcomingevents') }}">Upcoming Events</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ url('pastevents') }}">Past Events &raquo; </a>
                                <ul class="submenu dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="{{ url('videos') }}">Video Archive</a></li>
                                    <li><a class="dropdown-item" href="{{ url('picturearchive') }}">Picture Archive</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('posterarchive') }}">Poster Archive</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('videoproduction') }}">Video production</a></li>
                    <li><a class="dropdown-item" href="{{ url('creativewriting') }}">Creative writing</a></li>
                    <li><a class="dropdown-item" href="{{ url('contentwriters') }}">Content writers</a></li>
                    <li><a class="dropdown-item" href="{{ url('webdesign') }}">Web design</a></li>
                    <li><a class="dropdown-item" href="{{ url('graphicsdesign') }}">Graphics design</a></li>
                    <li><a class="dropdown-item" href="{{ url('itandtelecom') }}">IT and Telecom Staffing</a></li>

                </ul>
            </li>


            <a href="{{ url('molabsteam') }}" id="molabsteam" class="nav-link flexauto">Our Team</a>
            <a href="{{ url('aboutus') }}" id="aboutus" class="nav-link flexauto">About us</a>
            <a href="{{ url('contactus') }}" id="contactus" class="nav-link flexauto">Contact Us</a>

            <div class="menu-icon-container">
                <div class="menu_icon">
                    <div class="hamburger_menu"></div>
                </div>
            </div>
            <ul class="mobile-dropdown-list">
                <li><a class="menu_link" href="{{ url('index') }}">home</a></li>

                <li class="csquared-sublink"><a class="menu_link" href="{{ url('events') }}"> Events</a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('upcomingevents') }}"> Upcoming
                        Events</a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('videos') }}"> Video Archive</a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('picturearchive') }}"> Picture
                        Archive</a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('posterarchive') }}"> Poster
                        Archive</a></li>

                <li class="csquared-sublink"><a class="menu_link" href="{{ url('videoproduction') }}"> Video
                        Production </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('creativewriting') }}"> Creative
                        Writing </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('contentwriters') }}"> Content
                        Writing </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('webdesign') }}"> Web Design </a>
                </li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('graphicsdesign') }}"> Graphics
                        Design </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('itandtelecom') }}"> IT and Telecom
                        Staffing </a></li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('contactus') }}"> Contact us </a>
                </li>
                <li class="csquared-sublink"><a class="menu_link" href="{{ url('aboutus') }}"> About us </a></li>

            </ul>
        </div>
    </nav>



    <script>
        var contactNumber = document.getElementById("phone-dropdown-img");
        // var transparent = document.getElementById("phone-image-dropdown");
        var num = 0;
        $('#phone').click(function(e) {
            e.stopPropagation();
            num++;
            contactNumber.style.display = "inline-block";
            // transparent.style.display = "inline-block";
            if (num % 2 == 0) {
                contactNumber.style.display = "none";
                // transparent.style.display = "none";
            }
            //if anything outside the button dropdown is selected, the dropdown goes away
            $("body").click(function(e) {
                num++;
                if (e.target.id != "phone-dropdown-img") {
                    contactNumber.style.display = "none";
                    $("body").unbind("click");
                }
            })
        });
    </script>

    <script>
        var menu_icon = document.querySelector(".menu_icon");
        var menu_list = document.querySelector(".mobile-dropdown-list");
        menu_list.style.display = "none";

        menu_icon.addEventListener("click", function() {
            menu_icon.classList.toggle("active");
            if (menu_list.style.display === "none") {
                menu_list.style.display = "block";
            } else {
                menu_list.style.display = "none";
            }
        });
    </script>

    <script>
        var menuList = document.querySelector(".mobile-dropdown-list");
        $("#contact-us-mob").click(function() {
            menu_icon.classList.toggle("active");
            menuList.style.display = "none";


            // <!--TODO: test start here-- >
            $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
            // location.href="#main-form";

            var mobileQuery = window.matchMedia("(max-width: 768px)");
            mobileQuery.addListener(function() {
                $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
                // location.href="#mobile-form";
            });
            // <!--TODO: test end here-- >
        });
    </script>

    <script>
        document.addEventListener('click', function(e) {
            menu_icon_container = document.querySelector('.menu-icon-container');
            menu_ham = document.querySelector('.hamburger_menu');
            if (menu_icon.classList.contains("active") &&
                !e.target.isEqualNode(menu_ham) &&
                !e.target.isEqualNode(menu_icon_container) &&
                !e.target.isEqualNode(menu_icon) &&
                !e.target.isEqualNode(menu_list)) {
                menu_icon.classList.toggle("active");
                menu_list.style.display = "none";
            }
        });

        $(window).on('scroll', function(e) {
            var scroll = $(window).scrollTop();
            if (scroll > 200) {
                $(".mobile-dropdown-list").fadeOut();
                menu_list.style.display = "none";
                menu_icon.classList.remove("active");
            }
        });
    </script>


    <style>
        #phone-desk-container {
            display: none;
        }

        .menu-icon-container {
            width: 58px;
            height: 100%;
            padding-right: 50px;
            padding-top: 50px;
            /* margin-left: -50px; */
            position: relative;
        }

        #phone-image-dropdown {
            display: none;
            background-color: transparent;
            left: 0;
            top: 0;
            width: 100vw;
            height: 700vh;
            position: absolute;
            z-index: 2;
        }

        #phone-dropdown-img {
            display: none;
            width: 150px;
            position: absolute;
            margin-left: -75px;
        }

        #desktop-navbar-container {
            width: 100%;
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            /* padding-left: 25%;
    padding-right: 25%; */
            /* display: inline-block; */
            justify-content: center;
            align-items: stretch;
            align-content: stretch;
            /* margin-left: 3%; */
        }

        .navbar-brand {
            padding-left: 0;
            padding-right: 0;
            margin-right: 0;
        }

        #services {
            padding-right: 3vw;
            padding-left: 5vw;
        }

        #services-list {
            padding-right: 3vw;
            padding-left: 5vw;
        }

        #molabsteam {
            padding-right: 3vw;
            padding-left: 3vw;
        }

        #aboutus {
            padding-right: 3vw;
            padding-left: 3vw;
        }

        #contactus {
            padding-right: 3vw;
            padding-left: 3vw;
        }

        #content {
            /* padding-right: 16%;
    padding-left: 6%; */
            /* padding-right: 215px;
    padding-left: 60px; */
            padding-right: 10vw;
            padding-left: 3vw;
        }

        #footer_outlined_phone {
            width: 30px;
            height: 30px;
        }

        #desktop-logo {
            width: 70px;
            height: auto;
            /* margin-left: 50px; */
        }

        .menu_icon {
            position: absolute;
            /* top: 10px;
    left: 20px; */
            left: 15px;
            bottom: 76px;
            transform: translate(-50%, -50%);
            /* width: 80px;
    height: 80px; */
            cursor: pointer;
            margin-left: -13px;
        }

        .hamburger_menu {
            position: absolute;
            width: 25px;
            height: 8px;
            background: transparent;
            top: 50px;
            left: 25px;
            transform: translate(-50%, -50%);
            box-shadow: 0 2px 5px rgba(0, 0, 0, .0);
        }

        .hamburger_menu::before,
        .hamburger_menu::after {
            content: "";
            position: absolute;
            width: 25px;
            height: 1px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: 0.5s;
            /* left: -18.5px; */
            left: 0;
        }

        .hamburger_menu::after {
            top: 8px;
        }

        .hamburger_menu::before {
            top: -4px;
        }

        .menu_icon.active .hamburger_menu {
            background: rgba(0, 0, 0, 0);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0);
            transition: 0.2s;
        }

        .menu_icon.active .hamburger_menu::before {
            top: 0;
            transform: rotate(45deg);
        }

        .menu_icon.active .hamburger_menu::after {
            top: 0;
            transform: rotate(-45deg);
        }

        /**desktop navbar styling */
        #audience {
            margin-left: 100px;
        }

        #phone {
            border: none;
            background: transparent;
            /* margin-left: 150px; */
            /* padding-right: 8.5%;
    padding-left: 8.5% */
        }

        #dropdown-button {
            border: none;
            background-color: black;
            color: white;
        }

        #dropdown-list {
            list-style: none;
            padding-left: 0;
            text-align: left;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            padding: 0;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            color: white;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            color: black;
            margin-left: -125%;
        }

        .dropdown-content a {
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: none;
        }

        .navbar {
            background-color: #1F1F1F;
            padding-left: 5%;
            padding-right: 5%;
            position: fixed !important;
            top: 0;
            width: 100%;
            text-align: center;
            justify-content: center;
            z-index: 99999;
            height: 75px;
            overflow: visible;
        }

        .nav-link {
            color: white !important;
            text-decoration: none;
            transition: 0s;
            font-weight: 200;
        }

        .navbar a:hover {
            background-color: none;
            color: white;
        }

        /**mobile navbar styling */
        #mobile-navbar {
            display: none;
            background-color: black;
            width: 100%;
            height: 75px;
            position: fixed;
            padding: 0;
        }

        .mobile-dropdown {
            position: relative;
            display: inline-block;
            color: white;
        }

        #mobile-dropdown-button {
            border: none;
            background-color: black;
            color: white;
        }

        .mobile-dropdown:hover .mobile-dropdown-content {
            display: block;
        }

        .mobile-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            color: black;
            margin-left: -15%;
        }

        .mobile-dropdown-content a {
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            display: block;
        }

        .mobile-dropdown-content a:hover {
            background-color: none;
        }

        /** hamburger dropdown styling */
        .mobile-dropdown-list {
            list-style: none;
            padding-left: 20px !important;
            padding-bottom: 20px;
            padding-right: 20px;
            padding-top: 10px;
            text-align: left;
            position: absolute;
            top: 55px;
            right: 0;
            line-height: 42px;
            background-color: #1F1F1F;
            color: #C8C8C8;
            height: 100vh;
            font-size: 44px;
            text-align: left;
            /* width: 28vw; */
        }

        .menu_link:link {
            color: white;
            text-decoration: none;
            /* font-size: 35px; */
            font-weight: 300;
        }

        a.menu_link {
            color: white;
            text-decoration: none;
            font-weight: 300;
        }

        a {
            color: #C8C8C8;
        }

        #mobile-logo-img {
            display: none;
        }

        #footer_outlined_phone_mobile {
            display: none;
        }

        .flexauto {
            flex: auto;
        }

        /*
.csquared-sublink{
    font-size: 35px;
    margin-left: 15px;
} */

        .menu_link {
            font-size: 35px;
        }

        .csquared-sublink>.menu_link {
            font-size: 27px;
            font-weight: 100;
        }


        /* #desktop-navbar{
    display: none;
}

#mobile-navbar{
    display: inline-block;
} */


        /** Navbar Responsiveness */

        /* @media screen and (min-width: 2560px){
    .mobile-dropdown-list{
        padding-left: 4%;
    }
} */

        @media screen and (max-width: 1920px) {
            .mobile-dropdown-list {
                width: 26vw;
            }

            .csquared-sublink {
                /* font-size: 35px; */
                margin-left: 15px;
            }
        }

        @media screen and (max-width: 1600px) {
            .mobile-dropdown-list {
                width: 28vw;
            }
        }

        @media screen and (max-width: 1400px) {
            .mobile-dropdown-list {
                width: 30vw;
            }
        }

        @media screen and (max-width: 768px) {
            .csquared-sublink>.menu_link {
                padding-left: 15px;
                font-size: 20px;
            }

            .csquared-sublink {
                /* font-size: 35px; */
                margin-left: 0px;
            }

            #phone-desk-container {
                display: inline-block;
            }

            #desktop-navbar {
                /* display: none; */
            }

            #mobile-navbar {
                /* display: inline-block; */
                /* text-align: center;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: center;
        justify-content: center;
        justify-content: space-evenly;
        align-items: center; */
                display: inline-flex;
                flex-direction: row;
                flex-wrap: nowrap;
                align-content: stretch;
                justify-content: space-evenly;
                align-items: center;
            }

            .mobile-dropdown {
                display: inline-block;
            }

            #mobile-logo {
                display: inline-block;
                padding-left: 20vw;
                padding-right: 20vw;
            }

            #mobile-logo-img {
                width: 35px;
            }

            #mobile-phone {
                display: inline-block;
                padding-left: 10px;
                padding-right: 10px;
                margin-right: 0px;
            }

            .nav-link {
                display: none;
            }

            #desktop-logo {
                display: none;
            }

            #mobile-logo-img {
                display: inline-block;
            }

            #footer_outlined_phone_mobile {
                display: inline-block;
                width: 25px;
            }

            .navbar {
                background-color: #000000;
                width: 100%;
                height: 75px;
                position: fixed;
            }

            .mobile-dropdown-list {
                background-color: #000000;
                width: 55vw;
                text-align: left;
                padding-left: 15px !important;
                padding-right: 15% !important;
            }

            .flexauto {
                flex: unset;
            }
        }


        @media only screen and (max-width: 600px) {
            .mobile-dropdown-list {
                padding-right: 15% !important;
                text-align: left;
                width: 55vw;
                padding-left: 15px !important;
            }

            .csquared-sublink>.menu_link {
                padding-left: 15px;
                font-size: 20px;
            }
        }
    </style>
