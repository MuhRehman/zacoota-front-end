<?php
include('header.php');
?>

<section class="register-section">
    <div id="sign-up-dialog" class="zoom-anim-dialog">

        <div class="small-dialog-header text-center">
            <h3>Sign Up</h3>
        </div>
        <div class="user-type mt-3 mb-4 text-center" >
            <div class="are-you  ">
                <p>I am a</p>
            </div>
            <div class="form-group" style="margin-bottom:30px ">
                <a href="#" class="sign-in  landlord-btn">Landlord</a>
            </div>
            <div class="form-group">
                <a href="#" class="sign-in  landlord-btn">Tenant</a>
            </div>

        </div>
        <!--Tabs -->
        <div class="sign-up-form style-1" style="display: none">

            <div class="tabs-container alt">

                <!-- Register -->
                <div class="tab-content" id="tab2">
                    <form>
                        <div class="form-group">

                            <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="First name">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Last name">
                        </div>
                        <div class="form-group">

                            <input type="number" class="form-control" id="user_number" aria-describedby="emailHelp" placeholder="Contact number">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="user_email" aria-describedby="emailHelp" placeholder="Email address">
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="user_pass" aria-describedby="emailHelp" placeholder="Choose a password">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="sign-up-terms">
                            <label class="form-check-label" for="sign-up-terms">terms and conditions</label>
                        </div>
                        <div class="form-group">
                            <button class="btn sign-up-btn">Sign up</button>
                        </div>
                        <div class="sign-up-btns">
                            <div class="sign-up-btns-option">
                                <p>or</p>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <button class="btn google-signin">Continue with Google</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <button class="btn facebook-signin">Continue with Facebook</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <button class="btn apple-signin">Continue with Apple</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <button title="Close (Esc)" type="button" class="mfp-close"></button></div>
</section>

<?php
include('footer.php');
?>
