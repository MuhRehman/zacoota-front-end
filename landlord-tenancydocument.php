
<?php
include('header-account.php');
?>

<div id="dashboard" style="padding-top: 80px;">

    <!-- Navigation
    ================================================== -->
    <div class="dashboard-nav">
        <div class="dashboard-nav-inner" style="max-height: 549px;">

            <ul data-submenu-title="Main">

                <li><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>


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
                <li class="active"><a href="#"><i class="sl sl-icon-layers"></i> My Tenancies</a></li>
                <li><a href="favourites.php"><i class="sl sl-icon-layers"></i> Favourites</a>
                </li>
            </ul>

            <ul data-submenu-title="Account">
                <li><a href="profile.php"><i class="sl sl-icon-user"></i> My Profile</a></li>


                <li>
                    <a href="#"><i class="sl sl-icon-power"></i> Logout</a></li>
            </ul>

        </div>
    </div>
    <!-- Navigation / End -->

    <!-- Content
        ================================================== -->
    <div class="dashboard-content" id="post-39">
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h1>Tenancy Documents</h1>

                </div>
            </div>
        </div>
        <div class="messages-container margin-top-0">
            <div class="my-tenancies-doc">
                <div class="head">
                    <p>Here you can share important documents like epc, gas safety certificates with your tenants.</p>

                </div>
            </div>
        </div>

        <div class="clearfix"></div>

    </div>
</div>


<?php
include('footer-search.php');
?>