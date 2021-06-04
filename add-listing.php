<?php
include('header-account.php');
?>

    <div id="dashboard"  >

        <!-- Navigation
        ================================================== -->



        <div class="dashboard-nav">
            <div class="dashboard-nav-inner" style="max-height: 545px;">

                <ul data-submenu-title="Main">

                    <li ><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>


                    <li><a href="messages.php"><i class="sl sl-icon-envelope-open"></i> Messages <span
                                class="nav-tag messages">2</span>
                        </a>
                    </li>


                    </li>
                </ul>

                <ul data-submenu-title="Listings">
                    <li class="active"><a href="add-listing.php"><i class="sl sl-icon-plus"></i> Add listing</a></li>

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
                        <h2>Add Listing</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Add listing</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Notice -->
            <!--  -->

            <!-- Content -->

        <div class="add-listing-wrap">
            <a class="add-listing-optins">
                <div class="icon">
                    <img src="assets/images/listing-item-01.png" class="img-fluid">
                </div>
                <div clas="text">
                    <h3>Tenant find</h3>
                    <p></p>
                </div>
                <div class="button">

                </div>
            </a>

        </div>






        </div>
    </div>


<?php
include('footer-search.php');
?>