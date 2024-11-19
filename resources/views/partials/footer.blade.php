<style>
    input {
        -webkit-border-radius: 0;
        border-radius: 0;
    }

    #mobile-form-confirmation {
        display: none;
    }

    #mobile-form {
        outline: none;
        display: none;
    }

    #homepage-form-heading-mobile {
        margin-left: -11px;
        font-weight: bold;
        font-size: 40px;
    }

    .mobile-form-container {
        padding-left: 5%;
        padding-right: 5%;
        padding-bottom: 10%;
        padding-top: 10%;
        width: 100%;
    }

    .field-in-row-mobile {
        width: 45%;
        border-left: none;
        height: 50px;
        font-family: 'Source Code Pro', monospace;
        font-size: 10px !important;
        outline: none;
        background: transparent;
    }

    #form-phone-number-mobile {
        border-right: none;
        font-size: 10px;
        outline: none;
    }

    #form-business-name-mobile {
        font-size: 10px;
        border: none;
        height: 50px;
        font-family: 'Source Code Pro', monospace;
        outline: none;
        background: transparent;
    }

    #form-email-mobile {
        font-size: 10px;
        height: 50px;
        font-family: 'Source Code Pro', monospace;
        outline: none;
        border-top: none;
        border-left: none;
        border-right: none;
        width: 90%;
        background: transparent;
    }

    #form-message-mobile {
        font-size: 10px;
        font-family: 'Source Code Pro', monospace;
        border-left: none;
        border-right: none;
        resize: none;
        outline: none;
        width: 90%;
        padding-top: 25px;
        background: transparent;
    }

    .my-top-border-mobile {
        border-top: 5px solid black;
    }

    #form-button-mobile {
        width: 135px;
        height: 40px;
        border: solid;
        border-color: black;
        background: black;
        color: white;
        margin-left: -12px;
        font-size: 8px;
        font-weight: bold;
        outline: none;
    }

    #form-disclaimer-mobile {
        font-weight: bold;
        font-size: 9px;
        padding-top: 15px;
        margin-left: -10px;
    }

    @media screen and (max-width: 768px) {
        #main-form {
            display: none;
        }

        #mobile-form {
            display: inline-block;
        }
    }
    </style>
    <footer id="showOnMobile" class="mobileFooter">
        <div class="container">
            <img id="mobileFooterLogo" src='molabsmedia/molabs_logo.png' />
            <h2 class="desktopFooterHeader">Your Business <br> is unique for us!</h2>
            <hr class="footerHR">
            <h3 class="desktopFooterSubheading">contact</h3>
            <a class="desktopFooterPhone footerLinks">
                <p class="desktopFooterMainCopy"><span style="font-weight: bold;">tel: +1 214-679-6818</span></p>
            </a>
            <a class="footerLinks" href="{{ url('index') }}">
    <p class="desktopFooterMainCopy">molabsmedia.com</p>
</a>


            <a class="footerLinks">

                <span class="e-mail desktopFooterMainCopy" data-user="tcatnoc" data-website="moc.aidemsbalom">
                </span>

            </a>

            <div id="CAContainer" class="locationsContainer">
                <img class="stateIcon" src="{{ asset('essentials/footer/images/texas.png') }}" />
                <div>
                    <p class="desktopFooterMainCopy stateInformation"><span style="font-weight: bold;">Carlsbad,
                            CA</span></p>
                    <p class="desktopFooterMainCopy stateInformation dontWrapText">2727 LBJ Freeway, Suite 200</p>
                    <p class="desktopFooterMainCopy stateInformation">Dallas, TX, 75234</p>
                </div>
            </div>

            <hr class="footerHR">
            <h3 class="desktopFooterSubheading">follow</h3>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.facebook.com/Molabsmedia" target="_blank">
    <img width="100%" height="auto" id="desktopFooterFB" src="{{ asset('essentials/footer/images/Facebook_white.svg') }}" />
</a>
                <a class="footerLinks linkCenter" href="https://www.facebook.com/Molabsmedia" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Facebook</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.instagram.com/molabs_media" target="_blank">
    <img width="100%" height="auto" id="desktopFooterInsta" src="{{ asset('essentials/footer/images/Instagram_white.svg') }}" />
</a>
                <a class="footerLinks linkCenter" href="https://www.instagram.com/molabs_media" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Instagram</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://twitter.com/Molabs_Media" target="_blank">
    <img width="100%" height="auto" id="desktopFooterTwitter" src="{{ asset('essentials/footer/images/Twitter_white.svg') }}" />
</a>
                <a class="footerLinks linkCenter" href="https://twitter.com/Molabs_Media" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Twitter</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.linkedin.com/company/mo-labs-media" target="_blank"><img width="100%" height="auto"
                        id="desktopFooterLI" src="essentials/footer/images/Linkedin_white.svg" /></a>
                <a class="footerLinks linkCenter" href="https://www.linkedin.com/company/mo-labs-media" target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">LinkedIn</p>
                </a>
            </div>
            <div class="desktopFooterSocialContainer">
                <a href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg" target="_blank">
    <img width="100%" height="auto" id="desktopFooterYT" src="{{ asset('essentials/footer/images/Youtube_white.svg') }}" />
