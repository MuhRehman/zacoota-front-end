<?php
include('header-account.php');
?>


    <div id="dashboard">

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


                    </li>
                </ul>

                <ul data-submenu-title="Listings">
                    <li><a href="#"><i class="sl sl-icon-plus"></i> Add listing</a></li>

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

            <section class="upgrade-service p-0">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="headline">Choose a service</h3>

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-4">
                        <div class="upgrade-service-card tenant-find">
                            <div class="upgrade-service-head">
                                <h4>Tenant find</h4>
                            </div>
                            <div class="upgrade-service-body">
                                <ul>
                                    <li>
                                        Advertise your property on the UK's largest landlord and tenant finding  website
                                    </li>
                                    <li>Receive instant enquiries and viewing requests from tenants 24/7, completely FREE</li>
                                    <li>List your property on Rightmove, Zoopla, PrimeLocation & many more portals (average time to let is 6 days).</li>
                                    <li>Benefit from a Complete Rental option which includes...</li>
                                    <li>A professional grade tenancy sign up service with drafting of contracts and digital signatures</li>

                                    <li>First month's rent collection from the tenants ensuring the amount is paid in full</li>
                                    <li>Collection & registration of the deposit on your behalf keeping you well ahead of any legal requirements for deposits</li>
                                </ul>
                            </div>
                            <div class="upgrade-service-btn">
                                <a href="#">Select</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="upgrade-service-card property-management">
                            <div class="upgrade-service-head ">
                                <h4>Property management</h4>
                            </div>
                            <div class="upgrade-service-body">
                                <ul>
                                    <li>
                                        <b class="in_short">Everything from Tenant Find</b>
                                        Enjoy all the benefits and features from the Tenant find Complete Rental ad, plus...
                                    </li>
                                    <li>
                                        <b class="in_short">Rent your property faster</b>
                                        Our Virtual Tour & InstaRent feature allows tenants to explore new homes and instantly reserve a property online
                                    </li>
                                    <li>
                                        <b class="in_short">Pay low fees</b> NO monthly commissions
                                        just a simple flat fee
                                        of £35 per month
                                        nationwide
                                    </li>
                                    <li>
                                        <b class="in_short"> Get paid quickly</b>
                                        Zacoota does not have a 'payments holding period'. All payments are released instantly to landlords the same working day.
                                    </li>
                                    <li>
                                        <b class="in_short">Complete end to end management. </b>
                                        Full service management from finding you great tenants, rent collections, nationwide maintenance management, to digitally signing of all contracts and anything else in between. We will manage the whole letting process for you
                                    </li>
                                </ul>
                            </div>
                            <div class="upgrade-service-btn">
                                <a href="#">Select</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </section>
        </div>
    </div>


<?php
include('footer-search.php');
?>