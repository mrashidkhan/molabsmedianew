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
