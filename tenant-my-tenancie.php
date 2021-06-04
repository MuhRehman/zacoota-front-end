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


                    <li ><a href="messages.php"><i class="sl sl-icon-envelope-open"></i> Messages <span class="nav-tag messages">2</span>
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
                        <h1>Manage your property</h1>
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
                <div class="my-tenancies">
                    <div class="head">
                        <h2>Being a tenant has never been easier!</h2>
                        <p>Here you can manage your relationship with the landlord, other housemates, and keep a record of all your important documents.</p>
                    </div>
                    <div class="content-wrap">
                        <div class=""
                        <div class="property-details content">
                            <div class="inner">
                                <div class="flex">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/images/savings-card.jpg" class="img-fluid" alt="property iamge">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h6><a href="#">2 Beds Room In A Shared Flat</a></h6>
                                        <p> 99 Huxley Road, London</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="info">
                                <h3>Contract signing not yet complete:</h3>
                                <p>This contract is not yet in effect. You can click here to review it. Feel free to message the landlord below to discuss the specifics of the contract and request any changes. </p>
                            </div>
                        </div>
                        <div class="housemates content">
                            <h3>My Housemates</h3>
                            <table class="table desktop-view">
                                <thead>
                                <tr>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col"> Phone</th>
                                    <th scope="col">Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>+447932107444</td>
                                    <td>oneday2144@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Sam</td>
                                    <td>Malik</td>
                                    <td>+447932107444</td>
                                    <td>oneday2144@gmail.com</td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table mobile-view" style="display:none;">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>Mark ott</span>
                                        oneday2144@gmail.com - +447932107444

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Sam Malik</span>
                                        oneday2144@gmail.com - +447932107444

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="email_send">
                                <a class="btn send-mail" href="mailto:tenantname@gmail.com">
                                     Send Email To All Parties
                                </a>
                            </div>
                        </div>
                        <div class="guarantors content">
                            <h3>Guarantors</h3>
                            <table class="table desktop-view">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col"> Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Guarantors For</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Zakk</td>
                                    <td>+447932107444</td>
                                    <td>oneday2144@gmail.com</td>
                                    <td>Sam</td>
                                </tr>

                                </tbody>
                            </table>
                            <table class="table mobile-view " style="display: none">
                                <tbody>
                                <tr>
                                    <td><span>Zaki shah - (Guarantor For Sam Malik)</span>
                                        oneday2144@gmail.com - +447932107444
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="email_send">
                                <a class="btn send-mail" href="mailto:tenantname@gmail.com">
                                    Send Email To All Parties
                                </a>
                            </div>

                        </div>
                        <div class="landlord content">
                            <h3>My Landlord</h3>
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col"> Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="name">
                                            Nasim akhtar
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">Send message</a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>


                        </div>
                        <div class="co-signator content">
                            <h3>landlord Co-signatories</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col"> Phone</th>
                                    <th scope="col">Email</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="name">
                                            Muhammad ALi
                                        </div>
                                    </td>
                                    <td>(Hidden until Contact Signed)</td>
                                    <td>(Hidden until Contact Signed)</td>

                                </tr>

                                </tbody>
                            </table>

                            <div class="email_send">
                                <a class="btn send-mail" href="mailto:tenantname@gmail.com">
                                    Send Email To All Parties
                                </a>
                            </div>

                        </div>
                        <div class="contract content">
                            <h3>The Contract</h3>
                            <p>Zacoota makes your contract available for viewing anywhere, anytime   </p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>
                                            Start Date
                                        </td>
                                        <td>
                                           20 February 2021
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Rent Per Month
                                        </td>
                                        <td>
                                            £101.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Deposit
                                        </td>
                                        <td>
                                            £20.00 (protected by mydeposits)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Fixed Term Length
                                        </td>
                                        <td>
                                            6 Months
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Break Clause
                                        </td>
                                        <td>
                                            Break clause can be activated after 4 months
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Contract Not Yet Signed
                                        </td>
                                        <td>
                                            <a href="#">See status / download preview</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="rent-payment content">
                            <h3>Rent payments</h3>
                            <p>Rent must be paid to the landlord by the 20th day of each month.</p>
                            <p>We will provide full details of the landlord's account to send rent payments from the second rent period onwards once the transaction is complete. Untill then, please continue with the instructions as part of the Rent Now process - Zacoota will process the deposit and first month's rent payment.</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>


<?php
include('footer-search.php');
?>