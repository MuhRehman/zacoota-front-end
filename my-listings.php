<?php
include('header-account.php');
?>

    <div id="dashboard" style="padding-top: 80px;">

        <!-- Navigation
        ================================================== -->



        <div class="dashboard-nav">
            <div class="dashboard-nav-inner" style="max-height: 545px;">

                <ul data-submenu-title="Main">

                    <li><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>


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
                                    <span class="nav-tag green">0</span>								</a>
                            </li>
                            <li>
                                <a href="https://listeo.pro/my-listings/?status=pending">Inactive
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
        <div class="dashboard-content my-listings" id="post-41">
            <!-- Titlebar -->
            <div id="titlebar">
                <div class="row">
                    <div class="col-md-12">
                        <h1>My Properties</h1>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>My Listings</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 ">
                    <div class="notification notice margin-bottom-20">
                        <p>You haven't submitted any listings yet, you can add your first one </p>
                        <a href="page-one.php" class="addlisting-button"><i class="sl sl-icon-plus"></i> Add
                            Listing</a>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 mb-5">
                    <h2>Properties (Active)</h2>
                    <p>This is a list of properties that you've previously advertised with us, or that are ready to be
                        published.</p>
                    <div class="dashboard-list-box margin-top-0">

                        <ul>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="preview.php"> <img
                                                    src="assets/images/listing-item-01.png" class="img-fluid"></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3><a href="#">964 School Street, New York</a></h3>
                                            <h4>Detached House</h4>
                                            <ul class="list-inline" style="max-height: 531.25px;">
                                                <li class="list-inline-item"><span>Ref:</span> 1808930256</li>
                                                <li class="list-inline-item"><span>Status:</span> Active
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button "> Edit</a>
                                    <a href="#" class="button "> Remove</a>
                                </div>
                            </li>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="preview.php"> <img
                                                    src="assets/images/listing-item-01.png" class="img-fluid"></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3><a href="#">964 School Street, New York</a></h3>
                                            <h4>Detached House</h4>
                                            <ul class="list-inline" style="max-height: 531.25px;">
                                                <li class="list-inline-item"><span>Ref:</span> 1808930256</li>
                                                <li class="list-inline-item"><span>Status:</span> Listing hasn't been
                                                    published
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button "> Edit</a>
                                    <a href="#" class="button ">Remove</a>
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <h2>Properties (unpublished)</h2>
                    <p>This is a list of properties that you've previously advertised with us, or that are ready to be
                        published.</p>
                    <div class="dashboard-list-box margin-top-0">

                        <ul>


                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="preview.php"> <img
                                                    src="assets/images/listing-item-01.png" class="img-fluid"></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3><a href="#">964 School Street, New York</a></h3>
                                            <h4>Detached House</h4>
                                            <ul class="list-inline" style="max-height: 531.25px;">
                                                <li class="list-inline-item"><span>Ref:</span> 1808930256</li>
                                                <li class="list-inline-item"><span>Status:</span> Pending approval/processing
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button "> Edit</a>
                                    <a href="#" class="button "> Remove</a>
                                </div>
                            </li>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="preview.php"> <img
                                                    src="assets/images/listing-item-01.png" class="img-fluid"></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3><a href="#">964 School Street, New York</a></h3>
                                            <h4>Detached House</h4>
                                            <ul class="list-inline" style="max-height: 531.25px;">
                                                <li class="list-inline-item"><span>Ref:</span> 1808930256</li>
                                                <li class="list-inline-item"><span>Status:</span> Pending approval/processing
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button "> Edit</a>
                                    <a href="#" class="button "> Remove</a>
                                </div>
                            </li>

                            <li>
                                <div class="list-box-listing">
                                    <div class="list-box-listing-img"><a href="preview.php"> <img
                                                    src="assets/images/listing-item-01.png" class="img-fluid"></a></div>
                                    <div class="list-box-listing-content">
                                        <div class="inner">
                                            <h3><a href="#">964 School Street, New York</a></h3>
                                            <h4>Detached House</h4>
                                            <ul class="list-inline" style="max-height: 531.25px;">
                                                <li class="list-inline-item"><span>Ref:</span> 1808930256</li>
                                                <li class="list-inline-item"><span>Status:</span> Pending approval/processing
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons-to-right">
                                    <a href="#" class="button "> Edit</a>
                                    <a href="#" class="button "> Remove</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>


<?php
include('footer-search.php');
?>