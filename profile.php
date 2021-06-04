<?php
include('header-account.php');
?>

    <div id="dashboard" style="padding-top: 80px;">

        <!-- Navigation
        ================================================== -->


        <div class="dashboard-nav">
            <div class="dashboard-nav-inner" style="max-height: 545px;">

                <ul data-submenu-title="Main">

                    <li class=""><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>


                    <li><a href="messages.php"><i class="sl sl-icon-envelope-open"></i> Messages <span
                                    class="nav-tag messages">2</span>
                        </a>
                    </li>


                    </li>
                </ul>

                <ul data-submenu-title="Listings">
                    <li><a href="#"><i class="sl sl-icon-plus"></i> Add Listing</a></li>

                    <li class=""><a><i class="sl sl-icon-layers"></i> My Listings</a>

                        <ul>
                            <li>
                                <a href="my-listings.php">Active
                                    <span class="nav-tag green">0</span> </a>
                            </li>
                            <li>
                                <a href="https://listeo.pro/my-listings/?status=pending">Pending
                                    <span class="nav-tag blue">56</span> </a>
                            </li>
                            <li>
                                <a href="https://listeo.pro/my-listings/?status=expired">
                                    Expired
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="favourites.php"><i class="sl sl-icon-layers"></i> Favourites</a>
                    </li>


                </ul>

                <ul data-submenu-title="Account">
                    <li><a href="profile.php"><i class="sl sl-icon-user"></i> Edit Profile</a></li>
                    <li><a href="verify-details.php"><i class="sl sl-icon-user"></i>Verify Details</a></li>

                    <li>
                        <a href="#"><i
                                    class="sl sl-icon-power"></i> Logout</a></li>
                </ul>

            </div>
        </div>
        <!-- Navigation / End -->

        <!-- Content
            ================================================== -->
        <div class="dashboard-content profile-wrap" id="post-45">
            <div class="profile-inner">
                <!-- profile image -->
                <div class="profile-image">
                    <div class="edit-profile-photo">
                       <div class="flex">
                           <div class="media-photo media-round" aria-hidden="true">
                               <img src="assets/images/home-slider-6.jpg" class="profile-pict-img" alt="sami_732">
                           </div>
                           <div class="details">
                               <h6>Sam malik</h6>
                               <p>sammalik@gmail.com</p>
                           </div>
                       </div>
                        <div class="upload-profile-photo">
                            <div id="avatar-uploader" class="dropzone dz-clickable">
                                <div class="text-center"><span><i class="fas fa-pencil-alt"></i></span></div>
                            </div>
                            <input class="hidden" name="core_avatar_id" type="text" id="avatar-uploader-id"
                                   value="">
                        </div>
                    </div>
                </div>
                <!-- profile Details -->
                <div class="profile-details">
                    <h2>User details</h2>
                    <form>
                        <div class="my-profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <label for="first-name" class="form-label">First Name</label>
                                        <input class="form-control" name="first-name" type="text" id="first-name"
                                               value="Owner">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="last-name" class="form-label">Last Name</label>
                                        <input class="form-control" name="last-name" type="text" id="last-name"
                                               value="Test">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input class="form-control" name="email" type="text" id="email"
                                               value="owner@zacoota.com">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <a href="javascript:void(0)" form="edit_user" value="Submit"
                                       class="btn btn-save">Save Changes
                                    </a>

                                </div>

                            </div>


                        </div>
                    </form>
                </div>
                <!-- Change Password -->
                <div class="change-password mt-4">
                    <h2>Change Password</h2>
                   <p>You can change your password by clicking <a href="#">here.</a> </p>
                </div>
                <!-- verify details -->
                <div class="verify-details mt-4">
                    <h2>Add or Edit Phone Numbers</h2>
                    <p>We will verify your telephone number by sending a code via text message. If you provide a landline, we will call your landline number and the code will be read out. You will then be asked to enter that code on this page.</p>
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="uk-num" class="form-label">UK Primary Number</label>
                                    <input type="password" class="form-control" id="uk-num">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="javascript:void(0)" class="btn change-pass">Send code</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
include('footer-search.php');
?>