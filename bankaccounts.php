<?php
include('header-account.php');
?>

<div id="dashboard" style="padding-top: 80px;" xmlns:javascript="http://www.w3.org/1999/xhtml">

    <!-- Navigation
    ================================================== -->


    <div class="dashboard-nav">
        <div class="dashboard-nav-inner" style="max-height: 545px;">

            <ul data-submenu-title="Main">

                <li class=""><a href="dashboard.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>


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
    <div class="dashboard-content" id="post-45">
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="row">
                <div class="col-md-12">
                    <h1>Manage Bank Accounts</h1>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li>Bank Accounts</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">

            <!-- Manage Bank Accounts -->
            <div class="col-lg-12 col-md-12 manage-bank-accounts">
                <p>Here you can manage the bank accounts you have registered with us and select the primary bank account
                    to be used for outstanding and future payments.</p>
                <p>Some of our services, such as rent payments, may not be available until we have received your payment
                    details.</p>
                <p>If required we will also pass the bank account information to the tenants once the tenancy is set-up,
                    and ask them to pay their rent into this account. Please confirm this with your tenants, and if you
                    would prefer them to pay by other means - just let them know directly.</p>
                <div class="info">
                    <p>You don't have any bank accounts registered with us at this moment.</p>
                </div>

                <!--                <div class="add-bank">-->
                <!--                    <h2>Add Bank Accounts</h2>-->
                <!--                    <a class="btn" data-toggle="modal" data-target="#add-bank">-->
                <!--                        <i class="fa fa-plus-square" aria-hidden="true"></i><br>-->
                <!--                        Add New Bank Account-->
                <!--                    </a>-->
                <!--                </div>-->
                <div class="bank-list">
                    <div class="row">
                        <div class="col-6">
                            <h2>Bank Accounts</h2>
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn" data-toggle="modal" data-target="#add-bank"> Add Account</button>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="account-card mt-4" data-toggle="modal" data-target="#bank_details">
                                <div class="row no-gutters align-items-center h-100">
                                    <div class="col-3 mx-auto">
                                        <div class="bank-icon">
                                            <img loading="lazy" src="assets/images/bank-icon.png" class="img-fluid" alt="Bank Icon">
                                        </div>
                                    </div>
                                    <div class="col-9 border-left">
                                        <div class="details">
                                            <p>HSBC Bank</p>
                                            <p>Sam malik (Current)</p>
                                            <p>66374958 | 08-99-99</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- add new bank -->
    <div class="modal fade custom-modal add-bank" id="add-bank" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Add A New Bank Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="warn">
                        <p>Please enter a valid sort code and account number combination, Please enter a valid sort code
                            and
                            account number combination</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <span>Account Name</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <span>Account Holder Name</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <span>Bank Name</span>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <span>Sort Code</span>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <span>Account Number</span>
                            <input type="number" class="form-control">
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn save-bank">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--bank details modal-->
    <div class="modal right fade tenancy-modal" id="bank_details" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Bank Account Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="account-details">

                        <div class="content-wrap">
                            <div class="content">
                                <div class="account-card mt-4">
                                    <div class="row no-gutters">
                                        <div class="col-3 bg-gray">
                                            <div class="bank-icon">
                                                <img loading="lazy" src="assets/images/bank-icon.png" class="img-fluid" alt="Bank Icon">
                                            </div>
                                        </div>
                                        <div class="col-9">
                                            <div class="details">
                                                <p>HSBC Bank</p>
                                                <p>Sam Malik (Current)</p>
                                                <p>66374958 | 08-99-99</p>
                                                <div class="action-btn">
                                                    <div class=" flex">
                                                        <a href="javascript:void(0)" class="btn-3">Delete</a>
                                                        <a href="javascript:void(0)"  class="btn-1 eidt">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="edit-details" style="display: none">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <span>Account Name</span>
                                                                <input type="text" class="form-control" value="Current">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <span>Account Holder Name</span>
                                                                <input type="text" class="form-control"
                                                                       value="Sam malik">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <span>Bank Name</span>
                                                                <input type="text" class="form-control"
                                                                       value="HSBC Bank">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <span>Sort Code</span>
                                                                <input type="number" class="form-control"
                                                                       value="08-99-99">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <span>Account Number</span>
                                                                <input type="number" class="form-control"
                                                                       value="66374958">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action-btn">
                                                        <a href="javascript:void(0)" type="submit" class="btn-4 update">Update</a>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="content-wrap mt-4">
                            <div class="content">
                                <div class="att-properties">
                                    <h2>Properties</h2>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Property Address</th>
                                            <th>Connect</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img loading="lazy" src="assets/images/listing-item-02.png" class="img-fluid" alt="Property image">
                                            </td>
                                            <td>
                                                <span class="badge badge-warning">This property connected with Current bank </span><br>
                                                <a href="#">
                                                    Room in a Shared House, Sewell Road, BD3
                                                </a>
                                            </td>
                                            <td>
                                                <div class="referencing-switch">
                                                    <input type="checkbox" id="switch" ><label for="switch"></label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <img loading="lazy" src="assets/images/listing-item-02.png" class="img-fluid" alt="Property image">
                                            </td>
                                            <td>
                                                <a href="#">
                                                    Room in a Shared House, Sewell Road, BD3
                                                </a>
                                            </td>
                                            <td>
                                                <div class="referencing-switch">
                                                    <input type="checkbox" id="switch-2" checked=""><label for="switch"></label>
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- change bank -->
    <div class="modal fade custom-modal add-bank " id="change-bank" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4>Confirm change Bank Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                   <p>Please confirm that you are changing <b>Current</b> bank to <b>rent account</b> bank. </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn save-bank">Save</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".account-details a.eidt").click(function () {
            $('.account-details .account-card .details').hide();
            $('.account-details .account-card .edit-details').show();
        });
        $(".account-details a.update").click(function () {
            $('.account-details .account-card .details').show();
            $('.account-details .account-card .edit-details').hide();
        });
    </script>

    <?php
    include('footer-search.php');
    ?>
