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
                        <h1>My Tenancies</h1>
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
                        <p>This page will show you any Rent Now tenancies you are involved with, and their current
                            status.</p>
                        <p>Once a Rent Now tenancy is active, you can view the contract, republish your property, and
                            interact with your tenants via the respective tenancy screen.</p>
                    </div>
                    <div class="messages-inbox">
                        <ul>
                            <li>
                                <div class="flex">
                                    <div class="image">
                                        <img src="assets/images/savings-card.jpg" class="img-fluid"
                                             alt="porperty iamge">
                                    </div>
                                    <div class="content">

                                        <h3><a href="#">99 Huxley Road, London</a></h3>

                                        <!--                                      <p><b>Id:</b>1004425</p>-->
                                        <!--                                      <p><b>status:</b>Listing has a deposit accepted</p>-->

                                        <ul class="list-inline">
                                            <li class="list-inline-item"><span>Ref:</span> 1808930256</li>
                                            <li class="list-inline-item"><span>Status:</span> Listing has a deposit
                                                accepted
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="view-application">
                                        <p><span>Monthly Rent:</span> £100.00</p>
                                        <a href="#" class="btn" data-toggle="modal" data-target="#tenant-tenancy">
                                            View Application
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>

    <!--tenant tenancy detail modal-->
    <div class="modal right fade tenancy-modal" id="tenant-tenancy" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Manage your property</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="my-tenancies">
                        <div class="head">
                            <h2>Being a tenant has never been easier!</h2>
                            <p>Here you can manage your relationship with the landlord, other housemates, and keep a
                                record of all your important documents.</p>
                        </div>
                        <!--    Tenancy surrender  -->
                        <div class="content-wrap mb-4">
                            <div class="content bg-war">
                                <h2>Tenancy surrender</h2>
                                <p>We have been informed by the landlord that this tenancy is no longer proceeding and
                                    they have asked us to release the funds that we currently hold.</p>
                                <a href="#" class="message"> Message Landlord</a>
                            </div>
                            <div class="content bg-war">
                                <div class="surrender-breakdown">
                                    <h6>We have received a total of £24.00 to date: </h6>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>Holding Deposit paid by Johan Joe</td>
                                            <td> £24.00</td>
                                        </tr>


                                        <tr>
                                            <td>
                                                Total
                                            </td>
                                            <td>
                                                £24.00
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="surrender-breakdown">
                                    <h6>The money was apportioned as follows:</h6>
                                    <table class="table">

                                        <tbody>
                                        <tr>
                                            <td>
                                                Rent - held in Zacoota Client Money account
                                            </td>
                                            <td>
                                                £24.00
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                Total
                                            </td>
                                            <td>
                                                £24.00
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <p><b>We intend to repay the tenant(s) the £24.00 currently held in our Client Money
                                        account.</b></p>

                                <p>We do not accept further funds relating to this tenancy. If further payments were
                                    made after the surrender, these will be refunded to the payee.</p>
                                <p>
                                    Please note that releasing the funds does not in itself surrender the tenancy. You
                                    should have signed a <a href="/blog/surrendering-tenancy-agreement-mutual-consent"
                                                            target="_blank">Deed of Surrender</a> to end the tenancy.
                                </p>
                                <p>You should take independent legal advice if you are unsure whether or not to
                                    surrender the tenancy, or how to do so. By using this service, you agree that
                                    OpenRent holds no liability for any problems arising in connection with this tenancy
                                    or the process of surrendering it.</p>
                                <p>The following parties have agreed to the terms of this surrender:</p>
                                <table class="table">

                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Mark Otto
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Sam Malik
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>We are still awaiting for the following parties to agree to the terms of the
                                    surrender:</p>

                                <table class="table">

                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Mark Otto
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Sam Malik
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="btn-confirm">I confirm that this tenancy is being surrendered</a>
                            </div>
                        </div>
                        <div class="content-wrap flex">
                            <div class="div-left">
                                <!--     when contract started                       -->
                                <div class="content">
                                    <div class="info">
                                        <h2>Contract signing not yet complete:</h2>
                                        <p>This contract is not yet in effect. You can click here to review it. Feel
                                            free to message the landlord below to discuss the specifics of the contract
                                            and request any changes. </p>
                                    </div>
                                </div>
                                <!--     when contract change  request          -->
                                <div class="content">
                                    <div class="info">
                                        <h2>Contract Change</h2>
                                        <p>A change has been proposed by the landlord for this contract.</p>
                                        <a href="#" class="btn" data-toggle="modal"
                                           data-target="#tenant-change-contract">
                                            View Contract Change
                                        </a>
                                    </div>
                                </div>
                                <!--     when referencing started                       -->
                                <div class="content">
                                    <h3>Congrats! You are currently in the process of completing the application to rent
                                        this property.</h3>
                                    <p class="status">Current Status: Tenants undergoing credit check</p>
                                </div>
                                <div class="housemates content">
                                    <h3>My Housemates</h3>
                                    <table class="table">

                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="name">
                                                    Mark Otto
                                                </div>
                                                oneday2144@gmail.com
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="name">
                                                    Sam Malik
                                                </div>
                                                sammalik65144@gmail.com
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
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="name">
                                                    Zakk jordan <span> (Guarantor for sam malik)</span>
                                                </div>
                                                oneday2144@gmail.com
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

                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="name">
                                                    Nasim akhtar
                                                </div>
                                            </td>
                                            <td>
                                               <span class="send-message">
                                                    <a href="#">Send message</a>
                                               </span>
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

                                </div>
                            </div>
                            <div class="div-right">
                                <div class="property-details">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/images/savings-card.jpg" class="img-fluid"
                                                 alt="property image">
                                        </a>
                                    </div>
                                    <div class="discretion">
                                        <h6><a href="#">2 Beds Room In A Shared Flat</a></h6>
                                        <p> 99 Huxley Road, London</p>
                                    </div>
                                    <div class="action-btn">
                                        <a href="#" class="btn btn-1">
                                            View Application
                                        </a>
                                        <!--    when referencing started          -->
                                        <a href="#" class="btn btn-1">
                                            View Ongoing References Status
                                        </a>
                                        <a href="#" class="btn btn-3" <a href="#" class="btn" data-toggle="modal"
                                                                         data-target="#cancel-deposit">
                                            See cancel options
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="content-wrap mt-4">
                            <div class="contract content">
                                <h3>The Contract</h3>
                                <p>Zacoota makes your contract available for viewing anywhere, anytime </p>
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
                                            £20.00 (protected by mydeposits)<br>
                                            <a href="#" class="btn-1">View Deposit Scheme Information</a>
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
                                            <a href="#" class="btn-1">See status / download preview</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="rent-payment content">
                                <h3>Rent Payments</h3>
                                <p>Rent must be paid to the landlord by the 20th day of each month.</p>
                                <p>We will provide full details of the landlord's account to send rent payments from the
                                    second rent period onwards once the transaction is complete. Untill then, please
                                    continue with the instructions as part of the Rent Now process - Zacoota will
                                    process the deposit and first month's rent payment.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Contract Change modal-->
    <div class="modal right fade tenancy-modal " id="tenant-change-contract" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Contract Change</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="my-tenancies">
                        <div class="content-wrap flex">
                            <div class="div-left">
                                <div class="content change-option">
                                    <h3>Contract Change</h3>
                                    <p>Your landlord has proposed the following change to the contract:</p>
                                    <p class="proposed-changes"><b> changing move-in date</b></p>
                                    <p>You should also consider the following:</p>
                                    <ul>
                                        <li>You may wish to consider signing a surrender to annul the original signed
                                            contract, to avoid potential future confusion from having multiple contracts
                                            in force. We provide guidance on this <a
                                                    href="/kb/articles/360019667452-how-do-i-cancel-a-signed-tenancy">here</a>.
                                        </li>

                                    </ul>
                                    <p>You are agreeing to this change on behalf of any other tenants/guarantors on your
                                        application. If you accept this change, the contract will be reset and the
                                        landlord can apply any changes to the contract. Everyone will then be asked to
                                        sign the updated contract, please ensure that the contract is updated as
                                        agreed.</p>
                                </div>
                                <div class="content">
                                    <div class="actions flex ml-auto">
                                        <a href="javascript:void(0)" class="btn-1">accept</a>
                                        <a href="javascript:void(0)" class="btn-3">reject</a>
                                    </div>
                                </div>
                            </div>
                            <div class="div-right">
                                <div class="property-details">
                                    <div class="image">
                                        <a href="#">
                                            <img src="assets/images/savings-card.jpg" class="img-fluid"
                                                 alt="property iamge">
                                        </a>
                                    </div>
                                    <div class="discretion">
                                        <h6><a href="#">Shared House,</a></h6>
                                        <p> 9 Sewell Road, , Bradford, BD3 9TD</p>
                                    </div>
                                    <div class="action-btn">
                                        <a href="#" class="btn btn-4">
                                            Message landlord
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--tenant cancel deposit modal-->
    <div class="modal fade custom-modal" id="cancel-deposit" tabindex="-1" role="dialog" style="display: none;"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Cancel Options</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="font-size: 24px;padding: 10px;">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="cancel-deposit">
                        <p>You have placed a holding deposit on this property - as such, cancelling or pulling out of
                            the tenancy at this stage will result in you losing your holding deposit.</p>
                        <p>Zacoota will pass on this holding deposit to the landlord in order to partly compensate them
                            for the time lost in this application so far.</p>
                        <p>
                            Please refer to our <a href="/terms#holdingdeposits">holding deposit terms and
                                conditions</a> which you agreed to before placing your deposit for more information.
                        </p>
                        <div class="form-check p-0">
                            <input type="checkbox" class="form-check-input" id="agreetocancel">
                            <label for="agreetocancel">
                                I understand the £24 holding deposit will be passed to the landlord
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="cancel">Forfeit Holding Deposit and Cancel Rent Now</a>
                </div>

            </div>
        </div>
    </div>

<?php
include('footer-search.php');
?>