</a>
                <a class="footerLinks linkCenter" href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg"
                    target="_blank">
                    <p class="desktopFooterMainCopy noBottomMargin">Youtube</p>
                </a>
            </div>
            <hr class="footerHR">
            <p class="desktopRightsReserved desktopFooterMainCopy"> &#169; 2022 Molabs Media All Rights Reserved.</p>

        </div>
    </footer>

    <footer id="showOnDesktop" class="desktopFooter">
        <div class="container">
            <div id="desktopFooterRow" class="row">
                <div class="col-4">
                    <img class="desktopFooterLogo" src="{{ asset('molabsmedia/molabs_logo.png') }}" />
                    <h2 class="desktopFooterHeader">Your Business <br> is unique for us!</h2>
                    <p class="desktopRightsReserved desktopFooterMainCopy"> &#169; 2022 Molabs Media All Rights
                        Reserved.</p>

                </div>

                <div class="col-2 columnBorderTop">
                    <h3 class="desktopFooterSubheading">contact</h3>
                    <a class="desktopFooterPhone footerLinks">
                        <p class="desktopFooterMainCopy"><span style="font-weight: bold;">+1 214-679-6818</span></p>
                    </a>
                    <a class="footerLinks" href="index">
                        <p class="desktopFooterMainCopy">molabsmedia.com</p>
                    </a>


                    <a class="footerLinks">

                        <span class="e-mail desktopFooterMainCopy" data-user="tcatnoc" data-website="moc.aidemsbalom">
                        </span>

                    </a>

                    <div id="CAContainer" class="locationsContainer">
                        <img class="stateIcon" src="{{ asset('essentials/footer/images/texas.png') }}" />
                        <div>
                            <p class="desktopFooterMainCopy stateInformation"><span style="font-weight: bold;">Dallas,
                                    TX</span></p>
                            <p class="desktopFooterMainCopy stateInformation dontWrapText">2727 LBJ Freeway, Suite 200
                            </p>
                            <p class="desktopFooterMainCopy stateInformation">Dallas, TX, 75234</p>
                        </div>
                    </div>

                </div>
                <div class="col-2 columnBorderTop">
                    <h3 class="desktopFooterSubheading">information</h3>
                    <a class="footerLinks" href="videoproduction">
                        <p class="desktopFooterMainCopy">Video Production</p>
                    </a>
                    <a class="footerLinks" href="creativewriting">
                        <p class="desktopFooterMainCopy">Creative Writing</p>
                    </a>
                    <a class="footerLinks" href="contentwriters">
                        <p class="desktopFooterMainCopy">Content Writing</p>
                    </a>
                    <a class="footerLinks" href="webdesign">
                        <p class="desktopFooterMainCopy">Web Design</p>
                    </a>

                    <a class="footerLinks" href="graphicsdesign">
                        <p class="desktopFooterMainCopy">Graphics Design</p>
                    </a>

                    <a class="footerLinks" href="itandtelecom">
                        <p class="desktopFooterMainCopy">IT and Telecom Staffing</p>
                    </a>

                </div>
                <div class="col-2 columnBorderTop">
                    <h3 class="desktopFooterSubheading">follow</h3>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.facebook.com/Molabsmedia" target="_blank"><img width="100%" height="auto"
                                id="desktopFooterFB" src="essentials/footer/images/Facebook_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://www.facebook.com/Molabsmedia" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Facebook</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.instagram.com/molabs_media" target="_blank"><img width="100%" height="auto"
                                id="desktopFooterInsta" src="essentials/footer/images/Instagram_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://www.instagram.com/molabs_media" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Instagram</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://twitter.com/Molabs_Media" target="_blank"><img width="100%" height="auto"
                                id="desktopFooterTwitter" src="essentials/footer/images/Twitter_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://twitter.com/Molabs_Media" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Twitter</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.linkedin.com/company/mo-labs-media" target="_blank"><img width="100%"
                                height="auto" id="desktopFooterLI"
                                src="essentials/footer/images/Linkedin_white.svg" /></a>
                        <a class="footerLinks linkCenter" href="https://www.linkedin.com/company/mo-labs-media"
                            target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">LinkedIn</p>
                        </a>
                    </div>
                    <div class="desktopFooterSocialContainer">
                        <a href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg" target="_blank"><img
                                width="100%" height="auto" id="desktopFooterYT"
                                src="essentials/footer/images/Youtube_white.svg" /></a>
                        <a class="footerLinks linkCenter"
                            href="https://www.youtube.com/channel/UC4ZvAdyyN2slzr_N6pvXomg" target="_blank">
                            <p class="desktopFooterMainCopy noBottomMargin">Youtube</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type="text/javascript">
    _linkedin_partner_id = "1293980";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>
    <script type="text/javascript">
    (function() {
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })();
    </script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=1293980&fmt=gif" />
    </noscript>

    <style>
    #showOnDesktop {
        display: none;
    }

    .footerHR {
        opacity: 1;
        color: white;
    }

    .noBottomMargin {
        margin-bottom: 0px;
    }

    .linkCenter {
        display: flex;
        align-items: center;
    }

    .dontWrapText {
        white-space: nowrap;
    }

    #desktopFooterRow {
        justify-content: space-evenly;
    }

    .locationsContainer {
        display: flex;
        align-items: center;
    }

    .stateInformation {
        margin-bottom: 0px;
    }

    .columnBorderTop {
        border-top: solid 0.0001rem white;
        padding-top: 15px;
        padding-left: 0px;
        margin-right: 50px;
    }

    .desktopFooterMainCopy {
        color: white;
        font-weight: 200;
    }

    .footerLinks {
        text-decoration: none;
        color: white;
    }

    .mobileFooter {
        background-image: url('essentials/footer/images/FooterBG.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        height: 100%;
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .desktopFooter {
        background-image: url('essentials/footer/images/FooterBG.jpg');
        background-repeat: no-repeat;
        background-position: bottom;
        background-size: cover;
        height: 750px;
        display: flex;
        align-items: center;
    }

    .desktopRightsReserved {
        font-weight: 300;
    }

    .desktopPrivacyAndTerms {
        font-weight: bold;
    }

    .desktopPrivacyAndTerms:hover {
        text-decoration: none;
    }

    .desktopFooterSubheading {
        color: white;
        font-weight: bold;
        padding-bottom: 1.5rem;
    }

    .desktopFooterSocialContainer {
        display: flex;
        flex-direction: row;
        padding-bottom: 15px;
        height: 50px;
    }

    @media screen and (max-width: 600px) {
        #mobileFooterLogo {
            width: 200px;
            height: auto;
        }

        #desktopFooterFB {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterInsta {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterTwitter {
            width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterLI {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterYT {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        .stateIcon {
            padding-right: 30px;
        }

        .desktopFooterSubheading {
            font-size: 17px;
        }

        .desktopFooterMainCopy {
            font-size: 12px;
        }

        .desktopFooterHeader {
            font-weight: lighter;
            color: white;
            padding-top: 1rem;
            padding-bottom: 1.25rem;
        }

        .desktopFooterSubheading {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        #CAContainer {
            margin-top: 0px;
        }

        .locationsContainer {
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .e-mail:before {
            content: attr(data-website) "\0040"attr(data-user);
            unicode-bidi: bidi-override;
            direction: rtl;
        }
    }

    @media screen and (min-width: 600px) {
        #mobileFooterLogo {
            width: 200px;
            height: auto;
        }

        #desktopFooterFB {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterInsta {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterTwitter {
            width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterLI {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterYT {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        .stateIcon {
            padding-right: 30px;
        }

        .desktopFooterSubheading {
            font-size: 17px;
        }

        .desktopFooterMainCopy {
            font-size: 12px;
        }

        .desktopFooterHeader {
            font-weight: lighter;
            color: white;
            padding-top: 1rem;
            padding-bottom: 1.25rem;
        }

        .desktopFooterSubheading {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        #CAContainer {
            margin-top: 0px;
        }

        .locationsContainer {
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .e-mail:before {
            content: attr(data-website) "\0040"attr(data-user);
            unicode-bidi: bidi-override;
            direction: rtl;
        }
    }

    @media screen and (min-width: 768px) {
        #mobileFooterLogo {
            width: 200px;
            height: auto;
        }

        #desktopFooterFB {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterInsta {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterTwitter {
            width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterLI {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterYT {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        .stateIcon {
            padding-right: 30px;
        }

        .desktopFooterSubheading {
            font-size: 17px;
        }

        .desktopFooterMainCopy {
            font-size: 16px;
        }

        .desktopFooterHeader {
            font-weight: lighter;
            color: white;
            padding-top: 1rem;
            padding-bottom: 1.25rem;
        }

        .desktopFooterSubheading {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        #CAContainer {
            margin-top: 0px;
        }

        .locationsContainer {
            padding-top: 25px;
            padding-bottom: 25px;
        }

        .e-mail:before {
            content: attr(data-website) "\0040"attr(data-user);
            unicode-bidi: bidi-override;
            direction: rtl;
        }
    }

    @media screen and (min-width: 1024px) {
        #CAContainer {
            margin-top: 75px;
            padding-bottom: 25px;
        }

        .locationsContainer {
            padding-top: 0px;
            padding-bottom: 0px;
        }

        .e-mail:before {
            content: attr(data-website) "\0040"attr(data-user);
            unicode-bidi: bidi-override;
            direction: rtl;
        }

        #showOnDesktop {
            display: flex;
        }

        #showOnMobile {
            display: none;
        }

        .desktopFooter {
            padding-left: 1rem;
            padding-right: 0rem;
        }

        .stateIcon {
            max-width: 100%;
            height: auto;
            padding-right: 15px;
        }

        .desktopFooterMainCopy {
            font-size: 13px;
        }

        .desktopFooterLogo {
            max-width: 150px;
            height: auto;
        }

        .desktopFooterHeader {
            font-weight: lighter;
            color: white;
            padding-top: 2rem;
            padding-bottom: 3rem;
            font-size: 35px;
        }

        .desktopFooterSubheading {
            font-size: 28px;
        }

        #desktopFooterFB {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterInsta {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterTwitter {
            width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterLI {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterYT {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }
    }

    @media screen and (min-width: 1440px) {
        .desktopFooter {
            padding-left: 3rem;
            padding-right: 0rem;
        }

        .stateIcon {
            max-width: 100%;
            height: auto;
            padding-right: 15px;
        }

        .desktopFooterMainCopy {
            font-size: 16px !important;
        }

        .desktopFooterLogo {
            max-width: 300px;
            height: auto;
        }

        .desktopFooterHeader {
            font-weight: lighter;
            color: white;
            padding-top: 2rem;
            padding-bottom: 3rem;
            font-size: 40px;
        }

        .desktopFooterSubheading {
            font-size: 32px;
        }

        #desktopFooterFB {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterInsta {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterTwitter {
            width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterLI {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }

        #desktopFooterYT {
            max-width: 31px;
            height: auto;
            margin-right: 15px;
        }
    }
    </style>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- here is our popup modal -->
    <div id="formPopupModal-form-a" class="modal mobile-form-popup-modal form-popup-modal modal-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-popup-content" class="index-popup-content  modal-content">


                <div id="form-container" class="form-container popupDesktopFormContainer">
                    <div class="input-container">
                        <form id="popup-form-three" action="mail.php" method="post" class="popup-form-three">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-button-form">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <h1 id="popup-form-header-three" class="popup-form-header-three" style="font-weight: 200">
                                &#x2192; let's chat!</h1>
                            <div id="desktop-three-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-three" class="form-input-container-three">
                                <div class="form-group">
                                    <input id="three_name" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="three_email" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="three_phone" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="three_business_name" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea id="three_msg" name="msg" id="message_three" type="text"
                                        class="my-form-styling three_msg" placeholder="how can we help?"
                                        rows="5"></textarea>
                                </div>
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopThree">
                                <button id="popup-form-button-three" type="submit"
                                    class="my-form-button-three">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media.</span> <br>
                                    we have!
                                </h4>

                            </div>
                        </div>
                    </div>

                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-three-mobile" action="mail.php" method="post" class="popup-form-three">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-button-form">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span> <br>
                                            i have!
                                        </h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="desktop-three-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-three" class="form-input-container-three">
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="three_name_mobile" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="three_email_mobile" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                    <!-- </div> -->
                                </div>
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="three_phone_mobile" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="three_business_name_mobile" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                    <!-- </div> -->
                                </div>
                                <!-- <div class="form-group"> -->
                                <textarea id="three_msg_mobile" name="msg" id="message_three" type="text"
                                    class="help-input three_msg" placeholder="how can we help?" rows="5"></textarea>
                                <!-- </div> -->
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonMobileThree">
                                <button id="popup-form-button-three" type="submit"
                                    class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                $(document).ready(function() {
                    $(".close-button-form").on("click", function() {
                        $('.modal-backdrop').remove();
                        $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
                    });
                });
                </script>

                <style>
                #desktop-three-confirmation {
                    display: none;
                }

                .help-input {
                    outline: none;
                    font-family: 'Source Code Pro', monospace;
                    width: 100%;
                    height: 80px;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: none;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    padding: 4px;
                    margin-bottom: 1rem;
                }

                .input-style {
                    padding: 4px;
                    outline: none;
                    font-family: 'Source Code Pro', monospace;
                    width: 48%;
                    height: 40px;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: none;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }

                .mobile-button-container {
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    margin-bottom: .5rem;
                    align-items: center;
                    justify-content: space-between;
                }

                .close-button-form {}

                .close-button-container {
                    width: 100%;
                    height: 24px;
                    display: flex;
                    justify-content: flex-start;
                    align-items: flex-start;
                    margin-left: 12px;
                    color: black;
                    margin-top: 0px;
                }

                .input-container {
                    width: 50%;
                    height: 468px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #F7F8FA;
                }

                .input-container-mobile {
                    width: 100%;
                    height: 512px;
                    display: flex;
                    align-items: flex-start;
                    justify-content: center;
                    background-color: white;
                }

                .form-container {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    flex-direction: row
                }

                #message_three {
                    height: 77px;
                    resize: none;
                    padding-top: 10px;
                }



                #three_msg {}

                .three_msg {
                    width: 100%;
                    height: 77px !important;
                    resize: none;
                    padding-top: 3px;
                }

                #popup-form-three {}

                .popup-form-three {
                    border-radius: 10px;
                    max-width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    width: 100%;
                }

                .form-input-container-three {
                    padding-bottom: 20px;
                    width: 80%;
                }

                #form-input-container-three {}

                .my-form-button-three {
                    background: transparent;
                    width: 100%;
                    height: 40px;
                    border: solid 1px black;
                    border-radius: 0.25rem;

                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                    background-color: black;
                }

                .mobile-form-button {
                    /* background: transparent; */
                    width: 100%;
                    height: 40px;
                    border: none;
                    border-radius: 0.25rem;
                    background-color: black;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                }

                .get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: left top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 92px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 50%;
                    height: 468px;
                }

                .mobile-get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: right top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 20px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 1rem;
                    height: 100%;
                }

                .input-container-mobile {
                    display: none;
                }


                @media screen and (max-width: 1012px) {

                    .input-container-mobile {
                        display: inline-block;
                        /* min-width: 375px; */
                        width: 100%;
                        height: 100%;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                        max-width: 500px;
                        padding-top: 0px;
                    }

                    .input-container {
                        display: none;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        padding: 0px !important;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                    }

                    .get-onboard-container {
                        display: none;
                    }

                    .popup-form-header-three {
                        font-family: 'Inter', sans-serif;
                        padding-top: 20px;
                        line-height: 2rem;
                        text-align: center;
                        font-weight: 200 !important;
                        border-top: 1px solid red;
                    }

                    #popup-form-header-three {}

                    #three_msg {}
                }
                </style>
            </div>
        </div>
    </div>

    <!-- here is our popup modal -->
    <div id="formPopupModal-form-b" class="modal mobile-form-popup-modal form-popup-modal modal-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-popup-content" class="index-popup-content  modal-content">


                <div id="form-container" class="form-container popupDesktopFormContainer">
                    <div class="input-container">
                        <form id="popup-form-two" action="mail.php" method="post" class="popup-form-two">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-button-form">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>
                            <h1 id="popup-form-header-two" class="popup-form-header-two" style="font-weight: 200">
                                &#x2192; let's chat!</h1>
                            <div id="desktop-two-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-two" class="form-input-container-two">
                                <div class="form-group">
                                    <input id="two_name" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="two_email" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="two_phone" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="two_business_name" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea id="two_msg" name="msg" id="message_two" type="text"
                                        class="my-form-styling two_msg" placeholder="how can we help?"
                                        rows="5"></textarea>
                                </div>
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopTwo">
                                <button id="popup-form-button-two" type="submit"
                                    class="my-form-button-two">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media.</span><br>
                                    we have!
                                </h4>

                            </div>
                        </div>
                    </div>
                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-two-mobile" action="mail.php" method="post" class="popup-form-two">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-button-form">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span> <br>
                                            i have!
                                        </h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="desktop-two-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container-two" class="form-input-container-two">
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="two_name_mobile" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="two_email_mobile" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                    <!-- </div> -->
                                </div>
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="two_phone_mobile" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="two_business_name_mobile" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                    <!-- </div> -->
                                </div>
                                <!-- <div class="form-group"> -->
                                <textarea id="two_msg_mobile" name="msg" id="message_two" type="text"
                                    class="help-input two_msg" placeholder="how can we help?" rows="5"></textarea>
                                <!-- </div> -->
                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonMobileTwo">
                                <button id="popup-form-button-two" type="submit"
                                    class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                $(document).ready(function() {
                    $(".close-button-form").on("click", function() {
                        $('.modal-backdrop').remove();
                        $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');
                    });
                });
                </script>

                <style>
                #desktop-two-confirmation {
                    display: none;
                }

                .help-input {
                    outline: none;
                    font-family: 'Source Code Pro', monospace;
                    width: 100%;
                    height: 80px;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: none;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                    padding: 4px;
                    margin-bottom: 1rem;
                }

                .input-style {
                    padding: 4px;
                    outline: none;
                    font-family: 'Source Code Pro', monospace;
                    width: 48%;
                    height: 40px;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: none;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }

                .mobile-button-container {
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    margin-bottom: .5rem;
                    align-items: center;
                    justify-content: space-between;
                }

                .close-button-container {
                    width: 100%;
                    height: 24px;
                    display: flex;
                    justify-content: flex-start;
                    align-items: flex-start;
                    margin-left: 12px;
                    color: black;
                    margin-top: 0px;
                }

                .input-container {
                    width: 50%;
                    height: 468px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #F7F8FA;
                }

                .input-container-mobile {
                    width: 100%;
                    height: 512px;
                    display: flex;
                    align-items: flex-start;
                    justify-content: center;
                    background-color: white;
                }

                .form-container {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    flex-direction: row
                }

                #message_two {
                    height: 77px;
                    resize: none;
                    padding-top: 10px;
                }

                .two_msg {
                    width: 100%;
                    height: 77px !important;
                    resize: none;
                    padding-top: 3px;
                }

                .popup-form-two {
                    border-radius: 10px;
                    max-width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    width: 100%;
                }

                .form-input-container-two {
                    padding-bottom: 20px;
                    width: 80%;
                }

                .my-form-button-two {
                    background: transparent;
                    width: 100%;
                    height: 40px;
                    border: solid 1px black;
                    border-radius: 0.25rem;

                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                    background-color: black;
                }

                .mobile-form-button {
                    width: 100%;
                    height: 40px;
                    border: none;
                    border-radius: 0.25rem;
                    background-color: black;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                }

                .get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: left top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 92px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 50%;
                    height: 468px;
                }

                .mobile-get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: right top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 20px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 1rem;
                    height: 100%;
                }

                .input-container-mobile {
                    display: none;
                }

                .popupDesktopParentContainer {
                    position: relative;
                    height: 100%;
                    width: 100%;
                }

                #formSignature {
                    width: 60%;
                    height: auto;
                }

                /* @media screen and (max-width: 1920px){ */
                .popUpSignature {
                    font-size: 13px;
                    font-family: 'Source Code Pro';
                    font-weight: 500;
                    padding-top: 20px;
                }

                .popupDesktopCopy {
                    font-weight: 200;
                }

                .popupDesktopContainer {
                    height: 100%;
                    color: white;
                    display: flex;
                    align-items: flex-start;
                    /* margin-bottom: 108px; */
                    width: 300px;
                    justify-content: flex-start;
                    /* margin-left: -50px; */
                    flex-direction: column;
                    padding-left: 25px;
                    padding-top: 50px;
                }

                .mobilePopupContainer {
                    padding-left: 40px !important;
                }

                /* } */

                .popupDesktopFormContainer {
                    max-width: 800px;
                }

                @media screen and (max-width: 1012px) {

                    .close-button-container {
                        justify-content: flex-end !important;
                        align-items: flex-end !important;
                        margin-right: 40px !important;
                    }

                    .close-button-container {
                        color: white !important;
                    }

                    .input-container-mobile {
                        display: inline-block;
                        /* min-width: 375px; */
                        width: 100%;
                        height: 100%;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                        max-width: 500px;
                        padding-top: 0px;
                    }

                    .input-container {
                        display: none;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        padding: 0px !important;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                    }

                    .get-onboard-container {
                        display: none;
                    }

                    .popup-form-header-two {
                        font-family: 'Inter', sans-serif;
                        padding-top: 20px;
                        line-height: 2rem;
                        text-align: center;
                        font-weight: 200 !important;
                        border-top: 1px solid red;
                    }
                }
                </style>
            </div>
        </div>
    </div>

    <!-- here is our button modal -->
    <div id="buttonModal-form-a"
        class=" modal mobile-button-form-popup-modal form-button-popup-modal modal-button-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-button-modal-content" class="index-popup-content  modal-content">

                <div class="form-container popupDesktopFormContainer">
                    <div id="blurred-form-background" class="input-container">
                        <form id="popup-form-a" action="mail.php" method="post" class="popup-form">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-popup">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>

                            <h1 id="popup-form-header" class="popup-form-header" style="font-weight: 200"> &#x2192;
                                let's chat!</h1>
                            <div id="desktop-four-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>

                            <div id="form-input-container" class="form-input-container">
                                <div class="form-group">
                                    <input id="pop_name" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_email" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_number" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_lead_business_name" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="msg" id="message_four" type="text" class="my-form-styling msg"
                                        placeholder="how can we help?" rows="5"></textarea>
                                </div>

                                <!-- used to get the values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopFour">

                                <button id="popup-form-button" type="submit" class="my-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media.</span> <br>
                                    we have!
                                </h4>

                            </div>
                        </div>
                    </div>

                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-a-mobile" action="mail.php" method="post" class="popup-form">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-popup">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span><br>
                                            i have!
                                        </h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="desktop-four-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>

                            <div id="form-input-container" class="form-input-container">
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_name_mobile" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_email_mobile" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                    <!-- </div> -->
                                </div>
                                <div class="mobile-button-container">
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_phone" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <!-- </div> -->
                                    <!-- <div class="form-group"> -->
                                    <input id="pop_business_name" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                    <!-- </div> -->
                                </div>
                                <!-- <div class="form-group"> -->
                                <textarea name="msg" id="message_four" type="text" class="help-input msg"
                                    placeholder="how can we help?" rows="5"></textarea>

                                <!-- used to get he values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonMobileFour">
                                <button id="popup-form-button" type="submit" class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>


                </div>


                <script>
                $(document).ready(function() {
                    $(".close-popup").on("click", function() {
                        $('.modal-backdrop').remove();
                        $(`#buttonModal-${sessionStorage['selectedForm']}`).modal('toggle');
                    });
                });
                </script>

                <style>
                #desktop-four-confirmation {
                    display: none;
                }

                .mobile-form-button {
                    /* background: transparent; */
                    width: 100%;
                    height: 40px;
                    border: none;
                    border-radius: 0.25rem;
                    background-color: black;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                }

                .msg {
                    width: 100%;
                    height: 77px !important;
                    resize: none;
                }

                .input-style {
                    padding: 4px;
                    outline: one;
                    font-family: 'Source Code Pro', monospace;
                    width: 48%;
                    height: 40px;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: one;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }

                .mobile-get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: right top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 20px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 1rem;
                    height: 100%;
                }

                .my-form-button {
                    background: transparent;
                    width: 100%;
                    height: 40px;
                    border: solid 1px black;
                    border-radius: 0.25rem;

                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                    background-color: black;
                }

                .form-input-container {
                    padding-bottom: 20px;
                    width: 80%;
                }

                .input-container {
                    width: 50%;
                    height: 468px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #F7F8FA;
                }

                .input-container-mobile {
                    width: 100vw;
                    height: 512px;
                    display: flex;
                    align-items: flex-start;
                    justify-content: center;
                    background-color: white;
                }

                .get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: left top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 92px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 50%;
                    height: 468px;
                }

                .form-container {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    flex-direction: row
                }

                .close-button-container {
                    width: 100%;
                    height: 24px;
                    display: flex;
                    justify-content: flex-start;
                    align-items: flex-start;
                    margin-left: 12px;
                    color: black;
                    margin-top: -15px;
                    margin-top: 0px;
                }


                .modal-content {
                    background-color: transparent;
                    width: 703px;
                }

                .my-form-styling {
                    outline: one;
                    font-family: 'Source Code Pro', monospace;
                    margin-bottom: 1rem;
                    width: 100%;
                    height: 40px;
                    font-size: 16px;
                    padding: 0.375rem 0.75rem;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: one;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }

                .popup-form {
                    border-radius: 10px;
                    max-width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    width: 100%;
                }

                .input-container-mobile {
                    display: none;
                }


                /** mobile media queries start here */
                @media screen and (max-width: 768px) {
                    .input-container-mobile {
                        min-width: 375px;
                        width: 100%;
                        height: 512px;
                        display: flex;
                        padding-top: 10px;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                        display: inline-block;
                    }

                }

                @media screen and (max-width: 1012px) {

                    .input-container-mobile {
                        display: inline-block;
                        /* min-width: 375px; */
                        width: 100%;
                        height: 100%;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                        max-width: 500px;
                        padding-top: 0px;
                    }

                    .input-container {
                        display: one;
                    }

                    .get-onboard-container {
                        display: one;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        padding: 0px !important;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                    }

                    .popup-form-header {
                        font-family: 'Inter', sans-serif;
                        font-weight: 200 !important;
                        padding-top: 20px;
                        line-height: 2rem;
                        text-align: center;
                        color: red;
                    }
                }
                </style>
            </div>
        </div>
    </div>

    <!-- here is our button modal -->
    <div id="buttonModal-form-b"
        class=" modal mobile-button-form-popup-modal form-button-popup-modal modal-button-container" role="dialog"
        displayed="false" data-backdrop="false">
        <div class="modal-dialog">
            <div id="index-button-modal-content" class="index-popup-content  modal-content">

                <div class="form-container popupDesktopFormContainer">

                    <div id="blurred-form-background" class="input-container">
                        <form id="popup-form-b" action="mail.php" method="post" class="popup-form popupDesktopOne">
                            <div class="close-button-container">
                                <span id="close-popup-button" class="close-popup">
                                    <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            </div>

                            <h1 id="popup-form-header" class="popup-form-header" style="font-weight: 200"> &#x2192;
                                let's chat!</h1>
                            <div id="desktop-one-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container" class="form-input-container">
                                <div class="form-group">
                                    <input id="pop_name_desk" name="full_name" type="text" class="my-form-styling"
                                        placeholder="your name*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_email_desk" name="email" type="email" class="my-form-styling"
                                        placeholder="email address*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_number_desk" name="phone_number" type="text" class="my-form-styling"
                                        placeholder="phone number*" required>
                                </div>
                                <div class="form-group">
                                    <input id="pop_lead_business_name_desk" name="lead_business_name" type="text"
                                        class="my-form-styling" placeholder="business name*" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="msg" id="message_one" type="text" class="my-form-styling msg"
                                        placeholder="how can we help?" rows="5"></textarea>
                                </div>

                                <!-- used to get the values from the utm script -->
                                <input name="utm_data" type="hidden" id="utmButtonDesktopOne">

                                <button id="popup-form-button" type="submit" class="my-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="get-onboard-container">
                        <div class="popupDesktopParentContainer">
                            <div class="popupDesktopContainer">
                                <h4 class="popupDesktopCopy">partner up with <br>
                                    the specialists at <br>
                                    <span style="font-weight: bold;">Molabs Media</span> <br>
                                    we have!
                                </h4>

                            </div>
                        </div>
                    </div>

                    <div id="form-container" class="input-container-mobile">
                        <form id="popup-form-b-mobile" action="mail.php" method="post"
                            class="popup-form popupDesktopOne">
                            <div class="mobile-get-onboard-container">
                                <div class="close-button-container">
                                    <span id="close-popup-button" class="close-popup">
                                        <svg style="width: 20px; height: 20px;" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="popupDesktopParentContainer">
                                    <div class="popupDesktopContainer mobilePopupContainer">
                                        <h4 class="popupDesktopCopy">partner up with <br>
                                            the specialists at <br>
                                            <span style="font-weight: bold;">c squared social.</span> <br>
                                            i have!
                                        </h4>
                                        <div class="formSignatureContainer">
                                            <img id="formSignature" src="/homepage/images/signature_White.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="desktop-one-confirmation">
                                <p><span style="font-weight: bold; display: block; text-align: center;">Thank you! <br>
                                        Someone will be contacting you shortly!</p>
                            </div>
                            <div id="form-input-container" class="form-input-container">
                                <div class="mobile-button-container">
                                    <input id="pop_name_one" name="full_name" type="text" class="input-style"
                                        placeholder="your name*" required>
                                    <input id="pop_email_one" name="email" type="email" class="input-style"
                                        placeholder="email address*" required>
                                </div>
                                <div class="mobile-button-container">
                                    <input id="pop_phone_one" name="phone_number" type="text" class="input-style"
                                        placeholder="phone number*" required>
                                    <input id="pop_lead_business_name_one" name="lead_business_name" type="text"
                                        class="input-style" placeholder="business name*" required>
                                </div>
                                <textarea id="message_one" name="msg" type="text" class="help-input msg"
                                    placeholder="how can we help?" rows="5"></textarea>

                                <input name="utm_data" type="hidden" id="utmButtonMobileOne">
                                <button id="popup-form-button" type="submit" class="mobile-form-button">submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                $(document).ready(function() {
                    $(".close-popup").on("click", function() {
                        $('.modal-backdrop').remove();
                        $(`#buttonModal-${sessionStorage['selectedForm']}`).modal('toggle');
                    });
                });
                </script>

                <style>
                #desktop-one-confirmation {
                    display: none;
                }

                .mobile-form-button {
                    width: 100%;
                    height: 40px;
                    border: none;
                    border-radius: 0.25rem;
                    background-color: black;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                }

                .msg {
                    width: 100%;
                    height: 77px !important;
                    resize: none;
                }

                .input-style {
                    padding: 4px;
                    outline: none;
                    font-family: 'Source Code Pro', monospace;
                    width: 48%;
                    height: 40px;
                    font-size: 14px;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: none;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }

                .mobile-get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: right top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 20px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 100%;
                    margin-bottom: 1rem;
                    height: 100%;
                }

                .my-form-button {
                    background: transparent;
                    width: 100%;
                    height: 40px;
                    border: solid 1px black;
                    border-radius: 0.25rem;

                    color: white;
                    font-family: 'Pro Source Code', monospace;
                    font-weight: 800;
                    background-color: black;
                }

                .form-input-container {
                    padding-bottom: 20px;
                    width: 80%;
                }

                .input-container {
                    width: 50%;
                    height: 468px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #F7F8FA;
                }

                .input-container-mobile {
                    width: 100vw;
                    height: 512px;
                    display: flex;
                    align-items: flex-start;
                    justify-content: center;
                    background-color: white;
                }

                .get-onboard-container {
                    background-image: url("images/girl_popup_desktop.jpg");
                    background-position: left top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    display: flex;
                    flex-direction: column;
                    padding-top: 92px;
                    align-items: center;
                    justify-content: flex-start;
                    width: 50%;
                    height: 468px;
                }

                .form-container {
                    width: 100%;
                    height: 100%;
                    display: flex;
                    flex-direction: row
                }

                .close-button-container {
                    width: 100%;
                    height: 24px;
                    display: flex;
                    justify-content: flex-start;
                    align-items: flex-start;
                    margin-left: 12px;
                    color: black;
                    margin-top: 0px;
                }

                .modal-content {
                    background-color: transparent;
                    width: 703px;
                }

                .my-form-styling {
                    outline: none;
                    font-family: 'Source Code Pro', monospace;
                    margin-bottom: 1rem;
                    width: 100%;
                    height: 40px;
                    font-size: 16px;
                    padding: 0.375rem 0.75rem;
                    font-weight: 400;
                    line-height: 1.5;
                    color: #212529;
                    background-color: #fff;
                    background-clip: padding-box;
                    border: 1px solid #ced4da;
                    appearance: none;
                    border-radius: 0.25rem;
                    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
                }

                .popup-form {
                    border-radius: 10px;
                    max-width: 100%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    width: 100%;
                }

                .input-container-mobile {
                    display: none;
                }

                /** mobile media queries start here */
                @media screen and (max-width: 768px) {
                    .input-container-mobile {
                        display: inline-block;
                        min-width: 375px;
                        width: 100%;
                        height: 512px;
                        display: flex;
                        padding-top: 10px;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                    }

                }

                @media screen and (max-width: 1012px) {

                    .input-container-mobile {
                        display: inline-block;
                        /* min-width: 375px; */
                        width: 100%;
                        height: 100%;
                        display: flex;
                        align-items: flex-start;
                        justify-content: center;
                        background-color: white;
                        max-width: 500px;
                        padding-top: 0px;
                    }

                    .input-container {
                        display: none;
                    }

                    .get-onboard-container {
                        display: none;
                    }

                    .form-container {
                        width: 100%;
                        height: 100%;
                        display: flex;
                        padding: 0px !important;
                        justify-content: center;
                        align-items: center;
                        flex-direction: column;
                    }

                    .popup-form-header {
                        font-family: 'Inter', sans-serif;
                        font-weight: 200 !important;
                        padding-top: 20px;
                        line-height: 2rem;
                        text-align: center;
                        color: red;
                    }
                }
                </style>
            </div>
        </div>
    </div>

