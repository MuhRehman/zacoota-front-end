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
                    <li><a href="profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>

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
                <!-- Change Password -->
                <div class="change-password">
                    <h2>Change Password</h2>
                    <form>
                        <div class="form-group ">
                            <label for="cur-password" class="form-label">Current Password</label>
                            <input type="password" class="form-control" id="cur-password">
                        </div>
                        <div class="form-group">
                            <label for="new-password" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="new-password">
                        </div>
                        <div class="form-group ">
                            <label for="con-password" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" id="con-password">
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="javascript:void(0)" class="btn change-pass">Change Password</a>
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