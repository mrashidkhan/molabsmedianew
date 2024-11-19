<div>
    <form id="main-form" action="{{ route('contact.store') }}" method="POST" autocomplete="off">
        @csrf <!-- This line adds CSRF protection -->
        <div class="form-container container lets-talk-form">
            <h1 id="homepage-form-heading">let's talk</h1>
            <hr
                style="opacity: 1; color: black; width: 35px; height: 10px; margin-left: -11px; margin-top: 2rem; margin-bottom: 2rem;">

            <div id="main-form-confirmation">
                <p><span style="font-weight: bold;">Thank you for contacting us!</span> We will be in touch soon.</p>
            </div>

            <div class="row">
                <input name="full_name" id="form-fullname" type="text" class="field-in-row my-top-border"
                    placeholder="full name" required>
                <input name="email" id="form-email" type="email" class="field-in-row my-top-border"
                    placeholder="email" required>
                <input name="phone_number" id="form-phone-number" type="text" class="field-in-row my-top-border"
                    placeholder="phone number" required>
            </div>

            <div class="row">
                <input name="lead_business_name" id="form-business-name" type="text" placeholder="business name"
                    required>
            </div>

            <div class="row">
                <textarea name="msg" id="form-message" rows="7" cols="50" placeholder="message"></textarea>
            </div>

            <!-- used to get the values from the utm script -->
            <input name="utm_data" type="hidden" id="utmDataField">

            <button onclick="getButtonId(this)" name="Footer Form" id="form-button" type="submit">submit</button>
            <div id="form-disclaimer">* By clicking submit, you agree to our terms of service.</div>
        </div>
    </form>
    @if (session('info'))
        <br><br>
        <div id="contactmessage" class="alert alert-success">

            {{ session('info') }}
        </div>
    @endif
</div>

<style>
    /** stop ios rounded corners */
    input {
        -webkit-border-radius: 0;
        border-radius: 0;
    }

    textarea {
        -webkit-border-radius: 0;
        border-radius: 0;
    }

    #form-fullname {
        font-size: 20px;
    }

    #main-form-confirmation {
        display: none;
        border: solid 2px;
        font-size: 25px;
        font-family: 'Source Code Pro', sans-serif;
        padding-top: 20px;
        padding-bottom: 80px;
        padding-left: 15px;
    }

    #main-form {
        outline: none;
        height: 100%;
        padding-top: 80px;
        padding-bottom: 80px;
        /* height: 700px; */
        padding-left: 30px;
        padding-right: 30px;
    }

    #homepage-form-heading {
        margin-left: -11px;
        /* font-weight: 700; */
        /* font-size: 70px; */
    }

    .form-container {
        /* padding-bottom: 80px;
    padding-top: 80px; */
    }

    .lets-talk-form {
        display: block !important;
    }

    .field-in-row {
        width: 33.3%;
        border-left: none;
        height: 70px;
        font-family: 'Source Code Pro', monospace;
        font-size: 20px;
        outline: none;
        background-color: transparent;
    }

    #form-phone-number {
        border-right: none;
        font-size: 20px;
        outline: none;
        background-color: transparent;
    }

    #form-business-name {
        font-size: 20px;
        border: none;
        height: 70px;
        font-family: 'Source Code Pro', monospace;
        outline: none;
        background-color: transparent;
    }

    #form-message {
        font-size: 20px;
        font-family: 'Source Code Pro', monospace;
        border-left: none;
        border-right: none;
        resize: none;
        outline: none;
        background-color: transparent;
        padding-top: 25px;
    }

    .my-top-border {
        border-top: 5px solid black;
    }

    #form-button {
        width: 250px;
        height: 64px;
        border: solid;
        background: transparent;
        margin-left: -12px;
        font-size: 18px;
        font-weight: bold;
        box-shadow: inset 0 0 0 0 black;
        transition: ease-out 0.3s;
        outline: none;
    }

    #form-button:hover {
        box-shadow: inset 250px 0 0 0 black;
        border-color: black;
        color: white;
    }

    #form-disclaimer {
        font-weight: bold;
        display: inline-block;
        padding-left: 20px;
        font-size: 12px;
        position: absolute;
        margin-top: 20px;
    }
</style>
