
<?php
include('header-search.php');
?>


<div class="row">

    <!-- Profile -->
    <div class="col-lg-12 col-md-12 profile-edit">

        <div class="profile-image">

            <div class="edit-profile-photo">
                <div class="media-photo media-round" aria-hidden="true">
                    <img src="https://fiverr-res.cloudinary.com/image/upload/t_profile_original,q_auto,f_auto/v1/attachments/profile/photo/010ba438f821bef1adbc9a4c1c349e46-1593326481250/b7015aab-e727-4bf9-aa40-9b13a326613a.jpg"
                         class="profile-pict-img" alt="sami_732">
                </div>
                <div class="upload-profile-photo">
                    <div id="avatar-uploader" class="dropzone dz-clickable">
                        <div class="text-center"><span>Upload picture</span></div>
                    </div>
                    <input class="hidden" name="core_avatar_id" type="text" id="avatar-uploader-id"
                           value="">
                </div>
            </div>
        </div>
        <h2>Edit account information</h2>
        <div class="dashboard-list-box margin-top-0">

            <form>
                <div class="dashboard-list-box-static">


                    <!-- Details -->
                    <div class="my-profile">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="first-name">First Name</label>
                                <input class="text-input" name="first-name" type="text" id="first-name"
                                       value="Owner">
                            </div>
                            <div class="col-md-6">
                                <label for="last-name">Last Name</label>
                                <input class="text-input" name="last-name" type="text" id="last-name"
                                       value="Test">
                            </div>
                            <div class="col-md-6">
                                <label for="email">E-mail</label>
                                <input class="text-input" name="email" type="text" id="email"
                                       value="owner@zacoota.com">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-code-row">
                                    <div class="form-group">
                                        <input type="hidden" name="my-account-submission" value="1">
                                        <button type="submit" disabled="disabled" form="edit_user"
                                                value="Submit"
                                                class="button margin-top-20 margin-bottom-20">Save Changes
                                        </button>
                                    </div>
                                    <div class="change-pass-btn">
                                        <a id="change-pass" class="btn">Change Password
                                        </a>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>


                </div>
            </form>
        </div>

    </div>

    <!-- Change Password -->
    <div class="col-lg-12 col-md-12 change-password-row">

        <div class="dashboard-list-box margin-top-0">
            <h2>Change Password</h2>
            <div class="dashboard-list-box-static">

                <!-- Change Password -->
                <div class="my-profile">
                    <!--                                <div class="row">-->
                    <!--                                    <div class="col-md-12">-->
                    <!--                                        <div class="notification notice margin-top-0 margin-bottom-0">-->
                    <!--                                            <p>Your password should be at least 12 random characters long to be safe</p>-->
                    <!--                                        </div>-->
                    <!--                                    </div>-->
                    <!--                                </div>-->

                    <form>
                        <label>Current Password</label>
                        <input type="password" name="current_pass">

                        <label for="pass1">New Password</label>
                        <input name="pass1" type="password">

                        <label for="pass2">Confirm New Password</label>
                        <input name="pass2" type="password">
                        <button class="button save-pass margin-top-15">Change Password</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 profile-verify  mt-5">
        <h2>Verify Details</h2>
        <div class="dashboard-list-box margin-top-0">

            <form>
                <div class="dashboard-list-box-static">

                    <!-- Verify Details -->
                    <div class="verify-profile">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <button class="btn" type="submit">Send Code</button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include('footer-search.php');
?>