</body>

</html>


<script>
$(document).ready(function() {

    // conditionally setting the sessions seconds
    var secondsToDisplayModal = sessionStorage['displayModal'] != undefined ? parseInt(sessionStorage[
        'displayModal']) : 0;

    //displaying modal after 30 seconds
    const formModalTimer = setInterval(() => {
        const iteratedSeconds = secondsToDisplayModal++;
        iteratedSeconds.toString();
        sessionStorage['displayModal'] = iteratedSeconds;
        if ((sessionStorage['displayModal'] == '15') && (sessionStorage['timer'] == 'running')) {

            $(`#formPopupModal-${sessionStorage['selectedForm']}`).modal('toggle');

            //creating a variable so we can pass as utm_data
            var popupModal = `Content Popup Modal ${sessionStorage['selectedForm']}`;
            var utmData =
                'google | cpc | Social_Media_Agency | g | Social_Media_Agency | ad agency company' +
                ' | ' + popupModal;

            //assigning string data to our form fields
            const elements = [

                'utmDataField',
                'utmDataFieldTwo',
                'utmDataFieldThree',
                'utmDataFieldFour',
                'utmDataFieldFive',
                'utmDataFieldSix',

                'utmButtonDesktopOne',
                'utmButtonMobileOne',

                'utmButtonMobileTwo',
                'utmButtonDesktopTwo',

                'utmButtonDesktopThree',
                'utmButtonMobileThree',

                'utmButtonMobileFour',
                'utmButtonDesktopFour',
            ];

            elements.map((element) => {
                if (document.getElementById(element) !== null) {
                    const x = document.getElementById(element);
                    x.value = utmData;
                }
            });
        }

        if (sessionStorage['displayModal'] == '16') {
            clearInterval(formModalTimer)
        }
    }, 1000);

});

