<?php
include('header-account.php');
?>

    <div id="dashboard"  >

        <!-- Navigation
        ================================================== -->

        <div class="dashboard-nav">
            <div class="dashboard-nav-inner" style="max-height: 545px;">

                <ul data-submenu-title="Main">

                    <li class="active"><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>


                    <li><a href="messages.php"><i class="sl sl-icon-envelope-open"></i> Messages <span
                                    class="nav-tag messages">2</span>
                        </a>
                    </li>
                </ul>

                <ul data-submenu-title="Listings">
                    <li><a href="#"><i class="sl sl-icon-plus"></i> Add listing</a></li>

                    <li class=""><a><i class="sl sl-icon-layers"></i> My Listings</a>

                        <ul>
                            <li>
                                <a href="my-listings.php">Active
                                    <span class="nav-tag green">0</span>								</a>
                            </li>
                            <li>
                                <a href="https://listeo.pro/my-listings/?status=pending">Pending
                                    <span class="nav-tag blue">56</span>								</a>
                            </li>
                            <li>
                                <a href="https://listeo.pro/my-listings/?status=expired">
                                    Expired
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li ><a href="favourites.php"><i class="sl sl-icon-layers"></i> Favourites</a>
                    </li>




                </ul>

                <ul data-submenu-title="Account">
                    <li><a href="profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>


                    <li>
                        <a href="#"><i
                                    class="sl sl-icon-power"></i> Logout</a></li>
                </ul>

            </div>
        </div>
        <!-- Navigation / End -->

        <!-- Content
            ================================================== -->
        <div class="dashboard-content" id="post-38">
            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Howdy, Owner !</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li>Dashboard</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Content -->

        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <!--                Messaging-->
                    <div class="col-lg-12 col-md-12">
                        <div class="dashboard-list-box invoices dashboard-messages  with-icons margin-top-20">
                            <h4>Messages (0)</h4>
                            <p>You have no new messages</p>
                        </div>
                    </div>
                    <!--                listings-->
                    <div class="col-lg-12 col-md-12">
                        <div class="dashboard-list-box invoices   with-icons margin-top-20">
                            <h4>Listings (0)</h4>
                            <p>You have no listings</p>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <!--                Notifications-->
                    <div class="col-lg-12 col-md-12 notifications">
                        <div class="dashboard-list-box invoices with-icons margin-top-20">
                            <h4>Notifications</h4>
                            <p>You have no saved favourites</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        </div>
    </div>


<?php
include('footer-search.php');
?>