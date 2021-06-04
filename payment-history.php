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
                    <li><a href="payment-history.php"><i class="fa fa-history" aria-hidden="true"></i> Transaction
                            history</a></li>

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
                        <h2>Transaction History</h2>
                        <!-- Breadcrumbs -->
                        <nav id="breadcrumbs">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Dashboard</a></li>
                                <li>Transaction history</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Content -->

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="dashboard-list-box invoices with-icons margin-top-20">
                        <h4>Transaction history</h4>
                        <p>History of payments made to Zacoota. Download a pdf copy of the receipt by clicking the
                            download button next to each entry.</p>
                        <div class="payment-history-date">
                            <div class="form-group">
                                <label for="">From </label>
                                <input id="start_date" type="date" required/>
                            </div>
                            <div class="form-group">
                                <label for="">To: </label><br>
                                <input id="end_date" type="date" required/>
                            </div>
                            <div class="date-update-btn">
                                <button class="btn" >Update</button>
                            </div>
                        </div>
                        <table class="table table-bordered payment-history-table">
                            <thead>
                            <tr>
                                <th>Date Paid</th>
                                <th>Description</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>20-10-2020</td>
                                <td><a href="#">Full Management</a> </td>
                                <td>£49</td>
                            </tr>
                            <tr>
                                <td>20-10-2020</td>
                                <td><a href="#">Gas safety</a> </td>
                                <td>£49</td>
                            </tr>
                            <tr>
                                <td>20-10-2020</td>
                                <td><a href="#">EPC</a> </td>
                                <td>£49</td>
                            </tr>


                            </tbody>

                        </table>
                        <div class="text-center mt-5">
                            <h4>No record found</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include('footer-search.php');
?>