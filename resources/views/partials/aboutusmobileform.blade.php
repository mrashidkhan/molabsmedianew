<form id="mobile-form" action="mail.php" method="post" autocomplete="off" style="width: 100%;">
    <div class="mobile-form-container">
        <h1 id="homepage-form-heading-mobile">let's talk</h1>
        <hr style="opacity: 1; color: black; width: 15px; height: 4pt; margin-left: -11px; margin-bottom: 2rem;">
        <div id="mobile-form-confirmation">
            <p><span style="font-weight: bold;">Thank you for contacting us!</span> We will be in touch soon.</p>
        </div>
        <div class="row">
            <input style="width: 50%;" name="full_name" id="form-fullname-mobile" type="text"
                class="field-in-row-mobile my-top-border-mobile" placeholder="full name" required>
            <input style="width: 50%;" name="phone_number" id="form-phone-number-mobile" type="text"
                class="field-in-row-mobile my-top-border-mobile" placeholder="phone number" required>
        </div>

        <div class="row">
            <input style="width: 100%;" name="email" id="form-email-mobile" type="email" placeholder="email"
                required>
        </div>

        <div class="row">
            <input style="width: 100%;" name="lead_business_name" id="form-business-name-mobile" type="text"
                placeholder="business name" required>
        </div>

        <div class="row">
            <textarea style="width: 100%;" name="msg" id="form-message-mobile" rows="7" cols="50"
                placeholder="message"></textarea>
        </div>

        <!-- used to get he values from the utm script -->
        <input name="utm_data" type="hidden" id="utmDataFieldTwo">

        <button onclick="getButtonId(this)" name="Footer Form" id="form-button-mobile">submit</button>
        <div id="form-disclaimer-mobile">* By clicking submit, you agree to our terms of service.</div>
    </div>
</form> 