//stops page from bouncing after modal is closed
$('#buttonModal').on('hidden.bs.modal', function(event) {
    event.preventDefault();
    event.stopPropagation();
    event.stopImmediatePropagation();
    return false;
});

//stops page from bouncing after modal is closed
$('#disclaimerModal').on('hidden.bs.modal', function(event) {
    event.preventDefault();
    event.stopPropagation();
    event.stopImmediatePropagation();
    return false;
});
</script>

<script>
//stops timer for popup modal checks to toggle modal, sets utmData
function getButtonId(buttonClicked) {
    sessionStorage['timer'] = 'stop';
    var buttonClicked = buttonClicked.name;

    if (buttonClicked.toLowerCase() != "footer form") {
        $(`#buttonModal-${sessionStorage['selectedForm']}`).modal('toggle');
    }

    if (buttonClicked != null) {
        var utmData = 'google | cpc | Social_Media_Agency | g | Social_Media_Agency | ad agency company |' +
            `${buttonClicked} ${sessionStorage['selectedForm']}`;
    } else {
        var utmData = 'google | cpc | Social_Media_Agency | g | Social_Media_Agency | ad agency company';
    }

    const buttonElements = [

        'utmDataField',
        'utmDataFieldTwo',
        'utmDataFieldThree',
        'utmDataFieldFour',
        'utmDataFieldFive',
        'utmDataFieldSix',

        'utmButtonDesktopOne',
        'utmButtonMobileOne',

        'utmButtonMobileTwo',
        'utmButtonDesktopTwo',

        'utmButtonDesktopThree',
        'utmButtonMobileThree',

        'utmButtonMobileFour',
        'utmButtonDesktopFour',

    ];

    buttonElements.map((element) => {
        if (document.getElementById(element) !== null) {
            const x = document.getElementById(element);
            x.value = utmData;
        }
    });
}
</script>

