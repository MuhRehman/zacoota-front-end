<?php
include('header-account.php');
?>

    <div id="dashboard" style="padding-top: 80px;">

        <!-- Navigation
        ================================================== -->
        <div class="dashboard-nav">
            <div class="dashboard-nav-inner" style="max-height: 549px;">

                <ul data-submenu-title="Main">

                    <li ><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>


                    <li class="active"><a href="messages.php"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span>
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
                        <h1>Messages</h1>
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
            <div class="messages-container margin-top-0">

                <div class="inquiries-filters">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle" href="#" role="button" id="filters" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-filter" aria-hidden="true"></i>   Filters
                        </a>

                        <div class="dropdown-menu" aria-labelledby="filters" style="">
                            <a class="dropdown-item" href="#"><i class="fa fa-check" aria-hidden="true"></i> All</a>
                            <a class="dropdown-item" href="#"><i class="filter-icon fa fa-share-square" aria-hidden="true"></i> Unread</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-heart" aria-hidden="true"></i> Favorite</a>
                        </div>
                    </div>
                </div>
                <div class="messages-inbox">

                    <ul>
                        <li>
                            <a href="#">
                                <div class="message-avatar">
                                    <img src="assets/images/savings.jpg" class="avatar avatar-70 photo" width="70" height="70" alt="Tom Smith">
                                </div>

                                <div class="message-by">

                                    <div class="message-by-headline">
                                        <h5>Tom Wilson<span class="agreed">Let agreed</span>  <span class="mes_referral" style="float:none;"> Reservation for Sunny Apartment</span>																			</h5>
                                        <span>1 day</span>								</div>
                                    <p> Hello</p>
                                    <p class="rent-cancelled"><span>Rent Now Cancelled</span></p>

                                </div>
                                <span class="like-icon"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-avatar"><img src="https://listeo.pro/wp-content/uploads/2019/01/user-profile-avatar.jpg" class="avatar avatar-70 photo" width="70" height="70" alt="Tom Smith"></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>Tom Wilson  <span class="mes_referral" style="float:none;"> Sunny Apartment</span>																			</h5>
                                        <span>5 days</span>								</div>
                                    <p> jhu</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-avatar"><img src="https://listeo.pro/wp-content/uploads/2019/01/user-profile-avatar.jpg" class="avatar avatar-70 photo" width="70" height="70" alt="Tom Smith"></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>Tom Wilson  <span class="mes_referral" style="float:none;"> Reservation for Messages</span>																			</h5>
                                        <span>3 weeks</span>								</div>
                                    <p> jhjgjg</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-avatar"><img src="https://listeo.pro/wp-content/uploads/2019/01/user-profile-avatar.jpg" class="avatar avatar-70 photo" width="70" height="70" alt="Tom Smith"></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>Tom Wilson  <span class="mes_referral" style="float:none;"> Fitness Center</span>																			</h5>
                                        <span>1 month</span>								</div>
                                    <p> dsadsa</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-avatar"><img src="https://listeo.pro/wp-content/uploads/2019/01/user-profile-avatar.jpg" class="avatar avatar-70 photo" width="70" height="70" alt="Tom Smith"></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>Tom Wilson  <span class="mes_referral" style="float:none;"> Reservation for Messages</span>																			</h5>
                                        <span>1 month</span>								</div>
                                    <p>Confirmed!</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-avatar"><img src="https://listeo.pro/wp-content/uploads/2019/01/user-profile-avatar.jpg" class="avatar avatar-70 photo" width="70" height="70" alt="Tom Smith"></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>Tom Wilson  <span class="mes_referral" style="float:none;"> Reservation for Messages</span>																			</h5>
                                        <span>1 month</span>								</div>
                                    <p> Hijhsbdfsd</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="message-avatar"><img src="https://listeo.pro/wp-content/uploads/2019/01/user-profile-avatar.jpg" class="avatar avatar-70 photo" width="70" height="70" alt="Tom Smith"></div>

                                <div class="message-by">
                                    <div class="message-by-headline">
                                        <h5>Tom Wilson  <span class="mes_referral" style="float:none;"> Reservation for Messages</span>																			</h5>
                                        <span>2 months</span>								</div>
                                    <p> k\</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>


<?php
include('footer-search.php');
?>