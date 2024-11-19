<style>
    #contactus-hero {
        position: relative; /* Ensures this section is positioned */
        z-index: 10; /* Higher z-index to stay on top */
    }

    .teal-splash-container {
        position: relative; /* This will be the reference for absolute positioning */
        z-index: 1; /* Lower z-index to go behind */
        overflow: hidden; /* Prevents overflow if needed */
    }

    #teal-splash {
        position: absolute; /* Position it absolutely within the container */
        top: 0; /* Align to the top */
        left: 0; /* Align to the left */
        width: 100%; /* Make it full width */
        height: auto; /* Maintain aspect ratio */
        z-index: 1; /* Ensure the image also has a lower z-index */
        opacity: 0.5; /* Optional: make it semi-transparent */
    }
</style>

<div id="contactus-hero" class="jumbotron hero-height">
    <div id="content-container" class="container hero-container">
        <div id="content-hero-container" class="hp-hero-content-container hp-hero-content-container-alt">
            <img class="hp-hero-logo" src="{{ asset('molabsmedia/molabs_logo.png') }}">
            <h1 class="hp-hero-heading">Past Events</h1>
        </div>
    </div>
</div>

<section id="section-two">
    <div class="teal-splash-container">
        <img id="teal-splash" src="homepage/images/desktop/teal_splash.png" alt="Teal Splash">
    </div>
    <div class="what-we-do-container container">
        <h1 id="whatWeDo" class="body-headings heading-black">Past Events</h1>
        <hr id="whatWeDoHr" class="body-hr">
    </div>

    <div class="row mb-1-custom">
        <div class="col-md grid-padding-right">
            <div class="hp-grid-box-container">
                <div id="upcoming-box" class="hp-grid-box-content-container grid-container">
                    <h2 class="body-headings-two heading-white">Video Archive</h2>
                    <a class="outlined-white-button mt-5" href="{{ url('videos') }}" role="button">learn more</a>
                </div>
            </div>
        </div>
        <div class="col-md grid-padding-left">
            <div class="hp-grid-box-container">
                <div id="archive-box" class="hp-grid-box-content-container grid-container">
                    <h2 class="body-headings-two heading-white">Picture Archive</h2>
                    <a class="outlined-white-button mt-5" href="{{ url('picturearchive') }}" role="button">learn more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-1-custom">
        <div class="col-md grid-padding-left">
            <div class="hp-grid-box-container">
                <div id="archive-box" class="hp-grid-box-content-container grid-container">
                    <h2 class="body-headings-two heading-white">Poster Archive</h2>
                    <a class="outlined-white-button mt-5" href="{{ url('posterarchive') }}" role="button">learn more</a>
                </div>
            </div>
        </div>
        <div class="col-md grid-padding-left">
            <div class="hp-grid-box-container"></div>
        </div>
    </div>
</section>
