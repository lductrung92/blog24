<div id=td-mobile-nav>
    {{--Login page--}}
    <div id=login-form-mobile class=td-register-section>
        <div id=td-login-mob class="td-login-animation td-login-hide-mob">
            <div class=td-login-close>
                <a href="#" class=td-back-button><i class=td-icon-read-down></i></a>
                <div class=td-login-title>Sign in</div>
                <div class=td-mobile-close>
                    <a href="#"><i class=td-icon-close-mobile></i></a>
                </div>
            </div>
            <div class=td-login-form-wrap>
                <div class=td-login-panel-title><span>Welcome!</span>Log into your account</div>
                <div class=td_display_err></div>
                <div class=td-login-inputs>
                    <input class=td-login-input type=text name=login_email id=login_email-mob
                                                  value="" required>
                    <label>your username</label></div>
                <div class=td-login-inputs>
                    <input class=td-login-input type=password name=login_pass id=login_pass-mob
                                                  value="" required>
                    <label>your password</label></div>
                    <input type=button name=login_button id=login_button-mob class=td-login-button value="LOG IN">
                <div class=td-login-info-text><a href="#" id=forgot-pass-link-mob>Forgot your password?</a></div>
            </div>
        </div>
        <div id=td-forgot-pass-mob class="td-login-animation td-login-hide-mob">
            <div class=td-forgot-pass-close>
                <a href="#" class=td-back-button><i class=td-icon-read-down></i></a>
                <div class=td-login-title>Password recovery</div>
            </div>
            <div class=td-login-form-wrap>
                <div class=td-login-panel-title>Recover your password</div>
                <div class=td_display_err></div>
                <div class=td-login-inputs><input class=td-login-input type=text name=forgot_email id=forgot_email-mob
                                                  value="" required><label>your email</label></div>
                <input type=button name=forgot_button id=forgot_button-mob class=td-login-button value="Send My Pass">
            </div>
        </div>
    </div>
</div>