<style>
/* body {
    font-family: 'Inter', sans-serif;
  } */

html,
body {
    margin: 0;
    overflow-x: hidden;
    overflow-y: overlay;
}

input[type="text"] {
    font-size: 16px;
}

.modal-content {
    border: none;
}

.index-popup-content {
    width: 65%;
    height: 100%;
    border: none;
    align-items: center;
}

.modal-dialog {
    display: flex;
    width: 100%;
    margin: 0;
    max-width: 100%;
    align-items: center;
    justify-content: center;
}

.modal-container {
    display: flex;
    width: 100%;
    height: 37rem;
}

.modal-button-container {
    width: 100%;
}

@media screen and (min-width: 1013px) {
    .form-popup-modal {
        display: none;
        justify-content: center;
        align-items: center;
        margin-top: 75px;
        height: 38rem;
    }

    .form-button-popup-modal {
        margin-top: 75px;
        height: 38rem;
    }
}

@media screen and (max-width: 1012px) {
    .index-popup-content {
        width: 100%;
    }

    .mobile-form-popup-modal {
        display: none;
        justify-content: center;
        align-items: flex-start;
        margin-top: 65px;
        height: 32rem;
    }

    .mobile-button-form-popup-modal {
        display: none;
        justify-content: center;
        align-items: flex-start;
        margin-top: 55px;
        height: 35rem;
    }
}
</style>


<script>
    window.addEventListener('load', function() {
        var element = document.getElementById('contactmessage');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
</script>
