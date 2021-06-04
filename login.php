<?php
include('header.php');
?>
<section class="login-section">
    <div class="container">
        <div class="inner">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="signin-tab2" data-toggle="tab" href="#signin2" role="tab"
                       aria-controls="home" aria-selected="true">login </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="signup-tab2" data-toggle="tab" href="#signup2" role="tab"
                       aria-controls="profile" aria-selected="false">Sign up</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="signin2" role="tabpanel"
                     aria-labelledby="signin-tab">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username"
                                           placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="Password"
                                           placeholder="Password">
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                                        <span class="lost_password">
                                                            <a href="#" data-toggle="modal" data-target="#forget-pass"
                                                               class="sign-in">Forgot password?</a>
									                     </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <button class="btn  login-btn" disabled="">Log in</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="sign-up-btns-option">
                                    <p>or</p>
                                </div>
                                <div class="others">
                                    <button class="btn google-signin"><img src="assets/images/google-icon.png" class="img-fluid">Continue with Google</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="signup2" role="tabpanel" aria-labelledby="signup-tab">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="first_name"
                                           placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="last_name" placeholder="Last name">
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <input type="number" class="form-control" id="user_number"
                                   placeholder="Contact number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="user_email"
                                   placeholder="Email address">
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" id="user_pass"
                                   placeholder="Choose a password">
                        </div>
                        <div class="signin-terms">
                            <p>By proceeding with the Zacoota signing up process, you agree to our <a href="#">terms of
                                    use</a> of use and <a href="#">privacy policy</a> .</p>
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
                                    <button class="btn google-signin"><img src="assets/images/google-icon.png" class="img-fluid">Continue with Google</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ">
                                    <button class="btn yahoo-signin"><img src="assets/images/yahoo.icon.png" class="img-fluid">Continue with Yahoo</button>
                                </div>
                            </div>
<!--                            <div class="row">-->
<!--                                <div class="col-12 ">-->
<!--                                    <button class="btn apple-signin">Continue with Apple</button>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!--    <div id="sign-in-dialog" class="zoom-anim-dialog">-->
    <!---->
    <!--        <div class="small-dialog-header text-center">-->
    <!--            <h3>Log in</h3>-->
    <!--        </div>-->
    <!--        <div class="sign-in-form style-1">-->
    <!--            <form>-->
    <!--                <div class="form-group">-->
    <!---->
    <!--                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter email">-->
    <!--                </div>-->
    <!--                <div class="form-group">-->
    <!---->
    <!--                    <input type="password" class="form-control" id="Password" placeholder="Password">-->
    <!--                </div>-->
    <!---->
    <!--                <button type="submit" class="btn btn-primary login-btn" disabled="">Log in</button>-->
    <!--                <div class="form-check">-->
    <!--                    <input type="checkbox" class="form-check-input" id="remember-me">-->
    <!--                    <label class="form-check-label remember-me" for="remember-me">Remember me</label>-->
    <!--                </div>-->
    <!--                <div class="form-group">-->
    <!--                                        <span class="lost_password">-->
    <!--                                            <a href="#reset-pass-dialog" class="sign-in popup-with-zoom-anim">Forgot your password?</a>-->
    <!--									</span>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col-12 ">-->
    <!--                        <button class="btn google-signin">Continue with Google</button>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--              <div class="register-btn">-->
    <!--                  <div class="row">-->
    <!--                      <div class="col-12">-->
    <!--                          <p>Don't have an account yet?-->
    <!--                              <a href="register.php"> Create an account</a> </p>-->
    <!--                      </div>-->
    <!--                  </div>-->
    <!--              </div>-->
    <!---->
    <!--            </form>-->
    <!--        </div>-->

</section>

<?php
include('footer.php');
?>
