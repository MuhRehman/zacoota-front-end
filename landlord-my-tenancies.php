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
                        <h1>Manage your Rent Now Tenancies</h1>
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
                                             alt="property image">
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
                                        <a href="#" class="btn" data-toggle="modal" data-target="#landlord-tenancy">
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
    <!--Landlord tenancy detail modal-->
    <div class="modal right fade tenancy-modal" id="landlord-tenancy" tabindex="-1" role="dialog">
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
                            <h2>Being a landlord has never been easier!</h2>
                            <p>Here you can manage your relationship with the landlord, other housemates, and keep a
                                record
                                of all your important documents.</p>
                        </div>
                        <!--     Tenancy surrender         -->
                        <div class="content-wrap mb-4">
                            <div class="content bg-war">
                                <h2>Tenancy surrender</h2>
                                <p>We've been informed that this tenancy is being surrendered.</p>
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

                                <p>Please note that we do not accept further funds relating to this tenancy. If further
                                    payments were made after we were informed of the surrender, these will be refunded
                                    to the payee.</p>
                                <p>The following parties have agreed to the terms of this surrender:</p>
                                <table class="table">

                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Mark Otto
                                            </div>

                                        </td>
                                        <td>
                                             <span class="send-message">
                                                    <a href="#">Send message</a>
                                               </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Sam Malik
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
                                        <td>
                                             <span class="send-message">
                                                    <a href="#">Send message</a>
                                               </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="name">
                                                Sam Malik
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
                        </div>
                        <div class="content-wrap flex">
                            <div class="div-left">
                                <!--     when contract started                       -->
                                <div class="content">
                                    <div class="info">
                                        <h2>Contract signing not yet complete:</h2>
                                        <p>This contract is not yet in effect. You can click here to review it. Feel
                                            free to
                                            message the landlord below to discuss the specifics of the contract and
                                            request
                                            any changes. </p>
                                    </div>
                                </div>
                                <!--     when contract change  request          -->
                                <div class="content">
                                    <div class="info">
                                        <h2>Contract Change</h2>
                                        <p>You proposed a change for this contract.</p>
                                        <a href="#" class="btn" data-toggle="modal"
                                           data-target="#landlord-change-contract">
                                            View Contract Change
                                        </a>
                                    </div>
                                </div>

                                <!--     when referencing started                       -->
                                <div class="content">
                                    <h3>Congrats! Tenants are currently in the process of completing the Rent Now
                                        process.</h3>
                                    <p class="status">Current Status: Tenants undergoing credit check</p>
                                </div>
                                <!--     when landlord add from contract co-signatory                       -->
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
                                            <td>(Hidden until number verified)</td>
                                            <td>muhammadali@gmail.com</td>

                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                                <div class="tenants content">
                                    <h3>My Tenants</h3>
                                    <table class="table">

                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="name">
                                                    Mark Otto
                                                </div>
                                                oneday2144@gmail.com
                                            </td>
                                            <td>
                                             <span class="send-message">
                                                    <a href="#">Send message</a>
                                               </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="name">
                                                    Sam Malik
                                                </div>
                                                oneday2144@gmail.com
                                            </td>
                                            <td>
                                            <span class="send-message">
                                                    <a href="#">Send message</a>
                                               </span>
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
                                                    Zakk jordan
                                                </div>
                                                oneday2144@gmail.com
                                            </td>
                                            <td>
                                            <span class="send-message">
                                                    <a href="#">Send message</a>
                                               </span>
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
                                        <h6><a href="#">2 Beds Room In A Shared Flat</a></h6>
                                        <p> 99 Huxley Road, London</p>
                                    </div>
                                    <div class="action-btn">
                                        <a href="#" class="btn btn-1">
                                            View Application
                                        </a>
                                        <a href="#" class="btn btn-1">
                                            View Ongoing References Status
                                        </a>
                                        <a href="#" class="btn btn-1">
                                            Modify / Add References
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--     when contract started                       -->
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
                                    <tr>
                                        <td>
                                            Manage Tenancy Documents
                                        </td>
                                        <td>
                                            <a href="#" class="btn-1">See status / download preview</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tenancy-deposit content">
                                <h3>Tenancy Deposit</h3>
                                <p>We are waiting for your contract to be signed by all parties. All that point, we will
                                    request payment of the deposit from the tenants and register it with mydeposits. You
                                    will be given full instructions once the contract is fully signed and payment has
                                    been
                                    received, and we'll notify you when this happens.</p>
                            </div>
                            <div class="first-rent content">
                                <h3>First Month's Rent</h3>
                                <p>We can only transfer the rent balance to your account once you have provided your
                                    short
                                    code and account number.</p>
                                <a href="#">Click here to enter your short code and account number</a>
                            </div>
                            <div class="rent-payment content">
                                <h3>Rent Payments</h3>
                                <p>Rent must be paid to the landlord by the 20th day of each month.</p>
                                <p>We will provide full details of the landlord's account to send rent payments from the
                                    second rent period onwards once the transaction is complete. Untill then, please
                                    continue with the instructions as part of the Rent Now process - Zacoota will
                                    process
                                    the deposit and first month's rent payment.</p>
                            </div>
                            <div class="tenancy-doc content">
                                <h3>Tenancy Documents</h3>
                                <p>If you would like to share important documents such as your EPC and gas safety
                                    certificate, you can upload them here:</p>
                                <a href="#" class="btn-1" data-toggle="modal" data-target="#landlord-tenancy-doc">Manage
                                    Tenancy Documents</a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Landlord tenancy documents modal-->
    <div class="modal right fade tenancy-modal" id="landlord-tenancy-doc" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Tenancy Documents</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="my-tenancies">
                        <div class="head">
                            <p>Here you can share important documents like epc, gas safety certificates with your
                                tenants.</p>
                        </div>
                        <div class="content-wrap flex">
                            <div class="div-left">

                                <div class="content upload-documents">
                                    <h3>Upload Tenancy Document</h3>
                                    <p>Select the certificate and document types, you would like to upload. The uploaded
                                        certificates/documents will be served to your tenants along with the
                                        Contract.</p>
                                    <div class="flex mb-4 uploader">
                                        <ul>
                                            <li>
                                                <div class="wrap">
                                                    EPC
                                                </div>
                                            </li>
                                            <li>Gas Safety Certificate</li>
                                            <li>Inventory Report</li>
                                            <li>Check-in Report</li>
                                            <li>Electrical Installation<br> Condition Report (EICR)</li>
                                            <li>Portable Appliance<br>Testing Report (PAT)</li>
                                        </ul>
                                        <input type="file" class="form-control-file doc-upload"
                                               id="exampleFormControlFile1">
                                    </div>
                                </div>
                                <div class="content show-documents">
                                    <h3>Documents</h3>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="check-all">
                                                </div>
                                            </th>
                                            <th>Type</th>
                                            <th>Date</th>
                                            <th>File Name</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="service-1">
                                                </div>
                                            </td>
                                            <td>
                                                <span>EPC</span>
                                            </td>
                                            <td>03/02/2021</td>
                                            <td>154394_P184485_EPCGRAPH_01_0000.jpg</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="service-2">
                                                </div>
                                            </td>
                                            <td>
                                                <span>Gas Safety Certificate</span>
                                            </td>
                                            <td>05/02/2021</td>
                                            <td>154394_P184485_EPCGRAPH_01_0000.jpg</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="action-btn">
                                        <a href="javascript:void (0)" class="download">download</a>
                                        <a href="javascript:void (0)" class="remove btn-3">remove</a>
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
                                        <h6><a href="#">2 Beds Room In A Shared Flat</a></h6>
                                        <p> 99 Huxley Road, London</p>
                                    </div>


                                </div>
                            </div>

                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--Contract Change modal-->
    <div class="modal right fade tenancy-modal " id="landlord-change-contract" tabindex="-1" role="dialog">
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
                                <div class="content change-option border-0">
                                    <h3>Contract Change</h3>
                                    <p>Given a legally binding contract has been signed, the lead tenant will need to
                                        agree to the change proposed, and any other tenants/guarantors will also be
                                        notified about the requested change.</p>
                                    <p>You should also consider the following:</p>
                                    <ul>
                                        <li>You may wish to consider signing a surrender to annul the original signed
                                            contract, to avoid potential future confusion from having multiple contracts
                                            in force. We provide guidance on this <a
                                                    href="/kb/articles/360019667452-how-do-i-cancel-a-signed-tenancy">here</a>.
                                        </li>
                                        <li>
                                            Proposing a contract change is not the same as cancelling. If you are trying
                                            to cancel this tenancy please
                                            <a href="/tenancysurrender/tenancysurrenderfromcontractpage/1013754">click
                                                here</a>.
                                        </li>
                                    </ul>
                                    <p>Once the lead tenant agrees, the contract will be reset and you can apply the
                                        changes needed, so that everyone can sign the updated contract.</p>
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
                                            Message Tenant
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="content-wrap mt-4">
                            <!--                          proposed  -->
                            <div class="content propose-changes ">
                                <p>The following contract change has been proposed to all parties:</p>
                                <h3>Contract Change to propose to Tenants:</h3>
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                    <a href="javascript:void(0)" class="propose-btn btn-3">Propose Contract Change</a>
                                </form>
                                <p>Currently awaiting confirmation from Johan Joe that they agree to this change.</p>
                                <p>Once they confirm, we will notify you by email. You will then be able to make the
                                    required change by returning to this page</p>
                                <a href="javascript:void(0)" class="cancel-btn btn-3">cancel Contract Change</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script>
        $("#check-all").click(function () {
            $('.tenancy-modal .show-documents input:checkbox').not(this).prop('checked', this.checked);
        });
        $(".doc-upload-btn").onclick = "$('.doc-upload').click()";
    </script>

<?php
include('footer-search.php');
?>